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
     * @var string
     */
    private $enableMemorials = null;

    /**
     * Select Memorials donation store item
     * @var string
     */
    private $setMemorialsDonationOnlineStoreItem = null;

    /**
     * Show alphabetical links (A-Z) on the Memorials page
     * @var string
     */
    private $showMemorialsAlphaLinks = null;


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
     * Set Enable the Memorials feature
     *
     * @param string $enableMemorials
     * @return $this
     */
    public function setEnableMemorials($enableMemorials)
    {
        $this->enableMemorials = $enableMemorials;

        return $this;
    }

    /**
     * Set Select Memorials donation store item
     *
     * @param string $setMemorialsDonationOnlineStoreItem
     * @return $this
     */
    public function setSetMemorialsDonationOnlineStoreItem($setMemorialsDonationOnlineStoreItem)
    {
        $this->setMemorialsDonationOnlineStoreItem = $setMemorialsDonationOnlineStoreItem;

        return $this;
    }

    /**
     * Set Show alphabetical links (A-Z) on the Memorials page
     *
     * @param string $showMemorialsAlphaLinks
     * @return $this
     */
    public function setShowMemorialsAlphaLinks($showMemorialsAlphaLinks)
    {
        $this->showMemorialsAlphaLinks = $showMemorialsAlphaLinks;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->enableMemorials !== null) $parameterArray['enableMemorials'] = $this->enableMemorials;
        if ($this->setMemorialsDonationOnlineStoreItem !== null) $parameterArray['setMemorialsDonationOnlineStoreItem'] = $this->setMemorialsDonationOnlineStoreItem;
        if ($this->showMemorialsAlphaLinks !== null) $parameterArray['showMemorialsAlphaLinks'] = $this->showMemorialsAlphaLinks;

    }
}