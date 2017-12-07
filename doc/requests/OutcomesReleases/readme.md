# OutcomesReleases

This is the documentation for the outcomesReleases queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:44 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-outcomesReleases

## OutcomesReleases\GetList

Performs outcomesReleases.list query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReleases\GetList();



## OutcomesReleases\View

Performs outcomesReleases.view query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReleases\View();

#### ::setOutcomesReleaseID

Sets outcomesReleaseID field with a value of type integer.

    $query->setOutcomesReleaseID(integer);



## OutcomesReleases\Search

Performs outcomesReleases.search query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReleases\Search();

#### ::setOutcomesReleaseID

Sets outcomesReleaseID field with a value of type integer.

    $query->setOutcomesReleaseID(integer);

#### ::setOutcomesReleaseIntakeID

Sets outcomesReleaseIntakeID field with a value of type integer.

    $query->setOutcomesReleaseIntakeID(integer);

#### ::setOutcomesReleaseAnimalConditionID

Sets outcomesReleaseAnimalConditionID field with a value of type integer.

    $query->setOutcomesReleaseAnimalConditionID(integer);

#### ::setOutcomesReleaseDate

Sets outcomesReleaseDate field with a value of type \DateTime.

    $query->setOutcomesReleaseDate(\DateTime);

#### ::setOutcomesReleaseNotes

Sets outcomesReleaseNotes field with a value of type string.

    $query->setOutcomesReleaseNotes(string);

#### ::setOutcomesReleaseLocation

Sets outcomesReleaseLocation field with a value of type string.

    $query->setOutcomesReleaseLocation(string);

#### ::setOutcomesReleaseAddress

Sets outcomesReleaseAddress field with a value of type string.

    $query->setOutcomesReleaseAddress(string);

#### ::setOutcomesReleaseCity

Sets outcomesReleaseCity field with a value of type string.

    $query->setOutcomesReleaseCity(string);

#### ::setOutcomesReleaseState

Sets outcomesReleaseState field with a value of type province.

    $query->setOutcomesReleaseState(province);

#### ::setOutcomesReleasePostalcode

Sets outcomesReleasePostalcode field with a value of type string.

    $query->setOutcomesReleasePostalcode(string);

#### ::setOutcomesReleaseByID

Sets outcomesReleaseByID field with a value of type integer.

    $query->setOutcomesReleaseByID(integer);

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalConditionName

Sets animalConditionName field with a value of type string.

    $query->setAnimalConditionName(string);

#### ::setReleaseByName

Sets releaseByName field with a value of type string.

    $query->setReleaseByName(string);



## OutcomesReleases\Add

Performs outcomesReleases.add query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReleases\Add();

#### ::setOutcomesReleaseIntakeID

Sets outcomesReleaseIntakeID field with a value of type integer.

    $query->setOutcomesReleaseIntakeID(integer);

#### ::setOutcomesReleaseAnimalConditionID

Sets outcomesReleaseAnimalConditionID field with a value of type integer.

    $query->setOutcomesReleaseAnimalConditionID(integer);

#### ::setOutcomesReleaseDate

Sets outcomesReleaseDate field with a value of type \DateTime.

    $query->setOutcomesReleaseDate(\DateTime);

#### ::setOutcomesReleaseNotes

Sets outcomesReleaseNotes field with a value of type string.

    $query->setOutcomesReleaseNotes(string);

#### ::setOutcomesReleaseLocation

Sets outcomesReleaseLocation field with a value of type string.

    $query->setOutcomesReleaseLocation(string);

#### ::setOutcomesReleaseAddress

Sets outcomesReleaseAddress field with a value of type string.

    $query->setOutcomesReleaseAddress(string);

#### ::setOutcomesReleaseCity

Sets outcomesReleaseCity field with a value of type string.

    $query->setOutcomesReleaseCity(string);

#### ::setOutcomesReleaseState

Sets outcomesReleaseState field with a value of type province.

    $query->setOutcomesReleaseState(province);

#### ::setOutcomesReleasePostalcode

Sets outcomesReleasePostalcode field with a value of type string.

    $query->setOutcomesReleasePostalcode(string);

#### ::setOutcomesReleaseByID

Sets outcomesReleaseByID field with a value of type integer.

    $query->setOutcomesReleaseByID(integer);



## OutcomesReleases\Edit

Performs outcomesReleases.edit query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReleases\Edit();

#### ::setOutcomesReleaseID

Sets outcomesReleaseID field with a value of type integer.

    $query->setOutcomesReleaseID(integer);

#### ::setOutcomesReleaseAnimalConditionID

Sets outcomesReleaseAnimalConditionID field with a value of type integer.

    $query->setOutcomesReleaseAnimalConditionID(integer);

#### ::setOutcomesReleaseDate

Sets outcomesReleaseDate field with a value of type \DateTime.

    $query->setOutcomesReleaseDate(\DateTime);

#### ::setOutcomesReleaseNotes

Sets outcomesReleaseNotes field with a value of type string.

    $query->setOutcomesReleaseNotes(string);

#### ::setOutcomesReleaseLocation

Sets outcomesReleaseLocation field with a value of type string.

    $query->setOutcomesReleaseLocation(string);

#### ::setOutcomesReleaseAddress

Sets outcomesReleaseAddress field with a value of type string.

    $query->setOutcomesReleaseAddress(string);

#### ::setOutcomesReleaseCity

Sets outcomesReleaseCity field with a value of type string.

    $query->setOutcomesReleaseCity(string);

#### ::setOutcomesReleaseState

Sets outcomesReleaseState field with a value of type province.

    $query->setOutcomesReleaseState(province);

#### ::setOutcomesReleasePostalcode

Sets outcomesReleasePostalcode field with a value of type string.

    $query->setOutcomesReleasePostalcode(string);

#### ::setOutcomesReleaseByID

Sets outcomesReleaseByID field with a value of type integer.

    $query->setOutcomesReleaseByID(integer);



## OutcomesReleases\Change

Performs outcomesReleases.change query.

    $query = new \RescueGroups\Requests\Objects\OutcomesReleases\Change();

#### ::setOutcomeID

Sets outcomeID field with a value of type integer.

    $query->setOutcomeID(integer);

#### ::setOutcomesReleaseAnimalConditionID

Sets outcomesReleaseAnimalConditionID field with a value of type integer.

    $query->setOutcomesReleaseAnimalConditionID(integer);

#### ::setOutcomesReleaseDate

Sets outcomesReleaseDate field with a value of type \DateTime.

    $query->setOutcomesReleaseDate(\DateTime);

#### ::setOutcomesReleaseNotes

Sets outcomesReleaseNotes field with a value of type string.

    $query->setOutcomesReleaseNotes(string);

#### ::setOutcomesReleaseLocation

Sets outcomesReleaseLocation field with a value of type string.

    $query->setOutcomesReleaseLocation(string);

#### ::setOutcomesReleaseAddress

Sets outcomesReleaseAddress field with a value of type string.

    $query->setOutcomesReleaseAddress(string);

#### ::setOutcomesReleaseCity

Sets outcomesReleaseCity field with a value of type string.

    $query->setOutcomesReleaseCity(string);

#### ::setOutcomesReleaseState

Sets outcomesReleaseState field with a value of type province.

    $query->setOutcomesReleaseState(province);

#### ::setOutcomesReleasePostalcode

Sets outcomesReleasePostalcode field with a value of type string.

    $query->setOutcomesReleasePostalcode(string);

#### ::setOutcomesReleaseByID

Sets outcomesReleaseByID field with a value of type integer.

    $query->setOutcomesReleaseByID(integer);





