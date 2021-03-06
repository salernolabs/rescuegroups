# OutcomesReleases

This is the documentation for the OutcomesReleases queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomesReleases)

## Define
Performs outcomesReleases.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesReleases\Define();

    $result = $api->executeRequest($query);
## GetList
Performs outcomesReleases.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\OutcomesReleases\GetList();
    $result = $api->executeRequest($query);
## View
Performs outcomesReleases.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesReleases\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs outcomesReleases.search search query. This query returns an array of [\RescueGroups\Objects\Search\OutcomesReleas](../../../src/Objects/Search/OutcomesReleas.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\OutcomesReleases\Search();
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
Performs outcomesReleases.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\OutcomesReleas](../../../src/Objects/OutcomesReleas.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\OutcomesReleases\Add();

    $addObject = new \RescueGroups\Objects\OutcomesReleas();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->location = "Location"
    $addObject->address = "Street address"
    $addObject->city = "City"
    $addObject->state = "State/Province"
    $addObject->postalcode = "Postal Code"
    $addObject->byId = "Released By"

    $query->addOutcomesReleas($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs outcomesReleases.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\OutcomesReleas](../../../src/Objects/OutcomesReleas.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\OutcomesReleases\Edit();

    $editObject = new \RescueGroups\Objects\OutcomesReleas();
    $editObject->id = "ID"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->location = "Location"
    $editObject->address = "Street address"
    $editObject->city = "City"
    $editObject->state = "State/Province"
    $editObject->postalcode = "Postal Code"
    $editObject->byId = "Released By"

    $query->updateOutcomesReleas($editObject);

    $result = $api->executeRequest($query);
## Change
Performs outcomesReleases.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesReleases\Change();

    $query->setOutcomeId("Outcome");
    $query->setAnimalConditionId("Condition");
    $query->setDate("Date");
    $query->setNotes("Notes");
    $query->setLocation("Location");
    $query->setAddress("Street address");
    $query->setCity("City");
    $query->setState("State/Province");
    $query->setPostalcode("Postal Code");
    $query->setById("Released By");

    $result = $api->executeRequest($query);

