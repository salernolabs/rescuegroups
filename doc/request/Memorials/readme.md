# Memorials

This is the documentation for the Memorials queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-memorials)

## Define
Performs memorials.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Memorials\Define();

    $result = $api->executeRequest($query);
## View
Performs memorials.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Memorials\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs memorials.search search query. This query returns an array of [\RescueGroups\Objects\Memorial](../../../src/Objects/Memorial.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Memorials\Search();
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
Performs memorials.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\Memorial](../../../src/Objects/Memorial.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Memorials\Add();

    $addObject = new \RescueGroups\Objects\Create\Memorial();
    $addObject->pictureBinary = "File"
    $addObject->name = "File name"
    $addObject->pictureOldFileName = "Old file name"
    $addObject->description = "Description"
    $addObject->order = "Order"

    $query->addMemorial($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs memorials.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Memorial](../../../src/Objects/Memorial.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Memorials\Edit();

    $editObject = new \RescueGroups\Objects\Memorial();
    $editObject->id = "ID"
    $editObject->pictureBinary = "File"
    $editObject->pictureOldFileName = "Old file name"
    $editObject->name = "File name"
    $editObject->description = "Description"

    $query->updateMemorial($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs memorials.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Memorials\Delete();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## GetSettings
Performs memorials.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Memorials\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs memorials.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Memorials\UpdateSettings();

    $query->setEnableMemorials("Enable the Memorials feature");
    $query->setMemorialsDonationOnlineStoreItem("Select Memorials donation store item");
    $query->setShowMemorialsAlphaLinks("Show alphabetical links (A-Z) on the Memorials page");

    $result = $api->executeRequest($query);

