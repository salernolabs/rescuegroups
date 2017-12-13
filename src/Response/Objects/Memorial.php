<?php
/**
 * Memorial Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class Memorial
{
    /**
     * File
     * @var string
     */
    public $memorialPictureBinary;

    /**
     * File name
     * @var string
     */
    public $memorialName;

    /**
     * Old file name
     * @var string
     */
    public $memorialPictureOldFileName;

    /**
     * Description
     * @var string
     */
    public $memorialDescription;

    /**
     * Order
     * @var string
     */
    public $memorialOrder;



    /**
     * Memorials Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->memorialPictureBinary)) $this->memorialPictureBinary = $inputData->memorialPictureBinary;
        if (!empty($inputData->memorialName)) $this->memorialName = $inputData->memorialName;
        if (!empty($inputData->memorialPictureOldFileName)) $this->memorialPictureOldFileName = $inputData->memorialPictureOldFileName;
        if (!empty($inputData->memorialDescription)) $this->memorialDescription = $inputData->memorialDescription;
        if (!empty($inputData->memorialOrder)) $this->memorialOrder = $inputData->memorialOrder;

    }
}