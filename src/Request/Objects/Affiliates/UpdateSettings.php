<?php
/**
 * Affiliates UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Affiliates;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'affiliates';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * setPayPalEmail
     *
     * @var string
     */
    private $setPayPalEmail = null;

    /**
     * showPayPalLink
     *
     * @var string
     */
    private $showPayPalLink = null;

    /**
     * setIGiveCauseID
     *
     * @var string
     */
    private $setIGiveCauseID = null;

    /**
     * showIGiveLink
     *
     * @var string
     */
    private $showIGiveLink = null;

    /**
     * setAmazonTag
     *
     * @var string
     */
    private $setAmazonTag = null;

    /**
     * showAmazonLink
     *
     * @var string
     */
    private $showAmazonLink = null;

    /**
     * setUWID
     *
     * @var string
     */
    private $setUWID = null;

    /**
     * showUWLink
     *
     * @var string
     */
    private $showUWLink = null;

    /**
     * setCFCID
     *
     * @var string
     */
    private $setCFCID = null;

    /**
     * showCFCLink
     *
     * @var string
     */
    private $showCFCLink = null;

    /**
     * setVolunteerMatchOrgID
     *
     * @var string
     */
    private $setVolunteerMatchOrgID = null;

    /**
     * showVolunteerMatchLink
     *
     * @var string
     */
    private $showVolunteerMatchLink = null;

    /**
     * setEIN
     *
     * @var string
     */
    private $setEIN = null;

    /**
     * showHelpingLink
     *
     * @var string
     */
    private $showHelpingLink = null;

    /**
     * setEbayStoreName
     *
     * @var string
     */
    private $setEbayStoreName = null;

    /**
     * showEbayStoreLink
     *
     * @var string
     */
    private $showEbayStoreLink = null;

    /**
     * setByVetsOnlyPartner
     *
     * @var string
     */
    private $setByVetsOnlyPartner = null;

    /**
     * showByVetsOnlyLink
     *
     * @var string
     */
    private $showByVetsOnlyLink = null;

    /**
     * setFacebookPage
     *
     * @var string
     */
    private $setFacebookPage = null;

    /**
     * showFacebookLink
     *
     * @var string
     */
    private $showFacebookLink = null;

    /**
     * showFacebookBadge
     *
     * @var string
     */
    private $showFacebookBadge = null;

    /**
     * setTwitterAccount
     *
     * @var string
     */
    private $setTwitterAccount = null;

    /**
     * showTwitterLink
     *
     * @var string
     */
    private $showTwitterLink = null;

    /**
     * showTwitterBadge
     *
     * @var string
     */
    private $showTwitterBadge = null;


    /**
     * Set setPayPalEmail
     *
     * @param string $value
     * @return $this
     */
    public function setSetPayPalEmail($value)
    {
        $this->setPayPalEmail = $value;

        return $this;
    }

    /**
     * Set showPayPalLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowPayPalLink($value)
    {
        $this->showPayPalLink = $value;

        return $this;
    }

    /**
     * Set setIGiveCauseID
     *
     * @param string $value
     * @return $this
     */
    public function setSetIGiveCauseID($value)
    {
        $this->setIGiveCauseID = $value;

        return $this;
    }

    /**
     * Set showIGiveLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowIGiveLink($value)
    {
        $this->showIGiveLink = $value;

        return $this;
    }

    /**
     * Set setAmazonTag
     *
     * @param string $value
     * @return $this
     */
    public function setSetAmazonTag($value)
    {
        $this->setAmazonTag = $value;

        return $this;
    }

    /**
     * Set showAmazonLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAmazonLink($value)
    {
        $this->showAmazonLink = $value;

        return $this;
    }

    /**
     * Set setUWID
     *
     * @param string $value
     * @return $this
     */
    public function setSetUWID($value)
    {
        $this->setUWID = $value;

        return $this;
    }

    /**
     * Set showUWLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowUWLink($value)
    {
        $this->showUWLink = $value;

        return $this;
    }

    /**
     * Set setCFCID
     *
     * @param string $value
     * @return $this
     */
    public function setSetCFCID($value)
    {
        $this->setCFCID = $value;

        return $this;
    }

    /**
     * Set showCFCLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowCFCLink($value)
    {
        $this->showCFCLink = $value;

        return $this;
    }

    /**
     * Set setVolunteerMatchOrgID
     *
     * @param string $value
     * @return $this
     */
    public function setSetVolunteerMatchOrgID($value)
    {
        $this->setVolunteerMatchOrgID = $value;

        return $this;
    }

    /**
     * Set showVolunteerMatchLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowVolunteerMatchLink($value)
    {
        $this->showVolunteerMatchLink = $value;

        return $this;
    }

    /**
     * Set setEIN
     *
     * @param string $value
     * @return $this
     */
    public function setSetEIN($value)
    {
        $this->setEIN = $value;

        return $this;
    }

    /**
     * Set showHelpingLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowHelpingLink($value)
    {
        $this->showHelpingLink = $value;

        return $this;
    }

    /**
     * Set setEbayStoreName
     *
     * @param string $value
     * @return $this
     */
    public function setSetEbayStoreName($value)
    {
        $this->setEbayStoreName = $value;

        return $this;
    }

    /**
     * Set showEbayStoreLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowEbayStoreLink($value)
    {
        $this->showEbayStoreLink = $value;

        return $this;
    }

    /**
     * Set setByVetsOnlyPartner
     *
     * @param string $value
     * @return $this
     */
    public function setSetByVetsOnlyPartner($value)
    {
        $this->setByVetsOnlyPartner = $value;

        return $this;
    }

    /**
     * Set showByVetsOnlyLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowByVetsOnlyLink($value)
    {
        $this->showByVetsOnlyLink = $value;

        return $this;
    }

    /**
     * Set setFacebookPage
     *
     * @param string $value
     * @return $this
     */
    public function setSetFacebookPage($value)
    {
        $this->setFacebookPage = $value;

        return $this;
    }

    /**
     * Set showFacebookLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowFacebookLink($value)
    {
        $this->showFacebookLink = $value;

        return $this;
    }

    /**
     * Set showFacebookBadge
     *
     * @param string $value
     * @return $this
     */
    public function setShowFacebookBadge($value)
    {
        $this->showFacebookBadge = $value;

        return $this;
    }

    /**
     * Set setTwitterAccount
     *
     * @param string $value
     * @return $this
     */
    public function setSetTwitterAccount($value)
    {
        $this->setTwitterAccount = $value;

        return $this;
    }

    /**
     * Set showTwitterLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowTwitterLink($value)
    {
        $this->showTwitterLink = $value;

        return $this;
    }

    /**
     * Set showTwitterBadge
     *
     * @param string $value
     * @return $this
     */
    public function setShowTwitterBadge($value)
    {
        $this->showTwitterBadge = $value;

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

        if ($this->setPayPalEmail !== null) $parameterArray['values'][] = ["setAffiliatesPayPalEmail"=>$this->setPayPalEmail];
        if ($this->showPayPalLink !== null) $parameterArray['values'][] = ["showAffiliatesPayPalLink"=>$this->showPayPalLink];
        if ($this->setIGiveCauseID !== null) $parameterArray['values'][] = ["setAffiliatesIGiveCauseID"=>$this->setIGiveCauseID];
        if ($this->showIGiveLink !== null) $parameterArray['values'][] = ["showAffiliatesIGiveLink"=>$this->showIGiveLink];
        if ($this->setAmazonTag !== null) $parameterArray['values'][] = ["setAffiliatesAmazonTag"=>$this->setAmazonTag];
        if ($this->showAmazonLink !== null) $parameterArray['values'][] = ["showAffiliatesAmazonLink"=>$this->showAmazonLink];
        if ($this->setUWID !== null) $parameterArray['values'][] = ["setAffiliatesUWID"=>$this->setUWID];
        if ($this->showUWLink !== null) $parameterArray['values'][] = ["showAffiliatesUWLink"=>$this->showUWLink];
        if ($this->setCFCID !== null) $parameterArray['values'][] = ["setAffiliatesCFCID"=>$this->setCFCID];
        if ($this->showCFCLink !== null) $parameterArray['values'][] = ["showAffiliatesCFCLink"=>$this->showCFCLink];
        if ($this->setVolunteerMatchOrgID !== null) $parameterArray['values'][] = ["setAffiliatesVolunteerMatchOrgID"=>$this->setVolunteerMatchOrgID];
        if ($this->showVolunteerMatchLink !== null) $parameterArray['values'][] = ["showAffiliatesVolunteerMatchLink"=>$this->showVolunteerMatchLink];
        if ($this->setEIN !== null) $parameterArray['values'][] = ["setAffiliatesEIN"=>$this->setEIN];
        if ($this->showHelpingLink !== null) $parameterArray['values'][] = ["showAffiliatesHelpingLink"=>$this->showHelpingLink];
        if ($this->setEbayStoreName !== null) $parameterArray['values'][] = ["setAffiliatesEbayStoreName"=>$this->setEbayStoreName];
        if ($this->showEbayStoreLink !== null) $parameterArray['values'][] = ["showAffiliatesEbayStoreLink"=>$this->showEbayStoreLink];
        if ($this->setByVetsOnlyPartner !== null) $parameterArray['values'][] = ["setAffiliatesByVetsOnlyPartner"=>$this->setByVetsOnlyPartner];
        if ($this->showByVetsOnlyLink !== null) $parameterArray['values'][] = ["showAffiliatesByVetsOnlyLink"=>$this->showByVetsOnlyLink];
        if ($this->setFacebookPage !== null) $parameterArray['values'][] = ["setAffiliatesFacebookPage"=>$this->setFacebookPage];
        if ($this->showFacebookLink !== null) $parameterArray['values'][] = ["showAffiliatesFacebookLink"=>$this->showFacebookLink];
        if ($this->showFacebookBadge !== null) $parameterArray['values'][] = ["showAffiliatesFacebookBadge"=>$this->showFacebookBadge];
        if ($this->setTwitterAccount !== null) $parameterArray['values'][] = ["setAffiliatesTwitterAccount"=>$this->setTwitterAccount];
        if ($this->showTwitterLink !== null) $parameterArray['values'][] = ["showAffiliatesTwitterLink"=>$this->showTwitterLink];
        if ($this->showTwitterBadge !== null) $parameterArray['values'][] = ["showAffiliatesTwitterBadge"=>$this->showTwitterBadge];
    }
}