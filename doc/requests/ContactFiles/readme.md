# ContactFiles

This is the documentation for the contactFiles queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-contactFiles)

## ContactFiles\GetList

Performs contactFiles.list query.

    $query = new \RescueGroups\Requests\Objects\ContactFiles\GetList();



## ContactFiles\Search

Performs contactFiles.search query.

    $query = new \RescueGroups\Requests\Objects\ContactFiles\Search();

#### ::setContactfileID

Sets contactfileID field with a value of type integer.

    $query->setContactfileID(integer);

#### ::setContactfileContactID

Sets contactfileContactID field with a value of type integer.

    $query->setContactfileContactID(integer);

#### ::setContactfileOldName

Sets contactfileOldName field with a value of type string.

    $query->setContactfileOldName(string);

#### ::setContactfileDescription

Sets contactfileDescription field with a value of type string.

    $query->setContactfileDescription(string);

#### ::setContactfileStatus

Sets contactfileStatus field with a value of type string.

    $query->setContactfileStatus(string);

#### ::setContactfileDisplayInline

Sets contactfileDisplayInline field with a value of type string.

    $query->setContactfileDisplayInline(string);

#### ::setContactfileSize

Sets contactfileSize field with a value of type int.

    $query->setContactfileSize(int);

#### ::setContactfileCreatedDate

Sets contactfileCreatedDate field with a value of type \DateTime.

    $query->setContactfileCreatedDate(\DateTime);



## ContactFiles\View

Performs contactFiles.view query.

    $query = new \RescueGroups\Requests\Objects\ContactFiles\View();

#### ::setContactfileID

Sets contactfileID field with a value of type integer.

    $query->setContactfileID(integer);



## ContactFiles\Add

Performs contactFiles.add query.

    $query = new \RescueGroups\Requests\Objects\ContactFiles\Add();

#### ::setContactfileContactID

Sets contactfileContactID field with a value of type integer.

    $query->setContactfileContactID(integer);

#### ::setContactfileBinary

Sets contactfileBinary field with a value of type binary.

    $query->setContactfileBinary(binary);

#### ::setContactfileOldFileName

Sets contactfileOldFileName field with a value of type string.

    $query->setContactfileOldFileName(string);

#### ::setContactfileDescription

Sets contactfileDescription field with a value of type string.

    $query->setContactfileDescription(string);

#### ::setContactfileStatus

Sets contactfileStatus field with a value of type string.

    $query->setContactfileStatus(string);

#### ::setContactfileDisplayInline

Sets contactfileDisplayInline field with a value of type string.

    $query->setContactfileDisplayInline(string);



## ContactFiles\Edit

Performs contactFiles.edit query.

    $query = new \RescueGroups\Requests\Objects\ContactFiles\Edit();

#### ::setContactfileID

Sets contactfileID field with a value of type integer.

    $query->setContactfileID(integer);

#### ::setContactfileDescription

Sets contactfileDescription field with a value of type string.

    $query->setContactfileDescription(string);

#### ::setContactfileStatus

Sets contactfileStatus field with a value of type string.

    $query->setContactfileStatus(string);

#### ::setContactfileDisplayInline

Sets contactfileDisplayInline field with a value of type string.

    $query->setContactfileDisplayInline(string);





