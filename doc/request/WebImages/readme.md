# WebImages

This is the documentation for the webimages queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-webimages)

## WebImages\GetList

Performs webimages.list query.

    $query = new \RescueGroups\Request\Objects\WebImages\GetList();



## WebImages\Search

Performs webimages.search query.

    $query = new \RescueGroups\Request\Objects\WebImages\Search();

#### ::setWebimageID

Sets webimageID field with a value of type integer.

    $query->setWebimageID(integer);

#### ::setWebimageName

Sets webimageName field with a value of type string.

    $query->setWebimageName(string);

#### ::setWebimageFileName

Sets webimageFileName field with a value of type string.

    $query->setWebimageFileName(string);

#### ::setWebimageUrl

Sets webimageUrl field with a value of type string.

    $query->setWebimageUrl(string);

#### ::setWebimageSize

Sets webimageSize field with a value of type string.

    $query->setWebimageSize(string);

#### ::setWebimageWidth

Sets webimageWidth field with a value of type int.

    $query->setWebimageWidth(int);

#### ::setWebimageHeight

Sets webimageHeight field with a value of type int.

    $query->setWebimageHeight(int);



## WebImages\View

Performs webimages.view query.

    $query = new \RescueGroups\Request\Objects\WebImages\View();

#### ::setWebimageID

Sets webimageID field with a value of type integer.

    $query->setWebimageID(integer);



## WebImages\Add

Performs webimages.add query.

    $query = new \RescueGroups\Request\Objects\WebImages\Add();

#### ::setWebimageBinary

Sets webimageBinary field with a value of type binary.

    $query->setWebimageBinary(binary);

#### ::setWebimageOldFileName

Sets webimageOldFileName field with a value of type string.

    $query->setWebimageOldFileName(string);

#### ::setWebimageName

Sets webimageName field with a value of type string.

    $query->setWebimageName(string);



## WebImages\Edit

Performs webimages.edit query.

    $query = new \RescueGroups\Request\Objects\WebImages\Edit();

#### ::setWebimageID

Sets webimageID field with a value of type integer.

    $query->setWebimageID(integer);

#### ::setWebimageName

Sets webimageName field with a value of type string.

    $query->setWebimageName(string);



## WebImages\Delete

Performs webimages.delete query.

    $query = new \RescueGroups\Request\Objects\WebImages\Delete();

#### ::setWebimageID

Sets webimageID field with a value of type integer.

    $query->setWebimageID(integer);





