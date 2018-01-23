<?php
/**
 * WebPage Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WebPage implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $webpageID = null;

    /**
     * Name
     *
     * @var string
     */
    public $webpageName = null;

    /**
     * Content
     *
     * @var string
     */
    public $webpageContent = null;

    /**
     * Status
     *
     * @var string
     */
    public $tatus = null;

    /**
     * Use Layout
     *
     * @var string
     */
    public $webpageUselayout = null;

    /**
     * Show on Menu
     *
     * @var string
     */
    public $howonmenu = null;

    /**
     * Meta Description
     *
     * @var string
     */
    public $webpageMetaDescription = null;

    /**
     * Background Image
     *
     * @var integer
     */
    public $webpageBackgroundImageID = null;

    /**
     * Background Music
     *
     * @var integer
     */
    public $webpageBackgroundMusicID = null;

    /**
     * Security Role
     *
     * @var integer
     */
    public $webpageRoleID = null;


    /**
     * WebPage Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->webpageID)) $this->webpageID = $inputData->webpageID;
        if (!empty($inputData->webpageName)) $this->webpageName = $inputData->webpageName;
        if (!empty($inputData->webpageContent)) $this->webpageContent = $inputData->webpageContent;
        if (!empty($inputData->webpageStatus)) $this->tatus = $inputData->webpageStatus;
        if (!empty($inputData->webpageUselayout)) $this->webpageUselayout = $inputData->webpageUselayout;
        if (!empty($inputData->webpageShowonmenu)) $this->howonmenu = $inputData->webpageShowonmenu;
        if (!empty($inputData->webpageMetaDescription)) $this->webpageMetaDescription = $inputData->webpageMetaDescription;
        if (!empty($inputData->webpageBackgroundImageID)) $this->webpageBackgroundImageID = $inputData->webpageBackgroundImageID;
        if (!empty($inputData->webpageBackgroundMusicID)) $this->webpageBackgroundMusicID = $inputData->webpageBackgroundMusicID;
        if (!empty($inputData->webpageRoleID)) $this->webpageRoleID = $inputData->webpageRoleID;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->webpageID !== null) $output['webpageID'] = $this->webpageID;
        if ($this->webpageName !== null) $output['webpageName'] = $this->webpageName;
        if ($this->webpageContent !== null) $output['webpageContent'] = $this->webpageContent;
        if ($this->tatus !== null) $output['webpageStatus'] = $this->tatus;
        if ($this->webpageUselayout !== null) $output['webpageUselayout'] = $this->webpageUselayout;
        if ($this->howonmenu !== null) $output['webpageShowonmenu'] = $this->howonmenu;
        if ($this->webpageMetaDescription !== null) $output['webpageMetaDescription'] = $this->webpageMetaDescription;
        if ($this->webpageBackgroundImageID !== null) $output['webpageBackgroundImageID'] = $this->webpageBackgroundImageID;
        if ($this->webpageBackgroundMusicID !== null) $output['webpageBackgroundMusicID'] = $this->webpageBackgroundMusicID;
        if ($this->webpageRoleID !== null) $output['webpageRoleID'] = $this->webpageRoleID;

        return $output;
    }
}