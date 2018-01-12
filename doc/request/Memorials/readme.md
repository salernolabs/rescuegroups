# Memorials

This is the documentation for the memorials queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-memorials)

## Memorials\View

Performs memorials.view query.

    $query = new \RescueGroups\Request\Objects\Memorials\View();

#### ::setMemorialID

Sets memorialID field with a value of type integer.

    $query->setMemorialID(integer);



## Memorials\Search

Performs memorials.search query.

    $query = new \RescueGroups\Request\Objects\Memorials\Search();

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

Sets memorialOrder field with a value of type string.

    $query->setMemorialOrder(string);



## Memorials\Add

Performs memorials.add query.

    $query = new \RescueGroups\Request\Objects\Memorials\Add();

#### ::setMemorialPictureBinary

Sets memorialPictureBinary field with a value of type string.

    $query->setMemorialPictureBinary(string);

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

Sets memorialOrder field with a value of type string.

    $query->setMemorialOrder(string);



## Memorials\Edit

Performs memorials.edit query.

    $query = new \RescueGroups\Request\Objects\Memorials\Edit();

#### ::setMemorialID

Sets memorialID field with a value of type integer.

    $query->setMemorialID(integer);

#### ::setMemorialPictureBinary

Sets memorialPictureBinary field with a value of type string.

    $query->setMemorialPictureBinary(string);

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

    $query = new \RescueGroups\Request\Objects\Memorials\Delete();

#### ::setMemorialID

Sets memorialID field with a value of type integer.

    $query->setMemorialID(integer);



## Memorials\GetSettings

Performs memorials.getSettings query.

    $query = new \RescueGroups\Request\Objects\Memorials\GetSettings();



## Memorials\UpdateSettings

Performs memorials.updateSettings query.

    $query = new \RescueGroups\Request\Objects\Memorials\UpdateSettings();

#### ::setEnableMemorials

Sets enableMemorials field with a value of type string.

    $query->setEnableMemorials(string);

#### ::setSetMemorialsDonationOnlineStoreItem

Sets setMemorialsDonationOnlineStoreItem field with a value of type string.

    $query->setSetMemorialsDonationOnlineStoreItem(string);

#### ::setShowMemorialsAlphaLinks

Sets showMemorialsAlphaLinks field with a value of type string.

    $query->setShowMemorialsAlphaLinks(string);




