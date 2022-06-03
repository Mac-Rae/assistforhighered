<?php

use SuiteCRM\Search\SearchWrapper;
use SuiteCRM\Search\UI\MVC\View;
use SuiteCRM\Utility\StringUtils;

class CustomSearchFormView extends \SuiteCRM\Search\UI\SearchFormView{
    public function __construct()
    {
        View::__construct(get_custom_file_if_exists(__DIR__ . '/templates/search.form.tpl'));
    }

    /** @inheritdoc */
    public function display(): void
    {
        global $sugar_config, $app_list_strings;

        $sizes = $this->makeSizesFromConfig();
        $engines = [];

        foreach (SearchWrapper::getEngines() as $engine) {
            $engines[$engine] = StringUtils::camelToTranslation($engine);
        }

        if ($sugar_config['search']['ElasticSearch']['enabled'] === false) {
            unset($engines['ElasticSearchEngine']);
        }

        $currentEngine = SearchWrapper::getDefaultEngine();

        if ($currentEngine === 'BasicSearchEngine' || $currentEngine === 'ElasticSearchEngine' || $currentEngine === 'CustomElasticSearchEngine') {
            $engines = [];
        }

        $this->smarty->assign('sizeOptions', $sizes);

        $totalSizes = $sugar_config['assist_search_total_options'];
        $this->smarty->assign('totalSizeOptions', $totalSizes);

        $this->smarty->assign('engineOptions', $engines);
        $moduleList = [];
        foreach(SearchWrapper::getModules() as $modName){
            $moduleList[$modName] = $app_list_strings['moduleList'][$modName];
        }
        $this->smarty->assign('module_list', $moduleList);
        View::display();
    }

}