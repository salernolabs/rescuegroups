<?php
/**
 * Contacts UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:39
 */
namespace RescueGroups\Requests\Objects\Contacts;

class UpdateSettings implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Share your organization's Do Not Adopt list
     * @var string
     */
    private $enableContactsDoNotAdoptListSharing = null;

    /**
     * Automatically select to send Registration Invitation
     * @var string
     */
    private $enableContactsAutoSelectRegistrationInvitation = null;

    /**
     * Automatically select to set caretaker information public
     * @var string
     */
    private $enableContactsAutoSelectCaretakerInfoPublic = null;

    /**
     * Add a Contact record when an Online Form is submitted
     * @var string
     */
    private $enableAddContactOnlineFormSubmission = null;

    /**
     * Add a Contact record when an Meet Request is submitted
     * @var string
     */
    private $enableContactsAddContactMeetRequest = null;

    /**
     * Add a Contact record when a Call is created from the Contact Us page
     * @var string
     */
    private $enableContactsAddContactCallCreation = null;

    /**
     * Add a Contact record when an Animal Sponsorship is submitted
     * @var string
     */
    private $enableContactsAddContactAnimalSponsorship = null;

    /**
     * Add a Contact record when a user registers
     * @var string
     */
    private $enableContactsAddContactUserRegistration = null;


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
     * Set Share your organization's Do Not Adopt list
     *
     * @param string $enableContactsDoNotAdoptListSharing
     * @return $this
     */
    public function setEnableContactsDoNotAdoptListSharing($enableContactsDoNotAdoptListSharing)
    {
        $this->enableContactsDoNotAdoptListSharing = $enableContactsDoNotAdoptListSharing;

        return $this;
    }

    /**
     * Set Automatically select to send Registration Invitation
     *
     * @param string $enableContactsAutoSelectRegistrationInvitation
     * @return $this
     */
    public function setEnableContactsAutoSelectRegistrationInvitation($enableContactsAutoSelectRegistrationInvitation)
    {
        $this->enableContactsAutoSelectRegistrationInvitation = $enableContactsAutoSelectRegistrationInvitation;

        return $this;
    }

    /**
     * Set Automatically select to set caretaker information public
     *
     * @param string $enableContactsAutoSelectCaretakerInfoPublic
     * @return $this
     */
    public function setEnableContactsAutoSelectCaretakerInfoPublic($enableContactsAutoSelectCaretakerInfoPublic)
    {
        $this->enableContactsAutoSelectCaretakerInfoPublic = $enableContactsAutoSelectCaretakerInfoPublic;

        return $this;
    }

    /**
     * Set Add a Contact record when an Online Form is submitted
     *
     * @param string $enableAddContactOnlineFormSubmission
     * @return $this
     */
    public function setEnableAddContactOnlineFormSubmission($enableAddContactOnlineFormSubmission)
    {
        $this->enableAddContactOnlineFormSubmission = $enableAddContactOnlineFormSubmission;

        return $this;
    }

    /**
     * Set Add a Contact record when an Meet Request is submitted
     *
     * @param string $enableContactsAddContactMeetRequest
     * @return $this
     */
    public function setEnableContactsAddContactMeetRequest($enableContactsAddContactMeetRequest)
    {
        $this->enableContactsAddContactMeetRequest = $enableContactsAddContactMeetRequest;

        return $this;
    }

    /**
     * Set Add a Contact record when a Call is created from the Contact Us page
     *
     * @param string $enableContactsAddContactCallCreation
     * @return $this
     */
    public function setEnableContactsAddContactCallCreation($enableContactsAddContactCallCreation)
    {
        $this->enableContactsAddContactCallCreation = $enableContactsAddContactCallCreation;

        return $this;
    }

    /**
     * Set Add a Contact record when an Animal Sponsorship is submitted
     *
     * @param string $enableContactsAddContactAnimalSponsorship
     * @return $this
     */
    public function setEnableContactsAddContactAnimalSponsorship($enableContactsAddContactAnimalSponsorship)
    {
        $this->enableContactsAddContactAnimalSponsorship = $enableContactsAddContactAnimalSponsorship;

        return $this;
    }

    /**
     * Set Add a Contact record when a user registers
     *
     * @param string $enableContactsAddContactUserRegistration
     * @return $this
     */
    public function setEnableContactsAddContactUserRegistration($enableContactsAddContactUserRegistration)
    {
        $this->enableContactsAddContactUserRegistration = $enableContactsAddContactUserRegistration;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->enableContactsDoNotAdoptListSharing !== null) $parameterArray['enableContactsDoNotAdoptListSharing'] = $this->enableContactsDoNotAdoptListSharing;
        if ($this->enableContactsAutoSelectRegistrationInvitation !== null) $parameterArray['enableContactsAutoSelectRegistrationInvitation'] = $this->enableContactsAutoSelectRegistrationInvitation;
        if ($this->enableContactsAutoSelectCaretakerInfoPublic !== null) $parameterArray['enableContactsAutoSelectCaretakerInfoPublic'] = $this->enableContactsAutoSelectCaretakerInfoPublic;
        if ($this->enableAddContactOnlineFormSubmission !== null) $parameterArray['enableAddContactOnlineFormSubmission'] = $this->enableAddContactOnlineFormSubmission;
        if ($this->enableContactsAddContactMeetRequest !== null) $parameterArray['enableContactsAddContactMeetRequest'] = $this->enableContactsAddContactMeetRequest;
        if ($this->enableContactsAddContactCallCreation !== null) $parameterArray['enableContactsAddContactCallCreation'] = $this->enableContactsAddContactCallCreation;
        if ($this->enableContactsAddContactAnimalSponsorship !== null) $parameterArray['enableContactsAddContactAnimalSponsorship'] = $this->enableContactsAddContactAnimalSponsorship;
        if ($this->enableContactsAddContactUserRegistration !== null) $parameterArray['enableContactsAddContactUserRegistration'] = $this->enableContactsAddContactUserRegistration;

    }
}