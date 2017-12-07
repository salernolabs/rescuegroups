<?php
/**
 * IntakesOwnerSurrenders Change Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:22
 */
namespace RescueGroups\Requests\Objects\IntakesOwnerSurrenders;

class Change implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Intake
     * @var integer
     */
    private $intakeID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesOwnersurrenderAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesOwnersurrenderAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesOwnersurrenderDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesOwnersurrenderNotes = null;

    /**
     * Surrendered By
     * @var integer
     */
    private $intakesOwnersurrenderOwnerID = null;

    /**
     * Surrender Reason
     * @var integer
     */
    private $intakesOwnersurrenderReasonID = null;


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
        return 'intakesOwnersurrenders';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'change';
    }

    /**
     * Set Intake
     *
     * @param integer $intakeID
     * @return $this
     */
    public function setIntakeID($intakeID)
    {
        $this->intakeID = $intakeID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesOwnersurrenderAnimalID
     * @return $this
     */
    public function setIntakesOwnersurrenderAnimalID($intakesOwnersurrenderAnimalID)
    {
        $this->intakesOwnersurrenderAnimalID = $intakesOwnersurrenderAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesOwnersurrenderAnimalConditionID
     * @return $this
     */
    public function setIntakesOwnersurrenderAnimalConditionID($intakesOwnersurrenderAnimalConditionID)
    {
        $this->intakesOwnersurrenderAnimalConditionID = $intakesOwnersurrenderAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesOwnersurrenderDate
     * @return $this
     */
    public function setIntakesOwnersurrenderDate($intakesOwnersurrenderDate)
    {
        $this->intakesOwnersurrenderDate = $intakesOwnersurrenderDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesOwnersurrenderNotes
     * @return $this
     */
    public function setIntakesOwnersurrenderNotes($intakesOwnersurrenderNotes)
    {
        $this->intakesOwnersurrenderNotes = $intakesOwnersurrenderNotes;

        return $this;
    }

    /**
     * Set Surrendered By
     *
     * @param integer $intakesOwnersurrenderOwnerID
     * @return $this
     */
    public function setIntakesOwnersurrenderOwnerID($intakesOwnersurrenderOwnerID)
    {
        $this->intakesOwnersurrenderOwnerID = $intakesOwnersurrenderOwnerID;

        return $this;
    }

    /**
     * Set Surrender Reason
     *
     * @param integer $intakesOwnersurrenderReasonID
     * @return $this
     */
    public function setIntakesOwnersurrenderReasonID($intakesOwnersurrenderReasonID)
    {
        $this->intakesOwnersurrenderReasonID = $intakesOwnersurrenderReasonID;

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
        if ($this->intakeID !== null) $parameterArray['intakeID'] = $this->intakeID;
        if ($this->intakesOwnersurrenderAnimalID !== null) $parameterArray['intakesOwnersurrenderAnimalID'] = $this->intakesOwnersurrenderAnimalID;
        if ($this->intakesOwnersurrenderAnimalConditionID !== null) $parameterArray['intakesOwnersurrenderAnimalConditionID'] = $this->intakesOwnersurrenderAnimalConditionID;
        if ($this->intakesOwnersurrenderDate !== null) $parameterArray['intakesOwnersurrenderDate'] = $this->intakesOwnersurrenderDate;
        if ($this->intakesOwnersurrenderNotes !== null) $parameterArray['intakesOwnersurrenderNotes'] = $this->intakesOwnersurrenderNotes;
        if ($this->intakesOwnersurrenderOwnerID !== null) $parameterArray['intakesOwnersurrenderOwnerID'] = $this->intakesOwnersurrenderOwnerID;
        if ($this->intakesOwnersurrenderReasonID !== null) $parameterArray['intakesOwnersurrenderReasonID'] = $this->intakesOwnersurrenderReasonID;

    }
}