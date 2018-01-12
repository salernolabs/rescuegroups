<?php
/**
 * EventAnimalAttendance Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\EventAnimalAttendance;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "attendanceID" => 1,
        "attendanceStatus" => 0,
        "attendanceAnimalID" => 0,
        "attendanceEventID" => 0,
        "animalName" => 0,
        "animalOrgID" => 0,
        "animalStatus" => 0,
        "eventName" => 0,
        "eventStart" => 0,
        "eventEnd" => 0,
        "eventUrl" => 0,
        "eventDescription" => 0,
        "eventLocationID" => 0,
        "eventAnimalAttendance" => 0,
        "eventMeetrequests" => 0,
        "eventSpecies" => 0,
        "eventLocationName" => 0,
        "eventLocationUrl" => 0,
        "eventLocationAddress" => 0,
        "eventLocationCity" => 0,
        "eventLocationState" => 0,
        "eventLocationPostalcode" => 0,
        "eventLocationCountry" => 0,
        "eventLocationPhone" => 0,
        "eventLocationPhoneExt" => 0,
        "eventLocationAnimals" => 0,
        "eventLocationEvents" => 0,
        "eventLocationColonies" => 0,
        "eventLocationMeetrequests" => 0,
    ];


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'eventanimalattendance';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'search';
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

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\EventAnimalAttendance[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\EventAnimalAttendance($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\EventAnimalAttendance($data)];
    }

}