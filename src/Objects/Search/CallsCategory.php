<?php
/**
 * CallsCategory Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class CallsCategory extends \RescueGroups\Objects\CallsCategory implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Default Queue Name
     *
     * @var string
     */
    public $defaultQueueName = null;

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
     * Calls Count
     *
     * @var string
     */
    public $callsCount = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'categoryID' => 'id',
            'categoryName' => 'name',
            'categoryDescription' => 'description',
            'categoryPublic' => 'public',
            'categoryDefaultQueueID' => 'defaultQueueId',
            'categoryDefaultQueueName' => 'defaultQueueName',
            'categoryCreatedDate' => 'createdDate',
            'categoryCreatedByID' => 'createdById',
            'categoryUpdatedDate' => 'updatedDate',
            'categoryUpdatedByID' => 'updatedById',
            'categoryCallsCount' => 'callsCount',
        ],
        'output' => [
            'id' => 'categoryID',
            'name' => 'categoryName',
            'description' => 'categoryDescription',
            'public' => 'categoryPublic',
            'defaultQueueId' => 'categoryDefaultQueueID',
            'defaultQueueName' => 'categoryDefaultQueueName',
            'createdDate' => 'categoryCreatedDate',
            'createdById' => 'categoryCreatedByID',
            'updatedDate' => 'categoryUpdatedDate',
            'updatedById' => 'categoryUpdatedByID',
            'callsCount' => 'categoryCallsCount',
        ]
    ];

}