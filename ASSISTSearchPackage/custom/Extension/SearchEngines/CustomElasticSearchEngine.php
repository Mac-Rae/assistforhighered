<?php
require_once 'lib/Search/ElasticSearch/ElasticSearchEngine.php';
require_once 'custom/lib/Search/UI/CustomSearchFormController.php';
require_once 'custom/lib/Search/UI/CustomSearchResultsController.php';

use SuiteCRM\Search\SearchQuery;

use SuiteCRM\Search\ElasticSearch\ElasticSearchClientBuilder;
use SuiteCRM\Search\SearchResults;
use SuiteCRM\Search\SearchWrapper;


class CustomElasticSearchEngine extends SuiteCRM\Search\ElasticSearch\ElasticSearchEngine
{
    /** @var Client */
    private $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?? ElasticSearchClientBuilder::getClient();
    }
    public function displayForm(SearchQuery $query): void
    {
        $controller = new CustomSearchFormController($query);
        $controller->display();
    }

    public function displayResults(SearchQuery $query, SearchResults $results): void
    {
        $controller = new CustomSearchResultsController($query, $results);
        $controller->display();
    }

    /**
     * @inheritdoc
     */
    public function search(SearchQuery $query): SearchResults
    {
        $this->validateQuery($query);
        $params = $this->createSearchParams($query);
        $start = microtime(true);
        $hits = $this->runElasticSearch($params);
        $results = $this->parseHits($hits);
        $end = microtime(true);
        $searchTime = ($end - $start);
        $searchMax = $query->getOption('search-total-max') ? $query->getOption('search-total-max') : 10;
        $total = min($hits['hits']['total']['value'], $searchMax);
        return new SearchResults($results, true, $searchTime, $total);
    }

    private function parseHits(array $hits): array
    {
        $hitsArray = $hits['hits']['hits'];

        $initialResults = [];

        foreach ($hitsArray as $hit) {
            $recordModule = $hit['_index'];
            $initialResults[$recordModule][] = $hit['_id'];
        }

        $searchResults = [];

        foreach ($initialResults as $index => $hit) {
            $params = ['index' => $index];
            $meta = $this->client->indices()->getMapping($params);
            $moduleName = $meta[$index]['mappings']['_meta']['module_name'];
            $searchResults[$moduleName] = $hit;
        }

        return $searchResults;
    }

    /**
     * Generates the parameter array for the Elasticsearch API from a SearchQuery.
     *
     * @param SearchQuery $query
     *
     * @return array
     */
    private function createSearchParams(SearchQuery $query): array
    {
        $searchStr = $query->getSearchString();
        $searchModules = SearchWrapper::getModules();
        $indexes = implode(',', array_map('strtolower', $searchModules));

        // Wildcard character required for Elasticsearch
        $wildcardBe = "*";

        // Override frontend wildcard character
        if (isset($GLOBALS['sugar_config']['search_wildcard_char'])) {
            $wildcardFe = $GLOBALS['sugar_config']['search_wildcard_char'];
            if ($wildcardFe !== $wildcardBe && strlen($wildcardFe) === 1) {
                $searchStr = str_replace($wildcardFe, $wildcardBe, $searchStr);
            }
        }

        // Add wildcard at the beginning of the search string
        if (isset($GLOBALS['sugar_config']['search_wildcard_infront']) &&
            $GLOBALS['sugar_config']['search_wildcard_infront'] === true && $searchStr[0] !== $wildcardBe) {
            $searchStr = $wildcardBe . $searchStr;
        }

        // Add wildcard at the end of search string
        if ((!substr_compare($searchStr, $wildcardBe, -strlen($wildcardBe))) === 0) {
            $searchStr .= $wildcardBe;
        }
        $enabledModules = $query->getOption('enable_modules');
        if($enabledModules){
            $q = [
                'index' => $indexes,
                'body' => [
                    'stored_fields' => [],
                    'from' => $query->getFrom(),
                    'size' => $query->getSize(),
                    'query' => [
                        'bool' => [
                            'must' => [
                                'query_string' => [
                                    'query' => $searchStr,
                                    'fields' => ['name.*^5', '_all'],
                                    'analyzer' => 'standard',
                                    'default_operator' => 'OR',
                                    'minimum_should_match' => '66%',
                                ],
                            ],
                            'filter' => [
                                [
                                    'terms' => ['_type'=>$enabledModules],
                                ]
                            ],
                        ]
                    ],
                ],
            ];
        }else {
            $q = [
                'index' => $indexes,
                'body' => [
                    'stored_fields' => [],
                    'from' => $query->getFrom(),
                    'size' => $query->getSize(),
                    'query' => [
                        'query_string' => [
                            'query' => $searchStr,
                            'fields' => ['name.*^5', '_all'],
                            'analyzer' => 'standard',
                            'default_operator' => 'OR',
                            'minimum_should_match' => '66%',
                        ],
                    ],
                ],
            ];
        }
        return $q;
    }

    /**
     * Calls the Elasticsearch API.
     *
     * @param array $params
     *
     * @return array
     */
    private function runElasticSearch(array $params): array
    {
        return $this->client->search($params);
    }


}