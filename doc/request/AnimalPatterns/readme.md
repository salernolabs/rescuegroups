# AnimalPatterns

This is the documentation for the AnimalPatterns queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalPatterns)

## Define






Performs animalPatterns.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\Define();

    $result = $api->executeRequest($query);


## PublicList


Performs animalPatterns.publicList list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\PublicList();
    $result = $api->executeRequest($query);






## GetList


Performs animalPatterns.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\GetList();
    $result = $api->executeRequest($query);






## Search

Performs animalPatterns.search search query. This query returns an array of [\RescueGroups\Objects\AnimalPattern](../../src/Objects/AnimalPattern.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\Search();
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

Performs animalPatterns.publicSearch search query. This query returns an array of [\RescueGroups\Objects\AnimalPattern](../../src/Objects/AnimalPattern.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\PublicSearch();
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







