<?php
/**
 * InventoryFile Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class InventoryFile extends \RescueGroups\Objects\InventoryFile implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Old file name
     *
     * @var string
     */
    public $oldName = null;

    /**
     * File size
     *
     * @var string
     */
    public $size = null;

    /**
     * Created Date
     *
     * @var \DateTime
     */
    public $createdDate = null;

    /**
     * Name
     *
     * @var string
     */
    public $inventoryitemName = null;

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
     * Condition
     *
     * @var integer
     */
    public $inventoryitemConditionId = null;

    /**
     * Condition
     *
     * @var string
     */
    public $inventoryitemCondition = null;

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
     * Files
     *
     * @var string
     */
    public $inventoryitemFiles = null;

    /**
     * Loaners
     *
     * @var string
     */
    public $inventoryitemLoaners = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'inventoryfileID' => 'id',
            'inventoryfileOldName' => 'oldName',
            'inventoryfileDescription' => 'description',
            'inventoryfileStatus' => 'status',
            'inventoryfileDisplayInline' => 'displayInline',
            'inventoryfileSize' => 'size',
            'inventoryfileCreatedDate' => 'createdDate',
            'inventoryfileItemID' => 'itemId',
            'inventoryitemName' => 'inventoryitemName',
            'inventoryitemDescription' => 'inventoryitemDescription',
            'inventoryitemReceivedDate' => 'inventoryitemReceivedDate',
            'inventoryitemSource' => 'inventoryitemSource',
            'inventoryitemCost' => 'inventoryitemCost',
            'inventoryitemConditionID' => 'inventoryitemConditionId',
            'inventoryitemCondition' => 'inventoryitemCondition',
            'inventoryitemCategory' => 'inventoryitemCategory',
            'inventoryitemDisposedDate' => 'inventoryitemDisposedDate',
            'inventoryitemDisposedDestination' => 'inventoryitemDisposedDestination',
            'inventoryitemStorageLocation' => 'inventoryitemStorageLocation',
            'inventoryitemFiles' => 'inventoryitemFiles',
            'inventoryitemLoaners' => 'inventoryitemLoaners',
        ],
        'output' => [
            'id' => 'inventoryfileID',
            'oldName' => 'inventoryfileOldName',
            'description' => 'inventoryfileDescription',
            'status' => 'inventoryfileStatus',
            'displayInline' => 'inventoryfileDisplayInline',
            'size' => 'inventoryfileSize',
            'createdDate' => 'inventoryfileCreatedDate',
            'itemId' => 'inventoryfileItemID',
            'inventoryitemName' => 'inventoryitemName',
            'inventoryitemDescription' => 'inventoryitemDescription',
            'inventoryitemReceivedDate' => 'inventoryitemReceivedDate',
            'inventoryitemSource' => 'inventoryitemSource',
            'inventoryitemCost' => 'inventoryitemCost',
            'inventoryitemConditionId' => 'inventoryitemConditionID',
            'inventoryitemCondition' => 'inventoryitemCondition',
            'inventoryitemCategory' => 'inventoryitemCategory',
            'inventoryitemDisposedDate' => 'inventoryitemDisposedDate',
            'inventoryitemDisposedDestination' => 'inventoryitemDisposedDestination',
            'inventoryitemStorageLocation' => 'inventoryitemStorageLocation',
            'inventoryitemFiles' => 'inventoryitemFiles',
            'inventoryitemLoaners' => 'inventoryitemLoaners',
        ]
    ];

}