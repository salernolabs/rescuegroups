<?php
/**
 * Animals AddPictureUrl Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:32
 */
namespace RescueGroups\Requests\Objects\Animals;

class AddPictureUrl implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $animalID = null;

    /**
     * Picture Url
     * @var url
     */
    private $pictureUrl = null;

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
        return 'addPictureUrl';
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
     * Set Picture Url
     *
     * @param url $pictureUrl
     * @return $this
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;

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
        if ($this->pictureUrl !== null) $parameterArray['pictureUrl'] = $this->pictureUrl;
        if ($this->mediaOrder !== null) $parameterArray['mediaOrder'] = $this->mediaOrder;

    }
}