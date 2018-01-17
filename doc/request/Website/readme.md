# Website

This is the documentation for the Website queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-website)

## Define






Performs website.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Website\Define();

    $result = $api->executeRequest($query);


## GetSettings







Performs website.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Website\GetSettings();

    $result = $api->executeRequest($query);


## UpdateSettings







Performs website.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Website\UpdateSettings();

    $result = $api->executeRequest($query);


