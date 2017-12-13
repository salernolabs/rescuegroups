# AnimalPatterns

This is the documentation for the animalPatterns queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalPatterns)

## AnimalPatterns\PublicList

Performs animalPatterns.publicList query.

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\PublicList();



## AnimalPatterns\GetList

Performs animalPatterns.list query.

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\GetList();



## AnimalPatterns\Search

Performs animalPatterns.search query.

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\Search();

#### ::setPatternID

Sets patternID field with a value of type integer.

    $query->setPatternID(integer);

#### ::setPatternName

Sets patternName field with a value of type string.

    $query->setPatternName(string);

#### ::setPatternSpecies

Sets patternSpecies field with a value of type string.

    $query->setPatternSpecies(string);

#### ::setPatternSpeciesID

Sets patternSpeciesID field with a value of type integer.

    $query->setPatternSpeciesID(integer);



## AnimalPatterns\PublicSearch

Performs animalPatterns.publicSearch query.

    $query = new \RescueGroups\Request\Objects\AnimalPatterns\PublicSearch();

#### ::setPatternID

Sets patternID field with a value of type integer.

    $query->setPatternID(integer);

#### ::setPatternName

Sets patternName field with a value of type string.

    $query->setPatternName(string);

#### ::setPatternSpecies

Sets patternSpecies field with a value of type string.

    $query->setPatternSpecies(string);

#### ::setPatternSpeciesID

Sets patternSpeciesID field with a value of type integer.

    $query->setPatternSpeciesID(integer);





