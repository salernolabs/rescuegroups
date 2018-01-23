# IntakesStrayPickups

This is the documentation for the IntakesStrayPickups queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesStraypickups)

## Define
Performs intakesStraypickups.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Define();

    $result = $api->executeRequest($query);
Performs intakesStraypickups.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Define();


    $result = $api->executeRequest($query);

## View
Performs intakesStraypickups.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\View();

    $query->setid("Stray Pickup");

    $result = $api->executeRequest($query);

## Search
Performs intakesStraypickups.search search query. This query returns an array of [\RescueGroups\Objects\IntakesStrayPickup](../../../src/Objects/IntakesStrayPickup.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Search();
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
Performs intakesStraypickups.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesStrayPickup](../../../src/Objects/IntakesStrayPickup.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Add();

    $addObject = new \RescueGroups\Objects\IntakesStrayPickup();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->location = "Pickup Location"
    $addObject->address = "Pickup Street address"
    $addObject->city = "Pickup City"
    $addObject->state = "Pickup State/Province"
    $addObject->postalcode = "Pickup Postal Code"
    $addObject->finderId = "Found By"
    $addObject->staffId = "Pickup By"

    $query->addIntakesStrayPickup($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesStraypickups.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesStrayPickup](../../../src/Objects/IntakesStrayPickup.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Edit();

    $editObject = new \RescueGroups\Objects\IntakesStrayPickup();
    $editObject->id = "Stray Pickup"
    $editObject->animalId = "Animal"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->location = "Pickup Location"
    $editObject->address = "Pickup Street address"
    $editObject->city = "Pickup City"
    $editObject->state = "Pickup State/Province"
    $editObject->postalcode = "Pickup Postal Code"
    $editObject->finderId = "Found By"
    $editObject->staffId = "Pickup By"

    $query->updateIntakesStrayPickup($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesStraypickups.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Change();

    $query->setintakeId("Intake");
    $query->setanimalId("Animal");
    $query->setanimalConditionId("Condition");
    $query->setdate("Date");
    $query->setnotes("Notes");
    $query->setlocation("Pickup Location");
    $query->setaddress("Pickup Street address");
    $query->setcity("Pickup City");
    $query->setstate("Pickup State/Province");
    $query->setpostalcode("Pickup Postal Code");
    $query->setfinderId("Found By");
    $query->setstaffId("Pickup By");

    $result = $api->executeRequest($query);

