<?php
/**
 * Orgs PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Orgs;

class PublicSearch extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'orgs';

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
    const FIELD_NAME = 'name';
    const FIELD_ADDRESS = 'address';
    const FIELD_CITY = 'city';
    const FIELD_STATE = 'state';
    const FIELD_POSTALCODE = 'postalcode';
    const FIELD_PLUS4 = 'plus4';
    const FIELD_COUNTRY = 'country';
    const FIELD_PHONE = 'phone';
    const FIELD_FAX = 'fax';
    const FIELD_EMAIL = 'email';
    const FIELD_WEBSITE_URL = 'websiteUrl';
    const FIELD_FACEBOOK_URL = 'facebookUrl';
    const FIELD_ADOPTION_URL = 'adoptionUrl';
    const FIELD_DONATION_URL = 'donationUrl';
    const FIELD_SPONSORSHIP_URL = 'sponsorshipUrl';
    const FIELD_SERVE_AREAS = 'serveAreas';
    const FIELD_ADOPTION_PROCESS = 'adoptionProcess';
    const FIELD_ABOUT = 'about';
    const FIELD_SERVICES = 'services';
    const FIELD_MEET_PETS = 'meetPets';
    const FIELD_TYPE = 'type';
    const FIELD_LOCATION_DISTANCE = 'locationDistance';
    const FIELD_COMMONAPPLICATION_ACCEPT = 'commonapplicationAccept';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'orgID'],
        "location" => [0, 'orgLocation'],
        "name" => [0, 'orgName'],
        "address" => [0, 'orgAddress'],
        "city" => [0, 'orgCity'],
        "state" => [0, 'orgState'],
        "postalcode" => [0, 'orgPostalcode'],
        "plus4" => [0, 'orgPlus4'],
        "country" => [0, 'orgCountry'],
        "phone" => [0, 'orgPhone'],
        "fax" => [0, 'orgFax'],
        "email" => [0, 'orgEmail'],
        "websiteUrl" => [0, 'orgWebsiteUrl'],
        "facebookUrl" => [0, 'orgFacebookUrl'],
        "adoptionUrl" => [0, 'orgAdoptionUrl'],
        "donationUrl" => [0, 'orgDonationUrl'],
        "sponsorshipUrl" => [0, 'orgSponsorshipUrl'],
        "serveAreas" => [0, 'orgServeAreas'],
        "adoptionProcess" => [0, 'orgAdoptionProcess'],
        "about" => [0, 'orgAbout'],
        "services" => [0, 'orgServices'],
        "meetPets" => [0, 'orgMeetPets'],
        "type" => [0, 'orgType'],
        "locationDistance" => [0, 'orgLocationDistance'],
        "commonapplicationAccept" => [0, 'orgCommonapplicationAccept'],
    ];

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