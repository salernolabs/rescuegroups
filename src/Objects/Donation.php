<?php
/**
 * Donation Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Donation
{
    /**
     * ID
     *
     * @var integer
     */
    public $donationID = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $donationContactID = null;

    /**
     * Amount
     *
     * @var float
     */
    public $donationAmount = null;

    /**
     * Inkind type
     *
     * @var string
     */
    public $donationInkind = null;

    /**
     * Comment
     *
     * @var string
     */
    public $donationComment = null;

    /**
     * Letter sent
     *
     * @var string
     */
    public $donationLettersent = null;

    /**
     * Purpose
     *
     * @var string
     */
    public $donationPurpose = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $donationDate = null;


    /**
     * Donation Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->donationID)) $this->donationID = $inputData->donationID;
        if (!empty($inputData->donationContactID)) $this->donationContactID = $inputData->donationContactID;
        if (!empty($inputData->donationAmount)) $this->donationAmount = $inputData->donationAmount;
        if (!empty($inputData->donationInkind)) $this->donationInkind = $inputData->donationInkind;
        if (!empty($inputData->donationComment)) $this->donationComment = $inputData->donationComment;
        if (!empty($inputData->donationLettersent)) $this->donationLettersent = $inputData->donationLettersent;
        if (!empty($inputData->donationPurpose)) $this->donationPurpose = $inputData->donationPurpose;
        if (!empty($inputData->donationDate)) $this->donationDate = $inputData->donationDate;
    }
}