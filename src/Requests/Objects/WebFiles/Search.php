<?php
/**
 * WebFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\WebFiles;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $webfileID = null;

    /**
     * Old file name
     * @var string
     */
    private $webfileOldName = null;

    /**
     * File name
     * @var string
     */
    private $webfileName = null;

    /**
     * Description
     * @var string
     */
    private $webfileDescription = null;

    /**
     * Status
     * @var string
     */
    private $webfileStatus = null;

    /**
     * Inline
     * @var string
     */
    private $webfileDisplayInline = null;

    /**
     * Security Role
     * @var integer
     */
    private $webfileRoleID = null;

    /**
     * Security Role
     * @var string
     */
    private $webfileRoleName = null;

    /**
     * File size
     * @var int
     */
    private $webfileSize = null;

    /**
     * Created Date
     * @var \DateTime
     */
    private $webfileCreatedDate = null;


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
        return 'webfiles';
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
     * @param integer $webfileID
     * @return $this
     */
    public function setWebfileID($webfileID)
    {
        $this->webfileID = $webfileID;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $webfileOldName
     * @return $this
     */
    public function setWebfileOldName($webfileOldName)
    {
        $this->webfileOldName = $webfileOldName;

        return $this;
    }

    /**
     * Set File name
     *
     * @param string $webfileName
     * @return $this
     */
    public function setWebfileName($webfileName)
    {
        $this->webfileName = $webfileName;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $webfileDescription
     * @return $this
     */
    public function setWebfileDescription($webfileDescription)
    {
        $this->webfileDescription = $webfileDescription;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $webfileStatus
     * @return $this
     */
    public function setWebfileStatus($webfileStatus)
    {
        $this->webfileStatus = $webfileStatus;

        return $this;
    }

    /**
     * Set Inline
     *
     * @param string $webfileDisplayInline
     * @return $this
     */
    public function setWebfileDisplayInline($webfileDisplayInline)
    {
        $this->webfileDisplayInline = $webfileDisplayInline;

        return $this;
    }

    /**
     * Set Security Role
     *
     * @param integer $webfileRoleID
     * @return $this
     */
    public function setWebfileRoleID($webfileRoleID)
    {
        $this->webfileRoleID = $webfileRoleID;

        return $this;
    }

    /**
     * Set Security Role
     *
     * @param string $webfileRoleName
     * @return $this
     */
    public function setWebfileRoleName($webfileRoleName)
    {
        $this->webfileRoleName = $webfileRoleName;

        return $this;
    }

    /**
     * Set File size
     *
     * @param int $webfileSize
     * @return $this
     */
    public function setWebfileSize($webfileSize)
    {
        $this->webfileSize = $webfileSize;

        return $this;
    }

    /**
     * Set Created Date
     *
     * @param \DateTime $webfileCreatedDate
     * @return $this
     */
    public function setWebfileCreatedDate($webfileCreatedDate)
    {
        $this->webfileCreatedDate = $webfileCreatedDate;

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
        if ($this->webfileID !== null) $parameterArray['webfileID'] = $this->webfileID;
        if ($this->webfileOldName !== null) $parameterArray['webfileOldName'] = $this->webfileOldName;
        if ($this->webfileName !== null) $parameterArray['webfileName'] = $this->webfileName;
        if ($this->webfileDescription !== null) $parameterArray['webfileDescription'] = $this->webfileDescription;
        if ($this->webfileStatus !== null) $parameterArray['webfileStatus'] = $this->webfileStatus;
        if ($this->webfileDisplayInline !== null) $parameterArray['webfileDisplayInline'] = $this->webfileDisplayInline;
        if ($this->webfileRoleID !== null) $parameterArray['webfileRoleID'] = $this->webfileRoleID;
        if ($this->webfileRoleName !== null) $parameterArray['webfileRoleName'] = $this->webfileRoleName;
        if ($this->webfileSize !== null) $parameterArray['webfileSize'] = $this->webfileSize;
        if ($this->webfileCreatedDate !== null) $parameterArray['webfileCreatedDate'] = $this->webfileCreatedDate;

        $this->addSearchParameters($parameterArray);

    }
}