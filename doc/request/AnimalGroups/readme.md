# AnimalGroups

This is the documentation for the AnimalGroups queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalGroups)

## GetList


Performs animalGroups.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalGroups\GetList();
    $result = $api->executeRequest($query);





## View






Performs animalGroups.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalGroups\View();

    $result = $api->executeRequest($query);


## Search

Performs animalGroups.search search query. This query returns an array of [\RescueGroups\Objects\AnimalGroup](../../src/Objects/AnimalGroup.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalGroups\Search();
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




Performs animalGroups.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\AnimalGroup](../../src/Objects/AnimalGroup.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalGroups\Add();

    $addObject = new \RescueGroups\Objects\AnimalGroup();
    $addObject->groupName = "Name"

    $query->addAnimalGroup($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs animalGroups.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalGroup](../../src/Objects/AnimalGroup.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalGroups\Edit();

    $editObject = new \RescueGroups\Objects\AnimalGroup();
    $editObject->groupID = "ID"
    $editObject->groupName = "Name"
    $editObject->groupHeaderID = "Header"

    $query->updateAnimalGroup($editObject);

    $result = $api->executeRequest($query);




## Delete






Performs animalGroups.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalGroups\Delete();

    $result = $api->executeRequest($query);


