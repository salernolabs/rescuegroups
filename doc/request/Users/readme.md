# Users

This is the documentation for the Users queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-users)

## Define
Performs users.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Users\Define();

    $result = $api->executeRequest($query);
## GetList
Performs users.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Users\GetList();
    $result = $api->executeRequest($query);
## View
Performs users.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Users\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs users.search search query. This query returns an array of [\RescueGroups\Objects\Search\User](../../../src/Objects/Search/User.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Users\Search();
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
Performs users.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\User](../../../src/Objects/User.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Users\Add();

    $addObject = new \RescueGroups\Objects\Create\User();
    $addObject->login = "Login"
    $addObject->password = "Password"
    $addObject->salutation = "Salutation"
    $addObject->firstname = "First name"
    $addObject->lastname = "Last name"
    $addObject->address = "Street address"
    $addObject->city = "City"
    $addObject->state = "State/Province"
    $addObject->postalcode = "Postal Code"
    $addObject->plus4 = "Zip code plus 4"
    $addObject->phoneHome = "Home phone number"
    $addObject->phoneWork = "Work phone number"
    $addObject->phoneWorkExt = "Work phone extension"
    $addObject->phoneCell = "Cell phone number"
    $addObject->fax = "Fax number"
    $addObject->email = "Email address"
    $addObject->emailAlt = "Alternate email address"
    $addObject->emailPager = "Pager email address"
    $addObject->contactId = "User Contact"
    $addObject->type = "Type"
    $addObject->status = "Status"

    $query->addUser($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs users.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\User](../../../src/Objects/User.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Users\Edit();

    $editObject = new \RescueGroups\Objects\User();
    $editObject->id = "ID"
    $editObject->login = "Login"
    $editObject->password = "Password"
    $editObject->salutation = "Salutation"
    $editObject->firstname = "First name"
    $editObject->lastname = "Last name"
    $editObject->address = "Street address"
    $editObject->city = "City"
    $editObject->state = "State/Province"
    $editObject->postalcode = "Postal Code"
    $editObject->plus4 = "Zip code plus 4"
    $editObject->country = "Country"
    $editObject->phoneHome = "Home phone number"
    $editObject->phoneWork = "Work phone number"
    $editObject->phoneWorkExt = "Work phone extension"
    $editObject->phoneCell = "Cell phone number"
    $editObject->fax = "Fax number"
    $editObject->email = "Email address"
    $editObject->emailAlt = "Alternate email address"
    $editObject->emailPager = "Pager email address"
    $editObject->contactId = "User Contact"
    $editObject->status = "Status"

    $query->updateUser($editObject);

    $result = $api->executeRequest($query);
