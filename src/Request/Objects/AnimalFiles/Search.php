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

    const FIELD_ID = 'id';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_OLD_NAME = 'oldName';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_STATUS = 'status';
    const FIELD_DISPLAY_INLINE = 'displayInline';
    const FIELD_PUBLIC = 'public';
    const FIELD_SIZE = 'size';
    const FIELD_CREATED_DATE = 'createdDate';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'animalfileID'],
        "animalId" => [1, 'animalfileAnimalID'],
        "oldName" => [0, 'animalfileOldName'],
        "description" => [0, 'animalfileDescription'],
        "status" => [0, 'animalfileStatus'],
        "displayInline" => [0, 'animalfileDisplayInline'],
        "public" => [0, 'animalfilePublic'],
        "size" => [0, 'animalfileSize'],
        "createdDate" => [0, 'animalfileCreatedDate'],
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
                $output[] = new \RescueGroups\Objects\Search\AnimalFile($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\AnimalFile($data)];
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