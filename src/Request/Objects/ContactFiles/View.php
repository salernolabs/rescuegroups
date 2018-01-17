<?php
/**
 * ContactFiles View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ContactFiles;

class View extends \RescueGroups\Request\Objects\Base implements
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
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * File ID
     *
     * @var integer
     */
    private $contactfileID = null;


    /**
     * Set File ID
     *
     * @param integer $value
     * @return $this
     */
    public function setContactfileID($value)
    {
        $this->contactfileID = $value;

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

        if ($this->contactfileID !== null) $parameterArray['values'][] = ["contactfileID"=>$this->contactfileID];
    }
}