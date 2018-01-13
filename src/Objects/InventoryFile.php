<?php
/**
 * InventoryFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class InventoryFile
{
    /**
     * File
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