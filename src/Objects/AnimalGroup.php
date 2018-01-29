<?php
/**
 * AnimalGroup Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalGroup implements \RescueGroups\Objects\APIEncodableInterface
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
     * Header
     *
     * @var integer
     */
    public $headerId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'groupID' => 'id',
            'groupName' => 'name',
            'groupHeaderID' => 'headerId',
        ],
        'output' => [
            'id' => 'groupID',
            'name' => 'groupName',
            'headerId' => 'groupHeaderID',
        ]
    ];

    /**
     * AnimalGroup Constructor
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