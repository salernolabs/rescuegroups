<?php
/**
 * Animals AddVideo Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class AddVideo implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $animalID = null;

    /**
     * Video
     * @var string
     */
    private $videoBinary = null;

    /**
     * File name
     * @var string
     */
    private $fileName = null;

    /**
     * Order
     * @var string
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
        return 'addVideo';
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
     * Set Video
     *
     * @param string $videoBinary
     * @return $this
     */
    public function setVideoBinary($videoBinary)
    {
        $this->videoBinary = $videoBinary;

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
     * @param string $mediaOrder
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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->videoBinary !== null) $parameterArray['videoBinary'] = $this->videoBinary;
        if ($this->fileName !== null) $parameterArray['fileName'] = $this->fileName;
        if ($this->mediaOrder !== null) $parameterArray['mediaOrder'] = $this->mediaOrder;

    }
}