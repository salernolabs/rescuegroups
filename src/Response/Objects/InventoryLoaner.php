<?php
/**
 * InventoryLoaner Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class InventoryLoaner
{
    /**
     * Contact
     * @var integer
     */
    public $inventoryLoanerContactID;

    /**
     * Item
     * @var integer
     */
    public $inventoryLoanerItemID;

    /**
     * Loan Date
     * @var \DateTime
     */
    public $inventoryLoanerLoanDate;

    /**
     * Loan Condition
     * @var integer
     */
    public $inventoryLoanerLoanConditionID;

    /**
     * Due Date
     * @var \DateTime
     */
    public $inventoryLoanerDueDate;

    /**
     * Return Date
     * @var \DateTime
     */
    public $inventoryLoanerReturnDate;

    /**
     * Return Condition
     * @var integer
     */
    public $inventoryLoanerReturnConditionID;

    /**
     * Notes
     * @var string
     */
    public $inventoryLoanerNotes;



    /**
     * InventoryLoaners Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->inventoryLoanerContactID)) $this->inventoryLoanerContactID = $inputData->inventoryLoanerContactID;
        if (!empty($inputData->inventoryLoanerItemID)) $this->inventoryLoanerItemID = $inputData->inventoryLoanerItemID;
        if (!empty($inputData->inventoryLoanerLoanDate)) $this->inventoryLoanerLoanDate = $inputData->inventoryLoanerLoanDate;
        if (!empty($inputData->inventoryLoanerLoanConditionID)) $this->inventoryLoanerLoanConditionID = $inputData->inventoryLoanerLoanConditionID;
        if (!empty($inputData->inventoryLoanerDueDate)) $this->inventoryLoanerDueDate = $inputData->inventoryLoanerDueDate;
        if (!empty($inputData->inventoryLoanerReturnDate)) $this->inventoryLoanerReturnDate = $inputData->inventoryLoanerReturnDate;
        if (!empty($inputData->inventoryLoanerReturnConditionID)) $this->inventoryLoanerReturnConditionID = $inputData->inventoryLoanerReturnConditionID;
        if (!empty($inputData->inventoryLoanerNotes)) $this->inventoryLoanerNotes = $inputData->inventoryLoanerNotes;

    }
}