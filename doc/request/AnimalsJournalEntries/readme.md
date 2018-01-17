# AnimalsJournalEntries

This is the documentation for the AnimalsJournalEntries queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsJournalEntries)

## Search

Performs animalsJournalEntries.search search query. This query returns an array of [\RescueGroups\Objects\AnimalsJournalEntry](../../src/Objects/AnimalsJournalEntry.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\Search();
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






Performs animalsJournalEntries.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\View();

    $result = $api->executeRequest($query);


## Add




Performs animalsJournalEntries.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\AnimalsJournalEntry](../../src/Objects/AnimalsJournalEntry.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\Add();

    $addObject = new \RescueGroups\Objects\AnimalsJournalEntry();
    $addObject->journalEntryDate = "Date"
    $addObject->journalEntryComment = "Comment"
    $addObject->journalEntryEntrytypeID = "Entrytype ID"
    $addObject->journalEntryCost = "Cost"
    $addObject->journalEntryDueDate = "Due Date"
    $addObject->journalEntryReminderDate = "Reminder Date"

    $query->addAnimalsJournalEntry($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs animalsJournalEntries.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalsJournalEntry](../../src/Objects/AnimalsJournalEntry.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\Edit();

    $editObject = new \RescueGroups\Objects\AnimalsJournalEntry();
    $editObject->journalEntryID = "Entry ID"
    $editObject->journalEntryAnimalID = "Animal ID"
    $editObject->journalEntryDate = "Date"
    $editObject->journalEntryComment = "Comment"
    $editObject->journalEntryEntrytypeID = "Entrytype ID"
    $editObject->journalEntryCost = "Cost"
    $editObject->journalEntryDueDate = "Due Date"
    $editObject->journalEntryReminderDate = "Reminder Date"

    $query->updateAnimalsJournalEntry($editObject);

    $result = $api->executeRequest($query);




## Delete






Performs animalsJournalEntries.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\Delete();

    $result = $api->executeRequest($query);


