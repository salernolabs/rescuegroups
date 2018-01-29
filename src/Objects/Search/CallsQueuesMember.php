<?php
/**
 * CallsQueuesMember Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class CallsQueuesMember extends \RescueGroups\Objects\CallsQueuesMember implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Created Date
     *
     * @var \DateTime
     */
    public $createdDate = null;

    /**
     * Created by
     *
     * @var integer
     */
    public $createdById = null;

    /**
     * Updated Date
     *
     * @var \DateTime
     */
    public $updatedDate = null;

    /**
     * Updated by
     *
     * @var integer
     */
    public $updatedById = null;

    /**
     * Call Queue
     *
     * @var string
     */
    public $queueName = null;

    /**
     * Member
     *
     * @var string
     */
    public $name = null;

    /**
     * Type
     *
     * @var string
     */
    public $contactType = null;


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
            'memberCreatedDate' => 'createdDate',
            'memberCreatedByID' => 'createdById',
            'memberUpdatedDate' => 'updatedDate',
            'memberUpdatedByID' => 'updatedById',
            'queueName' => 'queueName',
            'memberName' => 'name',
            'memberContactType' => 'contactType',
        ],
        'output' => [
            'id' => 'memberID',
            'contactId' => 'memberContactID',
            'queueId' => 'memberQueueID',
            'manager' => 'memberManager',
            'createdDate' => 'memberCreatedDate',
            'createdById' => 'memberCreatedByID',
            'updatedDate' => 'memberUpdatedDate',
            'updatedById' => 'memberUpdatedByID',
            'queueName' => 'queueName',
            'name' => 'memberName',
            'contactType' => 'memberContactType',
        ]
    ];

}