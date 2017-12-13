<?php
/**
 * AnimalPatterns Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalPatterns;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->patternID !== null) $parameterArray['patternID'] = $this->patternID;
        if ($this->patternName !== null) $parameterArray['patternName'] = $this->patternName;
        if ($this->patternSpecies !== null) $parameterArray['patternSpecies'] = $this->patternSpecies;
        if ($this->patternSpeciesID !== null) $parameterArray['patternSpeciesID'] = $this->patternSpeciesID;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\AnimalPattern[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\AnimalPattern($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\AnimalPattern($data)];
    }

}