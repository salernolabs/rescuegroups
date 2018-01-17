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
    \RescueGroups\Request\ObjectActionInterface,
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

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "inventoryfileID" => [0, 'inventoryfileID'],
        "inventoryfileOldName" => [0, 'inventoryfileOldName'],
        "inventoryfileDescription" => [0, 'inventoryfileDescription'],
        "inventoryfileStatus" => [0, 'inventoryfileStatus'],
        "inventoryfileDisplayInline" => [0, 'inventoryfileDisplayInline'],
        "inventoryfileSize" => [0, 'inventoryfileSize'],
        "inventoryfileCreatedDate" => [0, 'inventoryfileCreatedDate'],
        "inventoryfileItemID" => [1, 'inventoryfileItemID'],
        "inventoryitemName" => [0, 'inventoryitemName'],
        "inventoryitemDescription" => [0, 'inventoryitemDescription'],
        "inventoryitemReceivedDate" => [0, 'inventoryitemReceivedDate'],
        "inventoryitemSource" => [0, 'inventoryitemSource'],
        "inventoryitemCost" => [0, 'inventoryitemCost'],
        "inventoryitemConditionID" => [0, 'inventoryitemConditionID'],
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
                $output[] = new \RescueGroups\Objects\InventoryFile($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\InventoryFile($data)];
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