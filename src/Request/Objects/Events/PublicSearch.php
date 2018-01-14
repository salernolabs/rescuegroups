<?php
/**
 * Events PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class PublicSearch implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "eventID" => 1,
        "eventOrgID" => 0,
        "eventName" => 0,
        "eventStart" => 0,
        "eventEnd" => 0,
        "eventUrl" => 0,
        "eventDescription" => 0,
        "eventLocationID" => 0,
        "eventSpecies" => 0,
        "locationName" => 0,
        "locationUrl" => 0,
        "locationAddress" => 0,
        "locationCity" => 0,
        "locationState" => 0,
        "locationPostalcode" => 0,
        "locationCountry" => 0,
        "locationPhone" => 0,
        "locationPhoneExt" => 0,
        "locationEvents" => 0,
        "locationDistance" => 0,
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
        return 'events';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicSearch';
    }

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Event[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Event($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Event($data)];
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