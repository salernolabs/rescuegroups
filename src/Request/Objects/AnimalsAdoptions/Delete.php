<?php
/**
 * AnimalsAdoptions Delete Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class Delete extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsAdoptions';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'delete';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Adoption ID
     *
     * @var integer
     */
    private $adoptionID = null;

    /**
     * Remove contact from adopters group
     *
     * @var string
     */
    private $adoptionRemoveContact = null;

    /**
     * Change animal to available
     *
     * @var string
     */
    private $adoptionChangeAnimal = null;

    /**
     * Change submitted form to cancelled
     *
     * @var string
     */
    private $adoptionChangeSubmittedform = null;

    /**
     * Remove Adopter role from user
     *
     * @var string
     */
    private $adoptionRemoveUser = null;

    /**
     * Donation
     *
     * @var float
     */
    private $adoptionDonationAmount = null;

    /**
     * Thank you letter sent
     *
     * @var string
     */
    private $adoptionLetterSent = null;


    /**
     * Set Adoption ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionID($value)
    {
        $this->adoptionID = $value;

        return $this;
    }

    /**
     * Set Remove contact from adopters group
     *
     * @param string $value
     * @return $this
     */
    public function setAdoptionRemoveContact($value)
    {
        $this->adoptionRemoveContact = $value;

        return $this;
    }

    /**
     * Set Change animal to available
     *
     * @param string $value
     * @return $this
     */
    public function setAdoptionChangeAnimal($value)
    {
        $this->adoptionChangeAnimal = $value;

        return $this;
    }

    /**
     * Set Change submitted form to cancelled
     *
     * @param string $value
     * @return $this
     */
    public function setAdoptionChangeSubmittedform($value)
    {
        $this->adoptionChangeSubmittedform = $value;

        return $this;
    }

    /**
     * Set Remove Adopter role from user
     *
     * @param string $value
     * @return $this
     */
    public function setAdoptionRemoveUser($value)
    {
        $this->adoptionRemoveUser = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->adoptionID !== null) $parameterArray['values'][] = ["adoptionID"=>$this->adoptionID];
        if ($this->adoptionRemoveContact !== null) $parameterArray['values'][] = ["adoptionRemoveContact"=>$this->adoptionRemoveContact];
        if ($this->adoptionChangeAnimal !== null) $parameterArray['values'][] = ["adoptionChangeAnimal"=>$this->adoptionChangeAnimal];
        if ($this->adoptionChangeSubmittedform !== null) $parameterArray['values'][] = ["adoptionChangeSubmittedform"=>$this->adoptionChangeSubmittedform];
        if ($this->adoptionRemoveUser !== null) $parameterArray['values'][] = ["adoptionRemoveUser"=>$this->adoptionRemoveUser];
        if ($this->adoptionDonationAmount !== null) $parameterArray['values'][] = ["adoptionDonationAmount"=>$this->adoptionDonationAmount];
        if ($this->adoptionLetterSent !== null) $parameterArray['values'][] = ["adoptionLetterSent"=>$this->adoptionLetterSent];
    }
}