<?php
/**
 * InventoryFiles Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryFiles;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     *
     * @var integer
     */
    private $inventoryfileItemID = null;

    /**
     * File
     *
     * @var string
     */
    private $inventoryfileBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    private $inventoryfileOldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    private $inventoryfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    private $inventoryfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    private $inventoryfileDisplayInline = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setInventoryfileItemID($value)
    {
        $this->inventoryfileItemID = $value;

        return $this;
    }

    /**
     * Set File
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryfileBinary($value)
    {
        $this->inventoryfileBinary = $value;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryfileOldFileName($value)
    {
        $this->inventoryfileOldFileName = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryfileDescription($value)
    {
        $this->inventoryfileDescription = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryfileStatus($value)
    {
        $this->inventoryfileStatus = $value;

        return $this;
    }

    /**
     * Set Inline
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryfileDisplayInline($value)
    {
        $this->inventoryfileDisplayInline = $value;

        return $this;
    }


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->inventoryfileItemID !== null) $parameterArray['values'][] = ["inventoryfileItemID"=>$this->inventoryfileItemID];
        if ($this->inventoryfileBinary !== null) $parameterArray['values'][] = ["inventoryfileBinary"=>$this->inventoryfileBinary];
        if ($this->inventoryfileOldFileName !== null) $parameterArray['values'][] = ["inventoryfileOldFileName"=>$this->inventoryfileOldFileName];
        if ($this->inventoryfileDescription !== null) $parameterArray['values'][] = ["inventoryfileDescription"=>$this->inventoryfileDescription];
        if ($this->inventoryfileStatus !== null) $parameterArray['values'][] = ["inventoryfileStatus"=>$this->inventoryfileStatus];
        if ($this->inventoryfileDisplayInline !== null) $parameterArray['values'][] = ["inventoryfileDisplayInline"=>$this->inventoryfileDisplayInline];
    }
}