<?php
/**
 * AnimalsAdoptions Delete Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\AnimalsAdoptions;

class Delete implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Adoption ID
     * @var integer
     */
    private $adoptionID = null;

    /**
     * Remove contact from adopters group
     * @var string
     */
    private $adoptionRemoveContact = null;

    /**
     * Change animal to available
     * @var string
     */
    private $adoptionChangeAnimal = null;

    /**
     * Change submitted form to cancelled
     * @var string
     */
    private $adoptionChangeSubmittedform = null;

    /**
     * Remove Adopter role from user
     * @var string
     */
    private $adoptionRemoveUser = null;

    /**
     * Donation
     * @var float
     */
    private $adoptionDonationAmount = null;

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
        return 'delete';
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
     * Set Remove contact from adopters group
     *
     * @param string $adoptionRemoveContact
     * @return $this
     */
    public function setAdoptionRemoveContact($adoptionRemoveContact)
    {
        $this->adoptionRemoveContact = $adoptionRemoveContact;

        return $this;
    }

    /**
     * Set Change animal to available
     *
     * @param string $adoptionChangeAnimal
     * @return $this
     */
    public function setAdoptionChangeAnimal($adoptionChangeAnimal)
    {
        $this->adoptionChangeAnimal = $adoptionChangeAnimal;

        return $this;
    }

    /**
     * Set Change submitted form to cancelled
     *
     * @param string $adoptionChangeSubmittedform
     * @return $this
     */
    public function setAdoptionChangeSubmittedform($adoptionChangeSubmittedform)
    {
        $this->adoptionChangeSubmittedform = $adoptionChangeSubmittedform;

        return $this;
    }

    /**
     * Set Remove Adopter role from user
     *
     * @param string $adoptionRemoveUser
     * @return $this
     */
    public function setAdoptionRemoveUser($adoptionRemoveUser)
    {
        $this->adoptionRemoveUser = $adoptionRemoveUser;

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
        if ($this->adoptionRemoveContact !== null) $parameterArray['adoptionRemoveContact'] = $this->adoptionRemoveContact;
        if ($this->adoptionChangeAnimal !== null) $parameterArray['adoptionChangeAnimal'] = $this->adoptionChangeAnimal;
        if ($this->adoptionChangeSubmittedform !== null) $parameterArray['adoptionChangeSubmittedform'] = $this->adoptionChangeSubmittedform;
        if ($this->adoptionRemoveUser !== null) $parameterArray['adoptionRemoveUser'] = $this->adoptionRemoveUser;
        if ($this->adoptionDonationAmount !== null) $parameterArray['adoptionDonationAmount'] = $this->adoptionDonationAmount;
        if ($this->adoptionLetterSent !== null) $parameterArray['adoptionLetterSent'] = $this->adoptionLetterSent;

    }
}