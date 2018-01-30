<?php
/**
 * Memorial Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class Memorial extends \RescueGroups\Objects\Memorial implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * File name
     *
     * @var string
     */
    public $pictureFileName = null;

    /**
     * Url
     *
     * @var string
     */
    public $pictureUrl = null;

    /**
     * Url
     *
     * @var string
     */
    public $pictureThumbnailUrl = null;

    /**
     * Order
     *
     * @var string
     */
    public $order = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'memorialID' => 'id',
            'memorialPictureFileName' => 'pictureFileName',
            'memorialPictureUrl' => 'pictureUrl',
            'memorialPictureThumbnailUrl' => 'pictureThumbnailUrl',
            'memorialName' => 'name',
            'memorialDescription' => 'description',
            'memorialOrder' => 'order',
        ],
        'output' => [
            'id' => 'memorialID',
            'pictureFileName' => 'memorialPictureFileName',
            'pictureUrl' => 'memorialPictureUrl',
            'pictureThumbnailUrl' => 'memorialPictureThumbnailUrl',
            'name' => 'memorialName',
            'description' => 'memorialDescription',
            'order' => 'memorialOrder',
        ]
    ];

}