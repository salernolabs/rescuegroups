# Donations

This is the documentation for the Donations queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-donations)

## Define
Performs donations.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Donations\Define();

    $result = $api->executeRequest($query);
## GetList
Performs donations.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Donations\GetList();
    $result = $api->executeRequest($query);
## View
Performs donations.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Donations\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs donations.search search query. This query returns an array of [\RescueGroups\Objects\Donation](../../../src/Objects/Donation.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Donations\Search();
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
Performs donations.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\Donation](../../../src/Objects/Donation.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Donations\Add();

    $addObject = new \RescueGroups\Objects\Create\Donation();
    $addObject->amount = "Amount"
    $addObject->inkind = "Inkind type"
    $addObject->comment = "Comment"
    $addObject->lettersent = "Letter sent"
    $addObject->purpose = "Purpose"
    $addObject->date = "Date"
    $addObject->addDonorGroup = "Add contact to Donor group"

    $query->addDonation($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs donations.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Donation](../../../src/Objects/Donation.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Donations\Edit();

    $editObject = new \RescueGroups\Objects\Donation();
    $editObject->id = "ID"
    $editObject->contactId = "Contact"
    $editObject->amount = "Amount"
    $editObject->inkind = "Inkind type"
    $editObject->comment = "Comment"
    $editObject->lettersent = "Letter sent"
    $editObject->purpose = "Purpose"
    $editObject->date = "Date"

    $query->updateDonation($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs donations.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Donations\Delete();

    $query->setId("ID");

    $result = $api->executeRequest($query);

