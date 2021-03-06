<?php
/**
 * VolunteerHours Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\VolunteerHours;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'volunteerHours';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_VOLUNTEER_ID = 'volunteerId';
    const FIELD_VOLUNTEER_DATE = 'volunteerDate';
    const FIELD_CREATED_DATE = 'createdDate';
    const FIELD_VOLUNTEER_LENGTH = 'volunteerLength';
    const FIELD_VOLUNTEER_TASK = 'volunteerTask';
    const FIELD_VOLUNTEER_TYPE = 'volunteerType';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'volunteerHoursID'],
        "volunteerId" => [0, 'volunteerHoursVolunteerID'],
        "volunteerDate" => [0, 'volunteerHoursVolunteerDate'],
        "createdDate" => [0, 'volunteerHoursCreatedDate'],
        "volunteerLength" => [0, 'volunteerHoursVolunteerLength'],
        "volunteerTask" => [0, 'volunteerHoursVolunteerTask'],
        "volunteerType" => [0, 'volunteerType'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\VolunteerHour[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\VolunteerHour($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\VolunteerHour($data)];
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