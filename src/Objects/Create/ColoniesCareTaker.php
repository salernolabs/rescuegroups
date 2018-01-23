<?php
/**
 * ColoniesCareTaker Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class ColoniesCareTaker implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Colony, Primary Key
     *
     * @var integer
     */
    public $colonyId = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $contactId = null;


    /**
     * ColoniesCareTaker Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->caretakerColonyID)) $this->colonyId = $inputData->caretakerColonyID;
        if (!empty($inputData->caretakerContactID)) $this->contactId = $inputData->caretakerContactID;
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
        if ($includeId && $this->colonyId !== null) $output['caretakerColonyID'] = $this->colonyId;
        if ($this->contactId !== null) $output['caretakerContactID'] = $this->contactId;

        return $output;
    }
}