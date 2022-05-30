<?php

class ASSISTMySQLClient{
    private $client;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(){
        global $sugar_config;
        $dsn = "mysql:host=".$sugar_config['assist_athena']['db_host']."; ";
        $dsn.= "port=".$sugar_config['assist_athena']['db_port']."; ";
        $dsn.= "dbname=".$sugar_config['assist_athena']['db_schema'];
        $this->client = new \PDO(
            $dsn,
            $sugar_config['assist_athena']['db_user'],
            $sugar_config['assist_athena']['db_pwd']
        );
    }

    /**
     * @param $results
     * @return Generator
     */
    private function processResults($results){
        $fieldTypes = [];
        $header = [];
        foreach(range(0, $results->columnCount() - 1) as $key)
        {
            $metadata = $results->getColumnMeta($key);
            $fieldTypes[$key] = $metadata['native_type'];
            $header[$key] = $metadata['name'];
        }

        while($row = $results->fetch(PDO::FETCH_NUM))
        {
            $item = [];
            foreach($row as $key => $val)
            {
                $item[$header[$key]] = $val;
            }
            yield $item;
        }
    }

    /**
     * @param $query
     * @return Generator
     * @throws Exception
     */
    public function runQuery($query){
        global $sugar_config;
        $result = $this->client->query($query);
        return $this->processResults($result);
    }

}
