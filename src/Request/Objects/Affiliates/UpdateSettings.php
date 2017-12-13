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
     * 
     * @var string
     */
    private $setAffiliatesPayPalEmail = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesPayPalLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesIGiveCauseID = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesIGiveLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesAmazonTag = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesAmazonLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesUWID = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesUWLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesCFCID = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesCFCLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesVolunteerMatchOrgID = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesVolunteerMatchLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesEIN = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesHelpingLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesEbayStoreName = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesEbayStoreLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesByVetsOnlyPartner = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesByVetsOnlyLink = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesFacebookPage = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesFacebookLink = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesFacebookBadge = null;

    /**
     * 
     * @var string
     */
    private $setAffiliatesTwitterAccount = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesTwitterLink = null;

    /**
     * 
     * @var string
     */
    private $showAffiliatesTwitterBadge = null;


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
     * Set 
     *
     * @param string $setAffiliatesPayPalEmail
     * @return $this
     */
    public function setSetAffiliatesPayPalEmail($setAffiliatesPayPalEmail)
    {
        $this->setAffiliatesPayPalEmail = $setAffiliatesPayPalEmail;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesPayPalLink
     * @return $this
     */
    public function setShowAffiliatesPayPalLink($showAffiliatesPayPalLink)
    {
        $this->showAffiliatesPayPalLink = $showAffiliatesPayPalLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesIGiveCauseID
     * @return $this
     */
    public function setSetAffiliatesIGiveCauseID($setAffiliatesIGiveCauseID)
    {
        $this->setAffiliatesIGiveCauseID = $setAffiliatesIGiveCauseID;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesIGiveLink
     * @return $this
     */
    public function setShowAffiliatesIGiveLink($showAffiliatesIGiveLink)
    {
        $this->showAffiliatesIGiveLink = $showAffiliatesIGiveLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesAmazonTag
     * @return $this
     */
    public function setSetAffiliatesAmazonTag($setAffiliatesAmazonTag)
    {
        $this->setAffiliatesAmazonTag = $setAffiliatesAmazonTag;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesAmazonLink
     * @return $this
     */
    public function setShowAffiliatesAmazonLink($showAffiliatesAmazonLink)
    {
        $this->showAffiliatesAmazonLink = $showAffiliatesAmazonLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesUWID
     * @return $this
     */
    public function setSetAffiliatesUWID($setAffiliatesUWID)
    {
        $this->setAffiliatesUWID = $setAffiliatesUWID;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesUWLink
     * @return $this
     */
    public function setShowAffiliatesUWLink($showAffiliatesUWLink)
    {
        $this->showAffiliatesUWLink = $showAffiliatesUWLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesCFCID
     * @return $this
     */
    public function setSetAffiliatesCFCID($setAffiliatesCFCID)
    {
        $this->setAffiliatesCFCID = $setAffiliatesCFCID;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesCFCLink
     * @return $this
     */
    public function setShowAffiliatesCFCLink($showAffiliatesCFCLink)
    {
        $this->showAffiliatesCFCLink = $showAffiliatesCFCLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesVolunteerMatchOrgID
     * @return $this
     */
    public function setSetAffiliatesVolunteerMatchOrgID($setAffiliatesVolunteerMatchOrgID)
    {
        $this->setAffiliatesVolunteerMatchOrgID = $setAffiliatesVolunteerMatchOrgID;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesVolunteerMatchLink
     * @return $this
     */
    public function setShowAffiliatesVolunteerMatchLink($showAffiliatesVolunteerMatchLink)
    {
        $this->showAffiliatesVolunteerMatchLink = $showAffiliatesVolunteerMatchLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesEIN
     * @return $this
     */
    public function setSetAffiliatesEIN($setAffiliatesEIN)
    {
        $this->setAffiliatesEIN = $setAffiliatesEIN;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesHelpingLink
     * @return $this
     */
    public function setShowAffiliatesHelpingLink($showAffiliatesHelpingLink)
    {
        $this->showAffiliatesHelpingLink = $showAffiliatesHelpingLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesEbayStoreName
     * @return $this
     */
    public function setSetAffiliatesEbayStoreName($setAffiliatesEbayStoreName)
    {
        $this->setAffiliatesEbayStoreName = $setAffiliatesEbayStoreName;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesEbayStoreLink
     * @return $this
     */
    public function setShowAffiliatesEbayStoreLink($showAffiliatesEbayStoreLink)
    {
        $this->showAffiliatesEbayStoreLink = $showAffiliatesEbayStoreLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesByVetsOnlyPartner
     * @return $this
     */
    public function setSetAffiliatesByVetsOnlyPartner($setAffiliatesByVetsOnlyPartner)
    {
        $this->setAffiliatesByVetsOnlyPartner = $setAffiliatesByVetsOnlyPartner;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesByVetsOnlyLink
     * @return $this
     */
    public function setShowAffiliatesByVetsOnlyLink($showAffiliatesByVetsOnlyLink)
    {
        $this->showAffiliatesByVetsOnlyLink = $showAffiliatesByVetsOnlyLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesFacebookPage
     * @return $this
     */
    public function setSetAffiliatesFacebookPage($setAffiliatesFacebookPage)
    {
        $this->setAffiliatesFacebookPage = $setAffiliatesFacebookPage;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesFacebookLink
     * @return $this
     */
    public function setShowAffiliatesFacebookLink($showAffiliatesFacebookLink)
    {
        $this->showAffiliatesFacebookLink = $showAffiliatesFacebookLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesFacebookBadge
     * @return $this
     */
    public function setShowAffiliatesFacebookBadge($showAffiliatesFacebookBadge)
    {
        $this->showAffiliatesFacebookBadge = $showAffiliatesFacebookBadge;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setAffiliatesTwitterAccount
     * @return $this
     */
    public function setSetAffiliatesTwitterAccount($setAffiliatesTwitterAccount)
    {
        $this->setAffiliatesTwitterAccount = $setAffiliatesTwitterAccount;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesTwitterLink
     * @return $this
     */
    public function setShowAffiliatesTwitterLink($showAffiliatesTwitterLink)
    {
        $this->showAffiliatesTwitterLink = $showAffiliatesTwitterLink;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $showAffiliatesTwitterBadge
     * @return $this
     */
    public function setShowAffiliatesTwitterBadge($showAffiliatesTwitterBadge)
    {
        $this->showAffiliatesTwitterBadge = $showAffiliatesTwitterBadge;

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
        if ($this->setAffiliatesPayPalEmail !== null) $parameterArray['setAffiliatesPayPalEmail'] = $this->setAffiliatesPayPalEmail;
        if ($this->showAffiliatesPayPalLink !== null) $parameterArray['showAffiliatesPayPalLink'] = $this->showAffiliatesPayPalLink;
        if ($this->setAffiliatesIGiveCauseID !== null) $parameterArray['setAffiliatesIGiveCauseID'] = $this->setAffiliatesIGiveCauseID;
        if ($this->showAffiliatesIGiveLink !== null) $parameterArray['showAffiliatesIGiveLink'] = $this->showAffiliatesIGiveLink;
        if ($this->setAffiliatesAmazonTag !== null) $parameterArray['setAffiliatesAmazonTag'] = $this->setAffiliatesAmazonTag;
        if ($this->showAffiliatesAmazonLink !== null) $parameterArray['showAffiliatesAmazonLink'] = $this->showAffiliatesAmazonLink;
        if ($this->setAffiliatesUWID !== null) $parameterArray['setAffiliatesUWID'] = $this->setAffiliatesUWID;
        if ($this->showAffiliatesUWLink !== null) $parameterArray['showAffiliatesUWLink'] = $this->showAffiliatesUWLink;
        if ($this->setAffiliatesCFCID !== null) $parameterArray['setAffiliatesCFCID'] = $this->setAffiliatesCFCID;
        if ($this->showAffiliatesCFCLink !== null) $parameterArray['showAffiliatesCFCLink'] = $this->showAffiliatesCFCLink;
        if ($this->setAffiliatesVolunteerMatchOrgID !== null) $parameterArray['setAffiliatesVolunteerMatchOrgID'] = $this->setAffiliatesVolunteerMatchOrgID;
        if ($this->showAffiliatesVolunteerMatchLink !== null) $parameterArray['showAffiliatesVolunteerMatchLink'] = $this->showAffiliatesVolunteerMatchLink;
        if ($this->setAffiliatesEIN !== null) $parameterArray['setAffiliatesEIN'] = $this->setAffiliatesEIN;
        if ($this->showAffiliatesHelpingLink !== null) $parameterArray['showAffiliatesHelpingLink'] = $this->showAffiliatesHelpingLink;
        if ($this->setAffiliatesEbayStoreName !== null) $parameterArray['setAffiliatesEbayStoreName'] = $this->setAffiliatesEbayStoreName;
        if ($this->showAffiliatesEbayStoreLink !== null) $parameterArray['showAffiliatesEbayStoreLink'] = $this->showAffiliatesEbayStoreLink;
        if ($this->setAffiliatesByVetsOnlyPartner !== null) $parameterArray['setAffiliatesByVetsOnlyPartner'] = $this->setAffiliatesByVetsOnlyPartner;
        if ($this->showAffiliatesByVetsOnlyLink !== null) $parameterArray['showAffiliatesByVetsOnlyLink'] = $this->showAffiliatesByVetsOnlyLink;
        if ($this->setAffiliatesFacebookPage !== null) $parameterArray['setAffiliatesFacebookPage'] = $this->setAffiliatesFacebookPage;
        if ($this->showAffiliatesFacebookLink !== null) $parameterArray['showAffiliatesFacebookLink'] = $this->showAffiliatesFacebookLink;
        if ($this->showAffiliatesFacebookBadge !== null) $parameterArray['showAffiliatesFacebookBadge'] = $this->showAffiliatesFacebookBadge;
        if ($this->setAffiliatesTwitterAccount !== null) $parameterArray['setAffiliatesTwitterAccount'] = $this->setAffiliatesTwitterAccount;
        if ($this->showAffiliatesTwitterLink !== null) $parameterArray['showAffiliatesTwitterLink'] = $this->showAffiliatesTwitterLink;
        if ($this->showAffiliatesTwitterBadge !== null) $parameterArray['showAffiliatesTwitterBadge'] = $this->showAffiliatesTwitterBadge;

    }
}