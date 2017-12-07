<?php
/**
 * WebPages Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Requests\Objects\WebPages;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $webpageID = null;

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
     * Background Music
     * @var integer
     */
    private $webpageBackgroundMusicID = null;

    /**
     * Security Role
     * @var integer
     */
    private $webpageRoleID = null;


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
        return 'edit';
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
     * Set Security Role
     *
     * @param integer $webpageRoleID
     * @return $this
     */
    public function setWebpageRoleID($webpageRoleID)
    {
        $this->webpageRoleID = $webpageRoleID;

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
        if ($this->webpageName !== null) $parameterArray['webpageName'] = $this->webpageName;
        if ($this->webpageContent !== null) $parameterArray['webpageContent'] = $this->webpageContent;
        if ($this->webpageStatus !== null) $parameterArray['webpageStatus'] = $this->webpageStatus;
        if ($this->webpageUselayout !== null) $parameterArray['webpageUselayout'] = $this->webpageUselayout;
        if ($this->webpageShowonmenu !== null) $parameterArray['webpageShowonmenu'] = $this->webpageShowonmenu;
        if ($this->webpageMetaDescription !== null) $parameterArray['webpageMetaDescription'] = $this->webpageMetaDescription;
        if ($this->webpageBackgroundImageID !== null) $parameterArray['webpageBackgroundImageID'] = $this->webpageBackgroundImageID;
        if ($this->webpageBackgroundMusicID !== null) $parameterArray['webpageBackgroundMusicID'] = $this->webpageBackgroundMusicID;
        if ($this->webpageRoleID !== null) $parameterArray['webpageRoleID'] = $this->webpageRoleID;

    }
}