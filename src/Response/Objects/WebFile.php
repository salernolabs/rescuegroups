<?php
/**
 * WebFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class WebFile
{
    /**
     * ID
     * @var integer
     */
    public $webfileID;

    /**
     * Description
     * @var string
     */
    public $webfileDescription;

    /**
     * Status
     * @var string
     */
    public $webfileStatus;

    /**
     * Inline
     * @var string
     */
    public $webfileDisplayInline;

    /**
     * Security Role
     * @var integer
     */
    public $webfileRoleID;



    /**
     * WebFiles Constructor
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