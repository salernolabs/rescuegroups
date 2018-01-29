<?php
/**
 * ContactFile Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class ContactFile extends \RescueGroups\Objects\ContactFile implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Contact
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $oldName = null;

    /**
     * File size
     *
     * @var string
     */
    public $size = null;

    /**
     * Created Date
     *
     * @var \DateTime
     */
    public $createdDate = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'contactfileID' => 'id',
            'contactfileContactID' => 'contactId',
            'contactfileOldName' => 'oldName',
            'contactfileDescription' => 'description',
            'contactfileStatus' => 'status',
            'contactfileDisplayInline' => 'displayInline',
            'contactfileSize' => 'size',
            'contactfileCreatedDate' => 'createdDate',
        ],
        'output' => [
            'id' => 'contactfileID',
            'contactId' => 'contactfileContactID',
            'oldName' => 'contactfileOldName',
            'description' => 'contactfileDescription',
            'status' => 'contactfileStatus',
            'displayInline' => 'contactfileDisplayInline',
            'size' => 'contactfileSize',
            'createdDate' => 'contactfileCreatedDate',
        ]
    ];

}