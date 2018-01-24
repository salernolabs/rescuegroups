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

    const FIELD_ID = 'id';
    const FIELD_REQUEST_ORG_ID = 'requestOrgId';
    const FIELD_REQUEST_ORG_NAME = 'requestOrgName';
    const FIELD_SHARING_ORG_ID = 'sharingOrgId';
    const FIELD_SHARING_ORG_NAME = 'sharingOrgName';
    const FIELD_REQUEST_DATE = 'requestDate';
    const FIELD_REQUESTED_BY_ID = 'requestedById';
    const FIELD_REQUESTED_BY = 'requestedBy';
    const FIELD_RESPONSE_BY_ID = 'responseById';
    const FIELD_RESPONSE_BY = 'responseBy';
    const FIELD_STATUS = 'status';
    const FIELD_RESPONSE_DATE = 'responseDate';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'partnershipID'],
        "requestOrgId" => [0, 'partnershipRequestOrgID'],
        "requestOrgName" => [0, 'partnershipRequestOrgName'],
        "sharingOrgId" => [0, 'partnershipSharingOrgID'],
        "sharingOrgName" => [0, 'partnershipSharingOrgName'],
        "requestDate" => [0, 'partnershipRequestDate'],
        "requestedById" => [0, 'partnershipRequestedByID'],
        "requestedBy" => [0, 'partnershipRequestedBy'],
        "responseById" => [0, 'partnershipResponseByID'],
        "responseBy" => [0, 'partnershipResponseBy'],
        "status" => [0, 'partnershipStatus'],
        "responseDate" => [0, 'partnershipResponseDate'],
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