<?php
/**
 * IntakesBorninrescueshelter View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\IntakesBorninrescueshelter;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Born In Rescue/Shelter
     * @var integer
     */
    private $intakesBorninrescueshelterID = null;


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
        return 'intakesBorninrescueshelter';
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
     * Set Born In Rescue/Shelter
     *
     * @param integer $intakesBorninrescueshelterID
     * @return $this
     */
    public function setIntakesBorninrescueshelterID($intakesBorninrescueshelterID)
    {
        $this->intakesBorninrescueshelterID = $intakesBorninrescueshelterID;

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
        if ($this->intakesBorninrescueshelterID !== null) $parameterArray['intakesBorninrescueshelterID'] = $this->intakesBorninrescueshelterID;

    }
}