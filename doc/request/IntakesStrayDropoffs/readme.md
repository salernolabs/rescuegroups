# IntakesStrayDropoffs

This is the documentation for the IntakesStrayDropoffs queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesStraydropoffs)

## Define
Performs intakesStraydropoffs.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Define();

    $result = $api->executeRequest($query);
Performs intakesStraydropoffs.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Define();


    $result = $api->executeRequest($query);

## View
Performs intakesStraydropoffs.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\View();

    $query->setid("Stray Pickup");

    $result = $api->executeRequest($query);

## Search
Performs intakesStraydropoffs.search search query. This query returns an array of [\RescueGroups\Objects\IntakesStrayDropoff](../../../src/Objects/IntakesStrayDropoff.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Search();
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
Performs intakesStraydropoffs.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesStrayDropoff](../../../src/Objects/IntakesStrayDropoff.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Add();

    $addObject = new \RescueGroups\Objects\IntakesStrayDropoff();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->foundLocation = "Found Location"
    $addObject->foundAddress = "Found Street address"
    $addObject->foundCity = "Found City"
    $addObject->foundState = "Found State/Province"
    $addObject->foundPostalcode = "Found Postal Code"
    $addObject->finderId = "Dropped off by"

    $query->addIntakesStrayDropoff($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesStraydropoffs.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesStrayDropoff](../../../src/Objects/IntakesStrayDropoff.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Edit();

    $editObject = new \RescueGroups\Objects\IntakesStrayDropoff();
    $editObject->id = "Stray Pickup"
    $editObject->animalId = "Animal"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->foundLocation = "Found Location"
    $editObject->foundAddress = "Found Street address"
    $editObject->foundCity = "Found City"
    $editObject->foundState = "Found State/Province"
    $editObject->foundPostalcode = "Found Postal Code"
    $editObject->finderId = "Dropped off by"

    $query->updateIntakesStrayDropoff($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesStraydropoffs.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Change();

    $query->setintakeId("Intake");
    $query->setanimalId("Animal");
    $query->setanimalConditionId("Condition");
    $query->setdate("Date");
    $query->setnotes("Notes");
    $query->setfoundLocation("Found Location");
    $query->setfoundAddress("Found Street address");
    $query->setfoundCity("Found City");
    $query->setfoundState("Found State/Province");
    $query->setfoundPostalcode("Found Postal Code");
    $query->setfinderId("Dropped off by");

    $result = $api->executeRequest($query);

