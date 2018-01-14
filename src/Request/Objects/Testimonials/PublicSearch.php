<?php
/**
 * Testimonials PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Testimonials;

class PublicSearch implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "testimonialID" => [1, 'testimonialID'],
        "testimonialLocation" => [0, 'testimonialLocation'],
        "testimonialLocationDistance" => [0, 'testimonialLocationDistance'],
        "testimonialLocationCitystate" => [0, 'testimonialLocationCitystate'],
        "testimonialService" => [0, 'testimonialService'],
        "testimonialUserFirstname" => [0, 'testimonialUserFirstname'],
        "testimonialCreatedDate" => [0, 'testimonialCreatedDate'],
        "testimonialContent" => [0, 'testimonialContent'],
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
        return 'testimonials';
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