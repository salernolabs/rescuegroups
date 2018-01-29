<?php
/**
 * CallsQueuesMember Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsQueuesMember implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Queue
     *
     * @var integer
     */
    public $queueId = null;

    /**
     * Manager
     *
     * @var string
     */
    public $manager = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'memberID' => 'id',
            'memberContactID' => 'contactId',
            'memberQueueID' => 'queueId',
            'memberManager' => 'manager',
        ],
        'output' => [
            'id' => 'memberID',
            'contactId' => 'memberContactID',
            'queueId' => 'memberQueueID',
            'manager' => 'memberManager',
        ]
    ];

    /**
     * CallsQueuesMember Constructor
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