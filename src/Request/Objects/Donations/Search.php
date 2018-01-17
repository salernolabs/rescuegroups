<?php
/**
 * Donations Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'donations';

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
        "donationID" => [1, 'donationID'],
        "donationContactID" => [0, 'donationContactID'],
        "donationContactName" => [0, 'donationContactName'],
        "donationContactType" => [0, 'donationContactType'],
        "donationAmount" => [0, 'donationAmount'],
        "donationInkind" => [0, 'donationInkind'],
        "donationComment" => [0, 'donationComment'],
        "donationLettersent" => [0, 'donationLettersent'],
        "donationPurpose" => [0, 'donationPurpose'],
        "donationDate" => [0, 'donationDate'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Donation[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Donation($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Donation($data)];
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