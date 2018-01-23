<?php
/**
 * Partnerships Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Partnerships;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'partnerships';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "partnershipID" => [1, 'partnershipID'],
        "partnershipRequestOrgID" => [0, 'partnershipRequestOrgID'],
        "partnershipRequestOrgName" => [0, 'partnershipRequestOrgName'],
        "haringOrgID" => [0, 'partnershipSharingOrgID'],
        "haringOrgName" => [0, 'partnershipSharingOrgName'],
        "partnershipRequestDate" => [0, 'partnershipRequestDate'],
        "partnershipRequestedByID" => [0, 'partnershipRequestedByID'],
        "partnershipRequestedBy" => [0, 'partnershipRequestedBy'],
        "partnershipResponseByID" => [0, 'partnershipResponseByID'],
        "partnershipResponseBy" => [0, 'partnershipResponseBy'],
        "tatus" => [0, 'partnershipStatus'],
        "partnershipResponseDate" => [0, 'partnershipResponseDate'],
    ];

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