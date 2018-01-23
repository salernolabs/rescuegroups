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
    private $enable = null;

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
    public function setEnable($value)
    {
        $this->enable = $value;

        return $this;
    }

    /**
     * Set Partnership alert email address(es)
     *
     * @param string $value
     * @return $this
     */
    public function setSetPartnershipAlertEmailAddresses($value)
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

        if ($this->enable !== null) $parameterArray['values'][] = ["enablePartnerships"=>$this->enable];
        if ($this->setPartnershipAlertEmailAddresses !== null) $parameterArray['values'][] = ["setPartnershipAlertEmailAddresses"=>$this->setPartnershipAlertEmailAddresses];
    }
}