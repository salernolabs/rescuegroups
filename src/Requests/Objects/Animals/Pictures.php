<?php
/**
 * Animals Pictures Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:14
 */
namespace RescueGroups\Requests\Objects\Animals;

class Pictures implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $animalID = null;


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
        return 'pictures';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;

    }
}