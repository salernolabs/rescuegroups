<?php
/**
 * AnimalFiles View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalFiles;

class View extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalFiles';

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
    private $animalfileID = null;


    /**
     * Set File ID
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalfileID($value)
    {
        $this->animalfileID = $value;

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

        if ($this->animalfileID !== null) $parameterArray['values'][] = ["animalfileID"=>$this->animalfileID];
    }
}