<?php
/**
 * Donation Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\Donation;

class Donation
{
    /**
     * Contact
     * @var integer
     */
    public $donationContactID;

    /**
     * Amount
     * @var float
     */
    public $donationAmount;

    /**
     * Inkind type
     * @var string
     */
    public $donationInkind;

    /**
     * Comment
     * @var string
     */
    public $donationComment;

    /**
     * Letter sent
     * @var string
     */
    public $donationLettersent;

    /**
     * Purpose
     * @var string
     */
    public $donationPurpose;

    /**
     * Date
     * @var \DateTime
     */
    public $donationDate;

    /**
     * Add contact to Donor group
     * @var string
     */
    public $donationAddDonorGroup;



    /**
     * Donations Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->donationContactID)) $this->donationContactID = $inputData->donationContactID;
        if (!empty($inputData->donationAmount)) $this->donationAmount = $inputData->donationAmount;
        if (!empty($inputData->donationInkind)) $this->donationInkind = $inputData->donationInkind;
        if (!empty($inputData->donationComment)) $this->donationComment = $inputData->donationComment;
        if (!empty($inputData->donationLettersent)) $this->donationLettersent = $inputData->donationLettersent;
        if (!empty($inputData->donationPurpose)) $this->donationPurpose = $inputData->donationPurpose;
        if (!empty($inputData->donationDate)) $this->donationDate = $inputData->donationDate;
        if (!empty($inputData->donationAddDonorGroup)) $this->donationAddDonorGroup = $inputData->donationAddDonorGroup;

    }
}