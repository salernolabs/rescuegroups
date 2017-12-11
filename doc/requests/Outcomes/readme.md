# Outcomes

This is the documentation for the outcomes queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomes)

## Outcomes\GetList

Performs outcomes.list query.

    $query = new \RescueGroups\Requests\Objects\Outcomes\GetList();



## Outcomes\Search

Performs outcomes.search query.

    $query = new \RescueGroups\Requests\Objects\Outcomes\Search();

#### ::setOutcomeID

Sets outcomeID field with a value of type integer.

    $query->setOutcomeID(integer);

#### ::setOutcomeAnimalConditionID

Sets outcomeAnimalConditionID field with a value of type integer.

    $query->setOutcomeAnimalConditionID(integer);

#### ::setOutcomeType

Sets outcomeType field with a value of type string.

    $query->setOutcomeType(string);

#### ::setOutcomeDate

Sets outcomeDate field with a value of type \DateTime.

    $query->setOutcomeDate(\DateTime);

#### ::setOutcomeNotes

Sets outcomeNotes field with a value of type string.

    $query->setOutcomeNotes(string);

#### ::setIntakeID

Sets intakeID field with a value of type integer.

    $query->setIntakeID(integer);

#### ::setIntakeAnimalID

Sets intakeAnimalID field with a value of type integer.

    $query->setIntakeAnimalID(integer);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setOutcomeAnimalConditionName

Sets outcomeAnimalConditionName field with a value of type string.

    $query->setOutcomeAnimalConditionName(string);



## Outcomes\View

Performs outcomes.view query.

    $query = new \RescueGroups\Requests\Objects\Outcomes\View();

#### ::setOutcomeID

Sets outcomeID field with a value of type integer.

    $query->setOutcomeID(integer);





