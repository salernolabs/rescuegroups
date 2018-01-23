# AnimalConditions

This is the documentation for the AnimalConditions queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalConditions)

## Define
Performs animalConditions.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalConditions\Define();

    $result = $api->executeRequest($query);
Performs animalConditions.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalConditions\Define();


    $result = $api->executeRequest($query);

## GetList
Performs animalConditions.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalConditions\GetList();
    $result = $api->executeRequest($query);
