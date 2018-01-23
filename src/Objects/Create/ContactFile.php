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
    public $contactId = null;

    /**
     * File
     *
     * @var string
     */
    public $binary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $oldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Inline
     *
     * @var string
     */
    public $displayInline = null;


    /**
     * ContactFile Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->contactfileContactID)) $this->contactId = $inputData->contactfileContactID;
        if (!empty($inputData->contactfileBinary)) $this->binary = $inputData->contactfileBinary;
        if (!empty($inputData->contactfileOldFileName)) $this->oldFileName = $inputData->contactfileOldFileName;
        if (!empty($inputData->contactfileDescription)) $this->description = $inputData->contactfileDescription;
        if (!empty($inputData->contactfileStatus)) $this->status = $inputData->contactfileStatus;
        if (!empty($inputData->contactfileDisplayInline)) $this->displayInline = $inputData->contactfileDisplayInline;
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
        if ($includeId && $this->contactId !== null) $output['contactfileContactID'] = $this->contactId;
        if ($this->binary !== null) $output['contactfileBinary'] = $this->binary;
        if ($this->oldFileName !== null) $output['contactfileOldFileName'] = $this->oldFileName;
        if ($this->description !== null) $output['contactfileDescription'] = $this->description;
        if ($this->status !== null) $output['contactfileStatus'] = $this->status;
        if ($this->displayInline !== null) $output['contactfileDisplayInline'] = $this->displayInline;

        return $output;
    }
}