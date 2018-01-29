<?php
/**
 * CallsCategory Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsCategory implements \RescueGroups\Objects\APIEncodableInterface
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
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Public
     *
     * @var string
     */
    public $public = null;

    /**
     * Default Queue
     *
     * @var integer
     */
    public $defaultQueueId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'categoryID' => 'id',
            'categoryName' => 'name',
            'categoryDescription' => 'description',
            'categoryPublic' => 'public',
            'categoryDefaultQueueID' => 'defaultQueueId',
        ],
        'output' => [
            'id' => 'categoryID',
            'name' => 'categoryName',
            'description' => 'categoryDescription',
            'public' => 'categoryPublic',
            'defaultQueueId' => 'categoryDefaultQueueID',
        ]
    ];

    /**
     * CallsCategory Constructor
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