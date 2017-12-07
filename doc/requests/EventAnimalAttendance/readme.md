# EventAnimalAttendance

This is the documentation for the eventanimalattendance queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:40 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-eventanimalattendance

## EventAnimalAttendance\PublicView

Performs eventanimalattendance.publicView query.

    $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\PublicView();

#### ::setAttendanceID

Sets attendanceID field with a value of type integer.

    $query->setAttendanceID(integer);



## EventAnimalAttendance\View

Performs eventanimalattendance.view query.

    $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\View();

#### ::setAttendanceID

Sets attendanceID field with a value of type integer.

    $query->setAttendanceID(integer);



## EventAnimalAttendance\PublicSearch

Performs eventanimalattendance.publicSearch query.

    $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\PublicSearch();

#### ::setAttendanceID

Sets attendanceID field with a value of type integer.

    $query->setAttendanceID(integer);

#### ::setAttendanceStatus

Sets attendanceStatus field with a value of type string.

    $query->setAttendanceStatus(string);

#### ::setAttendanceAnimalID

Sets attendanceAnimalID field with a value of type integer.

    $query->setAttendanceAnimalID(integer);

#### ::setAttendanceEventID

Sets attendanceEventID field with a value of type integer.

    $query->setAttendanceEventID(integer);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalOrgID

Sets animalOrgID field with a value of type integer.

    $query->setAnimalOrgID(integer);

#### ::setAnimalStatus

Sets animalStatus field with a value of type string.

    $query->setAnimalStatus(string);

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

#### ::setEventLocationName

Sets eventLocationName field with a value of type string.

    $query->setEventLocationName(string);

#### ::setEventLocationUrl

Sets eventLocationUrl field with a value of type url.

    $query->setEventLocationUrl(url);

#### ::setEventLocationAddress

Sets eventLocationAddress field with a value of type string.

    $query->setEventLocationAddress(string);

#### ::setEventLocationCity

Sets eventLocationCity field with a value of type string.

    $query->setEventLocationCity(string);

#### ::setEventLocationState

Sets eventLocationState field with a value of type province.

    $query->setEventLocationState(province);

#### ::setEventLocationPostalcode

Sets eventLocationPostalcode field with a value of type string.

    $query->setEventLocationPostalcode(string);

#### ::setEventLocationCountry

Sets eventLocationCountry field with a value of type integer.

    $query->setEventLocationCountry(integer);

#### ::setEventLocationPhone

Sets eventLocationPhone field with a value of type phone.

    $query->setEventLocationPhone(phone);

#### ::setEventLocationPhoneExt

Sets eventLocationPhoneExt field with a value of type string.

    $query->setEventLocationPhoneExt(string);



## EventAnimalAttendance\Search

Performs eventanimalattendance.search query.

    $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\Search();

#### ::setAttendanceID

Sets attendanceID field with a value of type integer.

    $query->setAttendanceID(integer);

#### ::setAttendanceStatus

Sets attendanceStatus field with a value of type string.

    $query->setAttendanceStatus(string);

#### ::setAttendanceAnimalID

Sets attendanceAnimalID field with a value of type integer.

    $query->setAttendanceAnimalID(integer);

#### ::setAttendanceEventID

Sets attendanceEventID field with a value of type integer.

    $query->setAttendanceEventID(integer);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalOrgID

Sets animalOrgID field with a value of type integer.

    $query->setAnimalOrgID(integer);

#### ::setAnimalStatus

Sets animalStatus field with a value of type string.

    $query->setAnimalStatus(string);

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

#### ::setEventLocationName

Sets eventLocationName field with a value of type string.

    $query->setEventLocationName(string);

#### ::setEventLocationUrl

Sets eventLocationUrl field with a value of type url.

    $query->setEventLocationUrl(url);

#### ::setEventLocationAddress

Sets eventLocationAddress field with a value of type string.

    $query->setEventLocationAddress(string);

#### ::setEventLocationCity

Sets eventLocationCity field with a value of type string.

    $query->setEventLocationCity(string);

#### ::setEventLocationState

Sets eventLocationState field with a value of type province.

    $query->setEventLocationState(province);

#### ::setEventLocationPostalcode

Sets eventLocationPostalcode field with a value of type string.

    $query->setEventLocationPostalcode(string);

#### ::setEventLocationCountry

Sets eventLocationCountry field with a value of type integer.

    $query->setEventLocationCountry(integer);

#### ::setEventLocationPhone

Sets eventLocationPhone field with a value of type phone.

    $query->setEventLocationPhone(phone);

#### ::setEventLocationPhoneExt

Sets eventLocationPhoneExt field with a value of type string.

    $query->setEventLocationPhoneExt(string);

#### ::setEventLocationAnimals

Sets eventLocationAnimals field with a value of type int.

    $query->setEventLocationAnimals(int);

#### ::setEventLocationEvents

Sets eventLocationEvents field with a value of type int.

    $query->setEventLocationEvents(int);

#### ::setEventLocationColonies

Sets eventLocationColonies field with a value of type int.

    $query->setEventLocationColonies(int);

#### ::setEventLocationMeetrequests

Sets eventLocationMeetrequests field with a value of type int.

    $query->setEventLocationMeetrequests(int);



## EventAnimalAttendance\Add

Performs eventanimalattendance.add query.

    $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\Add();

#### ::setAttendanceAnimalID

Sets attendanceAnimalID field with a value of type integer.

    $query->setAttendanceAnimalID(integer);

#### ::setAttendanceStatus

Sets attendanceStatus field with a value of type string.

    $query->setAttendanceStatus(string);

#### ::setAttendanceEventID

Sets attendanceEventID field with a value of type integer.

    $query->setAttendanceEventID(integer);



## EventAnimalAttendance\Edit

Performs eventanimalattendance.edit query.

    $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\Edit();

#### ::setAttendanceID

Sets attendanceID field with a value of type integer.

    $query->setAttendanceID(integer);

#### ::setAttendanceAnimalID

Sets attendanceAnimalID field with a value of type integer.

    $query->setAttendanceAnimalID(integer);

#### ::setAttendanceStatus

Sets attendanceStatus field with a value of type string.

    $query->setAttendanceStatus(string);

#### ::setAttendanceEventID

Sets attendanceEventID field with a value of type integer.

    $query->setAttendanceEventID(integer);



## EventAnimalAttendance\Delete

Performs eventanimalattendance.delete query.

    $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\Delete();

#### ::setAttendanceID

Sets attendanceID field with a value of type integer.

    $query->setAttendanceID(integer);





