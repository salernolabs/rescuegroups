<?php
/**
 * AnimalBreeds PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalBreeds;

class PublicSearch implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->breedID !== null) $parameterArray['breedID'] = $this->breedID;
        if ($this->breedName !== null) $parameterArray['breedName'] = $this->breedName;
        if ($this->breedSpecies !== null) $parameterArray['breedSpecies'] = $this->breedSpecies;
        if ($this->breedSpeciesID !== null) $parameterArray['breedSpeciesID'] = $this->breedSpeciesID;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\AnimalBreed[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\AnimalBreed($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\AnimalBreed($data)];
    }

}