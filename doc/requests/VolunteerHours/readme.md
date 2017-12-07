# VolunteerHours

This is the documentation for the volunteerHours queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:46 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-volunteerHours

## VolunteerHours\Search

Performs volunteerHours.search query.

    $query = new \RescueGroups\Requests\Objects\VolunteerHours\Search();

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

    $query = new \RescueGroups\Requests\Objects\VolunteerHours\View();

#### ::setId

Sets volunteerHoursID field with a value of type integer.

    $query->setId(integer);



## VolunteerHours\Add

Performs volunteerHours.add query.

    $query = new \RescueGroups\Requests\Objects\VolunteerHours\Add();

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

    $query = new \RescueGroups\Requests\Objects\VolunteerHours\Edit();

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

    $query = new \RescueGroups\Requests\Objects\VolunteerHours\Delete();

#### ::setId

Sets volunteerHoursID field with a value of type integer.

    $query->setId(integer);





