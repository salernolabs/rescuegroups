# CallsStatuses

This is the documentation for the CallsStatuses queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsStatuses)

## Define






Performs callsStatuses.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsStatuses\Define();

    $result = $api->executeRequest($query);


## GetList


Performs callsStatuses.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\CallsStatuses\GetList();
    $result = $api->executeRequest($query);






