<?php
/**
 * InventoryItem Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class InventoryItem
{
    /**
     * ID
     * @var integer
     */
    public $inventoryitemID;

    /**
     * Name
     * @var string
     */
    public $inventoryitemName;

    /**
     * Item Number/ID
     * @var string
     */
    public $inventoryitemItemID;

    /**
     * Description
     * @var string
     */
    public $inventoryitemDescription;

    /**
     * Received Date
     * @var \DateTime
     */
    public $inventoryitemReceivedDate;

    /**
     * Source
     * @var string
     */
    public $inventoryitemSource;

    /**
     * Cost
     * @var float
     */
    public $inventoryitemCost;

    /**
     * Condition
     * @var integer
     */
    public $inventoryitemConditionID;

    /**
     * Category
     * @var string
     */
    public $inventoryitemCategory;

    /**
     * Disposed Date
     * @var \DateTime
     */
    public $inventoryitemDisposedDate;

    /**
     * Disposed Destination
     * @var string
     */
    public $inventoryitemDisposedDestination;

    /**
     * Storage Location
     * @var string
     */
    public $inventoryitemStorageLocation;



    /**
     * InventoryItems Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->inventoryitemID)) $this->inventoryitemID = $inputData->inventoryitemID;
        if (!empty($inputData->inventoryitemName)) $this->inventoryitemName = $inputData->inventoryitemName;
        if (!empty($inputData->inventoryitemItemID)) $this->inventoryitemItemID = $inputData->inventoryitemItemID;
        if (!empty($inputData->inventoryitemDescription)) $this->inventoryitemDescription = $inputData->inventoryitemDescription;
        if (!empty($inputData->inventoryitemReceivedDate)) $this->inventoryitemReceivedDate = $inputData->inventoryitemReceivedDate;
        if (!empty($inputData->inventoryitemSource)) $this->inventoryitemSource = $inputData->inventoryitemSource;
        if (!empty($inputData->inventoryitemCost)) $this->inventoryitemCost = $inputData->inventoryitemCost;
        if (!empty($inputData->inventoryitemConditionID)) $this->inventoryitemConditionID = $inputData->inventoryitemConditionID;
        if (!empty($inputData->inventoryitemCategory)) $this->inventoryitemCategory = $inputData->inventoryitemCategory;
        if (!empty($inputData->inventoryitemDisposedDate)) $this->inventoryitemDisposedDate = $inputData->inventoryitemDisposedDate;
        if (!empty($inputData->inventoryitemDisposedDestination)) $this->inventoryitemDisposedDestination = $inputData->inventoryitemDisposedDestination;
        if (!empty($inputData->inventoryitemStorageLocation)) $this->inventoryitemStorageLocation = $inputData->inventoryitemStorageLocation;

    }
}