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
    private $enable = null;

    /**
     * Select Memorials donation store item
     *
     * @var string
     */
    private $setDonationOnlineStoreItem = null;

    /**
     * Show alphabetical links (A-Z) on the Memorials page
     *
     * @var string
     */
    private $showAlphaLinks = null;


    /**
     * Set Enable the Memorials feature
     *
     * @param string $value
     * @return $this
     */
    public function setEnable($value)
    {
        $this->enable = $value;

        return $this;
    }

    /**
     * Set Select Memorials donation store item
     *
     * @param string $value
     * @return $this
     */
    public function setSetDonationOnlineStoreItem($value)
    {
        $this->setDonationOnlineStoreItem = $value;

        return $this;
    }

    /**
     * Set Show alphabetical links (A-Z) on the Memorials page
     *
     * @param string $value
     * @return $this
     */
    public function setShowAlphaLinks($value)
    {
        $this->showAlphaLinks = $value;

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

        if ($this->enable !== null) $parameterArray['values'][] = ["enableMemorials"=>$this->enable];
        if ($this->setDonationOnlineStoreItem !== null) $parameterArray['values'][] = ["setMemorialsDonationOnlineStoreItem"=>$this->setDonationOnlineStoreItem];
        if ($this->showAlphaLinks !== null) $parameterArray['values'][] = ["showMemorialsAlphaLinks"=>$this->showAlphaLinks];
    }
}