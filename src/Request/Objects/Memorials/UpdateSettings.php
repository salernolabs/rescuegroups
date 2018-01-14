<?php
/**
 * Memorials UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Memorials;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Enable the Memorials feature
     *
     * @var string
     */
    private $enableMemorials = null;

    /**
     * Select Memorials donation store item
     *
     * @var string
     */
    private $setMemorialsDonationOnlineStoreItem = null;

    /**
     * Show alphabetical links (A-Z) on the Memorials page
     *
     * @var string
     */
    private $showMemorialsAlphaLinks = null;


    /**
     * Set Enable the Memorials feature
     *
     * @param string $value
     * @return $this
     */
    public function setEnableMemorials($value)
    {
        $this->enableMemorials = $value;

        return $this;
    }

    /**
     * Set Select Memorials donation store item
     *
     * @param string $value
     * @return $this
     */
    public function setSetMemorialsDonationOnlineStoreItem($value)
    {
        $this->setMemorialsDonationOnlineStoreItem = $value;

        return $this;
    }

    /**
     * Set Show alphabetical links (A-Z) on the Memorials page
     *
     * @param string $value
     * @return $this
     */
    public function setShowMemorialsAlphaLinks($value)
    {
        $this->showMemorialsAlphaLinks = $value;

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
        return 'memorials';
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

        if ($this->enableMemorials !== null) $parameterArray['values'][] = ["enableMemorials"=>$this->enableMemorials];
        if ($this->setMemorialsDonationOnlineStoreItem !== null) $parameterArray['values'][] = ["setMemorialsDonationOnlineStoreItem"=>$this->setMemorialsDonationOnlineStoreItem];
        if ($this->showMemorialsAlphaLinks !== null) $parameterArray['values'][] = ["showMemorialsAlphaLinks"=>$this->showMemorialsAlphaLinks];
    }
}