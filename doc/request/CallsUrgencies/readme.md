# CallsUrgencies

This is the documentation for the CallsUrgencies queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsUrgencies)

## Define






Performs callsUrgencies.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsUrgencies\Define();

    $result = $api->executeRequest($query);


## GetList


Performs callsUrgencies.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\CallsUrgencies\GetList();
    $result = $api->executeRequest($query);






