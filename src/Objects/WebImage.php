<?php
/**
 * WebImage Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WebImage implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
     *
     * @var integer
     */
    public $webimageID = null;

    /**
     * Name
     *
     * @var string
     */
    public $webimageName = null;


    /**
     * WebImage Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->webimageID)) $this->webimageID = $inputData->webimageID;
        if (!empty($inputData->webimageName)) $this->webimageName = $inputData->webimageName;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->webimageID !== null) $output['webimageID'] = $this->webimageID;
        if ($this->webimageName !== null) $output['webimageName'] = $this->webimageName;

        return $output;
    }
}