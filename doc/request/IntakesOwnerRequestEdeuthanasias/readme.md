# IntakesOwnerRequestedEuthanasias

This is the documentation for the IntakesOwnerRequestedEuthanasias queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakesOwnerrequestedeuthanasias)

## Define
Performs intakesOwnerrequestedeuthanasias.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Define();

    $result = $api->executeRequest($query);
## View
Performs intakesOwnerrequestedeuthanasias.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\View();

    $query->setId("Owner requestedeuthanasia");

    $result = $api->executeRequest($query);

## Search
Performs intakesOwnerrequestedeuthanasias.search search query. This query returns an array of [\RescueGroups\Objects\IntakesOwnerRequestedEuthanasia](../../../src/Objects/IntakesOwnerRequestedEuthanasia.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Search();
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
Performs intakesOwnerrequestedeuthanasias.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\IntakesOwnerRequestedEuthanasia](../../../src/Objects/IntakesOwnerRequestedEuthanasia.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Add();

    $addObject = new \RescueGroups\Objects\IntakesOwnerRequestedEuthanasia();
    $addObject->animalConditionId = "Condition"
    $addObject->date = "Date"
    $addObject->notes = "Notes"
    $addObject->ownerId = "Owner"
    $addObject->reasonId = "Euthanasia Reason"

    $query->addIntakesOwnerRequestedEuthanasia($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs intakesOwnerrequestedeuthanasias.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\IntakesOwnerRequestedEuthanasia](../../../src/Objects/IntakesOwnerRequestedEuthanasia.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Edit();

    $editObject = new \RescueGroups\Objects\IntakesOwnerRequestedEuthanasia();
    $editObject->id = "Owner requestedeuthanasia"
    $editObject->animalId = "Animal"
    $editObject->animalConditionId = "Condition"
    $editObject->date = "Date"
    $editObject->notes = "Notes"
    $editObject->ownerId = "Owner"
    $editObject->reasonId = "Euthanasia Reason"

    $query->updateIntakesOwnerRequestedEuthanasia($editObject);

    $result = $api->executeRequest($query);
## Change
Performs intakesOwnerrequestedeuthanasias.change query.

### Example Query

    $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Change();

    $query->setIntakeId("Intake");
    $query->setAnimalId("Animal");
    $query->setAnimalConditionId("Condition");
    $query->setDate("Date");
    $query->setNotes("Notes");
    $query->setOwnerId("Owner");
    $query->setReasonId("Euthanasia Reason");

    $result = $api->executeRequest($query);

