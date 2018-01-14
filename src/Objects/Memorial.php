<?php
/**
 * Memorial Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Memorial implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
     *
     * @var integer
     */
    public $memorialID = null;

    /**
     * File
     *
     * @var string
     */
    public $memorialPictureBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $memorialPictureOldFileName = null;

    /**
     * File name
     *
     * @var string
     */
    public $memorialName = null;

    /**
     * Description
     *
     * @var string
     */
    public $memorialDescription = null;


    /**
     * Memorial Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->memorialID)) $this->memorialID = $inputData->memorialID;
        if (!empty($inputData->memorialPictureBinary)) $this->memorialPictureBinary = $inputData->memorialPictureBinary;
        if (!empty($inputData->memorialPictureOldFileName)) $this->memorialPictureOldFileName = $inputData->memorialPictureOldFileName;
        if (!empty($inputData->memorialName)) $this->memorialName = $inputData->memorialName;
        if (!empty($inputData->memorialDescription)) $this->memorialDescription = $inputData->memorialDescription;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->memorialID !== null) $output['memorialID'] = $this->memorialID;
        if ($this->memorialPictureBinary !== null) $output['memorialPictureBinary'] = $this->memorialPictureBinary;
        if ($this->memorialPictureOldFileName !== null) $output['memorialPictureOldFileName'] = $this->memorialPictureOldFileName;
        if ($this->memorialName !== null) $output['memorialName'] = $this->memorialName;
        if ($this->memorialDescription !== null) $output['memorialDescription'] = $this->memorialDescription;

        return $output;
    }
}