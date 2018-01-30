# IntakesTransfers

This is the documentation for the IntakesTransfers queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesTransfers)

## Define
Performs intakesTransfers.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesTransfers\Define();

    $result = $api->executeRequest($query);
## View
Performs intakesTransfers.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesTransfers\View();

    $query->setId("Owner Surrender");

    $result = $api->executeRequest($query);

## Search
Performs intakesTransfers.search search query. This query returns an array of [\RescueGroups\Objects\Search\IntakesTransfer](../../../src/Objects/Search/IntakesTransfer.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesTransfers\Search();
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
Performs intakesTransfers.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesTransfer](../../../src/Objects/IntakesTransfer.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesTransfers\Add();

    $addObject = new \RescueGroups\Objects\IntakesTransfer();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->fromId = "Transferred From"
    $addObject->coalitionMember = "Coalition Member"
    $addObject->reasonId = "Transfer Reason"

    $query->addIntakesTransfer($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesTransfers.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesTransfer](../../../src/Objects/IntakesTransfer.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesTransfers\Edit();

    $editObject = new \RescueGroups\Objects\IntakesTransfer();
    $editObject->id = "Owner Surrender"
    $editObject->animalId = "Animal"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->fromId = "Transferred From"
    $editObject->coalitionMember = "Coalition Member"
    $editObject->reasonId = "Transfer Reason"

    $query->updateIntakesTransfer($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesTransfers.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesTransfers\Change();

    $query->setIntakeId("Intake");
    $query->setAnimalId("Animal");
    $query->setAnimalConditionId("Condition");
    $query->setDate("Date");
    $query->setNotes("Notes");
    $query->setFromId("Transferred From");
    $query->setCoalitionMember("Coalition Member");
    $query->setReasonId("Transfer Reason");

    $result = $api->executeRequest($query);

