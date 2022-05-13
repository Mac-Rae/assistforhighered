<?php
#require_once 'custom/include/MCCD/lib/aws.phar';
use Aws\Connect\ConnectClient;

class ContactCenterSyncService
{

    public function getClient()
    {
        global $sugar_config;
        if(empty($sugar_config['contact_center_aws_key'])){
            return false;
        }
        if(empty($sugar_config['contact_center_aws_secret'])){
            return false;
        }
        $connectClient = new ConnectClient([
            'version' => '2017-08-08',
            'region' => $sugar_config['contact_center_aws_region'],
            //'debug'   => true,
            'credentials' => [
                'key' => $sugar_config['contact_center_aws_key'],
                'secret' => $sugar_config['contact_center_aws_secret'],
            ],
        ]);

        return $connectClient;
    }

    public function getQueues($instanceId)
    {
        if(empty($instanceId)){
            return [];
        }
        $client = $this->getClient();
        if(empty($client)){
            return [];
        }
        $ret = [];
        try{
            $queues = $client->listQueues(
                [
                    'InstanceId' => $instanceId,
                    'QueueTypes' => ['STANDARD'],
                ]
            );
            if ($queues->count() < 1) {
                return [];
            }

            foreach ($queues->toArray()['QueueSummaryList'] as $queue) {
                $ret[] = [
                    'name' => !empty($queue['Name']) ? $queue['Name'] : $queue['Arn'],
                    'id' => $queue['Id'],
                ];
            }

        }catch(Exception $ex){
            $GLOBALS['log']->fatal(__FILE__ .":".__FUNCTION__." - Error Calling AWS ".$ex->getMessage());
        }
        return $ret;
    }

    private function getCurrentStats($instanceId,$filters,$client,$queueNames){
        $currentArgs = [
            'InstanceId' => $instanceId,
            'Groupings' => ['QUEUE'],
            'CurrentMetrics' => [
                [
                    'Name' => 'AGENTS_ONLINE',
                    'Unit' => 'COUNT',
                ],
                [
                    'Name' => 'AGENTS_ON_CONTACT',
                    'Unit' => 'COUNT',
                ],
                [
                    'Name' => 'AGENTS_AVAILABLE',
                    'Unit' => 'COUNT',
                ],
                [
                    'Name' => 'SLOTS_ACTIVE',
                    'Unit' => 'COUNT',
                ],
                [
                    'Name' => 'CONTACTS_IN_QUEUE',
                    'Unit' => 'COUNT',
                ],
                [
                    'Name' => 'OLDEST_CONTACT_AGE',
                    'Unit' => 'SECONDS',
                ],
                [
                    'Name' => 'CONTACTS_SCHEDULED',
                    'Unit' => 'COUNT',
                ]

            ],
            'Filters' => $filters,
        ];
        $stats = [];
        $result = $client->getCurrentMetricData($currentArgs);
        foreach ($result['MetricResults'] as $k => $resultCollection) {
            $queue = $resultCollection['Dimensions']['Queue']['Id'];
            if (empty($stats[$queue])) {
                $stats[$queue] = [
                    'queue' => $queueNames[$queue]
                ];
            }
            foreach ($resultCollection['Collections'] as $item) {

                $stats[$queue][$item['Metric']['Name']] = $item['Value'];
            }
        }
        $currentArgs['Groupings'] = ['QUEUE','CHANNEL'];
        $result = $client->getCurrentMetricData($currentArgs);
        foreach ($result['MetricResults'] as $k => $resultCollection) {
            $queue = $resultCollection['Dimensions']['Queue']['Id'];
            $channel = $resultCollection['Dimensions']['Channel'];
            if (empty($stats[$queue])) {
                $stats[$queue] = [
                    'queue' => $queueNames[$queue]
                ];
            }
            foreach ($resultCollection['Collections'] as $item) {

                $stats[$queue][$item['Metric']['Name']."_".$channel] = $item['Value'];
            }
        }
        return $stats;
    }

    public function getAgents(SA_ContactCenter $cc){
        if(empty($cc->instance_id)){
            return [];
        }
        $users = [];
        try {
            $client = $this->getClient();
            if(empty($client)){
                return [];
            }

            $awsUsers = $client->listUsers(['InstanceId' => $cc->instance_id]);
            foreach($awsUsers['UserSummaryList'] as $awsUser){
                $userInfo = $client->describeUser(['InstanceId' => $cc->instance_id, 'UserId' => $awsUser['Id']]);
                $users[] = ['name' => $awsUser['Username'], 'email' => $userInfo['IdentityInfo']['Emails']];
            }
        } catch (Exception $ex) {
            $GLOBALS['log']->fatal(__FILE__ .":".__FUNCTION__." - Error Calling AWS ".$ex->getMessage());
        }
        return $users;
    }

    public function getStats(SA_ContactCenter $cc)
    {
        if(empty($cc->instance_id)){
            return [];
        }
        $stats = [];
        try {
            $client = $this->getClient();
            if(empty($client)){
                return [];
            }

            $filters = [
                'Channels' => ["VOICE","CHAT","TASK"],
                'Queues' => unencodeMultienum($cc->queues),
            ];

            $instanceId = $cc->instance_id;

            $queues = $this->getQueues($instanceId);
            $queueNames = [];
            foreach ($queues as $q) {
                $queueNames[$q['id']] = $q['name'];
            }

            $stats = $this->getCurrentStats($instanceId,$filters,$client,$queueNames);

            $dates = $this->getHistoricTimeframe();
            $metricArgs = [
                'StartTime' => $dates['StartTime'],
                'EndTime' => $dates['EndTime'],
                'Groupings' => ['QUEUE'],
                'Filters' => $filters,
                'InstanceId' => $instanceId,
                'HistoricalMetrics' => [
                    [
                        'Name' => 'CONTACTS_HANDLED',
                        'Statistic' => 'SUM',
                        'Unit' => 'COUNT',
                    ],
                    [
                        'Name' => 'HANDLE_TIME',
                        'Statistic' => 'AVG',
                        'Unit' => 'SECONDS',
                    ],
                    [
                        'Name' => 'CONTACTS_ABANDONED',
                        'Statistic' => 'SUM',
                        'Unit' => 'COUNT',
                    ],
                    [
                        'Name' => 'CALLBACK_CONTACTS_HANDLED',
                        'Statistic' => 'SUM',
                        'Unit' => 'COUNT',
                    ],

                ],
            ];

            $result = $client->getMetricData($metricArgs);

            foreach ($result['MetricResults'] as $k => $resultCollection) {
                $queue = $resultCollection['Dimensions']['Queue']['Id'];
                if (empty($stats[$queue])) {
                    $stats[$queue] = [
                        'queue' => $queueNames[$queue]
                    ];
                }
                foreach ($resultCollection['Collections'] as $item) {

                    $stats[$queue][$item['Metric']['Name']] = $item['Value'];
                }
            }
        } catch (Exception $ex) {
            $GLOBALS['log']->fatal(__FILE__ .":".__FUNCTION__." - Error Calling AWS ".$ex->getMessage());
        }
        return $stats;
    }

    private function getHistoricTimeframe()
    {
        $hoursAgo = 2;
        $endDate = floor(time() / 300) * 300;
        $endDate = (int)$endDate;
        $startDate = $endDate - ($hoursAgo*60*60);
        return [
            'StartTime' => $startDate,
            'EndTime' => $endDate,
        ];
    }

}
