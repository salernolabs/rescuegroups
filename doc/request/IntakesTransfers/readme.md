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

    $query->setintakesTransferID("Owner Surrender");

    $result = $api->executeRequest($query);

## Search
Performs intakesTransfers.search search query. This query returns an array of [\RescueGroups\Objects\IntakesTransfer](../../../src/Objects/IntakesTransfer.php) objects.

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
    $addObject->intakesTransferAnimalConditionID = "Condition"
    $addObject->intakesTransferDate = "Date"
    $addObject->intakesTransferNotes = "Notes"
    $addObject->intakesTransferFromID = "Transferred From"
    $addObject->intakesTransferCoalitionMember = "Coalition Member"
    $addObject->intakesTransferReasonID = "Transfer Reason"

    $query->addIntakesTransfer($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesTransfers.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesTransfer](../../../src/Objects/IntakesTransfer.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesTransfers\Edit();

    $editObject = new \RescueGroups\Objects\IntakesTransfer();
    $editObject->intakesTransferID = "Owner Surrender"
    $editObject->intakesTransferAnimalID = "Animal"
    $editObject->intakesTransferAnimalConditionID = "Condition"
    $editObject->intakesTransferDate = "Date"
    $editObject->intakesTransferNotes = "Notes"
    $editObject->intakesTransferFromID = "Transferred From"
    $editObject->intakesTransferCoalitionMember = "Coalition Member"
    $editObject->intakesTransferReasonID = "Transfer Reason"

    $query->updateIntakesTransfer($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesTransfers.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesTransfers\Change();

    $query->setintakeID("Intake");
    $query->setintakesTransferAnimalID("Animal");
    $query->setintakesTransferAnimalConditionID("Condition");
    $query->setintakesTransferDate("Date");
    $query->setintakesTransferNotes("Notes");
    $query->setintakesTransferFromID("Transferred From");
    $query->setintakesTransferCoalitionMember("Coalition Member");
    $query->setintakesTransferReasonID("Transfer Reason");

    $result = $api->executeRequest($query);

