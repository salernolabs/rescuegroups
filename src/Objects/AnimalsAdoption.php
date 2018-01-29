<?php
/**
 * AnimalsAdoption Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsAdoption implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Adoption ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Animal ID
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
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'adoptionID' => 'id',
            'adoptionAnimalID' => 'animalId',
            'adoptionAdopterID' => 'adopterId',
            'adoptionLeadID' => 'leadId',
            'adoptionFeeAmount' => 'feeAmount',
            'adoptionDonationAmount' => 'donationAmount',
            'adoptionDonationID' => 'donationId',
            'adoptionDate' => 'date',
            'adoptionSubmittedformID' => 'submittedformId',
            'adoptionStatusID' => 'statusId',
            'adoptionLetterSent' => 'letterSent',
        ],
        'output' => [
            'id' => 'adoptionID',
            'animalId' => 'adoptionAnimalID',
            'adopterId' => 'adoptionAdopterID',
            'leadId' => 'adoptionLeadID',
            'feeAmount' => 'adoptionFeeAmount',
            'donationAmount' => 'adoptionDonationAmount',
            'donationId' => 'adoptionDonationID',
            'date' => 'adoptionDate',
            'submittedformId' => 'adoptionSubmittedformID',
            'statusId' => 'adoptionStatusID',
            'letterSent' => 'adoptionLetterSent',
        ]
    ];

    /**
     * AnimalsAdoption Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}