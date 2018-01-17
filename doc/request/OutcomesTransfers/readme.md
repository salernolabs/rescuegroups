# OutcomesTransfers

This is the documentation for the OutcomesTransfers queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomesTransfers)

## GetList


Performs outcomesTransfers.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\OutcomesTransfers\GetList();
    $result = $api->executeRequest($query);





## View






Performs outcomesTransfers.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesTransfers\View();

    $result = $api->executeRequest($query);


## Search

Performs outcomesTransfers.search search query. This query returns an array of [\RescueGroups\Objects\OutcomesTransfer](../../src/Objects/OutcomesTransfer.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Search();
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




Performs outcomesTransfers.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\OutcomesTransfer](../../src/Objects/OutcomesTransfer.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Add();

    $addObject = new \RescueGroups\Objects\OutcomesTransfer();
    $addObject->outcomesTransferAnimalConditionID = "Condition"
    $addObject->outcomesTransferDate = "Date"
    $addObject->outcomesTransferNotes = "Notes"
    $addObject->outcomesTransferReceiveID = "Received"
    $addObject->outcomesTransferCoalitionMember = "Coalition Member"
    $addObject->outcomesTransferReasonID = "Transfer Reason"

    $query->addOutcomesTransfer($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs outcomesTransfers.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\OutcomesTransfer](../../src/Objects/OutcomesTransfer.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Edit();

    $editObject = new \RescueGroups\Objects\OutcomesTransfer();
    $editObject->outcomesTransferID = "ID"
    $editObject->outcomesTransferAnimalConditionID = "Condition"
    $editObject->outcomesTransferDate = "Date"
    $editObject->outcomesTransferNotes = "Notes"
    $editObject->outcomesTransferReceiveID = "Received"
    $editObject->outcomesTransferCoalitionMember = "Coalition Member"
    $editObject->outcomesTransferReasonID = "Transfer Reason"

    $query->updateOutcomesTransfer($editObject);

    $result = $api->executeRequest($query);




## Change






Performs outcomesTransfers.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Change();

    $result = $api->executeRequest($query);


