<?php
/**
 * ColoniesCareTakers Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ColoniesCareTakers;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'coloniesCaretakers';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_COLONY_ID = 'colonyId';
    const FIELD_CONTACT_ID = 'contactId';
    const FIELD_CONTACT_NAME = 'contactName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'caretakerID'],
        "colonyId" => [0, 'caretakerColonyID'],
        "contactId" => [0, 'caretakerContactID'],
        "contactName" => [0, 'caretakerContactName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\ColoniesCareTaker[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\ColoniesCareTaker($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\ColoniesCareTaker($data)];
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