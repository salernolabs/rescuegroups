<?php
/**
 * InventoryFiles Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Requests\Objects\InventoryFiles;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $inventoryfileItemID = null;

    /**
     * File
     * @var binary
     */
    private $inventoryfileBinary = null;

    /**
     * Old file name
     * @var string
     */
    private $inventoryfileOldFileName = null;

    /**
     * Description
     * @var string
     */
    private $inventoryfileDescription = null;

    /**
     * Status
     * @var string
     */
    private $inventoryfileStatus = null;

    /**
     * Inline
     * @var string
     */
    private $inventoryfileDisplayInline = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'inventoryfiles';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Set ID
     *
     * @param integer $inventoryfileItemID
     * @return $this
     */
    public function setInventoryfileItemID($inventoryfileItemID)
    {
        $this->inventoryfileItemID = $inventoryfileItemID;

        return $this;
    }

    /**
     * Set File
     *
     * @param binary $inventoryfileBinary
     * @return $this
     */
    public function setInventoryfileBinary($inventoryfileBinary)
    {
        $this->inventoryfileBinary = $inventoryfileBinary;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $inventoryfileOldFileName
     * @return $this
     */
    public function setInventoryfileOldFileName($inventoryfileOldFileName)
    {
        $this->inventoryfileOldFileName = $inventoryfileOldFileName;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $inventoryfileDescription
     * @return $this
     */
    public function setInventoryfileDescription($inventoryfileDescription)
    {
        $this->inventoryfileDescription = $inventoryfileDescription;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $inventoryfileStatus
     * @return $this
     */
    public function setInventoryfileStatus($inventoryfileStatus)
    {
        $this->inventoryfileStatus = $inventoryfileStatus;

        return $this;
    }

    /**
     * Set Inline
     *
     * @param string $inventoryfileDisplayInline
     * @return $this
     */
    public function setInventoryfileDisplayInline($inventoryfileDisplayInline)
    {
        $this->inventoryfileDisplayInline = $inventoryfileDisplayInline;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->inventoryfileItemID !== null) $parameterArray['inventoryfileItemID'] = $this->inventoryfileItemID;
        if ($this->inventoryfileBinary !== null) $parameterArray['inventoryfileBinary'] = $this->inventoryfileBinary;
        if ($this->inventoryfileOldFileName !== null) $parameterArray['inventoryfileOldFileName'] = $this->inventoryfileOldFileName;
        if ($this->inventoryfileDescription !== null) $parameterArray['inventoryfileDescription'] = $this->inventoryfileDescription;
        if ($this->inventoryfileStatus !== null) $parameterArray['inventoryfileStatus'] = $this->inventoryfileStatus;
        if ($this->inventoryfileDisplayInline !== null) $parameterArray['inventoryfileDisplayInline'] = $this->inventoryfileDisplayInline;

    }
}