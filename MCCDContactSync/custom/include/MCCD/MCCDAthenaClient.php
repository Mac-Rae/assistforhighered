<?php
#require_once 'custom/include/MCCD/lib/aws.phar';
class MCCDAthenaClient{
    private $client;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(){
        global $sugar_config;
        $this->client = new \Aws\Athena\AthenaClient([
            'version' => $sugar_config['mccd_athena']['api_version_athena'],
            'region' => $sugar_config['mccd_athena']['region'],
            //'debug'   => true,
            'credentials' => [
                'key' => $sugar_config['mccd_athena']['key'],
                'secret' => $sugar_config['mccd_athena']['secret'],
            ]
        ]);
    }

    private function processResults($queryId, $results, $header=false){
        foreach($results->get('ResultSet')['Rows'] as $row){
            if(empty($header)){
                foreach($row['Data'] as $key => $val){
                    if(!empty($val['VarCharValue'])) {
                        $header[$key] = $val['VarCharValue'];
                    }else{
                        $header[$key] = '';
                    }
                }
                continue;
            }
            $item = [];
            foreach($row['Data'] as $key => $val){
                if(!array_key_exists('VarCharValue',$val)){
                    continue;
                }
                $item[$header[$key]] = $val['VarCharValue'];
            }
            yield $item;

        }
        if($results->get('NextToken')){
            $next = $this->processResults($queryId,$this->client->getQueryResults([
                'QueryExecutionId' => $queryId,
                'NextToken' => $results->get('NextToken')
            ]),$header);
            foreach($next as $nextItem){
                yield $nextItem;
            }
        }
    }

    public function runQuery($query){
        global $sugar_config;
        $result = $this->client->startQueryExecution([
            'QueryString' => $query,
            'QueryExecutionContext' => [
                'Catalog' => $sugar_config['mccd_athena']['athena_catalog'],
                'Database' => $sugar_config['mccd_athena']['athena_database'],
            ],
            'ResultConfiguration' => [
                'OutputLocation' => $sugar_config['mccd_athena']['athena_query_output']
            ]

        ]);
        $queryId = $result->get('QueryExecutionId');
        while (true) {
            $res = $this->client->getQueryExecution([
                    'QueryExecutionId' => $queryId]
            );

            switch ($res->get('QueryExecution')['Status']['State']) {
                case 'SUCCEEDED':
                    return $this->processResults($queryId,$this->client->getQueryResults([
                        'QueryExecutionId' => $queryId]));
                case 'FAILED':
                case 'CANCELLED':
                    throw new Exception("Failed to query Athena [".$res->get('QueryExecution')['Status']['StateChangeReason']."]");
                default:
                    break;
            }
            usleep(1 * 1000000);//Sleep for 1 second
        }
    }

}
