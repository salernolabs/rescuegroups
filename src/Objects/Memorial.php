<?php
/**
 * Memorial Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Memorial implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * File
     *
     * @var string
     */
    public $pictureBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $pictureOldFileName = null;

    /**
     * File name
     *
     * @var string
     */
    public $name = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'memorialID' => 'id',
            'memorialPictureBinary' => 'pictureBinary',
            'memorialPictureOldFileName' => 'pictureOldFileName',
            'memorialName' => 'name',
            'memorialDescription' => 'description',
        ],
        'output' => [
            'id' => 'memorialID',
            'pictureBinary' => 'memorialPictureBinary',
            'pictureOldFileName' => 'memorialPictureOldFileName',
            'name' => 'memorialName',
            'description' => 'memorialDescription',
        ]
    ];

    /**
     * Memorial Constructor
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