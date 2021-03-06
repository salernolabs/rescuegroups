# AnimalsJournalEntryTypes

This is the documentation for the AnimalsJournalEntryTypes queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsJournalEntrytypes)

## Define
Performs animalsJournalEntrytypes.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\Define();

    $result = $api->executeRequest($query);
## GetList
Performs animalsJournalEntrytypes.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\GetList();
    $result = $api->executeRequest($query);
## Search
Performs animalsJournalEntrytypes.search search query. This query returns an array of [\RescueGroups\Objects\Search\AnimalsJournalEntryType](../../../src/Objects/Search/AnimalsJournalEntryType.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\Search();
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
## View
Performs animalsJournalEntrytypes.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\View();

    $query->setId("Entrytype ID");

    $result = $api->executeRequest($query);

## Add
Performs animalsJournalEntrytypes.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\AnimalsJournalEntryType](../../../src/Objects/AnimalsJournalEntryType.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\Add();

    $addObject = new \RescueGroups\Objects\AnimalsJournalEntryType();
    $addObject->description = "Description"

    $query->addAnimalsJournalEntryType($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animalsJournalEntrytypes.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalsJournalEntryType](../../../src/Objects/AnimalsJournalEntryType.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\Edit();

    $editObject = new \RescueGroups\Objects\AnimalsJournalEntryType();
    $editObject->id = "Entrytype ID"
    $editObject->description = "Description"
    $editObject->categoryId = "Category ID"

    $query->updateAnimalsJournalEntryType($editObject);

    $result = $api->executeRequest($query);
