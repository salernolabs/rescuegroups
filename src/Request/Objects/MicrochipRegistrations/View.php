<?php
/**
 * MicrochipRegistrations View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\MicrochipRegistrations;

class View extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'microchipRegistrations';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * ID
     *
     * @var integer
     */
    private $microchipRegistrationID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setMicrochipRegistrationID($value)
    {
        $this->microchipRegistrationID = $value;

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

        if ($this->microchipRegistrationID !== null) $parameterArray['values'][] = ["microchipRegistrationID"=>$this->microchipRegistrationID];
    }
}