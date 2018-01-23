<?php
/**
 * Donation Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class Donation implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Contact, Primary Key
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Amount
     *
     * @var float
     */
    public $amount = null;

    /**
     * Inkind type
     *
     * @var string
     */
    public $inkind = null;

    /**
     * Comment
     *
     * @var string
     */
    public $comment = null;

    /**
     * Letter sent
     *
     * @var string
     */
    public $lettersent = null;

    /**
     * Purpose
     *
     * @var string
     */
    public $purpose = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;

    /**
     * Add contact to Donor group
     *
     * @var string
     */
    public $addDonorGroup = null;


    /**
     * Donation Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->donationContactID)) $this->contactId = $inputData->donationContactID;
        if (!empty($inputData->donationAmount)) $this->amount = $inputData->donationAmount;
        if (!empty($inputData->donationInkind)) $this->inkind = $inputData->donationInkind;
        if (!empty($inputData->donationComment)) $this->comment = $inputData->donationComment;
        if (!empty($inputData->donationLettersent)) $this->lettersent = $inputData->donationLettersent;
        if (!empty($inputData->donationPurpose)) $this->purpose = $inputData->donationPurpose;
        if (!empty($inputData->donationDate)) $this->date = $inputData->donationDate;
        if (!empty($inputData->donationAddDonorGroup)) $this->addDonorGroup = $inputData->donationAddDonorGroup;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->contactId !== null) $output['donationContactID'] = $this->contactId;
        if ($this->amount !== null) $output['donationAmount'] = $this->amount;
        if ($this->inkind !== null) $output['donationInkind'] = $this->inkind;
        if ($this->comment !== null) $output['donationComment'] = $this->comment;
        if ($this->lettersent !== null) $output['donationLettersent'] = $this->lettersent;
        if ($this->purpose !== null) $output['donationPurpose'] = $this->purpose;
        if ($this->date !== null) $output['donationDate'] = $this->date;
        if ($this->addDonorGroup !== null) $output['donationAddDonorGroup'] = $this->addDonorGroup;

        return $output;
    }
}