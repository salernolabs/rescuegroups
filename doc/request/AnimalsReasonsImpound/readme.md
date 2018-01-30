# AnimalsReasonsImpound

This is the documentation for the AnimalsReasonsImpound queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsReasonsImpound)

## Define
Performs animalsReasonsImpound.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\Define();

    $result = $api->executeRequest($query);
## GetList
Performs animalsReasonsImpound.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\GetList();
    $result = $api->executeRequest($query);
## View
Performs animalsReasonsImpound.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\View();

    $query->setId("Reason ID");

    $result = $api->executeRequest($query);

## Search
Performs animalsReasonsImpound.search search query. This query returns an array of [\RescueGroups\Objects\Search\AnimalsReasonsImpound](../../../src/Objects/Search/AnimalsReasonsImpound.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\Search();
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
Performs animalsReasonsImpound.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\AnimalsReasonsImpound](../../../src/Objects/AnimalsReasonsImpound.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\Add();

    $addObject = new \RescueGroups\Objects\AnimalsReasonsImpound();
    $addObject->name = "Reason"

    $query->addAnimalsReasonsImpound($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animalsReasonsImpound.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalsReasonsImpound](../../../src/Objects/AnimalsReasonsImpound.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\Edit();

    $editObject = new \RescueGroups\Objects\AnimalsReasonsImpound();
    $editObject->id = "Reason ID"
    $editObject->name = "Reason"

    $query->updateAnimalsReasonsImpound($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs animalsReasonsImpound.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\Delete();

    $query->setId("Reason ID");

    $result = $api->executeRequest($query);

