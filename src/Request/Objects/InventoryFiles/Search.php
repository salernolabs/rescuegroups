<?php
/**
 * InventoryFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryFiles;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'inventoryfiles';

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
    const FIELD_DESCRIPTION = 'description';
    const FIELD_STATUS = 'status';
    const FIELD_DISPLAY_INLINE = 'displayInline';
    const FIELD_SIZE = 'size';
    const FIELD_CREATED_DATE = 'createdDate';
    const FIELD_ITEM_ID = 'itemId';
    const FIELD_INVENTORYITEM_NAME = 'inventoryitemName';
    const FIELD_INVENTORYITEM_DESCRIPTION = 'inventoryitemDescription';
    const FIELD_INVENTORYITEM_RECEIVED_DATE = 'inventoryitemReceivedDate';
    const FIELD_INVENTORYITEM_SOURCE = 'inventoryitemSource';
    const FIELD_INVENTORYITEM_COST = 'inventoryitemCost';
    const FIELD_INVENTORYITEM_CONDITION_ID = 'inventoryitemConditionId';
    const FIELD_INVENTORYITEM_CONDITION = 'inventoryitemCondition';
    const FIELD_INVENTORYITEM_CATEGORY = 'inventoryitemCategory';
    const FIELD_INVENTORYITEM_DISPOSED_DATE = 'inventoryitemDisposedDate';
    const FIELD_INVENTORYITEM_DISPOSED_DESTINATION = 'inventoryitemDisposedDestination';
    const FIELD_INVENTORYITEM_STORAGE_LOCATION = 'inventoryitemStorageLocation';
    const FIELD_INVENTORYITEM_FILES = 'inventoryitemFiles';
    const FIELD_INVENTORYITEM_LOANERS = 'inventoryitemLoaners';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'inventoryfileID'],
        "oldName" => [0, 'inventoryfileOldName'],
        "description" => [0, 'inventoryfileDescription'],
        "status" => [0, 'inventoryfileStatus'],
        "displayInline" => [0, 'inventoryfileDisplayInline'],
        "size" => [0, 'inventoryfileSize'],
        "createdDate" => [0, 'inventoryfileCreatedDate'],
        "itemId" => [1, 'inventoryfileItemID'],
        "inventoryitemName" => [0, 'inventoryitemName'],
        "inventoryitemDescription" => [0, 'inventoryitemDescription'],
        "inventoryitemReceivedDate" => [0, 'inventoryitemReceivedDate'],
        "inventoryitemSource" => [0, 'inventoryitemSource'],
        "inventoryitemCost" => [0, 'inventoryitemCost'],
        "inventoryitemConditionId" => [0, 'inventoryitemConditionID'],
        "inventoryitemCondition" => [0, 'inventoryitemCondition'],
        "inventoryitemCategory" => [0, 'inventoryitemCategory'],
        "inventoryitemDisposedDate" => [0, 'inventoryitemDisposedDate'],
        "inventoryitemDisposedDestination" => [0, 'inventoryitemDisposedDestination'],
        "inventoryitemStorageLocation" => [0, 'inventoryitemStorageLocation'],
        "inventoryitemFiles" => [0, 'inventoryitemFiles'],
        "inventoryitemLoaners" => [0, 'inventoryitemLoaners'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\InventoryFile[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\InventoryFile($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\InventoryFile($data)];
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