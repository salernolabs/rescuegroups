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

    $query->setId("ID");

    $result = $api->executeRequest($query);

## View
Performs animals.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\View();

    $query->setId("ID");

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
    $addObject->activityLevel = "Activity level"
    $addObject->adoptedDate = "Adopted Date"
    $addObject->adoptionFee = "Adoption fee"
    $addObject->adoptionPending = "Adoption pending"
    $addObject->altered = "Altered"
    $addObject->applicationId = "Application"
    $addObject->availableDate = "Available Date"
    $addObject->birthdate = "Birthdate"
    $addObject->birthdateExact = "Exact Birthdate"
    $addObject->coatLength = "Coat Length"
    $addObject->colonyId = "Colony"
    $addObject->colorId = "Color (General)"
    $addObject->colorDetails = "Color details"
    $addObject->conditionId = "Condition"
    $addObject->courtesy = "Courtesy"
    $addObject->declawed = "Declawed"
    $addObject->description = "Description"
    $addObject->distinguishingMarks = "Distinguishing marks"
    $addObject->allowExport = "Allow export"
    $addObject->earType = "Ear type"
    $addObject->energyLevel = "Energy level"
    $addObject->exerciseNeeds = "Exercise needs"
    $addObject->eyeColor = "Eye color"
    $addObject->fence = "Requires a home with fence"
    $addObject->fosterId = "Foster"
    $addObject->found = "Found"
    $addObject->foundDate = "Found date"
    $addObject->foundPostalcode = "Found zip/postal code"
    $addObject->generalAge = "General Age"
    $addObject->generalSizePotential = "Size potential (general)"
    $addObject->groomingNeeds = "Grooming needs"
    $addObject->highlightOrder = "Highlight"
    $addObject->housetrained = "Housetrained"
    $addObject->indoorOutdoor = "Indoor/Outdoor"
    $addObject->internalId = "Internal ID"
    $addObject->killDate = "Euthanasia date"
    $addObject->killReason = "Euthanasia reason"
    $addObject->locationId = "Location"
    $addObject->locationPublic = "Location public"
    $addObject->microchipNumber = "Microchip number"
    $addObject->microchipVendor = "Microchip vendor"
    $addObject->mixedBreed = "Mixed breed"
    $addObject->name = "Name"
    $addObject->needsFoster = "Needs a Foster"
    $addObject->newPeople = "Reaction to new people"
    $addObject->notes = "Private notes"
    $addObject->notHousetrainedReason = "Reason not housetrained"
    $addObject->obedienceTraining = "Obedience training"
    $addObject->okWithAdults = "Good with adults"
    $addObject->okWithCats = "OK with cats"
    $addObject->okWithDogs = "OK with dogs"
    $addObject->okWithKids = "OK with kids"
    $addObject->origin = "Origin"
    $addObject->othernames = "Other names"
    $addObject->ownerExperience = "Owner experience needed"
    $addObject->ownerId = "Owner"
    $addObject->patternId = "Pattern"
    $addObject->primaryBreedId = "Primary breed"
    $addObject->receivedDate = "Received date"
    $addObject->rescueId = "Rescue ID"
    $addObject->secondaryBreedId = "Secondary Breed"
    $addObject->sex = "Sex"
    $addObject->shared = "Shared"
    $addObject->shedding = "Shedding amount"
    $addObject->sizeCurrent = "Current size"
    $addObject->sizePotential = "Size potential"
    $addObject->sizeUOM = "Size unit of measure"
    $addObject->specialneeds = "Has special needs"
    $addObject->specialneedsDescription = "Special needs description"
    $addObject->speciesId = "Species"
    $addObject->sponsorable = "Allow sponsorship"
    $addObject->sponsors = "Sponsors"
    $addObject->sponsorshipDetails = "Sponsorship details"
    $addObject->sponsorshipMinimum = "Sponsorship minimum"
    $addObject->statusId = "Status"
    $addObject->summary = "Summary"
    $addObject->tailType = "Tail type"
    $addObject->transferredToId = "Transferred to"
    $addObject->uptodate = "Up-to-date"
    $addObject->vocal = "Likes to vocalize"
    $addObject->yardRequired = "Requires a Yard"
    $addObject->affectionate = "Affectionate"
    $addObject->apartment = "Apartment appropriate"
    $addObject->cratetrained = "Crate trained"
    $addObject->drools = "Drools excessively"
    $addObject->eagerToPlease = "Eager to please"
    $addObject->escapes = "Tries to escape"
    $addObject->eventempered = "Even-tempered"
    $addObject->fetches = "Likes to fetch"
    $addObject->gentle = "Gentle"
    $addObject->goodInCar = "Does well in a car"
    $addObject->goofy = "Goofy"
    $addObject->hasAllergies = "Has allergies"
    $addObject->hearingImpaired = "Hearing impaired"
    $addObject->hypoallergenic = "Hypoallergenic"
    $addObject->independent = "Independent / aloof"
    $addObject->intelligent = "Intelligent"
    $addObject->lap = "Lap pet"
    $addObject->leashtrained = "Leash trained"
    $addObject->needsCompanion = "Needs companion animal"
    $addObject->noCold = "Cold sensitive"
    $addObject->noFemaleDogs = "Not good with female dogs"
    $addObject->noHeat = "Heat sensitive"
    $addObject->noLargeDogs = "Not good with large dogs"
    $addObject->noMaleDogs = "Not good with male dogs"
    $addObject->noSmallDogs = "Not good with small dogs"
    $addObject->obedient = "Obedient"
    $addObject->okForSeniors = "Good for seniors / elderly"
    $addObject->okWithFarms = "Good with farm animals"
    $addObject->olderKidsOnly = "Older/ considerate kids only"
    $addObject->ongoingMedical = "Needs ongoing medical care"
    $addObject->playful = "Playful"
    $addObject->playsToys = "Likes toys"
    $addObject->predatory = "Predatory"
    $addObject->protective = "Protective / territorial"
    $addObject->sightImpaired = "Sight impaired"
    $addObject->skittish = "Skittish"
    $addObject->specialDiet = "Special diet required"
    $addObject->swims = "Likes to swim"
    $addObject->timid = "Timid / shy"
    $addObject->groups = "Groups"
    $addObject->exportAccounts = "Export accounts"

    $query->addAnimal($addObject);

    $result = $api->executeRequest($query);
## Edit
Performs animals.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\Animal](../../../src/Objects/Animal.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\Animals\Edit();

    $editObject = new \RescueGroups\Objects\Animal();
    $editObject->id = "ID"
    $editObject->activityLevel = "Activity level"
    $editObject->adoptedDate = "Adopted Date"
    $editObject->adoptionFee = "Adoption fee"
    $editObject->adoptionLeadId = "Adoption lead"
    $editObject->altered = "Altered"
    $editObject->applicationId = "Application"
    $editObject->availableDate = "Available Date"
    $editObject->birthdate = "Birthdate"
    $editObject->birthdateExact = "Exact Birthdate"
    $editObject->coatLength = "Coat Length"
    $editObject->colonyId = "Colony"
    $editObject->colorId = "Color (General)"
    $editObject->colorDetails = "Color details"
    $editObject->conditionId = "Condition"
    $editObject->courtesy = "Courtesy"
    $editObject->declawed = "Declawed"
    $editObject->description = "Description"
    $editObject->distinguishingMarks = "Distinguishing marks"
    $editObject->allowExport = "Allow export"
    $editObject->earType = "Ear type"
    $editObject->energyLevel = "Energy level"
    $editObject->exerciseNeeds = "Exercise needs"
    $editObject->eyeColor = "Eye color"
    $editObject->fence = "Requires a home with fence"
    $editObject->fosterId = "Foster"
    $editObject->found = "Found"
    $editObject->foundDate = "Found date"
    $editObject->foundPostalcode = "Found zip/postal code"
    $editObject->generalAge = "General Age"
    $editObject->generalSizePotential = "Size potential (general)"
    $editObject->groomingNeeds = "Grooming needs"
    $editObject->highlightOrder = "Highlight"
    $editObject->housetrained = "Housetrained"
    $editObject->indoorOutdoor = "Indoor/Outdoor"
    $editObject->internalId = "Internal ID"
    $editObject->killDate = "Euthanasia date"
    $editObject->killReason = "Euthanasia reason"
    $editObject->locationId = "Location"
    $editObject->locationPublic = "Location public"
    $editObject->microchipNumber = "Microchip number"
    $editObject->microchipVendor = "Microchip vendor"
    $editObject->mixedBreed = "Mixed breed"
    $editObject->name = "Name"
    $editObject->specialneeds = "Has special needs"
    $editObject->specialneedsDescription = "Special needs description"
    $editObject->needsFoster = "Needs a Foster"
    $editObject->newPeople = "Reaction to new people"
    $editObject->notes = "Private notes"
    $editObject->notHousetrainedReason = "Reason not housetrained"
    $editObject->obedienceTraining = "Obedience training"
    $editObject->okWithAdults = "Good with adults"
    $editObject->okWithCats = "OK with cats"
    $editObject->okWithDogs = "OK with dogs"
    $editObject->okWithKids = "OK with kids"
    $editObject->origin = "Origin"
    $editObject->othernames = "Other names"
    $editObject->ownerExperience = "Owner experience needed"
    $editObject->ownerId = "Owner"
    $editObject->patternId = "Pattern"
    $editObject->adoptionPending = "Adoption pending"
    $editObject->primaryBreedId = "Primary breed"
    $editObject->receivedDate = "Received date"
    $editObject->rescueId = "Rescue ID"
    $editObject->secondaryBreedId = "Secondary Breed"
    $editObject->sex = "Sex"
    $editObject->shared = "Shared"
    $editObject->shedding = "Shedding amount"
    $editObject->sizeCurrent = "Current size"
    $editObject->sizePotential = "Size potential"
    $editObject->sizeUOM = "Size unit of measure"
    $editObject->speciesId = "Species"
    $editObject->sponsorable = "Allow sponsorship"
    $editObject->sponsors = "Sponsors"
    $editObject->sponsorshipDetails = "Sponsorship details"
    $editObject->sponsorshipMinimum = "Sponsorship minimum"
    $editObject->statusId = "Status"
    $editObject->summary = "Summary"
    $editObject->tailType = "Tail type"
    $editObject->transferredToId = "Transferred to"
    $editObject->uptodate = "Up-to-date"
    $editObject->vocal = "Likes to vocalize"
    $editObject->yardRequired = "Requires a Yard"
    $editObject->affectionate = "Affectionate"
    $editObject->apartment = "Apartment appropriate"
    $editObject->cratetrained = "Crate trained"
    $editObject->drools = "Drools excessively"
    $editObject->eagerToPlease = "Eager to please"
    $editObject->escapes = "Tries to escape"
    $editObject->eventempered = "Even-tempered"
    $editObject->fetches = "Likes to fetch"
    $editObject->gentle = "Gentle"
    $editObject->goodInCar = "Does well in a car"
    $editObject->goofy = "Goofy"
    $editObject->hasAllergies = "Has allergies"
    $editObject->hearingImpaired = "Hearing impaired"
    $editObject->hypoallergenic = "Hypoallergenic"
    $editObject->independent = "Independent / aloof"
    $editObject->intelligent = "Intelligent"
    $editObject->lap = "Lap pet"
    $editObject->leashtrained = "Leash trained"
    $editObject->needsCompanion = "Needs companion animal"
    $editObject->noCold = "Cold sensitive"
    $editObject->noFemaleDogs = "Not good with female dogs"
    $editObject->noHeat = "Heat sensitive"
    $editObject->noLargeDogs = "Not good with large dogs"
    $editObject->noMaleDogs = "Not good with male dogs"
    $editObject->noSmallDogs = "Not good with small dogs"
    $editObject->obedient = "Obedient"
    $editObject->okForSeniors = "Good for seniors / elderly"
    $editObject->okWithFarms = "Good with farm animals"
    $editObject->olderKidsOnly = "Older/ considerate kids only"
    $editObject->ongoingMedical = "Needs ongoing medical care"
    $editObject->playful = "Playful"
    $editObject->playsToys = "Likes toys"
    $editObject->predatory = "Predatory"
    $editObject->protective = "Protective / territorial"
    $editObject->sightImpaired = "Sight impaired"
    $editObject->skittish = "Skittish"
    $editObject->specialDiet = "Special diet required"
    $editObject->swims = "Likes to swim"
    $editObject->timid = "Timid / shy"
    $editObject->groups = "Groups"
    $editObject->exportAccounts = "Export accounts"

    $query->updateAnimal($editObject);

    $result = $api->executeRequest($query);
## AddPicture
Performs animals.addPicture query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddPicture();

    $query->setId("ID");
    $query->setPictureBinary("Picture");
    $query->setFileName("File name");
    $query->setMediaOrder("Order");

    $result = $api->executeRequest($query);

## AddPictureUrl
Performs animals.addPictureUrl query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddPictureUrl();

    $query->setId("ID");
    $query->setPictureUrl("Picture Url");
    $query->setMediaOrder("Order");

    $result = $api->executeRequest($query);

## AddVideo
Performs animals.addVideo query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddVideo();

    $query->setId("ID");
    $query->setVideoBinary("Video");
    $query->setFileName("File name");
    $query->setMediaOrder("Order");

    $result = $api->executeRequest($query);

## AddYoutubeUrl
Performs animals.addYoutubeUrl query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\AddYoutubeUrl();

    $query->setId("ID");
    $query->setYoutubeUrl("YouTube Url");
    $query->setMediaOrder("Order");

    $result = $api->executeRequest($query);

## PictureReorder
Performs animals.pictureReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\PictureReorder();

    $query->setId("ID");
    $query->setMediaId("ID");
    $query->setNewOrder("Order");

    $result = $api->executeRequest($query);

## VideoReorder
Performs animals.videoReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\VideoReorder();

    $query->setId("ID");
    $query->setMediaId("ID");
    $query->setNewOrder("Order");

    $result = $api->executeRequest($query);

## VideoUrlReorder
Performs animals.videoUrlReorder query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\VideoUrlReorder();

    $query->setId("ID");
    $query->setMediaId("ID");
    $query->setNewOrder("Order");

    $result = $api->executeRequest($query);

## Pictures
Performs animals.pictures query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\Pictures();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## Videos
Performs animals.videos query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\Videos();

    $query->setId("ID");

    $result = $api->executeRequest($query);

## YoutubeUrls
Performs animals.youtubeUrls query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Animals\YoutubeUrls();

    $query->setId("ID");

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

    $query->setFieldlist("Field list");

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

    $query->setFieldlist("Field list");

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

    $query->setFieldlist("Field list");

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

    $query->setStatuslist("Statuses");

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

    $query->setEnableAnimalsSpecialListBabies("Babies (Kittens, Puppies) enabled");
    $query->setAnimalsSpecialListBabiesYoungest("Babies (Kittens, Puppies) Youngest Age");
    $query->setAnimalsSpecialListBabiesOldest("Babies (Kittens, Puppies) Oldest Age");
    $query->setEnableAnimalsSpecialListTeens("Teens enabled");
    $query->setAnimalsSpecialListTeensYoungest("Teens Youngest Age");
    $query->setAnimalsSpecialListTeensOldest("Teens Oldest Age");
    $query->setEnableAnimalsSpecialListAdults("Adults enabled");
    $query->setAnimalsSpecialListAdultsYoungest("Adults Youngest Age");
    $query->setAnimalsSpecialListAdultsOldest("Adults Oldest Age");
    $query->setEnableAnimalsSpecialListSeniors("Seniors enabled");
    $query->setAnimalsSpecialListSeniorsYoungest("Seniors Youngest Age");
    $query->setEnableAnimalsSpecialListLongtime("Long Time/Must Adopt enabled");
    $query->setAnimalsSpecialListLongtimeYoungest("Long Time/Must Adopt Shortest length of time");
    $query->setAnimalsSpecialListLongtimeOldest("Long Time/Must Adopt Longest length of time");
    $query->setEnableAnimalsSpecialListRecent("Recent Arrivals enabled");
    $query->setAnimalsSpecialListRecentDays("Recent Arrivals Shortest length of time");
    $query->setEnableAnimalsSpecialListSpecialNeeds("Special Needs enabled");
    $query->setEnableAnimalsSpecialListUrgent("Urgent enabled");
    $query->setEnableAnimalsSpecialListFoster("Needs a Caretaker/Foster enabled");
    $query->setEnableAnimalsSpecialListCourtesy("Courtesy Listings enabled");
    $query->setEnableAnimalAutoRescueID("Automatically set animal's Rescue ID");
    $query->setAnimalAutoRescueIDFormat("Format for Rescue IDs");
    $query->setDisableAnimalAutoRescueIDCourtesyListings("Do not automatically assign Rescue ID for courtesy listings");
    $query->setEnablePortalWebsite("Enable the Portal website");
    $query->setShowAnimalMicrochip("Show if the animal is microchipped");
    $query->setShowAnimalAltered("Show if the animal is altered");
    $query->setShowAnimalWillBeAltered("Show if the animal will be altered before adoption");
    $query->setShowAnimalRescueID("Show the animal's Rescue ID");
    $query->setShowAnimalAdoptionFee("Show the animal's adoption fee");
    $query->setShowAnimalEuthanasiaInfo("Show the animal's euthanasia information");
    $query->setDisableAnimalCourtesyHeaderFooter("Disable the animal header/footer to courtesy animals");
    $query->setShowAnimalKennelcardJournalEntries("Show journal entries on the kennel card");
    $query->setShowAnimalKennelcardJournalCost("Show cost on the kennel card");
    $query->setDisableAnimalExportAdopted("Prevent adopted animals from being uploaded to Petfinder");
    $query->setEnableExportAdoptedToAdoptapet("Export adopted pets to Adopt-a-Pet.com");
    $query->setDisableAnimalExportCourtesy("Prevent courtesy animals from being uploaded to other sites");
    $query->setDisableAnimalExportAnimalWebPageLink("Disable the link to the animal's web page");
    $query->setDisableAnimalExportWebsiteLink("Disable the link to your organization's website");
    $query->setDisableAnimalExportAdoptionFormLink("Disable the link to your adoption form");
    $query->setEnableAnimalExportDescriptionHeader("Include the Animal Description Header in the animal description");
    $query->setEnableAnimalExportDescriptionFooter("Include the Animal Description Footer in the animal description");
    $query->setEnableAnimalExportUniqueAnimalID("Use the RescueGroups.org Animal ID as a Unique ID");
    $query->setEnableAnimalExportContactFieldFirstname("Show the foster/caretaker's first name");
    $query->setEnableAnimalExportContactFieldLastname("Show the foster/caretaker's last name");
    $query->setEnableAnimalExportContactFieldEmail("Show the foster/caretaker's email address");
    $query->setEnableAnimalExportContactFieldPhoneHome("Show the foster/caretaker's home phone number");
    $query->setEnableAnimalExportContactFieldPhoneCell("Show the foster/caretaker's cell phone number");
    $query->setAnimalExportYouTubeAccount("Account to use for YouTube video upload");
    $query->setAnimalExportYouTubeAuthorizationCode("YouTube authorization code");
    $query->setAnimalExportDefaultCategory1("By default, export to services that list animals for adoption");
    $query->setAnimalExportDefaultCategory4("By default, export to services that list animals for adoption (from non-rescue/shelters)");
    $query->setAnimalExportDefaultCategory3("By default, export to services that list animals for sale by breeder");
    $query->setAnimalExportDefaultCategory2("By default, export to services that list animals for sale by owner");
    $query->setAnimalExportDefaultCategory5("By default, export to services that provide animal related classifieds");
    $query->setAnimalExportDefaultCategory6("By default, export to services that provide animal related community discussion/forums");
    $query->setAnimalExportDefaultCategory8("By default, export to services that provide animal related educational information");
    $query->setAnimalExportDefaultCategory7("By default, export to services that provide animal related news");
    $query->setAnimalExportDefaultCategory13("By default, export to services that provide event calendars");
    $query->setAnimalExportDefaultCategory9("By default, export to services that sell/promote animal related products (food, toys, treats, etc)");
    $query->setAnimalExportDefaultCategory11("By default, export to services that sell/promote animal related services (training, grooming)");
    $query->setAnimalExportDefaultCategory10("By default, export to services that sell/promote non-animal related products");
    $query->setAnimalExportDefaultCategory12("By default, export to services that sell/promote non-animal related services");
    $query->setDisableAnimalDescriptionVideo("Disable videos in Animal descriptions");
    $query->setEnableAnimalDescriptionVideoLink("Use a link instead of embedding the video in Animal descriptions");
    $query->setEnableFreePetChipRegistry("Enable FreePetChipRegistry registrations");
    $query->setFreePetChipRegistryUserName("FreePetChipRegistry user name");
    $query->setEnablePetLinkRegistry("Enable PetLink registrations");
    $query->setPetLinkUserName("PetLink user name");
    $query->setPetLinkPassword("PetLink password");
    $query->setDisableMicrochipUserAlert("Disable the email alert to the volunteer concerning microchip registration (success or failure)");
    $query->setMicrochipAlertEmails("Email address(es) to alert concerning microchip registration (success or failure)");

    $result = $api->executeRequest($query);

