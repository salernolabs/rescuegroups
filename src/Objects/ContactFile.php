<?php
/**
 * ContactFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class ContactFile
{
    /**
     * File ID
     *
     * @var integer
     */
    public $contactfileID = null;

    /**
     * Description
     *
     * @var string
     */
    public $contactfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    public $contactfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    public $contactfileDisplayInline = null;


    /**
     * ContactFile Constructor
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