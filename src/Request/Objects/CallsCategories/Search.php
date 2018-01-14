<?php
/**
 * CallsCategories Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsCategories;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "categoryID" => [1, 'categoryID'],
        "categoryName" => [0, 'categoryName'],
        "categoryDescription" => [0, 'categoryDescription'],
        "categoryPublic" => [0, 'categoryPublic'],
        "categoryDefaultQueueID" => [0, 'categoryDefaultQueueID'],
        "categoryDefaultQueueName" => [0, 'categoryDefaultQueueName'],
        "categoryCreatedDate" => [0, 'categoryCreatedDate'],
        "categoryCreatedByID" => [0, 'categoryCreatedByID'],
        "categoryUpdatedDate" => [0, 'categoryUpdatedDate'],
        "categoryUpdatedByID" => [0, 'categoryUpdatedByID'],
        "categoryCallsCount" => [0, 'categoryCallsCount'],
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
        return 'callsCategories';
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
     * @returns \RescueGroups\Objects\CallsCategory[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\CallsCategory($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\CallsCategory($data)];
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