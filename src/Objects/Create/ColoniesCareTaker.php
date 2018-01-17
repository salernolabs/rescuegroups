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
    public $caretakerColonyID = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $caretakerContactID = null;


    /**
     * ColoniesCareTaker Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->caretakerColonyID)) $this->caretakerColonyID = $inputData->caretakerColonyID;
        if (!empty($inputData->caretakerContactID)) $this->caretakerContactID = $inputData->caretakerContactID;
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
        if ($includeId && $this->caretakerColonyID !== null) $output['caretakerColonyID'] = $this->caretakerColonyID;
        if ($this->caretakerContactID !== null) $output['caretakerContactID'] = $this->caretakerContactID;

        return $output;
    }
}