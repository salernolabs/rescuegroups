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
    /**
     * File, Primary Key
     *
     * @var integer
     */
    public $inventoryfileID = null;

    /**
     * ID
     *
     * @var integer
     */
    public $inventoryfileItemID = null;

    /**
     * Description
     *
     * @var string
     */
    public $inventoryfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    public $inventoryfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    public $inventoryfileDisplayInline = null;


    /**
     * InventoryFile Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->inventoryfileID)) $this->inventoryfileID = $inputData->inventoryfileID;
        if (!empty($inputData->inventoryfileItemID)) $this->inventoryfileItemID = $inputData->inventoryfileItemID;
        if (!empty($inputData->inventoryfileDescription)) $this->inventoryfileDescription = $inputData->inventoryfileDescription;
        if (!empty($inputData->inventoryfileStatus)) $this->inventoryfileStatus = $inputData->inventoryfileStatus;
        if (!empty($inputData->inventoryfileDisplayInline)) $this->inventoryfileDisplayInline = $inputData->inventoryfileDisplayInline;
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
        if ($includeId && $this->inventoryfileID !== null) $output['inventoryfileID'] = $this->inventoryfileID;
        if ($this->inventoryfileItemID !== null) $output['inventoryfileItemID'] = $this->inventoryfileItemID;
        if ($this->inventoryfileDescription !== null) $output['inventoryfileDescription'] = $this->inventoryfileDescription;
        if ($this->inventoryfileStatus !== null) $output['inventoryfileStatus'] = $this->inventoryfileStatus;
        if ($this->inventoryfileDisplayInline !== null) $output['inventoryfileDisplayInline'] = $this->inventoryfileDisplayInline;

        return $output;
    }
}