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
    public $itemId = null;

    /**
     * File
     *
     * @var string
     */
    public $binary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $oldFileName = null;

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
     * InventoryFile Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->inventoryfileItemID)) $this->itemId = $inputData->inventoryfileItemID;
        if (!empty($inputData->inventoryfileBinary)) $this->binary = $inputData->inventoryfileBinary;
        if (!empty($inputData->inventoryfileOldFileName)) $this->oldFileName = $inputData->inventoryfileOldFileName;
        if (!empty($inputData->inventoryfileDescription)) $this->description = $inputData->inventoryfileDescription;
        if (!empty($inputData->inventoryfileStatus)) $this->status = $inputData->inventoryfileStatus;
        if (!empty($inputData->inventoryfileDisplayInline)) $this->displayInline = $inputData->inventoryfileDisplayInline;
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
        if ($includeId && $this->itemId !== null) $output['inventoryfileItemID'] = $this->itemId;
        if ($this->binary !== null) $output['inventoryfileBinary'] = $this->binary;
        if ($this->oldFileName !== null) $output['inventoryfileOldFileName'] = $this->oldFileName;
        if ($this->description !== null) $output['inventoryfileDescription'] = $this->description;
        if ($this->status !== null) $output['inventoryfileStatus'] = $this->status;
        if ($this->displayInline !== null) $output['inventoryfileDisplayInline'] = $this->displayInline;

        return $output;
    }
}