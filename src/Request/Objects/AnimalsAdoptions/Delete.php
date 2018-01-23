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
    private $id = null;

    /**
     * Remove contact from adopters group
     *
     * @var string
     */
    private $removeContact = null;

    /**
     * Change animal to available
     *
     * @var string
     */
    private $changeAnimal = null;

    /**
     * Change submitted form to cancelled
     *
     * @var string
     */
    private $changeSubmittedform = null;

    /**
     * Remove Adopter role from user
     *
     * @var string
     */
    private $removeUser = null;

    /**
     * Donation
     *
     * @var float
     */
    private $donationAmount = null;

    /**
     * Thank you letter sent
     *
     * @var string
     */
    private $letterSent = null;


    /**
     * Set Adoption ID
     *
     * @param integer $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * Set Remove contact from adopters group
     *
     * @param string $value
     * @return $this
     */
    public function setRemoveContact($value)
    {
        $this->removeContact = $value;

        return $this;
    }

    /**
     * Set Change animal to available
     *
     * @param string $value
     * @return $this
     */
    public function setChangeAnimal($value)
    {
        $this->changeAnimal = $value;

        return $this;
    }

    /**
     * Set Change submitted form to cancelled
     *
     * @param string $value
     * @return $this
     */
    public function setChangeSubmittedform($value)
    {
        $this->changeSubmittedform = $value;

        return $this;
    }

    /**
     * Set Remove Adopter role from user
     *
     * @param string $value
     * @return $this
     */
    public function setRemoveUser($value)
    {
        $this->removeUser = $value;

        return $this;
    }

    /**
     * Set Donation
     *
     * @param float $value
     * @return $this
     */
    public function setDonationAmount($value)
    {
        $this->donationAmount = $value;

        return $this;
    }

    /**
     * Set Thank you letter sent
     *
     * @param string $value
     * @return $this
     */
    public function setLetterSent($value)
    {
        $this->letterSent = $value;

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

        if ($this->id !== null) $parameterArray['values'][] = ["adoptionID"=>$this->id];
        if ($this->removeContact !== null) $parameterArray['values'][] = ["adoptionRemoveContact"=>$this->removeContact];
        if ($this->changeAnimal !== null) $parameterArray['values'][] = ["adoptionChangeAnimal"=>$this->changeAnimal];
        if ($this->changeSubmittedform !== null) $parameterArray['values'][] = ["adoptionChangeSubmittedform"=>$this->changeSubmittedform];
        if ($this->removeUser !== null) $parameterArray['values'][] = ["adoptionRemoveUser"=>$this->removeUser];
        if ($this->donationAmount !== null) $parameterArray['values'][] = ["adoptionDonationAmount"=>$this->donationAmount];
        if ($this->letterSent !== null) $parameterArray['values'][] = ["adoptionLetterSent"=>$this->letterSent];
    }
}