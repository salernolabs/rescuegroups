<?php
/**
 * SubmittedForms PublicCommonSubmit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\SubmittedForms;

class PublicCommonSubmit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "submittedformAnimalID" => 1,
        "submitterSalutation" => 0,
        "submitterFirstname" => 1,
        "submitterLastname" => 1,
        "submitterAddress" => 1,
        "submitterCity" => 1,
        "submitterState" => 1,
        "submitterPostalcode" => 1,
        "submitterPlus4" => 0,
        "submitterCounty" => 0,
        "submitterCountry" => 0,
        "submitterPhoneHome" => 1,
        "submitterPhoneWork" => 0,
        "submitterPhoneWorkExt" => 0,
        "submitterPhoneCell" => 0,
        "submitterFax" => 0,
        "submitterEmail" => 1,
        "submitterEmailAlt" => 0,
        "submitterEmailPager" => 0,
        "submitterReferredBy" => 0,
        "submittedformAnswers" => 1,
    ];


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
        return 'submittedforms';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicCommonSubmit';
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