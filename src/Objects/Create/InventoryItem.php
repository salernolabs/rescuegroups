<?php
/**
 * InventoryItem Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class InventoryItem implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Name
     *
     * @var string
     */
    public $name = null;

    /**
     * Item Number/ID
     *
     * @var string
     */
    public $itemId = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Received Date
     *
     * @var \DateTime
     */
    public $receivedDate = null;

    /**
     * Source
     *
     * @var string
     */
    public $source = null;

    /**
     * Cost
     *
     * @var float
     */
    public $cost = null;

    /**
     * Condition, Primary Key
     *
     * @var integer
     */
    public $conditionId = null;

    /**
     * Category
     *
     * @var string
     */
    public $category = null;

    /**
     * Disposed Date
     *
     * @var \DateTime
     */
    public $disposedDate = null;

    /**
     * Disposed Destination
     *
     * @var string
     */
    public $disposedDestination = null;

    /**
     * Storage Location
     *
     * @var string
     */
    public $storageLocation = null;

    /**
     * Quantity
     *
     * @var string
     */
    public $quantity = null;


    /**
     * InventoryItem Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->inventoryitemName)) $this->name = $inputData->inventoryitemName;
        if (!empty($inputData->inventoryitemItemID)) $this->itemId = $inputData->inventoryitemItemID;
        if (!empty($inputData->inventoryitemDescription)) $this->description = $inputData->inventoryitemDescription;
        if (!empty($inputData->inventoryitemReceivedDate)) $this->receivedDate = $inputData->inventoryitemReceivedDate;
        if (!empty($inputData->inventoryitemSource)) $this->source = $inputData->inventoryitemSource;
        if (!empty($inputData->inventoryitemCost)) $this->cost = $inputData->inventoryitemCost;
        if (!empty($inputData->inventoryitemConditionID)) $this->conditionId = $inputData->inventoryitemConditionID;
        if (!empty($inputData->inventoryitemCategory)) $this->category = $inputData->inventoryitemCategory;
        if (!empty($inputData->inventoryitemDisposedDate)) $this->disposedDate = $inputData->inventoryitemDisposedDate;
        if (!empty($inputData->inventoryitemDisposedDestination)) $this->disposedDestination = $inputData->inventoryitemDisposedDestination;
        if (!empty($inputData->inventoryitemStorageLocation)) $this->storageLocation = $inputData->inventoryitemStorageLocation;
        if (!empty($inputData->inventoryitemQuantity)) $this->quantity = $inputData->inventoryitemQuantity;
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
        if ($this->name !== null) $output['inventoryitemName'] = $this->name;
        if ($this->itemId !== null) $output['inventoryitemItemID'] = $this->itemId;
        if ($this->description !== null) $output['inventoryitemDescription'] = $this->description;
        if ($this->receivedDate !== null) $output['inventoryitemReceivedDate'] = $this->receivedDate;
        if ($this->source !== null) $output['inventoryitemSource'] = $this->source;
        if ($this->cost !== null) $output['inventoryitemCost'] = $this->cost;
        if ($includeId && $this->conditionId !== null) $output['inventoryitemConditionID'] = $this->conditionId;
        if ($this->category !== null) $output['inventoryitemCategory'] = $this->category;
        if ($this->disposedDate !== null) $output['inventoryitemDisposedDate'] = $this->disposedDate;
        if ($this->disposedDestination !== null) $output['inventoryitemDisposedDestination'] = $this->disposedDestination;
        if ($this->storageLocation !== null) $output['inventoryitemStorageLocation'] = $this->storageLocation;
        if ($this->quantity !== null) $output['inventoryitemQuantity'] = $this->quantity;

        return $output;
    }
}