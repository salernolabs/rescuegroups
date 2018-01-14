<?php
/**
 * Settings SetUserSetting Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Settings;

class SetUserSetting implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
        return 'setUserSetting';
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