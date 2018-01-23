# Contacts

This is the documentation for the Contacts queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-contacts)

## Define
Performs contacts.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\Define();

    $result = $api->executeRequest($query);
Performs contacts.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\Define();


    $result = $api->executeRequest($query);

## View
Performs contacts.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\View();

    $query->setid("ID");

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
    $addObject->class = "Class"
    $addObject->salutation = "Salutation"
    $addObject->firstname = "First name"
    $addObject->lastname = "Last name"
    $addObject->title = "Title"
    $addObject->address = "Street address"
    $addObject->city = "City"
    $addObject->state = "State/Province"
    $addObject->postalcode = "Postal Code"
    $addObject->plus4 = "Zip code plus 4"
    $addObject->county = "County"
    $addObject->phoneHome = "Home phone number"
    $addObject->phoneWork = "Work phone number"
    $addObject->phoneWorkExt = "Work phone extension"
    $addObject->phoneCell = "Cell phone number"
    $addObject->fax = "Fax number"
    $addObject->email = "Email address"
    $addObject->emailAlt = "Alternate email address"
    $addObject->emailPager = "Pager email address"
    $addObject->company = "Company"
    $addObject->referredBy = "Referred by"
    $addObject->carrier = "Carrier"
    $addObject->sendMail = "Send mail"
    $addObject->active = "Active"
    $addObject->comment = "Comment"
    $addObject->coalitionMember = "Coalition member"
    $addObject->transportation = "Transportation"
    $addObject->availability = "Availability"
    $addObject->caretakerPublic = "Caretaker public"
    $addObject->sendInvite = "Send website invitation"
    $addObject->groups = "Groups"

    $query->addContact($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs contacts.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Contact](../../../src/Objects/Contact.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Contacts\Edit();

    $editObject = new \RescueGroups\Objects\Contact();
    $editObject->id = "ID"
    $editObject->class = "Class"
    $editObject->salutation = "Salutation"
    $editObject->firstname = "First name"
    $editObject->lastname = "Last name"
    $editObject->title = "Title"
    $editObject->address = "Street address"
    $editObject->city = "City"
    $editObject->state = "State/Province"
    $editObject->postalcode = "Postal Code"
    $editObject->plus4 = "Zip code plus 4"
    $editObject->county = "County"
    $editObject->country = "Country"
    $editObject->phoneHome = "Home phone number"
    $editObject->phoneWork = "Work phone number"
    $editObject->phoneWorkExt = "Work phone extension"
    $editObject->phoneCell = "Cell phone number"
    $editObject->fax = "Fax number"
    $editObject->email = "Email address"
    $editObject->emailAlt = "Alternate email address"
    $editObject->emailPager = "Pager email address"
    $editObject->company = "Company"
    $editObject->referredBy = "Referred by"
    $editObject->carrier = "Carrier"
    $editObject->sendMail = "Send mail"
    $editObject->active = "Active"
    $editObject->comment = "Comment"
    $editObject->coalitionMember = "Coalition member"
    $editObject->transportation = "Transportation"
    $editObject->availability = "Availability"
    $editObject->caretakerPublic = "Caretaker public"
    $editObject->groups = "Groups"

    $query->updateContact($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs contacts.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Contacts\Delete();

    $query->setid("ID");

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

    $query->setenableContactsDoNotAdoptListSharing("Share your organization's Do Not Adopt list");
    $query->setenableContactsAutoSelectRegistrationInvitation("Automatically select to send Registration Invitation");
    $query->setenableContactsAutoSelectCaretakerInfoPublic("Automatically select to set caretaker information public");
    $query->setenableAddContactOnlineFormSubmission("Add a Contact record when an Online Form is submitted");
    $query->setenableContactsAddContactMeetRequest("Add a Contact record when an Meet Request is submitted");
    $query->setenableContactsAddContactCallCreation("Add a Contact record when a Call is created from the Contact Us page");
    $query->setenableContactsAddContactAnimalSponsorship("Add a Contact record when an Animal Sponsorship is submitted");
    $query->setenableContactsAddContactUserRegistration("Add a Contact record when a user registers");

    $result = $api->executeRequest($query);

