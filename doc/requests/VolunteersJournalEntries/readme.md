# VolunteersJournalEntries

This is the documentation for the volunteersJournalEntries queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:57:27 by the source generator in the bin subfolder.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-volunteersJournalEntries)

## VolunteersJournalEntries\Search

Performs volunteersJournalEntries.search query.

    $query = new \RescueGroups\Requests\Objects\VolunteersJournalEntries\Search();

#### ::setJournalEntryID

Sets journalEntryID field with a value of type integer.

    $query->setJournalEntryID(integer);

#### ::setJournalEntryContactID

Sets journalEntryContactID field with a value of type integer.

    $query->setJournalEntryContactID(integer);

#### ::setJournalEntryDate

Sets journalEntryDate field with a value of type \DateTime.

    $query->setJournalEntryDate(\DateTime);

#### ::setJournalEntryComment

Sets journalEntryComment field with a value of type string.

    $query->setJournalEntryComment(string);

#### ::setJournalEntryType

Sets journalEntryType field with a value of type string.

    $query->setJournalEntryType(string);

#### ::setVolunteerName

Sets volunteerName field with a value of type string.

    $query->setVolunteerName(string);

#### ::setVolunteerType

Sets volunteerType field with a value of type string.

    $query->setVolunteerType(string);

#### ::setJournalEntryCreatedDate

Sets journalEntryCreatedDate field with a value of type \DateTime.

    $query->setJournalEntryCreatedDate(\DateTime);



## VolunteersJournalEntries\View

Performs volunteersJournalEntries.view query.

    $query = new \RescueGroups\Requests\Objects\VolunteersJournalEntries\View();

#### ::setJournalEntryID

Sets journalEntryID field with a value of type integer.

    $query->setJournalEntryID(integer);



## VolunteersJournalEntries\Add

Performs volunteersJournalEntries.add query.

    $query = new \RescueGroups\Requests\Objects\VolunteersJournalEntries\Add();

#### ::setJournalEntryContactID

Sets journalEntryContactID field with a value of type integer.

    $query->setJournalEntryContactID(integer);

#### ::setJournalEntryDate

Sets journalEntryDate field with a value of type \DateTime.

    $query->setJournalEntryDate(\DateTime);

#### ::setJournalEntryComment

Sets journalEntryComment field with a value of type string.

    $query->setJournalEntryComment(string);

#### ::setJournalEntryType

Sets journalEntryType field with a value of type string.

    $query->setJournalEntryType(string);



## VolunteersJournalEntries\Edit

Performs volunteersJournalEntries.edit query.

    $query = new \RescueGroups\Requests\Objects\VolunteersJournalEntries\Edit();

#### ::setJournalEntryID

Sets journalEntryID field with a value of type integer.

    $query->setJournalEntryID(integer);

#### ::setJournalEntryContactID

Sets journalEntryContactID field with a value of type integer.

    $query->setJournalEntryContactID(integer);

#### ::setJournalEntryDate

Sets journalEntryDate field with a value of type \DateTime.

    $query->setJournalEntryDate(\DateTime);

#### ::setJournalEntryComment

Sets journalEntryComment field with a value of type string.

    $query->setJournalEntryComment(string);

#### ::setJournalEntryType

Sets journalEntryType field with a value of type string.

    $query->setJournalEntryType(string);



## VolunteersJournalEntries\Delete

Performs volunteersJournalEntries.delete query.

    $query = new \RescueGroups\Requests\Objects\VolunteersJournalEntries\Delete();

#### ::setJournalEntryID

Sets journalEntryID field with a value of type integer.

    $query->setJournalEntryID(integer);





