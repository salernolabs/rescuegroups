# AnimalStatuses

This is the documentation for the animalStatuses queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:37 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalStatuses

## AnimalStatuses\GetList

Performs animalStatuses.list query.

    $query = new \RescueGroups\Requests\Objects\AnimalStatuses\GetList();



## AnimalStatuses\Search

Performs animalStatuses.search query.

    $query = new \RescueGroups\Requests\Objects\AnimalStatuses\Search();

#### ::setStatusID

Sets statusID field with a value of type integer.

    $query->setStatusID(integer);

#### ::setStatusName

Sets statusName field with a value of type string.

    $query->setStatusName(string);

#### ::setStatusDescription

Sets statusDescription field with a value of type string.

    $query->setStatusDescription(string);





