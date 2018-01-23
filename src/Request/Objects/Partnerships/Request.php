<?php
/**
 * Partnerships Request Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Partnerships;

class Request extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'partnerships';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'request';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Sharing Org
     *
     * @var integer
     */
    private $haringOrgID = null;


    /**
     * Set Sharing Org
     *
     * @param integer $value
     * @return $this
     */
    public function setHaringOrgID($value)
    {
        $this->haringOrgID = $value;

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

        if ($this->haringOrgID !== null) $parameterArray['values'][] = ["partnershipSharingOrgID"=>$this->haringOrgID];
    }
}