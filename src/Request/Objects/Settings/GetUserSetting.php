<?php
/**
 * Settings GetUserSetting Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Settings;

class GetUserSetting extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'settings';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'getUserSetting';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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