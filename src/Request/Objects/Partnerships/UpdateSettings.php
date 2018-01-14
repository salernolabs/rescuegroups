<?php
/**
 * Partnerships UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Partnerships;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
    public function setSetPartnershipAlertEmailAddresses($value)
    {
        $this->setPartnershipAlertEmailAddresses = $value;

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
        return 'partnerships';
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

        if ($this->enablePartnerships !== null) $parameterArray['values'][] = ["enablePartnerships"=>$this->enablePartnerships];
        if ($this->setPartnershipAlertEmailAddresses !== null) $parameterArray['values'][] = ["setPartnershipAlertEmailAddresses"=>$this->setPartnershipAlertEmailAddresses];
    }
}