<?php
/**
 * AnimalsAdoptions Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\AnimalsAdoptions;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Adoption ID
     * @var integer
     */
    private $adoptionID = null;

    /**
     * Animal ID
     * @var integer
     */
    private $adoptionAnimalID = null;

    /**
     * Adopter ID
     * @var integer
     */
    private $adoptionAdopterID = null;

    /**
     * Lead ID
     * @var integer
     */
    private $adoptionLeadID = null;

    /**
     * Fee
     * @var float
     */
    private $adoptionFeeAmount = null;

    /**
     * Donation
     * @var float
     */
    private $adoptionDonationAmount = null;

    /**
     * Donation ID
     * @var integer
     */
    private $adoptionDonationID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $adoptionDate = null;

    /**
     * Submitted form ID
     * @var integer
     */
    private $adoptionSubmittedformID = null;

    /**
     * Status ID
     * @var integer
     */
    private $adoptionStatusID = null;

    /**
     * Thank you letter sent
     * @var string
     */
    private $adoptionLetterSent = null;


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
        return 'edit';
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
     * Set Animal ID
     *
     * @param integer $adoptionAnimalID
     * @return $this
     */
    public function setAdoptionAnimalID($adoptionAnimalID)
    {
        $this->adoptionAnimalID = $adoptionAnimalID;

        return $this;
    }

    /**
     * Set Adopter ID
     *
     * @param integer $adoptionAdopterID
     * @return $this
     */
    public function setAdoptionAdopterID($adoptionAdopterID)
    {
        $this->adoptionAdopterID = $adoptionAdopterID;

        return $this;
    }

    /**
     * Set Lead ID
     *
     * @param integer $adoptionLeadID
     * @return $this
     */
    public function setAdoptionLeadID($adoptionLeadID)
    {
        $this->adoptionLeadID = $adoptionLeadID;

        return $this;
    }

    /**
     * Set Fee
     *
     * @param float $adoptionFeeAmount
     * @return $this
     */
    public function setAdoptionFeeAmount($adoptionFeeAmount)
    {
        $this->adoptionFeeAmount = $adoptionFeeAmount;

        return $this;
    }

    /**
     * Set Donation
     *
     * @param float $adoptionDonationAmount
     * @return $this
     */
    public function setAdoptionDonationAmount($adoptionDonationAmount)
    {
        $this->adoptionDonationAmount = $adoptionDonationAmount;

        return $this;
    }

    /**
     * Set Donation ID
     *
     * @param integer $adoptionDonationID
     * @return $this
     */
    public function setAdoptionDonationID($adoptionDonationID)
    {
        $this->adoptionDonationID = $adoptionDonationID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $adoptionDate
     * @return $this
     */
    public function setAdoptionDate($adoptionDate)
    {
        $this->adoptionDate = $adoptionDate;

        return $this;
    }

    /**
     * Set Submitted form ID
     *
     * @param integer $adoptionSubmittedformID
     * @return $this
     */
    public function setAdoptionSubmittedformID($adoptionSubmittedformID)
    {
        $this->adoptionSubmittedformID = $adoptionSubmittedformID;

        return $this;
    }

    /**
     * Set Status ID
     *
     * @param integer $adoptionStatusID
     * @return $this
     */
    public function setAdoptionStatusID($adoptionStatusID)
    {
        $this->adoptionStatusID = $adoptionStatusID;

        return $this;
    }

    /**
     * Set Thank you letter sent
     *
     * @param string $adoptionLetterSent
     * @return $this
     */
    public function setAdoptionLetterSent($adoptionLetterSent)
    {
        $this->adoptionLetterSent = $adoptionLetterSent;

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
        if ($this->adoptionAnimalID !== null) $parameterArray['adoptionAnimalID'] = $this->adoptionAnimalID;
        if ($this->adoptionAdopterID !== null) $parameterArray['adoptionAdopterID'] = $this->adoptionAdopterID;
        if ($this->adoptionLeadID !== null) $parameterArray['adoptionLeadID'] = $this->adoptionLeadID;
        if ($this->adoptionFeeAmount !== null) $parameterArray['adoptionFeeAmount'] = $this->adoptionFeeAmount;
        if ($this->adoptionDonationAmount !== null) $parameterArray['adoptionDonationAmount'] = $this->adoptionDonationAmount;
        if ($this->adoptionDonationID !== null) $parameterArray['adoptionDonationID'] = $this->adoptionDonationID;
        if ($this->adoptionDate !== null) $parameterArray['adoptionDate'] = $this->adoptionDate;
        if ($this->adoptionSubmittedformID !== null) $parameterArray['adoptionSubmittedformID'] = $this->adoptionSubmittedformID;
        if ($this->adoptionStatusID !== null) $parameterArray['adoptionStatusID'] = $this->adoptionStatusID;
        if ($this->adoptionLetterSent !== null) $parameterArray['adoptionLetterSent'] = $this->adoptionLetterSent;

    }
}