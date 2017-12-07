<?php
/**
 * InventoryLoaners Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:24
 */
namespace RescueGroups\Requests\Objects\InventoryLoaners;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Contact
     * @var integer
     */
    private $inventoryLoanerContactID = null;

    /**
     * Item
     * @var integer
     */
    private $inventoryLoanerItemID = null;

    /**
     * Loan Date
     * @var \DateTime
     */
    private $inventoryLoanerLoanDate = null;

    /**
     * Loan Condition
     * @var integer
     */
    private $inventoryLoanerLoanConditionID = null;

    /**
     * Due Date
     * @var \DateTime
     */
    private $inventoryLoanerDueDate = null;

    /**
     * Return Date
     * @var \DateTime
     */
    private $inventoryLoanerReturnDate = null;

    /**
     * Return Condition
     * @var integer
     */
    private $inventoryLoanerReturnConditionID = null;

    /**
     * Notes
     * @var string
     */
    private $inventoryLoanerNotes = null;


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
     * Set Contact
     *
     * @param integer $inventoryLoanerContactID
     * @return $this
     */
    public function setInventoryLoanerContactID($inventoryLoanerContactID)
    {
        $this->inventoryLoanerContactID = $inventoryLoanerContactID;

        return $this;
    }

    /**
     * Set Item
     *
     * @param integer $inventoryLoanerItemID
     * @return $this
     */
    public function setInventoryLoanerItemID($inventoryLoanerItemID)
    {
        $this->inventoryLoanerItemID = $inventoryLoanerItemID;

        return $this;
    }

    /**
     * Set Loan Date
     *
     * @param \DateTime $inventoryLoanerLoanDate
     * @return $this
     */
    public function setInventoryLoanerLoanDate($inventoryLoanerLoanDate)
    {
        $this->inventoryLoanerLoanDate = $inventoryLoanerLoanDate;

        return $this;
    }

    /**
     * Set Loan Condition
     *
     * @param integer $inventoryLoanerLoanConditionID
     * @return $this
     */
    public function setInventoryLoanerLoanConditionID($inventoryLoanerLoanConditionID)
    {
        $this->inventoryLoanerLoanConditionID = $inventoryLoanerLoanConditionID;

        return $this;
    }

    /**
     * Set Due Date
     *
     * @param \DateTime $inventoryLoanerDueDate
     * @return $this
     */
    public function setInventoryLoanerDueDate($inventoryLoanerDueDate)
    {
        $this->inventoryLoanerDueDate = $inventoryLoanerDueDate;

        return $this;
    }

    /**
     * Set Return Date
     *
     * @param \DateTime $inventoryLoanerReturnDate
     * @return $this
     */
    public function setInventoryLoanerReturnDate($inventoryLoanerReturnDate)
    {
        $this->inventoryLoanerReturnDate = $inventoryLoanerReturnDate;

        return $this;
    }

    /**
     * Set Return Condition
     *
     * @param integer $inventoryLoanerReturnConditionID
     * @return $this
     */
    public function setInventoryLoanerReturnConditionID($inventoryLoanerReturnConditionID)
    {
        $this->inventoryLoanerReturnConditionID = $inventoryLoanerReturnConditionID;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $inventoryLoanerNotes
     * @return $this
     */
    public function setInventoryLoanerNotes($inventoryLoanerNotes)
    {
        $this->inventoryLoanerNotes = $inventoryLoanerNotes;

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
        if ($this->inventoryLoanerContactID !== null) $parameterArray['inventoryLoanerContactID'] = $this->inventoryLoanerContactID;
        if ($this->inventoryLoanerItemID !== null) $parameterArray['inventoryLoanerItemID'] = $this->inventoryLoanerItemID;
        if ($this->inventoryLoanerLoanDate !== null) $parameterArray['inventoryLoanerLoanDate'] = $this->inventoryLoanerLoanDate;
        if ($this->inventoryLoanerLoanConditionID !== null) $parameterArray['inventoryLoanerLoanConditionID'] = $this->inventoryLoanerLoanConditionID;
        if ($this->inventoryLoanerDueDate !== null) $parameterArray['inventoryLoanerDueDate'] = $this->inventoryLoanerDueDate;
        if ($this->inventoryLoanerReturnDate !== null) $parameterArray['inventoryLoanerReturnDate'] = $this->inventoryLoanerReturnDate;
        if ($this->inventoryLoanerReturnConditionID !== null) $parameterArray['inventoryLoanerReturnConditionID'] = $this->inventoryLoanerReturnConditionID;
        if ($this->inventoryLoanerNotes !== null) $parameterArray['inventoryLoanerNotes'] = $this->inventoryLoanerNotes;

    }
}