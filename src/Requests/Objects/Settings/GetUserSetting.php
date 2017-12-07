<?php
/**
 * Settings GetUserSetting Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:45
 */
namespace RescueGroups\Requests\Objects\Settings;

class GetUserSetting implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Pattern
     * @var string
     */
    private $settingName = null;


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
     * Set Pattern
     *
     * @param string $settingName
     * @return $this
     */
    public function setSettingName($settingName)
    {
        $this->settingName = $settingName;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->settingName !== null) $parameterArray['settingName'] = $this->settingName;

    }
}