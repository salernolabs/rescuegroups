<?php
/**
 * Orgs PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Orgs;

class PublicSearch implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "orgID" => 1,
        "orgLocation" => 0,
        "orgName" => 0,
        "orgAddress" => 0,
        "orgCity" => 0,
        "orgState" => 0,
        "orgPostalcode" => 0,
        "orgPlus4" => 0,
        "orgCountry" => 0,
        "orgPhone" => 0,
        "orgFax" => 0,
        "orgEmail" => 0,
        "orgWebsiteUrl" => 0,
        "orgFacebookUrl" => 0,
        "orgAdoptionUrl" => 0,
        "orgDonationUrl" => 0,
        "orgSponsorshipUrl" => 0,
        "orgServeAreas" => 0,
        "orgAdoptionProcess" => 0,
        "orgAbout" => 0,
        "orgServices" => 0,
        "orgMeetPets" => 0,
        "orgType" => 0,
        "orgLocationDistance" => 0,
        "orgCommonapplicationAccept" => 0,
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
        return 'orgs';
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
     * @returns \RescueGroups\Objects\Org[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Org($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Org($data)];
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