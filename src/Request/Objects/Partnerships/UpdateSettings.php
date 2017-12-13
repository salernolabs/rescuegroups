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
     * @var string
     */
    private $enablePartnerships = null;

    /**
     * Partnership alert email address(es)
     * @var string
     */
    private $setPartnershipAlertEmailAddresses = null;


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
     * Set Enable the Partnerships feature
     *
     * @param string $enablePartnerships
     * @return $this
     */
    public function setEnablePartnerships($enablePartnerships)
    {
        $this->enablePartnerships = $enablePartnerships;

        return $this;
    }

    /**
     * Set Partnership alert email address(es)
     *
     * @param string $setPartnershipAlertEmailAddresses
     * @return $this
     */
    public function setSetPartnershipAlertEmailAddresses($setPartnershipAlertEmailAddresses)
    {
        $this->setPartnershipAlertEmailAddresses = $setPartnershipAlertEmailAddresses;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->enablePartnerships !== null) $parameterArray['enablePartnerships'] = $this->enablePartnerships;
        if ($this->setPartnershipAlertEmailAddresses !== null) $parameterArray['setPartnershipAlertEmailAddresses'] = $this->setPartnershipAlertEmailAddresses;

    }
}