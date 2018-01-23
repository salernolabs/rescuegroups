# MicrochipRegistrations

This is the documentation for the MicrochipRegistrations queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-microchipRegistrations)

## Define
Performs microchipRegistrations.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Define();

    $result = $api->executeRequest($query);
Performs microchipRegistrations.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Define();


    $result = $api->executeRequest($query);

## View
Performs microchipRegistrations.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\View();

    $query->setid("ID");

    $result = $api->executeRequest($query);

## Search
Performs microchipRegistrations.search search query. This query returns an array of [\RescueGroups\Objects\MicrochipRegistration](../../../src/Objects/MicrochipRegistration.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Search();
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
Performs microchipRegistrations.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\MicrochipRegistration](../../../src/Objects/MicrochipRegistration.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Add();

    $addObject = new \RescueGroups\Objects\Create\MicrochipRegistration();
    $addObject->microchipNumber = "Microchip number"
    $addObject->microchipVendor = "Microchip vendor"
    $addObject->registry = "Registry"
    $addObject->registrantFirstname = "First name"
    $addObject->registrantLastname = "Last name"
    $addObject->registrantAddress = "Street address"
    $addObject->registrantCity = "City"
    $addObject->registrantState = "State/Province"
    $addObject->registrantPostalcode = "Postal Code"
    $addObject->registrantCountry = "Country"
    $addObject->registrantPrimaryPhone = "Primary phone number"
    $addObject->registrantSecondaryPhone = "Secondary phone number"
    $addObject->registrantPrimaryEmail = "Primary email address"
    $addObject->registrantSecondaryEmail = "Secondary email address"

    $query->addMicrochipRegistration($addObject);

    $result = $api->executeRequest($query);
## GetSettings
Performs microchipRegistrations.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs microchipRegistrations.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\UpdateSettings();


    $result = $api->executeRequest($query);

