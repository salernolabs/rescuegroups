<?php
/**
 * AnimalBreeds PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\AnimalBreeds;

class PublicSearch implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $breedID = null;

    /**
     * Breed Name
     * @var string
     */
    private $breedName = null;

    /**
     * Species
     * @var string
     */
    private $breedSpecies = null;

    /**
     * Species
     * @var integer
     */
    private $breedSpeciesID = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animalBreeds';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicSearch';
    }

    /**
     * Set ID
     *
     * @param integer $breedID
     * @return $this
     */
    public function setBreedID($breedID)
    {
        $this->breedID = $breedID;

        return $this;
    }

    /**
     * Set Breed Name
     *
     * @param string $breedName
     * @return $this
     */
    public function setBreedName($breedName)
    {
        $this->breedName = $breedName;

        return $this;
    }

    /**
     * Set Species
     *
     * @param string $breedSpecies
     * @return $this
     */
    public function setBreedSpecies($breedSpecies)
    {
        $this->breedSpecies = $breedSpecies;

        return $this;
    }

    /**
     * Set Species
     *
     * @param integer $breedSpeciesID
     * @return $this
     */
    public function setBreedSpeciesID($breedSpeciesID)
    {
        $this->breedSpeciesID = $breedSpeciesID;

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
        if ($this->breedID !== null) $parameterArray['breedID'] = $this->breedID;
        if ($this->breedName !== null) $parameterArray['breedName'] = $this->breedName;
        if ($this->breedSpecies !== null) $parameterArray['breedSpecies'] = $this->breedSpecies;
        if ($this->breedSpeciesID !== null) $parameterArray['breedSpeciesID'] = $this->breedSpeciesID;

        $this->addSearchParameters($parameterArray);

    }
}