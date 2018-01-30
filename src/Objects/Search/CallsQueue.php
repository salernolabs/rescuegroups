<?php
/**
 * CallsQueue Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class CallsQueue extends \RescueGroups\Objects\CallsQueue implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Default Urgency
     *
     * @var string
     */
    public $defaultUrgencyName = null;

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
     * Open Calls
     *
     * @var string
     */
    public $openCallsCount = null;

    /**
     * Members
     *
     * @var string
     */
    public $membersCount = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'queueID' => 'id',
            'queueName' => 'name',
            'queueFromEmail' => 'fromEmail',
            'queueDefaultUrgencyID' => 'defaultUrgencyId',
            'queueDefaultUrgencyName' => 'defaultUrgencyName',
            'queueCreatedDate' => 'createdDate',
            'queueCreatedByID' => 'createdById',
            'queueUpdatedDate' => 'updatedDate',
            'queueUpdatedByID' => 'updatedById',
            'queueOpenCallsCount' => 'openCallsCount',
            'queueMembersCount' => 'membersCount',
        ],
        'output' => [
            'id' => 'queueID',
            'name' => 'queueName',
            'fromEmail' => 'queueFromEmail',
            'defaultUrgencyId' => 'queueDefaultUrgencyID',
            'defaultUrgencyName' => 'queueDefaultUrgencyName',
            'createdDate' => 'queueCreatedDate',
            'createdById' => 'queueCreatedByID',
            'updatedDate' => 'queueUpdatedDate',
            'updatedById' => 'queueUpdatedByID',
            'openCallsCount' => 'queueOpenCallsCount',
            'membersCount' => 'queueMembersCount',
        ]
    ];

}