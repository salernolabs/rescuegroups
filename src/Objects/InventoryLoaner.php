<?php
/**
 * InventoryLoaner Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class InventoryLoaner implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $inventoryLoanerID = null;

    /**
     * Item
     *
     * @var integer
     */
    public $inventoryLoanerItemID = null;

    /**
     * Loan Date
     *
     * @var \DateTime
     */
    public $inventoryLoanerLoanDate = null;

    /**
     * Loan Condition
     *
     * @var integer
     */
    public $inventoryLoanerLoanConditionID = null;

    /**
     * Due Date
     *
     * @var \DateTime
     */
    public $inventoryLoanerDueDate = null;

    /**
     * Return Date
     *
     * @var \DateTime
     */
    public $inventoryLoanerReturnDate = null;

    /**
     * Return Condition
     *
     * @var integer
     */
    public $inventoryLoanerReturnConditionID = null;

    /**
     * Notes
     *
     * @var string
     */
    public $inventoryLoanerNotes = null;


    /**
     * InventoryLoaner Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->inventoryLoanerID)) $this->inventoryLoanerID = $inputData->inventoryLoanerID;
        if (!empty($inputData->inventoryLoanerItemID)) $this->inventoryLoanerItemID = $inputData->inventoryLoanerItemID;
        if (!empty($inputData->inventoryLoanerLoanDate)) $this->inventoryLoanerLoanDate = $inputData->inventoryLoanerLoanDate;
        if (!empty($inputData->inventoryLoanerLoanConditionID)) $this->inventoryLoanerLoanConditionID = $inputData->inventoryLoanerLoanConditionID;
        if (!empty($inputData->inventoryLoanerDueDate)) $this->inventoryLoanerDueDate = $inputData->inventoryLoanerDueDate;
        if (!empty($inputData->inventoryLoanerReturnDate)) $this->inventoryLoanerReturnDate = $inputData->inventoryLoanerReturnDate;
        if (!empty($inputData->inventoryLoanerReturnConditionID)) $this->inventoryLoanerReturnConditionID = $inputData->inventoryLoanerReturnConditionID;
        if (!empty($inputData->inventoryLoanerNotes)) $this->inventoryLoanerNotes = $inputData->inventoryLoanerNotes;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->inventoryLoanerID !== null) $output['inventoryLoanerID'] = $this->inventoryLoanerID;
        if ($this->inventoryLoanerItemID !== null) $output['inventoryLoanerItemID'] = $this->inventoryLoanerItemID;
        if ($this->inventoryLoanerLoanDate !== null) $output['inventoryLoanerLoanDate'] = $this->inventoryLoanerLoanDate;
        if ($this->inventoryLoanerLoanConditionID !== null) $output['inventoryLoanerLoanConditionID'] = $this->inventoryLoanerLoanConditionID;
        if ($this->inventoryLoanerDueDate !== null) $output['inventoryLoanerDueDate'] = $this->inventoryLoanerDueDate;
        if ($this->inventoryLoanerReturnDate !== null) $output['inventoryLoanerReturnDate'] = $this->inventoryLoanerReturnDate;
        if ($this->inventoryLoanerReturnConditionID !== null) $output['inventoryLoanerReturnConditionID'] = $this->inventoryLoanerReturnConditionID;
        if ($this->inventoryLoanerNotes !== null) $output['inventoryLoanerNotes'] = $this->inventoryLoanerNotes;

        return $output;
    }
}