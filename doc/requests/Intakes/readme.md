# Intakes

This is the documentation for the intakes queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-intakes)

## Intakes\GetList

Performs intakes.list query.

    $query = new \RescueGroups\Requests\Objects\Intakes\GetList();



## Intakes\Search

Performs intakes.search query.

    $query = new \RescueGroups\Requests\Objects\Intakes\Search();

#### ::setIntakeID

Sets intakeID field with a value of type integer.

    $query->setIntakeID(integer);

#### ::setIntakeOutcomeID

Sets intakeOutcomeID field with a value of type integer.

    $query->setIntakeOutcomeID(integer);

#### ::setIntakeAnimalID

Sets intakeAnimalID field with a value of type integer.

    $query->setIntakeAnimalID(integer);

#### ::setIntakeAnimalConditionID

Sets intakeAnimalConditionID field with a value of type integer.

    $query->setIntakeAnimalConditionID(integer);

#### ::setIntakeType

Sets intakeType field with a value of type string.

    $query->setIntakeType(string);

#### ::setIntakeDate

Sets intakeDate field with a value of type \DateTime.

    $query->setIntakeDate(\DateTime);

#### ::setIntakeNotes

Sets intakeNotes field with a value of type string.

    $query->setIntakeNotes(string);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalConditionName

Sets animalConditionName field with a value of type string.

    $query->setAnimalConditionName(string);



## Intakes\View

Performs intakes.view query.

    $query = new \RescueGroups\Requests\Objects\Intakes\View();

#### ::setIntakeID

Sets intakeID field with a value of type integer.

    $query->setIntakeID(integer);



## Intakes\Delete

Performs intakes.delete query.

    $query = new \RescueGroups\Requests\Objects\Intakes\Delete();

#### ::setIntakeID

Sets intakeID field with a value of type integer.

    $query->setIntakeID(integer);





