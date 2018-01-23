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
    public $pictureBinary = null;

    /**
     * File name
     *
     * @var string
     */
    public $name = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $pictureOldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Order
     *
     * @var string
     */
    public $order = null;


    /**
     * Memorial Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->memorialPictureBinary)) $this->pictureBinary = $inputData->memorialPictureBinary;
        if (!empty($inputData->memorialName)) $this->name = $inputData->memorialName;
        if (!empty($inputData->memorialPictureOldFileName)) $this->pictureOldFileName = $inputData->memorialPictureOldFileName;
        if (!empty($inputData->memorialDescription)) $this->description = $inputData->memorialDescription;
        if (!empty($inputData->memorialOrder)) $this->order = $inputData->memorialOrder;
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
        if ($this->pictureBinary !== null) $output['memorialPictureBinary'] = $this->pictureBinary;
        if ($this->name !== null) $output['memorialName'] = $this->name;
        if ($this->pictureOldFileName !== null) $output['memorialPictureOldFileName'] = $this->pictureOldFileName;
        if ($this->description !== null) $output['memorialDescription'] = $this->description;
        if ($this->order !== null) $output['memorialOrder'] = $this->order;

        return $output;
    }
}