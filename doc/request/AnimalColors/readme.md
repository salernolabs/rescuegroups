# AnimalColors

This is the documentation for the AnimalColors queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalColors)

## GetList


Performs animalColors.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalColors\GetList();
    $result = $api->executeRequest($query);





## PublicList


Performs animalColors.publicList list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalColors\PublicList();
    $result = $api->executeRequest($query);





## Search

Performs animalColors.search search query. This query returns an array of [\RescueGroups\Objects\AnimalColor](../../src/Objects/AnimalColor.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalColors\Search();
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






## PublicSearch

Performs animalColors.publicSearch search query. This query returns an array of [\RescueGroups\Objects\AnimalColor](../../src/Objects/AnimalColor.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalColors\PublicSearch();
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






