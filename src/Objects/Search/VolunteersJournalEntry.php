<?php
/**
 * VolunteersJournalEntry Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class VolunteersJournalEntry extends \RescueGroups\Objects\VolunteersJournalEntry implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Volunteer Name
     *
     * @var string
     */
    public $volunteerName = null;

    /**
     * Volunteer Type
     *
     * @var string
     */
    public $volunteerType = null;

    /**
     * Added Date
     *
     * @var \DateTime
     */
    public $createdDate = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'journalEntryID' => 'id',
            'journalEntryContactID' => 'contactId',
            'journalEntryDate' => 'date',
            'journalEntryComment' => 'comment',
            'journalEntryType' => 'type',
            'volunteerName' => 'volunteerName',
            'volunteerType' => 'volunteerType',
            'journalEntryCreatedDate' => 'createdDate',
        ],
        'output' => [
            'id' => 'journalEntryID',
            'contactId' => 'journalEntryContactID',
            'date' => 'journalEntryDate',
            'comment' => 'journalEntryComment',
            'type' => 'journalEntryType',
            'volunteerName' => 'volunteerName',
            'volunteerType' => 'volunteerType',
            'createdDate' => 'journalEntryCreatedDate',
        ]
    ];

}