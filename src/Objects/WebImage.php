<?php
/**
 * WebImage Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WebImage implements \RescueGroups\Objects\APIEncodableInterface
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
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'webimageID' => 'id',
            'webimageName' => 'name',
        ],
        'output' => [
            'id' => 'webimageID',
            'name' => 'webimageName',
        ]
    ];

    /**
     * WebImage Constructor
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