<?php
/**
 * ContactFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class ContactFile implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * File ID, Primary Key
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
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'contactfileID' => 'id',
            'contactfileDescription' => 'description',
            'contactfileStatus' => 'status',
            'contactfileDisplayInline' => 'displayInline',
        ],
        'output' => [
            'id' => 'contactfileID',
            'description' => 'contactfileDescription',
            'status' => 'contactfileStatus',
            'displayInline' => 'contactfileDisplayInline',
        ]
    ];

    /**
     * ContactFile Constructor
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