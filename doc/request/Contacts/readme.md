# Contacts

This is the documentation for the Contacts queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-contacts)

## Define
Performs contacts.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\Define();

    $result = $api->executeRequest($query);
## View
Performs contacts.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\View();

    $query->setcontactID("ID");

    $result = $api->executeRequest($query);

## GetList
Performs contacts.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Contacts\GetList();
    $result = $api->executeRequest($query);
## ListRescues
Performs contacts.listRescues query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\ListRescues();


    $result = $api->executeRequest($query);

## ListFosters
Performs contacts.listFosters query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\ListFosters();


    $result = $api->executeRequest($query);

## Search
Performs contacts.search search query. This query returns an array of [\RescueGroups\Objects\Contact](../../../src/Objects/Contact.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Contacts\Search();
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
Performs contacts.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\Contact](../../../src/Objects/Contact.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Contacts\Add();

    $addObject = new \RescueGroups\Objects\Create\Contact();
    $addObject->contactClass = "Class"
    $addObject->alutation = "Salutation"
    $addObject->contactFirstname = "First name"
    $addObject->contactLastname = "Last name"
    $addObject->contactTitle = "Title"
    $addObject->contactAddress = "Street address"
    $addObject->contactCity = "City"
    $addObject->tate = "State/Province"
    $addObject->contactPostalcode = "Postal Code"
    $addObject->contactPlus4 = "Zip code plus 4"
    $addObject->contactCounty = "County"
    $addObject->contactPhoneHome = "Home phone number"
    $addObject->contactPhoneWork = "Work phone number"
    $addObject->contactPhoneWorkExt = "Work phone extension"
    $addObject->contactPhoneCell = "Cell phone number"
    $addObject->contactFax = "Fax number"
    $addObject->contactEmail = "Email address"
    $addObject->contactEmailAlt = "Alternate email address"
    $addObject->contactEmailPager = "Pager email address"
    $addObject->contactCompany = "Company"
    $addObject->contactReferredBy = "Referred by"
    $addObject->contactCarrier = "Carrier"
    $addObject->endMail = "Send mail"
    $addObject->contactActive = "Active"
    $addObject->contactComment = "Comment"
    $addObject->contactCoalitionMember = "Coalition member"
    $addObject->contactTransportation = "Transportation"
    $addObject->contactAvailability = "Availability"
    $addObject->contactCaretakerPublic = "Caretaker public"
    $addObject->endInvite = "Send website invitation"
    $addObject->contactGroups = "Groups"

    $query->addContact($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs contacts.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Contact](../../../src/Objects/Contact.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Contacts\Edit();

    $editObject = new \RescueGroups\Objects\Contact();
    $editObject->contactID = "ID"
    $editObject->contactClass = "Class"
    $editObject->alutation = "Salutation"
    $editObject->contactFirstname = "First name"
    $editObject->contactLastname = "Last name"
    $editObject->contactTitle = "Title"
    $editObject->contactAddress = "Street address"
    $editObject->contactCity = "City"
    $editObject->tate = "State/Province"
    $editObject->contactPostalcode = "Postal Code"
    $editObject->contactPlus4 = "Zip code plus 4"
    $editObject->contactCounty = "County"
    $editObject->contactCountry = "Country"
    $editObject->contactPhoneHome = "Home phone number"
    $editObject->contactPhoneWork = "Work phone number"
    $editObject->contactPhoneWorkExt = "Work phone extension"
    $editObject->contactPhoneCell = "Cell phone number"
    $editObject->contactFax = "Fax number"
    $editObject->contactEmail = "Email address"
    $editObject->contactEmailAlt = "Alternate email address"
    $editObject->contactEmailPager = "Pager email address"
    $editObject->contactCompany = "Company"
    $editObject->contactReferredBy = "Referred by"
    $editObject->contactCarrier = "Carrier"
    $editObject->endMail = "Send mail"
    $editObject->contactActive = "Active"
    $editObject->contactComment = "Comment"
    $editObject->contactCoalitionMember = "Coalition member"
    $editObject->contactTransportation = "Transportation"
    $editObject->contactAvailability = "Availability"
    $editObject->contactCaretakerPublic = "Caretaker public"
    $editObject->contactGroups = "Groups"

    $query->updateContact($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs contacts.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\Delete();

    $query->setcontactID("ID");

    $result = $api->executeRequest($query);

## GetSettings
Performs contacts.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs contacts.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\UpdateSettings();

    $query->setenableDoNotAdoptListSharing("Share your organization's Do Not Adopt list");
    $query->setenableAutoSelectRegistrationInvitation("Automatically select to send Registration Invitation");
    $query->setenableAutoSelectCaretakerInfoPublic("Automatically select to set caretaker information public");
    $query->setenableAddContactOnlineFormSubmission("Add a Contact record when an Online Form is submitted");
    $query->setenableAddContactMeetRequest("Add a Contact record when an Meet Request is submitted");
    $query->setenableAddContactCallCreation("Add a Contact record when a Call is created from the Contact Us page");
    $query->setenableAddContactAnimalSponsorship("Add a Contact record when an Animal Sponsorship is submitted");
    $query->setenableAddContactUserRegistration("Add a Contact record when a user registers");

    $result = $api->executeRequest($query);

