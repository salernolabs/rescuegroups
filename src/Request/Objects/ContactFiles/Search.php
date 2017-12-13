<?php
/**
 * ContactFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ContactFiles;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * File ID
     * @var integer
     */
    private $contactfileID = null;

    /**
     * Contact
     * @var integer
     */
    private $contactfileContactID = null;

    /**
     * Old file name
     * @var string
     */
    private $contactfileOldName = null;

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
     * File size
     * @var string
     */
    private $contactfileSize = null;

    /**
     * Created Date
     * @var \DateTime
     */
    private $contactfileCreatedDate = null;


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
        return 'search';
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
     * Set Old file name
     *
     * @param string $contactfileOldName
     * @return $this
     */
    public function setContactfileOldName($contactfileOldName)
    {
        $this->contactfileOldName = $contactfileOldName;

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
     * Set File size
     *
     * @param string $contactfileSize
     * @return $this
     */
    public function setContactfileSize($contactfileSize)
    {
        $this->contactfileSize = $contactfileSize;

        return $this;
    }

    /**
     * Set Created Date
     *
     * @param \DateTime $contactfileCreatedDate
     * @return $this
     */
    public function setContactfileCreatedDate($contactfileCreatedDate)
    {
        $this->contactfileCreatedDate = $contactfileCreatedDate;

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
        if ($this->contactfileID !== null) $parameterArray['contactfileID'] = $this->contactfileID;
        if ($this->contactfileContactID !== null) $parameterArray['contactfileContactID'] = $this->contactfileContactID;
        if ($this->contactfileOldName !== null) $parameterArray['contactfileOldName'] = $this->contactfileOldName;
        if ($this->contactfileDescription !== null) $parameterArray['contactfileDescription'] = $this->contactfileDescription;
        if ($this->contactfileStatus !== null) $parameterArray['contactfileStatus'] = $this->contactfileStatus;
        if ($this->contactfileDisplayInline !== null) $parameterArray['contactfileDisplayInline'] = $this->contactfileDisplayInline;
        if ($this->contactfileSize !== null) $parameterArray['contactfileSize'] = $this->contactfileSize;
        if ($this->contactfileCreatedDate !== null) $parameterArray['contactfileCreatedDate'] = $this->contactfileCreatedDate;

        $this->addSearchParameters($parameterArray);

    }
}