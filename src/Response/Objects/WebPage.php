<?php
/**
 * WebPage Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class WebPage
{
    /**
     * ID
     * @var integer
     */
    public $webpageID;

    /**
     * Name
     * @var string
     */
    public $webpageName;

    /**
     * Content
     * @var string
     */
    public $webpageContent;

    /**
     * Status
     * @var string
     */
    public $webpageStatus;

    /**
     * Use Layout
     * @var string
     */
    public $webpageUselayout;

    /**
     * Show on Menu
     * @var string
     */
    public $webpageShowonmenu;

    /**
     * Meta Description
     * @var string
     */
    public $webpageMetaDescription;

    /**
     * Background Image
     * @var integer
     */
    public $webpageBackgroundImageID;

    /**
     * Background Music
     * @var integer
     */
    public $webpageBackgroundMusicID;

    /**
     * Security Role
     * @var integer
     */
    public $webpageRoleID;



    /**
     * WebPages Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->webpageID)) $this->webpageID = $inputData->webpageID;
        if (!empty($inputData->webpageName)) $this->webpageName = $inputData->webpageName;
        if (!empty($inputData->webpageContent)) $this->webpageContent = $inputData->webpageContent;
        if (!empty($inputData->webpageStatus)) $this->webpageStatus = $inputData->webpageStatus;
        if (!empty($inputData->webpageUselayout)) $this->webpageUselayout = $inputData->webpageUselayout;
        if (!empty($inputData->webpageShowonmenu)) $this->webpageShowonmenu = $inputData->webpageShowonmenu;
        if (!empty($inputData->webpageMetaDescription)) $this->webpageMetaDescription = $inputData->webpageMetaDescription;
        if (!empty($inputData->webpageBackgroundImageID)) $this->webpageBackgroundImageID = $inputData->webpageBackgroundImageID;
        if (!empty($inputData->webpageBackgroundMusicID)) $this->webpageBackgroundMusicID = $inputData->webpageBackgroundMusicID;
        if (!empty($inputData->webpageRoleID)) $this->webpageRoleID = $inputData->webpageRoleID;

    }
}