# MicrochipRegistrations

This is the documentation for the MicrochipRegistrations queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-microchipRegistrations)

## Define






Performs microchipRegistrations.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Define();

    $result = $api->executeRequest($query);


## View







Performs microchipRegistrations.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\View();

    $result = $api->executeRequest($query);


## Search

Performs microchipRegistrations.search search query. This query returns an array of [\RescueGroups\Objects\MicrochipRegistration](../../src/Objects/MicrochipRegistration.php) objects.

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





Performs microchipRegistrations.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\MicrochipRegistration](../../src/Objects/MicrochipRegistration.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Add();

    $addObject = new \RescueGroups\Objects\Create\MicrochipRegistration();
    $addObject->microchipRegistrationMicrochipNumber = "Microchip number"
    $addObject->microchipRegistrationMicrochipVendor = "Microchip vendor"
    $addObject->microchipRegistrationRegistry = "Registry"
    $addObject->microchipRegistrationRegistrantFirstname = "First name"
    $addObject->microchipRegistrationRegistrantLastname = "Last name"
    $addObject->microchipRegistrationRegistrantAddress = "Street address"
    $addObject->microchipRegistrationRegistrantCity = "City"
    $addObject->microchipRegistrationRegistrantState = "State/Province"
    $addObject->microchipRegistrationRegistrantPostalcode = "Postal Code"
    $addObject->microchipRegistrationRegistrantCountry = "Country"
    $addObject->microchipRegistrationRegistrantPrimaryPhone = "Primary phone number"
    $addObject->microchipRegistrationRegistrantSecondaryPhone = "Secondary phone number"
    $addObject->microchipRegistrationRegistrantPrimaryEmail = "Primary email address"
    $addObject->microchipRegistrationRegistrantSecondaryEmail = "Secondary email address"

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


