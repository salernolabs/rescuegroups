# Settings

This is the documentation for the Settings queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-settings)

## Define






Performs settings.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Settings\Define();

    $result = $api->executeRequest($query);


## GetList


Performs settings.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Settings\GetList();
    $result = $api->executeRequest($query);






## GetUserSetting







Performs settings.getUserSetting query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Settings\GetUserSetting();

    $result = $api->executeRequest($query);


## SetUserSetting







Performs settings.setUserSetting query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Settings\SetUserSetting();

    $result = $api->executeRequest($query);


