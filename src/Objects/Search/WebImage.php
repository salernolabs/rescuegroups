<?php
/**
 * WebImage Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class WebImage extends \RescueGroups\Objects\WebImage implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * File name
     *
     * @var string
     */
    public $fileName = null;

    /**
     * Url
     *
     * @var string
     */
    public $url = null;

    /**
     * Size
     *
     * @var string
     */
    public $size = null;

    /**
     * Width
     *
     * @var string
     */
    public $width = null;

    /**
     * Height
     *
     * @var string
     */
    public $height = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'webimageID' => 'id',
            'webimageName' => 'name',
            'webimageFileName' => 'fileName',
            'webimageUrl' => 'url',
            'webimageSize' => 'size',
            'webimageWidth' => 'width',
            'webimageHeight' => 'height',
        ],
        'output' => [
            'id' => 'webimageID',
            'name' => 'webimageName',
            'fileName' => 'webimageFileName',
            'url' => 'webimageUrl',
            'size' => 'webimageSize',
            'width' => 'webimageWidth',
            'height' => 'webimageHeight',
        ]
    ];

}