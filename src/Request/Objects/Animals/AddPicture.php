<?php
/**
 * Animals AddPicture Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class AddPicture implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $animalID = null;

    /**
     * Picture
     * @var binary
     */
    private $pictureBinary = null;

    /**
     * File name
     * @var string
     */
    private $fileName = null;

    /**
     * Order
     * @var int
     */
    private $mediaOrder = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animals';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'addPicture';
    }

    /**
     * Set ID
     *
     * @param integer $animalID
     * @return $this
     */
    public function setAnimalID($animalID)
    {
        $this->animalID = $animalID;

        return $this;
    }

    /**
     * Set Picture
     *
     * @param binary $pictureBinary
     * @return $this
     */
    public function setPictureBinary($pictureBinary)
    {
        $this->pictureBinary = $pictureBinary;

        return $this;
    }

    /**
     * Set File name
     *
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Set Order
     *
     * @param int $mediaOrder
     * @return $this
     */
    public function setMediaOrder($mediaOrder)
    {
        $this->mediaOrder = $mediaOrder;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->pictureBinary !== null) $parameterArray['pictureBinary'] = $this->pictureBinary;
        if ($this->fileName !== null) $parameterArray['fileName'] = $this->fileName;
        if ($this->mediaOrder !== null) $parameterArray['mediaOrder'] = $this->mediaOrder;

    }
}