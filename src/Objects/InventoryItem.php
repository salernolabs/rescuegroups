<?php
/**
 * InventoryItem Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class InventoryItem implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

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
     * Condition
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
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'inventoryitemID' => 'id',
            'inventoryitemName' => 'name',
            'inventoryitemItemID' => 'itemId',
            'inventoryitemDescription' => 'description',
            'inventoryitemReceivedDate' => 'receivedDate',
            'inventoryitemSource' => 'source',
            'inventoryitemCost' => 'cost',
            'inventoryitemConditionID' => 'conditionId',
            'inventoryitemCategory' => 'category',
            'inventoryitemDisposedDate' => 'disposedDate',
            'inventoryitemDisposedDestination' => 'disposedDestination',
            'inventoryitemStorageLocation' => 'storageLocation',
        ],
        'output' => [
            'id' => 'inventoryitemID',
            'name' => 'inventoryitemName',
            'itemId' => 'inventoryitemItemID',
            'description' => 'inventoryitemDescription',
            'receivedDate' => 'inventoryitemReceivedDate',
            'source' => 'inventoryitemSource',
            'cost' => 'inventoryitemCost',
            'conditionId' => 'inventoryitemConditionID',
            'category' => 'inventoryitemCategory',
            'disposedDate' => 'inventoryitemDisposedDate',
            'disposedDestination' => 'inventoryitemDisposedDestination',
            'storageLocation' => 'inventoryitemStorageLocation',
        ]
    ];

    /**
     * InventoryItem Constructor
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