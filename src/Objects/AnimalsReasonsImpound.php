<?php
/**
 * AnimalsReasonsImpound Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsReasonsImpound implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Reason ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Reason
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
            'reasonID' => 'id',
            'reasonName' => 'name',
        ],
        'output' => [
            'id' => 'reasonID',
            'name' => 'reasonName',
        ]
    ];

    /**
     * AnimalsReasonsImpound Constructor
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