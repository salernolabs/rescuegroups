<?php
/**
 * %CLASSNAME% %REQUESTNAME% Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\%CLASSNAME%;

class %REQUESTNAME% implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface%PARAMETERSINTERFACE%
{
%TRAITS%%FIELDS%
    /**
     * @return bool
     */
    public function loginRequired()
    {
        return %LOGINREQUIRED%;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return '%TYPENAME%';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return '%OBJECTACTION%';
    }
%SETTERS%
%GETPARAMETERS%
}