<?php
/**
 * EventAnimalAttendance Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class EventAnimalAttendance extends \RescueGroups\Objects\EventAnimalAttendance implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Name
     *
     * @var string
     */
    public $animalName = null;

    /**
     * Org
     *
     * @var integer
     */
    public $animalOrgId = null;

    /**
     * Status
     *
     * @var string
     */
    public $animalStatus = null;

    /**
     * Name
     *
     * @var string
     */
    public $eventName = null;

    /**
     * Start Date/Time
     *
     * @var \DateTime
     */
    public $eventStart = null;

    /**
     * End Date/Time
     *
     * @var \DateTime
     */
    public $eventEnd = null;

    /**
     * Web address
     *
     * @var string
     */
    public $eventUrl = null;

    /**
     * Description
     *
     * @var string
     */
    public $eventDescription = null;

    /**
     * Location
     *
     * @var integer
     */
    public $eventLocationId = null;

    /**
     * Event animal attendance
     *
     * @var string
     */
    public $eventAnimal = null;

    /**
     * Event meet requests
     *
     * @var string
     */
    public $eventMeetrequests = null;

    /**
     * Species attending
     *
     * @var integer
     */
    public $eventSpecies = null;

    /**
     * Location name
     *
     * @var string
     */
    public $eventLocationName = null;

    /**
     * Location web address
     *
     * @var string
     */
    public $eventLocationUrl = null;

    /**
     * Location street address
     *
     * @var string
     */
    public $eventLocationAddress = null;

    /**
     * Location city
     *
     * @var string
     */
    public $eventLocationCity = null;

    /**
     * Location state/province
     *
     * @var string
     */
    public $eventLocationState = null;

    /**
     * Location postal code
     *
     * @var string
     */
    public $eventLocationPostalcode = null;

    /**
     * Location country
     *
     * @var integer
     */
    public $eventLocationCountry = null;

    /**
     * Location phone
     *
     * @var string
     */
    public $eventLocationPhone = null;

    /**
     * Location phone extension
     *
     * @var string
     */
    public $eventLocationPhoneExt = null;

    /**
     * Location animals
     *
     * @var string
     */
    public $eventLocationAnimals = null;

    /**
     * Location events
     *
     * @var string
     */
    public $eventLocationEvents = null;

    /**
     * Location colonies
     *
     * @var string
     */
    public $eventLocationColonies = null;

    /**
     * Location meet requests
     *
     * @var string
     */
    public $eventLocationMeetrequests = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'attendanceID' => 'id',
            'attendanceStatus' => 'status',
            'attendanceAnimalID' => 'animalId',
            'attendanceEventID' => 'eventId',
            'animalName' => 'animalName',
            'animalOrgID' => 'animalOrgId',
            'animalStatus' => 'animalStatus',
            'eventName' => 'eventName',
            'eventStart' => 'eventStart',
            'eventEnd' => 'eventEnd',
            'eventUrl' => 'eventUrl',
            'eventDescription' => 'eventDescription',
            'eventLocationID' => 'eventLocationId',
            'eventAnimalAttendance' => 'eventAnimal',
            'eventMeetrequests' => 'eventMeetrequests',
            'eventSpecies' => 'eventSpecies',
            'eventLocationName' => 'eventLocationName',
            'eventLocationUrl' => 'eventLocationUrl',
            'eventLocationAddress' => 'eventLocationAddress',
            'eventLocationCity' => 'eventLocationCity',
            'eventLocationState' => 'eventLocationState',
            'eventLocationPostalcode' => 'eventLocationPostalcode',
            'eventLocationCountry' => 'eventLocationCountry',
            'eventLocationPhone' => 'eventLocationPhone',
            'eventLocationPhoneExt' => 'eventLocationPhoneExt',
            'eventLocationAnimals' => 'eventLocationAnimals',
            'eventLocationEvents' => 'eventLocationEvents',
            'eventLocationColonies' => 'eventLocationColonies',
            'eventLocationMeetrequests' => 'eventLocationMeetrequests',
        ],
        'output' => [
            'id' => 'attendanceID',
            'status' => 'attendanceStatus',
            'animalId' => 'attendanceAnimalID',
            'eventId' => 'attendanceEventID',
            'animalName' => 'animalName',
            'animalOrgId' => 'animalOrgID',
            'animalStatus' => 'animalStatus',
            'eventName' => 'eventName',
            'eventStart' => 'eventStart',
            'eventEnd' => 'eventEnd',
            'eventUrl' => 'eventUrl',
            'eventDescription' => 'eventDescription',
            'eventLocationId' => 'eventLocationID',
            'eventAnimal' => 'eventAnimalAttendance',
            'eventMeetrequests' => 'eventMeetrequests',
            'eventSpecies' => 'eventSpecies',
            'eventLocationName' => 'eventLocationName',
            'eventLocationUrl' => 'eventLocationUrl',
            'eventLocationAddress' => 'eventLocationAddress',
            'eventLocationCity' => 'eventLocationCity',
            'eventLocationState' => 'eventLocationState',
            'eventLocationPostalcode' => 'eventLocationPostalcode',
            'eventLocationCountry' => 'eventLocationCountry',
            'eventLocationPhone' => 'eventLocationPhone',
            'eventLocationPhoneExt' => 'eventLocationPhoneExt',
            'eventLocationAnimals' => 'eventLocationAnimals',
            'eventLocationEvents' => 'eventLocationEvents',
            'eventLocationColonies' => 'eventLocationColonies',
            'eventLocationMeetrequests' => 'eventLocationMeetrequests',
        ]
    ];

}