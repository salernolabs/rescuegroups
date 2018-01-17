<?php
/**
 * ContactFiles Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ContactFiles;

class Add extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'contactFiles';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'add';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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