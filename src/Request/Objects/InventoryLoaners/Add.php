<?php
/**
 * InventoryLoaners Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryLoaners;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Contact
     *
     * @var integer
     */
    private $inventoryLoanerContactID = null;

    /**
     * Item
     *
     * @var integer
     */
    private $inventoryLoanerItemID = null;

    /**
     * Loan Date
     *
     * @var \DateTime
     */
    private $inventoryLoanerLoanDate = null;

    /**
     * Loan Condition
     *
     * @var integer
     */
    private $inventoryLoanerLoanConditionID = null;

    /**
     * Due Date
     *
     * @var \DateTime
     */
    private $inventoryLoanerDueDate = null;

    /**
     * Return Date
     *
     * @var \DateTime
     */
    private $inventoryLoanerReturnDate = null;

    /**
     * Return Condition
     *
     * @var integer
     */
    private $inventoryLoanerReturnConditionID = null;

    /**
     * Notes
     *
     * @var string
     */
    private $inventoryLoanerNotes = null;


    /**
     * Set Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setInventoryLoanerContactID($value)
    {
        $this->inventoryLoanerContactID = $value;

        return $this;
    }

    /**
     * Set Item
     *
     * @param integer $value
     * @return $this
     */
    public function setInventoryLoanerItemID($value)
    {
        $this->inventoryLoanerItemID = $value;

        return $this;
    }

    /**
     * Set Loan Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setInventoryLoanerLoanDate($value)
    {
        $this->inventoryLoanerLoanDate = $value;

        return $this;
    }

    /**
     * Set Loan Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setInventoryLoanerLoanConditionID($value)
    {
        $this->inventoryLoanerLoanConditionID = $value;

        return $this;
    }

    /**
     * Set Due Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setInventoryLoanerDueDate($value)
    {
        $this->inventoryLoanerDueDate = $value;

        return $this;
    }

    /**
     * Set Return Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setInventoryLoanerReturnDate($value)
    {
        $this->inventoryLoanerReturnDate = $value;

        return $this;
    }

    /**
     * Set Return Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setInventoryLoanerReturnConditionID($value)
    {
        $this->inventoryLoanerReturnConditionID = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setInventoryLoanerNotes($value)
    {
        $this->inventoryLoanerNotes = $value;

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
        return 'inventoryLoaners';
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

        if ($this->inventoryLoanerContactID !== null) $parameterArray['values'][] = ["inventoryLoanerContactID"=>$this->inventoryLoanerContactID];
        if ($this->inventoryLoanerItemID !== null) $parameterArray['values'][] = ["inventoryLoanerItemID"=>$this->inventoryLoanerItemID];
        if ($this->inventoryLoanerLoanDate !== null) $parameterArray['values'][] = ["inventoryLoanerLoanDate"=>$this->inventoryLoanerLoanDate];
        if ($this->inventoryLoanerLoanConditionID !== null) $parameterArray['values'][] = ["inventoryLoanerLoanConditionID"=>$this->inventoryLoanerLoanConditionID];
        if ($this->inventoryLoanerDueDate !== null) $parameterArray['values'][] = ["inventoryLoanerDueDate"=>$this->inventoryLoanerDueDate];
        if ($this->inventoryLoanerReturnDate !== null) $parameterArray['values'][] = ["inventoryLoanerReturnDate"=>$this->inventoryLoanerReturnDate];
        if ($this->inventoryLoanerReturnConditionID !== null) $parameterArray['values'][] = ["inventoryLoanerReturnConditionID"=>$this->inventoryLoanerReturnConditionID];
        if ($this->inventoryLoanerNotes !== null) $parameterArray['values'][] = ["inventoryLoanerNotes"=>$this->inventoryLoanerNotes];
    }
}