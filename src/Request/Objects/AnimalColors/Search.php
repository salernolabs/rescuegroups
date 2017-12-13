<?php
/**
 * AnimalColors Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalColors;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $colorID = null;

    /**
     * Color
     * @var string
     */
    private $colorName = null;

    /**
     * Species
     * @var string
     */
    private $colorSpecies = null;

    /**
     * Species
     * @var integer
     */
    private $colorSpeciesID = null;


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
        return 'animalColors';
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
     * @param integer $colorID
     * @return $this
     */
    public function setColorID($colorID)
    {
        $this->colorID = $colorID;

        return $this;
    }

    /**
     * Set Color
     *
     * @param string $colorName
     * @return $this
     */
    public function setColorName($colorName)
    {
        $this->colorName = $colorName;

        return $this;
    }

    /**
     * Set Species
     *
     * @param string $colorSpecies
     * @return $this
     */
    public function setColorSpecies($colorSpecies)
    {
        $this->colorSpecies = $colorSpecies;

        return $this;
    }

    /**
     * Set Species
     *
     * @param integer $colorSpeciesID
     * @return $this
     */
    public function setColorSpeciesID($colorSpeciesID)
    {
        $this->colorSpeciesID = $colorSpeciesID;

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
        if ($this->colorID !== null) $parameterArray['colorID'] = $this->colorID;
        if ($this->colorName !== null) $parameterArray['colorName'] = $this->colorName;
        if ($this->colorSpecies !== null) $parameterArray['colorSpecies'] = $this->colorSpecies;
        if ($this->colorSpeciesID !== null) $parameterArray['colorSpeciesID'] = $this->colorSpeciesID;

        $this->addSearchParameters($parameterArray);

    }
}