<?php
/**
 * WebPage Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class WebPage extends \RescueGroups\Objects\WebPage implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Organization
     *
     * @var integer
     */
    public $orgId = null;

    /**
     * Background Image
     *
     * @var string
     */
    public $backgroundImageFileName = null;

    /**
     * Background Music
     *
     * @var string
     */
    public $backgroundMusicFileName = null;

    /**
     * Roles
     *
     * @var integer
     */
    public $roles = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'webpageID' => 'id',
            'webpageOrgID' => 'orgId',
            'webpageName' => 'name',
            'webpageContent' => 'content',
            'webpageStatus' => 'status',
            'webpageUselayout' => 'uselayout',
            'webpageShowonmenu' => 'showonmenu',
            'webpageMetaDescription' => 'metaDescription',
            'webpageBackgroundImageID' => 'backgroundImageId',
            'webpageBackgroundImageFileName' => 'backgroundImageFileName',
            'webpageBackgroundMusicID' => 'backgroundMusicId',
            'webpageBackgroundMusicFileName' => 'backgroundMusicFileName',
            'webpageRoles' => 'roles',
        ],
        'output' => [
            'id' => 'webpageID',
            'orgId' => 'webpageOrgID',
            'name' => 'webpageName',
            'content' => 'webpageContent',
            'status' => 'webpageStatus',
            'uselayout' => 'webpageUselayout',
            'showonmenu' => 'webpageShowonmenu',
            'metaDescription' => 'webpageMetaDescription',
            'backgroundImageId' => 'webpageBackgroundImageID',
            'backgroundImageFileName' => 'webpageBackgroundImageFileName',
            'backgroundMusicId' => 'webpageBackgroundMusicID',
            'backgroundMusicFileName' => 'webpageBackgroundMusicFileName',
            'roles' => 'webpageRoles',
        ]
    ];

}