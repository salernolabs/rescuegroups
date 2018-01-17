# AnimalsReasonsSurrender

This is the documentation for the AnimalsReasonsSurrender queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsReasonsSurrender)

## Define
Performs animalsReasonsSurrender.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\Define();

    $result = $api->executeRequest($query);
## GetList
Performs animalsReasonsSurrender.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\GetList();
    $result = $api->executeRequest($query);
## View
Performs animalsReasonsSurrender.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\View();

    $query->setreasonID("Reason ID");

    $result = $api->executeRequest($query);

## Search
Performs animalsReasonsSurrender.search search query. This query returns an array of [\RescueGroups\Objects\AnimalsReasonsSurrender](../../../src/Objects/AnimalsReasonsSurrender.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\Search();
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
Performs animalsReasonsSurrender.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\AnimalsReasonsSurrender](../../../src/Objects/AnimalsReasonsSurrender.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\Add();

    $addObject = new \RescueGroups\Objects\AnimalsReasonsSurrender();
    $addObject->reasonName = "Reason"

    $query->addAnimalsReasonsSurrender($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animalsReasonsSurrender.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalsReasonsSurrender](../../../src/Objects/AnimalsReasonsSurrender.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\Edit();

    $editObject = new \RescueGroups\Objects\AnimalsReasonsSurrender();
    $editObject->reasonID = "Reason ID"
    $editObject->reasonName = "Reason"

    $query->updateAnimalsReasonsSurrender($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs animalsReasonsSurrender.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\Delete();

    $query->setreasonID("Reason ID");

    $result = $api->executeRequest($query);

