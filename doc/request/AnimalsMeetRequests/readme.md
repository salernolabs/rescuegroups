# AnimalsMeetRequests

This is the documentation for the AnimalsMeetRequests queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsMeetrequests)

## Define
Performs animalsMeetrequests.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Define();

    $result = $api->executeRequest($query);
## Search
Performs animalsMeetrequests.search search query. This query returns an array of [\RescueGroups\Objects\AnimalsMeetRequest](../../../src/Objects/AnimalsMeetRequest.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Search();
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
## View
Performs animalsMeetrequests.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\View();

    $query->setmeetrequestID("Meet Request ID");

    $result = $api->executeRequest($query);

## Add
Performs animalsMeetrequests.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\AnimalsMeetRequest](../../../src/Objects/AnimalsMeetRequest.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Add();

    $addObject = new \RescueGroups\Objects\AnimalsMeetRequest();
    $addObject->meetrequestContactID = "Contact ID"
    $addObject->meetrequestEventID = "Event ID"
    $addObject->meetrequestLocationID = "Location ID"
    $addObject->meetrequestDate = "Date"

    $query->addAnimalsMeetRequest($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animalsMeetrequests.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalsMeetRequest](../../../src/Objects/AnimalsMeetRequest.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Edit();

    $editObject = new \RescueGroups\Objects\AnimalsMeetRequest();
    $editObject->meetrequestID = "Meet Request ID"
    $editObject->meetrequestAnimalID = "Animal ID"
    $editObject->meetrequestContactID = "Contact ID"
    $editObject->meetrequestEventID = "Event ID"
    $editObject->meetrequestLocationID = "Location ID"
    $editObject->meetrequestDate = "Date"

    $query->updateAnimalsMeetRequest($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs animalsMeetrequests.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Delete();

    $query->setmeetrequestID("Meet Request ID");

    $result = $api->executeRequest($query);

