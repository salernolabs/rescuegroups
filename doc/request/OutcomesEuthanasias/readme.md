# OutcomesEuthanasias

This is the documentation for the OutcomesEuthanasias queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomesEuthanasias)

## GetList


Performs outcomesEuthanasias.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\GetList();
    $result = $api->executeRequest($query);





## View






Performs outcomesEuthanasias.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\View();

    $result = $api->executeRequest($query);


## Search

Performs outcomesEuthanasias.search search query. This query returns an array of [\RescueGroups\Objects\OutcomesEuthanasia](../../src/Objects/OutcomesEuthanasia.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Search();
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




Performs outcomesEuthanasias.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\OutcomesEuthanasia](../../src/Objects/OutcomesEuthanasia.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Add();

    $addObject = new \RescueGroups\Objects\OutcomesEuthanasia();
    $addObject->outcomesEuthanasiaAnimalConditionID = "Condition"
    $addObject->outcomesEuthanasiaDate = "Date"
    $addObject->outcomesEuthanasiaNotes = "Notes"
    $addObject->outcomesEuthanasiaReasonID = "Euthanasia Reason"

    $query->addOutcomesEuthanasia($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs outcomesEuthanasias.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\OutcomesEuthanasia](../../src/Objects/OutcomesEuthanasia.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Edit();

    $editObject = new \RescueGroups\Objects\OutcomesEuthanasia();
    $editObject->outcomesEuthanasiaID = "ID"
    $editObject->outcomesEuthanasiaAnimalConditionID = "Condition"
    $editObject->outcomesEuthanasiaDate = "Date"
    $editObject->outcomesEuthanasiaNotes = "Notes"
    $editObject->outcomesEuthanasiaReasonID = "Euthanasia Reason"

    $query->updateOutcomesEuthanasia($editObject);

    $result = $api->executeRequest($query);




## Change






Performs outcomesEuthanasias.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Change();

    $result = $api->executeRequest($query);


