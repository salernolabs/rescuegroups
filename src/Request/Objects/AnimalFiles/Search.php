<?php
/**
 * AnimalFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalFiles;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalFiles';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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
        "tatus" => [0, 'animalfileStatus'],
        "animalfileDisplayInline" => [0, 'animalfileDisplayInline'],
        "animalfilePublic" => [0, 'animalfilePublic'],
        "ize" => [0, 'animalfileSize'],
        "animalfileCreatedDate" => [0, 'animalfileCreatedDate'],
    ];

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