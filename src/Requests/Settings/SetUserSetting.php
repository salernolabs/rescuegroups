<?php
/**
 * Settings SetUserSetting Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Settings;

class SetUserSetting implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     *  Default template to load when adding an animal
     * @var string
     */
    private $settingDefaultAnimalTemplate = null;


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
        return 'setUserSetting';
    }

    /**
     * Set  Default template to load when adding an animal
     *
     * @param string $settingDefaultAnimalTemplate
     * @return $this
     */
    public function setSettingDefaultAnimalTemplate($settingDefaultAnimalTemplate)
    {
        $this->settingDefaultAnimalTemplate = $settingDefaultAnimalTemplate;

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
        if ($this->settingDefaultAnimalTemplate !== null) $parameterArray['settingDefaultAnimalTemplate'] = $this->settingDefaultAnimalTemplate;

    }
}