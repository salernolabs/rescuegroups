<?php
/**
 * ContactsGroup Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class ContactsGroup extends \RescueGroups\Objects\ContactsGroup implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Protected
     *
     * @var string
     */
    public $protected = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'groupID' => 'id',
            'groupName' => 'name',
            'groupBusiness' => 'business',
            'groupProtected' => 'protected',
        ],
        'output' => [
            'id' => 'groupID',
            'name' => 'groupName',
            'business' => 'groupBusiness',
            'protected' => 'groupProtected',
        ]
    ];

}