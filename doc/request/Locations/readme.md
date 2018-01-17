# Locations

This is the documentation for the Locations queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-locations)

## Define
Performs locations.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Locations\Define();

    $result = $api->executeRequest($query);
## GetList
Performs locations.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Locations\GetList();
    $result = $api->executeRequest($query);
## View
Performs locations.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Locations\View();

    $query->setlocationID("ID");

    $result = $api->executeRequest($query);

## Search
Performs locations.search search query. This query returns an array of [\RescueGroups\Objects\Location](../../../src/Objects/Location.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Locations\Search();
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
## Add
Performs locations.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\Location](../../../src/Objects/Location.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Locations\Add();

    $addObject = new \RescueGroups\Objects\Location();
    $addObject->locationName = "Name"
    $addObject->locationUrl = "Web address"
    $addObject->locationAddress = "Street address"
    $addObject->locationCity = "City"
    $addObject->locationState = "State/Province"
    $addObject->locationPostalcode = "Postal Code"
    $addObject->locationPhone = "Phone"
    $addObject->locationPhoneExt = "Phone extension"

    $query->addLocation($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs locations.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Location](../../../src/Objects/Location.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Locations\Edit();

    $editObject = new \RescueGroups\Objects\Location();
    $editObject->locationID = "ID"
    $editObject->locationName = "Name"
    $editObject->locationUrl = "Web address"
    $editObject->locationAddress = "Street address"
    $editObject->locationCity = "City"
    $editObject->locationState = "State/Province"
    $editObject->locationPostalcode = "Postal Code"
    $editObject->locationCountry = "Country"
    $editObject->locationPhone = "Phone"
    $editObject->locationPhoneExt = "Phone extension"

    $query->updateLocation($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs locations.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Locations\Delete();

    $query->setlocationID("ID");

    $result = $api->executeRequest($query);

