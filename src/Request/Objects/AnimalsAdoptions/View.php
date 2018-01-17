<?php
/**
 * AnimalsAdoptions View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class View extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsAdoptions';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Adoption ID
     *
     * @var integer
     */
    private $adoptionID = null;


    /**
     * Set Adoption ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionID($value)
    {
        $this->adoptionID = $value;

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

        if ($this->adoptionID !== null) $parameterArray['values'][] = ["adoptionID"=>$this->adoptionID];
    }
}