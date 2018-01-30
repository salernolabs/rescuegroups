<?php
/**
 * WebFile Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WebFile implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Inline
     *
     * @var string
     */
    public $displayInline = null;

    /**
     * Security Role
     *
     * @var integer
     */
    public $roleId = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'webfileID' => 'id',
            'webfileDescription' => 'description',
            'webfileStatus' => 'status',
            'webfileDisplayInline' => 'displayInline',
            'webfileRoleID' => 'roleId',
        ],
        'output' => [
            'id' => 'webfileID',
            'description' => 'webfileDescription',
            'status' => 'webfileStatus',
            'displayInline' => 'webfileDisplayInline',
            'roleId' => 'webfileRoleID',
        ]
    ];

    /**
     * WebFile Constructor
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