<?php
/**
 * IntakesTransfers View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesTransfers;

class View extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesTransfers';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Owner Surrender
     *
     * @var integer
     */
    private $intakesTransferID = null;


    /**
     * Set Owner Surrender
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesTransferID($value)
    {
        $this->intakesTransferID = $value;

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

        if ($this->intakesTransferID !== null) $parameterArray['values'][] = ["intakesTransferID"=>$this->intakesTransferID];
    }
}