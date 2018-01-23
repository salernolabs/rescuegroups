<?php
/**
 * AnimalsAdoption Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class AnimalsAdoption implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Animal ID, Primary Key
     *
     * @var integer
     */
    public $animalId = null;

    /**
     * Adopter ID
     *
     * @var integer
     */
    public $adopterId = null;

    /**
     * Lead ID
     *
     * @var integer
     */
    public $leadId = null;

    /**
     * Fee
     *
     * @var float
     */
    public $feeAmount = null;

    /**
     * Donation
     *
     * @var float
     */
    public $donationAmount = null;

    /**
     * Donation ID
     *
     * @var integer
     */
    public $donationId = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;

    /**
     * Submitted form ID
     *
     * @var integer
     */
    public $submittedformId = null;

    /**
     * Status ID
     *
     * @var integer
     */
    public $statusId = null;

    /**
     * Thank you letter sent
     *
     * @var string
     */
    public $letterSent = null;

    /**
     * Add contact to adopters group
     *
     * @var string
     */
    public $addAdopterRole = null;


    /**
     * AnimalsAdoption Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->adoptionAnimalID)) $this->animalId = $inputData->adoptionAnimalID;
        if (!empty($inputData->adoptionAdopterID)) $this->adopterId = $inputData->adoptionAdopterID;
        if (!empty($inputData->adoptionLeadID)) $this->leadId = $inputData->adoptionLeadID;
        if (!empty($inputData->adoptionFeeAmount)) $this->feeAmount = $inputData->adoptionFeeAmount;
        if (!empty($inputData->adoptionDonationAmount)) $this->donationAmount = $inputData->adoptionDonationAmount;
        if (!empty($inputData->adoptionDonationID)) $this->donationId = $inputData->adoptionDonationID;
        if (!empty($inputData->adoptionDate)) $this->date = $inputData->adoptionDate;
        if (!empty($inputData->adoptionSubmittedformID)) $this->submittedformId = $inputData->adoptionSubmittedformID;
        if (!empty($inputData->adoptionStatusID)) $this->statusId = $inputData->adoptionStatusID;
        if (!empty($inputData->adoptionLetterSent)) $this->letterSent = $inputData->adoptionLetterSent;
        if (!empty($inputData->adoptionAddAdopterRole)) $this->addAdopterRole = $inputData->adoptionAddAdopterRole;
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
        if ($includeId && $this->animalId !== null) $output['adoptionAnimalID'] = $this->animalId;
        if ($this->adopterId !== null) $output['adoptionAdopterID'] = $this->adopterId;
        if ($this->leadId !== null) $output['adoptionLeadID'] = $this->leadId;
        if ($this->feeAmount !== null) $output['adoptionFeeAmount'] = $this->feeAmount;
        if ($this->donationAmount !== null) $output['adoptionDonationAmount'] = $this->donationAmount;
        if ($this->donationId !== null) $output['adoptionDonationID'] = $this->donationId;
        if ($this->date !== null) $output['adoptionDate'] = $this->date;
        if ($this->submittedformId !== null) $output['adoptionSubmittedformID'] = $this->submittedformId;
        if ($this->statusId !== null) $output['adoptionStatusID'] = $this->statusId;
        if ($this->letterSent !== null) $output['adoptionLetterSent'] = $this->letterSent;
        if ($this->addAdopterRole !== null) $output['adoptionAddAdopterRole'] = $this->addAdopterRole;

        return $output;
    }
}