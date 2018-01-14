<?php
/**
 * WebFiles Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebFiles;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * File
     *
     * @var string
     */
    private $webfileBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    private $webfileOldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    private $webfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    private $webfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    private $webfileDisplayInline = null;

    /**
     * Security Role
     *
     * @var integer
     */
    private $webfileRoleID = null;


    /**
     * Set File
     *
     * @param string $value
     * @return $this
     */
    public function setWebfileBinary($value)
    {
        $this->webfileBinary = $value;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $value
     * @return $this
     */
    public function setWebfileOldFileName($value)
    {
        $this->webfileOldFileName = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setWebfileDescription($value)
    {
        $this->webfileDescription = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $value
     * @return $this
     */
    public function setWebfileStatus($value)
    {
        $this->webfileStatus = $value;

        return $this;
    }

    /**
     * Set Inline
     *
     * @param string $value
     * @return $this
     */
    public function setWebfileDisplayInline($value)
    {
        $this->webfileDisplayInline = $value;

        return $this;
    }

    /**
     * Set Security Role
     *
     * @param integer $value
     * @return $this
     */
    public function setWebfileRoleID($value)
    {
        $this->webfileRoleID = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->webfileBinary !== null) $parameterArray['values'][] = ["webfileBinary"=>$this->webfileBinary];
        if ($this->webfileOldFileName !== null) $parameterArray['values'][] = ["webfileOldFileName"=>$this->webfileOldFileName];
        if ($this->webfileDescription !== null) $parameterArray['values'][] = ["webfileDescription"=>$this->webfileDescription];
        if ($this->webfileStatus !== null) $parameterArray['values'][] = ["webfileStatus"=>$this->webfileStatus];
        if ($this->webfileDisplayInline !== null) $parameterArray['values'][] = ["webfileDisplayInline"=>$this->webfileDisplayInline];
        if ($this->webfileRoleID !== null) $parameterArray['values'][] = ["webfileRoleID"=>$this->webfileRoleID];
    }
}