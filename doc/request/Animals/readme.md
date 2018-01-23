# Animals

This is the documentation for the Animals queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animals)

## Define
Performs animals.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\Define();

    $result = $api->executeRequest($query);
## GetList
Performs animals.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Animals\GetList();
    $result = $api->executeRequest($query);
## PublicView
Performs animals.publicView query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\PublicView();

    $query->setanimalID("ID");

    $result = $api->executeRequest($query);

## View
Performs animals.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\View();

    $query->setanimalID("ID");

    $result = $api->executeRequest($query);

## PublicSearch
Performs animals.publicSearch search query. This query returns an array of [\RescueGroups\Objects\Animal](../../../src/Objects/Animal.php) objects.

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
Performs animals.search search query. This query returns an array of [\RescueGroups\Objects\Animal](../../../src/Objects/Animal.php) objects.

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
Performs animals.add add query to create an instance of an object. Uses classes of type [\RescueGroups\Objects\Animal](../../../src/Objects/Animal.php) as input to create a record. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

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
    $addObject->econdaryBreedID = "Secondary Breed"
    $addObject->ex = "Sex"
    $addObject->hared = "Shared"
    $addObject->hedding = "Shedding amount"
    $addObject->izeCurrent = "Current size"
    $addObject->izePotential = "Size potential"
    $addObject->izeUOM = "Size unit of measure"
    $addObject->pecialneeds = "Has special needs"
    $addObject->pecialneedsDescription = "Special needs description"
    $addObject->peciesID = "Species"
    $addObject->ponsorable = "Allow sponsorship"
    $addObject->ponsors = "Sponsors"
    $addObject->ponsorshipDetails = "Sponsorship details"
    $addObject->ponsorshipMinimum = "Sponsorship minimum"
    $addObject->tatusID = "Status"
    $addObject->ummary = "Summary"
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
    $addObject->animalOKWithFarm = "Good with farm animals"
    $addObject->animalOlderKidsOnly = "Older/ considerate kids only"
    $addObject->animalOngoingMedical = "Needs ongoing medical care"
    $addObject->animalPlayful = "Playful"
    $addObject->animalPlaysToys = "Likes toys"
    $addObject->animalPredatory = "Predatory"
    $addObject->animalProtective = "Protective / territorial"
    $addObject->ightImpaired = "Sight impaired"
    $addObject->kittish = "Skittish"
    $addObject->pecialDiet = "Special diet required"
    $addObject->wims = "Likes to swim"
    $addObject->animalTimid = "Timid / shy"
    $addObject->animalGroups = "Groups"
    $addObject->animalExportAccounts = "Export accounts"

    $query->addAnimal($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animals.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Animal](../../../src/Objects/Animal.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

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
    $editObject->pecialneeds = "Has special needs"
    $editObject->pecialneedsDescription = "Special needs description"
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
    $editObject->econdaryBreedID = "Secondary Breed"
    $editObject->ex = "Sex"
    $editObject->hared = "Shared"
    $editObject->hedding = "Shedding amount"
    $editObject->izeCurrent = "Current size"
    $editObject->izePotential = "Size potential"
    $editObject->izeUOM = "Size unit of measure"
    $editObject->peciesID = "Species"
    $editObject->ponsorable = "Allow sponsorship"
    $editObject->ponsors = "Sponsors"
    $editObject->ponsorshipDetails = "Sponsorship details"
    $editObject->ponsorshipMinimum = "Sponsorship minimum"
    $editObject->tatusID = "Status"
    $editObject->ummary = "Summary"
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
    $editObject->animalOKWithFarm = "Good with farm animals"
    $editObject->animalOlderKidsOnly = "Older/ considerate kids only"
    $editObject->animalOngoingMedical = "Needs ongoing medical care"
    $editObject->animalPlayful = "Playful"
    $editObject->animalPlaysToys = "Likes toys"
    $editObject->animalPredatory = "Predatory"
    $editObject->animalProtective = "Protective / territorial"
    $editObject->ightImpaired = "Sight impaired"
    $editObject->kittish = "Skittish"
    $editObject->pecialDiet = "Special diet required"
    $editObject->wims = "Likes to swim"
    $editObject->animalTimid = "Timid / shy"
    $editObject->animalGroups = "Groups"
    $editObject->animalExportAccounts = "Export accounts"

    $query->updateAnimal($editObject);

    $result = $api->executeRequest($query);
## AddPicture
Performs animals.addPicture query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddPicture();

    $query->setanimalID("ID");
    $query->setpictureBinary("Picture");
    $query->setfileName("File name");
    $query->setmediaOrder("Order");

    $result = $api->executeRequest($query);

## AddPictureUrl
Performs animals.addPictureUrl query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddPictureUrl();

    $query->setanimalID("ID");
    $query->setpictureUrl("Picture Url");
    $query->setmediaOrder("Order");

    $result = $api->executeRequest($query);

## AddVideo
Performs animals.addVideo query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddVideo();

    $query->setanimalID("ID");
    $query->setvideoBinary("Video");
    $query->setfileName("File name");
    $query->setmediaOrder("Order");

    $result = $api->executeRequest($query);

## AddYoutubeUrl
Performs animals.addYoutubeUrl query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddYoutubeUrl();

    $query->setanimalID("ID");
    $query->setyoutubeUrl("YouTube Url");
    $query->setmediaOrder("Order");

    $result = $api->executeRequest($query);

## PictureReorder
Performs animals.pictureReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\PictureReorder();

    $query->setanimalID("ID");
    $query->setmediaID("ID");
    $query->setnewOrder("Order");

    $result = $api->executeRequest($query);

## VideoReorder
Performs animals.videoReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\VideoReorder();

    $query->setanimalID("ID");
    $query->setmediaID("ID");
    $query->setnewOrder("Order");

    $result = $api->executeRequest($query);

## VideoUrlReorder
Performs animals.videoUrlReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\VideoUrlReorder();

    $query->setanimalID("ID");
    $query->setmediaID("ID");
    $query->setnewOrder("Order");

    $result = $api->executeRequest($query);

## Pictures
Performs animals.pictures query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\Pictures();

    $query->setanimalID("ID");

    $result = $api->executeRequest($query);

## Videos
Performs animals.videos query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\Videos();

    $query->setanimalID("ID");

    $result = $api->executeRequest($query);

## YoutubeUrls
Performs animals.youtubeUrls query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\YoutubeUrls();

    $query->setanimalID("ID");

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

    $query->setfieldlist("Field list");

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

    $query->setfieldlist("Field list");

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

    $query->setfieldlist("Field list");

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

    $query->setstatuslist("Statuses");

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

    $query->setenableSpecialListBabies("Babies (Kittens, Puppies) enabled");
    $query->setsetSpecialListBabiesYoungest("Babies (Kittens, Puppies) Youngest Age");
    $query->setsetSpecialListBabiesOldest("Babies (Kittens, Puppies) Oldest Age");
    $query->setenableSpecialListTeens("Teens enabled");
    $query->setsetSpecialListTeensYoungest("Teens Youngest Age");
    $query->setsetSpecialListTeensOldest("Teens Oldest Age");
    $query->setenableSpecialListAdults("Adults enabled");
    $query->setsetSpecialListAdultsYoungest("Adults Youngest Age");
    $query->setsetSpecialListAdultsOldest("Adults Oldest Age");
    $query->setenableSpecialListSeniors("Seniors enabled");
    $query->setsetSpecialListSeniorsYoungest("Seniors Youngest Age");
    $query->setenableSpecialListLongtime("Long Time/Must Adopt enabled");
    $query->setsetSpecialListLongtimeYoungest("Long Time/Must Adopt Shortest length of time");
    $query->setsetSpecialListLongtimeOldest("Long Time/Must Adopt Longest length of time");
    $query->setenableSpecialListRecent("Recent Arrivals enabled");
    $query->setsetSpecialListRecentDays("Recent Arrivals Shortest length of time");
    $query->setenableSpecialListSpecialNeeds("Special Needs enabled");
    $query->setenableSpecialListUrgent("Urgent enabled");
    $query->setenableSpecialListFoster("Needs a Caretaker/Foster enabled");
    $query->setenableSpecialListCourtesy("Courtesy Listings enabled");
    $query->setenableAnimalAutoRescueID("Automatically set animal's Rescue ID");
    $query->setsetAnimalAutoRescueIDFormat("Format for Rescue IDs");
    $query->setdisableAnimalAutoRescueIDCourtesyListings("Do not automatically assign Rescue ID for courtesy listings");
    $query->setenablePortalWebsite("Enable the Portal website");
    $query->setshowAnimalMicrochip("Show if the animal is microchipped");
    $query->setshowAnimalAltered("Show if the animal is altered");
    $query->setshowAnimalWillBeAltered("Show if the animal will be altered before adoption");
    $query->setshowAnimalRescueID("Show the animal's Rescue ID");
    $query->setshowAnimalAdoptionFee("Show the animal's adoption fee");
    $query->setshowAnimalEuthanasiaInfo("Show the animal's euthanasia information");
    $query->setdisableAnimalCourtesyHeaderFooter("Disable the animal header/footer to courtesy animals");
    $query->setshowAnimalKennelcardJournalEntries("Show journal entries on the kennel card");
    $query->setshowAnimalKennelcardJournalCost("Show cost on the kennel card");
    $query->setdisableAnimalExportAdopted("Prevent adopted animals from being uploaded to Petfinder");
    $query->setenableExportAdoptedToAdoptapet("Export adopted pets to Adopt-a-Pet.com");
    $query->setdisableAnimalExportCourtesy("Prevent courtesy animals from being uploaded to other sites");
    $query->setdisableAnimalExportAnimalWebPageLink("Disable the link to the animal's web page");
    $query->setdisableAnimalExportWebsiteLink("Disable the link to your organization's website");
    $query->setdisableAnimalExportAdoptionFormLink("Disable the link to your adoption form");
    $query->setenableAnimalExportDescriptionHeader("Include the Animal Description Header in the animal description");
    $query->setenableAnimalExportDescriptionFooter("Include the Animal Description Footer in the animal description");
    $query->setenableAnimalExportUniqueAnimalID("Use the RescueGroups.org Animal ID as a Unique ID");
    $query->setenableAnimalExportContactFieldFirstname("Show the foster/caretaker's first name");
    $query->setenableAnimalExportContactFieldLastname("Show the foster/caretaker's last name");
    $query->setenableAnimalExportContactFieldEmail("Show the foster/caretaker's email address");
    $query->setenableAnimalExportContactFieldPhoneHome("Show the foster/caretaker's home phone number");
    $query->setenableAnimalExportContactFieldPhoneCell("Show the foster/caretaker's cell phone number");
    $query->setsetAnimalExportYouTubeAccount("Account to use for YouTube video upload");
    $query->setsetAnimalExportYouTubeAuthorizationCode("YouTube authorization code");
    $query->setsetAnimalExportDefaultCategory1("By default, export to services that list animals for adoption");
    $query->setsetAnimalExportDefaultCategory4("By default, export to services that list animals for adoption (from non-rescue/shelters)");
    $query->setsetAnimalExportDefaultCategory3("By default, export to services that list animals for sale by breeder");
    $query->setsetAnimalExportDefaultCategory2("By default, export to services that list animals for sale by owner");
    $query->setsetAnimalExportDefaultCategory5("By default, export to services that provide animal related classifieds");
    $query->setsetAnimalExportDefaultCategory6("By default, export to services that provide animal related community discussion/forums");
    $query->setsetAnimalExportDefaultCategory8("By default, export to services that provide animal related educational information");
    $query->setsetAnimalExportDefaultCategory7("By default, export to services that provide animal related news");
    $query->setsetAnimalExportDefaultCategory13("By default, export to services that provide event calendars");
    $query->setsetAnimalExportDefaultCategory9("By default, export to services that sell/promote animal related products (food, toys, treats, etc)");
    $query->setsetAnimalExportDefaultCategory11("By default, export to services that sell/promote animal related services (training, grooming)");
    $query->setsetAnimalExportDefaultCategory10("By default, export to services that sell/promote non-animal related products");
    $query->setsetAnimalExportDefaultCategory12("By default, export to services that sell/promote non-animal related services");
    $query->setdisableAnimalDescriptionVideo("Disable videos in Animal descriptions");
    $query->setenableAnimalDescriptionVideoLink("Use a link instead of embedding the video in Animal descriptions");
    $query->setenableFreePetChipRegistry("Enable FreePetChipRegistry registrations");
    $query->setsetFreePetChipRegistryUserName("FreePetChipRegistry user name");
    $query->setenablePetLinkRegistry("Enable PetLink registrations");
    $query->setsetPetLinkUserName("PetLink user name");
    $query->setsetPetLinkPassword("PetLink password");
    $query->setdisableMicrochipUserAlert("Disable the email alert to the volunteer concerning microchip registration (success or failure)");
    $query->setsetMicrochipAlertEmails("Email address(es) to alert concerning microchip registration (success or failure)");

    $result = $api->executeRequest($query);

