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
    public $binary = null;

    /**
     * Original File Name
     *
     * @var string
     */
    public $oldFileName = null;

    /**
     * Name
     *
     * @var string
     */
    public $name = null;


    /**
     * WebImage Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->webimageBinary)) $this->binary = $inputData->webimageBinary;
        if (!empty($inputData->webimageOldFileName)) $this->oldFileName = $inputData->webimageOldFileName;
        if (!empty($inputData->webimageName)) $this->name = $inputData->webimageName;
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
        if ($this->binary !== null) $output['webimageBinary'] = $this->binary;
        if ($this->oldFileName !== null) $output['webimageOldFileName'] = $this->oldFileName;
        if ($this->name !== null) $output['webimageName'] = $this->name;

        return $output;
    }
}