# VolunteersJournalEntries

This is the documentation for the VolunteersJournalEntries queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-volunteersJournalEntries)

## Define
Performs volunteersJournalEntries.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Define();

    $result = $api->executeRequest($query);
## Search
Performs volunteersJournalEntries.search search query. This query returns an array of [\RescueGroups\Objects\VolunteersJournalEntry](../../../src/Objects/VolunteersJournalEntry.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Search();
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
Performs volunteersJournalEntries.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\View();

    $query->setjournalEntryID("ID");

    $result = $api->executeRequest($query);

## Add
Performs volunteersJournalEntries.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\VolunteersJournalEntry](../../../src/Objects/VolunteersJournalEntry.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Add();

    $addObject = new \RescueGroups\Objects\VolunteersJournalEntry();
    $addObject->journalEntryDate = "Date"
    $addObject->journalEntryComment = "Comment"
    $addObject->journalEntryType = "Entry Type"

    $query->addVolunteersJournalEntry($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs volunteersJournalEntries.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\VolunteersJournalEntry](../../../src/Objects/VolunteersJournalEntry.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Edit();

    $editObject = new \RescueGroups\Objects\VolunteersJournalEntry();
    $editObject->journalEntryID = "ID"
    $editObject->journalEntryContactID = "Contact"
    $editObject->journalEntryDate = "Date"
    $editObject->journalEntryComment = "Comment"
    $editObject->journalEntryType = "Entry Type"

    $query->updateVolunteersJournalEntry($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs volunteersJournalEntries.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Delete();

    $query->setjournalEntryID("ID");

    $result = $api->executeRequest($query);

