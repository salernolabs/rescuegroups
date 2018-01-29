<?php
/**
 * InventoryItem Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class InventoryItem extends \RescueGroups\Objects\InventoryItem implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Condition
     *
     * @var string
     */
    public $condition = null;

    /**
     * Files
     *
     * @var string
     */
    public $files = null;

    /**
     * Loaners
     *
     * @var string
     */
    public $loaners = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
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
            'inventoryitemCondition' => 'condition',
            'inventoryitemCategory' => 'category',
            'inventoryitemDisposedDate' => 'disposedDate',
            'inventoryitemDisposedDestination' => 'disposedDestination',
            'inventoryitemStorageLocation' => 'storageLocation',
            'inventoryitemFiles' => 'files',
            'inventoryitemLoaners' => 'loaners',
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
            'condition' => 'inventoryitemCondition',
            'category' => 'inventoryitemCategory',
            'disposedDate' => 'inventoryitemDisposedDate',
            'disposedDestination' => 'inventoryitemDisposedDestination',
            'storageLocation' => 'inventoryitemStorageLocation',
            'files' => 'inventoryitemFiles',
            'loaners' => 'inventoryitemLoaners',
        ]
    ];

}