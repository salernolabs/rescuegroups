# Calls

This is the documentation for the calls queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:57:19 by the source generator in the bin subfolder.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-calls)

## Calls\GetList

Performs calls.list query.

    $query = new \RescueGroups\Requests\Objects\Calls\GetList();



## Calls\View

Performs calls.view query.

    $query = new \RescueGroups\Requests\Objects\Calls\View();

#### ::setCallID

Sets callID field with a value of type integer.

    $query->setCallID(integer);



## Calls\Search

Performs calls.search query.

    $query = new \RescueGroups\Requests\Objects\Calls\Search();

#### ::setCallID

Sets callID field with a value of type integer.

    $query->setCallID(integer);

#### ::setCallContactID

Sets callContactID field with a value of type integer.

    $query->setCallContactID(integer);

#### ::setCallAssignedID

Sets callAssignedID field with a value of type integer.

    $query->setCallAssignedID(integer);

#### ::setCallStatusID

Sets callStatusID field with a value of type integer.

    $query->setCallStatusID(integer);

#### ::setCallUrgencyID

Sets callUrgencyID field with a value of type integer.

    $query->setCallUrgencyID(integer);

#### ::setCallCategoryID

Sets callCategoryID field with a value of type integer.

    $query->setCallCategoryID(integer);

#### ::setCallQueueID

Sets callQueueID field with a value of type integer.

    $query->setCallQueueID(integer);

#### ::setCallDate

Sets callDate field with a value of type \DateTime.

    $query->setCallDate(\DateTime);

#### ::setContactName

Sets contactName field with a value of type string.

    $query->setContactName(string);

#### ::setContactType

Sets contactType field with a value of type string.

    $query->setContactType(string);

#### ::setAssignedName

Sets assignedName field with a value of type string.

    $query->setAssignedName(string);

#### ::setQueueName

Sets queueName field with a value of type string.

    $query->setQueueName(string);

#### ::setCategoryName

Sets categoryName field with a value of type string.

    $query->setCategoryName(string);

#### ::setStatusName

Sets statusName field with a value of type string.

    $query->setStatusName(string);

#### ::setUrgencyName

Sets urgencyName field with a value of type string.

    $query->setUrgencyName(string);

#### ::setLastOutcome

Sets lastOutcome field with a value of type string.

    $query->setLastOutcome(string);

#### ::setLogEntryCount

Sets logEntryCount field with a value of type string.

    $query->setLogEntryCount(string);



## Calls\Add

Performs calls.add query.

    $query = new \RescueGroups\Requests\Objects\Calls\Add();

#### ::setCallContactID

Sets callContactID field with a value of type integer.

    $query->setCallContactID(integer);

#### ::setCallAssignedID

Sets callAssignedID field with a value of type integer.

    $query->setCallAssignedID(integer);

#### ::setCallStatusID

Sets callStatusID field with a value of type integer.

    $query->setCallStatusID(integer);

#### ::setCallUrgencyID

Sets callUrgencyID field with a value of type integer.

    $query->setCallUrgencyID(integer);

#### ::setCallCategoryID

Sets callCategoryID field with a value of type integer.

    $query->setCallCategoryID(integer);

#### ::setCallQueueID

Sets callQueueID field with a value of type integer.

    $query->setCallQueueID(integer);

#### ::setCallDate

Sets callDate field with a value of type \DateTime.

    $query->setCallDate(\DateTime);



## Calls\Edit

Performs calls.edit query.

    $query = new \RescueGroups\Requests\Objects\Calls\Edit();

#### ::setCallID

Sets callID field with a value of type integer.

    $query->setCallID(integer);

#### ::setCallContactID

Sets callContactID field with a value of type integer.

    $query->setCallContactID(integer);

#### ::setCallAssignedID

Sets callAssignedID field with a value of type integer.

    $query->setCallAssignedID(integer);

#### ::setCallStatusID

Sets callStatusID field with a value of type integer.

    $query->setCallStatusID(integer);

#### ::setCallUrgencyID

Sets callUrgencyID field with a value of type integer.

    $query->setCallUrgencyID(integer);

#### ::setCallCategoryID

Sets callCategoryID field with a value of type integer.

    $query->setCallCategoryID(integer);

#### ::setCallQueueID

Sets callQueueID field with a value of type integer.

    $query->setCallQueueID(integer);

#### ::setCallDate

Sets callDate field with a value of type \DateTime.

    $query->setCallDate(\DateTime);





