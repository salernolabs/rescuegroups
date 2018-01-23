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
     * setAffiliatesPayPalEmail
     *
     * @var string
     */
    private $setAffiliatesPayPalEmail = null;

    /**
     * showAffiliatesPayPalLink
     *
     * @var string
     */
    private $showAffiliatesPayPalLink = null;

    /**
     * setAffiliatesIGiveCauseID
     *
     * @var string
     */
    private $setAffiliatesIGiveCauseID = null;

    /**
     * showAffiliatesIGiveLink
     *
     * @var string
     */
    private $showAffiliatesIGiveLink = null;

    /**
     * setAffiliatesAmazonTag
     *
     * @var string
     */
    private $setAffiliatesAmazonTag = null;

    /**
     * showAffiliatesAmazonLink
     *
     * @var string
     */
    private $showAffiliatesAmazonLink = null;

    /**
     * setAffiliatesUWID
     *
     * @var string
     */
    private $setAffiliatesUWID = null;

    /**
     * showAffiliatesUWLink
     *
     * @var string
     */
    private $showAffiliatesUWLink = null;

    /**
     * setAffiliatesCFCID
     *
     * @var string
     */
    private $setAffiliatesCFCID = null;

    /**
     * showAffiliatesCFCLink
     *
     * @var string
     */
    private $showAffiliatesCFCLink = null;

    /**
     * setAffiliatesVolunteerMatchOrgID
     *
     * @var string
     */
    private $setAffiliatesVolunteerMatchOrgID = null;

    /**
     * showAffiliatesVolunteerMatchLink
     *
     * @var string
     */
    private $showAffiliatesVolunteerMatchLink = null;

    /**
     * setAffiliatesEIN
     *
     * @var string
     */
    private $setAffiliatesEIN = null;

    /**
     * showAffiliatesHelpingLink
     *
     * @var string
     */
    private $showAffiliatesHelpingLink = null;

    /**
     * setAffiliatesEbayStoreName
     *
     * @var string
     */
    private $setAffiliatesEbayStoreName = null;

    /**
     * showAffiliatesEbayStoreLink
     *
     * @var string
     */
    private $showAffiliatesEbayStoreLink = null;

    /**
     * setAffiliatesByVetsOnlyPartner
     *
     * @var string
     */
    private $setAffiliatesByVetsOnlyPartner = null;

    /**
     * showAffiliatesByVetsOnlyLink
     *
     * @var string
     */
    private $showAffiliatesByVetsOnlyLink = null;

    /**
     * setAffiliatesFacebookPage
     *
     * @var string
     */
    private $setAffiliatesFacebookPage = null;

    /**
     * showAffiliatesFacebookLink
     *
     * @var string
     */
    private $showAffiliatesFacebookLink = null;

    /**
     * showAffiliatesFacebookBadge
     *
     * @var string
     */
    private $showAffiliatesFacebookBadge = null;

    /**
     * setAffiliatesTwitterAccount
     *
     * @var string
     */
    private $setAffiliatesTwitterAccount = null;

    /**
     * showAffiliatesTwitterLink
     *
     * @var string
     */
    private $showAffiliatesTwitterLink = null;

    /**
     * showAffiliatesTwitterBadge
     *
     * @var string
     */
    private $showAffiliatesTwitterBadge = null;


    /**
     * Set setAffiliatesPayPalEmail
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesPayPalEmail($value)
    {
        $this->setAffiliatesPayPalEmail = $value;

        return $this;
    }

    /**
     * Set showAffiliatesPayPalLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesPayPalLink($value)
    {
        $this->showAffiliatesPayPalLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesIGiveCauseID
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesIGiveCauseID($value)
    {
        $this->setAffiliatesIGiveCauseID = $value;

        return $this;
    }

    /**
     * Set showAffiliatesIGiveLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesIGiveLink($value)
    {
        $this->showAffiliatesIGiveLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesAmazonTag
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesAmazonTag($value)
    {
        $this->setAffiliatesAmazonTag = $value;

        return $this;
    }

    /**
     * Set showAffiliatesAmazonLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesAmazonLink($value)
    {
        $this->showAffiliatesAmazonLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesUWID
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesUWID($value)
    {
        $this->setAffiliatesUWID = $value;

        return $this;
    }

    /**
     * Set showAffiliatesUWLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesUWLink($value)
    {
        $this->showAffiliatesUWLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesCFCID
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesCFCID($value)
    {
        $this->setAffiliatesCFCID = $value;

        return $this;
    }

    /**
     * Set showAffiliatesCFCLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesCFCLink($value)
    {
        $this->showAffiliatesCFCLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesVolunteerMatchOrgID
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesVolunteerMatchOrgID($value)
    {
        $this->setAffiliatesVolunteerMatchOrgID = $value;

        return $this;
    }

    /**
     * Set showAffiliatesVolunteerMatchLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesVolunteerMatchLink($value)
    {
        $this->showAffiliatesVolunteerMatchLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesEIN
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesEIN($value)
    {
        $this->setAffiliatesEIN = $value;

        return $this;
    }

    /**
     * Set showAffiliatesHelpingLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesHelpingLink($value)
    {
        $this->showAffiliatesHelpingLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesEbayStoreName
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesEbayStoreName($value)
    {
        $this->setAffiliatesEbayStoreName = $value;

        return $this;
    }

    /**
     * Set showAffiliatesEbayStoreLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesEbayStoreLink($value)
    {
        $this->showAffiliatesEbayStoreLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesByVetsOnlyPartner
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesByVetsOnlyPartner($value)
    {
        $this->setAffiliatesByVetsOnlyPartner = $value;

        return $this;
    }

    /**
     * Set showAffiliatesByVetsOnlyLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesByVetsOnlyLink($value)
    {
        $this->showAffiliatesByVetsOnlyLink = $value;

        return $this;
    }

    /**
     * Set setAffiliatesFacebookPage
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesFacebookPage($value)
    {
        $this->setAffiliatesFacebookPage = $value;

        return $this;
    }

    /**
     * Set showAffiliatesFacebookLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesFacebookLink($value)
    {
        $this->showAffiliatesFacebookLink = $value;

        return $this;
    }

    /**
     * Set showAffiliatesFacebookBadge
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesFacebookBadge($value)
    {
        $this->showAffiliatesFacebookBadge = $value;

        return $this;
    }

    /**
     * Set setAffiliatesTwitterAccount
     *
     * @param string $value
     * @return $this
     */
    public function setSetAffiliatesTwitterAccount($value)
    {
        $this->setAffiliatesTwitterAccount = $value;

        return $this;
    }

    /**
     * Set showAffiliatesTwitterLink
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesTwitterLink($value)
    {
        $this->showAffiliatesTwitterLink = $value;

        return $this;
    }

    /**
     * Set showAffiliatesTwitterBadge
     *
     * @param string $value
     * @return $this
     */
    public function setShowAffiliatesTwitterBadge($value)
    {
        $this->showAffiliatesTwitterBadge = $value;

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

        $value = [];
        if ($this->setAffiliatesPayPalEmail !== null) $value["setAffiliatesPayPalEmail"] = $this->setAffiliatesPayPalEmail;
        if ($this->showAffiliatesPayPalLink !== null) $value["showAffiliatesPayPalLink"] = $this->showAffiliatesPayPalLink;
        if ($this->setAffiliatesIGiveCauseID !== null) $value["setAffiliatesIGiveCauseID"] = $this->setAffiliatesIGiveCauseID;
        if ($this->showAffiliatesIGiveLink !== null) $value["showAffiliatesIGiveLink"] = $this->showAffiliatesIGiveLink;
        if ($this->setAffiliatesAmazonTag !== null) $value["setAffiliatesAmazonTag"] = $this->setAffiliatesAmazonTag;
        if ($this->showAffiliatesAmazonLink !== null) $value["showAffiliatesAmazonLink"] = $this->showAffiliatesAmazonLink;
        if ($this->setAffiliatesUWID !== null) $value["setAffiliatesUWID"] = $this->setAffiliatesUWID;
        if ($this->showAffiliatesUWLink !== null) $value["showAffiliatesUWLink"] = $this->showAffiliatesUWLink;
        if ($this->setAffiliatesCFCID !== null) $value["setAffiliatesCFCID"] = $this->setAffiliatesCFCID;
        if ($this->showAffiliatesCFCLink !== null) $value["showAffiliatesCFCLink"] = $this->showAffiliatesCFCLink;
        if ($this->setAffiliatesVolunteerMatchOrgID !== null) $value["setAffiliatesVolunteerMatchOrgID"] = $this->setAffiliatesVolunteerMatchOrgID;
        if ($this->showAffiliatesVolunteerMatchLink !== null) $value["showAffiliatesVolunteerMatchLink"] = $this->showAffiliatesVolunteerMatchLink;
        if ($this->setAffiliatesEIN !== null) $value["setAffiliatesEIN"] = $this->setAffiliatesEIN;
        if ($this->showAffiliatesHelpingLink !== null) $value["showAffiliatesHelpingLink"] = $this->showAffiliatesHelpingLink;
        if ($this->setAffiliatesEbayStoreName !== null) $value["setAffiliatesEbayStoreName"] = $this->setAffiliatesEbayStoreName;
        if ($this->showAffiliatesEbayStoreLink !== null) $value["showAffiliatesEbayStoreLink"] = $this->showAffiliatesEbayStoreLink;
        if ($this->setAffiliatesByVetsOnlyPartner !== null) $value["setAffiliatesByVetsOnlyPartner"] = $this->setAffiliatesByVetsOnlyPartner;
        if ($this->showAffiliatesByVetsOnlyLink !== null) $value["showAffiliatesByVetsOnlyLink"] = $this->showAffiliatesByVetsOnlyLink;
        if ($this->setAffiliatesFacebookPage !== null) $value["setAffiliatesFacebookPage"] = $this->setAffiliatesFacebookPage;
        if ($this->showAffiliatesFacebookLink !== null) $value["showAffiliatesFacebookLink"] = $this->showAffiliatesFacebookLink;
        if ($this->showAffiliatesFacebookBadge !== null) $value["showAffiliatesFacebookBadge"] = $this->showAffiliatesFacebookBadge;
        if ($this->setAffiliatesTwitterAccount !== null) $value["setAffiliatesTwitterAccount"] = $this->setAffiliatesTwitterAccount;
        if ($this->showAffiliatesTwitterLink !== null) $value["showAffiliatesTwitterLink"] = $this->showAffiliatesTwitterLink;
        if ($this->showAffiliatesTwitterBadge !== null) $value["showAffiliatesTwitterBadge"] = $this->showAffiliatesTwitterBadge;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}