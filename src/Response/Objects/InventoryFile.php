<?php
/**
 * InventoryFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class InventoryFile
{
    /**
     * File
     * @var integer
     */
    public $inventoryfileID;

    /**
     * ID
     * @var integer
     */
    public $inventoryfileItemID;

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
        if (!empty($inputData->inventoryfileID)) $this->inventoryfileID = $inputData->inventoryfileID;
        if (!empty($inputData->inventoryfileItemID)) $this->inventoryfileItemID = $inputData->inventoryfileItemID;
        if (!empty($inputData->inventoryfileDescription)) $this->inventoryfileDescription = $inputData->inventoryfileDescription;
        if (!empty($inputData->inventoryfileStatus)) $this->inventoryfileStatus = $inputData->inventoryfileStatus;
        if (!empty($inputData->inventoryfileDisplayInline)) $this->inventoryfileDisplayInline = $inputData->inventoryfileDisplayInline;

    }
}