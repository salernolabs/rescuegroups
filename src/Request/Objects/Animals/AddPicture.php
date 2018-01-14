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
     *
     * @var integer
     */
    private $animalID = null;

    /**
     * Picture
     *
     * @var string
     */
    private $pictureBinary = null;

    /**
     * File name
     *
     * @var string
     */
    private $fileName = null;

    /**
     * Order
     *
     * @var string
     */
    private $mediaOrder = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalID($value)
    {
        $this->animalID = $value;

        return $this;
    }

    /**
     * Set Picture
     *
     * @param string $value
     * @return $this
     */
    public function setPictureBinary($value)
    {
        $this->pictureBinary = $value;

        return $this;
    }

    /**
     * Set File name
     *
     * @param string $value
     * @return $this
     */
    public function setFileName($value)
    {
        $this->fileName = $value;

        return $this;
    }

    /**
     * Set Order
     *
     * @param string $value
     * @return $this
     */
    public function setMediaOrder($value)
    {
        $this->mediaOrder = $value;

        return $this;
    }


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->animalID !== null) $parameterArray['values'][] = ["animalID"=>$this->animalID];
        if ($this->pictureBinary !== null) $parameterArray['values'][] = ["pictureBinary"=>$this->pictureBinary];
        if ($this->fileName !== null) $parameterArray['values'][] = ["fileName"=>$this->fileName];
        if ($this->mediaOrder !== null) $parameterArray['values'][] = ["mediaOrder"=>$this->mediaOrder];
    }
}