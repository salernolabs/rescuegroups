<?php
/**
 * Affiliates UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Affiliates;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "setAffiliatesPayPalEmail" => 0,
        "showAffiliatesPayPalLink" => 0,
        "setAffiliatesIGiveCauseID" => 0,
        "showAffiliatesIGiveLink" => 0,
        "setAffiliatesAmazonTag" => 0,
        "showAffiliatesAmazonLink" => 0,
        "setAffiliatesUWID" => 0,
        "showAffiliatesUWLink" => 0,
        "setAffiliatesCFCID" => 0,
        "showAffiliatesCFCLink" => 0,
        "setAffiliatesVolunteerMatchOrgID" => 0,
        "showAffiliatesVolunteerMatchLink" => 0,
        "setAffiliatesEIN" => 0,
        "showAffiliatesHelpingLink" => 0,
        "setAffiliatesEbayStoreName" => 0,
        "showAffiliatesEbayStoreLink" => 0,
        "setAffiliatesByVetsOnlyPartner" => 0,
        "showAffiliatesByVetsOnlyLink" => 0,
        "setAffiliatesFacebookPage" => 0,
        "showAffiliatesFacebookLink" => 0,
        "showAffiliatesFacebookBadge" => 0,
        "setAffiliatesTwitterAccount" => 0,
        "showAffiliatesTwitterLink" => 0,
        "showAffiliatesTwitterBadge" => 0,
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
        return 'affiliates';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'updateSettings';
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