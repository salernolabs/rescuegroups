<?php
/**
 * SubmittedForm Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class SubmittedForm implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
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
     * Status
     *
     * @var integer
     */
    public $statusId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'submittedformID' => 'id',
            'submittedformAnimalID' => 'animalId',
            'submittedformStatusID' => 'statusId',
        ],
        'output' => [
            'id' => 'submittedformID',
            'animalId' => 'submittedformAnimalID',
            'statusId' => 'submittedformStatusID',
        ]
    ];

    /**
     * SubmittedForm Constructor
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