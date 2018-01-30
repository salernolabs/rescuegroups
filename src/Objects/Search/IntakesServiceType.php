<?php
/**
 * IntakesServiceType Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesServiceType extends \RescueGroups\Objects\IntakesServiceType implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Service, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Service
     *
     * @var string
     */
    public $name = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'serviceID' => 'id',
            'serviceName' => 'name',
        ],
        'output' => [
            'id' => 'serviceID',
            'name' => 'serviceName',
        ]
    ];

}