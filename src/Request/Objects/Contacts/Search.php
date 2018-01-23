<?php
/**
 * Contacts Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Contacts;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'contacts';

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
        "id" => [1, 'contactID'],
        "class" => [0, 'contactClass'],
        "salutation" => [0, 'contactSalutation'],
        "name" => [0, 'contactName'],
        "firstname" => [0, 'contactFirstname'],
        "lastname" => [0, 'contactLastname'],
        "title" => [0, 'contactTitle'],
        "address" => [0, 'contactAddress'],
        "city" => [0, 'contactCity'],
        "state" => [0, 'contactState'],
        "postalcode" => [0, 'contactPostalcode'],
        "plus4" => [0, 'contactPlus4'],
        "county" => [0, 'contactCounty'],
        "country" => [0, 'contactCountry'],
        "phoneHome" => [0, 'contactPhoneHome'],
        "phoneWork" => [0, 'contactPhoneWork'],
        "phoneWorkExt" => [0, 'contactPhoneWorkExt'],
        "phoneCell" => [0, 'contactPhoneCell'],
        "fax" => [0, 'contactFax'],
        "email" => [0, 'contactEmail'],
        "emailAlt" => [0, 'contactEmailAlt'],
        "emailPager" => [0, 'contactEmailPager'],
        "company" => [0, 'contactCompany'],
        "referredBy" => [0, 'contactReferredBy'],
        "carrier" => [0, 'contactCarrier'],
        "bounces" => [0, 'contactBounces'],
        "sendMail" => [0, 'contactSendMail'],
        "active" => [0, 'contactActive'],
        "comment" => [0, 'contactComment'],
        "transportation" => [0, 'contactTransportation'],
        "availability" => [0, 'contactAvailability'],
        "caretakerPublic" => [0, 'contactCaretakerPublic'],
        "coalitionMember" => [0, 'contactCoalitionMember'],
        "groups" => [0, 'contactGroups'],
        "type" => [0, 'contactType'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Contact[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Contact($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Contact($data)];
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