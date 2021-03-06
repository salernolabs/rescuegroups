# InventoryLoaners

This is the documentation for the InventoryLoaners queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-inventoryLoaners)

## Define
Performs inventoryLoaners.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Define();

    $result = $api->executeRequest($query);
## View
Performs inventoryLoaners.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs inventoryLoaners.search search query. This query returns an array of [\RescueGroups\Objects\Search\InventoryLoaner](../../../src/Objects/Search/InventoryLoaner.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Search();
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
Performs inventoryLoaners.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\InventoryLoaner](../../../src/Objects/InventoryLoaner.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Add();

    $addObject = new \RescueGroups\Objects\InventoryLoaner();
    $addObject->itemId = "Item"
    $addObject->loanDate = "Loan Date"
    $addObject->loanConditionId = "Loan Condition"
    $addObject->dueDate = "Due Date"
    $addObject->returnDate = "Return Date"
    $addObject->returnConditionId = "Return Condition"
    $addObject->notes = "Notes"

    $query->addInventoryLoaner($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs inventoryLoaners.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\InventoryLoaner](../../../src/Objects/InventoryLoaner.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Edit();

    $editObject = new \RescueGroups\Objects\InventoryLoaner();
    $editObject->id = "ID"
    $editObject->itemId = "Item"
    $editObject->loanDate = "Loan Date"
    $editObject->loanConditionId = "Loan Condition"
    $editObject->dueDate = "Due Date"
    $editObject->returnDate = "Return Date"
    $editObject->returnConditionId = "Return Condition"
    $editObject->notes = "Notes"

    $query->updateInventoryLoaner($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs inventoryLoaners.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Delete();

    $query->setId("ID");

    $result = $api->executeRequest($query);

