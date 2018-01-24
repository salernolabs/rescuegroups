# CallsLogEntries

This is the documentation for the CallsLogEntries queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsLogentries)

## Define
Performs callsLogentries.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsLogEntries\Define();

    $result = $api->executeRequest($query);
## View
Performs callsLogentries.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsLogEntries\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs callsLogentries.search search query. This query returns an array of [\RescueGroups\Objects\CallsLogEntry](../../../src/Objects/CallsLogEntry.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\CallsLogEntries\Search();
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
Performs callsLogentries.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\CallsLogEntry](../../../src/Objects/CallsLogEntry.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\CallsLogEntries\Add();

    $addObject = new \RescueGroups\Objects\Create\CallsLogEntry();
    $addObject->contactId = "Contact"
    $addObject->date = "Date"
    $addObject->outcomeId = "Outcome"
    $addObject->comments = "Comments"

    $query->addCallsLogEntry($addObject);

    $result = $api->executeRequest($query);
