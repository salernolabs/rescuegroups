<?php
/**
 * Settings GetUserSetting Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Settings;

class GetUserSetting implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Pattern
     *
     * @var string
     */
    private $settingName = null;


    /**
     * Set Pattern
     *
     * @param string $value
     * @return $this
     */
    public function setSettingName($value)
    {
        $this->settingName = $value;

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
        return 'settings';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'getUserSetting';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->settingName !== null) $parameterArray['values'][] = ["settingName"=>$this->settingName];
    }
}