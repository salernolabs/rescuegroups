<?php
/**
 * WebPages Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebPages;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Name
     *
     * @var string
     */
    private $webpageName = null;

    /**
     * Content
     *
     * @var string
     */
    private $webpageContent = null;

    /**
     * Status
     *
     * @var string
     */
    private $webpageStatus = null;

    /**
     * Use Layout
     *
     * @var string
     */
    private $webpageUselayout = null;

    /**
     * Show on Menu
     *
     * @var string
     */
    private $webpageShowonmenu = null;

    /**
     * Meta Description
     *
     * @var string
     */
    private $webpageMetaDescription = null;

    /**
     * Background Image
     *
     * @var integer
     */
    private $webpageBackgroundImageID = null;

    /**
     * Background Music
     *
     * @var integer
     */
    private $webpageBackgroundMusicID = null;

    /**
     * Security Role
     *
     * @var integer
     */
    private $webpageRoleID = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setWebpageName($value)
    {
        $this->webpageName = $value;

        return $this;
    }

    /**
     * Set Content
     *
     * @param string $value
     * @return $this
     */
    public function setWebpageContent($value)
    {
        $this->webpageContent = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $value
     * @return $this
     */
    public function setWebpageStatus($value)
    {
        $this->webpageStatus = $value;

        return $this;
    }

    /**
     * Set Use Layout
     *
     * @param string $value
     * @return $this
     */
    public function setWebpageUselayout($value)
    {
        $this->webpageUselayout = $value;

        return $this;
    }

    /**
     * Set Show on Menu
     *
     * @param string $value
     * @return $this
     */
    public function setWebpageShowonmenu($value)
    {
        $this->webpageShowonmenu = $value;

        return $this;
    }

    /**
     * Set Meta Description
     *
     * @param string $value
     * @return $this
     */
    public function setWebpageMetaDescription($value)
    {
        $this->webpageMetaDescription = $value;

        return $this;
    }

    /**
     * Set Background Image
     *
     * @param integer $value
     * @return $this
     */
    public function setWebpageBackgroundImageID($value)
    {
        $this->webpageBackgroundImageID = $value;

        return $this;
    }

    /**
     * Set Background Music
     *
     * @param integer $value
     * @return $this
     */
    public function setWebpageBackgroundMusicID($value)
    {
        $this->webpageBackgroundMusicID = $value;

        return $this;
    }

    /**
     * Set Security Role
     *
     * @param integer $value
     * @return $this
     */
    public function setWebpageRoleID($value)
    {
        $this->webpageRoleID = $value;

        return $this;
    }


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
        return 'webpages';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->webpageName !== null) $parameterArray['values'][] = ["webpageName"=>$this->webpageName];
        if ($this->webpageContent !== null) $parameterArray['values'][] = ["webpageContent"=>$this->webpageContent];
        if ($this->webpageStatus !== null) $parameterArray['values'][] = ["webpageStatus"=>$this->webpageStatus];
        if ($this->webpageUselayout !== null) $parameterArray['values'][] = ["webpageUselayout"=>$this->webpageUselayout];
        if ($this->webpageShowonmenu !== null) $parameterArray['values'][] = ["webpageShowonmenu"=>$this->webpageShowonmenu];
        if ($this->webpageMetaDescription !== null) $parameterArray['values'][] = ["webpageMetaDescription"=>$this->webpageMetaDescription];
        if ($this->webpageBackgroundImageID !== null) $parameterArray['values'][] = ["webpageBackgroundImageID"=>$this->webpageBackgroundImageID];
        if ($this->webpageBackgroundMusicID !== null) $parameterArray['values'][] = ["webpageBackgroundMusicID"=>$this->webpageBackgroundMusicID];
        if ($this->webpageRoleID !== null) $parameterArray['values'][] = ["webpageRoleID"=>$this->webpageRoleID];
    }
}