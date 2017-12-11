# CallsCategories

This is the documentation for the callsCategories queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsCategories)

## CallsCategories\GetList

Performs callsCategories.list query.

    $query = new \RescueGroups\Requests\Objects\CallsCategories\GetList();



## CallsCategories\View

Performs callsCategories.view query.

    $query = new \RescueGroups\Requests\Objects\CallsCategories\View();

#### ::setCategoryID

Sets categoryID field with a value of type integer.

    $query->setCategoryID(integer);



## CallsCategories\Search

Performs callsCategories.search query.

    $query = new \RescueGroups\Requests\Objects\CallsCategories\Search();

#### ::setCategoryID

Sets categoryID field with a value of type integer.

    $query->setCategoryID(integer);

#### ::setCategoryName

Sets categoryName field with a value of type string.

    $query->setCategoryName(string);

#### ::setCategoryDescription

Sets categoryDescription field with a value of type string.

    $query->setCategoryDescription(string);

#### ::setCategoryPublic

Sets categoryPublic field with a value of type string.

    $query->setCategoryPublic(string);

#### ::setCategoryDefaultQueueID

Sets categoryDefaultQueueID field with a value of type integer.

    $query->setCategoryDefaultQueueID(integer);

#### ::setCategoryDefaultQueueName

Sets categoryDefaultQueueName field with a value of type string.

    $query->setCategoryDefaultQueueName(string);

#### ::setCategoryCreatedDate

Sets categoryCreatedDate field with a value of type \DateTime.

    $query->setCategoryCreatedDate(\DateTime);

#### ::setCategoryCreatedByID

Sets categoryCreatedByID field with a value of type integer.

    $query->setCategoryCreatedByID(integer);

#### ::setCategoryUpdatedDate

Sets categoryUpdatedDate field with a value of type \DateTime.

    $query->setCategoryUpdatedDate(\DateTime);

#### ::setCategoryUpdatedByID

Sets categoryUpdatedByID field with a value of type integer.

    $query->setCategoryUpdatedByID(integer);

#### ::setCategoryCallsCount

Sets categoryCallsCount field with a value of type int.

    $query->setCategoryCallsCount(int);



## CallsCategories\Add

Performs callsCategories.add query.

    $query = new \RescueGroups\Requests\Objects\CallsCategories\Add();

#### ::setCategoryName

Sets categoryName field with a value of type string.

    $query->setCategoryName(string);

#### ::setCategoryDescription

Sets categoryDescription field with a value of type string.

    $query->setCategoryDescription(string);

#### ::setCategoryPublic

Sets categoryPublic field with a value of type string.

    $query->setCategoryPublic(string);

#### ::setCategoryDefaultQueueID

Sets categoryDefaultQueueID field with a value of type integer.

    $query->setCategoryDefaultQueueID(integer);



## CallsCategories\Edit

Performs callsCategories.edit query.

    $query = new \RescueGroups\Requests\Objects\CallsCategories\Edit();

#### ::setCategoryID

Sets categoryID field with a value of type integer.

    $query->setCategoryID(integer);

#### ::setCategoryName

Sets categoryName field with a value of type string.

    $query->setCategoryName(string);

#### ::setCategoryDescription

Sets categoryDescription field with a value of type string.

    $query->setCategoryDescription(string);

#### ::setCategoryPublic

Sets categoryPublic field with a value of type string.

    $query->setCategoryPublic(string);

#### ::setCategoryDefaultQueueID

Sets categoryDefaultQueueID field with a value of type integer.

    $query->setCategoryDefaultQueueID(integer);



## CallsCategories\Delete

Performs callsCategories.delete query.

    $query = new \RescueGroups\Requests\Objects\CallsCategories\Delete();

#### ::setCategoryID

Sets categoryID field with a value of type integer.

    $query->setCategoryID(integer);





