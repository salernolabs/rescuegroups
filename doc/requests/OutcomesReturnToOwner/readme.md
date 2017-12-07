# OutcomesReturnToOwner

This is the documentation for the outcomesReturntoowner queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:57:26 by the source generator in the bin subfolder.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomesReturntoowner)

## OutcomesReturnToOwner\GetList

Performs outcomesReturntoowner.list query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\GetList();



## OutcomesReturnToOwner\View

Performs outcomesReturntoowner.view query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\View();

#### ::setId

Sets outcomesReturntoownerID field with a value of type integer.

    $query->setId(integer);



## OutcomesReturnToOwner\Search

Performs outcomesReturntoowner.search query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\Search();

#### ::setId

Sets outcomesReturntoownerID field with a value of type integer.

    $query->setId(integer);

#### ::setIntakeID

Sets outcomesReturntoownerIntakeID field with a value of type integer.

    $query->setIntakeID(integer);

#### ::setAnimalConditionID

Sets outcomesReturntoownerAnimalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setDate

Sets outcomesReturntoownerDate field with a value of type \DateTime.

    $query->setDate(\DateTime);

#### ::setNotes

Sets outcomesReturntoownerNotes field with a value of type string.

    $query->setNotes(string);

#### ::setOwnerID

Sets outcomesReturntoownerOwnerID field with a value of type integer.

    $query->setOwnerID(integer);

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalConditionName

Sets animalConditionName field with a value of type string.

    $query->setAnimalConditionName(string);

#### ::setReturntoownerName

Sets returntoownerName field with a value of type string.

    $query->setReturntoownerName(string);



## OutcomesReturnToOwner\Add

Performs outcomesReturntoowner.add query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\Add();

#### ::setIntakeID

Sets outcomesReturntoownerIntakeID field with a value of type integer.

    $query->setIntakeID(integer);

#### ::setAnimalConditionID

Sets outcomesReturntoownerAnimalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setDate

Sets outcomesReturntoownerDate field with a value of type \DateTime.

    $query->setDate(\DateTime);

#### ::setNotes

Sets outcomesReturntoownerNotes field with a value of type string.

    $query->setNotes(string);

#### ::setOwnerID

Sets outcomesReturntoownerOwnerID field with a value of type integer.

    $query->setOwnerID(integer);



## OutcomesReturnToOwner\Edit

Performs outcomesReturntoowner.edit query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\Edit();

#### ::setId

Sets outcomesReturntoownerID field with a value of type integer.

    $query->setId(integer);

#### ::setAnimalConditionID

Sets outcomesReturntoownerAnimalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setDate

Sets outcomesReturntoownerDate field with a value of type \DateTime.

    $query->setDate(\DateTime);

#### ::setNotes

Sets outcomesReturntoownerNotes field with a value of type string.

    $query->setNotes(string);

#### ::setOwnerID

Sets outcomesReturntoownerOwnerID field with a value of type integer.

    $query->setOwnerID(integer);



## OutcomesReturnToOwner\Change

Performs outcomesReturntoowner.change query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\Change();

#### ::setOutcomeID

Sets outcomeID field with a value of type integer.

    $query->setOutcomeID(integer);

#### ::setAnimalConditionID

Sets outcomesReturntoownerAnimalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setDate

Sets outcomesReturntoownerDate field with a value of type \DateTime.

    $query->setDate(\DateTime);

#### ::setNotes

Sets outcomesReturntoownerNotes field with a value of type string.

    $query->setNotes(string);

#### ::setOwnerID

Sets outcomesReturntoownerOwnerID field with a value of type integer.

    $query->setOwnerID(integer);





