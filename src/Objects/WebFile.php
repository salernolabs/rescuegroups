<?php
/**
 * WebFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WebFile
{
    /**
     * ID
     *
     * @var integer
     */
    public $webfileID = null;

    /**
     * Description
     *
     * @var string
     */
    public $webfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    public $webfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    public $webfileDisplayInline = null;

    /**
     * Security Role
     *
     * @var integer
     */
    public $webfileRoleID = null;


    /**
     * WebFile Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->webfileID)) $this->webfileID = $inputData->webfileID;
        if (!empty($inputData->webfileDescription)) $this->webfileDescription = $inputData->webfileDescription;
        if (!empty($inputData->webfileStatus)) $this->webfileStatus = $inputData->webfileStatus;
        if (!empty($inputData->webfileDisplayInline)) $this->webfileDisplayInline = $inputData->webfileDisplayInline;
        if (!empty($inputData->webfileRoleID)) $this->webfileRoleID = $inputData->webfileRoleID;
    }
}