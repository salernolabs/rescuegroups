<?php
/**
 * IntakesStrayPickups View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayPickups;

class View extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesStraypickups';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Stray Pickup
     *
     * @var integer
     */
    private $intakesStraypickupID = null;


    /**
     * Set Stray Pickup
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraypickupID($value)
    {
        $this->intakesStraypickupID = $value;

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

        if ($this->intakesStraypickupID !== null) $parameterArray['values'][] = ["intakesStraypickupID"=>$this->intakesStraypickupID];
    }
}