<?php
/**
 * WaitingList Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class WaitingList extends \RescueGroups\Objects\WaitingList implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Members Count
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
            'waitinglistID' => 'id',
            'waitinglistName' => 'name',
            'waitinglistType' => 'type',
            'waitinglistComment' => 'comment',
            'waitinglistMembersCount' => 'membersCount',
        ],
        'output' => [
            'id' => 'waitinglistID',
            'name' => 'waitinglistName',
            'type' => 'waitinglistType',
            'comment' => 'waitinglistComment',
            'membersCount' => 'waitinglistMembersCount',
        ]
    ];

}