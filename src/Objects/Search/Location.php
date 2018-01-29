<?php
/**
 * Location Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class Location extends \RescueGroups\Objects\Location implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Animals
     *
     * @var string
     */
    public $animals = null;

    /**
     * Events
     *
     * @var string
     */
    public $events = null;

    /**
     * Colonies
     *
     * @var string
     */
    public $colonies = null;

    /**
     * Meet Requests
     *
     * @var string
     */
    public $meetrequests = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'locationID' => 'id',
            'locationName' => 'name',
            'locationUrl' => 'url',
            'locationAddress' => 'address',
            'locationCity' => 'city',
            'locationState' => 'state',
            'locationPostalcode' => 'postalcode',
            'locationCountry' => 'country',
            'locationPhone' => 'phone',
            'locationPhoneExt' => 'phoneExt',
            'locationAnimals' => 'animals',
            'locationEvents' => 'events',
            'locationColonies' => 'colonies',
            'locationMeetrequests' => 'meetrequests',
        ],
        'output' => [
            'id' => 'locationID',
            'name' => 'locationName',
            'url' => 'locationUrl',
            'address' => 'locationAddress',
            'city' => 'locationCity',
            'state' => 'locationState',
            'postalcode' => 'locationPostalcode',
            'country' => 'locationCountry',
            'phone' => 'locationPhone',
            'phoneExt' => 'locationPhoneExt',
            'animals' => 'locationAnimals',
            'events' => 'locationEvents',
            'colonies' => 'locationColonies',
            'meetrequests' => 'locationMeetrequests',
        ]
    ];

}