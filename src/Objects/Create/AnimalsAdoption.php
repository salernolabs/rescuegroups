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
    public $adoptionAnimalID = null;

    /**
     * Adopter ID
     *
     * @var integer
     */
    public $adoptionAdopterID = null;

    /**
     * Lead ID
     *
     * @var integer
     */
    public $adoptionLeadID = null;

    /**
     * Fee
     *
     * @var float
     */
    public $adoptionFeeAmount = null;

    /**
     * Donation
     *
     * @var float
     */
    public $adoptionDonationAmount = null;

    /**
     * Donation ID
     *
     * @var integer
     */
    public $adoptionDonationID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $adoptionDate = null;

    /**
     * Submitted form ID
     *
     * @var integer
     */
    public $adoptionSubmittedformID = null;

    /**
     * Status ID
     *
     * @var integer
     */
    public $adoptionStatusID = null;

    /**
     * Thank you letter sent
     *
     * @var string
     */
    public $adoptionLetterSent = null;

    /**
     * Add contact to adopters group
     *
     * @var string
     */
    public $adoptionAddAdopterRole = null;


    /**
     * AnimalsAdoption Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->adoptionAnimalID)) $this->adoptionAnimalID = $inputData->adoptionAnimalID;
        if (!empty($inputData->adoptionAdopterID)) $this->adoptionAdopterID = $inputData->adoptionAdopterID;
        if (!empty($inputData->adoptionLeadID)) $this->adoptionLeadID = $inputData->adoptionLeadID;
        if (!empty($inputData->adoptionFeeAmount)) $this->adoptionFeeAmount = $inputData->adoptionFeeAmount;
        if (!empty($inputData->adoptionDonationAmount)) $this->adoptionDonationAmount = $inputData->adoptionDonationAmount;
        if (!empty($inputData->adoptionDonationID)) $this->adoptionDonationID = $inputData->adoptionDonationID;
        if (!empty($inputData->adoptionDate)) $this->adoptionDate = $inputData->adoptionDate;
        if (!empty($inputData->adoptionSubmittedformID)) $this->adoptionSubmittedformID = $inputData->adoptionSubmittedformID;
        if (!empty($inputData->adoptionStatusID)) $this->adoptionStatusID = $inputData->adoptionStatusID;
        if (!empty($inputData->adoptionLetterSent)) $this->adoptionLetterSent = $inputData->adoptionLetterSent;
        if (!empty($inputData->adoptionAddAdopterRole)) $this->adoptionAddAdopterRole = $inputData->adoptionAddAdopterRole;
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
        if ($includeId && $this->adoptionAnimalID !== null) $output['adoptionAnimalID'] = $this->adoptionAnimalID;
        if ($this->adoptionAdopterID !== null) $output['adoptionAdopterID'] = $this->adoptionAdopterID;
        if ($this->adoptionLeadID !== null) $output['adoptionLeadID'] = $this->adoptionLeadID;
        if ($this->adoptionFeeAmount !== null) $output['adoptionFeeAmount'] = $this->adoptionFeeAmount;
        if ($this->adoptionDonationAmount !== null) $output['adoptionDonationAmount'] = $this->adoptionDonationAmount;
        if ($this->adoptionDonationID !== null) $output['adoptionDonationID'] = $this->adoptionDonationID;
        if ($this->adoptionDate !== null) $output['adoptionDate'] = $this->adoptionDate;
        if ($this->adoptionSubmittedformID !== null) $output['adoptionSubmittedformID'] = $this->adoptionSubmittedformID;
        if ($this->adoptionStatusID !== null) $output['adoptionStatusID'] = $this->adoptionStatusID;
        if ($this->adoptionLetterSent !== null) $output['adoptionLetterSent'] = $this->adoptionLetterSent;
        if ($this->adoptionAddAdopterRole !== null) $output['adoptionAddAdopterRole'] = $this->adoptionAddAdopterRole;

        return $output;
    }
}