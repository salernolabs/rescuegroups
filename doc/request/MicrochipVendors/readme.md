# MicrochipVendors

This is the documentation for the MicrochipVendors queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-microchipVendors)

## GetList


Performs microchipVendors.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\MicrochipVendors\GetList();
    $result = $api->executeRequest($query);





