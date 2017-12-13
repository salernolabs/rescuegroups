<?php
/**
 * InventoryFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\InventoryFile;

class InventoryFile
{
    /**
     * ID
     * @var integer
     */
    public $inventoryfileItemID;

    /**
     * File
     * @var string
     */
    public $inventoryfileBinary;

    /**
     * Old file name
     * @var string
     */
    public $inventoryfileOldFileName;

    /**
     * Description
     * @var string
     */
    public $inventoryfileDescription;

    /**
     * Status
     * @var string
     */
    public $inventoryfileStatus;

    /**
     * Inline
     * @var string
     */
    public $inventoryfileDisplayInline;



    /**
     * InventoryFiles Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->inventoryfileItemID)) $this->inventoryfileItemID = $inputData->inventoryfileItemID;
        if (!empty($inputData->inventoryfileBinary)) $this->inventoryfileBinary = $inputData->inventoryfileBinary;
        if (!empty($inputData->inventoryfileOldFileName)) $this->inventoryfileOldFileName = $inputData->inventoryfileOldFileName;
        if (!empty($inputData->inventoryfileDescription)) $this->inventoryfileDescription = $inputData->inventoryfileDescription;
        if (!empty($inputData->inventoryfileStatus)) $this->inventoryfileStatus = $inputData->inventoryfileStatus;
        if (!empty($inputData->inventoryfileDisplayInline)) $this->inventoryfileDisplayInline = $inputData->inventoryfileDisplayInline;

    }
}