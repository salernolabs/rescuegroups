# Animals

This is the documentation for the Animals queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animals)

## GetList


Performs animals.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Animals\GetList();
    $result = $api->executeRequest($query);





## PublicView






Performs animals.publicView query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\PublicView();

    $result = $api->executeRequest($query);


## View






Performs animals.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\View();

    $result = $api->executeRequest($query);


## PublicSearch

Performs animals.publicSearch search query. This query returns an array of [\RescueGroups\Objects\Animal](../../src/Objects/Animal.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Animals\PublicSearch();
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






## Search

Performs animals.search search query. This query returns an array of [\RescueGroups\Objects\Animal](../../src/Objects/Animal.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Animals\Search();
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




Performs animals.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\Animal](../../src/Objects/Animal.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\Animals\Add();

    $addObject = new \RescueGroups\Objects\Animal();
    $addObject->animalActivityLevel = "Activity level"
    $addObject->animalAdoptedDate = "Adopted Date"
    $addObject->animalAdoptionFee = "Adoption fee"
    $addObject->animalAdoptionPending = "Adoption pending"
    $addObject->animalAltered = "Altered"
    $addObject->animalApplicationID = "Application"
    $addObject->animalAvailableDate = "Available Date"
    $addObject->animalBirthdate = "Birthdate"
    $addObject->animalBirthdateExact = "Exact Birthdate"
    $addObject->animalCoatLength = "Coat Length"
    $addObject->animalColonyID = "Colony"
    $addObject->animalColorID = "Color (General)"
    $addObject->animalColorDetails = "Color details"
    $addObject->animalConditionID = "Condition"
    $addObject->animalCourtesy = "Courtesy"
    $addObject->animalDeclawed = "Declawed"
    $addObject->animalDescription = "Description"
    $addObject->animalDistinguishingMarks = "Distinguishing marks"
    $addObject->animalAllowExport = "Allow export"
    $addObject->animalEarType = "Ear type"
    $addObject->animalEnergyLevel = "Energy level"
    $addObject->animalExerciseNeeds = "Exercise needs"
    $addObject->animalEyeColor = "Eye color"
    $addObject->animalFence = "Requires a home with fence"
    $addObject->animalFosterID = "Foster"
    $addObject->animalFound = "Found"
    $addObject->animalFoundDate = "Found date"
    $addObject->animalFoundPostalcode = "Found zip/postal code"
    $addObject->animalGeneralAge = "General Age"
    $addObject->animalGeneralSizePotential = "Size potential (general)"
    $addObject->animalGroomingNeeds = "Grooming needs"
    $addObject->animalHighlightOrder = "Highlight"
    $addObject->animalHousetrained = "Housetrained"
    $addObject->animalIndoorOutdoor = "Indoor/Outdoor"
    $addObject->animalInternalID = "Internal ID"
    $addObject->animalKillDate = "Euthanasia date"
    $addObject->animalKillReason = "Euthanasia reason"
    $addObject->animalLocationID = "Location"
    $addObject->animalLocationPublic = "Location public"
    $addObject->animalMicrochipNumber = "Microchip number"
    $addObject->animalMicrochipVendor = "Microchip vendor"
    $addObject->animalMixedBreed = "Mixed breed"
    $addObject->animalName = "Name"
    $addObject->animalNeedsFoster = "Needs a Foster"
    $addObject->animalNewPeople = "Reaction to new people"
    $addObject->animalNotes = "Private notes"
    $addObject->animalNotHousetrainedReason = "Reason not housetrained"
    $addObject->animalObedienceTraining = "Obedience training"
    $addObject->animalOKWithAdults = "Good with adults"
    $addObject->animalOKWithCats = "OK with cats"
    $addObject->animalOKWithDogs = "OK with dogs"
    $addObject->animalOKWithKids = "OK with kids"
    $addObject->animalOrigin = "Origin"
    $addObject->animalOthernames = "Other names"
    $addObject->animalOwnerExperience = "Owner experience needed"
    $addObject->animalOwnerID = "Owner"
    $addObject->animalPatternID = "Pattern"
    $addObject->animalPrimaryBreedID = "Primary breed"
    $addObject->animalReceivedDate = "Received date"
    $addObject->animalRescueID = "Rescue ID"
    $addObject->animalSecondaryBreedID = "Secondary Breed"
    $addObject->animalSex = "Sex"
    $addObject->animalShared = "Shared"
    $addObject->animalShedding = "Shedding amount"
    $addObject->animalSizeCurrent = "Current size"
    $addObject->animalSizePotential = "Size potential"
    $addObject->animalSizeUOM = "Size unit of measure"
    $addObject->animalSpecialneeds = "Has special needs"
    $addObject->animalSpecialneedsDescription = "Special needs description"
    $addObject->animalSpeciesID = "Species"
    $addObject->animalSponsorable = "Allow sponsorship"
    $addObject->animalSponsors = "Sponsors"
    $addObject->animalSponsorshipDetails = "Sponsorship details"
    $addObject->animalSponsorshipMinimum = "Sponsorship minimum"
    $addObject->animalStatusID = "Status"
    $addObject->animalSummary = "Summary"
    $addObject->animalTailType = "Tail type"
    $addObject->animalTransferredToID = "Transferred to"
    $addObject->animalUptodate = "Up-to-date"
    $addObject->animalVocal = "Likes to vocalize"
    $addObject->animalYardRequired = "Requires a Yard"
    $addObject->animalAffectionate = "Affectionate"
    $addObject->animalApartment = "Apartment appropriate"
    $addObject->animalCratetrained = "Crate trained"
    $addObject->animalDrools = "Drools excessively"
    $addObject->animalEagerToPlease = "Eager to please"
    $addObject->animalEscapes = "Tries to escape"
    $addObject->animalEventempered = "Even-tempered"
    $addObject->animalFetches = "Likes to fetch"
    $addObject->animalGentle = "Gentle"
    $addObject->animalGoodInCar = "Does well in a car"
    $addObject->animalGoofy = "Goofy"
    $addObject->animalHasAllergies = "Has allergies"
    $addObject->animalHearingImpaired = "Hearing impaired"
    $addObject->animalHypoallergenic = "Hypoallergenic"
    $addObject->animalIndependent = "Independent / aloof"
    $addObject->animalIntelligent = "Intelligent"
    $addObject->animalLap = "Lap pet"
    $addObject->animalLeashtrained = "Leash trained"
    $addObject->animalNeedsCompanionAnimal = "Needs companion animal"
    $addObject->animalNoCold = "Cold sensitive"
    $addObject->animalNoFemaleDogs = "Not good with female dogs"
    $addObject->animalNoHeat = "Heat sensitive"
    $addObject->animalNoLargeDogs = "Not good with large dogs"
    $addObject->animalNoMaleDogs = "Not good with male dogs"
    $addObject->animalNoSmallDogs = "Not good with small dogs"
    $addObject->animalObedient = "Obedient"
    $addObject->animalOKForSeniors = "Good for seniors / elderly"
    $addObject->animalOKWithFarmAnimals = "Good with farm animals"
    $addObject->animalOlderKidsOnly = "Older/ considerate kids only"
    $addObject->animalOngoingMedical = "Needs ongoing medical care"
    $addObject->animalPlayful = "Playful"
    $addObject->animalPlaysToys = "Likes toys"
    $addObject->animalPredatory = "Predatory"
    $addObject->animalProtective = "Protective / territorial"
    $addObject->animalSightImpaired = "Sight impaired"
    $addObject->animalSkittish = "Skittish"
    $addObject->animalSpecialDiet = "Special diet required"
    $addObject->animalSwims = "Likes to swim"
    $addObject->animalTimid = "Timid / shy"
    $addObject->animalGroups = "Groups"
    $addObject->animalExportAccounts = "Export accounts"

    $query->addAnimal($addObject);

    $result = $api->executeRequest($query);



## Edit



Performs animals.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Animal](../../src/Objects/Animal.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Animals\Edit();

    $editObject = new \RescueGroups\Objects\Animal();
    $editObject->animalID = "ID"
    $editObject->animalActivityLevel = "Activity level"
    $editObject->animalAdoptedDate = "Adopted Date"
    $editObject->animalAdoptionFee = "Adoption fee"
    $editObject->animalAdoptionLeadID = "Adoption lead"
    $editObject->animalAltered = "Altered"
    $editObject->animalApplicationID = "Application"
    $editObject->animalAvailableDate = "Available Date"
    $editObject->animalBirthdate = "Birthdate"
    $editObject->animalBirthdateExact = "Exact Birthdate"
    $editObject->animalCoatLength = "Coat Length"
    $editObject->animalColonyID = "Colony"
    $editObject->animalColorID = "Color (General)"
    $editObject->animalColorDetails = "Color details"
    $editObject->animalConditionID = "Condition"
    $editObject->animalCourtesy = "Courtesy"
    $editObject->animalDeclawed = "Declawed"
    $editObject->animalDescription = "Description"
    $editObject->animalDistinguishingMarks = "Distinguishing marks"
    $editObject->animalAllowExport = "Allow export"
    $editObject->animalEarType = "Ear type"
    $editObject->animalEnergyLevel = "Energy level"
    $editObject->animalExerciseNeeds = "Exercise needs"
    $editObject->animalEyeColor = "Eye color"
    $editObject->animalFence = "Requires a home with fence"
    $editObject->animalFosterID = "Foster"
    $editObject->animalFound = "Found"
    $editObject->animalFoundDate = "Found date"
    $editObject->animalFoundPostalcode = "Found zip/postal code"
    $editObject->animalGeneralAge = "General Age"
    $editObject->animalGeneralSizePotential = "Size potential (general)"
    $editObject->animalGroomingNeeds = "Grooming needs"
    $editObject->animalHighlightOrder = "Highlight"
    $editObject->animalHousetrained = "Housetrained"
    $editObject->animalIndoorOutdoor = "Indoor/Outdoor"
    $editObject->animalInternalID = "Internal ID"
    $editObject->animalKillDate = "Euthanasia date"
    $editObject->animalKillReason = "Euthanasia reason"
    $editObject->animalLocationID = "Location"
    $editObject->animalLocationPublic = "Location public"
    $editObject->animalMicrochipNumber = "Microchip number"
    $editObject->animalMicrochipVendor = "Microchip vendor"
    $editObject->animalMixedBreed = "Mixed breed"
    $editObject->animalName = "Name"
    $editObject->animalSpecialneeds = "Has special needs"
    $editObject->animalSpecialneedsDescription = "Special needs description"
    $editObject->animalNeedsFoster = "Needs a Foster"
    $editObject->animalNewPeople = "Reaction to new people"
    $editObject->animalNotes = "Private notes"
    $editObject->animalNotHousetrainedReason = "Reason not housetrained"
    $editObject->animalObedienceTraining = "Obedience training"
    $editObject->animalOKWithAdults = "Good with adults"
    $editObject->animalOKWithCats = "OK with cats"
    $editObject->animalOKWithDogs = "OK with dogs"
    $editObject->animalOKWithKids = "OK with kids"
    $editObject->animalOrigin = "Origin"
    $editObject->animalOthernames = "Other names"
    $editObject->animalOwnerExperience = "Owner experience needed"
    $editObject->animalOwnerID = "Owner"
    $editObject->animalPatternID = "Pattern"
    $editObject->animalAdoptionPending = "Adoption pending"
    $editObject->animalPrimaryBreedID = "Primary breed"
    $editObject->animalReceivedDate = "Received date"
    $editObject->animalRescueID = "Rescue ID"
    $editObject->animalSecondaryBreedID = "Secondary Breed"
    $editObject->animalSex = "Sex"
    $editObject->animalShared = "Shared"
    $editObject->animalShedding = "Shedding amount"
    $editObject->animalSizeCurrent = "Current size"
    $editObject->animalSizePotential = "Size potential"
    $editObject->animalSizeUOM = "Size unit of measure"
    $editObject->animalSpeciesID = "Species"
    $editObject->animalSponsorable = "Allow sponsorship"
    $editObject->animalSponsors = "Sponsors"
    $editObject->animalSponsorshipDetails = "Sponsorship details"
    $editObject->animalSponsorshipMinimum = "Sponsorship minimum"
    $editObject->animalStatusID = "Status"
    $editObject->animalSummary = "Summary"
    $editObject->animalTailType = "Tail type"
    $editObject->animalTransferredToID = "Transferred to"
    $editObject->animalUptodate = "Up-to-date"
    $editObject->animalVocal = "Likes to vocalize"
    $editObject->animalYardRequired = "Requires a Yard"
    $editObject->animalAffectionate = "Affectionate"
    $editObject->animalApartment = "Apartment appropriate"
    $editObject->animalCratetrained = "Crate trained"
    $editObject->animalDrools = "Drools excessively"
    $editObject->animalEagerToPlease = "Eager to please"
    $editObject->animalEscapes = "Tries to escape"
    $editObject->animalEventempered = "Even-tempered"
    $editObject->animalFetches = "Likes to fetch"
    $editObject->animalGentle = "Gentle"
    $editObject->animalGoodInCar = "Does well in a car"
    $editObject->animalGoofy = "Goofy"
    $editObject->animalHasAllergies = "Has allergies"
    $editObject->animalHearingImpaired = "Hearing impaired"
    $editObject->animalHypoallergenic = "Hypoallergenic"
    $editObject->animalIndependent = "Independent / aloof"
    $editObject->animalIntelligent = "Intelligent"
    $editObject->animalLap = "Lap pet"
    $editObject->animalLeashtrained = "Leash trained"
    $editObject->animalNeedsCompanionAnimal = "Needs companion animal"
    $editObject->animalNoCold = "Cold sensitive"
    $editObject->animalNoFemaleDogs = "Not good with female dogs"
    $editObject->animalNoHeat = "Heat sensitive"
    $editObject->animalNoLargeDogs = "Not good with large dogs"
    $editObject->animalNoMaleDogs = "Not good with male dogs"
    $editObject->animalNoSmallDogs = "Not good with small dogs"
    $editObject->animalObedient = "Obedient"
    $editObject->animalOKForSeniors = "Good for seniors / elderly"
    $editObject->animalOKWithFarmAnimals = "Good with farm animals"
    $editObject->animalOlderKidsOnly = "Older/ considerate kids only"
    $editObject->animalOngoingMedical = "Needs ongoing medical care"
    $editObject->animalPlayful = "Playful"
    $editObject->animalPlaysToys = "Likes toys"
    $editObject->animalPredatory = "Predatory"
    $editObject->animalProtective = "Protective / territorial"
    $editObject->animalSightImpaired = "Sight impaired"
    $editObject->animalSkittish = "Skittish"
    $editObject->animalSpecialDiet = "Special diet required"
    $editObject->animalSwims = "Likes to swim"
    $editObject->animalTimid = "Timid / shy"
    $editObject->animalGroups = "Groups"
    $editObject->animalExportAccounts = "Export accounts"

    $query->updateAnimal($editObject);

    $result = $api->executeRequest($query);




## AddPicture






Performs animals.addPicture query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddPicture();

    $result = $api->executeRequest($query);


## AddPictureUrl






Performs animals.addPictureUrl query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddPictureUrl();

    $result = $api->executeRequest($query);


## AddVideo






Performs animals.addVideo query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddVideo();

    $result = $api->executeRequest($query);


## AddYoutubeUrl






Performs animals.addYoutubeUrl query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddYoutubeUrl();

    $result = $api->executeRequest($query);


## PictureReorder






Performs animals.pictureReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\PictureReorder();

    $result = $api->executeRequest($query);


## VideoReorder






Performs animals.videoReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\VideoReorder();

    $result = $api->executeRequest($query);


## VideoUrlReorder






Performs animals.videoUrlReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\VideoUrlReorder();

    $result = $api->executeRequest($query);


## Pictures






Performs animals.pictures query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\Pictures();

    $result = $api->executeRequest($query);


## Videos






Performs animals.videos query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\Videos();

    $result = $api->executeRequest($query);


## YoutubeUrls






Performs animals.youtubeUrls query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\YoutubeUrls();

    $result = $api->executeRequest($query);


## GetRequireableFields






Performs animals.getRequireableFields query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetRequireableFields();

    $result = $api->executeRequest($query);


## GetRequiredFields






Performs animals.getRequiredFields query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetRequiredFields();

    $result = $api->executeRequest($query);


## SetRequiredFields






Performs animals.setRequiredFields query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\SetRequiredFields();

    $result = $api->executeRequest($query);


## GetDisableableFields






Performs animals.getDisableableFields query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetDisableableFields();

    $result = $api->executeRequest($query);


## GetDisabledFields






Performs animals.getDisabledFields query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetDisabledFields();

    $result = $api->executeRequest($query);


## SetDisabledFields






Performs animals.setDisabledFields query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\SetDisabledFields();

    $result = $api->executeRequest($query);


## GetSpecies






Performs animals.getSpecies query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetSpecies();

    $result = $api->executeRequest($query);


## GetEnabledSpecies






Performs animals.getEnabledSpecies query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetEnabledSpecies();

    $result = $api->executeRequest($query);


## SetEnabledSpecies






Performs animals.setEnabledSpecies query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\SetEnabledSpecies();

    $result = $api->executeRequest($query);


## GetPublicableStatuses






Performs animals.getPublicableStatuses query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetPublicableStatuses();

    $result = $api->executeRequest($query);


## GetPublicStatuses






Performs animals.getPublicStatuses query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetPublicStatuses();

    $result = $api->executeRequest($query);


## SetPublicStatuses






Performs animals.setPublicStatuses query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\SetPublicStatuses();

    $result = $api->executeRequest($query);


## GetSettings






Performs animals.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\GetSettings();

    $result = $api->executeRequest($query);


## UpdateSettings






Performs animals.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\UpdateSettings();

    $result = $api->executeRequest($query);


