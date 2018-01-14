<?php
/**
 * ContactFiles Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ContactFiles;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Contact
     *
     * @var integer
     */
    private $contactfileContactID = null;

    /**
     * File
     *
     * @var string
     */
    private $contactfileBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    private $contactfileOldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    private $contactfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    private $contactfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    private $contactfileDisplayInline = null;


    /**
     * Set Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setContactfileContactID($value)
    {
        $this->contactfileContactID = $value;

        return $this;
    }

    /**
     * Set File
     *
     * @param string $value
     * @return $this
     */
    public function setContactfileBinary($value)
    {
        $this->contactfileBinary = $value;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $value
     * @return $this
     */
    public function setContactfileOldFileName($value)
    {
        $this->contactfileOldFileName = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setContactfileDescription($value)
    {
        $this->contactfileDescription = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $value
     * @return $this
     */
    public function setContactfileStatus($value)
    {
        $this->contactfileStatus = $value;

        return $this;
    }

    /**
     * Set Inline
     *
     * @param string $value
     * @return $this
     */
    public function setContactfileDisplayInline($value)
    {
        $this->contactfileDisplayInline = $value;

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
        return 'contactFiles';
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

        if ($this->contactfileContactID !== null) $parameterArray['values'][] = ["contactfileContactID"=>$this->contactfileContactID];
        if ($this->contactfileBinary !== null) $parameterArray['values'][] = ["contactfileBinary"=>$this->contactfileBinary];
        if ($this->contactfileOldFileName !== null) $parameterArray['values'][] = ["contactfileOldFileName"=>$this->contactfileOldFileName];
        if ($this->contactfileDescription !== null) $parameterArray['values'][] = ["contactfileDescription"=>$this->contactfileDescription];
        if ($this->contactfileStatus !== null) $parameterArray['values'][] = ["contactfileStatus"=>$this->contactfileStatus];
        if ($this->contactfileDisplayInline !== null) $parameterArray['values'][] = ["contactfileDisplayInline"=>$this->contactfileDisplayInline];
    }
}