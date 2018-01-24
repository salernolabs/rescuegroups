<?php
/**
 * ContactFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ContactFiles;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'contactFiles';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_CONTACT_ID = 'contactId';
    const FIELD_OLD_NAME = 'oldName';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_STATUS = 'status';
    const FIELD_DISPLAY_INLINE = 'displayInline';
    const FIELD_SIZE = 'size';
    const FIELD_CREATED_DATE = 'createdDate';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'contactfileID'],
        "contactId" => [1, 'contactfileContactID'],
        "oldName" => [0, 'contactfileOldName'],
        "description" => [0, 'contactfileDescription'],
        "status" => [0, 'contactfileStatus'],
        "displayInline" => [0, 'contactfileDisplayInline'],
        "size" => [0, 'contactfileSize'],
        "createdDate" => [0, 'contactfileCreatedDate'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\ContactFile[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\ContactFile($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\ContactFile($data)];
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