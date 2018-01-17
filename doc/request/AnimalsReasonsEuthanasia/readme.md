# AnimalsReasonsEuthanasia

This is the documentation for the AnimalsReasonsEuthanasia queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsReasonsEuthanasia)

## Define
Performs animalsReasonsEuthanasia.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\Define();

    $result = $api->executeRequest($query);
## GetList
Performs animalsReasonsEuthanasia.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\GetList();
    $result = $api->executeRequest($query);
## View
Performs animalsReasonsEuthanasia.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\View();

    $query->setreasonID("Reason ID");

    $result = $api->executeRequest($query);

## Search
Performs animalsReasonsEuthanasia.search search query. This query returns an array of [\RescueGroups\Objects\AnimalsReasonsEuthanasia](../../../src/Objects/AnimalsReasonsEuthanasia.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\Search();
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
Performs animalsReasonsEuthanasia.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\AnimalsReasonsEuthanasia](../../../src/Objects/AnimalsReasonsEuthanasia.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\Add();

    $addObject = new \RescueGroups\Objects\AnimalsReasonsEuthanasia();
    $addObject->reasonName = "Reason"

    $query->addAnimalsReasonsEuthanasia($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animalsReasonsEuthanasia.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalsReasonsEuthanasia](../../../src/Objects/AnimalsReasonsEuthanasia.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\Edit();

    $editObject = new \RescueGroups\Objects\AnimalsReasonsEuthanasia();
    $editObject->reasonID = "Reason ID"
    $editObject->reasonName = "Reason"

    $query->updateAnimalsReasonsEuthanasia($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs animalsReasonsEuthanasia.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\Delete();

    $query->setreasonID("Reason ID");

    $result = $api->executeRequest($query);

