# OutcomesAdoptions

This is the documentation for the OutcomesAdoptions queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomesAdoptions)

## Define
Performs outcomesAdoptions.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Define();

    $result = $api->executeRequest($query);
## GetList
Performs outcomesAdoptions.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\GetList();
    $result = $api->executeRequest($query);
## View
Performs outcomesAdoptions.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs outcomesAdoptions.search search query. This query returns an array of [\RescueGroups\Objects\Search\OutcomesAdoption](../../../src/Objects/Search/OutcomesAdoption.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Search();
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
Performs outcomesAdoptions.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\OutcomesAdoption](../../../src/Objects/OutcomesAdoption.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Add();

    $addObject = new \RescueGroups\Objects\OutcomesAdoption();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->adoptionId = "Adoption"

    $query->addOutcomesAdoption($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs outcomesAdoptions.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\OutcomesAdoption](../../../src/Objects/OutcomesAdoption.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Edit();

    $editObject = new \RescueGroups\Objects\OutcomesAdoption();
    $editObject->id = "ID"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->adoptionId = "Adoption"

    $query->updateOutcomesAdoption($editObject);

    $result = $api->executeRequest($query);
## Change
Performs outcomesAdoptions.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Change();

    $query->setOutcomeId("Outcome");
    $query->setAnimalConditionId("Condition");
    $query->setDate("Date");
    $query->setNotes("Notes");
    $query->setAdoptionId("Adoption");

    $result = $api->executeRequest($query);

