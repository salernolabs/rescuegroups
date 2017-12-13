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
     * @var integer
     */
    private $contactfileContactID = null;

    /**
     * File
     * @var binary
     */
    private $contactfileBinary = null;

    /**
     * Old file name
     * @var string
     */
    private $contactfileOldFileName = null;

    /**
     * Description
     * @var string
     */
    private $contactfileDescription = null;

    /**
     * Status
     * @var string
     */
    private $contactfileStatus = null;

    /**
     * Inline
     * @var string
     */
    private $contactfileDisplayInline = null;


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
     * Set Contact
     *
     * @param integer $contactfileContactID
     * @return $this
     */
    public function setContactfileContactID($contactfileContactID)
    {
        $this->contactfileContactID = $contactfileContactID;

        return $this;
    }

    /**
     * Set File
     *
     * @param binary $contactfileBinary
     * @return $this
     */
    public function setContactfileBinary($contactfileBinary)
    {
        $this->contactfileBinary = $contactfileBinary;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $contactfileOldFileName
     * @return $this
     */
    public function setContactfileOldFileName($contactfileOldFileName)
    {
        $this->contactfileOldFileName = $contactfileOldFileName;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $contactfileDescription
     * @return $this
     */
    public function setContactfileDescription($contactfileDescription)
    {
        $this->contactfileDescription = $contactfileDescription;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $contactfileStatus
     * @return $this
     */
    public function setContactfileStatus($contactfileStatus)
    {
        $this->contactfileStatus = $contactfileStatus;

        return $this;
    }

    /**
     * Set Inline
     *
     * @param string $contactfileDisplayInline
     * @return $this
     */
    public function setContactfileDisplayInline($contactfileDisplayInline)
    {
        $this->contactfileDisplayInline = $contactfileDisplayInline;

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
        if ($this->contactfileContactID !== null) $parameterArray['contactfileContactID'] = $this->contactfileContactID;
        if ($this->contactfileBinary !== null) $parameterArray['contactfileBinary'] = $this->contactfileBinary;
        if ($this->contactfileOldFileName !== null) $parameterArray['contactfileOldFileName'] = $this->contactfileOldFileName;
        if ($this->contactfileDescription !== null) $parameterArray['contactfileDescription'] = $this->contactfileDescription;
        if ($this->contactfileStatus !== null) $parameterArray['contactfileStatus'] = $this->contactfileStatus;
        if ($this->contactfileDisplayInline !== null) $parameterArray['contactfileDisplayInline'] = $this->contactfileDisplayInline;

    }
}