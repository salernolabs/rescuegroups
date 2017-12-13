<?php
/**
 * WebFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\WebFile;

class WebFile
{
    /**
     * File
     * @var string
     */
    public $webfileBinary;

    /**
     * Old file name
     * @var string
     */
    public $webfileOldFileName;

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
        if (!empty($inputData->webfileBinary)) $this->webfileBinary = $inputData->webfileBinary;
        if (!empty($inputData->webfileOldFileName)) $this->webfileOldFileName = $inputData->webfileOldFileName;
        if (!empty($inputData->webfileDescription)) $this->webfileDescription = $inputData->webfileDescription;
        if (!empty($inputData->webfileStatus)) $this->webfileStatus = $inputData->webfileStatus;
        if (!empty($inputData->webfileDisplayInline)) $this->webfileDisplayInline = $inputData->webfileDisplayInline;
        if (!empty($inputData->webfileRoleID)) $this->webfileRoleID = $inputData->webfileRoleID;

    }
}