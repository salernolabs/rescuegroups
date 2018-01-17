<?php
/**
 * AnimalsAdoptions Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class Add extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsAdoptions';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'add';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Animal ID
     *
     * @var integer
     */
    private $adoptionAnimalID = null;

    /**
     * Adopter ID
     *
     * @var integer
     */
    private $adoptionAdopterID = null;

    /**
     * Lead ID
     *
     * @var integer
     */
    private $adoptionLeadID = null;

    /**
     * Fee
     *
     * @var float
     */
    private $adoptionFeeAmount = null;

    /**
     * Donation
     *
     * @var float
     */
    private $adoptionDonationAmount = null;

    /**
     * Donation ID
     *
     * @var integer
     */
    private $adoptionDonationID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $adoptionDate = null;

    /**
     * Submitted form ID
     *
     * @var integer
     */
    private $adoptionSubmittedformID = null;

    /**
     * Status ID
     *
     * @var integer
     */
    private $adoptionStatusID = null;

    /**
     * Thank you letter sent
     *
     * @var string
     */
    private $adoptionLetterSent = null;

    /**
     * Add contact to adopters group
     *
     * @var string
     */
    private $adoptionAddAdopterRole = null;


    /**
     * Set Animal ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionAnimalID($value)
    {
        $this->adoptionAnimalID = $value;

        return $this;
    }

    /**
     * Set Adopter ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionAdopterID($value)
    {
        $this->adoptionAdopterID = $value;

        return $this;
    }

    /**
     * Set Lead ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionLeadID($value)
    {
        $this->adoptionLeadID = $value;

        return $this;
    }

    /**
     * Set Fee
     *
     * @param float $value
     * @return $this
     */
    public function setAdoptionFeeAmount($value)
    {
        $this->adoptionFeeAmount = $value;

        return $this;
    }

    /**
     * Set Donation
     *
     * @param float $value
     * @return $this
     */
    public function setAdoptionDonationAmount($value)
    {
        $this->adoptionDonationAmount = $value;

        return $this;
    }

    /**
     * Set Donation ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionDonationID($value)
    {
        $this->adoptionDonationID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setAdoptionDate($value)
    {
        $this->adoptionDate = $value;

        return $this;
    }

    /**
     * Set Submitted form ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionSubmittedformID($value)
    {
        $this->adoptionSubmittedformID = $value;

        return $this;
    }

    /**
     * Set Status ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionStatusID($value)
    {
        $this->adoptionStatusID = $value;

        return $this;
    }

    /**
     * Set Thank you letter sent
     *
     * @param string $value
     * @return $this
     */
    public function setAdoptionLetterSent($value)
    {
        $this->adoptionLetterSent = $value;

        return $this;
    }

    /**
     * Set Add contact to adopters group
     *
     * @param string $value
     * @return $this
     */
    public function setAdoptionAddAdopterRole($value)
    {
        $this->adoptionAddAdopterRole = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->adoptionAnimalID !== null) $parameterArray['values'][] = ["adoptionAnimalID"=>$this->adoptionAnimalID];
        if ($this->adoptionAdopterID !== null) $parameterArray['values'][] = ["adoptionAdopterID"=>$this->adoptionAdopterID];
        if ($this->adoptionLeadID !== null) $parameterArray['values'][] = ["adoptionLeadID"=>$this->adoptionLeadID];
        if ($this->adoptionFeeAmount !== null) $parameterArray['values'][] = ["adoptionFeeAmount"=>$this->adoptionFeeAmount];
        if ($this->adoptionDonationAmount !== null) $parameterArray['values'][] = ["adoptionDonationAmount"=>$this->adoptionDonationAmount];
        if ($this->adoptionDonationID !== null) $parameterArray['values'][] = ["adoptionDonationID"=>$this->adoptionDonationID];
        if ($this->adoptionDate !== null) $parameterArray['values'][] = ["adoptionDate"=>$this->adoptionDate];
        if ($this->adoptionSubmittedformID !== null) $parameterArray['values'][] = ["adoptionSubmittedformID"=>$this->adoptionSubmittedformID];
        if ($this->adoptionStatusID !== null) $parameterArray['values'][] = ["adoptionStatusID"=>$this->adoptionStatusID];
        if ($this->adoptionLetterSent !== null) $parameterArray['values'][] = ["adoptionLetterSent"=>$this->adoptionLetterSent];
        if ($this->adoptionAddAdopterRole !== null) $parameterArray['values'][] = ["adoptionAddAdopterRole"=>$this->adoptionAddAdopterRole];
    }
}