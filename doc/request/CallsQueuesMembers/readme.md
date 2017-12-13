# CallsQueuesMembers

This is the documentation for the callsQueuesMembers queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsQueuesMembers)

## CallsQueuesMembers\GetList

Performs callsQueuesMembers.list query.

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\GetList();



## CallsQueuesMembers\View

Performs callsQueuesMembers.view query.

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\View();

#### ::setMemberID

Sets memberID field with a value of type integer.

    $query->setMemberID(integer);



## CallsQueuesMembers\Search

Performs callsQueuesMembers.search query.

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Search();

#### ::setMemberID

Sets memberID field with a value of type integer.

    $query->setMemberID(integer);

#### ::setMemberContactID

Sets memberContactID field with a value of type integer.

    $query->setMemberContactID(integer);

#### ::setMemberQueueID

Sets memberQueueID field with a value of type integer.

    $query->setMemberQueueID(integer);

#### ::setMemberManager

Sets memberManager field with a value of type string.

    $query->setMemberManager(string);

#### ::setMemberCreatedDate

Sets memberCreatedDate field with a value of type \DateTime.

    $query->setMemberCreatedDate(\DateTime);

#### ::setMemberCreatedByID

Sets memberCreatedByID field with a value of type integer.

    $query->setMemberCreatedByID(integer);

#### ::setMemberUpdatedDate

Sets memberUpdatedDate field with a value of type \DateTime.

    $query->setMemberUpdatedDate(\DateTime);

#### ::setMemberUpdatedByID

Sets memberUpdatedByID field with a value of type integer.

    $query->setMemberUpdatedByID(integer);

#### ::setQueueName

Sets queueName field with a value of type string.

    $query->setQueueName(string);

#### ::setMemberName

Sets memberName field with a value of type string.

    $query->setMemberName(string);

#### ::setMemberContactType

Sets memberContactType field with a value of type string.

    $query->setMemberContactType(string);



## CallsQueuesMembers\Add

Performs callsQueuesMembers.add query.

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Add();

#### ::setMemberContactID

Sets memberContactID field with a value of type integer.

    $query->setMemberContactID(integer);

#### ::setMemberQueueID

Sets memberQueueID field with a value of type integer.

    $query->setMemberQueueID(integer);

#### ::setMemberManager

Sets memberManager field with a value of type string.

    $query->setMemberManager(string);



## CallsQueuesMembers\Edit

Performs callsQueuesMembers.edit query.

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Edit();

#### ::setMemberID

Sets memberID field with a value of type integer.

    $query->setMemberID(integer);

#### ::setMemberContactID

Sets memberContactID field with a value of type integer.

    $query->setMemberContactID(integer);

#### ::setMemberQueueID

Sets memberQueueID field with a value of type integer.

    $query->setMemberQueueID(integer);

#### ::setMemberManager

Sets memberManager field with a value of type string.

    $query->setMemberManager(string);



## CallsQueuesMembers\Delete

Performs callsQueuesMembers.delete query.

    $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Delete();

#### ::setMemberID

Sets memberID field with a value of type integer.

    $query->setMemberID(integer);





