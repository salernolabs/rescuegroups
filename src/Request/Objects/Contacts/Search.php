<?php
/**
 * Contacts Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Contacts;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "contactID" => [1, 'contactID'],
        "contactClass" => [0, 'contactClass'],
        "contactSalutation" => [0, 'contactSalutation'],
        "contactName" => [0, 'contactName'],
        "contactFirstname" => [0, 'contactFirstname'],
        "contactLastname" => [0, 'contactLastname'],
        "contactTitle" => [0, 'contactTitle'],
        "contactAddress" => [0, 'contactAddress'],
        "contactCity" => [0, 'contactCity'],
        "contactState" => [0, 'contactState'],
        "contactPostalcode" => [0, 'contactPostalcode'],
        "contactPlus4" => [0, 'contactPlus4'],
        "contactCounty" => [0, 'contactCounty'],
        "contactCountry" => [0, 'contactCountry'],
        "contactPhoneHome" => [0, 'contactPhoneHome'],
        "contactPhoneWork" => [0, 'contactPhoneWork'],
        "contactPhoneWorkExt" => [0, 'contactPhoneWorkExt'],
        "contactPhoneCell" => [0, 'contactPhoneCell'],
        "contactFax" => [0, 'contactFax'],
        "contactEmail" => [0, 'contactEmail'],
        "contactEmailAlt" => [0, 'contactEmailAlt'],
        "contactEmailPager" => [0, 'contactEmailPager'],
        "contactCompany" => [0, 'contactCompany'],
        "contactReferredBy" => [0, 'contactReferredBy'],
        "contactCarrier" => [0, 'contactCarrier'],
        "contactBounces" => [0, 'contactBounces'],
        "contactSendMail" => [0, 'contactSendMail'],
        "contactActive" => [0, 'contactActive'],
        "contactComment" => [0, 'contactComment'],
        "contactTransportation" => [0, 'contactTransportation'],
        "contactAvailability" => [0, 'contactAvailability'],
        "contactCaretakerPublic" => [0, 'contactCaretakerPublic'],
        "contactCoalitionMember" => [0, 'contactCoalitionMember'],
        "contactGroups" => [0, 'contactGroups'],
        "contactType" => [0, 'contactType'],
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
        return 'contacts';
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