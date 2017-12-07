# Memorials

This is the documentation for the memorials queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:57:24 by the source generator in the bin subfolder.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-memorials)

## Memorials\View

Performs memorials.view query.

    $query = new \RescueGroups\Requests\Objects\Memorials\View();

#### ::setMemorialID

Sets memorialID field with a value of type integer.

    $query->setMemorialID(integer);



## Memorials\Search

Performs memorials.search query.

    $query = new \RescueGroups\Requests\Objects\Memorials\Search();

#### ::setMemorialID

Sets memorialID field with a value of type integer.

    $query->setMemorialID(integer);

#### ::setMemorialPictureFileName

Sets memorialPictureFileName field with a value of type string.

    $query->setMemorialPictureFileName(string);

#### ::setMemorialPictureUrl

Sets memorialPictureUrl field with a value of type string.

    $query->setMemorialPictureUrl(string);

#### ::setMemorialPictureThumbnailUrl

Sets memorialPictureThumbnailUrl field with a value of type string.

    $query->setMemorialPictureThumbnailUrl(string);

#### ::setMemorialName

Sets memorialName field with a value of type string.

    $query->setMemorialName(string);

#### ::setMemorialDescription

Sets memorialDescription field with a value of type string.

    $query->setMemorialDescription(string);

#### ::setMemorialOrder

Sets memorialOrder field with a value of type integer.

    $query->setMemorialOrder(integer);



## Memorials\Add

Performs memorials.add query.

    $query = new \RescueGroups\Requests\Objects\Memorials\Add();

#### ::setMemorialPictureBinary

Sets memorialPictureBinary field with a value of type binary.

    $query->setMemorialPictureBinary(binary);

#### ::setMemorialName

Sets memorialName field with a value of type string.

    $query->setMemorialName(string);

#### ::setMemorialPictureOldFileName

Sets memorialPictureOldFileName field with a value of type string.

    $query->setMemorialPictureOldFileName(string);

#### ::setMemorialDescription

Sets memorialDescription field with a value of type string.

    $query->setMemorialDescription(string);

#### ::setMemorialOrder

Sets memorialOrder field with a value of type integer.

    $query->setMemorialOrder(integer);



## Memorials\Edit

Performs memorials.edit query.

    $query = new \RescueGroups\Requests\Objects\Memorials\Edit();

#### ::setMemorialID

Sets memorialID field with a value of type integer.

    $query->setMemorialID(integer);

#### ::setMemorialPictureBinary

Sets memorialPictureBinary field with a value of type binary.

    $query->setMemorialPictureBinary(binary);

#### ::setMemorialPictureOldFileName

Sets memorialPictureOldFileName field with a value of type string.

    $query->setMemorialPictureOldFileName(string);

#### ::setMemorialName

Sets memorialName field with a value of type string.

    $query->setMemorialName(string);

#### ::setMemorialDescription

Sets memorialDescription field with a value of type string.

    $query->setMemorialDescription(string);



## Memorials\Delete

Performs memorials.delete query.

    $query = new \RescueGroups\Requests\Objects\Memorials\Delete();

#### ::setMemorialID

Sets memorialID field with a value of type integer.

    $query->setMemorialID(integer);



## Memorials\GetSettings

Performs memorials.getSettings query.

    $query = new \RescueGroups\Requests\Objects\Memorials\GetSettings();



## Memorials\UpdateSettings

Performs memorials.updateSettings query.

    $query = new \RescueGroups\Requests\Objects\Memorials\UpdateSettings();

#### ::setEnableMemorials

Sets enableMemorials field with a value of type string.

    $query->setEnableMemorials(string);

#### ::setSetMemorialsDonationOnlineStoreItem

Sets setMemorialsDonationOnlineStoreItem field with a value of type int.

    $query->setSetMemorialsDonationOnlineStoreItem(int);

#### ::setShowMemorialsAlphaLinks

Sets showMemorialsAlphaLinks field with a value of type string.

    $query->setShowMemorialsAlphaLinks(string);





