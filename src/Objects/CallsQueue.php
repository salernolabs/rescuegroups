<?php
/**
 * CallsQueue Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsQueue implements \RescueGroups\Objects\APIEncodableInterface
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
     * From Email Address
     *
     * @var string
     */
    public $fromEmail = null;

    /**
     * Default Urgency
     *
     * @var integer
     */
    public $defaultUrgencyId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'queueID' => 'id',
            'queueName' => 'name',
            'queueFromEmail' => 'fromEmail',
            'queueDefaultUrgencyID' => 'defaultUrgencyId',
        ],
        'output' => [
            'id' => 'queueID',
            'name' => 'queueName',
            'fromEmail' => 'queueFromEmail',
            'defaultUrgencyId' => 'queueDefaultUrgencyID',
        ]
    ];

    /**
     * CallsQueue Constructor
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