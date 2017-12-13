<?php
/**
 * ContactFiles Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ContactFiles;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * File ID
     * @var integer
     */
    private $contactfileID = null;

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
        return 'edit';
    }

    /**
     * Set File ID
     *
     * @param integer $contactfileID
     * @return $this
     */
    public function setContactfileID($contactfileID)
    {
        $this->contactfileID = $contactfileID;

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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->contactfileID !== null) $parameterArray['contactfileID'] = $this->contactfileID;
        if ($this->contactfileDescription !== null) $parameterArray['contactfileDescription'] = $this->contactfileDescription;
        if ($this->contactfileStatus !== null) $parameterArray['contactfileStatus'] = $this->contactfileStatus;
        if ($this->contactfileDisplayInline !== null) $parameterArray['contactfileDisplayInline'] = $this->contactfileDisplayInline;

    }
}