<?php
/**
 * WebImage Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WebImage
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->webimageID)) $this->webimageID = $inputData->webimageID;
        if (!empty($inputData->webimageName)) $this->webimageName = $inputData->webimageName;
    }
}