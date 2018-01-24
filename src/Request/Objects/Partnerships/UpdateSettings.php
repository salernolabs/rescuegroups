<?php
/**
 * Partnerships UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Partnerships;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'partnerships';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Enable the Partnerships feature
     *
     * @var string
     */
    private $enablePartnerships = null;

    /**
     * Partnership alert email address(es)
     *
     * @var string
     */
    private $setPartnershipAlertEmailAddresses = null;


    /**
     * Set Enable the Partnerships feature
     *
     * @param string $value
     * @return $this
     */
    public function setEnablePartnerships($value)
    {
        $this->enablePartnerships = $value;

        return $this;
    }

    /**
     * Set Partnership alert email address(es)
     *
     * @param string $value
     * @return $this
     */
    public function setPartnershipAlertEmailAddresses($value)
    {
        $this->setPartnershipAlertEmailAddresses = $value;

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
        if ($this->enablePartnerships !== null) $value["enablePartnerships"] = $this->enablePartnerships;
        if ($this->setPartnershipAlertEmailAddresses !== null) $value["setPartnershipAlertEmailAddresses"] = $this->setPartnershipAlertEmailAddresses;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}