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
     * Share your organization's Do Not Adopt list
     *
     * @var string
     */
    private $enableContactsDoNotAdoptListSharing = null;

    /**
     * Automatically select to send Registration Invitation
     *
     * @var string
     */
    private $enableContactsAutoSelectRegistrationInvitation = null;

    /**
     * Automatically select to set caretaker information public
     *
     * @var string
     */
    private $enableContactsAutoSelectCaretakerInfoPublic = null;

    /**
     * Add a Contact record when an Online Form is submitted
     *
     * @var string
     */
    private $enableAddContactOnlineFormSubmission = null;

    /**
     * Add a Contact record when an Meet Request is submitted
     *
     * @var string
     */
    private $enableContactsAddContactMeetRequest = null;

    /**
     * Add a Contact record when a Call is created from the Contact Us page
     *
     * @var string
     */
    private $enableContactsAddContactCallCreation = null;

    /**
     * Add a Contact record when an Animal Sponsorship is submitted
     *
     * @var string
     */
    private $enableContactsAddContactAnimalSponsorship = null;

    /**
     * Add a Contact record when a user registers
     *
     * @var string
     */
    private $enableContactsAddContactUserRegistration = null;


    /**
     * Set Share your organization's Do Not Adopt list
     *
     * @param string $value
     * @return $this
     */
    public function setEnableContactsDoNotAdoptListSharing($value)
    {
        $this->enableContactsDoNotAdoptListSharing = $value;

        return $this;
    }

    /**
     * Set Automatically select to send Registration Invitation
     *
     * @param string $value
     * @return $this
     */
    public function setEnableContactsAutoSelectRegistrationInvitation($value)
    {
        $this->enableContactsAutoSelectRegistrationInvitation = $value;

        return $this;
    }

    /**
     * Set Automatically select to set caretaker information public
     *
     * @param string $value
     * @return $this
     */
    public function setEnableContactsAutoSelectCaretakerInfoPublic($value)
    {
        $this->enableContactsAutoSelectCaretakerInfoPublic = $value;

        return $this;
    }

    /**
     * Set Add a Contact record when an Online Form is submitted
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAddContactOnlineFormSubmission($value)
    {
        $this->enableAddContactOnlineFormSubmission = $value;

        return $this;
    }

    /**
     * Set Add a Contact record when an Meet Request is submitted
     *
     * @param string $value
     * @return $this
     */
    public function setEnableContactsAddContactMeetRequest($value)
    {
        $this->enableContactsAddContactMeetRequest = $value;

        return $this;
    }

    /**
     * Set Add a Contact record when a Call is created from the Contact Us page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableContactsAddContactCallCreation($value)
    {
        $this->enableContactsAddContactCallCreation = $value;

        return $this;
    }

    /**
     * Set Add a Contact record when an Animal Sponsorship is submitted
     *
     * @param string $value
     * @return $this
     */
    public function setEnableContactsAddContactAnimalSponsorship($value)
    {
        $this->enableContactsAddContactAnimalSponsorship = $value;

        return $this;
    }

    /**
     * Set Add a Contact record when a user registers
     *
     * @param string $value
     * @return $this
     */
    public function setEnableContactsAddContactUserRegistration($value)
    {
        $this->enableContactsAddContactUserRegistration = $value;

        return $this;
    }


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
        return 'updateSettings';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->enableContactsDoNotAdoptListSharing !== null) $parameterArray['values'][] = ["enableContactsDoNotAdoptListSharing"=>$this->enableContactsDoNotAdoptListSharing];
        if ($this->enableContactsAutoSelectRegistrationInvitation !== null) $parameterArray['values'][] = ["enableContactsAutoSelectRegistrationInvitation"=>$this->enableContactsAutoSelectRegistrationInvitation];
        if ($this->enableContactsAutoSelectCaretakerInfoPublic !== null) $parameterArray['values'][] = ["enableContactsAutoSelectCaretakerInfoPublic"=>$this->enableContactsAutoSelectCaretakerInfoPublic];
        if ($this->enableAddContactOnlineFormSubmission !== null) $parameterArray['values'][] = ["enableAddContactOnlineFormSubmission"=>$this->enableAddContactOnlineFormSubmission];
        if ($this->enableContactsAddContactMeetRequest !== null) $parameterArray['values'][] = ["enableContactsAddContactMeetRequest"=>$this->enableContactsAddContactMeetRequest];
        if ($this->enableContactsAddContactCallCreation !== null) $parameterArray['values'][] = ["enableContactsAddContactCallCreation"=>$this->enableContactsAddContactCallCreation];
        if ($this->enableContactsAddContactAnimalSponsorship !== null) $parameterArray['values'][] = ["enableContactsAddContactAnimalSponsorship"=>$this->enableContactsAddContactAnimalSponsorship];
        if ($this->enableContactsAddContactUserRegistration !== null) $parameterArray['values'][] = ["enableContactsAddContactUserRegistration"=>$this->enableContactsAddContactUserRegistration];
    }
}