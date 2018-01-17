<?php
/**
 * Memorial Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class Memorial implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * File
     *
     * @var string
     */
    public $memorialPictureBinary = null;

    /**
     * File name
     *
     * @var string
     */
    public $memorialName = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $memorialPictureOldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    public $memorialDescription = null;

    /**
     * Order
     *
     * @var string
     */
    public $memorialOrder = null;


    /**
     * Memorial Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->memorialPictureBinary)) $this->memorialPictureBinary = $inputData->memorialPictureBinary;
        if (!empty($inputData->memorialName)) $this->memorialName = $inputData->memorialName;
        if (!empty($inputData->memorialPictureOldFileName)) $this->memorialPictureOldFileName = $inputData->memorialPictureOldFileName;
        if (!empty($inputData->memorialDescription)) $this->memorialDescription = $inputData->memorialDescription;
        if (!empty($inputData->memorialOrder)) $this->memorialOrder = $inputData->memorialOrder;
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
        if ($this->memorialPictureBinary !== null) $output['memorialPictureBinary'] = $this->memorialPictureBinary;
        if ($this->memorialName !== null) $output['memorialName'] = $this->memorialName;
        if ($this->memorialPictureOldFileName !== null) $output['memorialPictureOldFileName'] = $this->memorialPictureOldFileName;
        if ($this->memorialDescription !== null) $output['memorialDescription'] = $this->memorialDescription;
        if ($this->memorialOrder !== null) $output['memorialOrder'] = $this->memorialOrder;

        return $output;
    }
}