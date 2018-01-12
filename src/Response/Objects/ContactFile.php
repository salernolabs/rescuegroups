<?php
/**
 * ContactFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class ContactFile
{
    /**
     * File ID
     * @var integer
     */
    public $contactfileID;

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
        if (!empty($inputData->contactfileID)) $this->contactfileID = $inputData->contactfileID;
        if (!empty($inputData->contactfileDescription)) $this->contactfileDescription = $inputData->contactfileDescription;
        if (!empty($inputData->contactfileStatus)) $this->contactfileStatus = $inputData->contactfileStatus;
        if (!empty($inputData->contactfileDisplayInline)) $this->contactfileDisplayInline = $inputData->contactfileDisplayInline;

    }
}