# VolunteerHours

This is the documentation for the volunteerHours queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-volunteerHours)

## VolunteerHours\Search

Performs volunteerHours.search query.

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Search();

#### ::setId

Sets volunteerHoursID field with a value of type integer.

    $query->setId(integer);

#### ::setVolunteerID

Sets volunteerHoursVolunteerID field with a value of type integer.

    $query->setVolunteerID(integer);

#### ::setVolunteerDate

Sets volunteerHoursVolunteerDate field with a value of type \DateTime.

    $query->setVolunteerDate(\DateTime);

#### ::setCreatedDate

Sets volunteerHoursCreatedDate field with a value of type \DateTime.

    $query->setCreatedDate(\DateTime);

#### ::setVolunteerLength

Sets volunteerHoursVolunteerLength field with a value of type float.

    $query->setVolunteerLength(float);

#### ::setVolunteerTask

Sets volunteerHoursVolunteerTask field with a value of type string.

    $query->setVolunteerTask(string);

#### ::setVolunteerType

Sets volunteerType field with a value of type string.

    $query->setVolunteerType(string);



## VolunteerHours\View

Performs volunteerHours.view query.

    $query = new \RescueGroups\Request\Objects\VolunteerHours\View();

#### ::setId

Sets volunteerHoursID field with a value of type integer.

    $query->setId(integer);



## VolunteerHours\Add

Performs volunteerHours.add query.

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Add();

#### ::setVolunteerID

Sets volunteerHoursVolunteerID field with a value of type integer.

    $query->setVolunteerID(integer);

#### ::setVolunteerDate

Sets volunteerHoursVolunteerDate field with a value of type \DateTime.

    $query->setVolunteerDate(\DateTime);

#### ::setVolunteerLength

Sets volunteerHoursVolunteerLength field with a value of type float.

    $query->setVolunteerLength(float);

#### ::setVolunteerTask

Sets volunteerHoursVolunteerTask field with a value of type string.

    $query->setVolunteerTask(string);



## VolunteerHours\Edit

Performs volunteerHours.edit query.

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Edit();

#### ::setId

Sets volunteerHoursID field with a value of type integer.

    $query->setId(integer);

#### ::setVolunteerID

Sets volunteerHoursVolunteerID field with a value of type integer.

    $query->setVolunteerID(integer);

#### ::setVolunteerDate

Sets volunteerHoursVolunteerDate field with a value of type \DateTime.

    $query->setVolunteerDate(\DateTime);

#### ::setVolunteerLength

Sets volunteerHoursVolunteerLength field with a value of type float.

    $query->setVolunteerLength(float);

#### ::setVolunteerTask

Sets volunteerHoursVolunteerTask field with a value of type string.

    $query->setVolunteerTask(string);



## VolunteerHours\Delete

Performs volunteerHours.delete query.

    $query = new \RescueGroups\Request\Objects\VolunteerHours\Delete();

#### ::setId

Sets volunteerHoursID field with a value of type integer.

    $query->setId(integer);





