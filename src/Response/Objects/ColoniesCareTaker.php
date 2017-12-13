<?php
/**
 * ColoniesCareTaker Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class ColoniesCareTaker
{
    /**
     * Colony
     * @var integer
     */
    public $caretakerColonyID;

    /**
     * Contact
     * @var integer
     */
    public $caretakerContactID;



    /**
     * ColoniesCareTakers Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->caretakerColonyID)) $this->caretakerColonyID = $inputData->caretakerColonyID;
        if (!empty($inputData->caretakerContactID)) $this->caretakerContactID = $inputData->caretakerContactID;

    }
}