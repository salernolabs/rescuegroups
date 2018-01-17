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

    $query->setuserID("ID");

    $result = $api->executeRequest($query);

## Search
Performs users.search search query. This query returns an array of [\RescueGroups\Objects\User](../../../src/Objects/User.php) objects.

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
    $addObject->userLogin = "Login"
    $addObject->userPassword = "Password"
    $addObject->userSalutation = "Salutation"
    $addObject->userFirstname = "First name"
    $addObject->userLastname = "Last name"
    $addObject->userAddress = "Street address"
    $addObject->userCity = "City"
    $addObject->userState = "State/Province"
    $addObject->userPostalcode = "Postal Code"
    $addObject->userPlus4 = "Zip code plus 4"
    $addObject->userPhoneHome = "Home phone number"
    $addObject->userPhoneWork = "Work phone number"
    $addObject->userPhoneWorkExt = "Work phone extension"
    $addObject->userPhoneCell = "Cell phone number"
    $addObject->userFax = "Fax number"
    $addObject->userEmail = "Email address"
    $addObject->userEmailAlt = "Alternate email address"
    $addObject->userEmailPager = "Pager email address"
    $addObject->userContactID = "User Contact"
    $addObject->userType = "Type"
    $addObject->userStatus = "Status"

    $query->addUser($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs users.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\User](../../../src/Objects/User.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Users\Edit();

    $editObject = new \RescueGroups\Objects\User();
    $editObject->userID = "ID"
    $editObject->userLogin = "Login"
    $editObject->userPassword = "Password"
    $editObject->userSalutation = "Salutation"
    $editObject->userFirstname = "First name"
    $editObject->userLastname = "Last name"
    $editObject->userAddress = "Street address"
    $editObject->userCity = "City"
    $editObject->userState = "State/Province"
    $editObject->userPostalcode = "Postal Code"
    $editObject->userPlus4 = "Zip code plus 4"
    $editObject->userCountry = "Country"
    $editObject->userPhoneHome = "Home phone number"
    $editObject->userPhoneWork = "Work phone number"
    $editObject->userPhoneWorkExt = "Work phone extension"
    $editObject->userPhoneCell = "Cell phone number"
    $editObject->userFax = "Fax number"
    $editObject->userEmail = "Email address"
    $editObject->userEmailAlt = "Alternate email address"
    $editObject->userEmailPager = "Pager email address"
    $editObject->userContactID = "User Contact"
    $editObject->userStatus = "Status"

    $query->updateUser($editObject);

    $result = $api->executeRequest($query);
