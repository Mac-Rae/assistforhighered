<?php

use SuiteCRM\Search\SearchQuery;
use SuiteCRM\Search\UI\MVC\Controller;
require_once 'custom/lib/Search/UI/CustomSearchFormView.php';

class CustomSearchFormController extends Controller
{
    private $query;

    /**
     * SearchFormController constructor.
     *
     * @param SearchQuery $query
     */
    public function __construct($query)
    {
        parent::__construct(new CustomSearchFormView());
        $this->query = $query;
    }

    public function display(): void
    {
        $this->view->getTemplate()->assign('searchQueryString', htmlspecialchars($this->query->getSearchString(), ENT_COMPAT | ENT_XHTML, 'UTF-8'));
        $this->view->getTemplate()->assign('searchQuerySize', $this->query->getSize());
        $this->view->getTemplate()->assign('searchTotalMax', $this->query->getOption('search-total-max'));
        $this->view->getTemplate()->assign('searchQueryFrom', $this->query->getFrom());
        $this->view->getTemplate()->assign('searchQueryEngine', $this->query->getEngine());
        $this->view->getTemplate()->assign('selectedModules', $this->query->getOption('enable_modules'));

        parent::display();
    }
}