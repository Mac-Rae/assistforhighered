<?php
#require_once 'custom/include/MCCD/lib/aws.phar';
class MCCDRDSClient{
    private $client;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(){
        global $sugar_config;
        $this->client = new \Aws\RDSDataService\RDSDataServiceClient([
            'version' => $sugar_config['mccd_athena']['api_version'],
            'region' => $sugar_config['mccd_athena']['region'],
            //'debug'   => true,
            'credentials' => [
                'key' => $sugar_config['mccd_athena']['key'],
                'secret' => $sugar_config['mccd_athena']['secret'],
            ]
        ]);
    }

    /**
     * @param $results
     * @return Generator
     */
    private function processResults($results){
        $fieldTypes = [];
        $header = [];
        foreach($results->get('columnMetadata') as $key => $row){
            $fieldTypes[$key] = $row['typeName'];
            $header[$key] = $row['name'];
        }
        foreach($results->get('records') as $row){
            $item = [];
            foreach($row as $key => $val){
                if(!array_key_exists('stringValue',$val)){
                    $item[$header[$key]] = '';
                    continue;
                }
                $item[$header[$key]] = $val['stringValue'];
            }
            yield $item;

        }
    }

    /**
     * @param $query
     * @return Generator
     * @throws Exception
     */
    public function runQuery($query,$params=[]){
        global $sugar_config;
        $parameters = [];
        foreach($params as $name => $val){
            $parameters[] = [
                'name' => $name,
                'value' => ['stringValue' => (string)$val]
            ];
        }
        $callArgs = [
            'database' => $sugar_config['mccd_athena']['database'],
            'sql' => $query,
            'parameters' => $parameters,
            'includeResultMetadata' => true,
            'resourceArn' => $sugar_config['mccd_athena']['resource_arn'],
            'secretArn' => $sugar_config['mccd_athena']['secret_arn'],
        ];
        $result = $this->client->executeStatement($callArgs);
        return $this->processResults($result);
    }

}
