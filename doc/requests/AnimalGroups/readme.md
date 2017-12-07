# AnimalGroups

This is the documentation for the animalGroups queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:34 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalGroups

## AnimalGroups\GetList

Performs animalGroups.list query.

    $query = new \RescueGroups\Requests\Objects\AnimalGroups\GetList();



## AnimalGroups\View

Performs animalGroups.view query.

    $query = new \RescueGroups\Requests\Objects\AnimalGroups\View();

#### ::setGroupID

Sets groupID field with a value of type integer.

    $query->setGroupID(integer);



## AnimalGroups\Search

Performs animalGroups.search query.

    $query = new \RescueGroups\Requests\Objects\AnimalGroups\Search();

#### ::setGroupID

Sets groupID field with a value of type integer.

    $query->setGroupID(integer);

#### ::setGroupName

Sets groupName field with a value of type string.

    $query->setGroupName(string);

#### ::setGroupHeaderID

Sets groupHeaderID field with a value of type integer.

    $query->setGroupHeaderID(integer);

#### ::setGroupAnimals

Sets groupAnimals field with a value of type int.

    $query->setGroupAnimals(int);

#### ::setWebpageName

Sets webpageName field with a value of type string.

    $query->setWebpageName(string);



## AnimalGroups\Add

Performs animalGroups.add query.

    $query = new \RescueGroups\Requests\Objects\AnimalGroups\Add();

#### ::setGroupName

Sets groupName field with a value of type string.

    $query->setGroupName(string);

#### ::setGroupHeaderID

Sets groupHeaderID field with a value of type integer.

    $query->setGroupHeaderID(integer);



## AnimalGroups\Edit

Performs animalGroups.edit query.

    $query = new \RescueGroups\Requests\Objects\AnimalGroups\Edit();

#### ::setGroupID

Sets groupID field with a value of type integer.

    $query->setGroupID(integer);

#### ::setGroupName

Sets groupName field with a value of type string.

    $query->setGroupName(string);

#### ::setGroupHeaderID

Sets groupHeaderID field with a value of type integer.

    $query->setGroupHeaderID(integer);



## AnimalGroups\Delete

Performs animalGroups.delete query.

    $query = new \RescueGroups\Requests\Objects\AnimalGroups\Delete();

#### ::setGroupID

Sets groupID field with a value of type integer.

    $query->setGroupID(integer);





