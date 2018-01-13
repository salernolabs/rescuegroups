<?php
/**
 * Contacts Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Contacts;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "contactClass" => 1,
        "contactSalutation" => 0,
        "contactFirstname" => 0,
        "contactLastname" => 0,
        "contactTitle" => 0,
        "contactAddress" => 0,
        "contactCity" => 0,
        "contactState" => 0,
        "contactPostalcode" => 0,
        "contactPlus4" => 0,
        "contactCounty" => 0,
        "contactCountry" => 0,
        "contactPhoneHome" => 0,
        "contactPhoneWork" => 0,
        "contactPhoneWorkExt" => 0,
        "contactPhoneCell" => 0,
        "contactFax" => 0,
        "contactEmail" => 0,
        "contactEmailAlt" => 0,
        "contactEmailPager" => 0,
        "contactCompany" => 0,
        "contactReferredBy" => 0,
        "contactCarrier" => 0,
        "contactSendMail" => 1,
        "contactActive" => 1,
        "contactComment" => 0,
        "contactCoalitionMember" => 1,
        "contactTransportation" => 0,
        "contactAvailability" => 0,
        "contactCaretakerPublic" => 1,
        "contactSendInvite" => 0,
        "contactGroups" => 0,
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
        return 'add';
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