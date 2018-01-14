<?php
/**
 * AnimalFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalFiles;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "animalfileID" => [0, 'animalfileID'],
        "animalfileAnimalID" => [1, 'animalfileAnimalID'],
        "animalfileOldName" => [0, 'animalfileOldName'],
        "animalfileDescription" => [0, 'animalfileDescription'],
        "animalfileStatus" => [0, 'animalfileStatus'],
        "animalfileDisplayInline" => [0, 'animalfileDisplayInline'],
        "animalfilePublic" => [0, 'animalfilePublic'],
        "animalfileSize" => [0, 'animalfileSize'],
        "animalfileCreatedDate" => [0, 'animalfileCreatedDate'],
    ];

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
        return 'animalFiles';
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
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\AnimalFile[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\AnimalFile($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\AnimalFile($data)];
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        $this->addSearchParameters($parameterArray);
    }
}