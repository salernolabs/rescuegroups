# CallsLogEntries

This is the documentation for the callsLogentries queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:37 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsLogentries

## CallsLogEntries\View

Performs callsLogentries.view query.

    $query = new \RescueGroups\Requests\Objects\CallsLogEntries\View();

#### ::setLogentryID

Sets logentryID field with a value of type integer.

    $query->setLogentryID(integer);



## CallsLogEntries\Search

Performs callsLogentries.search query.

    $query = new \RescueGroups\Requests\Objects\CallsLogEntries\Search();

#### ::setLogentryID

Sets logentryID field with a value of type integer.

    $query->setLogentryID(integer);

#### ::setLogentryCallID

Sets logentryCallID field with a value of type integer.

    $query->setLogentryCallID(integer);

#### ::setLogentryContactID

Sets logentryContactID field with a value of type integer.

    $query->setLogentryContactID(integer);

#### ::setLogentryDate

Sets logentryDate field with a value of type \DateTime.

    $query->setLogentryDate(\DateTime);

#### ::setLogentryOutcomeID

Sets logentryOutcomeID field with a value of type integer.

    $query->setLogentryOutcomeID(integer);

#### ::setLogentryComments

Sets logentryComments field with a value of type string.

    $query->setLogentryComments(string);

#### ::setContactName

Sets contactName field with a value of type string.

    $query->setContactName(string);

#### ::setOutcomeName

Sets outcomeName field with a value of type string.

    $query->setOutcomeName(string);



## CallsLogEntries\Add

Performs callsLogentries.add query.

    $query = new \RescueGroups\Requests\Objects\CallsLogEntries\Add();

#### ::setLogentryCallID

Sets logentryCallID field with a value of type integer.

    $query->setLogentryCallID(integer);

#### ::setLogentryContactID

Sets logentryContactID field with a value of type integer.

    $query->setLogentryContactID(integer);

#### ::setLogentryDate

Sets logentryDate field with a value of type \DateTime.

    $query->setLogentryDate(\DateTime);

#### ::setLogentryOutcomeID

Sets logentryOutcomeID field with a value of type integer.

    $query->setLogentryOutcomeID(integer);

#### ::setLogentryComments

Sets logentryComments field with a value of type string.

    $query->setLogentryComments(string);





