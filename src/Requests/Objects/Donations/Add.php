<?php
/**
 * Donations Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\Donations;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Contact
     * @var integer
     */
    private $donationContactID = null;

    /**
     * Amount
     * @var float
     */
    private $donationAmount = null;

    /**
     * Inkind type
     * @var string
     */
    private $donationInkind = null;

    /**
     * Comment
     * @var string
     */
    private $donationComment = null;

    /**
     * Letter sent
     * @var string
     */
    private $donationLettersent = null;

    /**
     * Purpose
     * @var string
     */
    private $donationPurpose = null;

    /**
     * Date
     * @var \DateTime
     */
    private $donationDate = null;

    /**
     * Add contact to Donor group
     * @var string
     */
    private $donationAddDonorGroup = null;


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
        return 'donations';
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
     * Set Contact
     *
     * @param integer $donationContactID
     * @return $this
     */
    public function setDonationContactID($donationContactID)
    {
        $this->donationContactID = $donationContactID;

        return $this;
    }

    /**
     * Set Amount
     *
     * @param float $donationAmount
     * @return $this
     */
    public function setDonationAmount($donationAmount)
    {
        $this->donationAmount = $donationAmount;

        return $this;
    }

    /**
     * Set Inkind type
     *
     * @param string $donationInkind
     * @return $this
     */
    public function setDonationInkind($donationInkind)
    {
        $this->donationInkind = $donationInkind;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $donationComment
     * @return $this
     */
    public function setDonationComment($donationComment)
    {
        $this->donationComment = $donationComment;

        return $this;
    }

    /**
     * Set Letter sent
     *
     * @param string $donationLettersent
     * @return $this
     */
    public function setDonationLettersent($donationLettersent)
    {
        $this->donationLettersent = $donationLettersent;

        return $this;
    }

    /**
     * Set Purpose
     *
     * @param string $donationPurpose
     * @return $this
     */
    public function setDonationPurpose($donationPurpose)
    {
        $this->donationPurpose = $donationPurpose;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $donationDate
     * @return $this
     */
    public function setDonationDate($donationDate)
    {
        $this->donationDate = $donationDate;

        return $this;
    }

    /**
     * Set Add contact to Donor group
     *
     * @param string $donationAddDonorGroup
     * @return $this
     */
    public function setDonationAddDonorGroup($donationAddDonorGroup)
    {
        $this->donationAddDonorGroup = $donationAddDonorGroup;

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
        if ($this->donationContactID !== null) $parameterArray['donationContactID'] = $this->donationContactID;
        if ($this->donationAmount !== null) $parameterArray['donationAmount'] = $this->donationAmount;
        if ($this->donationInkind !== null) $parameterArray['donationInkind'] = $this->donationInkind;
        if ($this->donationComment !== null) $parameterArray['donationComment'] = $this->donationComment;
        if ($this->donationLettersent !== null) $parameterArray['donationLettersent'] = $this->donationLettersent;
        if ($this->donationPurpose !== null) $parameterArray['donationPurpose'] = $this->donationPurpose;
        if ($this->donationDate !== null) $parameterArray['donationDate'] = $this->donationDate;
        if ($this->donationAddDonorGroup !== null) $parameterArray['donationAddDonorGroup'] = $this->donationAddDonorGroup;

    }
}