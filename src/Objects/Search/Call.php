<?php
/**
 * Call Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class Call extends \RescueGroups\Objects\Call implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Contact
     *
     * @var string
     */
    public $contactName = null;

    /**
     * Contact Type
     *
     * @var string
     */
    public $contactType = null;

    /**
     * Assigned To
     *
     * @var string
     */
    public $assignedName = null;

    /**
     * Queue
     *
     * @var string
     */
    public $queueName = null;

    /**
     * Category
     *
     * @var string
     */
    public $categoryName = null;

    /**
     * Status
     *
     * @var string
     */
    public $statusName = null;

    /**
     * Urgency
     *
     * @var string
     */
    public $urgencyName = null;

    /**
     * Last Outcome
     *
     * @var string
     */
    public $lastOutcome = null;

    /**
     * Log Entries Count
     *
     * @var string
     */
    public $logEntryCount = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
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
            'contactName' => 'contactName',
            'contactType' => 'contactType',
            'assignedName' => 'assignedName',
            'queueName' => 'queueName',
            'categoryName' => 'categoryName',
            'statusName' => 'statusName',
            'urgencyName' => 'urgencyName',
            'lastOutcome' => 'lastOutcome',
            'logEntryCount' => 'logEntryCount',
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
            'contactName' => 'contactName',
            'contactType' => 'contactType',
            'assignedName' => 'assignedName',
            'queueName' => 'queueName',
            'categoryName' => 'categoryName',
            'statusName' => 'statusName',
            'urgencyName' => 'urgencyName',
            'lastOutcome' => 'lastOutcome',
            'logEntryCount' => 'logEntryCount',
        ]
    ];

}