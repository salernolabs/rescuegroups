<?php
/**
 * Animals PictureReorder Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:33
 */
namespace RescueGroups\Requests\Objects\Animals;

class PictureReorder implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $animalID = null;

    /**
     * ID
     * @var int
     */
    private $mediaID = null;

    /**
     * Order
     * @var int
     */
    private $newOrder = null;


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
        return 'pictureReorder';
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
     * Set ID
     *
     * @param int $mediaID
     * @return $this
     */
    public function setMediaID($mediaID)
    {
        $this->mediaID = $mediaID;

        return $this;
    }

    /**
     * Set Order
     *
     * @param int $newOrder
     * @return $this
     */
    public function setNewOrder($newOrder)
    {
        $this->newOrder = $newOrder;

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
        if ($this->mediaID !== null) $parameterArray['mediaID'] = $this->mediaID;
        if ($this->newOrder !== null) $parameterArray['newOrder'] = $this->newOrder;

    }
}