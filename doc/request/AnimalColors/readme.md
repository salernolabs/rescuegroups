# AnimalColors

This is the documentation for the animalColors queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalColors)

## AnimalColors\GetList

Performs animalColors.list query.

    $query = new \RescueGroups\Request\Objects\AnimalColors\GetList();



## AnimalColors\PublicList

Performs animalColors.publicList query.

    $query = new \RescueGroups\Request\Objects\AnimalColors\PublicList();



## AnimalColors\Search

Performs animalColors.search query.

    $query = new \RescueGroups\Request\Objects\AnimalColors\Search();

#### ::setColorID

Sets colorID field with a value of type integer.

    $query->setColorID(integer);

#### ::setColorName

Sets colorName field with a value of type string.

    $query->setColorName(string);

#### ::setColorSpecies

Sets colorSpecies field with a value of type string.

    $query->setColorSpecies(string);

#### ::setColorSpeciesID

Sets colorSpeciesID field with a value of type integer.

    $query->setColorSpeciesID(integer);



## AnimalColors\PublicSearch

Performs animalColors.publicSearch query.

    $query = new \RescueGroups\Request\Objects\AnimalColors\PublicSearch();

#### ::setColorID

Sets colorID field with a value of type integer.

    $query->setColorID(integer);

#### ::setColorName

Sets colorName field with a value of type string.

    $query->setColorName(string);

#### ::setColorSpecies

Sets colorSpecies field with a value of type string.

    $query->setColorSpecies(string);

#### ::setColorSpeciesID

Sets colorSpeciesID field with a value of type integer.

    $query->setColorSpeciesID(integer);





