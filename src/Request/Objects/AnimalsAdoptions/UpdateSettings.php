<?php
/**
 * AnimalsAdoptions UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsAdoptions';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Show a reminder to use the Adoptions feature when changing an animal's status to Adopted
     *
     * @var string
     */
    private $showAdoptionsTrackingMessage = null;

    /**
     * Show an &quot;Application Pending&quot; message on public pages for animals when applicable
     *
     * @var string
     */
    private $showAppPending = null;

    /**
     * Show an &quot;Apply anyway&quot; message on public pages for animals when applicable
     *
     * @var string
     */
    private $showAppPendingAdoptAnyway = null;

    /**
     * Prevent applications from being submitted for animals with a pending application
     *
     * @var string
     */
    private $preventApplicationsForPendingAnimals = null;


    /**
     * Set Show a reminder to use the Adoptions feature when changing an animal's status to Adopted
     *
     * @param string $value
     * @return $this
     */
    public function setShowAdoptionsTrackingMessage($value)
    {
        $this->showAdoptionsTrackingMessage = $value;

        return $this;
    }

    /**
     * Set Show an &quot;Application Pending&quot; message on public pages for animals when applicable
     *
     * @param string $value
     * @return $this
     */
    public function setShowAppPending($value)
    {
        $this->showAppPending = $value;

        return $this;
    }

    /**
     * Set Show an &quot;Apply anyway&quot; message on public pages for animals when applicable
     *
     * @param string $value
     * @return $this
     */
    public function setShowAppPendingAdoptAnyway($value)
    {
        $this->showAppPendingAdoptAnyway = $value;

        return $this;
    }

    /**
     * Set Prevent applications from being submitted for animals with a pending application
     *
     * @param string $value
     * @return $this
     */
    public function setPreventApplicationsForPendingAnimals($value)
    {
        $this->preventApplicationsForPendingAnimals = $value;

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

        $value = [];
        if ($this->showAdoptionsTrackingMessage !== null) $value["showAdoptionsTrackingMessage"] = $this->showAdoptionsTrackingMessage;
        if ($this->showAppPending !== null) $value["showAppPending"] = $this->showAppPending;
        if ($this->showAppPendingAdoptAnyway !== null) $value["showAppPendingAdoptAnyway"] = $this->showAppPendingAdoptAnyway;
        if ($this->preventApplicationsForPendingAnimals !== null) $value["preventApplicationsForPendingAnimals"] = $this->preventApplicationsForPendingAnimals;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}