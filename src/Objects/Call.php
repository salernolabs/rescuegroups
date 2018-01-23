<?php
/**
 * Call Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Call implements \RescueGroups\Objects\APIEncodableInterface
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
     * Assigned
     *
     * @var integer
     */
    public $assignedId = null;

    /**
     * Status
     *
     * @var integer
     */
    public $statusId = null;

    /**
     * Urgency
     *
     * @var integer
     */
    public $urgencyId = null;

    /**
     * Category
     *
     * @var integer
     */
    public $categoryId = null;

    /**
     * Queue
     *
     * @var integer
     */
    public $queueId = null;

    /**
     * Call date
     *
     * @var \DateTime
     */
    public $date = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'callID' => 'id',
            'callContactID' => 'contactId',
            'callAssignedID' => 'assignedId',
            'callStatusID' => 'statusId',
            'callUrgencyID' => 'urgencyId',
            'callCategoryID' => 'categoryId',
            'callQueueID' => 'queueId',
            'callDate' => 'date',
        ],
        'output' => [
            'id' => 'callID',
            'contactId' => 'callContactID',
            'assignedId' => 'callAssignedID',
            'statusId' => 'callStatusID',
            'urgencyId' => 'callUrgencyID',
            'categoryId' => 'callCategoryID',
            'queueId' => 'callQueueID',
            'date' => 'callDate',
        ]
    ];

    /**
     * Call Constructor
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