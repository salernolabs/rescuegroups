# WebPages

This is the documentation for the WebPages queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-webpages)

## Define
Performs webpages.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebPages\Define();

    $result = $api->executeRequest($query);
## GetList
Performs webpages.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\WebPages\GetList();
    $result = $api->executeRequest($query);
## PublicView
Performs webpages.publicView query.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebPages\PublicView();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## View
Performs webpages.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\WebPages\View();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## PublicSearch
Performs webpages.publicSearch search query. This query returns an array of [\RescueGroups\Objects\Search\WebPage](../../../src/Objects/Search/WebPage.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\WebPages\PublicSearch();
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
Performs webpages.search search query. This query returns an array of [\RescueGroups\Objects\Search\WebPage](../../../src/Objects/Search/WebPage.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\WebPages\Search();
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
Performs webpages.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\WebPage](../../../src/Objects/WebPage.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\WebPages\Add();

    $addObject = new \RescueGroups\Objects\WebPage();
    $addObject->name = "Name"
    $addObject->content = "Content"
    $addObject->status = "Status"
    $addObject->uselayout = "Use Layout"
    $addObject->showonmenu = "Show on Menu"
    $addObject->metaDescription = "Meta Description"
    $addObject->backgroundMusicId = "Background Music"
    $addObject->roleId = "Security Role"

    $query->addWebPage($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs webpages.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\WebPage](../../../src/Objects/WebPage.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\WebPages\Edit();

    $editObject = new \RescueGroups\Objects\WebPage();
    $editObject->id = "ID"
    $editObject->name = "Name"
    $editObject->content = "Content"
    $editObject->status = "Status"
    $editObject->uselayout = "Use Layout"
    $editObject->showonmenu = "Show on Menu"
    $editObject->metaDescription = "Meta Description"
    $editObject->backgroundImageId = "Background Image"
    $editObject->backgroundMusicId = "Background Music"
    $editObject->roleId = "Security Role"

    $query->updateWebPage($editObject);

    $result = $api->executeRequest($query);
