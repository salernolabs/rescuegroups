# AnimalStatuses

This is the documentation for the AnimalStatuses queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalStatuses)

## GetList


Performs animalStatuses.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalStatuses\GetList();
    $result = $api->executeRequest($query);





## Search

Performs animalStatuses.search search query. This query returns an array of [\RescueGroups\Objects\AnimalStatus](../../src/Objects/AnimalStatus.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalStatuses\Search();
    $query
        ->setResultStart(10)
        ->setResultLimit(20)
        ->setResultSort('objectField')
        ->setResultOrder('asc')
        ->setCalculateFoundRows(true)
        ->addFilter('someObjectField', 'equals', 33)
        ->addField('objectField')
        ->addField('someOtherObjectField');

    $result = $api->executeRequest($query);






