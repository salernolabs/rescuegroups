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
        "partnershipID" => [1, 'partnershipID'],
        "partnershipRequestOrgID" => [0, 'partnershipRequestOrgID'],
        "partnershipRequestOrgName" => [0, 'partnershipRequestOrgName'],
        "partnershipSharingOrgID" => [0, 'partnershipSharingOrgID'],
        "partnershipSharingOrgName" => [0, 'partnershipSharingOrgName'],
        "partnershipRequestDate" => [0, 'partnershipRequestDate'],
        "partnershipRequestedByID" => [0, 'partnershipRequestedByID'],
        "partnershipRequestedBy" => [0, 'partnershipRequestedBy'],
        "partnershipResponseByID" => [0, 'partnershipResponseByID'],
        "partnershipResponseBy" => [0, 'partnershipResponseBy'],
        "partnershipStatus" => [0, 'partnershipStatus'],
        "partnershipResponseDate" => [0, 'partnershipResponseDate'],
    ];

    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Partnership[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Partnership($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Partnership($data)];
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