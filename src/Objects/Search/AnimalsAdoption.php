<?php
/**
 * AnimalsAdoption Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class AnimalsAdoption extends \RescueGroups\Objects\AnimalsAdoption implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Lead
     *
     * @var string
     */
    public $lead = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Cost
     *
     * @var string
     */
    public $animalCost = null;

    /**
     * Animal Name
     *
     * @var string
     */
    public $animalName = null;

    /**
     * Foster ID
     *
     * @var integer
     */
    public $animalFosterId = null;

    /**
     * Foster Name
     *
     * @var string
     */
    public $animalFosterName = null;

    /**
     * Adopter Name
     *
     * @var string
     */
    public $adopterName = null;

    /**
     * Adopter Type
     *
     * @var string
     */
    public $adopterType = null;

    /**
     * Submitter Name
     *
     * @var string
     */
    public $submitterName = null;


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
            'adoptionLead' => 'lead',
            'adoptionFeeAmount' => 'feeAmount',
            'adoptionDonationAmount' => 'donationAmount',
            'adoptionDonationID' => 'donationId',
            'adoptionDate' => 'date',
            'adoptionStatusID' => 'statusId',
            'adoptionStatus' => 'status',
            'adoptionLetterSent' => 'letterSent',
            'adoptionSubmittedformID' => 'submittedformId',
            'animalCost' => 'animalCost',
            'animalName' => 'animalName',
            'animalFosterID' => 'animalFosterId',
            'animalFosterName' => 'animalFosterName',
            'adopterName' => 'adopterName',
            'adopterType' => 'adopterType',
            'submitterName' => 'submitterName',
        ],
        'output' => [
            'id' => 'adoptionID',
            'animalId' => 'adoptionAnimalID',
            'adopterId' => 'adoptionAdopterID',
            'leadId' => 'adoptionLeadID',
            'lead' => 'adoptionLead',
            'feeAmount' => 'adoptionFeeAmount',
            'donationAmount' => 'adoptionDonationAmount',
            'donationId' => 'adoptionDonationID',
            'date' => 'adoptionDate',
            'statusId' => 'adoptionStatusID',
            'status' => 'adoptionStatus',
            'letterSent' => 'adoptionLetterSent',
            'submittedformId' => 'adoptionSubmittedformID',
            'animalCost' => 'animalCost',
            'animalName' => 'animalName',
            'animalFosterId' => 'animalFosterID',
            'animalFosterName' => 'animalFosterName',
            'adopterName' => 'adopterName',
            'adopterType' => 'adopterType',
            'submitterName' => 'submitterName',
        ]
    ];

}