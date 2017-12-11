# Events

This is the documentation for the events queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-events)

## Events\GetList

Performs events.list query.

    $query = new \RescueGroups\Requests\Objects\Events\GetList();



## Events\PublicView

Performs events.publicView query.

    $query = new \RescueGroups\Requests\Objects\Events\PublicView();

#### ::setEventID

Sets eventID field with a value of type integer.

    $query->setEventID(integer);



## Events\View

Performs events.view query.

    $query = new \RescueGroups\Requests\Objects\Events\View();

#### ::setEventID

Sets eventID field with a value of type integer.

    $query->setEventID(integer);



## Events\PublicSearch

Performs events.publicSearch query.

    $query = new \RescueGroups\Requests\Objects\Events\PublicSearch();

#### ::setEventID

Sets eventID field with a value of type integer.

    $query->setEventID(integer);

#### ::setEventOrgID

Sets eventOrgID field with a value of type integer.

    $query->setEventOrgID(integer);

#### ::setEventName

Sets eventName field with a value of type string.

    $query->setEventName(string);

#### ::setEventStart

Sets eventStart field with a value of type \DateTime.

    $query->setEventStart(\DateTime);

#### ::setEventEnd

Sets eventEnd field with a value of type \DateTime.

    $query->setEventEnd(\DateTime);

#### ::setEventUrl

Sets eventUrl field with a value of type url.

    $query->setEventUrl(url);

#### ::setEventDescription

Sets eventDescription field with a value of type string.

    $query->setEventDescription(string);

#### ::setEventLocationID

Sets eventLocationID field with a value of type integer.

    $query->setEventLocationID(integer);

#### ::setEventSpecies

Sets eventSpecies field with a value of type integer.

    $query->setEventSpecies(integer);

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

#### ::setLocationEvents

Sets locationEvents field with a value of type int.

    $query->setLocationEvents(int);

#### ::setLocationDistance

Sets locationDistance field with a value of type int.

    $query->setLocationDistance(int);



## Events\Search

Performs events.search query.

    $query = new \RescueGroups\Requests\Objects\Events\Search();

#### ::setEventID

Sets eventID field with a value of type integer.

    $query->setEventID(integer);

#### ::setEventName

Sets eventName field with a value of type string.

    $query->setEventName(string);

#### ::setEventStart

Sets eventStart field with a value of type \DateTime.

    $query->setEventStart(\DateTime);

#### ::setEventEnd

Sets eventEnd field with a value of type \DateTime.

    $query->setEventEnd(\DateTime);

#### ::setEventUrl

Sets eventUrl field with a value of type url.

    $query->setEventUrl(url);

#### ::setEventDescription

Sets eventDescription field with a value of type string.

    $query->setEventDescription(string);

#### ::setEventLocationID

Sets eventLocationID field with a value of type integer.

    $query->setEventLocationID(integer);

#### ::setEventAnimalAttendance

Sets eventAnimalAttendance field with a value of type int.

    $query->setEventAnimalAttendance(int);

#### ::setEventMeetrequests

Sets eventMeetrequests field with a value of type int.

    $query->setEventMeetrequests(int);

#### ::setEventSpecies

Sets eventSpecies field with a value of type integer.

    $query->setEventSpecies(integer);

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

#### ::setLocationMeetrequests

Sets locationMeetrequests field with a value of type int.

    $query->setLocationMeetrequests(int);



## Events\Add

Performs events.add query.

    $query = new \RescueGroups\Requests\Objects\Events\Add();

#### ::setEventName

Sets eventName field with a value of type string.

    $query->setEventName(string);

#### ::setEventStart

Sets eventStart field with a value of type \DateTime.

    $query->setEventStart(\DateTime);

#### ::setEventEnd

Sets eventEnd field with a value of type \DateTime.

    $query->setEventEnd(\DateTime);

#### ::setEventUrl

Sets eventUrl field with a value of type url.

    $query->setEventUrl(url);

#### ::setEventDescription

Sets eventDescription field with a value of type string.

    $query->setEventDescription(string);

#### ::setEventLocationID

Sets eventLocationID field with a value of type integer.

    $query->setEventLocationID(integer);

#### ::setEventSpecies

Sets eventSpecies field with a value of type integer.

    $query->setEventSpecies(integer);



## Events\Edit

Performs events.edit query.

    $query = new \RescueGroups\Requests\Objects\Events\Edit();

#### ::setEventID

Sets eventID field with a value of type integer.

    $query->setEventID(integer);

#### ::setEventName

Sets eventName field with a value of type string.

    $query->setEventName(string);

#### ::setEventStart

Sets eventStart field with a value of type \DateTime.

    $query->setEventStart(\DateTime);

#### ::setEventEnd

Sets eventEnd field with a value of type \DateTime.

    $query->setEventEnd(\DateTime);

#### ::setEventUrl

Sets eventUrl field with a value of type url.

    $query->setEventUrl(url);

#### ::setEventDescription

Sets eventDescription field with a value of type string.

    $query->setEventDescription(string);

#### ::setEventLocationID

Sets eventLocationID field with a value of type integer.

    $query->setEventLocationID(integer);

#### ::setEventSpecies

Sets eventSpecies field with a value of type integer.

    $query->setEventSpecies(integer);



## Events\Delete

Performs events.delete query.

    $query = new \RescueGroups\Requests\Objects\Events\Delete();

#### ::setEventID

Sets eventID field with a value of type integer.

    $query->setEventID(integer);



## Events\GetSettings

Performs events.getSettings query.

    $query = new \RescueGroups\Requests\Objects\Events\GetSettings();



## Events\UpdateSettings

Performs events.updateSettings query.

    $query = new \RescueGroups\Requests\Objects\Events\UpdateSettings();

#### ::setEnableEvents

Sets enableEvents field with a value of type string.

    $query->setEnableEvents(string);

#### ::setSetEventsMapWebsite

Sets setEventsMapWebsite field with a value of type string.

    $query->setSetEventsMapWebsite(string);





