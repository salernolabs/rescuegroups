<?php
/**
 * Colony Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class Colony extends \RescueGroups\Objects\Colony implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Animals
     *
     * @var string
     */
    public $animals = null;

    /**
     * Caretakers
     *
     * @var string
     */
    public $caretakers = null;

    /**
     * Name
     *
     * @var string
     */
    public $locationName = null;

    /**
     * Web address
     *
     * @var string
     */
    public $locationUrl = null;

    /**
     * Street address
     *
     * @var string
     */
    public $locationAddress = null;

    /**
     * City
     *
     * @var string
     */
    public $locationCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $locationState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $locationPostalcode = null;

    /**
     * Country
     *
     * @var integer
     */
    public $locationCountry = null;

    /**
     * Phone
     *
     * @var string
     */
    public $locationPhone = null;

    /**
     * Phone extension
     *
     * @var string
     */
    public $locationPhoneExt = null;

    /**
     * Animals
     *
     * @var string
     */
    public $locationAnimals = null;

    /**
     * Events
     *
     * @var string
     */
    public $locationEvents = null;

    /**
     * Colonies
     *
     * @var string
     */
    public $location = null;

    /**
     * Meet Requests
     *
     * @var string
     */
    public $locationMeetrequests = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'colonyID' => 'id',
            'colonyAnimals' => 'animals',
            'colonyCaretakers' => 'caretakers',
            'colonyLocationID' => 'locationId',
            'colonyName' => 'name',
            'colonyTotalAnimals' => 'totalAnimals',
            'colonyRegisteredDate' => 'registeredDate',
            'colonySpecificLocation' => 'specificLocation',
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
            'locationEvents' => 'locationEvents',
            'locationColonies' => 'location',
            'locationMeetrequests' => 'locationMeetrequests',
        ],
        'output' => [
            'id' => 'colonyID',
            'animals' => 'colonyAnimals',
            'caretakers' => 'colonyCaretakers',
            'locationId' => 'colonyLocationID',
            'name' => 'colonyName',
            'totalAnimals' => 'colonyTotalAnimals',
            'registeredDate' => 'colonyRegisteredDate',
            'specificLocation' => 'colonySpecificLocation',
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
            'locationEvents' => 'locationEvents',
            'location' => 'locationColonies',
            'locationMeetrequests' => 'locationMeetrequests',
        ]
    ];

}