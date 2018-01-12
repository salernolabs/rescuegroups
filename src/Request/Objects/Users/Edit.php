<?php
/**
 * Users Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Users;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "userID" => 1,
        "userLogin" => 0,
        "userPassword" => 0,
        "userSalutation" => 0,
        "userFirstname" => 0,
        "userLastname" => 0,
        "userAddress" => 0,
        "userCity" => 0,
        "userState" => 0,
        "userPostalcode" => 0,
        "userPlus4" => 0,
        "userCountry" => 0,
        "userPhoneHome" => 0,
        "userPhoneWork" => 0,
        "userPhoneWorkExt" => 0,
        "userPhoneCell" => 0,
        "userFax" => 0,
        "userEmail" => 0,
        "userEmailAlt" => 0,
        "userEmailPager" => 0,
        "userContactID" => 0,
        "userStatus" => 0,
    ];


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
        return 'users';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'edit';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {

    }

}