<?php
/**
 * AnimalPatterns Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Requests\Objects\AnimalPatterns;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $patternID = null;

    /**
     * pattern
     * @var string
     */
    private $patternName = null;

    /**
     * Species
     * @var string
     */
    private $patternSpecies = null;

    /**
     * Species
     * @var integer
     */
    private $patternSpeciesID = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animalPatterns';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'search';
    }

    /**
     * Set ID
     *
     * @param integer $patternID
     * @return $this
     */
    public function setPatternID($patternID)
    {
        $this->patternID = $patternID;

        return $this;
    }

    /**
     * Set pattern
     *
     * @param string $patternName
     * @return $this
     */
    public function setPatternName($patternName)
    {
        $this->patternName = $patternName;

        return $this;
    }

    /**
     * Set Species
     *
     * @param string $patternSpecies
     * @return $this
     */
    public function setPatternSpecies($patternSpecies)
    {
        $this->patternSpecies = $patternSpecies;

        return $this;
    }

    /**
     * Set Species
     *
     * @param integer $patternSpeciesID
     * @return $this
     */
    public function setPatternSpeciesID($patternSpeciesID)
    {
        $this->patternSpeciesID = $patternSpeciesID;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->patternID !== null) $parameterArray['patternID'] = $this->patternID;
        if ($this->patternName !== null) $parameterArray['patternName'] = $this->patternName;
        if ($this->patternSpecies !== null) $parameterArray['patternSpecies'] = $this->patternSpecies;
        if ($this->patternSpeciesID !== null) $parameterArray['patternSpeciesID'] = $this->patternSpeciesID;

        $this->addSearchParameters($parameterArray);

    }
}