<?php
/**
 * Donations Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
        return 'donations';
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