<?php
/**
 * Search Filter Object
 *
 * @package RescueGroups
 * @subpackage Request
 * @author Eric
 */
namespace RescueGroups\Request\Search;

class Filter
{
    /**
     * @var string
     */
    private $fieldName;

    /**
     * @var string
     */
    private $operation = 'equals';

    /**
     * @var string
     */
    private $criteria;

    /**
     * @var array
     */
    private $validOperations = [
        'equals' => 1,
        'radius' => 1,
        'notequals' => 1,
        'lessthan' => 1,
        'lessthanorequal' => 1,
        'lessthanorequals' => 1,
        'greaterthan' => 1,
        'greaterthanorequal' => 1,
        'greaterthanorequals' => 1,
        'contains' => 1,
        'notcontain' => 1,
        'blank' => 1,
        'notblank' => 1
    ];

    /**
     * Filter constructor.
     * @param $fieldName
     * @param $operation
     * @param $criteria
     */
    public function __construct($fieldName, $operation, $criteria)
    {
        $this->fieldName = $fieldName;
        $this->operation = strtolower($operation);
        $this->criteria = $criteria;

        if (empty($this->validOperations[$this->operation]))
        {
            throw new \RescueGroups\Exceptions\InvalidParameter();
        }
    }

    /**
     * Get filter for processing
     *
     * @return array
     */
    public function getFilter()
    {
        return [
            'fieldName' => $this->fieldName,
            'operation' => $this->operation,
            'criteria' => $this->criteria
        ];
    }
}