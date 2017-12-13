# Locations

This is the documentation for the locations queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-locations)

## Locations\GetList

Performs locations.list query.

    $query = new \RescueGroups\Request\Objects\Locations\GetList();



## Locations\View

Performs locations.view query.

    $query = new \RescueGroups\Request\Objects\Locations\View();

#### ::setLocationID

Sets locationID field with a value of type integer.

    $query->setLocationID(integer);



## Locations\Search

Performs locations.search query.

    $query = new \RescueGroups\Request\Objects\Locations\Search();

#### ::setLocationID

Sets locationID field with a value of type integer.

    $query->setLocationID(integer);

#### ::setLocationName

Sets locationName field with a value of type string.

    $query->setLocationName(string);

#### ::setLocationUrl

Sets locationUrl field with a value of type url.

    $query->setLocationUrl(url);

#### ::setLocationAddress

Sets locationAddress field with a value of type string.

    $query->setLocationAddress(string);

#### ::setLocationCity

Sets locationCity field with a value of type string.

    $query->setLocationCity(string);

#### ::setLocationState

Sets locationState field with a value of type province.

    $query->setLocationState(province);

#### ::setLocationPostalcode

Sets locationPostalcode field with a value of type string.

    $query->setLocationPostalcode(string);

#### ::setLocationCountry

Sets locationCountry field with a value of type integer.

    $query->setLocationCountry(integer);

#### ::setLocationPhone

Sets locationPhone field with a value of type phone.

    $query->setLocationPhone(phone);

#### ::setLocationPhoneExt

Sets locationPhoneExt field with a value of type string.

    $query->setLocationPhoneExt(string);

#### ::setLocationAnimals

Sets locationAnimals field with a value of type int.

    $query->setLocationAnimals(int);

#### ::setLocationEvents

Sets locationEvents field with a value of type int.

    $query->setLocationEvents(int);

#### ::setLocationColonies

Sets locationColonies field with a value of type int.

    $query->setLocationColonies(int);

#### ::setLocationMeetrequest

Sets locationMeetrequest field with a value of type int.

    $query->setLocationMeetrequest(int);



## Locations\Add

Performs locations.add query.

    $query = new \RescueGroups\Request\Objects\Locations\Add();

#### ::setLocationName

Sets locationName field with a value of type string.

    $query->setLocationName(string);

#### ::setLocationUrl

Sets locationUrl field with a value of type url.

    $query->setLocationUrl(url);

#### ::setLocationAddress

Sets locationAddress field with a value of type string.

    $query->setLocationAddress(string);

#### ::setLocationCity

Sets locationCity field with a value of type string.

    $query->setLocationCity(string);

#### ::setLocationState

Sets locationState field with a value of type province.

    $query->setLocationState(province);

#### ::setLocationPostalcode

Sets locationPostalcode field with a value of type string.

    $query->setLocationPostalcode(string);

#### ::setLocationCountry

Sets locationCountry field with a value of type integer.

    $query->setLocationCountry(integer);

#### ::setLocationPhone

Sets locationPhone field with a value of type phone.

    $query->setLocationPhone(phone);

#### ::setLocationPhoneExt

Sets locationPhoneExt field with a value of type string.

    $query->setLocationPhoneExt(string);



## Locations\Edit

Performs locations.edit query.

    $query = new \RescueGroups\Request\Objects\Locations\Edit();

#### ::setLocationID

Sets locationID field with a value of type integer.

    $query->setLocationID(integer);

#### ::setLocationName

Sets locationName field with a value of type string.

    $query->setLocationName(string);

#### ::setLocationUrl

Sets locationUrl field with a value of type url.

    $query->setLocationUrl(url);

#### ::setLocationAddress

Sets locationAddress field with a value of type string.

    $query->setLocationAddress(string);

#### ::setLocationCity

Sets locationCity field with a value of type string.

    $query->setLocationCity(string);

#### ::setLocationState

Sets locationState field with a value of type province.

    $query->setLocationState(province);

#### ::setLocationPostalcode

Sets locationPostalcode field with a value of type string.

    $query->setLocationPostalcode(string);

#### ::setLocationCountry

Sets locationCountry field with a value of type integer.

    $query->setLocationCountry(integer);

#### ::setLocationPhone

Sets locationPhone field with a value of type phone.

    $query->setLocationPhone(phone);

#### ::setLocationPhoneExt

Sets locationPhoneExt field with a value of type string.

    $query->setLocationPhoneExt(string);



## Locations\Delete

Performs locations.delete query.

    $query = new \RescueGroups\Request\Objects\Locations\Delete();

#### ::setLocationID

Sets locationID field with a value of type integer.

    $query->setLocationID(integer);





