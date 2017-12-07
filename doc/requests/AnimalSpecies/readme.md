# AnimalSpecies

This is the documentation for the animalSpecies queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:37 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalSpecies

## AnimalSpecies\PublicList

Performs animalSpecies.publicList query.

    $query = new \RescueGroups\Requests\Objects\AnimalSpecies\PublicList();



## AnimalSpecies\GetList

Performs animalSpecies.list query.

    $query = new \RescueGroups\Requests\Objects\AnimalSpecies\GetList();



## AnimalSpecies\ListActive

Performs animalSpecies.listActive query.

    $query = new \RescueGroups\Requests\Objects\AnimalSpecies\ListActive();



## AnimalSpecies\Search

Performs animalSpecies.search query.

    $query = new \RescueGroups\Requests\Objects\AnimalSpecies\Search();

#### ::setSpeciesID

Sets speciesID field with a value of type integer.

    $query->setSpeciesID(integer);

#### ::setSpeciesSingular

Sets speciesSingular field with a value of type string.

    $query->setSpeciesSingular(string);

#### ::setSpeciesPlural

Sets speciesPlural field with a value of type string.

    $query->setSpeciesPlural(string);

#### ::setSpeciesSingularYoung

Sets speciesSingularYoung field with a value of type string.

    $query->setSpeciesSingularYoung(string);

#### ::setSpeciesPluralYoung

Sets speciesPluralYoung field with a value of type string.

    $query->setSpeciesPluralYoung(string);

#### ::setSpeciesFullname

Sets speciesFullname field with a value of type string.

    $query->setSpeciesFullname(string);





