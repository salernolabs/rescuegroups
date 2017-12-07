<?php
/**
 * InventoryItems Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Requests\Objects\InventoryItems;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $inventoryitemID = null;

    /**
     * Name
     * @var string
     */
    private $inventoryitemName = null;

    /**
     * Item Number/ID
     * @var string
     */
    private $inventoryitemItemID = null;

    /**
     * Description
     * @var string
     */
    private $inventoryitemDescription = null;

    /**
     * Received Date
     * @var \DateTime
     */
    private $inventoryitemReceivedDate = null;

    /**
     * Source
     * @var string
     */
    private $inventoryitemSource = null;

    /**
     * Cost
     * @var float
     */
    private $inventoryitemCost = null;

    /**
     * Condition
     * @var integer
     */
    private $inventoryitemConditionID = null;

    /**
     * Condition
     * @var string
     */
    private $inventoryitemCondition = null;

    /**
     * Category
     * @var string
     */
    private $inventoryitemCategory = null;

    /**
     * Disposed Date
     * @var \DateTime
     */
    private $inventoryitemDisposedDate = null;

    /**
     * Disposed Destination
     * @var string
     */
    private $inventoryitemDisposedDestination = null;

    /**
     * Storage Location
     * @var string
     */
    private $inventoryitemStorageLocation = null;

    /**
     * Files
     * @var int
     */
    private $inventoryitemFiles = null;

    /**
     * Loaners
     * @var int
     */
    private $inventoryitemLoaners = null;


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
        return 'inventoryitems';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'search';
    }

    /**
     * Set ID
     *
     * @param integer $inventoryitemID
     * @return $this
     */
    public function setInventoryitemID($inventoryitemID)
    {
        $this->inventoryitemID = $inventoryitemID;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $inventoryitemName
     * @return $this
     */
    public function setInventoryitemName($inventoryitemName)
    {
        $this->inventoryitemName = $inventoryitemName;

        return $this;
    }

    /**
     * Set Item Number/ID
     *
     * @param string $inventoryitemItemID
     * @return $this
     */
    public function setInventoryitemItemID($inventoryitemItemID)
    {
        $this->inventoryitemItemID = $inventoryitemItemID;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $inventoryitemDescription
     * @return $this
     */
    public function setInventoryitemDescription($inventoryitemDescription)
    {
        $this->inventoryitemDescription = $inventoryitemDescription;

        return $this;
    }

    /**
     * Set Received Date
     *
     * @param \DateTime $inventoryitemReceivedDate
     * @return $this
     */
    public function setInventoryitemReceivedDate($inventoryitemReceivedDate)
    {
        $this->inventoryitemReceivedDate = $inventoryitemReceivedDate;

        return $this;
    }

    /**
     * Set Source
     *
     * @param string $inventoryitemSource
     * @return $this
     */
    public function setInventoryitemSource($inventoryitemSource)
    {
        $this->inventoryitemSource = $inventoryitemSource;

        return $this;
    }

    /**
     * Set Cost
     *
     * @param float $inventoryitemCost
     * @return $this
     */
    public function setInventoryitemCost($inventoryitemCost)
    {
        $this->inventoryitemCost = $inventoryitemCost;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $inventoryitemConditionID
     * @return $this
     */
    public function setInventoryitemConditionID($inventoryitemConditionID)
    {
        $this->inventoryitemConditionID = $inventoryitemConditionID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param string $inventoryitemCondition
     * @return $this
     */
    public function setInventoryitemCondition($inventoryitemCondition)
    {
        $this->inventoryitemCondition = $inventoryitemCondition;

        return $this;
    }

    /**
     * Set Category
     *
     * @param string $inventoryitemCategory
     * @return $this
     */
    public function setInventoryitemCategory($inventoryitemCategory)
    {
        $this->inventoryitemCategory = $inventoryitemCategory;

        return $this;
    }

    /**
     * Set Disposed Date
     *
     * @param \DateTime $inventoryitemDisposedDate
     * @return $this
     */
    public function setInventoryitemDisposedDate($inventoryitemDisposedDate)
    {
        $this->inventoryitemDisposedDate = $inventoryitemDisposedDate;

        return $this;
    }

    /**
     * Set Disposed Destination
     *
     * @param string $inventoryitemDisposedDestination
     * @return $this
     */
    public function setInventoryitemDisposedDestination($inventoryitemDisposedDestination)
    {
        $this->inventoryitemDisposedDestination = $inventoryitemDisposedDestination;

        return $this;
    }

    /**
     * Set Storage Location
     *
     * @param string $inventoryitemStorageLocation
     * @return $this
     */
    public function setInventoryitemStorageLocation($inventoryitemStorageLocation)
    {
        $this->inventoryitemStorageLocation = $inventoryitemStorageLocation;

        return $this;
    }

    /**
     * Set Files
     *
     * @param int $inventoryitemFiles
     * @return $this
     */
    public function setInventoryitemFiles($inventoryitemFiles)
    {
        $this->inventoryitemFiles = $inventoryitemFiles;

        return $this;
    }

    /**
     * Set Loaners
     *
     * @param int $inventoryitemLoaners
     * @return $this
     */
    public function setInventoryitemLoaners($inventoryitemLoaners)
    {
        $this->inventoryitemLoaners = $inventoryitemLoaners;

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
        if ($this->inventoryitemID !== null) $parameterArray['inventoryitemID'] = $this->inventoryitemID;
        if ($this->inventoryitemName !== null) $parameterArray['inventoryitemName'] = $this->inventoryitemName;
        if ($this->inventoryitemItemID !== null) $parameterArray['inventoryitemItemID'] = $this->inventoryitemItemID;
        if ($this->inventoryitemDescription !== null) $parameterArray['inventoryitemDescription'] = $this->inventoryitemDescription;
        if ($this->inventoryitemReceivedDate !== null) $parameterArray['inventoryitemReceivedDate'] = $this->inventoryitemReceivedDate;
        if ($this->inventoryitemSource !== null) $parameterArray['inventoryitemSource'] = $this->inventoryitemSource;
        if ($this->inventoryitemCost !== null) $parameterArray['inventoryitemCost'] = $this->inventoryitemCost;
        if ($this->inventoryitemConditionID !== null) $parameterArray['inventoryitemConditionID'] = $this->inventoryitemConditionID;
        if ($this->inventoryitemCondition !== null) $parameterArray['inventoryitemCondition'] = $this->inventoryitemCondition;
        if ($this->inventoryitemCategory !== null) $parameterArray['inventoryitemCategory'] = $this->inventoryitemCategory;
        if ($this->inventoryitemDisposedDate !== null) $parameterArray['inventoryitemDisposedDate'] = $this->inventoryitemDisposedDate;
        if ($this->inventoryitemDisposedDestination !== null) $parameterArray['inventoryitemDisposedDestination'] = $this->inventoryitemDisposedDestination;
        if ($this->inventoryitemStorageLocation !== null) $parameterArray['inventoryitemStorageLocation'] = $this->inventoryitemStorageLocation;
        if ($this->inventoryitemFiles !== null) $parameterArray['inventoryitemFiles'] = $this->inventoryitemFiles;
        if ($this->inventoryitemLoaners !== null) $parameterArray['inventoryitemLoaners'] = $this->inventoryitemLoaners;

        $this->addSearchParameters($parameterArray);

    }
}