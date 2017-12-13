<?php
/**
 * Donations Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $donationID = null;

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
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $donationID
     * @return $this
     */
    public function setDonationID($donationID)
    {
        $this->donationID = $donationID;

        return $this;
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->donationID !== null) $parameterArray['donationID'] = $this->donationID;
        if ($this->donationContactID !== null) $parameterArray['donationContactID'] = $this->donationContactID;
        if ($this->donationAmount !== null) $parameterArray['donationAmount'] = $this->donationAmount;
        if ($this->donationInkind !== null) $parameterArray['donationInkind'] = $this->donationInkind;
        if ($this->donationComment !== null) $parameterArray['donationComment'] = $this->donationComment;
        if ($this->donationLettersent !== null) $parameterArray['donationLettersent'] = $this->donationLettersent;
        if ($this->donationPurpose !== null) $parameterArray['donationPurpose'] = $this->donationPurpose;
        if ($this->donationDate !== null) $parameterArray['donationDate'] = $this->donationDate;

    }
}