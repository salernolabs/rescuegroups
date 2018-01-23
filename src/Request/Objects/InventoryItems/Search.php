<?php
/**
 * InventoryItems Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryItems;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'inventoryitems';

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
        "id" => [1, 'inventoryitemID'],
        "name" => [0, 'inventoryitemName'],
        "itemId" => [0, 'inventoryitemItemID'],
        "description" => [0, 'inventoryitemDescription'],
        "receivedDate" => [0, 'inventoryitemReceivedDate'],
        "source" => [0, 'inventoryitemSource'],
        "cost" => [0, 'inventoryitemCost'],
        "conditionId" => [0, 'inventoryitemConditionID'],
        "condition" => [0, 'inventoryitemCondition'],
        "category" => [0, 'inventoryitemCategory'],
        "disposedDate" => [0, 'inventoryitemDisposedDate'],
        "disposedDestination" => [0, 'inventoryitemDisposedDestination'],
        "storageLocation" => [0, 'inventoryitemStorageLocation'],
        "files" => [0, 'inventoryitemFiles'],
        "loaners" => [0, 'inventoryitemLoaners'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\InventoryItem[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\InventoryItem($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\InventoryItem($data)];
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