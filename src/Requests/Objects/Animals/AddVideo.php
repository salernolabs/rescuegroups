<?php
/**
 * Animals AddVideo Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:14
 */
namespace RescueGroups\Requests\Objects\Animals;

class AddVideo implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $animalID = null;

    /**
     * Video
     * @var binary
     */
    private $videoBinary = null;

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
     * @param binary $videoBinary
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
        if ($this->videoBinary !== null) $parameterArray['videoBinary'] = $this->videoBinary;
        if ($this->fileName !== null) $parameterArray['fileName'] = $this->fileName;
        if ($this->mediaOrder !== null) $parameterArray['mediaOrder'] = $this->mediaOrder;

    }
}