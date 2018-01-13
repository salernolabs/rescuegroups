<?php
/**
 * Memorial Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Memorial
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->memorialID)) $this->memorialID = $inputData->memorialID;
        if (!empty($inputData->memorialPictureBinary)) $this->memorialPictureBinary = $inputData->memorialPictureBinary;
        if (!empty($inputData->memorialPictureOldFileName)) $this->memorialPictureOldFileName = $inputData->memorialPictureOldFileName;
        if (!empty($inputData->memorialName)) $this->memorialName = $inputData->memorialName;
        if (!empty($inputData->memorialDescription)) $this->memorialDescription = $inputData->memorialDescription;
    }
}