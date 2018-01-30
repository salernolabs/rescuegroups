<?php
/**
 * WebFile Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class WebFile extends \RescueGroups\Objects\WebFile implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Old file name
     *
     * @var string
     */
    public $oldName = null;

    /**
     * File name
     *
     * @var string
     */
    public $name = null;

    /**
     * Security Role
     *
     * @var string
     */
    public $roleName = null;

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
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'webfileID' => 'id',
            'webfileOldName' => 'oldName',
            'webfileName' => 'name',
            'webfileDescription' => 'description',
            'webfileStatus' => 'status',
            'webfileDisplayInline' => 'displayInline',
            'webfileRoleID' => 'roleId',
            'webfileRoleName' => 'roleName',
            'webfileSize' => 'size',
            'webfileCreatedDate' => 'createdDate',
        ],
        'output' => [
            'id' => 'webfileID',
            'oldName' => 'webfileOldName',
            'name' => 'webfileName',
            'description' => 'webfileDescription',
            'status' => 'webfileStatus',
            'displayInline' => 'webfileDisplayInline',
            'roleId' => 'webfileRoleID',
            'roleName' => 'webfileRoleName',
            'size' => 'webfileSize',
            'createdDate' => 'webfileCreatedDate',
        ]
    ];

}