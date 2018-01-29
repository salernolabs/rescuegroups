<?php
/**
 * Event Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class Event extends \RescueGroups\Objects\Event implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Event animal attendance
     *
     * @var string
     */
    public $animalAttendance = null;

    /**
     * Event meet requests
     *
     * @var string
     */
    public $meetrequests = null;

    /**
     * Location name
     *
     * @var string
     */
    public $locationName = null;

    /**
     * Location web address
     *
     * @var string
     */
    public $locationUrl = null;

    /**
     * Location street address
     *
     * @var string
     */
    public $locationAddress = null;

    /**
     * Location city
     *
     * @var string
     */
    public $locationCity = null;

    /**
     * Location state/province
     *
     * @var string
     */
    public $locationState = null;

    /**
     * Location postal code
     *
     * @var string
     */
    public $locationPostalcode = null;

    /**
     * Location country
     *
     * @var integer
     */
    public $locationCountry = null;

    /**
     * Location phone
     *
     * @var string
     */
    public $locationPhone = null;

    /**
     * Location phone extension
     *
     * @var string
     */
    public $locationPhoneExt = null;

    /**
     * Location animals
     *
     * @var string
     */
    public $locationAnimals = null;

    /**
     * Location events
     *
     * @var string
     */
    public $locations = null;

    /**
     * Location colonies
     *
     * @var string
     */
    public $locationColonies = null;

    /**
     * Location meet requests
     *
     * @var string
     */
    public $locationMeetrequests = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'eventID' => 'id',
            'eventName' => 'name',
            'eventStart' => 'start',
            'eventEnd' => 'end',
            'eventUrl' => 'url',
            'eventDescription' => 'description',
            'eventLocationID' => 'locationId',
            'eventAnimalAttendance' => 'animalAttendance',
            'eventMeetrequests' => 'meetrequests',
            'eventSpecies' => 'species',
            'locationName' => 'locationName',
            'locationUrl' => 'locationUrl',
            'locationAddress' => 'locationAddress',
            'locationCity' => 'locationCity',
            'locationState' => 'locationState',
            'locationPostalcode' => 'locationPostalcode',
            'locationCountry' => 'locationCountry',
            'locationPhone' => 'locationPhone',
            'locationPhoneExt' => 'locationPhoneExt',
            'locationAnimals' => 'locationAnimals',
            'locationEvents' => 'locations',
            'locationColonies' => 'locationColonies',
            'locationMeetrequests' => 'locationMeetrequests',
        ],
        'output' => [
            'id' => 'eventID',
            'name' => 'eventName',
            'start' => 'eventStart',
            'end' => 'eventEnd',
            'url' => 'eventUrl',
            'description' => 'eventDescription',
            'locationId' => 'eventLocationID',
            'animalAttendance' => 'eventAnimalAttendance',
            'meetrequests' => 'eventMeetrequests',
            'species' => 'eventSpecies',
            'locationName' => 'locationName',
            'locationUrl' => 'locationUrl',
            'locationAddress' => 'locationAddress',
            'locationCity' => 'locationCity',
            'locationState' => 'locationState',
            'locationPostalcode' => 'locationPostalcode',
            'locationCountry' => 'locationCountry',
            'locationPhone' => 'locationPhone',
            'locationPhoneExt' => 'locationPhoneExt',
            'locationAnimals' => 'locationAnimals',
            'locations' => 'locationEvents',
            'locationColonies' => 'locationColonies',
            'locationMeetrequests' => 'locationMeetrequests',
        ]
    ];

}