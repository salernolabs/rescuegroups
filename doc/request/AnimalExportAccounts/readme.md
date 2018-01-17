# AnimalExportAccounts

This is the documentation for the AnimalExportAccounts queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalExportAccounts)

## GetList


Performs animalExportAccounts.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalExportAccounts\GetList();
    $result = $api->executeRequest($query);





