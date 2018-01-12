<?php
/**
 * Contacts Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Contacts;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "contactID" => 1,
        "contactClass" => 0,
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
        "contactSendMail" => 0,
        "contactActive" => 0,
        "contactComment" => 0,
        "contactCoalitionMember" => 0,
        "contactTransportation" => 0,
        "contactAvailability" => 0,
        "contactCaretakerPublic" => 0,
        "contactGroups" => 0,
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
        return 'contacts';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'edit';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {

    }

}