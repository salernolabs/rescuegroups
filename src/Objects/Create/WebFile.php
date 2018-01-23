<?php
/**
 * WebFile Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class WebFile implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * File
     *
     * @var string
     */
    public $binary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $oldFileName = null;

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
     * Security Role, Primary Key
     *
     * @var integer
     */
    public $roleId = null;


    /**
     * WebFile Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->webfileBinary)) $this->binary = $inputData->webfileBinary;
        if (!empty($inputData->webfileOldFileName)) $this->oldFileName = $inputData->webfileOldFileName;
        if (!empty($inputData->webfileDescription)) $this->description = $inputData->webfileDescription;
        if (!empty($inputData->webfileStatus)) $this->status = $inputData->webfileStatus;
        if (!empty($inputData->webfileDisplayInline)) $this->displayInline = $inputData->webfileDisplayInline;
        if (!empty($inputData->webfileRoleID)) $this->roleId = $inputData->webfileRoleID;
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
        if ($this->binary !== null) $output['webfileBinary'] = $this->binary;
        if ($this->oldFileName !== null) $output['webfileOldFileName'] = $this->oldFileName;
        if ($this->description !== null) $output['webfileDescription'] = $this->description;
        if ($this->status !== null) $output['webfileStatus'] = $this->status;
        if ($this->displayInline !== null) $output['webfileDisplayInline'] = $this->displayInline;
        if ($includeId && $this->roleId !== null) $output['webfileRoleID'] = $this->roleId;

        return $output;
    }
}