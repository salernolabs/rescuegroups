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
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Name
     *
     * @var string
     */
    public $name = null;

    /**
     * Content
     *
     * @var string
     */
    public $content = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Use Layout
     *
     * @var string
     */
    public $uselayout = null;

    /**
     * Show on Menu
     *
     * @var string
     */
    public $showonmenu = null;

    /**
     * Meta Description
     *
     * @var string
     */
    public $metaDescription = null;

    /**
     * Background Image
     *
     * @var integer
     */
    public $backgroundImageId = null;

    /**
     * Background Music
     *
     * @var integer
     */
    public $backgroundMusicId = null;

    /**
     * Security Role
     *
     * @var integer
     */
    public $roleId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'webpageID' => 'id',
            'webpageName' => 'name',
            'webpageContent' => 'content',
            'webpageStatus' => 'status',
            'webpageUselayout' => 'uselayout',
            'webpageShowonmenu' => 'showonmenu',
            'webpageMetaDescription' => 'metaDescription',
            'webpageBackgroundImageID' => 'backgroundImageId',
            'webpageBackgroundMusicID' => 'backgroundMusicId',
            'webpageRoleID' => 'roleId',
        ],
        'output' => [
            'id' => 'webpageID',
            'name' => 'webpageName',
            'content' => 'webpageContent',
            'status' => 'webpageStatus',
            'uselayout' => 'webpageUselayout',
            'showonmenu' => 'webpageShowonmenu',
            'metaDescription' => 'webpageMetaDescription',
            'backgroundImageId' => 'webpageBackgroundImageID',
            'backgroundMusicId' => 'webpageBackgroundMusicID',
            'roleId' => 'webpageRoleID',
        ]
    ];

    /**
     * WebPage Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}