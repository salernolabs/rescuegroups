# AnimalBreeds

This is the documentation for the animalBreeds queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalBreeds)

## AnimalBreeds\PublicList

Performs animalBreeds.publicList query.

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\PublicList();



## AnimalBreeds\GetList

Performs animalBreeds.list query.

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\GetList();



## AnimalBreeds\Search

Performs animalBreeds.search query.

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\Search();

#### ::setBreedID

Sets breedID field with a value of type integer.

    $query->setBreedID(integer);

#### ::setSpecies

Sets species field with a value of type string.

    $query->setSpecies(string);

#### ::setBreedName

Sets breedName field with a value of type string.

    $query->setBreedName(string);

#### ::setBreedSpecies

Sets breedSpecies field with a value of type string.

    $query->setBreedSpecies(string);

#### ::setBreedSpeciesID

Sets breedSpeciesID field with a value of type integer.

    $query->setBreedSpeciesID(integer);



## AnimalBreeds\PublicSearch

Performs animalBreeds.publicSearch query.

    $query = new \RescueGroups\Request\Objects\AnimalBreeds\PublicSearch();

#### ::setBreedID

Sets breedID field with a value of type integer.

    $query->setBreedID(integer);

#### ::setBreedName

Sets breedName field with a value of type string.

    $query->setBreedName(string);

#### ::setBreedSpecies

Sets breedSpecies field with a value of type string.

    $query->setBreedSpecies(string);

#### ::setBreedSpeciesID

Sets breedSpeciesID field with a value of type integer.

    $query->setBreedSpeciesID(integer);





