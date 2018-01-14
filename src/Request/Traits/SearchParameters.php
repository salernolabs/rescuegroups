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
     * @var \RescueGroups\Request\Search\Filter[]
     */
    private $filters = [];

    /**
     * @var string
     */
    private $filterProcessing;

    /**
     * @var bool
     */
    private $calculateFoundRows = false;

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
     * Set calculate found rows
     *
     * @param $calcFoundRows
     * @return $this
     */
    public function setCalculateFoundRows($calcFoundRows)
    {
        $this->calculateFoundRows = $calcFoundRows;

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
        if (empty($this->objectFields) || !isset($this->objectFields[$field]))
        {
            throw new \RescueGroups\Exceptions\InvalidParameter();
        }

        $filter = new \RescueGroups\Request\Search\Filter($this->objectFields[$field][1], $operation, $criteria);

        $this->filters[] = $filter;

        return $this;
    }

    /**
     * Add field to query
     *
     * @param $fieldName
     * @return $this
     * @throws \RescueGroups\Exceptions\InvalidParameter
     */
    public function addField($fieldName)
    {
        if (!isset($this->objectFields[$fieldName]))
        {
            throw new \RescueGroups\Exceptions\InvalidParameter();
        }

        $this->objectFields[$fieldName][0] = true;

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

        if (!empty($this->calculateFoundRows))
        {
            $parameters['search']->calcFoundRows = 'Yes';
        }
        else
        {
            $parameters['search']->calcFoundRows = 'No';
        }

        $parameters['search']->filters = [];
        $parameters['search']->fields = [];

        if (!empty($this->filters))
        {
            $filterList = [];
            foreach ($this->filters as $filter)
            {
                $filterList[] = $filter->getFilter();
            }

            $parameters['search']->filters = $filterList;
        }

        if (!empty($this->objectFields))
        {
            $fieldList = [];
            foreach ($this->objectFields as $filterName => $data)
            {
                if ($data[0]) $fieldList[] = $data[1];
            }
            if (!empty($fieldList)) $parameters['search']->fields = $fieldList;
        }

        if (!empty($this->filterProcessing)) $parameters['filterProcessing'] = $this->filterProcessing;
    }

}