<?php
/**
 * WebFiles Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Requests\Objects\WebFiles;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * File
     * @var binary
     */
    private $webfileBinary = null;

    /**
     * Old file name
     * @var string
     */
    private $webfileOldFileName = null;

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
        return 'add';
    }

    /**
     * Set File
     *
     * @param binary $webfileBinary
     * @return $this
     */
    public function setWebfileBinary($webfileBinary)
    {
        $this->webfileBinary = $webfileBinary;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $webfileOldFileName
     * @return $this
     */
    public function setWebfileOldFileName($webfileOldFileName)
    {
        $this->webfileOldFileName = $webfileOldFileName;

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
        if ($this->webfileBinary !== null) $parameterArray['webfileBinary'] = $this->webfileBinary;
        if ($this->webfileOldFileName !== null) $parameterArray['webfileOldFileName'] = $this->webfileOldFileName;
        if ($this->webfileDescription !== null) $parameterArray['webfileDescription'] = $this->webfileDescription;
        if ($this->webfileStatus !== null) $parameterArray['webfileStatus'] = $this->webfileStatus;
        if ($this->webfileDisplayInline !== null) $parameterArray['webfileDisplayInline'] = $this->webfileDisplayInline;
        if ($this->webfileRoleID !== null) $parameterArray['webfileRoleID'] = $this->webfileRoleID;

    }
}