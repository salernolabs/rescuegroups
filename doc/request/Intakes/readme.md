# Intakes

This is the documentation for the Intakes queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakes)

## Define
Performs intakes.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Intakes\Define();

    $result = $api->executeRequest($query);
## GetList
Performs intakes.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Intakes\GetList();
    $result = $api->executeRequest($query);
## Search
Performs intakes.search search query. This query returns an array of [\RescueGroups\Objects\Intake](../../../src/Objects/Intake.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Intakes\Search();
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
Performs intakes.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Intakes\View();

    $query->setintakeID("Intake");

    $result = $api->executeRequest($query);

## Delete
Performs intakes.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Intakes\Delete();

    $query->setintakeID("Intake");

    $result = $api->executeRequest($query);

