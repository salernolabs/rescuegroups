<?php
/**
 * Donation Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Donation implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->donationID)) $this->donationID = $inputData->donationID;
        if (!empty($inputData->donationContactID)) $this->donationContactID = $inputData->donationContactID;
        if (!empty($inputData->donationAmount)) $this->donationAmount = $inputData->donationAmount;
        if (!empty($inputData->donationInkind)) $this->donationInkind = $inputData->donationInkind;
        if (!empty($inputData->donationComment)) $this->donationComment = $inputData->donationComment;
        if (!empty($inputData->donationLettersent)) $this->donationLettersent = $inputData->donationLettersent;
        if (!empty($inputData->donationPurpose)) $this->donationPurpose = $inputData->donationPurpose;
        if (!empty($inputData->donationDate)) $this->donationDate = $inputData->donationDate;
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
        if ($includeId && $this->donationID !== null) $output['donationID'] = $this->donationID;
        if ($this->donationContactID !== null) $output['donationContactID'] = $this->donationContactID;
        if ($this->donationAmount !== null) $output['donationAmount'] = $this->donationAmount;
        if ($this->donationInkind !== null) $output['donationInkind'] = $this->donationInkind;
        if ($this->donationComment !== null) $output['donationComment'] = $this->donationComment;
        if ($this->donationLettersent !== null) $output['donationLettersent'] = $this->donationLettersent;
        if ($this->donationPurpose !== null) $output['donationPurpose'] = $this->donationPurpose;
        if ($this->donationDate !== null) $output['donationDate'] = $this->donationDate;

        return $output;
    }
}