# CallsQueues

This is the documentation for the callsQueues queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsQueues)

## CallsQueues\GetList

Performs callsQueues.list query.

    $query = new \RescueGroups\Request\Objects\CallsQueues\GetList();



## CallsQueues\View

Performs callsQueues.view query.

    $query = new \RescueGroups\Request\Objects\CallsQueues\View();

#### ::setQueueID

Sets queueID field with a value of type integer.

    $query->setQueueID(integer);



## CallsQueues\Search

Performs callsQueues.search query.

    $query = new \RescueGroups\Request\Objects\CallsQueues\Search();

#### ::setQueueID

Sets queueID field with a value of type integer.

    $query->setQueueID(integer);

#### ::setQueueName

Sets queueName field with a value of type string.

    $query->setQueueName(string);

#### ::setQueueFromEmail

Sets queueFromEmail field with a value of type string.

    $query->setQueueFromEmail(string);

#### ::setQueueDefaultUrgencyID

Sets queueDefaultUrgencyID field with a value of type integer.

    $query->setQueueDefaultUrgencyID(integer);

#### ::setQueueDefaultUrgencyName

Sets queueDefaultUrgencyName field with a value of type string.

    $query->setQueueDefaultUrgencyName(string);

#### ::setQueueCreatedDate

Sets queueCreatedDate field with a value of type \DateTime.

    $query->setQueueCreatedDate(\DateTime);

#### ::setQueueCreatedByID

Sets queueCreatedByID field with a value of type integer.

    $query->setQueueCreatedByID(integer);

#### ::setQueueUpdatedDate

Sets queueUpdatedDate field with a value of type \DateTime.

    $query->setQueueUpdatedDate(\DateTime);

#### ::setQueueUpdatedByID

Sets queueUpdatedByID field with a value of type integer.

    $query->setQueueUpdatedByID(integer);

#### ::setQueueOpenCallsCount

Sets queueOpenCallsCount field with a value of type string.

    $query->setQueueOpenCallsCount(string);

#### ::setQueueMembersCount

Sets queueMembersCount field with a value of type string.

    $query->setQueueMembersCount(string);



## CallsQueues\Add

Performs callsQueues.add query.

    $query = new \RescueGroups\Request\Objects\CallsQueues\Add();

#### ::setQueueName

Sets queueName field with a value of type string.

    $query->setQueueName(string);

#### ::setQueueFromEmail

Sets queueFromEmail field with a value of type string.

    $query->setQueueFromEmail(string);

#### ::setQueueDefaultUrgencyID

Sets queueDefaultUrgencyID field with a value of type integer.

    $query->setQueueDefaultUrgencyID(integer);



## CallsQueues\Edit

Performs callsQueues.edit query.

    $query = new \RescueGroups\Request\Objects\CallsQueues\Edit();

#### ::setQueueID

Sets queueID field with a value of type integer.

    $query->setQueueID(integer);

#### ::setQueueName

Sets queueName field with a value of type string.

    $query->setQueueName(string);

#### ::setQueueFromEmail

Sets queueFromEmail field with a value of type string.

    $query->setQueueFromEmail(string);

#### ::setQueueDefaultUrgencyID

Sets queueDefaultUrgencyID field with a value of type integer.

    $query->setQueueDefaultUrgencyID(integer);



## CallsQueues\Delete

Performs callsQueues.delete query.

    $query = new \RescueGroups\Request\Objects\CallsQueues\Delete();

#### ::setQueueID

Sets queueID field with a value of type integer.

    $query->setQueueID(integer);





