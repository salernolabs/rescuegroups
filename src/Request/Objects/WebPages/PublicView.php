<?php
/**
 * WebPages PublicView Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebPages;

class PublicView extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'webpages';

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
    private $webpageID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setWebpageID($value)
    {
        $this->webpageID = $value;

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

        if ($this->webpageID !== null) $parameterArray['values'][] = ["webpageID"=>$this->webpageID];
    }
}