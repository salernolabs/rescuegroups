<?php
/**
 * WebImage Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class WebImage
{
    /**
     * ID
     * @var integer
     */
    public $webimageID;

    /**
     * Name
     * @var string
     */
    public $webimageName;



    /**
     * WebImages Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->webimageID)) $this->webimageID = $inputData->webimageID;
        if (!empty($inputData->webimageName)) $this->webimageName = $inputData->webimageName;

    }
}