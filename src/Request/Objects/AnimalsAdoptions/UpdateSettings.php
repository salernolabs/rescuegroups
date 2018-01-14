<?php
/**
 * AnimalsAdoptions UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->showAdoptionsTrackingMessage !== null) $parameterArray['values'][] = ["showAdoptionsTrackingMessage"=>$this->showAdoptionsTrackingMessage];
        if ($this->showAppPending !== null) $parameterArray['values'][] = ["showAppPending"=>$this->showAppPending];
        if ($this->showAppPendingAdoptAnyway !== null) $parameterArray['values'][] = ["showAppPendingAdoptAnyway"=>$this->showAppPendingAdoptAnyway];
        if ($this->preventApplicationsForPendingAnimals !== null) $parameterArray['values'][] = ["preventApplicationsForPendingAnimals"=>$this->preventApplicationsForPendingAnimals];
    }
}