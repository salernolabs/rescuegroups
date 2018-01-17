<?php
/**
 * WebImage Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class WebImage implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * File
     *
     * @var string
     */
    public $webimageBinary = null;

    /**
     * Original File Name
     *
     * @var string
     */
    public $webimageOldFileName = null;

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

        if (!empty($inputData->webimageBinary)) $this->webimageBinary = $inputData->webimageBinary;
        if (!empty($inputData->webimageOldFileName)) $this->webimageOldFileName = $inputData->webimageOldFileName;
        if (!empty($inputData->webimageName)) $this->webimageName = $inputData->webimageName;
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
        if ($this->webimageBinary !== null) $output['webimageBinary'] = $this->webimageBinary;
        if ($this->webimageOldFileName !== null) $output['webimageOldFileName'] = $this->webimageOldFileName;
        if ($this->webimageName !== null) $output['webimageName'] = $this->webimageName;

        return $output;
    }
}