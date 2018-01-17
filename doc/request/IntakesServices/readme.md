# IntakesServices

This is the documentation for the IntakesServices queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesServices)

## Define






Performs intakesServices.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesServices\Define();

    $result = $api->executeRequest($query);


## View







Performs intakesServices.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesServices\View();

    $result = $api->executeRequest($query);


## Search

Performs intakesServices.search search query. This query returns an array of [\RescueGroups\Objects\IntakesService](../../src/Objects/IntakesService.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesServices\Search();
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




Performs intakesServices.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesService](../../src/Objects/IntakesService.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesServices\Add();

    $addObject = new \RescueGroups\Objects\IntakesService();
    $addObject->intakesServiceAnimalConditionID = "Condition"
    $addObject->intakesServiceDate = "Date"
    $addObject->intakesServiceNotes = "Notes"
    $addObject->intakesServiceOwnerID = "Owner"
    $addObject->intakesServiceServicetypeID = "Service"

    $query->addIntakesService($addObject);

    $result = $api->executeRequest($query);




## Edit



Performs intakesServices.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesService](../../src/Objects/IntakesService.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesServices\Edit();

    $editObject = new \RescueGroups\Objects\IntakesService();
    $editObject->intakesServiceID = "Service"
    $editObject->intakesServiceAnimalID = "Animal"
    $editObject->intakesServiceAnimalConditionID = "Condition"
    $editObject->intakesServiceDate = "Date"
    $editObject->intakesServiceNotes = "Notes"
    $editObject->intakesServiceOwnerID = "Owner"
    $editObject->intakesServiceServicetypeID = "Service"

    $query->updateIntakesService($editObject);

    $result = $api->executeRequest($query);





## Change







Performs intakesServices.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesServices\Change();

    $result = $api->executeRequest($query);


