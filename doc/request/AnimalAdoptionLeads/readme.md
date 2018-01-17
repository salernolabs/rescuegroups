# AnimalAdoptionLeads

This is the documentation for the AnimalAdoptionLeads queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalAdoptionLeads)

## GetList


Performs animalAdoptionLeads.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalAdoptionLeads\GetList();
    $result = $api->executeRequest($query);





