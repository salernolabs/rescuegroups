<?php
/**
 * InventoryItems Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryItems;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "inventoryitemID" => 1,
        "inventoryitemName" => 0,
        "inventoryitemItemID" => 0,
        "inventoryitemDescription" => 0,
        "inventoryitemReceivedDate" => 0,
        "inventoryitemSource" => 0,
        "inventoryitemCost" => 0,
        "inventoryitemConditionID" => 0,
        "inventoryitemCondition" => 0,
        "inventoryitemCategory" => 0,
        "inventoryitemDisposedDate" => 0,
        "inventoryitemDisposedDestination" => 0,
        "inventoryitemStorageLocation" => 0,
        "inventoryitemFiles" => 0,
        "inventoryitemLoaners" => 0,
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
        return 'inventoryitems';
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