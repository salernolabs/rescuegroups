<?php
/**
 * WebFiles Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebFiles;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $webfileID = null;

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
        return 'edit';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->webfileID !== null) $parameterArray['webfileID'] = $this->webfileID;
        if ($this->webfileDescription !== null) $parameterArray['webfileDescription'] = $this->webfileDescription;
        if ($this->webfileStatus !== null) $parameterArray['webfileStatus'] = $this->webfileStatus;
        if ($this->webfileDisplayInline !== null) $parameterArray['webfileDisplayInline'] = $this->webfileDisplayInline;
        if ($this->webfileRoleID !== null) $parameterArray['webfileRoleID'] = $this->webfileRoleID;

    }
}