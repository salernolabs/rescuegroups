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
    public $webfileBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $webfileOldFileName = null;

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
    public $webfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    public $webfileDisplayInline = null;

    /**
     * Security Role, Primary Key
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

        if (!empty($inputData->webfileBinary)) $this->webfileBinary = $inputData->webfileBinary;
        if (!empty($inputData->webfileOldFileName)) $this->webfileOldFileName = $inputData->webfileOldFileName;
        if (!empty($inputData->webfileDescription)) $this->webfileDescription = $inputData->webfileDescription;
        if (!empty($inputData->webfileStatus)) $this->webfileStatus = $inputData->webfileStatus;
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
        if ($this->webfileBinary !== null) $output['webfileBinary'] = $this->webfileBinary;
        if ($this->webfileOldFileName !== null) $output['webfileOldFileName'] = $this->webfileOldFileName;
        if ($this->webfileDescription !== null) $output['webfileDescription'] = $this->webfileDescription;
        if ($this->webfileStatus !== null) $output['webfileStatus'] = $this->webfileStatus;
        if ($this->webfileDisplayInline !== null) $output['webfileDisplayInline'] = $this->webfileDisplayInline;
        if ($includeId && $this->webfileRoleID !== null) $output['webfileRoleID'] = $this->webfileRoleID;

        return $output;
    }
}