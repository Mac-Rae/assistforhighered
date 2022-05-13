<?php

use SuiteCRM\Search\Exceptions\SearchException;

class CustomSearchResultsController extends \SuiteCRM\Search\UI\SearchResultsController{
    public function display(): void
    {
        $headers = $this->getListViewHeaders();

        $total = $this->getResults()->getTotal();
        if ($total > 1) {
            $size = $this->getQuery()->getSize();
            if ($size) {
                $from = $this->getQuery()->getFrom();
                $string = $this->getQuery()->getSearchString();

                $page = (int)($from / $size) + 1;
                $prev = $page > 1;
                $next = $total - $from > $size;
                $last = (int)($total / $size) + ($total%$size === 0 ? 0 : 1);

                $this->view->getTemplate()->assign('pagination', [
                    'prev' => $prev,
                    'next' => $next,
                    'page' => $page,
                    'last' => $last,
                    'size' => $size,
                    'from' => $from,
                    'total' => $total,
                    'string' => $string,
                    'sizeMax' => $this->getQuery()->getOption('search-total-max')
                ]);
            } else {
                throw new SearchException('Search Size can not be Zero.', SearchException::ZERO_SIZE);
            }
        }
        $this->view->getTemplate()->assign('total', $total);

        $this->view->getTemplate()->assign('headers', $headers);
        $this->view->getTemplate()->assign('results', $this->getResults());
        $this->view->getTemplate()->assign('resultsAsBean', $this->getResults()->getHitsAsBeans());

        parent::display();
    }
}