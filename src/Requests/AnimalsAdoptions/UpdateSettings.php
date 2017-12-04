<?php
/**
 * AnimalsAdoptions UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\AnimalsAdoptions;

class UpdateSettings implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Show a reminder to use the Adoptions feature when changing an animal's status to Adopted
     * @var string
     */
    private $showAdoptionsTrackingMessage = null;

    /**
     * Show an "Application Pending" message on public pages for animals when applicable
     * @var string
     */
    private $showAppPending = null;

    /**
     * Show an "Apply anyway" message on public pages for animals when applicable
     * @var string
     */
    private $showAppPendingAdoptAnyway = null;

    /**
     * Prevent applications from being submitted for animals with a pending application
     * @var string
     */
    private $preventApplicationsForPendingAnimals = null;


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
        return 'animalsAdoptions';
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
     * Set Show a reminder to use the Adoptions feature when changing an animal's status to Adopted
     *
     * @param string $showAdoptionsTrackingMessage
     * @return $this
     */
    public function setShowAdoptionsTrackingMessage($showAdoptionsTrackingMessage)
    {
        $this->showAdoptionsTrackingMessage = $showAdoptionsTrackingMessage;

        return $this;
    }

    /**
     * Set Show an "Application Pending" message on public pages for animals when applicable
     *
     * @param string $showAppPending
     * @return $this
     */
    public function setShowAppPending($showAppPending)
    {
        $this->showAppPending = $showAppPending;

        return $this;
    }

    /**
     * Set Show an "Apply anyway" message on public pages for animals when applicable
     *
     * @param string $showAppPendingAdoptAnyway
     * @return $this
     */
    public function setShowAppPendingAdoptAnyway($showAppPendingAdoptAnyway)
    {
        $this->showAppPendingAdoptAnyway = $showAppPendingAdoptAnyway;

        return $this;
    }

    /**
     * Set Prevent applications from being submitted for animals with a pending application
     *
     * @param string $preventApplicationsForPendingAnimals
     * @return $this
     */
    public function setPreventApplicationsForPendingAnimals($preventApplicationsForPendingAnimals)
    {
        $this->preventApplicationsForPendingAnimals = $preventApplicationsForPendingAnimals;

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
        if ($this->showAdoptionsTrackingMessage !== null) $parameterArray['showAdoptionsTrackingMessage'] = $this->showAdoptionsTrackingMessage;
        if ($this->showAppPending !== null) $parameterArray['showAppPending'] = $this->showAppPending;
        if ($this->showAppPendingAdoptAnyway !== null) $parameterArray['showAppPendingAdoptAnyway'] = $this->showAppPendingAdoptAnyway;
        if ($this->preventApplicationsForPendingAnimals !== null) $parameterArray['preventApplicationsForPendingAnimals'] = $this->preventApplicationsForPendingAnimals;

    }
}