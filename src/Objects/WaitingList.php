<?php
/**
 * WaitingList Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WaitingList implements \RescueGroups\Objects\APIEncodableInterface
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
     * Type
     *
     * @var string
     */
    public $type = null;

    /**
     * Comment
     *
     * @var string
     */
    public $comment = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'waitinglistID' => 'id',
            'waitinglistName' => 'name',
            'waitinglistType' => 'type',
            'waitinglistComment' => 'comment',
        ],
        'output' => [
            'id' => 'waitinglistID',
            'name' => 'waitinglistName',
            'type' => 'waitinglistType',
            'comment' => 'waitinglistComment',
        ]
    ];

    /**
     * WaitingList Constructor
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