<?php
/**
 * RescueGroups Search Request Parameters Trait
 *
 * @package RescueGroups
 * @subpackage Request
 * @author Eric
 */
namespace RescueGroups\Request\Traits;

trait SearchParameters
{
    /**
     * @var int
     */
    private $resultStart = 0;

    /**
     * @var int
     */
    private $resultLimit = 10;

    /**
     * @var null
     */
    private $resultSort = null;

    /**
     * @var string
     */
    private $resultOrder = 'asc';

    /**
     * @var array
     */
    private $filters = [];

    /**
     * @var string[]
     */
    private $fields = [];

    /**
     * Set result start
     *
     * @param $resultStart
     * @return $this
     */
    public function setResultStart($resultStart)
    {
        $this->resultStart = $resultStart;

        return $this;
    }

    /**
     * Set result limit
     *
     * @param $resultLimit
     * @return $this
     */
    public function setResultLimit($resultLimit)
    {
        $this->resultLimit = $resultLimit;

        return $this;
    }

    /**
     * Set result sort
     *
     * @param $sortField
     * @return $this
     */
    public function setResultSort($sortField)
    {
        $this->resultSort = $sortField;

        return $this;
    }

    /**
     * Set result order
     *
     * @param $resultOrder
     * @return $this
     */
    public function setResultOrder($resultOrder)
    {
        $this->resultOrder = $resultOrder;

        return $this;
    }

    /**
     * Add a filter
     *
     * @param $field
     * @param $operation
     * @param $criteria
     * @return $this
     */
    public function addFilter($field, $operation, $criteria)
    {
        $filter = new \stdClass();
        $filter->fieldName = $field;
        $filter->operation = $operation;
        $filter->criteria = $criteria;

        $this->filters[] = $filter;

        return $this;
    }

    /**
     * Add a field
     *
     * @param $field
     * @return $this
     */
    public function addField($field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * Add search parameters
     *
     * @param $parameters
     */
    private function addSearchParameters(&$parameters)
    {
        $parameters['search'] = new \stdClass();

        if (!empty($this->resultStart)) $parameters['search']->resultStart = $this->resultStart;
        if (!empty($this->resultLimit)) $parameters['search']->resultLimit = $this->resultLimit;
        if (!empty($this->resultSort)) $parameters['search']->resultSort = $this->resultSort;
        if (!empty($this->resultOrder)) $parameters['search']->resultOrder = $this->resultOrder;
        if (!empty($this->filters)) $parameters['search']->filters = $this->filters;
        if (!empty($this->fields)) $parameters['search']->fields = $this->fields;
    }

}