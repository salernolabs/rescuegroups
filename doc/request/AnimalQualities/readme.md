# AnimalQualities

This is the documentation for the AnimalQualities queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalQualities)

## PublicList


Performs animalQualities.publicList list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalQualities\PublicList();
    $result = $api->executeRequest($query);





## GetList


Performs animalQualities.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalQualities\GetList();
    $result = $api->executeRequest($query);





