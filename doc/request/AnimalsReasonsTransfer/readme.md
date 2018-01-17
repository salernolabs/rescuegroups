# AnimalsReasonsTransfer

This is the documentation for the AnimalsReasonsTransfer queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsReasonsTransfer)

## GetList


Performs animalsReasonsTransfer.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\GetList();
    $result = $api->executeRequest($query);





## View






Performs animalsReasonsTransfer.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\View();

    $result = $api->executeRequest($query);


## Search

Performs animalsReasonsTransfer.search search query. This query returns an array of [\RescueGroups\Objects\AnimalsReasonsTransfer](../../src/Objects/AnimalsReasonsTransfer.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\Search();
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




Performs animalsReasonsTransfer.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\AnimalsReasonsTransfer](../../src/Objects/AnimalsReasonsTransfer.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\Add();

    $addObject = new \RescueGroups\Objects\AnimalsReasonsTransfer();
    $addObject->reasonName = "Reason"

    $query->addAnimalsReasonsTransfer($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs animalsReasonsTransfer.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalsReasonsTransfer](../../src/Objects/AnimalsReasonsTransfer.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\Edit();

    $editObject = new \RescueGroups\Objects\AnimalsReasonsTransfer();
    $editObject->reasonID = "Reason ID"
    $editObject->reasonName = "Reason"

    $query->updateAnimalsReasonsTransfer($editObject);

    $result = $api->executeRequest($query);




## Delete






Performs animalsReasonsTransfer.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\Delete();

    $result = $api->executeRequest($query);


