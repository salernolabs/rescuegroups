# WaitingLists

This is the documentation for the waitinglists queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:46 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-waitinglists

## WaitingLists\View

Performs waitinglists.view query.

    $query = new \RescueGroups\Requests\Objects\WaitingLists\View();

#### ::setWaitinglistID

Sets waitinglistID field with a value of type integer.

    $query->setWaitinglistID(integer);



## WaitingLists\Search

Performs waitinglists.search query.

    $query = new \RescueGroups\Requests\Objects\WaitingLists\Search();

#### ::setWaitinglistID

Sets waitinglistID field with a value of type integer.

    $query->setWaitinglistID(integer);

#### ::setWaitinglistName

Sets waitinglistName field with a value of type string.

    $query->setWaitinglistName(string);

#### ::setWaitinglistType

Sets waitinglistType field with a value of type string.

    $query->setWaitinglistType(string);

#### ::setWaitinglistComment

Sets waitinglistComment field with a value of type string.

    $query->setWaitinglistComment(string);

#### ::setWaitinglistMembersCount

Sets waitinglistMembersCount field with a value of type int.

    $query->setWaitinglistMembersCount(int);



## WaitingLists\Add

Performs waitinglists.add query.

    $query = new \RescueGroups\Requests\Objects\WaitingLists\Add();

#### ::setWaitinglistName

Sets waitinglistName field with a value of type string.

    $query->setWaitinglistName(string);

#### ::setWaitinglistType

Sets waitinglistType field with a value of type string.

    $query->setWaitinglistType(string);

#### ::setWaitinglistComment

Sets waitinglistComment field with a value of type string.

    $query->setWaitinglistComment(string);



## WaitingLists\Edit

Performs waitinglists.edit query.

    $query = new \RescueGroups\Requests\Objects\WaitingLists\Edit();

#### ::setWaitinglistID

Sets waitinglistID field with a value of type integer.

    $query->setWaitinglistID(integer);

#### ::setWaitinglistName

Sets waitinglistName field with a value of type string.

    $query->setWaitinglistName(string);

#### ::setWaitinglistType

Sets waitinglistType field with a value of type string.

    $query->setWaitinglistType(string);

#### ::setWaitinglistComment

Sets waitinglistComment field with a value of type string.

    $query->setWaitinglistComment(string);



## WaitingLists\Delete

Performs waitinglists.delete query.

    $query = new \RescueGroups\Requests\Objects\WaitingLists\Delete();

#### ::setWaitinglistID

Sets waitinglistID field with a value of type integer.

    $query->setWaitinglistID(integer);




