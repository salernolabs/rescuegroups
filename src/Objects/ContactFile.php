<?php
/**
 * ContactFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class ContactFile implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->contactfileID)) $this->contactfileID = $inputData->contactfileID;
        if (!empty($inputData->contactfileDescription)) $this->contactfileDescription = $inputData->contactfileDescription;
        if (!empty($inputData->contactfileStatus)) $this->contactfileStatus = $inputData->contactfileStatus;
        if (!empty($inputData->contactfileDisplayInline)) $this->contactfileDisplayInline = $inputData->contactfileDisplayInline;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->contactfileID !== null) $output['contactfileID'] = $this->contactfileID;
        if ($this->contactfileDescription !== null) $output['contactfileDescription'] = $this->contactfileDescription;
        if ($this->contactfileStatus !== null) $output['contactfileStatus'] = $this->contactfileStatus;
        if ($this->contactfileDisplayInline !== null) $output['contactfileDisplayInline'] = $this->contactfileDisplayInline;

        return $output;
    }
}