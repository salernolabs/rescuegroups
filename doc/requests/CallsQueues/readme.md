# CallsQueues

This is the documentation for the callsQueues queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:38 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsQueues

## CallsQueues\GetList

Performs callsQueues.list query.

    $query = new \RescueGroups\Requests\Objects\CallsQueues\GetList();



## CallsQueues\View

Performs callsQueues.view query.

    $query = new \RescueGroups\Requests\Objects\CallsQueues\View();

#### ::setQueueID

Sets queueID field with a value of type integer.

    $query->setQueueID(integer);



## CallsQueues\Search

Performs callsQueues.search query.

    $query = new \RescueGroups\Requests\Objects\CallsQueues\Search();

#### ::setQueueID

Sets queueID field with a value of type integer.

    $query->setQueueID(integer);

#### ::setQueueName

Sets queueName field with a value of type string.

    $query->setQueueName(string);

#### ::setQueueFromEmail

Sets queueFromEmail field with a value of type email.

    $query->setQueueFromEmail(email);

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

Sets queueOpenCallsCount field with a value of type int.

    $query->setQueueOpenCallsCount(int);

#### ::setQueueMembersCount

Sets queueMembersCount field with a value of type int.

    $query->setQueueMembersCount(int);



## CallsQueues\Add

Performs callsQueues.add query.

    $query = new \RescueGroups\Requests\Objects\CallsQueues\Add();

#### ::setQueueName

Sets queueName field with a value of type string.

    $query->setQueueName(string);

#### ::setQueueFromEmail

Sets queueFromEmail field with a value of type email.

    $query->setQueueFromEmail(email);

#### ::setQueueDefaultUrgencyID

Sets queueDefaultUrgencyID field with a value of type integer.

    $query->setQueueDefaultUrgencyID(integer);



## CallsQueues\Edit

Performs callsQueues.edit query.

    $query = new \RescueGroups\Requests\Objects\CallsQueues\Edit();

#### ::setQueueID

Sets queueID field with a value of type integer.

    $query->setQueueID(integer);

#### ::setQueueName

Sets queueName field with a value of type string.

    $query->setQueueName(string);

#### ::setQueueFromEmail

Sets queueFromEmail field with a value of type email.

    $query->setQueueFromEmail(email);

#### ::setQueueDefaultUrgencyID

Sets queueDefaultUrgencyID field with a value of type integer.

    $query->setQueueDefaultUrgencyID(integer);



## CallsQueues\Delete

Performs callsQueues.delete query.

    $query = new \RescueGroups\Requests\Objects\CallsQueues\Delete();

#### ::setQueueID

Sets queueID field with a value of type integer.

    $query->setQueueID(integer);





