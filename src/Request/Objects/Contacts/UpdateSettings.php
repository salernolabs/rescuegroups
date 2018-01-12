<?php
/**
 * Contacts UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Contacts;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "enableContactsDoNotAdoptListSharing" => 0,
        "enableContactsAutoSelectRegistrationInvitation" => 0,
        "enableContactsAutoSelectCaretakerInfoPublic" => 0,
        "enableAddContactOnlineFormSubmission" => 0,
        "enableContactsAddContactMeetRequest" => 0,
        "enableContactsAddContactCallCreation" => 0,
        "enableContactsAddContactAnimalSponsorship" => 0,
        "enableContactsAddContactUserRegistration" => 0,
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
        return 'updateSettings';
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