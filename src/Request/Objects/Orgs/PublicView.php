<?php
/**
 * Orgs PublicView Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Orgs;

class PublicView extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'orgs';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicView';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;

    /**
     * ID
     *
     * @var integer
     */
    private $orgID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setOrgID($value)
    {
        $this->orgID = $value;

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

        if ($this->orgID !== null) $parameterArray['values'][] = ["orgID"=>$this->orgID];
    }
}