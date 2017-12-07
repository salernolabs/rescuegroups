<?php
/**
 * AnimalsAdoptions View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:17
 */
namespace RescueGroups\Requests\Objects\AnimalsAdoptions;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Adoption ID
     * @var integer
     */
    private $adoptionID = null;


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
        return 'animalsAdoptions';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'view';
    }

    /**
     * Set Adoption ID
     *
     * @param integer $adoptionID
     * @return $this
     */
    public function setAdoptionID($adoptionID)
    {
        $this->adoptionID = $adoptionID;

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
        if ($this->adoptionID !== null) $parameterArray['adoptionID'] = $this->adoptionID;

    }
}