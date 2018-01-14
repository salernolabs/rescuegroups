<?php
/**
 * InventoryItems Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryItems;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Name
     *
     * @var string
     */
    private $inventoryitemName = null;

    /**
     * Item Number/ID
     *
     * @var string
     */
    private $inventoryitemItemID = null;

    /**
     * Description
     *
     * @var string
     */
    private $inventoryitemDescription = null;

    /**
     * Received Date
     *
     * @var \DateTime
     */
    private $inventoryitemReceivedDate = null;

    /**
     * Source
     *
     * @var string
     */
    private $inventoryitemSource = null;

    /**
     * Cost
     *
     * @var float
     */
    private $inventoryitemCost = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $inventoryitemConditionID = null;

    /**
     * Category
     *
     * @var string
     */
    private $inventoryitemCategory = null;

    /**
     * Disposed Date
     *
     * @var \DateTime
     */
    private $inventoryitemDisposedDate = null;

    /**
     * Disposed Destination
     *
     * @var string
     */
    private $inventoryitemDisposedDestination = null;

    /**
     * Storage Location
     *
     * @var string
     */
    private $inventoryitemStorageLocation = null;

    /**
     * Quantity
     *
     * @var string
     */
    private $inventoryitemQuantity = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryitemName($value)
    {
        $this->inventoryitemName = $value;

        return $this;
    }

    /**
     * Set Item Number/ID
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryitemItemID($value)
    {
        $this->inventoryitemItemID = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryitemDescription($value)
    {
        $this->inventoryitemDescription = $value;

        return $this;
    }

    /**
     * Set Received Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setInventoryitemReceivedDate($value)
    {
        $this->inventoryitemReceivedDate = $value;

        return $this;
    }

    /**
     * Set Source
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryitemSource($value)
    {
        $this->inventoryitemSource = $value;

        return $this;
    }

    /**
     * Set Cost
     *
     * @param float $value
     * @return $this
     */
    public function setInventoryitemCost($value)
    {
        $this->inventoryitemCost = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setInventoryitemConditionID($value)
    {
        $this->inventoryitemConditionID = $value;

        return $this;
    }

    /**
     * Set Category
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryitemCategory($value)
    {
        $this->inventoryitemCategory = $value;

        return $this;
    }

    /**
     * Set Disposed Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setInventoryitemDisposedDate($value)
    {
        $this->inventoryitemDisposedDate = $value;

        return $this;
    }

    /**
     * Set Disposed Destination
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryitemDisposedDestination($value)
    {
        $this->inventoryitemDisposedDestination = $value;

        return $this;
    }

    /**
     * Set Storage Location
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryitemStorageLocation($value)
    {
        $this->inventoryitemStorageLocation = $value;

        return $this;
    }

    /**
     * Set Quantity
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryitemQuantity($value)
    {
        $this->inventoryitemQuantity = $value;

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
        return 'inventoryitems';
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

        if ($this->inventoryitemName !== null) $parameterArray['values'][] = ["inventoryitemName"=>$this->inventoryitemName];
        if ($this->inventoryitemItemID !== null) $parameterArray['values'][] = ["inventoryitemItemID"=>$this->inventoryitemItemID];
        if ($this->inventoryitemDescription !== null) $parameterArray['values'][] = ["inventoryitemDescription"=>$this->inventoryitemDescription];
        if ($this->inventoryitemReceivedDate !== null) $parameterArray['values'][] = ["inventoryitemReceivedDate"=>$this->inventoryitemReceivedDate];
        if ($this->inventoryitemSource !== null) $parameterArray['values'][] = ["inventoryitemSource"=>$this->inventoryitemSource];
        if ($this->inventoryitemCost !== null) $parameterArray['values'][] = ["inventoryitemCost"=>$this->inventoryitemCost];
        if ($this->inventoryitemConditionID !== null) $parameterArray['values'][] = ["inventoryitemConditionID"=>$this->inventoryitemConditionID];
        if ($this->inventoryitemCategory !== null) $parameterArray['values'][] = ["inventoryitemCategory"=>$this->inventoryitemCategory];
        if ($this->inventoryitemDisposedDate !== null) $parameterArray['values'][] = ["inventoryitemDisposedDate"=>$this->inventoryitemDisposedDate];
        if ($this->inventoryitemDisposedDestination !== null) $parameterArray['values'][] = ["inventoryitemDisposedDestination"=>$this->inventoryitemDisposedDestination];
        if ($this->inventoryitemStorageLocation !== null) $parameterArray['values'][] = ["inventoryitemStorageLocation"=>$this->inventoryitemStorageLocation];
        if ($this->inventoryitemQuantity !== null) $parameterArray['values'][] = ["inventoryitemQuantity"=>$this->inventoryitemQuantity];
    }
}