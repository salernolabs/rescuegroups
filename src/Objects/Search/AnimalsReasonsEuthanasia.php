<?php
/**
 * AnimalsReasonsEuthanasia Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class AnimalsReasonsEuthanasia extends \RescueGroups\Objects\AnimalsReasonsEuthanasia implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Reason ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Reason
     *
     * @var string
     */
    public $name = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'reasonID' => 'id',
            'reasonName' => 'name',
        ],
        'output' => [
            'id' => 'reasonID',
            'name' => 'reasonName',
        ]
    ];

}