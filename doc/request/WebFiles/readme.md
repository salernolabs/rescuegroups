# WebFiles

This is the documentation for the WebFiles queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-webfiles)

## Define
Performs webfiles.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebFiles\Define();

    $result = $api->executeRequest($query);
Performs webfiles.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebFiles\Define();


    $result = $api->executeRequest($query);

## GetList
Performs webfiles.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\WebFiles\GetList();
    $result = $api->executeRequest($query);
## Search
Performs webfiles.search search query. This query returns an array of [\RescueGroups\Objects\WebFile](../../../src/Objects/WebFile.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\WebFiles\Search();
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
Performs webfiles.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebFiles\View();

    $query->setid("ID");

    $result = $api->executeRequest($query);

## Add
Performs webfiles.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\WebFile](../../../src/Objects/WebFile.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\WebFiles\Add();

    $addObject = new \RescueGroups\Objects\Create\WebFile();
    $addObject->binary = "File"
    $addObject->oldFileName = "Old file name"
    $addObject->description = "Description"
    $addObject->status = "Status"
    $addObject->displayInline = "Inline"

    $query->addWebFile($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs webfiles.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\WebFile](../../../src/Objects/WebFile.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\WebFiles\Edit();

    $editObject = new \RescueGroups\Objects\WebFile();
    $editObject->id = "ID"
    $editObject->description = "Description"
    $editObject->status = "Status"
    $editObject->displayInline = "Inline"
    $editObject->roleId = "Security Role"

    $query->updateWebFile($editObject);

    $result = $api->executeRequest($query);
