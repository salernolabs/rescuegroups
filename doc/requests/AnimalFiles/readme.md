# AnimalFiles

This is the documentation for the animalFiles queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:34 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalFiles

## AnimalFiles\GetList

Performs animalFiles.list query.

    $query = new \RescueGroups\Requests\Objects\AnimalFiles\GetList();



## AnimalFiles\Search

Performs animalFiles.search query.

    $query = new \RescueGroups\Requests\Objects\AnimalFiles\Search();

#### ::setAnimalfileID

Sets animalfileID field with a value of type integer.

    $query->setAnimalfileID(integer);

#### ::setAnimalfileAnimalID

Sets animalfileAnimalID field with a value of type integer.

    $query->setAnimalfileAnimalID(integer);

#### ::setAnimalfileOldName

Sets animalfileOldName field with a value of type string.

    $query->setAnimalfileOldName(string);

#### ::setAnimalfileDescription

Sets animalfileDescription field with a value of type string.

    $query->setAnimalfileDescription(string);

#### ::setAnimalfileStatus

Sets animalfileStatus field with a value of type string.

    $query->setAnimalfileStatus(string);

#### ::setAnimalfileDisplayInline

Sets animalfileDisplayInline field with a value of type string.

    $query->setAnimalfileDisplayInline(string);

#### ::setAnimalfilePublic

Sets animalfilePublic field with a value of type string.

    $query->setAnimalfilePublic(string);

#### ::setAnimalfileSize

Sets animalfileSize field with a value of type int.

    $query->setAnimalfileSize(int);

#### ::setAnimalfileCreatedDate

Sets animalfileCreatedDate field with a value of type \DateTime.

    $query->setAnimalfileCreatedDate(\DateTime);



## AnimalFiles\View

Performs animalFiles.view query.

    $query = new \RescueGroups\Requests\Objects\AnimalFiles\View();

#### ::setAnimalfileID

Sets animalfileID field with a value of type integer.

    $query->setAnimalfileID(integer);



## AnimalFiles\Add

Performs animalFiles.add query.

    $query = new \RescueGroups\Requests\Objects\AnimalFiles\Add();

#### ::setAnimalfileAnimalID

Sets animalfileAnimalID field with a value of type integer.

    $query->setAnimalfileAnimalID(integer);

#### ::setAnimalfileBinary

Sets animalfileBinary field with a value of type binary.

    $query->setAnimalfileBinary(binary);

#### ::setAnimalfileOldFileName

Sets animalfileOldFileName field with a value of type string.

    $query->setAnimalfileOldFileName(string);

#### ::setAnimalfileDescription

Sets animalfileDescription field with a value of type string.

    $query->setAnimalfileDescription(string);

#### ::setAnimalfileStatus

Sets animalfileStatus field with a value of type string.

    $query->setAnimalfileStatus(string);

#### ::setAnimalfileDisplayInline

Sets animalfileDisplayInline field with a value of type string.

    $query->setAnimalfileDisplayInline(string);

#### ::setAnimalfilePublic

Sets animalfilePublic field with a value of type string.

    $query->setAnimalfilePublic(string);



## AnimalFiles\Edit

Performs animalFiles.edit query.

    $query = new \RescueGroups\Requests\Objects\AnimalFiles\Edit();

#### ::setAnimalfileID

Sets animalfileID field with a value of type integer.

    $query->setAnimalfileID(integer);

#### ::setAnimalfileAnimalID

Sets animalfileAnimalID field with a value of type integer.

    $query->setAnimalfileAnimalID(integer);

#### ::setAnimalfileDescription

Sets animalfileDescription field with a value of type string.

    $query->setAnimalfileDescription(string);

#### ::setAnimalfileStatus

Sets animalfileStatus field with a value of type string.

    $query->setAnimalfileStatus(string);

#### ::setAnimalfileDisplayInline

Sets animalfileDisplayInline field with a value of type string.

    $query->setAnimalfileDisplayInline(string);

#### ::setAnimalfilePublic

Sets animalfilePublic field with a value of type string.

    $query->setAnimalfilePublic(string);





