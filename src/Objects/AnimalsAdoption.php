<?php
/**
 * AnimalsAdoption Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsAdoption
{
    /**
     * Adoption ID
     *
     * @var integer
     */
    public $adoptionID = null;

    /**
     * Animal ID
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
     * AnimalsAdoption Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->adoptionID)) $this->adoptionID = $inputData->adoptionID;
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
    }
}