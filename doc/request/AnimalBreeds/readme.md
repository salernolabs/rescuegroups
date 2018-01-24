# AnimalBreeds

This is the documentation for the AnimalBreeds queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalBreeds)

## Define
Performs animalBreeds.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\Define();

    $result = $api->executeRequest($query);
## PublicList
Performs animalBreeds.publicList list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\PublicList();
    $result = $api->executeRequest($query);
## GetList
Performs animalBreeds.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\GetList();
    $result = $api->executeRequest($query);
## Search
Performs animalBreeds.search search query. This query returns an array of [\RescueGroups\Objects\AnimalBreed](../../../src/Objects/AnimalBreed.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\Search();
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
Performs animalBreeds.publicSearch search query. This query returns an array of [\RescueGroups\Objects\AnimalBreed](../../../src/Objects/AnimalBreed.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\PublicSearch();
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
