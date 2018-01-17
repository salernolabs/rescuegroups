# InventoryItems

This is the documentation for the InventoryItems queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-inventoryitems)

## Define
Performs inventoryitems.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\InventoryItems\Define();

    $result = $api->executeRequest($query);
## GetList
Performs inventoryitems.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\InventoryItems\GetList();
    $result = $api->executeRequest($query);
## View
Performs inventoryitems.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\InventoryItems\View();

    $query->setinventoryitemID("ID");

    $result = $api->executeRequest($query);

## Search
Performs inventoryitems.search search query. This query returns an array of [\RescueGroups\Objects\InventoryItem](../../../src/Objects/InventoryItem.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\InventoryItems\Search();
    $query
        ->setResultStart(10)
        ->setResultLimit(20)
        ->setResultSort('objectField')
        ->setResultOrder('asc')
        ->setCalculateFoundRows(true)
        ->addFilter('someObjectField', 'equals', 33)
        ->addField('objectField')
        ->addField('someOtherObjectField');

    $result = $api->executeRequest($query);
## Add
Performs inventoryitems.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\InventoryItem](../../../src/Objects/InventoryItem.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\InventoryItems\Add();

    $addObject = new \RescueGroups\Objects\Create\InventoryItem();
    $addObject->inventoryitemName = "Name"
    $addObject->inventoryitemItemID = "Item Number/ID"
    $addObject->inventoryitemDescription = "Description"
    $addObject->inventoryitemReceivedDate = "Received Date"
    $addObject->inventoryitemSource = "Source"
    $addObject->inventoryitemCost = "Cost"
    $addObject->inventoryitemCategory = "Category"
    $addObject->inventoryitemDisposedDate = "Disposed Date"
    $addObject->inventoryitemDisposedDestination = "Disposed Destination"
    $addObject->inventoryitemStorageLocation = "Storage Location"
    $addObject->inventoryitemQuantity = "Quantity"

    $query->addInventoryItem($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs inventoryitems.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\InventoryItem](../../../src/Objects/InventoryItem.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\InventoryItems\Edit();

    $editObject = new \RescueGroups\Objects\InventoryItem();
    $editObject->inventoryitemID = "ID"
    $editObject->inventoryitemName = "Name"
    $editObject->inventoryitemItemID = "Item Number/ID"
    $editObject->inventoryitemDescription = "Description"
    $editObject->inventoryitemReceivedDate = "Received Date"
    $editObject->inventoryitemSource = "Source"
    $editObject->inventoryitemCost = "Cost"
    $editObject->inventoryitemConditionID = "Condition"
    $editObject->inventoryitemCategory = "Category"
    $editObject->inventoryitemDisposedDate = "Disposed Date"
    $editObject->inventoryitemDisposedDestination = "Disposed Destination"
    $editObject->inventoryitemStorageLocation = "Storage Location"

    $query->updateInventoryItem($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs inventoryitems.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\InventoryItems\Delete();

    $query->setinventoryitemID("ID");

    $result = $api->executeRequest($query);

