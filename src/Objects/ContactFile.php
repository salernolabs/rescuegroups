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
     * File ID, Primary Key
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
    public $tatus = null;

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
        if (!empty($inputData->contactfileStatus)) $this->tatus = $inputData->contactfileStatus;
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
        if ($includeId && $this->contactfileID !== null) $output['contactfileID'] = $this->contactfileID;
        if ($this->contactfileDescription !== null) $output['contactfileDescription'] = $this->contactfileDescription;
        if ($this->tatus !== null) $output['contactfileStatus'] = $this->tatus;
        if ($this->contactfileDisplayInline !== null) $output['contactfileDisplayInline'] = $this->contactfileDisplayInline;

        return $output;
    }
}