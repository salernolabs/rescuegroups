# CallsUrgencies

This is the documentation for the CallsUrgencies queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsUrgencies)

## GetList


Performs callsUrgencies.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\CallsUrgencies\GetList();
    $result = $api->executeRequest($query);





