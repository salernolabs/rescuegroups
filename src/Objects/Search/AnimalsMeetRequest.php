<?php
/**
 * AnimalsMeetRequest Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class AnimalsMeetRequest extends \RescueGroups\Objects\AnimalsMeetRequest implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Animal
     *
     * @var string
     */
    public $animalName = null;

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
     * Event
     *
     * @var string
     */
    public $eventName = null;

    /**
     * Location
     *
     * @var string
     */
    public $locationName = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'meetrequestID' => 'id',
            'meetrequestAnimalID' => 'animalId',
            'meetrequestContactID' => 'contactId',
            'meetrequestEventID' => 'eventId',
            'meetrequestLocationID' => 'locationId',
            'meetrequestDate' => 'date',
            'animalName' => 'animalName',
            'contactName' => 'contactName',
            'contactType' => 'contactType',
            'eventName' => 'eventName',
            'locationName' => 'locationName',
        ],
        'output' => [
            'id' => 'meetrequestID',
            'animalId' => 'meetrequestAnimalID',
            'contactId' => 'meetrequestContactID',
            'eventId' => 'meetrequestEventID',
            'locationId' => 'meetrequestLocationID',
            'date' => 'meetrequestDate',
            'animalName' => 'animalName',
            'contactName' => 'contactName',
            'contactType' => 'contactType',
            'eventName' => 'eventName',
            'locationName' => 'locationName',
        ]
    ];

}