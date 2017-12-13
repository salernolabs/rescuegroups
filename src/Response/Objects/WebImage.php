<?php
/**
 * WebImage Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\WebImage;

class WebImage
{
    /**
     * File
     * @var string
     */
    public $webimageBinary;

    /**
     * Original File Name
     * @var string
     */
    public $webimageOldFileName;

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
        if (!empty($inputData->webimageBinary)) $this->webimageBinary = $inputData->webimageBinary;
        if (!empty($inputData->webimageOldFileName)) $this->webimageOldFileName = $inputData->webimageOldFileName;
        if (!empty($inputData->webimageName)) $this->webimageName = $inputData->webimageName;

    }
}