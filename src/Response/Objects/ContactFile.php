<?php
/**
 * ContactFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\ContactFile;

class ContactFile
{
    /**
     * Contact
     * @var integer
     */
    public $contactfileContactID;

    /**
     * File
     * @var string
     */
    public $contactfileBinary;

    /**
     * Old file name
     * @var string
     */
    public $contactfileOldFileName;

    /**
     * Description
     * @var string
     */
    public $contactfileDescription;

    /**
     * Status
     * @var string
     */
    public $contactfileStatus;

    /**
     * Inline
     * @var string
     */
    public $contactfileDisplayInline;



    /**
     * ContactFiles Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->contactfileContactID)) $this->contactfileContactID = $inputData->contactfileContactID;
        if (!empty($inputData->contactfileBinary)) $this->contactfileBinary = $inputData->contactfileBinary;
        if (!empty($inputData->contactfileOldFileName)) $this->contactfileOldFileName = $inputData->contactfileOldFileName;
        if (!empty($inputData->contactfileDescription)) $this->contactfileDescription = $inputData->contactfileDescription;
        if (!empty($inputData->contactfileStatus)) $this->contactfileStatus = $inputData->contactfileStatus;
        if (!empty($inputData->contactfileDisplayInline)) $this->contactfileDisplayInline = $inputData->contactfileDisplayInline;

    }
}