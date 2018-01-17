# SubmittedForms

This is the documentation for the SubmittedForms queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-submittedforms)

## GetList


Performs submittedforms.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\GetList();
    $result = $api->executeRequest($query);





## ListRecent






Performs submittedforms.listRecent query.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\ListRecent();

    $result = $api->executeRequest($query);


## ListPending






Performs submittedforms.listPending query.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\ListPending();

    $result = $api->executeRequest($query);


## PublicCommonSubmit






Performs submittedforms.publicCommonSubmit query.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\PublicCommonSubmit();

    $result = $api->executeRequest($query);


## Search

Performs submittedforms.search search query. This query returns an array of [\RescueGroups\Objects\SubmittedForm](../../src/Objects/SubmittedForm.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\Search();
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






## View






Performs submittedforms.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\View();

    $result = $api->executeRequest($query);


## Edit



Performs submittedforms.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\SubmittedForm](../../src/Objects/SubmittedForm.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\Edit();

    $editObject = new \RescueGroups\Objects\SubmittedForm();
    $editObject->submittedformID = "ID"
    $editObject->submittedformAnimalID = "Animal"
    $editObject->submittedformStatusID = "Status"

    $query->updateSubmittedForm($editObject);

    $result = $api->executeRequest($query);




