# IntakesStrayDropoffs

This is the documentation for the IntakesStrayDropoffs queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesStraydropoffs)

## Define
Performs intakesStraydropoffs.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Define();

    $result = $api->executeRequest($query);
## View
Performs intakesStraydropoffs.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\View();

    $query->setintakesStraydropoffID("Stray Pickup");

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
    $addObject->intakesStraydropoffAnimalConditionID = "Condition"
    $addObject->intakesStraydropoffDate = "Date"
    $addObject->intakesStraydropoffNotes = "Notes"
    $addObject->intakesStraydropoffFoundLocation = "Found Location"
    $addObject->intakesStraydropoffFoundAddress = "Found Street address"
    $addObject->intakesStraydropoffFoundCity = "Found City"
    $addObject->intakesStraydropoffFoundState = "Found State/Province"
    $addObject->intakesStraydropoffFoundPostalcode = "Found Postal Code"
    $addObject->intakesStraydropoffFinderID = "Dropped off by"

    $query->addIntakesStrayDropoff($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesStraydropoffs.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesStrayDropoff](../../../src/Objects/IntakesStrayDropoff.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Edit();

    $editObject = new \RescueGroups\Objects\IntakesStrayDropoff();
    $editObject->intakesStraydropoffID = "Stray Pickup"
    $editObject->intakesStraydropoffAnimalID = "Animal"
    $editObject->intakesStraydropoffAnimalConditionID = "Condition"
    $editObject->intakesStraydropoffDate = "Date"
    $editObject->intakesStraydropoffNotes = "Notes"
    $editObject->intakesStraydropoffFoundLocation = "Found Location"
    $editObject->intakesStraydropoffFoundAddress = "Found Street address"
    $editObject->intakesStraydropoffFoundCity = "Found City"
    $editObject->intakesStraydropoffFoundState = "Found State/Province"
    $editObject->intakesStraydropoffFoundPostalcode = "Found Postal Code"
    $editObject->intakesStraydropoffFinderID = "Dropped off by"

    $query->updateIntakesStrayDropoff($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesStraydropoffs.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Change();

    $query->setintakeID("Intake");
    $query->setintakesStraydropoffAnimalID("Animal");
    $query->setintakesStraydropoffAnimalConditionID("Condition");
    $query->setintakesStraydropoffDate("Date");
    $query->setintakesStraydropoffNotes("Notes");
    $query->setintakesStraydropoffFoundLocation("Found Location");
    $query->setintakesStraydropoffFoundAddress("Found Street address");
    $query->setintakesStraydropoffFoundCity("Found City");
    $query->setintakesStraydropoffFoundState("Found State/Province");
    $query->setintakesStraydropoffFoundPostalcode("Found Postal Code");
    $query->setintakesStraydropoffFinderID("Dropped off by");

    $result = $api->executeRequest($query);

