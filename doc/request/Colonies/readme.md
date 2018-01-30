# Colonies

This is the documentation for the Colonies queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-colonies)

## Define
Performs colonies.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Colonies\Define();

    $result = $api->executeRequest($query);
## GetList
Performs colonies.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Colonies\GetList();
    $result = $api->executeRequest($query);
## View
Performs colonies.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Colonies\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Search
Performs colonies.search search query. This query returns an array of [\RescueGroups\Objects\Search\Colony](../../../src/Objects/Search/Colony.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Colonies\Search();
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
Performs colonies.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\Colony](../../../src/Objects/Colony.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Colonies\Add();

    $addObject = new \RescueGroups\Objects\Colony();
    $addObject->name = "Name"
    $addObject->totalAnimals = "Number of animals"
    $addObject->registeredDate = "Registered"
    $addObject->specificLocation = "Specific location"

    $query->addColony($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs colonies.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Colony](../../../src/Objects/Colony.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Colonies\Edit();

    $editObject = new \RescueGroups\Objects\Colony();
    $editObject->id = "ID"
    $editObject->name = "Name"
    $editObject->locationId = "Location"
    $editObject->totalAnimals = "Number of animals"
    $editObject->registeredDate = "Registered"
    $editObject->specificLocation = "Specific location"

    $query->updateColony($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs colonies.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Colonies\Delete();

    $query->setId("ID");

    $result = $api->executeRequest($query);

