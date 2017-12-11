# OutcomesDeceased

This is the documentation for the outcomesDeceased queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomesDeceased)

## OutcomesDeceased\GetList

Performs outcomesDeceased.list query.

    $query = new \RescueGroups\Requests\Objects\OutcomesDeceased\GetList();



## OutcomesDeceased\View

Performs outcomesDeceased.view query.

    $query = new \RescueGroups\Requests\Objects\OutcomesDeceased\View();

#### ::setId

Sets outcomesDeceasedID field with a value of type integer.

    $query->setId(integer);



## OutcomesDeceased\Search

Performs outcomesDeceased.search query.

    $query = new \RescueGroups\Requests\Objects\OutcomesDeceased\Search();

#### ::setId

Sets outcomesDeceasedID field with a value of type integer.

    $query->setId(integer);

#### ::setIntakeID

Sets outcomesDeceasedIntakeID field with a value of type integer.

    $query->setIntakeID(integer);

#### ::setAnimalConditionID

Sets outcomesDeceasedAnimalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setDate

Sets outcomesDeceasedDate field with a value of type \DateTime.

    $query->setDate(\DateTime);

#### ::setNotes

Sets outcomesDeceasedNotes field with a value of type string.

    $query->setNotes(string);

#### ::setReason

Sets outcomesDeceasedReason field with a value of type string.

    $query->setReason(string);

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalConditionName

Sets animalConditionName field with a value of type string.

    $query->setAnimalConditionName(string);



## OutcomesDeceased\Add

Performs outcomesDeceased.add query.

    $query = new \RescueGroups\Requests\Objects\OutcomesDeceased\Add();

#### ::setIntakeID

Sets outcomesDeceasedIntakeID field with a value of type integer.

    $query->setIntakeID(integer);

#### ::setAnimalConditionID

Sets outcomesDeceasedAnimalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setDate

Sets outcomesDeceasedDate field with a value of type \DateTime.

    $query->setDate(\DateTime);

#### ::setNotes

Sets outcomesDeceasedNotes field with a value of type string.

    $query->setNotes(string);

#### ::setReason

Sets outcomesDeceasedReason field with a value of type string.

    $query->setReason(string);



## OutcomesDeceased\Edit

Performs outcomesDeceased.edit query.

    $query = new \RescueGroups\Requests\Objects\OutcomesDeceased\Edit();

#### ::setId

Sets outcomesDeceasedID field with a value of type integer.

    $query->setId(integer);

#### ::setAnimalConditionID

Sets outcomesDeceasedAnimalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setDate

Sets outcomesDeceasedDate field with a value of type \DateTime.

    $query->setDate(\DateTime);

#### ::setNotes

Sets outcomesDeceasedNotes field with a value of type string.

    $query->setNotes(string);

#### ::setReason

Sets outcomesDeceasedReason field with a value of type string.

    $query->setReason(string);



## OutcomesDeceased\Change

Performs outcomesDeceased.change query.

    $query = new \RescueGroups\Requests\Objects\OutcomesDeceased\Change();

#### ::setOutcomeID

Sets outcomeID field with a value of type integer.

    $query->setOutcomeID(integer);

#### ::setAnimalConditionID

Sets outcomesDeceasedAnimalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setDate

Sets outcomesDeceasedDate field with a value of type \DateTime.

    $query->setDate(\DateTime);

#### ::setNotes

Sets outcomesDeceasedNotes field with a value of type string.

    $query->setNotes(string);

#### ::setReason

Sets outcomesDeceasedReason field with a value of type string.

    $query->setReason(string);





