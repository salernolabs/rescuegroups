<?php
/**
 * AnimalQualities GetList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalQualities;

class GetList extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalQualities';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'list';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Animal Qualities
     *
     * @var string
     */
    private $animalQualities = null;


    /**
     * Set Animal Qualities
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalQualities($value)
    {
        $this->animalQualities = $value;

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

        $value = [];
        if ($this->animalQualities !== null) $value["animalQualities"] = $this->animalQualities;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}