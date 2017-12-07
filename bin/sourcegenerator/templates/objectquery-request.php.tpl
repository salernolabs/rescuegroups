<?php
/**
 * %CLASSNAME% %REQUESTNAME% Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date %DATE%
 */
namespace RescueGroups\Requests\Objects\%CLASSNAME%;

class %REQUESTNAME% implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface%PARAMETERSINTERFACE%
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