<?php
/**
 * WebPages Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Requests\Objects\WebPages;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $webpageID = null;

    /**
     * Organization
     * @var integer
     */
    private $webpageOrgID = null;

    /**
     * Name
     * @var string
     */
    private $webpageName = null;

    /**
     * Content
     * @var string
     */
    private $webpageContent = null;

    /**
     * Status
     * @var string
     */
    private $webpageStatus = null;

    /**
     * Use Layout
     * @var string
     */
    private $webpageUselayout = null;

    /**
     * Show on Menu
     * @var string
     */
    private $webpageShowonmenu = null;

    /**
     * Meta Description
     * @var string
     */
    private $webpageMetaDescription = null;

    /**
     * Background Image
     * @var integer
     */
    private $webpageBackgroundImageID = null;

    /**
     * Background Image
     * @var string
     */
    private $webpageBackgroundImageFileName = null;

    /**
     * Background Music
     * @var integer
     */
    private $webpageBackgroundMusicID = null;

    /**
     * Background Music
     * @var string
     */
    private $webpageBackgroundMusicFileName = null;

    /**
     * Roles
     * @var integer
     */
    private $webpageRoles = null;


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
        return 'webpages';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'search';
    }

    /**
     * Set ID
     *
     * @param integer $webpageID
     * @return $this
     */
    public function setWebpageID($webpageID)
    {
        $this->webpageID = $webpageID;

        return $this;
    }

    /**
     * Set Organization
     *
     * @param integer $webpageOrgID
     * @return $this
     */
    public function setWebpageOrgID($webpageOrgID)
    {
        $this->webpageOrgID = $webpageOrgID;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $webpageName
     * @return $this
     */
    public function setWebpageName($webpageName)
    {
        $this->webpageName = $webpageName;

        return $this;
    }

    /**
     * Set Content
     *
     * @param string $webpageContent
     * @return $this
     */
    public function setWebpageContent($webpageContent)
    {
        $this->webpageContent = $webpageContent;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $webpageStatus
     * @return $this
     */
    public function setWebpageStatus($webpageStatus)
    {
        $this->webpageStatus = $webpageStatus;

        return $this;
    }

    /**
     * Set Use Layout
     *
     * @param string $webpageUselayout
     * @return $this
     */
    public function setWebpageUselayout($webpageUselayout)
    {
        $this->webpageUselayout = $webpageUselayout;

        return $this;
    }

    /**
     * Set Show on Menu
     *
     * @param string $webpageShowonmenu
     * @return $this
     */
    public function setWebpageShowonmenu($webpageShowonmenu)
    {
        $this->webpageShowonmenu = $webpageShowonmenu;

        return $this;
    }

    /**
     * Set Meta Description
     *
     * @param string $webpageMetaDescription
     * @return $this
     */
    public function setWebpageMetaDescription($webpageMetaDescription)
    {
        $this->webpageMetaDescription = $webpageMetaDescription;

        return $this;
    }

    /**
     * Set Background Image
     *
     * @param integer $webpageBackgroundImageID
     * @return $this
     */
    public function setWebpageBackgroundImageID($webpageBackgroundImageID)
    {
        $this->webpageBackgroundImageID = $webpageBackgroundImageID;

        return $this;
    }

    /**
     * Set Background Image
     *
     * @param string $webpageBackgroundImageFileName
     * @return $this
     */
    public function setWebpageBackgroundImageFileName($webpageBackgroundImageFileName)
    {
        $this->webpageBackgroundImageFileName = $webpageBackgroundImageFileName;

        return $this;
    }

    /**
     * Set Background Music
     *
     * @param integer $webpageBackgroundMusicID
     * @return $this
     */
    public function setWebpageBackgroundMusicID($webpageBackgroundMusicID)
    {
        $this->webpageBackgroundMusicID = $webpageBackgroundMusicID;

        return $this;
    }

    /**
     * Set Background Music
     *
     * @param string $webpageBackgroundMusicFileName
     * @return $this
     */
    public function setWebpageBackgroundMusicFileName($webpageBackgroundMusicFileName)
    {
        $this->webpageBackgroundMusicFileName = $webpageBackgroundMusicFileName;

        return $this;
    }

    /**
     * Set Roles
     *
     * @param integer $webpageRoles
     * @return $this
     */
    public function setWebpageRoles($webpageRoles)
    {
        $this->webpageRoles = $webpageRoles;

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
        if ($this->webpageID !== null) $parameterArray['webpageID'] = $this->webpageID;
        if ($this->webpageOrgID !== null) $parameterArray['webpageOrgID'] = $this->webpageOrgID;
        if ($this->webpageName !== null) $parameterArray['webpageName'] = $this->webpageName;
        if ($this->webpageContent !== null) $parameterArray['webpageContent'] = $this->webpageContent;
        if ($this->webpageStatus !== null) $parameterArray['webpageStatus'] = $this->webpageStatus;
        if ($this->webpageUselayout !== null) $parameterArray['webpageUselayout'] = $this->webpageUselayout;
        if ($this->webpageShowonmenu !== null) $parameterArray['webpageShowonmenu'] = $this->webpageShowonmenu;
        if ($this->webpageMetaDescription !== null) $parameterArray['webpageMetaDescription'] = $this->webpageMetaDescription;
        if ($this->webpageBackgroundImageID !== null) $parameterArray['webpageBackgroundImageID'] = $this->webpageBackgroundImageID;
        if ($this->webpageBackgroundImageFileName !== null) $parameterArray['webpageBackgroundImageFileName'] = $this->webpageBackgroundImageFileName;
        if ($this->webpageBackgroundMusicID !== null) $parameterArray['webpageBackgroundMusicID'] = $this->webpageBackgroundMusicID;
        if ($this->webpageBackgroundMusicFileName !== null) $parameterArray['webpageBackgroundMusicFileName'] = $this->webpageBackgroundMusicFileName;
        if ($this->webpageRoles !== null) $parameterArray['webpageRoles'] = $this->webpageRoles;

        $this->addSearchParameters($parameterArray);

    }
}