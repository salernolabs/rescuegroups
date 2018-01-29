<?php
/**
 * InventoryLoaner Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class InventoryLoaner implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Item
     *
     * @var integer
     */
    public $itemId = null;

    /**
     * Loan Date
     *
     * @var \DateTime
     */
    public $loanDate = null;

    /**
     * Loan Condition
     *
     * @var integer
     */
    public $loanConditionId = null;

    /**
     * Due Date
     *
     * @var \DateTime
     */
    public $dueDate = null;

    /**
     * Return Date
     *
     * @var \DateTime
     */
    public $returnDate = null;

    /**
     * Return Condition
     *
     * @var integer
     */
    public $returnConditionId = null;

    /**
     * Notes
     *
     * @var string
     */
    public $notes = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'inventoryLoanerID' => 'id',
            'inventoryLoanerItemID' => 'itemId',
            'inventoryLoanerLoanDate' => 'loanDate',
            'inventoryLoanerLoanConditionID' => 'loanConditionId',
            'inventoryLoanerDueDate' => 'dueDate',
            'inventoryLoanerReturnDate' => 'returnDate',
            'inventoryLoanerReturnConditionID' => 'returnConditionId',
            'inventoryLoanerNotes' => 'notes',
        ],
        'output' => [
            'id' => 'inventoryLoanerID',
            'itemId' => 'inventoryLoanerItemID',
            'loanDate' => 'inventoryLoanerLoanDate',
            'loanConditionId' => 'inventoryLoanerLoanConditionID',
            'dueDate' => 'inventoryLoanerDueDate',
            'returnDate' => 'inventoryLoanerReturnDate',
            'returnConditionId' => 'inventoryLoanerReturnConditionID',
            'notes' => 'inventoryLoanerNotes',
        ]
    ];

    /**
     * InventoryLoaner Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}