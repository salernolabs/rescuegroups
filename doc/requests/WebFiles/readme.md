# WebFiles

This is the documentation for the webfiles queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-webfiles)

## WebFiles\GetList

Performs webfiles.list query.

    $query = new \RescueGroups\Requests\Objects\WebFiles\GetList();



## WebFiles\Search

Performs webfiles.search query.

    $query = new \RescueGroups\Requests\Objects\WebFiles\Search();

#### ::setWebfileID

Sets webfileID field with a value of type integer.

    $query->setWebfileID(integer);

#### ::setWebfileOldName

Sets webfileOldName field with a value of type string.

    $query->setWebfileOldName(string);

#### ::setWebfileName

Sets webfileName field with a value of type string.

    $query->setWebfileName(string);

#### ::setWebfileDescription

Sets webfileDescription field with a value of type string.

    $query->setWebfileDescription(string);

#### ::setWebfileStatus

Sets webfileStatus field with a value of type string.

    $query->setWebfileStatus(string);

#### ::setWebfileDisplayInline

Sets webfileDisplayInline field with a value of type string.

    $query->setWebfileDisplayInline(string);

#### ::setWebfileRoleID

Sets webfileRoleID field with a value of type integer.

    $query->setWebfileRoleID(integer);

#### ::setWebfileRoleName

Sets webfileRoleName field with a value of type string.

    $query->setWebfileRoleName(string);

#### ::setWebfileSize

Sets webfileSize field with a value of type int.

    $query->setWebfileSize(int);

#### ::setWebfileCreatedDate

Sets webfileCreatedDate field with a value of type \DateTime.

    $query->setWebfileCreatedDate(\DateTime);



## WebFiles\View

Performs webfiles.view query.

    $query = new \RescueGroups\Requests\Objects\WebFiles\View();

#### ::setWebfileID

Sets webfileID field with a value of type integer.

    $query->setWebfileID(integer);



## WebFiles\Add

Performs webfiles.add query.

    $query = new \RescueGroups\Requests\Objects\WebFiles\Add();

#### ::setWebfileBinary

Sets webfileBinary field with a value of type binary.

    $query->setWebfileBinary(binary);

#### ::setWebfileOldFileName

Sets webfileOldFileName field with a value of type string.

    $query->setWebfileOldFileName(string);

#### ::setWebfileDescription

Sets webfileDescription field with a value of type string.

    $query->setWebfileDescription(string);

#### ::setWebfileStatus

Sets webfileStatus field with a value of type string.

    $query->setWebfileStatus(string);

#### ::setWebfileDisplayInline

Sets webfileDisplayInline field with a value of type string.

    $query->setWebfileDisplayInline(string);

#### ::setWebfileRoleID

Sets webfileRoleID field with a value of type integer.

    $query->setWebfileRoleID(integer);



## WebFiles\Edit

Performs webfiles.edit query.

    $query = new \RescueGroups\Requests\Objects\WebFiles\Edit();

#### ::setWebfileID

Sets webfileID field with a value of type integer.

    $query->setWebfileID(integer);

#### ::setWebfileDescription

Sets webfileDescription field with a value of type string.

    $query->setWebfileDescription(string);

#### ::setWebfileStatus

Sets webfileStatus field with a value of type string.

    $query->setWebfileStatus(string);

#### ::setWebfileDisplayInline

Sets webfileDisplayInline field with a value of type string.

    $query->setWebfileDisplayInline(string);

#### ::setWebfileRoleID

Sets webfileRoleID field with a value of type integer.

    $query->setWebfileRoleID(integer);





