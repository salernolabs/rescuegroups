# IntakesImpounds

This is the documentation for the IntakesImpounds queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesImpounds)

## View






Performs intakesImpounds.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\View();

    $result = $api->executeRequest($query);


## Search

Performs intakesImpounds.search search query. This query returns an array of [\RescueGroups\Objects\IntakesImpound](../../src/Objects/IntakesImpound.php) objects.

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




Performs intakesImpounds.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesImpound](../../src/Objects/IntakesImpound.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Add();

    $addObject = new \RescueGroups\Objects\IntakesImpound();
    $addObject->intakesImpoundAnimalConditionID = "Condition"
    $addObject->intakesImpoundDate = "Date"
    $addObject->intakesImpoundNotes = "Notes"
    $addObject->intakesImpoundLocation = "Impound Location"
    $addObject->intakesImpoundAddress = "Impound Street address"
    $addObject->intakesImpoundCity = "Impound City"
    $addObject->intakesImpoundState = "Impound State/Province"
    $addObject->intakesImpoundPostalcode = "Impound Postal Code"
    $addObject->intakesImpoundFromID = "Impound From"
    $addObject->intakesImpoundStaffID = "Impound Performed By"
    $addObject->intakesImpoundReasonID = "Reason"

    $query->addIntakesImpound($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs intakesImpounds.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesImpound](../../src/Objects/IntakesImpound.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Edit();

    $editObject = new \RescueGroups\Objects\IntakesImpound();
    $editObject->intakesImpoundID = "Impound"
    $editObject->intakesImpoundAnimalID = "Animal"
    $editObject->intakesImpoundAnimalConditionID = "Condition"
    $editObject->intakesImpoundDate = "Date"
    $editObject->intakesImpoundNotes = "Notes"
    $editObject->intakesImpoundLocation = "Impound Location"
    $editObject->intakesImpoundAddress = "Impound Street address"
    $editObject->intakesImpoundCity = "Impound City"
    $editObject->intakesImpoundState = "Impound State/Province"
    $editObject->intakesImpoundPostalcode = "Impound Postal Code"
    $editObject->intakesImpoundFromID = "Impound From"
    $editObject->intakesImpoundStaffID = "Impound Performed By"
    $editObject->intakesImpoundReasonID = "Reason"

    $query->updateIntakesImpound($editObject);

    $result = $api->executeRequest($query);




## Change






Performs intakesImpounds.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesImpounds\Change();

    $result = $api->executeRequest($query);


