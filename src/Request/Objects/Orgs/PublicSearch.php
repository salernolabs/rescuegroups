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
        "orgID" => [1, 'orgID'],
        "orgLocation" => [0, 'orgLocation'],
        "orgName" => [0, 'orgName'],
        "orgAddress" => [0, 'orgAddress'],
        "orgCity" => [0, 'orgCity'],
        "orgState" => [0, 'orgState'],
        "orgPostalcode" => [0, 'orgPostalcode'],
        "orgPlus4" => [0, 'orgPlus4'],
        "orgCountry" => [0, 'orgCountry'],
        "orgPhone" => [0, 'orgPhone'],
        "orgFax" => [0, 'orgFax'],
        "orgEmail" => [0, 'orgEmail'],
        "orgWebsiteUrl" => [0, 'orgWebsiteUrl'],
        "orgFacebookUrl" => [0, 'orgFacebookUrl'],
        "orgAdoptionUrl" => [0, 'orgAdoptionUrl'],
        "orgDonationUrl" => [0, 'orgDonationUrl'],
        "orgSponsorshipUrl" => [0, 'orgSponsorshipUrl'],
        "orgServeAreas" => [0, 'orgServeAreas'],
        "orgAdoptionProcess" => [0, 'orgAdoptionProcess'],
        "orgAbout" => [0, 'orgAbout'],
        "orgServices" => [0, 'orgServices'],
        "orgMeetPets" => [0, 'orgMeetPets'],
        "orgType" => [0, 'orgType'],
        "orgLocationDistance" => [0, 'orgLocationDistance'],
        "orgCommonapplicationAccept" => [0, 'orgCommonapplicationAccept'],
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