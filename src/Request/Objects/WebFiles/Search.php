<?php
/**
 * WebFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebFiles;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'webfiles';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_OLD_NAME = 'oldName';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_STATUS = 'status';
    const FIELD_DISPLAY_INLINE = 'displayInline';
    const FIELD_ROLE_ID = 'roleId';
    const FIELD_ROLE_NAME = 'roleName';
    const FIELD_SIZE = 'size';
    const FIELD_CREATED_DATE = 'createdDate';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'webfileID'],
        "oldName" => [0, 'webfileOldName'],
        "name" => [0, 'webfileName'],
        "description" => [0, 'webfileDescription'],
        "status" => [0, 'webfileStatus'],
        "displayInline" => [0, 'webfileDisplayInline'],
        "roleId" => [0, 'webfileRoleID'],
        "roleName" => [0, 'webfileRoleName'],
        "size" => [0, 'webfileSize'],
        "createdDate" => [0, 'webfileCreatedDate'],
    ];

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
                $output[] = new \RescueGroups\Objects\Search\WebFile($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\WebFile($data)];
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