<?php
/**
 * SubmittedForms Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\SubmittedForms;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $submittedformID = null;

    /**
     * Animal
     * @var integer
     */
    private $submittedformAnimalID = null;

    /**
     * Status
     * @var integer
     */
    private $submittedformStatusID = null;


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
        return 'submittedforms';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $submittedformID
     * @return $this
     */
    public function setSubmittedformID($submittedformID)
    {
        $this->submittedformID = $submittedformID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $submittedformAnimalID
     * @return $this
     */
    public function setSubmittedformAnimalID($submittedformAnimalID)
    {
        $this->submittedformAnimalID = $submittedformAnimalID;

        return $this;
    }

    /**
     * Set Status
     *
     * @param integer $submittedformStatusID
     * @return $this
     */
    public function setSubmittedformStatusID($submittedformStatusID)
    {
        $this->submittedformStatusID = $submittedformStatusID;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->submittedformID !== null) $parameterArray['submittedformID'] = $this->submittedformID;
        if ($this->submittedformAnimalID !== null) $parameterArray['submittedformAnimalID'] = $this->submittedformAnimalID;
        if ($this->submittedformStatusID !== null) $parameterArray['submittedformStatusID'] = $this->submittedformStatusID;

    }
}