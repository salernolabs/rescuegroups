<?php
/**
 * InventoryFile Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class InventoryFile implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $inventoryfileItemID = null;

    /**
     * File
     *
     * @var string
     */
    public $inventoryfileBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $inventoryfileOldFileName = null;

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

        if (!empty($inputData->inventoryfileItemID)) $this->inventoryfileItemID = $inputData->inventoryfileItemID;
        if (!empty($inputData->inventoryfileBinary)) $this->inventoryfileBinary = $inputData->inventoryfileBinary;
        if (!empty($inputData->inventoryfileOldFileName)) $this->inventoryfileOldFileName = $inputData->inventoryfileOldFileName;
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
        if ($includeId && $this->inventoryfileItemID !== null) $output['inventoryfileItemID'] = $this->inventoryfileItemID;
        if ($this->inventoryfileBinary !== null) $output['inventoryfileBinary'] = $this->inventoryfileBinary;
        if ($this->inventoryfileOldFileName !== null) $output['inventoryfileOldFileName'] = $this->inventoryfileOldFileName;
        if ($this->inventoryfileDescription !== null) $output['inventoryfileDescription'] = $this->inventoryfileDescription;
        if ($this->inventoryfileStatus !== null) $output['inventoryfileStatus'] = $this->inventoryfileStatus;
        if ($this->inventoryfileDisplayInline !== null) $output['inventoryfileDisplayInline'] = $this->inventoryfileDisplayInline;

        return $output;
    }
}