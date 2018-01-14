<?php
/**
 * WebFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebFiles;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "webfileID" => [1, 'webfileID'],
        "webfileOldName" => [0, 'webfileOldName'],
        "webfileName" => [0, 'webfileName'],
        "webfileDescription" => [0, 'webfileDescription'],
        "webfileStatus" => [0, 'webfileStatus'],
        "webfileDisplayInline" => [0, 'webfileDisplayInline'],
        "webfileRoleID" => [0, 'webfileRoleID'],
        "webfileRoleName" => [0, 'webfileRoleName'],
        "webfileSize" => [0, 'webfileSize'],
        "webfileCreatedDate" => [0, 'webfileCreatedDate'],
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
        return 'webfiles';
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
     * @returns \RescueGroups\Objects\WebFile[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\WebFile($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\WebFile($data)];
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