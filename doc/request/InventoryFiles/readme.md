# InventoryFiles

This is the documentation for the InventoryFiles queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-inventoryfiles)

## Define






Performs inventoryfiles.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\InventoryFiles\Define();

    $result = $api->executeRequest($query);


## GetList


Performs inventoryfiles.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\InventoryFiles\GetList();
    $result = $api->executeRequest($query);






## Search

Performs inventoryfiles.search search query. This query returns an array of [\RescueGroups\Objects\InventoryFile](../../src/Objects/InventoryFile.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\InventoryFiles\Search();
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







## View







Performs inventoryfiles.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\InventoryFiles\View();

    $result = $api->executeRequest($query);


## Add





Performs inventoryfiles.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\InventoryFile](../../src/Objects/InventoryFile.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\InventoryFiles\Add();

    $addObject = new \RescueGroups\Objects\Create\InventoryFile();
    $addObject->inventoryfileBinary = "File"
    $addObject->inventoryfileOldFileName = "Old file name"
    $addObject->inventoryfileDescription = "Description"
    $addObject->inventoryfileStatus = "Status"
    $addObject->inventoryfileDisplayInline = "Inline"

    $query->addInventoryFile($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs inventoryfiles.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\InventoryFile](../../src/Objects/InventoryFile.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\InventoryFiles\Edit();

    $editObject = new \RescueGroups\Objects\InventoryFile();
    $editObject->inventoryfileID = "File"
    $editObject->inventoryfileItemID = "ID"
    $editObject->inventoryfileDescription = "Description"
    $editObject->inventoryfileStatus = "Status"
    $editObject->inventoryfileDisplayInline = "Inline"

    $query->updateInventoryFile($editObject);

    $result = $api->executeRequest($query);





