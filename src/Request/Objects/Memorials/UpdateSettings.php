<?php
/**
 * Memorials UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Memorials;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'memorials';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        $value = [];
        if ($this->enableMemorials !== null) $value["enableMemorials"] = $this->enableMemorials;
        if ($this->setMemorialsDonationOnlineStoreItem !== null) $value["setMemorialsDonationOnlineStoreItem"] = $this->setMemorialsDonationOnlineStoreItem;
        if ($this->showMemorialsAlphaLinks !== null) $value["showMemorialsAlphaLinks"] = $this->showMemorialsAlphaLinks;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}