# ContactsGroups

This is the documentation for the ContactsGroups queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-contactsGroups)

## Define
Performs contactsGroups.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Define();

    $result = $api->executeRequest($query);
## View
Performs contactsGroups.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\ContactsGroups\View();

    $query->setgroupID("ID");

    $result = $api->executeRequest($query);

## GetList
Performs contactsGroups.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\ContactsGroups\GetList();
    $result = $api->executeRequest($query);
## Search
Performs contactsGroups.search search query. This query returns an array of [\RescueGroups\Objects\ContactsGroup](../../../src/Objects/ContactsGroup.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Search();
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
Performs contactsGroups.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\ContactsGroup](../../../src/Objects/ContactsGroup.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Add();

    $addObject = new \RescueGroups\Objects\ContactsGroup();
    $addObject->groupName = "Name"
    $addObject->groupBusiness = "Business"

    $query->addContactsGroup($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs contactsGroups.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\ContactsGroup](../../../src/Objects/ContactsGroup.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Edit();

    $editObject = new \RescueGroups\Objects\ContactsGroup();
    $editObject->groupID = "ID"
    $editObject->groupName = "Name"
    $editObject->groupBusiness = "Business"

    $query->updateContactsGroup($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs contactsGroups.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Delete();

    $query->setgroupID("ID");

    $result = $api->executeRequest($query);

