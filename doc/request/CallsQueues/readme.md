# CallsQueues

This is the documentation for the CallsQueues queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsQueues)

## GetList


Performs callsQueues.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\CallsQueues\GetList();
    $result = $api->executeRequest($query);





## View






Performs callsQueues.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsQueues\View();

    $result = $api->executeRequest($query);


## Search

Performs callsQueues.search search query. This query returns an array of [\RescueGroups\Objects\CallsQueue](../../src/Objects/CallsQueue.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\CallsQueues\Search();
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




Performs callsQueues.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\CallsQueue](../../src/Objects/CallsQueue.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\CallsQueues\Add();

    $addObject = new \RescueGroups\Objects\CallsQueue();
    $addObject->queueName = "Name"
    $addObject->queueFromEmail = "From Email Address"

    $query->addCallsQueue($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs callsQueues.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\CallsQueue](../../src/Objects/CallsQueue.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\CallsQueues\Edit();

    $editObject = new \RescueGroups\Objects\CallsQueue();
    $editObject->queueID = "ID"
    $editObject->queueName = "Name"
    $editObject->queueFromEmail = "From Email Address"
    $editObject->queueDefaultUrgencyID = "Default Urgency"

    $query->updateCallsQueue($editObject);

    $result = $api->executeRequest($query);




## Delete






Performs callsQueues.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsQueues\Delete();

    $result = $api->executeRequest($query);


