# Calls

This is the documentation for the Calls queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-calls)

## Define






Performs calls.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Calls\Define();

    $result = $api->executeRequest($query);


## GetList


Performs calls.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Calls\GetList();
    $result = $api->executeRequest($query);






## View







Performs calls.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Calls\View();

    $result = $api->executeRequest($query);


## Search

Performs calls.search search query. This query returns an array of [\RescueGroups\Objects\Call](../../src/Objects/Call.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Calls\Search();
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




Performs calls.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\Call](../../src/Objects/Call.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Calls\Add();

    $addObject = new \RescueGroups\Objects\Call();
    $addObject->callAssignedID = "Assigned"
    $addObject->callStatusID = "Status"
    $addObject->callUrgencyID = "Urgency"
    $addObject->callCategoryID = "Category"
    $addObject->callQueueID = "Queue"
    $addObject->callDate = "Call date"

    $query->addCall($addObject);

    $result = $api->executeRequest($query);




## Edit



Performs calls.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Call](../../src/Objects/Call.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Calls\Edit();

    $editObject = new \RescueGroups\Objects\Call();
    $editObject->callID = "ID"
    $editObject->callContactID = "Contact"
    $editObject->callAssignedID = "Assigned"
    $editObject->callStatusID = "Status"
    $editObject->callUrgencyID = "Urgency"
    $editObject->callCategoryID = "Category"
    $editObject->callQueueID = "Queue"
    $editObject->callDate = "Call date"

    $query->updateCall($editObject);

    $result = $api->executeRequest($query);





