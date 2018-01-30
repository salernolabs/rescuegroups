# Events

This is the documentation for the Events queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-events)

## Define
Performs events.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Events\Define();

    $result = $api->executeRequest($query);
## GetList
Performs events.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Events\GetList();
    $result = $api->executeRequest($query);
## PublicView
Performs events.publicView query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Events\PublicView();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## View
Performs events.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Events\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## PublicSearch
Performs events.publicSearch search query. This query returns an array of [\RescueGroups\Objects\Search\Event](../../../src/Objects/Search/Event.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Events\PublicSearch();
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
## Search
Performs events.search search query. This query returns an array of [\RescueGroups\Objects\Search\Event](../../../src/Objects/Search/Event.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Events\Search();
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
Performs events.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\Event](../../../src/Objects/Event.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Events\Add();

    $addObject = new \RescueGroups\Objects\Event();
    $addObject->name = "Name"
    $addObject->start = "Start Date/Time"
    $addObject->end = "End Date/Time"
    $addObject->url = "Web address"
    $addObject->description = "Description"
    $addObject->species = "Species attending"

    $query->addEvent($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs events.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Event](../../../src/Objects/Event.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Events\Edit();

    $editObject = new \RescueGroups\Objects\Event();
    $editObject->id = "ID"
    $editObject->name = "Name"
    $editObject->start = "Start Date/Time"
    $editObject->end = "End Date/Time"
    $editObject->url = "Web address"
    $editObject->description = "Description"
    $editObject->locationId = "Location"
    $editObject->species = "Species attending"

    $query->updateEvent($editObject);

    $result = $api->executeRequest($query);
## Delete
Performs events.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Events\Delete();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## GetSettings
Performs events.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Events\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs events.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Events\UpdateSettings();

    $query->setEnableEvents("Enable the Events feature");
    $query->setEventsMapWebsite("Map website to use with the Events feature");

    $result = $api->executeRequest($query);

