# AnimalsJournalEntryTypes

This is the documentation for the animalsJournalEntrytypes queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:35 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsJournalEntrytypes

## AnimalsJournalEntryTypes\GetList

Performs animalsJournalEntrytypes.list query.

    $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntryTypes\GetList();



## AnimalsJournalEntryTypes\Search

Performs animalsJournalEntrytypes.search query.

    $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntryTypes\Search();

#### ::setJournalEntrytypeID

Sets journalEntrytypeID field with a value of type integer.

    $query->setJournalEntrytypeID(integer);

#### ::setJournalEntrytypeDescription

Sets journalEntrytypeDescription field with a value of type string.

    $query->setJournalEntrytypeDescription(string);

#### ::setJournalEntrytypeCategoryID

Sets journalEntrytypeCategoryID field with a value of type integer.

    $query->setJournalEntrytypeCategoryID(integer);

#### ::setJournalEntrytypeCategoryName

Sets journalEntrytypeCategoryName field with a value of type string.

    $query->setJournalEntrytypeCategoryName(string);



## AnimalsJournalEntryTypes\View

Performs animalsJournalEntrytypes.view query.

    $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntryTypes\View();

#### ::setJournalEntrytypeID

Sets journalEntrytypeID field with a value of type integer.

    $query->setJournalEntrytypeID(integer);



## AnimalsJournalEntryTypes\Add

Performs animalsJournalEntrytypes.add query.

    $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntryTypes\Add();

#### ::setJournalEntrytypeDescription

Sets journalEntrytypeDescription field with a value of type string.

    $query->setJournalEntrytypeDescription(string);

#### ::setJournalEntrytypeCategoryID

Sets journalEntrytypeCategoryID field with a value of type integer.

    $query->setJournalEntrytypeCategoryID(integer);



## AnimalsJournalEntryTypes\Edit

Performs animalsJournalEntrytypes.edit query.

    $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntryTypes\Edit();

#### ::setJournalEntrytypeID

Sets journalEntrytypeID field with a value of type integer.

    $query->setJournalEntrytypeID(integer);

#### ::setJournalEntrytypeDescription

Sets journalEntrytypeDescription field with a value of type string.

    $query->setJournalEntrytypeDescription(string);

#### ::setJournalEntrytypeCategoryID

Sets journalEntrytypeCategoryID field with a value of type integer.

    $query->setJournalEntrytypeCategoryID(integer);




