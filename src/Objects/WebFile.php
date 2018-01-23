<?php
/**
 * WebFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WebFile implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $webfileID = null;

    /**
     * Description
     *
     * @var string
     */
    public $webfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    public $tatus = null;

    /**
     * Inline
     *
     * @var string
     */
    public $webfileDisplayInline = null;

    /**
     * Security Role
     *
     * @var integer
     */
    public $webfileRoleID = null;


    /**
     * WebFile Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->webfileID)) $this->webfileID = $inputData->webfileID;
        if (!empty($inputData->webfileDescription)) $this->webfileDescription = $inputData->webfileDescription;
        if (!empty($inputData->webfileStatus)) $this->tatus = $inputData->webfileStatus;
        if (!empty($inputData->webfileDisplayInline)) $this->webfileDisplayInline = $inputData->webfileDisplayInline;
        if (!empty($inputData->webfileRoleID)) $this->webfileRoleID = $inputData->webfileRoleID;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->webfileID !== null) $output['webfileID'] = $this->webfileID;
        if ($this->webfileDescription !== null) $output['webfileDescription'] = $this->webfileDescription;
        if ($this->tatus !== null) $output['webfileStatus'] = $this->tatus;
        if ($this->webfileDisplayInline !== null) $output['webfileDisplayInline'] = $this->webfileDisplayInline;
        if ($this->webfileRoleID !== null) $output['webfileRoleID'] = $this->webfileRoleID;

        return $output;
    }
}