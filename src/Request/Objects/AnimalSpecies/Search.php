<?php
/**
 * AnimalSpecies Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalSpecies;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $speciesID = null;

    /**
     * Singular name
     * @var string
     */
    private $speciesSingular = null;

    /**
     * Plural name
     * @var string
     */
    private $speciesPlural = null;

    /**
     * Singular young name
     * @var string
     */
    private $speciesSingularYoung = null;

    /**
     * Plural young name
     * @var string
     */
    private $speciesPluralYoung = null;

    /**
     * Full name
     * @var string
     */
    private $speciesFullname = null;


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
        return 'animalSpecies';
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
     * @param integer $speciesID
     * @return $this
     */
    public function setSpeciesID($speciesID)
    {
        $this->speciesID = $speciesID;

        return $this;
    }

    /**
     * Set Singular name
     *
     * @param string $speciesSingular
     * @return $this
     */
    public function setSpeciesSingular($speciesSingular)
    {
        $this->speciesSingular = $speciesSingular;

        return $this;
    }

    /**
     * Set Plural name
     *
     * @param string $speciesPlural
     * @return $this
     */
    public function setSpeciesPlural($speciesPlural)
    {
        $this->speciesPlural = $speciesPlural;

        return $this;
    }

    /**
     * Set Singular young name
     *
     * @param string $speciesSingularYoung
     * @return $this
     */
    public function setSpeciesSingularYoung($speciesSingularYoung)
    {
        $this->speciesSingularYoung = $speciesSingularYoung;

        return $this;
    }

    /**
     * Set Plural young name
     *
     * @param string $speciesPluralYoung
     * @return $this
     */
    public function setSpeciesPluralYoung($speciesPluralYoung)
    {
        $this->speciesPluralYoung = $speciesPluralYoung;

        return $this;
    }

    /**
     * Set Full name
     *
     * @param string $speciesFullname
     * @return $this
     */
    public function setSpeciesFullname($speciesFullname)
    {
        $this->speciesFullname = $speciesFullname;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->speciesID !== null) $parameterArray['speciesID'] = $this->speciesID;
        if ($this->speciesSingular !== null) $parameterArray['speciesSingular'] = $this->speciesSingular;
        if ($this->speciesPlural !== null) $parameterArray['speciesPlural'] = $this->speciesPlural;
        if ($this->speciesSingularYoung !== null) $parameterArray['speciesSingularYoung'] = $this->speciesSingularYoung;
        if ($this->speciesPluralYoung !== null) $parameterArray['speciesPluralYoung'] = $this->speciesPluralYoung;
        if ($this->speciesFullname !== null) $parameterArray['speciesFullname'] = $this->speciesFullname;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\AnimalSpecies[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\AnimalSpecies($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\AnimalSpecies($data)];
    }

}