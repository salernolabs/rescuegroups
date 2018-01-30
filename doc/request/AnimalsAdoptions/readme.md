# AnimalsAdoptions

This is the documentation for the AnimalsAdoptions queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsAdoptions)

## Define
Performs animalsAdoptions.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Define();

    $result = $api->executeRequest($query);
## GetList
Performs animalsAdoptions.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\GetList();
    $result = $api->executeRequest($query);
## Search
Performs animalsAdoptions.search search query. This query returns an array of [\RescueGroups\Objects\Search\AnimalsAdoption](../../../src/Objects/Search/AnimalsAdoption.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Search();
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
## View
Performs animalsAdoptions.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\View();

    $query->setId("Adoption ID");

    $result = $api->executeRequest($query);

## Add
Performs animalsAdoptions.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\AnimalsAdoption](../../../src/Objects/AnimalsAdoption.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Add();

    $addObject = new \RescueGroups\Objects\Create\AnimalsAdoption();
    $addObject->adopterId = "Adopter ID"
    $addObject->leadId = "Lead ID"
    $addObject->feeAmount = "Fee"
    $addObject->donationAmount = "Donation"
    $addObject->donationId = "Donation ID"
    $addObject->date = "Date"
    $addObject->submittedformId = "Submitted form ID"
    $addObject->statusId = "Status ID"
    $addObject->letterSent = "Thank you letter sent"
    $addObject->addAdopterRole = "Add contact to adopters group"

    $query->addAnimalsAdoption($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animalsAdoptions.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\AnimalsAdoption](../../../src/Objects/AnimalsAdoption.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Edit();

    $editObject = new \RescueGroups\Objects\AnimalsAdoption();
    $editObject->id = "Adoption ID"
    $editObject->animalId = "Animal ID"
    $editObject->adopterId = "Adopter ID"
    $editObject->leadId = "Lead ID"
    $editObject->feeAmount = "Fee"
    $editObject->donationAmount = "Donation"
    $editObject->donationId = "Donation ID"
    $editObject->date = "Date"
    $editObject->submittedformId = "Submitted form ID"
    $editObject->statusId = "Status ID"
    $editObject->letterSent = "Thank you letter sent"

    $query->updateAnimalsAdoption($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs animalsAdoptions.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Delete();

    $query->setId("Adoption ID");
    $query->setRemoveContact("Remove contact from adopters group");
    $query->setChangeAnimal("Change animal to available");
    $query->setChangeSubmittedform("Change submitted form to cancelled");
    $query->setRemoveUser("Remove Adopter role from user");
    $query->setDonationAmount("Donation");
    $query->setLetterSent("Thank you letter sent");

    $result = $api->executeRequest($query);

## GetSettings
Performs animalsAdoptions.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs animalsAdoptions.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\UpdateSettings();

    $query->setShowAdoptionsTrackingMessage("Show a reminder to use the Adoptions feature when changing an animal's status to Adopted");
    $query->setShowAppPending("Show an &quot;Application Pending&quot; message on public pages for animals when applicable");
    $query->setShowAppPendingAdoptAnyway("Show an &quot;Apply anyway&quot; message on public pages for animals when applicable");
    $query->setPreventApplicationsForPendingAnimals("Prevent applications from being submitted for animals with a pending application");

    $result = $api->executeRequest($query);

