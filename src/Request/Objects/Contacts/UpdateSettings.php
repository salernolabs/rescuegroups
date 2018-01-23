<?php
/**
 * Contacts UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Contacts;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'contacts';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Share your organization's Do Not Adopt list
     *
     * @var string
     */
    private $enableDoNotAdoptListSharing = null;

    /**
     * Automatically select to send Registration Invitation
     *
     * @var string
     */
    private $enableAutoSelectRegistrationInvitation = null;

    /**
     * Automatically select to set caretaker information public
     *
     * @var string
     */
    private $enableAutoSelectCaretakerInfoPublic = null;

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
    private $enableAddContactMeetRequest = null;

    /**
     * Add a Contact record when a Call is created from the Contact Us page
     *
     * @var string
     */
    private $enableAddContactCallCreation = null;

    /**
     * Add a Contact record when an Animal Sponsorship is submitted
     *
     * @var string
     */
    private $enableAddContactAnimalSponsorship = null;

    /**
     * Add a Contact record when a user registers
     *
     * @var string
     */
    private $enableAddContactUserRegistration = null;


    /**
     * Set Share your organization's Do Not Adopt list
     *
     * @param string $value
     * @return $this
     */
    public function setEnableDoNotAdoptListSharing($value)
    {
        $this->enableDoNotAdoptListSharing = $value;

        return $this;
    }

    /**
     * Set Automatically select to send Registration Invitation
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAutoSelectRegistrationInvitation($value)
    {
        $this->enableAutoSelectRegistrationInvitation = $value;

        return $this;
    }

    /**
     * Set Automatically select to set caretaker information public
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAutoSelectCaretakerInfoPublic($value)
    {
        $this->enableAutoSelectCaretakerInfoPublic = $value;

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
    public function setEnableAddContactMeetRequest($value)
    {
        $this->enableAddContactMeetRequest = $value;

        return $this;
    }

    /**
     * Set Add a Contact record when a Call is created from the Contact Us page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAddContactCallCreation($value)
    {
        $this->enableAddContactCallCreation = $value;

        return $this;
    }

    /**
     * Set Add a Contact record when an Animal Sponsorship is submitted
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAddContactAnimalSponsorship($value)
    {
        $this->enableAddContactAnimalSponsorship = $value;

        return $this;
    }

    /**
     * Set Add a Contact record when a user registers
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAddContactUserRegistration($value)
    {
        $this->enableAddContactUserRegistration = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->enableDoNotAdoptListSharing !== null) $parameterArray['values'][] = ["enableContactsDoNotAdoptListSharing"=>$this->enableDoNotAdoptListSharing];
        if ($this->enableAutoSelectRegistrationInvitation !== null) $parameterArray['values'][] = ["enableContactsAutoSelectRegistrationInvitation"=>$this->enableAutoSelectRegistrationInvitation];
        if ($this->enableAutoSelectCaretakerInfoPublic !== null) $parameterArray['values'][] = ["enableContactsAutoSelectCaretakerInfoPublic"=>$this->enableAutoSelectCaretakerInfoPublic];
        if ($this->enableAddContactOnlineFormSubmission !== null) $parameterArray['values'][] = ["enableAddContactOnlineFormSubmission"=>$this->enableAddContactOnlineFormSubmission];
        if ($this->enableAddContactMeetRequest !== null) $parameterArray['values'][] = ["enableContactsAddContactMeetRequest"=>$this->enableAddContactMeetRequest];
        if ($this->enableAddContactCallCreation !== null) $parameterArray['values'][] = ["enableContactsAddContactCallCreation"=>$this->enableAddContactCallCreation];
        if ($this->enableAddContactAnimalSponsorship !== null) $parameterArray['values'][] = ["enableContactsAddContactAnimalSponsorship"=>$this->enableAddContactAnimalSponsorship];
        if ($this->enableAddContactUserRegistration !== null) $parameterArray['values'][] = ["enableContactsAddContactUserRegistration"=>$this->enableAddContactUserRegistration];
    }
}