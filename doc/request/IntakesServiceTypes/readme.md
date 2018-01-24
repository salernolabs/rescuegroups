# IntakesServiceTypes

This is the documentation for the IntakesServiceTypes queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesServicetypes)

## Define
Performs intakesServicetypes.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\Define();

    $result = $api->executeRequest($query);
## GetList
Performs intakesServicetypes.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\GetList();
    $result = $api->executeRequest($query);
## View
Performs intakesServicetypes.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\View();

    $query->setId("Service");

    $result = $api->executeRequest($query);

## Search
Performs intakesServicetypes.search search query. This query returns an array of [\RescueGroups\Objects\IntakesServiceType](../../../src/Objects/IntakesServiceType.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\Search();
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
Performs intakesServicetypes.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesServiceType](../../../src/Objects/IntakesServiceType.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\Add();

    $addObject = new \RescueGroups\Objects\IntakesServiceType();
    $addObject->name = "Service"

    $query->addIntakesServiceType($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesServicetypes.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesServiceType](../../../src/Objects/IntakesServiceType.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\Edit();

    $editObject = new \RescueGroups\Objects\IntakesServiceType();
    $editObject->id = "Service"
    $editObject->name = "Service"

    $query->updateIntakesServiceType($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs intakesServicetypes.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\Delete();

    $query->setId("Service");

    $result = $api->executeRequest($query);

