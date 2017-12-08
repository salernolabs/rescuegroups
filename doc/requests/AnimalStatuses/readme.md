# AnimalStatuses

This is the documentation for the animalStatuses queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalStatuses)

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





