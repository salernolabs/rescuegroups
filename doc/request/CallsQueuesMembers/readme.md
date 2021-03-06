# CallsQueuesMembers

This is the documentation for the CallsQueuesMembers queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsQueuesMembers)

## Define
Performs callsQueuesMembers.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Define();

    $result = $api->executeRequest($query);
## GetList
Performs callsQueuesMembers.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\GetList();
    $result = $api->executeRequest($query);
## View
Performs callsQueuesMembers.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs callsQueuesMembers.search search query. This query returns an array of [\RescueGroups\Objects\Search\CallsQueuesMember](../../../src/Objects/Search/CallsQueuesMember.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Search();
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
Performs callsQueuesMembers.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\CallsQueuesMember](../../../src/Objects/CallsQueuesMember.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Add();

    $addObject = new \RescueGroups\Objects\CallsQueuesMember();
    $addObject->queueId = "Queue"
    $addObject->manager = "Manager"

    $query->addCallsQueuesMember($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs callsQueuesMembers.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\CallsQueuesMember](../../../src/Objects/CallsQueuesMember.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Edit();

    $editObject = new \RescueGroups\Objects\CallsQueuesMember();
    $editObject->id = "ID"
    $editObject->contactId = "Contact"
    $editObject->queueId = "Queue"
    $editObject->manager = "Manager"

    $query->updateCallsQueuesMember($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs callsQueuesMembers.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Delete();

    $query->setId("ID");

    $result = $api->executeRequest($query);

