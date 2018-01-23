<?php
/**
 * Testimonials PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Testimonials;

class PublicSearch extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'testimonials';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicSearch';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;

    const FIELD_ID = 'id';
    const FIELD_LOCATION = 'location';
    const FIELD_LOCATION_DISTANCE = 'locationDistance';
    const FIELD_LOCATION_CITYSTATE = 'locationCitystate';
    const FIELD_SERVICE = 'service';
    const FIELD_USER_FIRSTNAME = 'userFirstname';
    const FIELD_CREATED_DATE = 'createdDate';
    const FIELD_CONTENT = 'content';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'testimonialID'],
        "location" => [0, 'testimonialLocation'],
        "locationDistance" => [0, 'testimonialLocationDistance'],
        "locationCitystate" => [0, 'testimonialLocationCitystate'],
        "service" => [0, 'testimonialService'],
        "userFirstname" => [0, 'testimonialUserFirstname'],
        "createdDate" => [0, 'testimonialCreatedDate'],
        "content" => [0, 'testimonialContent'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Testimonial[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Testimonial($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Testimonial($data)];
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