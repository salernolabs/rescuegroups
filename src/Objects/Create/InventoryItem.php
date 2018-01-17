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
    public $inventoryitemName = null;

    /**
     * Item Number/ID
     *
     * @var string
     */
    public $inventoryitemItemID = null;

    /**
     * Description
     *
     * @var string
     */
    public $inventoryitemDescription = null;

    /**
     * Received Date
     *
     * @var \DateTime
     */
    public $inventoryitemReceivedDate = null;

    /**
     * Source
     *
     * @var string
     */
    public $inventoryitemSource = null;

    /**
     * Cost
     *
     * @var float
     */
    public $inventoryitemCost = null;

    /**
     * Condition, Primary Key
     *
     * @var integer
     */
    public $inventoryitemConditionID = null;

    /**
     * Category
     *
     * @var string
     */
    public $inventoryitemCategory = null;

    /**
     * Disposed Date
     *
     * @var \DateTime
     */
    public $inventoryitemDisposedDate = null;

    /**
     * Disposed Destination
     *
     * @var string
     */
    public $inventoryitemDisposedDestination = null;

    /**
     * Storage Location
     *
     * @var string
     */
    public $inventoryitemStorageLocation = null;

    /**
     * Quantity
     *
     * @var string
     */
    public $inventoryitemQuantity = null;


    /**
     * InventoryItem Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

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
        if (!empty($inputData->inventoryitemQuantity)) $this->inventoryitemQuantity = $inputData->inventoryitemQuantity;
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
        if ($this->inventoryitemName !== null) $output['inventoryitemName'] = $this->inventoryitemName;
        if ($this->inventoryitemItemID !== null) $output['inventoryitemItemID'] = $this->inventoryitemItemID;
        if ($this->inventoryitemDescription !== null) $output['inventoryitemDescription'] = $this->inventoryitemDescription;
        if ($this->inventoryitemReceivedDate !== null) $output['inventoryitemReceivedDate'] = $this->inventoryitemReceivedDate;
        if ($this->inventoryitemSource !== null) $output['inventoryitemSource'] = $this->inventoryitemSource;
        if ($this->inventoryitemCost !== null) $output['inventoryitemCost'] = $this->inventoryitemCost;
        if ($includeId && $this->inventoryitemConditionID !== null) $output['inventoryitemConditionID'] = $this->inventoryitemConditionID;
        if ($this->inventoryitemCategory !== null) $output['inventoryitemCategory'] = $this->inventoryitemCategory;
        if ($this->inventoryitemDisposedDate !== null) $output['inventoryitemDisposedDate'] = $this->inventoryitemDisposedDate;
        if ($this->inventoryitemDisposedDestination !== null) $output['inventoryitemDisposedDestination'] = $this->inventoryitemDisposedDestination;
        if ($this->inventoryitemStorageLocation !== null) $output['inventoryitemStorageLocation'] = $this->inventoryitemStorageLocation;
        if ($this->inventoryitemQuantity !== null) $output['inventoryitemQuantity'] = $this->inventoryitemQuantity;

        return $output;
    }
}