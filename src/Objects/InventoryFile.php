<?php
/**
 * InventoryFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class InventoryFile implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * File, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * ID
     *
     * @var integer
     */
    public $itemId = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Inline
     *
     * @var string
     */
    public $displayInline = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'inventoryfileID' => 'id',
            'inventoryfileItemID' => 'itemId',
            'inventoryfileDescription' => 'description',
            'inventoryfileStatus' => 'status',
            'inventoryfileDisplayInline' => 'displayInline',
        ],
        'output' => [
            'id' => 'inventoryfileID',
            'itemId' => 'inventoryfileItemID',
            'description' => 'inventoryfileDescription',
            'status' => 'inventoryfileStatus',
            'displayInline' => 'inventoryfileDisplayInline',
        ]
    ];

    /**
     * InventoryFile Constructor
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