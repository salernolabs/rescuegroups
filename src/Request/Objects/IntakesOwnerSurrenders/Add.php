<?php
/**
 * IntakesOwnerSurrenders Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerSurrenders;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Animal
     *
     * @var integer
     */
    private $intakesOwnersurrenderAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $intakesOwnersurrenderAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $intakesOwnersurrenderDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $intakesOwnersurrenderNotes = null;

    /**
     * Surrendered By
     *
     * @var integer
     */
    private $intakesOwnersurrenderOwnerID = null;

    /**
     * Surrender Reason
     *
     * @var integer
     */
    private $intakesOwnersurrenderReasonID = null;


    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderAnimalID($value)
    {
        $this->intakesOwnersurrenderAnimalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderAnimalConditionID($value)
    {
        $this->intakesOwnersurrenderAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setIntakesOwnersurrenderDate($value)
    {
        $this->intakesOwnersurrenderDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesOwnersurrenderNotes($value)
    {
        $this->intakesOwnersurrenderNotes = $value;

        return $this;
    }

    /**
     * Set Surrendered By
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderOwnerID($value)
    {
        $this->intakesOwnersurrenderOwnerID = $value;

        return $this;
    }

    /**
     * Set Surrender Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderReasonID($value)
    {
        $this->intakesOwnersurrenderReasonID = $value;

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
        return 'intakesOwnersurrenders';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->intakesOwnersurrenderAnimalID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderAnimalID"=>$this->intakesOwnersurrenderAnimalID];
        if ($this->intakesOwnersurrenderAnimalConditionID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderAnimalConditionID"=>$this->intakesOwnersurrenderAnimalConditionID];
        if ($this->intakesOwnersurrenderDate !== null) $parameterArray['values'][] = ["intakesOwnersurrenderDate"=>$this->intakesOwnersurrenderDate];
        if ($this->intakesOwnersurrenderNotes !== null) $parameterArray['values'][] = ["intakesOwnersurrenderNotes"=>$this->intakesOwnersurrenderNotes];
        if ($this->intakesOwnersurrenderOwnerID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderOwnerID"=>$this->intakesOwnersurrenderOwnerID];
        if ($this->intakesOwnersurrenderReasonID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderReasonID"=>$this->intakesOwnersurrenderReasonID];
    }
}