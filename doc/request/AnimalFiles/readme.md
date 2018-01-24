# AnimalFiles

This is the documentation for the AnimalFiles queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalFiles)

## Define
Performs animalFiles.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalFiles\Define();

    $result = $api->executeRequest($query);
## GetList
Performs animalFiles.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalFiles\GetList();
    $result = $api->executeRequest($query);
## Search
Performs animalFiles.search search query. This query returns an array of [\RescueGroups\Objects\AnimalFile](../../../src/Objects/AnimalFile.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalFiles\Search();
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
Performs animalFiles.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalFiles\View();

    $query->setId("File ID");

    $result = $api->executeRequest($query);

## Add
Performs animalFiles.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\AnimalFile](../../../src/Objects/AnimalFile.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalFiles\Add();

    $addObject = new \RescueGroups\Objects\Create\AnimalFile();
    $addObject->binary = "File"
    $addObject->oldFileName = "Old file name"
    $addObject->description = "Description"
    $addObject->status = "Status"
    $addObject->displayInline = "Inline"
    $addObject->public = "Public"

    $query->addAnimalFile($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animalFiles.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalFile](../../../src/Objects/AnimalFile.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalFiles\Edit();

    $editObject = new \RescueGroups\Objects\AnimalFile();
    $editObject->id = "File ID"
    $editObject->animalId = "Animal"
    $editObject->description = "Description"
    $editObject->status = "Status"
    $editObject->displayInline = "Inline"
    $editObject->public = "Public"

    $query->updateAnimalFile($editObject);

    $result = $api->executeRequest($query);
