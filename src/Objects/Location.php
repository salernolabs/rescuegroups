<?php
/**
 * Location Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Location implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Name
     *
     * @var string
     */
    public $name = null;

    /**
     * Web address
     *
     * @var string
     */
    public $url = null;

    /**
     * Street address
     *
     * @var string
     */
    public $address = null;

    /**
     * City
     *
     * @var string
     */
    public $city = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $state = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $postalcode = null;

    /**
     * Country
     *
     * @var integer
     */
    public $country = null;

    /**
     * Phone
     *
     * @var string
     */
    public $phone = null;

    /**
     * Phone extension
     *
     * @var string
     */
    public $phoneExt = null;


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
        ]
    ];

    /**
     * Location Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}