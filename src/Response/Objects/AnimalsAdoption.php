<?php
/**
 * AnimalsAdoption Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class AnimalsAdoption
{
    /**
     * Adoption ID
     * @var integer
     */
    public $adoptionID;

    /**
     * Animal ID
     * @var integer
     */
    public $adoptionAnimalID;

    /**
     * Adopter ID
     * @var integer
     */
    public $adoptionAdopterID;

    /**
     * Lead ID
     * @var integer
     */
    public $adoptionLeadID;

    /**
     * Fee
     * @var float
     */
    public $adoptionFeeAmount;

    /**
     * Donation
     * @var float
     */
    public $adoptionDonationAmount;

    /**
     * Donation ID
     * @var integer
     */
    public $adoptionDonationID;

    /**
     * Date
     * @var \DateTime
     */
    public $adoptionDate;

    /**
     * Submitted form ID
     * @var integer
     */
    public $adoptionSubmittedformID;

    /**
     * Status ID
     * @var integer
     */
    public $adoptionStatusID;

    /**
     * Thank you letter sent
     * @var string
     */
    public $adoptionLetterSent;



    /**
     * AnimalsAdoptions Constructor
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