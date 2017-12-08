<?php
/**
 * InventoryFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\InventoryFiles;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * File
     * @var integer
     */
    private $inventoryfileID = null;

    /**
     * Old file name
     * @var string
     */
    private $inventoryfileOldName = null;

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
     * File size
     * @var int
     */
    private $inventoryfileSize = null;

    /**
     * Created Date
     * @var \DateTime
     */
    private $inventoryfileCreatedDate = null;

    /**
     * ID
     * @var integer
     */
    private $inventoryfileItemID = null;

    /**
     * Name
     * @var string
     */
    private $inventoryitemName = null;

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
        return 'inventoryfiles';
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
     * Set Old file name
     *
     * @param string $inventoryfileOldName
     * @return $this
     */
    public function setInventoryfileOldName($inventoryfileOldName)
    {
        $this->inventoryfileOldName = $inventoryfileOldName;

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
     * Set File size
     *
     * @param int $inventoryfileSize
     * @return $this
     */
    public function setInventoryfileSize($inventoryfileSize)
    {
        $this->inventoryfileSize = $inventoryfileSize;

        return $this;
    }

    /**
     * Set Created Date
     *
     * @param \DateTime $inventoryfileCreatedDate
     * @return $this
     */
    public function setInventoryfileCreatedDate($inventoryfileCreatedDate)
    {
        $this->inventoryfileCreatedDate = $inventoryfileCreatedDate;

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
        if ($this->inventoryfileID !== null) $parameterArray['inventoryfileID'] = $this->inventoryfileID;
        if ($this->inventoryfileOldName !== null) $parameterArray['inventoryfileOldName'] = $this->inventoryfileOldName;
        if ($this->inventoryfileDescription !== null) $parameterArray['inventoryfileDescription'] = $this->inventoryfileDescription;
        if ($this->inventoryfileStatus !== null) $parameterArray['inventoryfileStatus'] = $this->inventoryfileStatus;
        if ($this->inventoryfileDisplayInline !== null) $parameterArray['inventoryfileDisplayInline'] = $this->inventoryfileDisplayInline;
        if ($this->inventoryfileSize !== null) $parameterArray['inventoryfileSize'] = $this->inventoryfileSize;
        if ($this->inventoryfileCreatedDate !== null) $parameterArray['inventoryfileCreatedDate'] = $this->inventoryfileCreatedDate;
        if ($this->inventoryfileItemID !== null) $parameterArray['inventoryfileItemID'] = $this->inventoryfileItemID;
        if ($this->inventoryitemName !== null) $parameterArray['inventoryitemName'] = $this->inventoryitemName;
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