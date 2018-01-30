<?php
/**
 * AnimalsAdoptions Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsAdoptions';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_ADOPTER_ID = 'adopterId';
    const FIELD_LEAD_ID = 'leadId';
    const FIELD_LEAD = 'lead';
    const FIELD_FEE_AMOUNT = 'feeAmount';
    const FIELD_DONATION_AMOUNT = 'donationAmount';
    const FIELD_DONATION_ID = 'donationId';
    const FIELD_DATE = 'date';
    const FIELD_STATUS_ID = 'statusId';
    const FIELD_STATUS = 'status';
    const FIELD_LETTER_SENT = 'letterSent';
    const FIELD_SUBMITTEDFORM_ID = 'submittedformId';
    const FIELD_ANIMAL_COST = 'animalCost';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_FOSTER_ID = 'animalFosterId';
    const FIELD_ANIMAL_FOSTER_NAME = 'animalFosterName';
    const FIELD_ADOPTER_NAME = 'adopterName';
    const FIELD_ADOPTER_TYPE = 'adopterType';
    const FIELD_SUBMITTER_NAME = 'submitterName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'adoptionID'],
        "animalId" => [0, 'adoptionAnimalID'],
        "adopterId" => [0, 'adoptionAdopterID'],
        "leadId" => [0, 'adoptionLeadID'],
        "lead" => [0, 'adoptionLead'],
        "feeAmount" => [0, 'adoptionFeeAmount'],
        "donationAmount" => [0, 'adoptionDonationAmount'],
        "donationId" => [0, 'adoptionDonationID'],
        "date" => [0, 'adoptionDate'],
        "statusId" => [0, 'adoptionStatusID'],
        "status" => [0, 'adoptionStatus'],
        "letterSent" => [0, 'adoptionLetterSent'],
        "submittedformId" => [0, 'adoptionSubmittedformID'],
        "animalCost" => [0, 'animalCost'],
        "animalName" => [0, 'animalName'],
        "animalFosterId" => [0, 'animalFosterID'],
        "animalFosterName" => [0, 'animalFosterName'],
        "adopterName" => [0, 'adopterName'],
        "adopterType" => [0, 'adopterType'],
        "submitterName" => [0, 'submitterName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\AnimalsAdoption[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\AnimalsAdoption($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\AnimalsAdoption($data)];
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        $this->addSearchParameters($parameterArray);
    }
}