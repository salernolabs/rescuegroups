<?php
/**
 * Donations Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Contact
     *
     * @var integer
     */
    private $donationContactID = null;

    /**
     * Amount
     *
     * @var float
     */
    private $donationAmount = null;

    /**
     * Inkind type
     *
     * @var string
     */
    private $donationInkind = null;

    /**
     * Comment
     *
     * @var string
     */
    private $donationComment = null;

    /**
     * Letter sent
     *
     * @var string
     */
    private $donationLettersent = null;

    /**
     * Purpose
     *
     * @var string
     */
    private $donationPurpose = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $donationDate = null;

    /**
     * Add contact to Donor group
     *
     * @var string
     */
    private $donationAddDonorGroup = null;


    /**
     * Set Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setDonationContactID($value)
    {
        $this->donationContactID = $value;

        return $this;
    }

    /**
     * Set Amount
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
     * Set Inkind type
     *
     * @param string $value
     * @return $this
     */
    public function setDonationInkind($value)
    {
        $this->donationInkind = $value;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $value
     * @return $this
     */
    public function setDonationComment($value)
    {
        $this->donationComment = $value;

        return $this;
    }

    /**
     * Set Letter sent
     *
     * @param string $value
     * @return $this
     */
    public function setDonationLettersent($value)
    {
        $this->donationLettersent = $value;

        return $this;
    }

    /**
     * Set Purpose
     *
     * @param string $value
     * @return $this
     */
    public function setDonationPurpose($value)
    {
        $this->donationPurpose = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setDonationDate($value)
    {
        $this->donationDate = $value;

        return $this;
    }

    /**
     * Set Add contact to Donor group
     *
     * @param string $value
     * @return $this
     */
    public function setDonationAddDonorGroup($value)
    {
        $this->donationAddDonorGroup = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->donationContactID !== null) $parameterArray['values'][] = ["donationContactID"=>$this->donationContactID];
        if ($this->donationAmount !== null) $parameterArray['values'][] = ["donationAmount"=>$this->donationAmount];
        if ($this->donationInkind !== null) $parameterArray['values'][] = ["donationInkind"=>$this->donationInkind];
        if ($this->donationComment !== null) $parameterArray['values'][] = ["donationComment"=>$this->donationComment];
        if ($this->donationLettersent !== null) $parameterArray['values'][] = ["donationLettersent"=>$this->donationLettersent];
        if ($this->donationPurpose !== null) $parameterArray['values'][] = ["donationPurpose"=>$this->donationPurpose];
        if ($this->donationDate !== null) $parameterArray['values'][] = ["donationDate"=>$this->donationDate];
        if ($this->donationAddDonorGroup !== null) $parameterArray['values'][] = ["donationAddDonorGroup"=>$this->donationAddDonorGroup];
    }
}