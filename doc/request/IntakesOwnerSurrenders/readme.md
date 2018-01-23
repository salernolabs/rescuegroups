# IntakesOwnerSurrenders

This is the documentation for the IntakesOwnerSurrenders queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesOwnersurrenders)

## Define
Performs intakesOwnersurrenders.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Define();

    $result = $api->executeRequest($query);
Performs intakesOwnersurrenders.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Define();


    $result = $api->executeRequest($query);

## View
Performs intakesOwnersurrenders.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\View();

    $query->setid("Owner Surrender");

    $result = $api->executeRequest($query);

## Search
Performs intakesOwnersurrenders.search search query. This query returns an array of [\RescueGroups\Objects\IntakesOwnerSurrender](../../../src/Objects/IntakesOwnerSurrender.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Search();
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
Performs intakesOwnersurrenders.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesOwnerSurrender](../../../src/Objects/IntakesOwnerSurrender.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Add();

    $addObject = new \RescueGroups\Objects\IntakesOwnerSurrender();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->ownerId = "Surrendered By"
    $addObject->reasonId = "Surrender Reason"

    $query->addIntakesOwnerSurrender($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesOwnersurrenders.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesOwnerSurrender](../../../src/Objects/IntakesOwnerSurrender.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Edit();

    $editObject = new \RescueGroups\Objects\IntakesOwnerSurrender();
    $editObject->id = "Owner Surrender"
    $editObject->animalId = "Animal"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->ownerId = "Surrendered By"
    $editObject->reasonId = "Surrender Reason"

    $query->updateIntakesOwnerSurrender($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesOwnersurrenders.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Change();

    $query->setintakeId("Intake");
    $query->setanimalId("Animal");
    $query->setanimalConditionId("Condition");
    $query->setdate("Date");
    $query->setnotes("Notes");
    $query->setownerId("Surrendered By");
    $query->setreasonId("Surrender Reason");

    $result = $api->executeRequest($query);

