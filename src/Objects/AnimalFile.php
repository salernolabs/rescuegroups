<?php
/**
 * AnimalFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalFile implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * File ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $animalId = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Inline
     *
     * @var string
     */
    public $displayInline = null;

    /**
     * Public
     *
     * @var string
     */
    public $public = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'animalfileID' => 'id',
            'animalfileAnimalID' => 'animalId',
            'animalfileDescription' => 'description',
            'animalfileStatus' => 'status',
            'animalfileDisplayInline' => 'displayInline',
            'animalfilePublic' => 'public',
        ],
        'output' => [
            'id' => 'animalfileID',
            'animalId' => 'animalfileAnimalID',
            'description' => 'animalfileDescription',
            'status' => 'animalfileStatus',
            'displayInline' => 'animalfileDisplayInline',
            'public' => 'animalfilePublic',
        ]
    ];

    /**
     * AnimalFile Constructor
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