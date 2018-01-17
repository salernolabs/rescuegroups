<?php
/**
 * Settings SetUserSetting Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Settings;

class SetUserSetting extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'settings';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'setUserSetting';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     *  Default template to load when adding an animal
     *
     * @var string
     */
    private $settingDefaultAnimalTemplate = null;


    /**
     * Set  Default template to load when adding an animal
     *
     * @param string $value
     * @return $this
     */
    public function setSettingDefaultAnimalTemplate($value)
    {
        $this->settingDefaultAnimalTemplate = $value;

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

        if ($this->settingDefaultAnimalTemplate !== null) $parameterArray['values'][] = ["settingDefaultAnimalTemplate"=>$this->settingDefaultAnimalTemplate];
    }
}