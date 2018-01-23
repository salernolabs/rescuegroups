# IntakesImpounds

This is the documentation for the IntakesImpounds queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesImpounds)

## Define
Performs intakesImpounds.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Define();

    $result = $api->executeRequest($query);
Performs intakesImpounds.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Define();


    $result = $api->executeRequest($query);

## View
Performs intakesImpounds.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\View();

    $query->setid("Impound");

    $result = $api->executeRequest($query);

## Search
Performs intakesImpounds.search search query. This query returns an array of [\RescueGroups\Objects\IntakesImpound](../../../src/Objects/IntakesImpound.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Search();
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
Performs intakesImpounds.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesImpound](../../../src/Objects/IntakesImpound.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Add();

    $addObject = new \RescueGroups\Objects\IntakesImpound();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->location = "Impound Location"
    $addObject->address = "Impound Street address"
    $addObject->city = "Impound City"
    $addObject->state = "Impound State/Province"
    $addObject->postalcode = "Impound Postal Code"
    $addObject->fromId = "Impound From"
    $addObject->staffId = "Impound Performed By"
    $addObject->reasonId = "Reason"

    $query->addIntakesImpound($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesImpounds.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesImpound](../../../src/Objects/IntakesImpound.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Edit();

    $editObject = new \RescueGroups\Objects\IntakesImpound();
    $editObject->id = "Impound"
    $editObject->animalId = "Animal"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->location = "Impound Location"
    $editObject->address = "Impound Street address"
    $editObject->city = "Impound City"
    $editObject->state = "Impound State/Province"
    $editObject->postalcode = "Impound Postal Code"
    $editObject->fromId = "Impound From"
    $editObject->staffId = "Impound Performed By"
    $editObject->reasonId = "Reason"

    $query->updateIntakesImpound($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesImpounds.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Change();

    $query->setintakeId("Intake");
    $query->setanimalId("Animal");
    $query->setanimalConditionId("Condition");
    $query->setdate("Date");
    $query->setnotes("Notes");
    $query->setlocation("Impound Location");
    $query->setaddress("Impound Street address");
    $query->setcity("Impound City");
    $query->setstate("Impound State/Province");
    $query->setpostalcode("Impound Postal Code");
    $query->setfromId("Impound From");
    $query->setstaffId("Impound Performed By");
    $query->setreasonId("Reason");

    $result = $api->executeRequest($query);

