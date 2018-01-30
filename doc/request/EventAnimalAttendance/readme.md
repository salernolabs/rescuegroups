# EventAnimalAttendance

This is the documentation for the EventAnimalAttendance queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-eventanimalattendance)

## Define
Performs eventanimalattendance.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\Define();

    $result = $api->executeRequest($query);
## PublicView
Performs eventanimalattendance.publicView query.

### Example Query

    $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\PublicView();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## View
Performs eventanimalattendance.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## PublicSearch
Performs eventanimalattendance.publicSearch search query. This query returns an array of [\RescueGroups\Objects\Search\EventAnimalAttendance](../../../src/Objects/Search/EventAnimalAttendance.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\PublicSearch();
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
## Search
Performs eventanimalattendance.search search query. This query returns an array of [\RescueGroups\Objects\Search\EventAnimalAttendance](../../../src/Objects/Search/EventAnimalAttendance.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\Search();
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
Performs eventanimalattendance.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\EventAnimalAttendance](../../../src/Objects/EventAnimalAttendance.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\Add();

    $addObject = new \RescueGroups\Objects\EventAnimalAttendance();
    $addObject->status = "Status"
    $addObject->eventId = "Event"

    $query->addEventAnimalAttendance($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs eventanimalattendance.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\EventAnimalAttendance](../../../src/Objects/EventAnimalAttendance.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\Edit();

    $editObject = new \RescueGroups\Objects\EventAnimalAttendance();
    $editObject->id = "ID"
    $editObject->animalId = "Animal"
    $editObject->status = "Status"
    $editObject->eventId = "Event"

    $query->updateEventAnimalAttendance($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs eventanimalattendance.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\Delete();

    $query->setId("ID");

    $result = $api->executeRequest($query);

