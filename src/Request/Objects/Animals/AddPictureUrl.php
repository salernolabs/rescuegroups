<?php
/**
 * Animals AddPictureUrl Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class AddPictureUrl implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     *
     * @var integer
     */
    private $animalID = null;

    /**
     * Picture Url
     *
     * @var string
     */
    private $pictureUrl = null;

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
     * Set Picture Url
     *
     * @param string $value
     * @return $this
     */
    public function setPictureUrl($value)
    {
        $this->pictureUrl = $value;

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
        return 'addPictureUrl';
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
        if ($this->pictureUrl !== null) $parameterArray['values'][] = ["pictureUrl"=>$this->pictureUrl];
        if ($this->mediaOrder !== null) $parameterArray['values'][] = ["mediaOrder"=>$this->mediaOrder];
    }
}