# VolunteerHours

This is the documentation for the VolunteerHours queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-volunteerHours)

## Define
Performs volunteerHours.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Define();

    $result = $api->executeRequest($query);
Performs volunteerHours.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Define();


    $result = $api->executeRequest($query);

## Search
Performs volunteerHours.search search query. This query returns an array of [\RescueGroups\Objects\VolunteerHour](../../../src/Objects/VolunteerHour.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Search();
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
Performs volunteerHours.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\VolunteerHours\View();

    $query->setid("ID");

    $result = $api->executeRequest($query);

## Add
Performs volunteerHours.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\VolunteerHour](../../../src/Objects/VolunteerHour.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Add();

    $addObject = new \RescueGroups\Objects\VolunteerHour();
    $addObject->volunteerDate = "Date"
    $addObject->volunteerLength = "Hours"
    $addObject->volunteerTask = "Task"

    $query->addVolunteerHour($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs volunteerHours.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\VolunteerHour](../../../src/Objects/VolunteerHour.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Edit();

    $editObject = new \RescueGroups\Objects\VolunteerHour();
    $editObject->id = "ID"
    $editObject->volunteerId = "Volunteer"
    $editObject->volunteerDate = "Date"
    $editObject->volunteerLength = "Hours"
    $editObject->volunteerTask = "Task"

    $query->updateVolunteerHour($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs volunteerHours.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Delete();

    $query->setid("ID");

    $result = $api->executeRequest($query);

