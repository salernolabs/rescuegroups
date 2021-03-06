# WebImages

This is the documentation for the WebImages queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-webimages)

## Define
Performs webimages.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebImages\Define();

    $result = $api->executeRequest($query);
## GetList
Performs webimages.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\WebImages\GetList();
    $result = $api->executeRequest($query);
## Search
Performs webimages.search search query. This query returns an array of [\RescueGroups\Objects\Search\WebImage](../../../src/Objects/Search/WebImage.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\WebImages\Search();
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
Performs webimages.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebImages\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Add
Performs webimages.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\WebImage](../../../src/Objects/WebImage.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\WebImages\Add();

    $addObject = new \RescueGroups\Objects\Create\WebImage();
    $addObject->binary = "File"
    $addObject->oldFileName = "Original File Name"
    $addObject->name = "Name"

    $query->addWebImage($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs webimages.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\WebImage](../../../src/Objects/WebImage.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\WebImages\Edit();

    $editObject = new \RescueGroups\Objects\WebImage();
    $editObject->id = "ID"
    $editObject->name = "Name"

    $query->updateWebImage($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs webimages.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebImages\Delete();

    $query->setId("ID");

    $result = $api->executeRequest($query);

