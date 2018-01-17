# CallsCategories

This is the documentation for the CallsCategories queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-callsCategories)

## GetList


Performs callsCategories.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\CallsCategories\GetList();
    $result = $api->executeRequest($query);





## View






Performs callsCategories.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsCategories\View();

    $result = $api->executeRequest($query);


## Search

Performs callsCategories.search search query. This query returns an array of [\RescueGroups\Objects\CallsCategory](../../src/Objects/CallsCategory.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\CallsCategories\Search();
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




Performs callsCategories.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\CallsCategory](../../src/Objects/CallsCategory.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\CallsCategories\Add();

    $addObject = new \RescueGroups\Objects\CallsCategory();
    $addObject->categoryName = "Name"
    $addObject->categoryDescription = "Description"
    $addObject->categoryPublic = "Public"

    $query->addCallsCategory($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs callsCategories.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\CallsCategory](../../src/Objects/CallsCategory.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\CallsCategories\Edit();

    $editObject = new \RescueGroups\Objects\CallsCategory();
    $editObject->categoryID = "ID"
    $editObject->categoryName = "Name"
    $editObject->categoryDescription = "Description"
    $editObject->categoryPublic = "Public"
    $editObject->categoryDefaultQueueID = "Default Queue"

    $query->updateCallsCategory($editObject);

    $result = $api->executeRequest($query);




## Delete






Performs callsCategories.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\CallsCategories\Delete();

    $result = $api->executeRequest($query);


