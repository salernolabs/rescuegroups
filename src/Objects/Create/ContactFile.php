<?php
/**
 * ContactFile Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class ContactFile implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Contact, Primary Key
     *
     * @var integer
     */
    public $contactfileContactID = null;

    /**
     * File
     *
     * @var string
     */
    public $contactfileBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $contactfileOldFileName = null;

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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->contactfileContactID)) $this->contactfileContactID = $inputData->contactfileContactID;
        if (!empty($inputData->contactfileBinary)) $this->contactfileBinary = $inputData->contactfileBinary;
        if (!empty($inputData->contactfileOldFileName)) $this->contactfileOldFileName = $inputData->contactfileOldFileName;
        if (!empty($inputData->contactfileDescription)) $this->contactfileDescription = $inputData->contactfileDescription;
        if (!empty($inputData->contactfileStatus)) $this->contactfileStatus = $inputData->contactfileStatus;
        if (!empty($inputData->contactfileDisplayInline)) $this->contactfileDisplayInline = $inputData->contactfileDisplayInline;
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
        if ($includeId && $this->contactfileContactID !== null) $output['contactfileContactID'] = $this->contactfileContactID;
        if ($this->contactfileBinary !== null) $output['contactfileBinary'] = $this->contactfileBinary;
        if ($this->contactfileOldFileName !== null) $output['contactfileOldFileName'] = $this->contactfileOldFileName;
        if ($this->contactfileDescription !== null) $output['contactfileDescription'] = $this->contactfileDescription;
        if ($this->contactfileStatus !== null) $output['contactfileStatus'] = $this->contactfileStatus;
        if ($this->contactfileDisplayInline !== null) $output['contactfileDisplayInline'] = $this->contactfileDisplayInline;

        return $output;
    }
}