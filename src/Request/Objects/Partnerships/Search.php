<?php
/**
 * Partnerships Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Partnerships;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "partnershipID" => 1,
        "partnershipRequestOrgID" => 0,
        "partnershipRequestOrgName" => 0,
        "partnershipSharingOrgID" => 0,
        "partnershipSharingOrgName" => 0,
        "partnershipRequestDate" => 0,
        "partnershipRequestedByID" => 0,
        "partnershipRequestedBy" => 0,
        "partnershipResponseByID" => 0,
        "partnershipResponseBy" => 0,
        "partnershipStatus" => 0,
        "partnershipResponseDate" => 0,
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
        return 'partnerships';
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
     * @returns \RescueGroups\Response\Objects\Partnership[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\Partnership($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\Partnership($data)];
    }

}