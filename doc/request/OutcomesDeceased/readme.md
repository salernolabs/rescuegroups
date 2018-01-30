# OutcomesDeceased

This is the documentation for the OutcomesDeceased queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomesDeceased)

## Define
Performs outcomesDeceased.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Define();

    $result = $api->executeRequest($query);
## GetList
Performs outcomesDeceased.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\OutcomesDeceased\GetList();
    $result = $api->executeRequest($query);
## View
Performs outcomesDeceased.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesDeceased\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs outcomesDeceased.search search query. This query returns an array of [\RescueGroups\Objects\Search\OutcomesDeceased](../../../src/Objects/Search/OutcomesDeceased.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Search();
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
Performs outcomesDeceased.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\OutcomesDeceased](../../../src/Objects/OutcomesDeceased.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Add();

    $addObject = new \RescueGroups\Objects\OutcomesDeceased();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->reason = "Reason"

    $query->addOutcomesDeceased($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs outcomesDeceased.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\OutcomesDeceased](../../../src/Objects/OutcomesDeceased.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Edit();

    $editObject = new \RescueGroups\Objects\OutcomesDeceased();
    $editObject->id = "ID"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->reason = "Reason"

    $query->updateOutcomesDeceased($editObject);

    $result = $api->executeRequest($query);
## Change
Performs outcomesDeceased.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Change();

    $query->setOutcomeId("Outcome");
    $query->setAnimalConditionId("Condition");
    $query->setDate("Date");
    $query->setNotes("Notes");
    $query->setReason("Reason");

    $result = $api->executeRequest($query);

