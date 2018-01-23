# AnimalSpecies

This is the documentation for the AnimalSpecies queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalSpecies)

## Define
Performs animalSpecies.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalSpecies\Define();

    $result = $api->executeRequest($query);
Performs animalSpecies.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalSpecies\Define();


    $result = $api->executeRequest($query);

## PublicList
Performs animalSpecies.publicList list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalSpecies\PublicList();
    $result = $api->executeRequest($query);
## GetList
Performs animalSpecies.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalSpecies\GetList();
    $result = $api->executeRequest($query);
## ListActive
Performs animalSpecies.listActive query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalSpecies\ListActive();


    $result = $api->executeRequest($query);

## Search
Performs animalSpecies.search search query. This query returns an array of [\RescueGroups\Objects\AnimalSpecies](../../../src/Objects/AnimalSpecies.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalSpecies\Search();
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
