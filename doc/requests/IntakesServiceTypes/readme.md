# IntakesServiceTypes

This is the documentation for the intakesServicetypes queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:42 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesServicetypes

## IntakesServiceTypes\GetList

Performs intakesServicetypes.list query.

    $query = new \RescueGroups\Requests\Objects\IntakesServiceTypes\GetList();



## IntakesServiceTypes\View

Performs intakesServicetypes.view query.

    $query = new \RescueGroups\Requests\Objects\IntakesServiceTypes\View();

#### ::setServiceID

Sets serviceID field with a value of type integer.

    $query->setServiceID(integer);



## IntakesServiceTypes\Search

Performs intakesServicetypes.search query.

    $query = new \RescueGroups\Requests\Objects\IntakesServiceTypes\Search();

#### ::setServiceID

Sets serviceID field with a value of type integer.

    $query->setServiceID(integer);

#### ::setServiceName

Sets serviceName field with a value of type string.

    $query->setServiceName(string);



## IntakesServiceTypes\Add

Performs intakesServicetypes.add query.

    $query = new \RescueGroups\Requests\Objects\IntakesServiceTypes\Add();

#### ::setServiceName

Sets serviceName field with a value of type string.

    $query->setServiceName(string);



## IntakesServiceTypes\Edit

Performs intakesServicetypes.edit query.

    $query = new \RescueGroups\Requests\Objects\IntakesServiceTypes\Edit();

#### ::setServiceID

Sets serviceID field with a value of type integer.

    $query->setServiceID(integer);

#### ::setServiceName

Sets serviceName field with a value of type string.

    $query->setServiceName(string);



## IntakesServiceTypes\Delete

Performs intakesServicetypes.delete query.

    $query = new \RescueGroups\Requests\Objects\IntakesServiceTypes\Delete();

#### ::setServiceID

Sets serviceID field with a value of type integer.

    $query->setServiceID(integer);





