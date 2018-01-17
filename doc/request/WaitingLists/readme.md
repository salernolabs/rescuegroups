# WaitingLists

This is the documentation for the WaitingLists queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-waitinglists)

## View






Performs waitinglists.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\WaitingLists\View();

    $result = $api->executeRequest($query);


## Search

Performs waitinglists.search search query. This query returns an array of [\RescueGroups\Objects\WaitingList](../../src/Objects/WaitingList.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\WaitingLists\Search();
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




Performs waitinglists.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\WaitingList](../../src/Objects/WaitingList.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\WaitingLists\Add();

    $addObject = new \RescueGroups\Objects\WaitingList();
    $addObject->waitinglistName = "Name"
    $addObject->waitinglistType = "Type"
    $addObject->waitinglistComment = "Comment"

    $query->addWaitingList($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs waitinglists.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\WaitingList](../../src/Objects/WaitingList.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\WaitingLists\Edit();

    $editObject = new \RescueGroups\Objects\WaitingList();
    $editObject->waitinglistID = "ID"
    $editObject->waitinglistName = "Name"
    $editObject->waitinglistType = "Type"
    $editObject->waitinglistComment = "Comment"

    $query->updateWaitingList($editObject);

    $result = $api->executeRequest($query);




## Delete






Performs waitinglists.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\WaitingLists\Delete();

    $result = $api->executeRequest($query);


