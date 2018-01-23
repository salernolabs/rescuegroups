# IntakesBornInRescueShelter

This is the documentation for the IntakesBornInRescueShelter queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesBorninrescueshelter)

## Define
Performs intakesBorninrescueshelter.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Define();

    $result = $api->executeRequest($query);
Performs intakesBorninrescueshelter.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Define();


    $result = $api->executeRequest($query);

## View
Performs intakesBorninrescueshelter.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\View();

    $query->setid("Born In Rescue/Shelter");

    $result = $api->executeRequest($query);

## Search
Performs intakesBorninrescueshelter.search search query. This query returns an array of [\RescueGroups\Objects\IntakesBornInRescueShelter](../../../src/Objects/IntakesBornInRescueShelter.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Search();
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
Performs intakesBorninrescueshelter.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesBornInRescueShelter](../../../src/Objects/IntakesBornInRescueShelter.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Add();

    $addObject = new \RescueGroups\Objects\IntakesBornInRescueShelter();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"

    $query->addIntakesBornInRescueShelter($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesBorninrescueshelter.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesBornInRescueShelter](../../../src/Objects/IntakesBornInRescueShelter.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Edit();

    $editObject = new \RescueGroups\Objects\IntakesBornInRescueShelter();
    $editObject->id = "Born In Rescue/Shelter"
    $editObject->animalId = "Animal"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"

    $query->updateIntakesBornInRescueShelter($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesBorninrescueshelter.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Change();

    $query->setintakeId("Intake");
    $query->setanimalId("Animal");
    $query->setanimalConditionId("Condition");
    $query->setdate("Date");
    $query->setnotes("Notes");

    $result = $api->executeRequest($query);

