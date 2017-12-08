<?php
/**
 * InventoryFiles Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\InventoryFiles;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * File
     * @var integer
     */
    private $inventoryfileID = null;

    /**
     * ID
     * @var integer
     */
    private $inventoryfileItemID = null;

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
        return 'edit';
    }

    /**
     * Set File
     *
     * @param integer $inventoryfileID
     * @return $this
     */
    public function setInventoryfileID($inventoryfileID)
    {
        $this->inventoryfileID = $inventoryfileID;

        return $this;
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
        if ($this->inventoryfileID !== null) $parameterArray['inventoryfileID'] = $this->inventoryfileID;
        if ($this->inventoryfileItemID !== null) $parameterArray['inventoryfileItemID'] = $this->inventoryfileItemID;
        if ($this->inventoryfileDescription !== null) $parameterArray['inventoryfileDescription'] = $this->inventoryfileDescription;
        if ($this->inventoryfileStatus !== null) $parameterArray['inventoryfileStatus'] = $this->inventoryfileStatus;
        if ($this->inventoryfileDisplayInline !== null) $parameterArray['inventoryfileDisplayInline'] = $this->inventoryfileDisplayInline;

    }
}