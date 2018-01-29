<?php
/**
 * Colony Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Colony implements \RescueGroups\Objects\APIEncodableInterface
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
     * Location
     *
     * @var integer
     */
    public $locationId = null;

    /**
     * Number of animals
     *
     * @var string
     */
    public $totalAnimals = null;

    /**
     * Registered
     *
     * @var \DateTime
     */
    public $registeredDate = null;

    /**
     * Specific location
     *
     * @var string
     */
    public $specificLocation = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'colonyID' => 'id',
            'colonyName' => 'name',
            'colonyLocationID' => 'locationId',
            'colonyTotalAnimals' => 'totalAnimals',
            'colonyRegisteredDate' => 'registeredDate',
            'colonySpecificLocation' => 'specificLocation',
        ],
        'output' => [
            'id' => 'colonyID',
            'name' => 'colonyName',
            'locationId' => 'colonyLocationID',
            'totalAnimals' => 'colonyTotalAnimals',
            'registeredDate' => 'colonyRegisteredDate',
            'specificLocation' => 'colonySpecificLocation',
        ]
    ];

    /**
     * Colony Constructor
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