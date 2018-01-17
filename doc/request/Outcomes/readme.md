# Outcomes

This is the documentation for the Outcomes queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomes)

## GetList


Performs outcomes.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Outcomes\GetList();
    $result = $api->executeRequest($query);





## Search

Performs outcomes.search search query. This query returns an array of [\RescueGroups\Objects\Outcome](../../src/Objects/Outcome.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Outcomes\Search();
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






## View






Performs outcomes.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Outcomes\View();

    $result = $api->executeRequest($query);


