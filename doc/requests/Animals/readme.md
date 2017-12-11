# Animals

This is the documentation for the animals queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animals)

## Animals\GetList

Performs animals.list query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetList();



## Animals\PublicView

Performs animals.publicView query.

    $query = new \RescueGroups\Requests\Objects\Animals\PublicView();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);



## Animals\View

Performs animals.view query.

    $query = new \RescueGroups\Requests\Objects\Animals\View();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);



## Animals\PublicSearch

Performs animals.publicSearch query.

    $query = new \RescueGroups\Requests\Objects\Animals\PublicSearch();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setAnimalOrgID

Sets animalOrgID field with a value of type integer.

    $query->setAnimalOrgID(integer);

#### ::setAnimalActivityLevel

Sets animalActivityLevel field with a value of type string.

    $query->setAnimalActivityLevel(string);

#### ::setAnimalAdoptedDate

Sets animalAdoptedDate field with a value of type \DateTime.

    $query->setAnimalAdoptedDate(\DateTime);

#### ::setAnimalAdoptionFee

Sets animalAdoptionFee field with a value of type string.

    $query->setAnimalAdoptionFee(string);

#### ::setAnimalAgeString

Sets animalAgeString field with a value of type string.

    $query->setAnimalAgeString(string);

#### ::setAnimalAltered

Sets animalAltered field with a value of type string.

    $query->setAnimalAltered(string);

#### ::setAnimalAvailableDate

Sets animalAvailableDate field with a value of type \DateTime.

    $query->setAnimalAvailableDate(\DateTime);

#### ::setAnimalBirthdate

Sets animalBirthdate field with a value of type \DateTime.

    $query->setAnimalBirthdate(\DateTime);

#### ::setAnimalBirthdateExact

Sets animalBirthdateExact field with a value of type string.

    $query->setAnimalBirthdateExact(string);

#### ::setAnimalBreed

Sets animalBreed field with a value of type string.

    $query->setAnimalBreed(string);

#### ::setAnimalCoatLength

Sets animalCoatLength field with a value of type string.

    $query->setAnimalCoatLength(string);

#### ::setAnimalColor

Sets animalColor field with a value of type string.

    $query->setAnimalColor(string);

#### ::setAnimalColorID

Sets animalColorID field with a value of type integer.

    $query->setAnimalColorID(integer);

#### ::setAnimalColorDetails

Sets animalColorDetails field with a value of type string.

    $query->setAnimalColorDetails(string);

#### ::setAnimalCourtesy

Sets animalCourtesy field with a value of type string.

    $query->setAnimalCourtesy(string);

#### ::setAnimalDeclawed

Sets animalDeclawed field with a value of type string.

    $query->setAnimalDeclawed(string);

#### ::setAnimalDescription

Sets animalDescription field with a value of type string.

    $query->setAnimalDescription(string);

#### ::setAnimalDescriptionPlain

Sets animalDescriptionPlain field with a value of type string.

    $query->setAnimalDescriptionPlain(string);

#### ::setAnimalDistinguishingMarks

Sets animalDistinguishingMarks field with a value of type string.

    $query->setAnimalDistinguishingMarks(string);

#### ::setAnimalEarType

Sets animalEarType field with a value of type string.

    $query->setAnimalEarType(string);

#### ::setAnimalEnergyLevel

Sets animalEnergyLevel field with a value of type string.

    $query->setAnimalEnergyLevel(string);

#### ::setAnimalExerciseNeeds

Sets animalExerciseNeeds field with a value of type string.

    $query->setAnimalExerciseNeeds(string);

#### ::setAnimalEyeColor

Sets animalEyeColor field with a value of type string.

    $query->setAnimalEyeColor(string);

#### ::setAnimalFence

Sets animalFence field with a value of type string.

    $query->setAnimalFence(string);

#### ::setAnimalFound

Sets animalFound field with a value of type string.

    $query->setAnimalFound(string);

#### ::setAnimalFoundDate

Sets animalFoundDate field with a value of type \DateTime.

    $query->setAnimalFoundDate(\DateTime);

#### ::setAnimalFoundPostalcode

Sets animalFoundPostalcode field with a value of type string.

    $query->setAnimalFoundPostalcode(string);

#### ::setAnimalGeneralAge

Sets animalGeneralAge field with a value of type string.

    $query->setAnimalGeneralAge(string);

#### ::setAnimalGeneralSizePotential

Sets animalGeneralSizePotential field with a value of type string.

    $query->setAnimalGeneralSizePotential(string);

#### ::setAnimalGroomingNeeds

Sets animalGroomingNeeds field with a value of type string.

    $query->setAnimalGroomingNeeds(string);

#### ::setAnimalHousetrained

Sets animalHousetrained field with a value of type string.

    $query->setAnimalHousetrained(string);

#### ::setAnimalIndoorOutdoor

Sets animalIndoorOutdoor field with a value of type string.

    $query->setAnimalIndoorOutdoor(string);

#### ::setAnimalKillDate

Sets animalKillDate field with a value of type \DateTime.

    $query->setAnimalKillDate(\DateTime);

#### ::setAnimalKillReason

Sets animalKillReason field with a value of type string.

    $query->setAnimalKillReason(string);

#### ::setAnimalLocation

Sets animalLocation field with a value of type string.

    $query->setAnimalLocation(string);

#### ::setAnimalLocationCoordinates

Sets animalLocationCoordinates field with a value of type string.

    $query->setAnimalLocationCoordinates(string);

#### ::setAnimalLocationDistance

Sets animalLocationDistance field with a value of type int.

    $query->setAnimalLocationDistance(int);

#### ::setAnimalLocationCitystate

Sets animalLocationCitystate field with a value of type string.

    $query->setAnimalLocationCitystate(string);

#### ::setAnimalLocationState

Sets animalLocationState field with a value of type string.

    $query->setAnimalLocationState(string);

#### ::setAnimalMicrochipped

Sets animalMicrochipped field with a value of type string.

    $query->setAnimalMicrochipped(string);

#### ::setAnimalMixedBreed

Sets animalMixedBreed field with a value of type string.

    $query->setAnimalMixedBreed(string);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalSpecialneeds

Sets animalSpecialneeds field with a value of type string.

    $query->setAnimalSpecialneeds(string);

#### ::setAnimalSpecialneedsDescription

Sets animalSpecialneedsDescription field with a value of type string.

    $query->setAnimalSpecialneedsDescription(string);

#### ::setAnimalNeedsFoster

Sets animalNeedsFoster field with a value of type string.

    $query->setAnimalNeedsFoster(string);

#### ::setAnimalNewPeople

Sets animalNewPeople field with a value of type string.

    $query->setAnimalNewPeople(string);

#### ::setAnimalNotHousetrainedReason

Sets animalNotHousetrainedReason field with a value of type string.

    $query->setAnimalNotHousetrainedReason(string);

#### ::setAnimalObedienceTraining

Sets animalObedienceTraining field with a value of type string.

    $query->setAnimalObedienceTraining(string);

#### ::setAnimalOKWithAdults

Sets animalOKWithAdults field with a value of type string.

    $query->setAnimalOKWithAdults(string);

#### ::setAnimalOKWithCats

Sets animalOKWithCats field with a value of type string.

    $query->setAnimalOKWithCats(string);

#### ::setAnimalOKWithDogs

Sets animalOKWithDogs field with a value of type string.

    $query->setAnimalOKWithDogs(string);

#### ::setAnimalOKWithKids

Sets animalOKWithKids field with a value of type string.

    $query->setAnimalOKWithKids(string);

#### ::setAnimalOwnerExperience

Sets animalOwnerExperience field with a value of type string.

    $query->setAnimalOwnerExperience(string);

#### ::setAnimalPattern

Sets animalPattern field with a value of type string.

    $query->setAnimalPattern(string);

#### ::setAnimalPatternID

Sets animalPatternID field with a value of type integer.

    $query->setAnimalPatternID(integer);

#### ::setAnimalAdoptionPending

Sets animalAdoptionPending field with a value of type string.

    $query->setAnimalAdoptionPending(string);

#### ::setAnimalPrimaryBreed

Sets animalPrimaryBreed field with a value of type string.

    $query->setAnimalPrimaryBreed(string);

#### ::setAnimalPrimaryBreedID

Sets animalPrimaryBreedID field with a value of type integer.

    $query->setAnimalPrimaryBreedID(integer);

#### ::setAnimalRescueID

Sets animalRescueID field with a value of type string.

    $query->setAnimalRescueID(string);

#### ::setAnimalSearchString

Sets animalSearchString field with a value of type string.

    $query->setAnimalSearchString(string);

#### ::setAnimalSecondaryBreed

Sets animalSecondaryBreed field with a value of type string.

    $query->setAnimalSecondaryBreed(string);

#### ::setAnimalSecondaryBreedID

Sets animalSecondaryBreedID field with a value of type integer.

    $query->setAnimalSecondaryBreedID(integer);

#### ::setAnimalSex

Sets animalSex field with a value of type string.

    $query->setAnimalSex(string);

#### ::setAnimalShedding

Sets animalShedding field with a value of type string.

    $query->setAnimalShedding(string);

#### ::setAnimalSizeCurrent

Sets animalSizeCurrent field with a value of type float.

    $query->setAnimalSizeCurrent(float);

#### ::setAnimalSizePotential

Sets animalSizePotential field with a value of type float.

    $query->setAnimalSizePotential(float);

#### ::setAnimalSizeUOM

Sets animalSizeUOM field with a value of type string.

    $query->setAnimalSizeUOM(string);

#### ::setAnimalSpecies

Sets animalSpecies field with a value of type string.

    $query->setAnimalSpecies(string);

#### ::setAnimalSpeciesID

Sets animalSpeciesID field with a value of type integer.

    $query->setAnimalSpeciesID(integer);

#### ::setAnimalSponsorable

Sets animalSponsorable field with a value of type string.

    $query->setAnimalSponsorable(string);

#### ::setAnimalSponsors

Sets animalSponsors field with a value of type string.

    $query->setAnimalSponsors(string);

#### ::setAnimalSponsorshipDetails

Sets animalSponsorshipDetails field with a value of type string.

    $query->setAnimalSponsorshipDetails(string);

#### ::setAnimalSponsorshipMinimum

Sets animalSponsorshipMinimum field with a value of type float.

    $query->setAnimalSponsorshipMinimum(float);

#### ::setAnimalStatus

Sets animalStatus field with a value of type string.

    $query->setAnimalStatus(string);

#### ::setAnimalStatusID

Sets animalStatusID field with a value of type integer.

    $query->setAnimalStatusID(integer);

#### ::setAnimalSummary

Sets animalSummary field with a value of type string.

    $query->setAnimalSummary(string);

#### ::setAnimalTailType

Sets animalTailType field with a value of type string.

    $query->setAnimalTailType(string);

#### ::setAnimalThumbnailUrl

Sets animalThumbnailUrl field with a value of type string.

    $query->setAnimalThumbnailUrl(string);

#### ::setAnimalUptodate

Sets animalUptodate field with a value of type string.

    $query->setAnimalUptodate(string);

#### ::setAnimalUpdatedDate

Sets animalUpdatedDate field with a value of type \DateTime.

    $query->setAnimalUpdatedDate(\DateTime);

#### ::setAnimalUrl

Sets animalUrl field with a value of type url.

    $query->setAnimalUrl(url);

#### ::setAnimalVocal

Sets animalVocal field with a value of type string.

    $query->setAnimalVocal(string);

#### ::setAnimalYardRequired

Sets animalYardRequired field with a value of type string.

    $query->setAnimalYardRequired(string);

#### ::setAnimalAffectionate

Sets animalAffectionate field with a value of type string.

    $query->setAnimalAffectionate(string);

#### ::setAnimalApartment

Sets animalApartment field with a value of type string.

    $query->setAnimalApartment(string);

#### ::setAnimalCratetrained

Sets animalCratetrained field with a value of type string.

    $query->setAnimalCratetrained(string);

#### ::setAnimalDrools

Sets animalDrools field with a value of type string.

    $query->setAnimalDrools(string);

#### ::setAnimalEagerToPlease

Sets animalEagerToPlease field with a value of type string.

    $query->setAnimalEagerToPlease(string);

#### ::setAnimalEscapes

Sets animalEscapes field with a value of type string.

    $query->setAnimalEscapes(string);

#### ::setAnimalEventempered

Sets animalEventempered field with a value of type string.

    $query->setAnimalEventempered(string);

#### ::setAnimalFetches

Sets animalFetches field with a value of type string.

    $query->setAnimalFetches(string);

#### ::setAnimalGentle

Sets animalGentle field with a value of type string.

    $query->setAnimalGentle(string);

#### ::setAnimalGoodInCar

Sets animalGoodInCar field with a value of type string.

    $query->setAnimalGoodInCar(string);

#### ::setAnimalGoofy

Sets animalGoofy field with a value of type string.

    $query->setAnimalGoofy(string);

#### ::setAnimalHasAllergies

Sets animalHasAllergies field with a value of type string.

    $query->setAnimalHasAllergies(string);

#### ::setAnimalHearingImpaired

Sets animalHearingImpaired field with a value of type string.

    $query->setAnimalHearingImpaired(string);

#### ::setAnimalHypoallergenic

Sets animalHypoallergenic field with a value of type string.

    $query->setAnimalHypoallergenic(string);

#### ::setAnimalIndependent

Sets animalIndependent field with a value of type string.

    $query->setAnimalIndependent(string);

#### ::setAnimalIntelligent

Sets animalIntelligent field with a value of type string.

    $query->setAnimalIntelligent(string);

#### ::setAnimalLap

Sets animalLap field with a value of type string.

    $query->setAnimalLap(string);

#### ::setAnimalLeashtrained

Sets animalLeashtrained field with a value of type string.

    $query->setAnimalLeashtrained(string);

#### ::setAnimalNeedsCompanionAnimal

Sets animalNeedsCompanionAnimal field with a value of type string.

    $query->setAnimalNeedsCompanionAnimal(string);

#### ::setAnimalNoCold

Sets animalNoCold field with a value of type string.

    $query->setAnimalNoCold(string);

#### ::setAnimalNoFemaleDogs

Sets animalNoFemaleDogs field with a value of type string.

    $query->setAnimalNoFemaleDogs(string);

#### ::setAnimalNoHeat

Sets animalNoHeat field with a value of type string.

    $query->setAnimalNoHeat(string);

#### ::setAnimalNoLargeDogs

Sets animalNoLargeDogs field with a value of type string.

    $query->setAnimalNoLargeDogs(string);

#### ::setAnimalNoMaleDogs

Sets animalNoMaleDogs field with a value of type string.

    $query->setAnimalNoMaleDogs(string);

#### ::setAnimalNoSmallDogs

Sets animalNoSmallDogs field with a value of type string.

    $query->setAnimalNoSmallDogs(string);

#### ::setAnimalObedient

Sets animalObedient field with a value of type string.

    $query->setAnimalObedient(string);

#### ::setAnimalOKForSeniors

Sets animalOKForSeniors field with a value of type string.

    $query->setAnimalOKForSeniors(string);

#### ::setAnimalOKWithFarmAnimals

Sets animalOKWithFarmAnimals field with a value of type string.

    $query->setAnimalOKWithFarmAnimals(string);

#### ::setAnimalOlderKidsOnly

Sets animalOlderKidsOnly field with a value of type string.

    $query->setAnimalOlderKidsOnly(string);

#### ::setAnimalOngoingMedical

Sets animalOngoingMedical field with a value of type string.

    $query->setAnimalOngoingMedical(string);

#### ::setAnimalPlayful

Sets animalPlayful field with a value of type string.

    $query->setAnimalPlayful(string);

#### ::setAnimalPlaysToys

Sets animalPlaysToys field with a value of type string.

    $query->setAnimalPlaysToys(string);

#### ::setAnimalPredatory

Sets animalPredatory field with a value of type string.

    $query->setAnimalPredatory(string);

#### ::setAnimalProtective

Sets animalProtective field with a value of type string.

    $query->setAnimalProtective(string);

#### ::setAnimalSightImpaired

Sets animalSightImpaired field with a value of type string.

    $query->setAnimalSightImpaired(string);

#### ::setAnimalSkittish

Sets animalSkittish field with a value of type string.

    $query->setAnimalSkittish(string);

#### ::setAnimalSpecialDiet

Sets animalSpecialDiet field with a value of type string.

    $query->setAnimalSpecialDiet(string);

#### ::setAnimalSwims

Sets animalSwims field with a value of type string.

    $query->setAnimalSwims(string);

#### ::setAnimalTimid

Sets animalTimid field with a value of type string.

    $query->setAnimalTimid(string);

#### ::setFosterEmail

Sets fosterEmail field with a value of type string.

    $query->setFosterEmail(string);

#### ::setFosterFirstname

Sets fosterFirstname field with a value of type string.

    $query->setFosterFirstname(string);

#### ::setFosterLastname

Sets fosterLastname field with a value of type string.

    $query->setFosterLastname(string);

#### ::setFosterName

Sets fosterName field with a value of type string.

    $query->setFosterName(string);

#### ::setFosterPhoneCell

Sets fosterPhoneCell field with a value of type string.

    $query->setFosterPhoneCell(string);

#### ::setFosterPhoneHome

Sets fosterPhoneHome field with a value of type string.

    $query->setFosterPhoneHome(string);

#### ::setFosterSalutation

Sets fosterSalutation field with a value of type string.

    $query->setFosterSalutation(string);

#### ::setLocationAddress

Sets locationAddress field with a value of type string.

    $query->setLocationAddress(string);

#### ::setLocationCity

Sets locationCity field with a value of type string.

    $query->setLocationCity(string);

#### ::setLocationCountry

Sets locationCountry field with a value of type string.

    $query->setLocationCountry(string);

#### ::setLocationUrl

Sets locationUrl field with a value of type string.

    $query->setLocationUrl(string);

#### ::setLocationName

Sets locationName field with a value of type enumLookup.

    $query->setLocationName(enumLookup);

#### ::setLocationPhone

Sets locationPhone field with a value of type string.

    $query->setLocationPhone(string);

#### ::setLocationState

Sets locationState field with a value of type string.

    $query->setLocationState(string);

#### ::setLocationPostalcode

Sets locationPostalcode field with a value of type string.

    $query->setLocationPostalcode(string);

#### ::setAnimalPictures

Sets animalPictures field with a value of type string.

    $query->setAnimalPictures(string);

#### ::setAnimalVideos

Sets animalVideos field with a value of type string.

    $query->setAnimalVideos(string);

#### ::setAnimalVideoUrls

Sets animalVideoUrls field with a value of type string.

    $query->setAnimalVideoUrls(string);



## Animals\Search

Performs animals.search query.

    $query = new \RescueGroups\Requests\Objects\Animals\Search();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setAnimalActivityLevel

Sets animalActivityLevel field with a value of type string.

    $query->setAnimalActivityLevel(string);

#### ::setAnimalAdoptedDate

Sets animalAdoptedDate field with a value of type \DateTime.

    $query->setAnimalAdoptedDate(\DateTime);

#### ::setAnimalAdoptionFee

Sets animalAdoptionFee field with a value of type string.

    $query->setAnimalAdoptionFee(string);

#### ::setAnimalAdoptionLead

Sets animalAdoptionLead field with a value of type string.

    $query->setAnimalAdoptionLead(string);

#### ::setAnimalAdoptionLeadID

Sets animalAdoptionLeadID field with a value of type integer.

    $query->setAnimalAdoptionLeadID(integer);

#### ::setAnimalAltered

Sets animalAltered field with a value of type string.

    $query->setAnimalAltered(string);

#### ::setAnimalApplicationID

Sets animalApplicationID field with a value of type integer.

    $query->setAnimalApplicationID(integer);

#### ::setAnimalAvailableDate

Sets animalAvailableDate field with a value of type \DateTime.

    $query->setAnimalAvailableDate(\DateTime);

#### ::setAnimalBirthdate

Sets animalBirthdate field with a value of type \DateTime.

    $query->setAnimalBirthdate(\DateTime);

#### ::setAnimalBirthdateExact

Sets animalBirthdateExact field with a value of type string.

    $query->setAnimalBirthdateExact(string);

#### ::setAnimalBreed

Sets animalBreed field with a value of type string.

    $query->setAnimalBreed(string);

#### ::setAnimalCoatLength

Sets animalCoatLength field with a value of type string.

    $query->setAnimalCoatLength(string);

#### ::setAnimalColonyID

Sets animalColonyID field with a value of type integer.

    $query->setAnimalColonyID(integer);

#### ::setAnimalColor

Sets animalColor field with a value of type string.

    $query->setAnimalColor(string);

#### ::setAnimalColorID

Sets animalColorID field with a value of type integer.

    $query->setAnimalColorID(integer);

#### ::setAnimalColorDetails

Sets animalColorDetails field with a value of type string.

    $query->setAnimalColorDetails(string);

#### ::setAnimalCondition

Sets animalCondition field with a value of type string.

    $query->setAnimalCondition(string);

#### ::setAnimalConditionID

Sets animalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setAnimalCost

Sets animalCost field with a value of type string.

    $query->setAnimalCost(string);

#### ::setAnimalCourtesy

Sets animalCourtesy field with a value of type string.

    $query->setAnimalCourtesy(string);

#### ::setAnimalCreatedDate

Sets animalCreatedDate field with a value of type \DateTime.

    $query->setAnimalCreatedDate(\DateTime);

#### ::setAnimalCreatedBy

Sets animalCreatedBy field with a value of type string.

    $query->setAnimalCreatedBy(string);

#### ::setAnimalCreatedByID

Sets animalCreatedByID field with a value of type integer.

    $query->setAnimalCreatedByID(integer);

#### ::setAnimalCreatedTimeframe

Sets animalCreatedTimeframe field with a value of type int.

    $query->setAnimalCreatedTimeframe(int);

#### ::setAnimalDaysInFoster

Sets animalDaysInFoster field with a value of type int.

    $query->setAnimalDaysInFoster(int);

#### ::setAnimalDeclawed

Sets animalDeclawed field with a value of type string.

    $query->setAnimalDeclawed(string);

#### ::setAnimalDescription

Sets animalDescription field with a value of type string.

    $query->setAnimalDescription(string);

#### ::setAnimalDescriptionPlain

Sets animalDescriptionPlain field with a value of type string.

    $query->setAnimalDescriptionPlain(string);

#### ::setAnimalDistinguishingMarks

Sets animalDistinguishingMarks field with a value of type string.

    $query->setAnimalDistinguishingMarks(string);

#### ::setAnimalAllowExport

Sets animalAllowExport field with a value of type string.

    $query->setAnimalAllowExport(string);

#### ::setAnimalEarType

Sets animalEarType field with a value of type string.

    $query->setAnimalEarType(string);

#### ::setAnimalEnergyLevel

Sets animalEnergyLevel field with a value of type string.

    $query->setAnimalEnergyLevel(string);

#### ::setAnimalExerciseNeeds

Sets animalExerciseNeeds field with a value of type string.

    $query->setAnimalExerciseNeeds(string);

#### ::setAnimalEyeColor

Sets animalEyeColor field with a value of type string.

    $query->setAnimalEyeColor(string);

#### ::setAnimalFence

Sets animalFence field with a value of type string.

    $query->setAnimalFence(string);

#### ::setAnimalFosterID

Sets animalFosterID field with a value of type integer.

    $query->setAnimalFosterID(integer);

#### ::setAnimalFound

Sets animalFound field with a value of type string.

    $query->setAnimalFound(string);

#### ::setAnimalFoundDate

Sets animalFoundDate field with a value of type \DateTime.

    $query->setAnimalFoundDate(\DateTime);

#### ::setAnimalFoundPostalcode

Sets animalFoundPostalcode field with a value of type string.

    $query->setAnimalFoundPostalcode(string);

#### ::setAnimalGeneralAge

Sets animalGeneralAge field with a value of type string.

    $query->setAnimalGeneralAge(string);

#### ::setAnimalGeneralSizePotential

Sets animalGeneralSizePotential field with a value of type string.

    $query->setAnimalGeneralSizePotential(string);

#### ::setAnimalGroomingNeeds

Sets animalGroomingNeeds field with a value of type string.

    $query->setAnimalGroomingNeeds(string);

#### ::setAnimalHighlightOrder

Sets animalHighlightOrder field with a value of type int.

    $query->setAnimalHighlightOrder(int);

#### ::setAnimalHousetrained

Sets animalHousetrained field with a value of type string.

    $query->setAnimalHousetrained(string);

#### ::setAnimalIndoorOutdoor

Sets animalIndoorOutdoor field with a value of type string.

    $query->setAnimalIndoorOutdoor(string);

#### ::setAnimalIntakes

Sets animalIntakes field with a value of type int.

    $query->setAnimalIntakes(int);

#### ::setAnimalInternalID

Sets animalInternalID field with a value of type string.

    $query->setAnimalInternalID(string);

#### ::setAnimalKillDate

Sets animalKillDate field with a value of type \DateTime.

    $query->setAnimalKillDate(\DateTime);

#### ::setAnimalKillReason

Sets animalKillReason field with a value of type string.

    $query->setAnimalKillReason(string);

#### ::setAnimalUpdatedBy

Sets animalUpdatedBy field with a value of type string.

    $query->setAnimalUpdatedBy(string);

#### ::setAnimalUpdatedByID

Sets animalUpdatedByID field with a value of type integer.

    $query->setAnimalUpdatedByID(integer);

#### ::setAnimalUpdatedDate

Sets animalUpdatedDate field with a value of type \DateTime.

    $query->setAnimalUpdatedDate(\DateTime);

#### ::setAnimalUpdatedTimeframe

Sets animalUpdatedTimeframe field with a value of type int.

    $query->setAnimalUpdatedTimeframe(int);

#### ::setAnimalLocationID

Sets animalLocationID field with a value of type integer.

    $query->setAnimalLocationID(integer);

#### ::setAnimalLocationPublic

Sets animalLocationPublic field with a value of type string.

    $query->setAnimalLocationPublic(string);

#### ::setAnimalMicrochipped

Sets animalMicrochipped field with a value of type string.

    $query->setAnimalMicrochipped(string);

#### ::setAnimalMicrochipNumber

Sets animalMicrochipNumber field with a value of type string.

    $query->setAnimalMicrochipNumber(string);

#### ::setAnimalMicrochipVendor

Sets animalMicrochipVendor field with a value of type integer.

    $query->setAnimalMicrochipVendor(integer);

#### ::setAnimalMixedBreed

Sets animalMixedBreed field with a value of type string.

    $query->setAnimalMixedBreed(string);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalSpecialneeds

Sets animalSpecialneeds field with a value of type string.

    $query->setAnimalSpecialneeds(string);

#### ::setAnimalSpecialneedsDescription

Sets animalSpecialneedsDescription field with a value of type string.

    $query->setAnimalSpecialneedsDescription(string);

#### ::setAnimalNeedsFoster

Sets animalNeedsFoster field with a value of type string.

    $query->setAnimalNeedsFoster(string);

#### ::setAnimalNewPeople

Sets animalNewPeople field with a value of type string.

    $query->setAnimalNewPeople(string);

#### ::setAnimalNotes

Sets animalNotes field with a value of type string.

    $query->setAnimalNotes(string);

#### ::setAnimalNotHousetrainedReason

Sets animalNotHousetrainedReason field with a value of type string.

    $query->setAnimalNotHousetrainedReason(string);

#### ::setAnimalObedienceTraining

Sets animalObedienceTraining field with a value of type string.

    $query->setAnimalObedienceTraining(string);

#### ::setAnimalOKWithAdults

Sets animalOKWithAdults field with a value of type string.

    $query->setAnimalOKWithAdults(string);

#### ::setAnimalOKWithCats

Sets animalOKWithCats field with a value of type string.

    $query->setAnimalOKWithCats(string);

#### ::setAnimalOKWithDogs

Sets animalOKWithDogs field with a value of type string.

    $query->setAnimalOKWithDogs(string);

#### ::setAnimalOKWithKids

Sets animalOKWithKids field with a value of type string.

    $query->setAnimalOKWithKids(string);

#### ::setAnimalOpenIntakes

Sets animalOpenIntakes field with a value of type int.

    $query->setAnimalOpenIntakes(int);

#### ::setAnimalOrigin

Sets animalOrigin field with a value of type string.

    $query->setAnimalOrigin(string);

#### ::setAnimalOthernames

Sets animalOthernames field with a value of type string.

    $query->setAnimalOthernames(string);

#### ::setAnimalOutcomes

Sets animalOutcomes field with a value of type int.

    $query->setAnimalOutcomes(int);

#### ::setAnimalOwnerExperience

Sets animalOwnerExperience field with a value of type string.

    $query->setAnimalOwnerExperience(string);

#### ::setAnimalOwnerID

Sets animalOwnerID field with a value of type integer.

    $query->setAnimalOwnerID(integer);

#### ::setAnimalPattern

Sets animalPattern field with a value of type string.

    $query->setAnimalPattern(string);

#### ::setAnimalPatternID

Sets animalPatternID field with a value of type integer.

    $query->setAnimalPatternID(integer);

#### ::setAnimalAdoptionPending

Sets animalAdoptionPending field with a value of type string.

    $query->setAnimalAdoptionPending(string);

#### ::setAnimalPrimaryBreed

Sets animalPrimaryBreed field with a value of type string.

    $query->setAnimalPrimaryBreed(string);

#### ::setAnimalPrimaryBreedID

Sets animalPrimaryBreedID field with a value of type integer.

    $query->setAnimalPrimaryBreedID(integer);

#### ::setAnimalReceivedDate

Sets animalReceivedDate field with a value of type \DateTime.

    $query->setAnimalReceivedDate(\DateTime);

#### ::setAnimalRescueID

Sets animalRescueID field with a value of type string.

    $query->setAnimalRescueID(string);

#### ::setAnimalSecondaryBreed

Sets animalSecondaryBreed field with a value of type string.

    $query->setAnimalSecondaryBreed(string);

#### ::setAnimalSecondaryBreedID

Sets animalSecondaryBreedID field with a value of type integer.

    $query->setAnimalSecondaryBreedID(integer);

#### ::setAnimalSex

Sets animalSex field with a value of type string.

    $query->setAnimalSex(string);

#### ::setAnimalShared

Sets animalShared field with a value of type string.

    $query->setAnimalShared(string);

#### ::setAnimalShedding

Sets animalShedding field with a value of type string.

    $query->setAnimalShedding(string);

#### ::setAnimalSizeCurrent

Sets animalSizeCurrent field with a value of type float.

    $query->setAnimalSizeCurrent(float);

#### ::setAnimalSizePotential

Sets animalSizePotential field with a value of type float.

    $query->setAnimalSizePotential(float);

#### ::setAnimalSizeUOM

Sets animalSizeUOM field with a value of type string.

    $query->setAnimalSizeUOM(string);

#### ::setAnimalSpecies

Sets animalSpecies field with a value of type string.

    $query->setAnimalSpecies(string);

#### ::setAnimalSpeciesID

Sets animalSpeciesID field with a value of type integer.

    $query->setAnimalSpeciesID(integer);

#### ::setAnimalSponsorable

Sets animalSponsorable field with a value of type string.

    $query->setAnimalSponsorable(string);

#### ::setAnimalSponsors

Sets animalSponsors field with a value of type string.

    $query->setAnimalSponsors(string);

#### ::setAnimalSponsorshipDetails

Sets animalSponsorshipDetails field with a value of type string.

    $query->setAnimalSponsorshipDetails(string);

#### ::setAnimalSponsorshipMinimum

Sets animalSponsorshipMinimum field with a value of type float.

    $query->setAnimalSponsorshipMinimum(float);

#### ::setAnimalStatus

Sets animalStatus field with a value of type string.

    $query->setAnimalStatus(string);

#### ::setAnimalStatusID

Sets animalStatusID field with a value of type integer.

    $query->setAnimalStatusID(integer);

#### ::setAnimalSummary

Sets animalSummary field with a value of type string.

    $query->setAnimalSummary(string);

#### ::setAnimalTailType

Sets animalTailType field with a value of type string.

    $query->setAnimalTailType(string);

#### ::setAnimalTransferredToID

Sets animalTransferredToID field with a value of type integer.

    $query->setAnimalTransferredToID(integer);

#### ::setAnimalUptodate

Sets animalUptodate field with a value of type string.

    $query->setAnimalUptodate(string);

#### ::setAnimalVocal

Sets animalVocal field with a value of type string.

    $query->setAnimalVocal(string);

#### ::setAnimalYardRequired

Sets animalYardRequired field with a value of type string.

    $query->setAnimalYardRequired(string);

#### ::setAnimalAffectionate

Sets animalAffectionate field with a value of type string.

    $query->setAnimalAffectionate(string);

#### ::setAnimalApartment

Sets animalApartment field with a value of type string.

    $query->setAnimalApartment(string);

#### ::setAnimalCratetrained

Sets animalCratetrained field with a value of type string.

    $query->setAnimalCratetrained(string);

#### ::setAnimalDrools

Sets animalDrools field with a value of type string.

    $query->setAnimalDrools(string);

#### ::setAnimalEagerToPlease

Sets animalEagerToPlease field with a value of type string.

    $query->setAnimalEagerToPlease(string);

#### ::setAnimalEscapes

Sets animalEscapes field with a value of type string.

    $query->setAnimalEscapes(string);

#### ::setAnimalEventempered

Sets animalEventempered field with a value of type string.

    $query->setAnimalEventempered(string);

#### ::setAnimalFetches

Sets animalFetches field with a value of type string.

    $query->setAnimalFetches(string);

#### ::setAnimalGentle

Sets animalGentle field with a value of type string.

    $query->setAnimalGentle(string);

#### ::setAnimalGoodInCar

Sets animalGoodInCar field with a value of type string.

    $query->setAnimalGoodInCar(string);

#### ::setAnimalGoofy

Sets animalGoofy field with a value of type string.

    $query->setAnimalGoofy(string);

#### ::setAnimalHasAllergies

Sets animalHasAllergies field with a value of type string.

    $query->setAnimalHasAllergies(string);

#### ::setAnimalHearingImpaired

Sets animalHearingImpaired field with a value of type string.

    $query->setAnimalHearingImpaired(string);

#### ::setAnimalHypoallergenic

Sets animalHypoallergenic field with a value of type string.

    $query->setAnimalHypoallergenic(string);

#### ::setAnimalIndependent

Sets animalIndependent field with a value of type string.

    $query->setAnimalIndependent(string);

#### ::setAnimalIntelligent

Sets animalIntelligent field with a value of type string.

    $query->setAnimalIntelligent(string);

#### ::setAnimalLap

Sets animalLap field with a value of type string.

    $query->setAnimalLap(string);

#### ::setAnimalLeashtrained

Sets animalLeashtrained field with a value of type string.

    $query->setAnimalLeashtrained(string);

#### ::setAnimalNeedsCompanionAnimal

Sets animalNeedsCompanionAnimal field with a value of type string.

    $query->setAnimalNeedsCompanionAnimal(string);

#### ::setAnimalNoCold

Sets animalNoCold field with a value of type string.

    $query->setAnimalNoCold(string);

#### ::setAnimalNoFemaleDogs

Sets animalNoFemaleDogs field with a value of type string.

    $query->setAnimalNoFemaleDogs(string);

#### ::setAnimalNoHeat

Sets animalNoHeat field with a value of type string.

    $query->setAnimalNoHeat(string);

#### ::setAnimalNoLargeDogs

Sets animalNoLargeDogs field with a value of type string.

    $query->setAnimalNoLargeDogs(string);

#### ::setAnimalNoMaleDogs

Sets animalNoMaleDogs field with a value of type string.

    $query->setAnimalNoMaleDogs(string);

#### ::setAnimalNoSmallDogs

Sets animalNoSmallDogs field with a value of type string.

    $query->setAnimalNoSmallDogs(string);

#### ::setAnimalObedient

Sets animalObedient field with a value of type string.

    $query->setAnimalObedient(string);

#### ::setAnimalOKForSeniors

Sets animalOKForSeniors field with a value of type string.

    $query->setAnimalOKForSeniors(string);

#### ::setAnimalOKWithFarmAnimals

Sets animalOKWithFarmAnimals field with a value of type string.

    $query->setAnimalOKWithFarmAnimals(string);

#### ::setAnimalOlderKidsOnly

Sets animalOlderKidsOnly field with a value of type string.

    $query->setAnimalOlderKidsOnly(string);

#### ::setAnimalOngoingMedical

Sets animalOngoingMedical field with a value of type string.

    $query->setAnimalOngoingMedical(string);

#### ::setAnimalPlayful

Sets animalPlayful field with a value of type string.

    $query->setAnimalPlayful(string);

#### ::setAnimalPlaysToys

Sets animalPlaysToys field with a value of type string.

    $query->setAnimalPlaysToys(string);

#### ::setAnimalPredatory

Sets animalPredatory field with a value of type string.

    $query->setAnimalPredatory(string);

#### ::setAnimalProtective

Sets animalProtective field with a value of type string.

    $query->setAnimalProtective(string);

#### ::setAnimalSightImpaired

Sets animalSightImpaired field with a value of type string.

    $query->setAnimalSightImpaired(string);

#### ::setAnimalSkittish

Sets animalSkittish field with a value of type string.

    $query->setAnimalSkittish(string);

#### ::setAnimalSpecialDiet

Sets animalSpecialDiet field with a value of type string.

    $query->setAnimalSpecialDiet(string);

#### ::setAnimalSwims

Sets animalSwims field with a value of type string.

    $query->setAnimalSwims(string);

#### ::setAnimalTimid

Sets animalTimid field with a value of type string.

    $query->setAnimalTimid(string);

#### ::setOwnerID

Sets ownerID field with a value of type integer.

    $query->setOwnerID(integer);

#### ::setOwnerActive

Sets ownerActive field with a value of type string.

    $query->setOwnerActive(string);

#### ::setOwnerAddress

Sets ownerAddress field with a value of type string.

    $query->setOwnerAddress(string);

#### ::setOwnerBounces

Sets ownerBounces field with a value of type string.

    $query->setOwnerBounces(string);

#### ::setOwnerCarrier

Sets ownerCarrier field with a value of type string.

    $query->setOwnerCarrier(string);

#### ::setOwnerCity

Sets ownerCity field with a value of type string.

    $query->setOwnerCity(string);

#### ::setOwnerComment

Sets ownerComment field with a value of type string.

    $query->setOwnerComment(string);

#### ::setOwnerCompany

Sets ownerCompany field with a value of type string.

    $query->setOwnerCompany(string);

#### ::setOwnerCountry

Sets ownerCountry field with a value of type string.

    $query->setOwnerCountry(string);

#### ::setOwnerCounty

Sets ownerCounty field with a value of type string.

    $query->setOwnerCounty(string);

#### ::setOwnerEmail

Sets ownerEmail field with a value of type string.

    $query->setOwnerEmail(string);

#### ::setOwnerEmailAlt

Sets ownerEmailAlt field with a value of type string.

    $query->setOwnerEmailAlt(string);

#### ::setOwnerEmailPager

Sets ownerEmailPager field with a value of type string.

    $query->setOwnerEmailPager(string);

#### ::setOwnerFax

Sets ownerFax field with a value of type string.

    $query->setOwnerFax(string);

#### ::setOwnerFirstname

Sets ownerFirstname field with a value of type string.

    $query->setOwnerFirstname(string);

#### ::setOwnerLastname

Sets ownerLastname field with a value of type string.

    $query->setOwnerLastname(string);

#### ::setOwnerName

Sets ownerName field with a value of type string.

    $query->setOwnerName(string);

#### ::setOwnerPhoneCell

Sets ownerPhoneCell field with a value of type string.

    $query->setOwnerPhoneCell(string);

#### ::setOwnerPhoneHome

Sets ownerPhoneHome field with a value of type string.

    $query->setOwnerPhoneHome(string);

#### ::setOwnerPhoneWork

Sets ownerPhoneWork field with a value of type string.

    $query->setOwnerPhoneWork(string);

#### ::setOwnerPhoneWorkExt

Sets ownerPhoneWorkExt field with a value of type string.

    $query->setOwnerPhoneWorkExt(string);

#### ::setOwnerPlus4

Sets ownerPlus4 field with a value of type string.

    $query->setOwnerPlus4(string);

#### ::setOwnerReferredBy

Sets ownerReferredBy field with a value of type string.

    $query->setOwnerReferredBy(string);

#### ::setOwnerSalutation

Sets ownerSalutation field with a value of type string.

    $query->setOwnerSalutation(string);

#### ::setOwnerSendMail

Sets ownerSendMail field with a value of type string.

    $query->setOwnerSendMail(string);

#### ::setOwnerState

Sets ownerState field with a value of type string.

    $query->setOwnerState(string);

#### ::setOwnerTitle

Sets ownerTitle field with a value of type string.

    $query->setOwnerTitle(string);

#### ::setOwnerPostalcode

Sets ownerPostalcode field with a value of type string.

    $query->setOwnerPostalcode(string);

#### ::setColonyAnimals

Sets colonyAnimals field with a value of type string.

    $query->setColonyAnimals(string);

#### ::setColonyCaretakers

Sets colonyCaretakers field with a value of type string.

    $query->setColonyCaretakers(string);

#### ::setColonyLocation

Sets colonyLocation field with a value of type string.

    $query->setColonyLocation(string);

#### ::setColonyLocationID

Sets colonyLocationID field with a value of type integer.

    $query->setColonyLocationID(integer);

#### ::setColonyName

Sets colonyName field with a value of type string.

    $query->setColonyName(string);

#### ::setColonyRegisteredDate

Sets colonyRegisteredDate field with a value of type \DateTime.

    $query->setColonyRegisteredDate(\DateTime);

#### ::setColonySpecificLocation

Sets colonySpecificLocation field with a value of type string.

    $query->setColonySpecificLocation(string);

#### ::setFosterID

Sets fosterID field with a value of type integer.

    $query->setFosterID(integer);

#### ::setFosterActive

Sets fosterActive field with a value of type string.

    $query->setFosterActive(string);

#### ::setFosterAddress

Sets fosterAddress field with a value of type string.

    $query->setFosterAddress(string);

#### ::setFosterBounces

Sets fosterBounces field with a value of type string.

    $query->setFosterBounces(string);

#### ::setFosterCarrier

Sets fosterCarrier field with a value of type string.

    $query->setFosterCarrier(string);

#### ::setFosterCity

Sets fosterCity field with a value of type string.

    $query->setFosterCity(string);

#### ::setFosterComment

Sets fosterComment field with a value of type string.

    $query->setFosterComment(string);

#### ::setFosterCompany

Sets fosterCompany field with a value of type string.

    $query->setFosterCompany(string);

#### ::setFosterCountry

Sets fosterCountry field with a value of type string.

    $query->setFosterCountry(string);

#### ::setFosterCounty

Sets fosterCounty field with a value of type string.

    $query->setFosterCounty(string);

#### ::setFosterEmail

Sets fosterEmail field with a value of type string.

    $query->setFosterEmail(string);

#### ::setFosterEmailAlt

Sets fosterEmailAlt field with a value of type string.

    $query->setFosterEmailAlt(string);

#### ::setFosterEmailPager

Sets fosterEmailPager field with a value of type string.

    $query->setFosterEmailPager(string);

#### ::setFosterFax

Sets fosterFax field with a value of type string.

    $query->setFosterFax(string);

#### ::setFosterFirstname

Sets fosterFirstname field with a value of type string.

    $query->setFosterFirstname(string);

#### ::setFosterLastname

Sets fosterLastname field with a value of type string.

    $query->setFosterLastname(string);

#### ::setFosterName

Sets fosterName field with a value of type string.

    $query->setFosterName(string);

#### ::setFosterPhoneCell

Sets fosterPhoneCell field with a value of type string.

    $query->setFosterPhoneCell(string);

#### ::setFosterPhoneHome

Sets fosterPhoneHome field with a value of type string.

    $query->setFosterPhoneHome(string);

#### ::setFosterPhoneWork

Sets fosterPhoneWork field with a value of type string.

    $query->setFosterPhoneWork(string);

#### ::setFosterPhoneWorkExt

Sets fosterPhoneWorkExt field with a value of type string.

    $query->setFosterPhoneWorkExt(string);

#### ::setFosterPlus4

Sets fosterPlus4 field with a value of type string.

    $query->setFosterPlus4(string);

#### ::setFosterReferredBy

Sets fosterReferredBy field with a value of type string.

    $query->setFosterReferredBy(string);

#### ::setFosterSalutation

Sets fosterSalutation field with a value of type string.

    $query->setFosterSalutation(string);

#### ::setFosterSendMail

Sets fosterSendMail field with a value of type string.

    $query->setFosterSendMail(string);

#### ::setFosterState

Sets fosterState field with a value of type string.

    $query->setFosterState(string);

#### ::setFosterTitle

Sets fosterTitle field with a value of type string.

    $query->setFosterTitle(string);

#### ::setFosterPostalcode

Sets fosterPostalcode field with a value of type string.

    $query->setFosterPostalcode(string);

#### ::setLocationAddress

Sets locationAddress field with a value of type string.

    $query->setLocationAddress(string);

#### ::setLocationAnimals

Sets locationAnimals field with a value of type string.

    $query->setLocationAnimals(string);

#### ::setLocationCity

Sets locationCity field with a value of type string.

    $query->setLocationCity(string);

#### ::setLocationColonies

Sets locationColonies field with a value of type string.

    $query->setLocationColonies(string);

#### ::setLocationCountry

Sets locationCountry field with a value of type string.

    $query->setLocationCountry(string);

#### ::setLocationUrl

Sets locationUrl field with a value of type string.

    $query->setLocationUrl(string);

#### ::setLocationEvents

Sets locationEvents field with a value of type string.

    $query->setLocationEvents(string);

#### ::setLocationMeetrequests

Sets locationMeetrequests field with a value of type string.

    $query->setLocationMeetrequests(string);

#### ::setLocationName

Sets locationName field with a value of type enumLookup.

    $query->setLocationName(enumLookup);

#### ::setLocationPhone

Sets locationPhone field with a value of type string.

    $query->setLocationPhone(string);

#### ::setLocationState

Sets locationState field with a value of type string.

    $query->setLocationState(string);

#### ::setLocationPostalcode

Sets locationPostalcode field with a value of type string.

    $query->setLocationPostalcode(string);

#### ::setSubmittedformID

Sets submittedformID field with a value of type string.

    $query->setSubmittedformID(string);

#### ::setSubmittedformAnimalID

Sets submittedformAnimalID field with a value of type string.

    $query->setSubmittedformAnimalID(string);

#### ::setSubmittedformAssignedToID

Sets submittedformAssignedToID field with a value of type string.

    $query->setSubmittedformAssignedToID(string);

#### ::setSubmittedformCommentsCount

Sets submittedformCommentsCount field with a value of type int.

    $query->setSubmittedformCommentsCount(int);

#### ::setSubmittedformCommentsInline

Sets submittedformCommentsInline field with a value of type string.

    $query->setSubmittedformCommentsInline(string);

#### ::setSubmittedformCompletedDate

Sets submittedformCompletedDate field with a value of type \DateTime.

    $query->setSubmittedformCompletedDate(\DateTime);

#### ::setSubmittedformFormName

Sets submittedformFormName field with a value of type string.

    $query->setSubmittedformFormName(string);

#### ::setSubmittedformPending

Sets submittedformPending field with a value of type string.

    $query->setSubmittedformPending(string);

#### ::setSubmittedformStatus

Sets submittedformStatus field with a value of type enumLookup.

    $query->setSubmittedformStatus(enumLookup);

#### ::setSubmittedformStepsCount

Sets submittedformStepsCount field with a value of type int.

    $query->setSubmittedformStepsCount(int);

#### ::setSubmitterID

Sets submitterID field with a value of type integer.

    $query->setSubmitterID(integer);

#### ::setSubmitterActive

Sets submitterActive field with a value of type string.

    $query->setSubmitterActive(string);

#### ::setSubmitterAddress

Sets submitterAddress field with a value of type string.

    $query->setSubmitterAddress(string);

#### ::setSubmitterBounces

Sets submitterBounces field with a value of type string.

    $query->setSubmitterBounces(string);

#### ::setSubmitterCarrier

Sets submitterCarrier field with a value of type string.

    $query->setSubmitterCarrier(string);

#### ::setSubmitterCity

Sets submitterCity field with a value of type string.

    $query->setSubmitterCity(string);

#### ::setSubmitterComment

Sets submitterComment field with a value of type string.

    $query->setSubmitterComment(string);

#### ::setSubmitterCompany

Sets submitterCompany field with a value of type string.

    $query->setSubmitterCompany(string);

#### ::setSubmitterCountry

Sets submitterCountry field with a value of type string.

    $query->setSubmitterCountry(string);

#### ::setSubmitterCounty

Sets submitterCounty field with a value of type string.

    $query->setSubmitterCounty(string);

#### ::setSubmitterEmail

Sets submitterEmail field with a value of type string.

    $query->setSubmitterEmail(string);

#### ::setSubmitterEmailAlt

Sets submitterEmailAlt field with a value of type string.

    $query->setSubmitterEmailAlt(string);

#### ::setSubmitterEmailPager

Sets submitterEmailPager field with a value of type string.

    $query->setSubmitterEmailPager(string);

#### ::setSubmitterFax

Sets submitterFax field with a value of type string.

    $query->setSubmitterFax(string);

#### ::setSubmitterFirstname

Sets submitterFirstname field with a value of type string.

    $query->setSubmitterFirstname(string);

#### ::setSubmitterLastname

Sets submitterLastname field with a value of type string.

    $query->setSubmitterLastname(string);

#### ::setSubmitterName

Sets submitterName field with a value of type string.

    $query->setSubmitterName(string);

#### ::setSubmitterPhoneCell

Sets submitterPhoneCell field with a value of type string.

    $query->setSubmitterPhoneCell(string);

#### ::setSubmitterPhoneHome

Sets submitterPhoneHome field with a value of type string.

    $query->setSubmitterPhoneHome(string);

#### ::setSubmitterPhoneWork

Sets submitterPhoneWork field with a value of type string.

    $query->setSubmitterPhoneWork(string);

#### ::setSubmitterPhoneWorkExt

Sets submitterPhoneWorkExt field with a value of type string.

    $query->setSubmitterPhoneWorkExt(string);

#### ::setSubmitterPlus4

Sets submitterPlus4 field with a value of type string.

    $query->setSubmitterPlus4(string);

#### ::setSubmitterReferredBy

Sets submitterReferredBy field with a value of type string.

    $query->setSubmitterReferredBy(string);

#### ::setSubmitterSalutation

Sets submitterSalutation field with a value of type string.

    $query->setSubmitterSalutation(string);

#### ::setSubmitterSendMail

Sets submitterSendMail field with a value of type string.

    $query->setSubmitterSendMail(string);

#### ::setSubmitterState

Sets submitterState field with a value of type string.

    $query->setSubmitterState(string);

#### ::setSubmitterTitle

Sets submitterTitle field with a value of type string.

    $query->setSubmitterTitle(string);

#### ::setSubmitterPostalcode

Sets submitterPostalcode field with a value of type string.

    $query->setSubmitterPostalcode(string);

#### ::setTransferredtoActive

Sets transferredtoActive field with a value of type string.

    $query->setTransferredtoActive(string);

#### ::setTransferredtoAddress

Sets transferredtoAddress field with a value of type string.

    $query->setTransferredtoAddress(string);

#### ::setTransferredtoBounces

Sets transferredtoBounces field with a value of type string.

    $query->setTransferredtoBounces(string);

#### ::setTransferredtoCarrier

Sets transferredtoCarrier field with a value of type string.

    $query->setTransferredtoCarrier(string);

#### ::setTransferredtoCity

Sets transferredtoCity field with a value of type string.

    $query->setTransferredtoCity(string);

#### ::setTransferredtoComment

Sets transferredtoComment field with a value of type string.

    $query->setTransferredtoComment(string);

#### ::setTransferredtoCompany

Sets transferredtoCompany field with a value of type string.

    $query->setTransferredtoCompany(string);

#### ::setTransferredtoID

Sets transferredtoID field with a value of type string.

    $query->setTransferredtoID(string);

#### ::setTransferredtoCountry

Sets transferredtoCountry field with a value of type string.

    $query->setTransferredtoCountry(string);

#### ::setTransferredtoCounty

Sets transferredtoCounty field with a value of type string.

    $query->setTransferredtoCounty(string);

#### ::setTransferredtoEmail

Sets transferredtoEmail field with a value of type string.

    $query->setTransferredtoEmail(string);

#### ::setTransferredtoEmailAlt

Sets transferredtoEmailAlt field with a value of type string.

    $query->setTransferredtoEmailAlt(string);

#### ::setTransferredtoEmailPager

Sets transferredtoEmailPager field with a value of type string.

    $query->setTransferredtoEmailPager(string);

#### ::setTransferredtoFax

Sets transferredtoFax field with a value of type string.

    $query->setTransferredtoFax(string);

#### ::setTransferredtoFirstname

Sets transferredtoFirstname field with a value of type string.

    $query->setTransferredtoFirstname(string);

#### ::setTransferredtoLastname

Sets transferredtoLastname field with a value of type string.

    $query->setTransferredtoLastname(string);

#### ::setTransferredtoName

Sets transferredtoName field with a value of type string.

    $query->setTransferredtoName(string);

#### ::setTransferredtoPhoneCell

Sets transferredtoPhoneCell field with a value of type string.

    $query->setTransferredtoPhoneCell(string);

#### ::setTransferredtoPhoneHome

Sets transferredtoPhoneHome field with a value of type string.

    $query->setTransferredtoPhoneHome(string);

#### ::setTransferredtoPhoneWork

Sets transferredtoPhoneWork field with a value of type string.

    $query->setTransferredtoPhoneWork(string);

#### ::setTransferredtoPhoneWorkExt

Sets transferredtoPhoneWorkExt field with a value of type string.

    $query->setTransferredtoPhoneWorkExt(string);

#### ::setTransferredtoPlus4

Sets transferredtoPlus4 field with a value of type string.

    $query->setTransferredtoPlus4(string);

#### ::setTransferredtoReferredBy

Sets transferredtoReferredBy field with a value of type string.

    $query->setTransferredtoReferredBy(string);

#### ::setTransferredtoSalutation

Sets transferredtoSalutation field with a value of type string.

    $query->setTransferredtoSalutation(string);

#### ::setTransferredtoSendMail

Sets transferredtoSendMail field with a value of type string.

    $query->setTransferredtoSendMail(string);

#### ::setTransferredtoState

Sets transferredtoState field with a value of type string.

    $query->setTransferredtoState(string);

#### ::setTransferredtoTitle

Sets transferredtoTitle field with a value of type string.

    $query->setTransferredtoTitle(string);

#### ::setTransferredtoPostalcode

Sets transferredtoPostalcode field with a value of type string.

    $query->setTransferredtoPostalcode(string);

#### ::setAnimalGroups

Sets animalGroups field with a value of type integer.

    $query->setAnimalGroups(integer);

#### ::setAnimalExportAccounts

Sets animalExportAccounts field with a value of type integer.

    $query->setAnimalExportAccounts(integer);

#### ::setAnimalPictures

Sets animalPictures field with a value of type string.

    $query->setAnimalPictures(string);

#### ::setAnimalVideos

Sets animalVideos field with a value of type string.

    $query->setAnimalVideos(string);

#### ::setAnimalVideoUrls

Sets animalVideoUrls field with a value of type string.

    $query->setAnimalVideoUrls(string);



## Animals\Add

Performs animals.add query.

    $query = new \RescueGroups\Requests\Objects\Animals\Add();

#### ::setAnimalActivityLevel

Sets animalActivityLevel field with a value of type string.

    $query->setAnimalActivityLevel(string);

#### ::setAnimalAdoptedDate

Sets animalAdoptedDate field with a value of type \DateTime.

    $query->setAnimalAdoptedDate(\DateTime);

#### ::setAnimalAdoptionFee

Sets animalAdoptionFee field with a value of type string.

    $query->setAnimalAdoptionFee(string);

#### ::setAnimalAdoptionLeadID

Sets animalAdoptionLeadID field with a value of type integer.

    $query->setAnimalAdoptionLeadID(integer);

#### ::setAnimalAdoptionPending

Sets animalAdoptionPending field with a value of type string.

    $query->setAnimalAdoptionPending(string);

#### ::setAnimalAltered

Sets animalAltered field with a value of type string.

    $query->setAnimalAltered(string);

#### ::setAnimalApplicationID

Sets animalApplicationID field with a value of type integer.

    $query->setAnimalApplicationID(integer);

#### ::setAnimalAvailableDate

Sets animalAvailableDate field with a value of type \DateTime.

    $query->setAnimalAvailableDate(\DateTime);

#### ::setAnimalBirthdate

Sets animalBirthdate field with a value of type \DateTime.

    $query->setAnimalBirthdate(\DateTime);

#### ::setAnimalBirthdateExact

Sets animalBirthdateExact field with a value of type string.

    $query->setAnimalBirthdateExact(string);

#### ::setAnimalCoatLength

Sets animalCoatLength field with a value of type string.

    $query->setAnimalCoatLength(string);

#### ::setAnimalColonyID

Sets animalColonyID field with a value of type integer.

    $query->setAnimalColonyID(integer);

#### ::setAnimalColorID

Sets animalColorID field with a value of type integer.

    $query->setAnimalColorID(integer);

#### ::setAnimalColorDetails

Sets animalColorDetails field with a value of type string.

    $query->setAnimalColorDetails(string);

#### ::setAnimalConditionID

Sets animalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setAnimalCourtesy

Sets animalCourtesy field with a value of type string.

    $query->setAnimalCourtesy(string);

#### ::setAnimalDeclawed

Sets animalDeclawed field with a value of type string.

    $query->setAnimalDeclawed(string);

#### ::setAnimalDescription

Sets animalDescription field with a value of type string.

    $query->setAnimalDescription(string);

#### ::setAnimalDistinguishingMarks

Sets animalDistinguishingMarks field with a value of type string.

    $query->setAnimalDistinguishingMarks(string);

#### ::setAnimalAllowExport

Sets animalAllowExport field with a value of type string.

    $query->setAnimalAllowExport(string);

#### ::setAnimalEarType

Sets animalEarType field with a value of type string.

    $query->setAnimalEarType(string);

#### ::setAnimalEnergyLevel

Sets animalEnergyLevel field with a value of type string.

    $query->setAnimalEnergyLevel(string);

#### ::setAnimalExerciseNeeds

Sets animalExerciseNeeds field with a value of type string.

    $query->setAnimalExerciseNeeds(string);

#### ::setAnimalEyeColor

Sets animalEyeColor field with a value of type string.

    $query->setAnimalEyeColor(string);

#### ::setAnimalFence

Sets animalFence field with a value of type string.

    $query->setAnimalFence(string);

#### ::setAnimalFosterID

Sets animalFosterID field with a value of type integer.

    $query->setAnimalFosterID(integer);

#### ::setAnimalFound

Sets animalFound field with a value of type string.

    $query->setAnimalFound(string);

#### ::setAnimalFoundDate

Sets animalFoundDate field with a value of type \DateTime.

    $query->setAnimalFoundDate(\DateTime);

#### ::setAnimalFoundPostalcode

Sets animalFoundPostalcode field with a value of type string.

    $query->setAnimalFoundPostalcode(string);

#### ::setAnimalGeneralAge

Sets animalGeneralAge field with a value of type string.

    $query->setAnimalGeneralAge(string);

#### ::setAnimalGeneralSizePotential

Sets animalGeneralSizePotential field with a value of type string.

    $query->setAnimalGeneralSizePotential(string);

#### ::setAnimalGroomingNeeds

Sets animalGroomingNeeds field with a value of type string.

    $query->setAnimalGroomingNeeds(string);

#### ::setAnimalHighlightOrder

Sets animalHighlightOrder field with a value of type int.

    $query->setAnimalHighlightOrder(int);

#### ::setAnimalHousetrained

Sets animalHousetrained field with a value of type string.

    $query->setAnimalHousetrained(string);

#### ::setAnimalIndoorOutdoor

Sets animalIndoorOutdoor field with a value of type string.

    $query->setAnimalIndoorOutdoor(string);

#### ::setAnimalInternalID

Sets animalInternalID field with a value of type string.

    $query->setAnimalInternalID(string);

#### ::setAnimalKillDate

Sets animalKillDate field with a value of type \DateTime.

    $query->setAnimalKillDate(\DateTime);

#### ::setAnimalKillReason

Sets animalKillReason field with a value of type string.

    $query->setAnimalKillReason(string);

#### ::setAnimalLocationID

Sets animalLocationID field with a value of type integer.

    $query->setAnimalLocationID(integer);

#### ::setAnimalLocationPublic

Sets animalLocationPublic field with a value of type string.

    $query->setAnimalLocationPublic(string);

#### ::setAnimalMicrochipNumber

Sets animalMicrochipNumber field with a value of type string.

    $query->setAnimalMicrochipNumber(string);

#### ::setAnimalMicrochipVendor

Sets animalMicrochipVendor field with a value of type integer.

    $query->setAnimalMicrochipVendor(integer);

#### ::setAnimalMixedBreed

Sets animalMixedBreed field with a value of type string.

    $query->setAnimalMixedBreed(string);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalNeedsFoster

Sets animalNeedsFoster field with a value of type string.

    $query->setAnimalNeedsFoster(string);

#### ::setAnimalNewPeople

Sets animalNewPeople field with a value of type string.

    $query->setAnimalNewPeople(string);

#### ::setAnimalNotes

Sets animalNotes field with a value of type string.

    $query->setAnimalNotes(string);

#### ::setAnimalNotHousetrainedReason

Sets animalNotHousetrainedReason field with a value of type string.

    $query->setAnimalNotHousetrainedReason(string);

#### ::setAnimalObedienceTraining

Sets animalObedienceTraining field with a value of type string.

    $query->setAnimalObedienceTraining(string);

#### ::setAnimalOKWithAdults

Sets animalOKWithAdults field with a value of type string.

    $query->setAnimalOKWithAdults(string);

#### ::setAnimalOKWithCats

Sets animalOKWithCats field with a value of type string.

    $query->setAnimalOKWithCats(string);

#### ::setAnimalOKWithDogs

Sets animalOKWithDogs field with a value of type string.

    $query->setAnimalOKWithDogs(string);

#### ::setAnimalOKWithKids

Sets animalOKWithKids field with a value of type string.

    $query->setAnimalOKWithKids(string);

#### ::setAnimalOrigin

Sets animalOrigin field with a value of type string.

    $query->setAnimalOrigin(string);

#### ::setAnimalOthernames

Sets animalOthernames field with a value of type string.

    $query->setAnimalOthernames(string);

#### ::setAnimalOwnerExperience

Sets animalOwnerExperience field with a value of type string.

    $query->setAnimalOwnerExperience(string);

#### ::setAnimalOwnerID

Sets animalOwnerID field with a value of type integer.

    $query->setAnimalOwnerID(integer);

#### ::setAnimalPatternID

Sets animalPatternID field with a value of type integer.

    $query->setAnimalPatternID(integer);

#### ::setAnimalPrimaryBreedID

Sets animalPrimaryBreedID field with a value of type integer.

    $query->setAnimalPrimaryBreedID(integer);

#### ::setAnimalReceivedDate

Sets animalReceivedDate field with a value of type \DateTime.

    $query->setAnimalReceivedDate(\DateTime);

#### ::setAnimalRescueID

Sets animalRescueID field with a value of type string.

    $query->setAnimalRescueID(string);

#### ::setAnimalSecondaryBreedID

Sets animalSecondaryBreedID field with a value of type integer.

    $query->setAnimalSecondaryBreedID(integer);

#### ::setAnimalSex

Sets animalSex field with a value of type string.

    $query->setAnimalSex(string);

#### ::setAnimalShared

Sets animalShared field with a value of type string.

    $query->setAnimalShared(string);

#### ::setAnimalShedding

Sets animalShedding field with a value of type string.

    $query->setAnimalShedding(string);

#### ::setAnimalSizeCurrent

Sets animalSizeCurrent field with a value of type float.

    $query->setAnimalSizeCurrent(float);

#### ::setAnimalSizePotential

Sets animalSizePotential field with a value of type float.

    $query->setAnimalSizePotential(float);

#### ::setAnimalSizeUOM

Sets animalSizeUOM field with a value of type string.

    $query->setAnimalSizeUOM(string);

#### ::setAnimalSpecialneeds

Sets animalSpecialneeds field with a value of type string.

    $query->setAnimalSpecialneeds(string);

#### ::setAnimalSpecialneedsDescription

Sets animalSpecialneedsDescription field with a value of type string.

    $query->setAnimalSpecialneedsDescription(string);

#### ::setAnimalSpeciesID

Sets animalSpeciesID field with a value of type integer.

    $query->setAnimalSpeciesID(integer);

#### ::setAnimalSponsorable

Sets animalSponsorable field with a value of type string.

    $query->setAnimalSponsorable(string);

#### ::setAnimalSponsors

Sets animalSponsors field with a value of type string.

    $query->setAnimalSponsors(string);

#### ::setAnimalSponsorshipDetails

Sets animalSponsorshipDetails field with a value of type string.

    $query->setAnimalSponsorshipDetails(string);

#### ::setAnimalSponsorshipMinimum

Sets animalSponsorshipMinimum field with a value of type float.

    $query->setAnimalSponsorshipMinimum(float);

#### ::setAnimalStatusID

Sets animalStatusID field with a value of type integer.

    $query->setAnimalStatusID(integer);

#### ::setAnimalSummary

Sets animalSummary field with a value of type string.

    $query->setAnimalSummary(string);

#### ::setAnimalTailType

Sets animalTailType field with a value of type string.

    $query->setAnimalTailType(string);

#### ::setAnimalTransferredToID

Sets animalTransferredToID field with a value of type integer.

    $query->setAnimalTransferredToID(integer);

#### ::setAnimalUptodate

Sets animalUptodate field with a value of type string.

    $query->setAnimalUptodate(string);

#### ::setAnimalVocal

Sets animalVocal field with a value of type string.

    $query->setAnimalVocal(string);

#### ::setAnimalYardRequired

Sets animalYardRequired field with a value of type string.

    $query->setAnimalYardRequired(string);

#### ::setAnimalAffectionate

Sets animalAffectionate field with a value of type string.

    $query->setAnimalAffectionate(string);

#### ::setAnimalApartment

Sets animalApartment field with a value of type string.

    $query->setAnimalApartment(string);

#### ::setAnimalCratetrained

Sets animalCratetrained field with a value of type string.

    $query->setAnimalCratetrained(string);

#### ::setAnimalDrools

Sets animalDrools field with a value of type string.

    $query->setAnimalDrools(string);

#### ::setAnimalEagerToPlease

Sets animalEagerToPlease field with a value of type string.

    $query->setAnimalEagerToPlease(string);

#### ::setAnimalEscapes

Sets animalEscapes field with a value of type string.

    $query->setAnimalEscapes(string);

#### ::setAnimalEventempered

Sets animalEventempered field with a value of type string.

    $query->setAnimalEventempered(string);

#### ::setAnimalFetches

Sets animalFetches field with a value of type string.

    $query->setAnimalFetches(string);

#### ::setAnimalGentle

Sets animalGentle field with a value of type string.

    $query->setAnimalGentle(string);

#### ::setAnimalGoodInCar

Sets animalGoodInCar field with a value of type string.

    $query->setAnimalGoodInCar(string);

#### ::setAnimalGoofy

Sets animalGoofy field with a value of type string.

    $query->setAnimalGoofy(string);

#### ::setAnimalHasAllergies

Sets animalHasAllergies field with a value of type string.

    $query->setAnimalHasAllergies(string);

#### ::setAnimalHearingImpaired

Sets animalHearingImpaired field with a value of type string.

    $query->setAnimalHearingImpaired(string);

#### ::setAnimalHypoallergenic

Sets animalHypoallergenic field with a value of type string.

    $query->setAnimalHypoallergenic(string);

#### ::setAnimalIndependent

Sets animalIndependent field with a value of type string.

    $query->setAnimalIndependent(string);

#### ::setAnimalIntelligent

Sets animalIntelligent field with a value of type string.

    $query->setAnimalIntelligent(string);

#### ::setAnimalLap

Sets animalLap field with a value of type string.

    $query->setAnimalLap(string);

#### ::setAnimalLeashtrained

Sets animalLeashtrained field with a value of type string.

    $query->setAnimalLeashtrained(string);

#### ::setAnimalNeedsCompanionAnimal

Sets animalNeedsCompanionAnimal field with a value of type string.

    $query->setAnimalNeedsCompanionAnimal(string);

#### ::setAnimalNoCold

Sets animalNoCold field with a value of type string.

    $query->setAnimalNoCold(string);

#### ::setAnimalNoFemaleDogs

Sets animalNoFemaleDogs field with a value of type string.

    $query->setAnimalNoFemaleDogs(string);

#### ::setAnimalNoHeat

Sets animalNoHeat field with a value of type string.

    $query->setAnimalNoHeat(string);

#### ::setAnimalNoLargeDogs

Sets animalNoLargeDogs field with a value of type string.

    $query->setAnimalNoLargeDogs(string);

#### ::setAnimalNoMaleDogs

Sets animalNoMaleDogs field with a value of type string.

    $query->setAnimalNoMaleDogs(string);

#### ::setAnimalNoSmallDogs

Sets animalNoSmallDogs field with a value of type string.

    $query->setAnimalNoSmallDogs(string);

#### ::setAnimalObedient

Sets animalObedient field with a value of type string.

    $query->setAnimalObedient(string);

#### ::setAnimalOKForSeniors

Sets animalOKForSeniors field with a value of type string.

    $query->setAnimalOKForSeniors(string);

#### ::setAnimalOKWithFarmAnimals

Sets animalOKWithFarmAnimals field with a value of type string.

    $query->setAnimalOKWithFarmAnimals(string);

#### ::setAnimalOlderKidsOnly

Sets animalOlderKidsOnly field with a value of type string.

    $query->setAnimalOlderKidsOnly(string);

#### ::setAnimalOngoingMedical

Sets animalOngoingMedical field with a value of type string.

    $query->setAnimalOngoingMedical(string);

#### ::setAnimalPlayful

Sets animalPlayful field with a value of type string.

    $query->setAnimalPlayful(string);

#### ::setAnimalPlaysToys

Sets animalPlaysToys field with a value of type string.

    $query->setAnimalPlaysToys(string);

#### ::setAnimalPredatory

Sets animalPredatory field with a value of type string.

    $query->setAnimalPredatory(string);

#### ::setAnimalProtective

Sets animalProtective field with a value of type string.

    $query->setAnimalProtective(string);

#### ::setAnimalSightImpaired

Sets animalSightImpaired field with a value of type string.

    $query->setAnimalSightImpaired(string);

#### ::setAnimalSkittish

Sets animalSkittish field with a value of type string.

    $query->setAnimalSkittish(string);

#### ::setAnimalSpecialDiet

Sets animalSpecialDiet field with a value of type string.

    $query->setAnimalSpecialDiet(string);

#### ::setAnimalSwims

Sets animalSwims field with a value of type string.

    $query->setAnimalSwims(string);

#### ::setAnimalTimid

Sets animalTimid field with a value of type string.

    $query->setAnimalTimid(string);

#### ::setAnimalGroups

Sets animalGroups field with a value of type integer.

    $query->setAnimalGroups(integer);

#### ::setAnimalExportAccounts

Sets animalExportAccounts field with a value of type integer.

    $query->setAnimalExportAccounts(integer);



## Animals\Edit

Performs animals.edit query.

    $query = new \RescueGroups\Requests\Objects\Animals\Edit();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setAnimalActivityLevel

Sets animalActivityLevel field with a value of type string.

    $query->setAnimalActivityLevel(string);

#### ::setAnimalAdoptedDate

Sets animalAdoptedDate field with a value of type \DateTime.

    $query->setAnimalAdoptedDate(\DateTime);

#### ::setAnimalAdoptionFee

Sets animalAdoptionFee field with a value of type string.

    $query->setAnimalAdoptionFee(string);

#### ::setAnimalAdoptionLeadID

Sets animalAdoptionLeadID field with a value of type integer.

    $query->setAnimalAdoptionLeadID(integer);

#### ::setAnimalAltered

Sets animalAltered field with a value of type string.

    $query->setAnimalAltered(string);

#### ::setAnimalApplicationID

Sets animalApplicationID field with a value of type integer.

    $query->setAnimalApplicationID(integer);

#### ::setAnimalAvailableDate

Sets animalAvailableDate field with a value of type \DateTime.

    $query->setAnimalAvailableDate(\DateTime);

#### ::setAnimalBirthdate

Sets animalBirthdate field with a value of type \DateTime.

    $query->setAnimalBirthdate(\DateTime);

#### ::setAnimalBirthdateExact

Sets animalBirthdateExact field with a value of type string.

    $query->setAnimalBirthdateExact(string);

#### ::setAnimalCoatLength

Sets animalCoatLength field with a value of type string.

    $query->setAnimalCoatLength(string);

#### ::setAnimalColonyID

Sets animalColonyID field with a value of type integer.

    $query->setAnimalColonyID(integer);

#### ::setAnimalColorID

Sets animalColorID field with a value of type integer.

    $query->setAnimalColorID(integer);

#### ::setAnimalColorDetails

Sets animalColorDetails field with a value of type string.

    $query->setAnimalColorDetails(string);

#### ::setAnimalConditionID

Sets animalConditionID field with a value of type integer.

    $query->setAnimalConditionID(integer);

#### ::setAnimalCourtesy

Sets animalCourtesy field with a value of type string.

    $query->setAnimalCourtesy(string);

#### ::setAnimalDeclawed

Sets animalDeclawed field with a value of type string.

    $query->setAnimalDeclawed(string);

#### ::setAnimalDescription

Sets animalDescription field with a value of type string.

    $query->setAnimalDescription(string);

#### ::setAnimalDistinguishingMarks

Sets animalDistinguishingMarks field with a value of type string.

    $query->setAnimalDistinguishingMarks(string);

#### ::setAnimalAllowExport

Sets animalAllowExport field with a value of type string.

    $query->setAnimalAllowExport(string);

#### ::setAnimalEarType

Sets animalEarType field with a value of type string.

    $query->setAnimalEarType(string);

#### ::setAnimalEnergyLevel

Sets animalEnergyLevel field with a value of type string.

    $query->setAnimalEnergyLevel(string);

#### ::setAnimalExerciseNeeds

Sets animalExerciseNeeds field with a value of type string.

    $query->setAnimalExerciseNeeds(string);

#### ::setAnimalEyeColor

Sets animalEyeColor field with a value of type string.

    $query->setAnimalEyeColor(string);

#### ::setAnimalFence

Sets animalFence field with a value of type string.

    $query->setAnimalFence(string);

#### ::setAnimalFosterID

Sets animalFosterID field with a value of type integer.

    $query->setAnimalFosterID(integer);

#### ::setAnimalFound

Sets animalFound field with a value of type string.

    $query->setAnimalFound(string);

#### ::setAnimalFoundDate

Sets animalFoundDate field with a value of type \DateTime.

    $query->setAnimalFoundDate(\DateTime);

#### ::setAnimalFoundPostalcode

Sets animalFoundPostalcode field with a value of type string.

    $query->setAnimalFoundPostalcode(string);

#### ::setAnimalGeneralAge

Sets animalGeneralAge field with a value of type string.

    $query->setAnimalGeneralAge(string);

#### ::setAnimalGeneralSizePotential

Sets animalGeneralSizePotential field with a value of type string.

    $query->setAnimalGeneralSizePotential(string);

#### ::setAnimalGroomingNeeds

Sets animalGroomingNeeds field with a value of type string.

    $query->setAnimalGroomingNeeds(string);

#### ::setAnimalHighlightOrder

Sets animalHighlightOrder field with a value of type int.

    $query->setAnimalHighlightOrder(int);

#### ::setAnimalHousetrained

Sets animalHousetrained field with a value of type string.

    $query->setAnimalHousetrained(string);

#### ::setAnimalIndoorOutdoor

Sets animalIndoorOutdoor field with a value of type string.

    $query->setAnimalIndoorOutdoor(string);

#### ::setAnimalInternalID

Sets animalInternalID field with a value of type string.

    $query->setAnimalInternalID(string);

#### ::setAnimalKillDate

Sets animalKillDate field with a value of type \DateTime.

    $query->setAnimalKillDate(\DateTime);

#### ::setAnimalKillReason

Sets animalKillReason field with a value of type string.

    $query->setAnimalKillReason(string);

#### ::setAnimalLocationID

Sets animalLocationID field with a value of type integer.

    $query->setAnimalLocationID(integer);

#### ::setAnimalLocationPublic

Sets animalLocationPublic field with a value of type string.

    $query->setAnimalLocationPublic(string);

#### ::setAnimalMicrochipNumber

Sets animalMicrochipNumber field with a value of type string.

    $query->setAnimalMicrochipNumber(string);

#### ::setAnimalMicrochipVendor

Sets animalMicrochipVendor field with a value of type integer.

    $query->setAnimalMicrochipVendor(integer);

#### ::setAnimalMixedBreed

Sets animalMixedBreed field with a value of type string.

    $query->setAnimalMixedBreed(string);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalSpecialneeds

Sets animalSpecialneeds field with a value of type string.

    $query->setAnimalSpecialneeds(string);

#### ::setAnimalSpecialneedsDescription

Sets animalSpecialneedsDescription field with a value of type string.

    $query->setAnimalSpecialneedsDescription(string);

#### ::setAnimalNeedsFoster

Sets animalNeedsFoster field with a value of type string.

    $query->setAnimalNeedsFoster(string);

#### ::setAnimalNewPeople

Sets animalNewPeople field with a value of type string.

    $query->setAnimalNewPeople(string);

#### ::setAnimalNotes

Sets animalNotes field with a value of type string.

    $query->setAnimalNotes(string);

#### ::setAnimalNotHousetrainedReason

Sets animalNotHousetrainedReason field with a value of type string.

    $query->setAnimalNotHousetrainedReason(string);

#### ::setAnimalObedienceTraining

Sets animalObedienceTraining field with a value of type string.

    $query->setAnimalObedienceTraining(string);

#### ::setAnimalOKWithAdults

Sets animalOKWithAdults field with a value of type string.

    $query->setAnimalOKWithAdults(string);

#### ::setAnimalOKWithCats

Sets animalOKWithCats field with a value of type string.

    $query->setAnimalOKWithCats(string);

#### ::setAnimalOKWithDogs

Sets animalOKWithDogs field with a value of type string.

    $query->setAnimalOKWithDogs(string);

#### ::setAnimalOKWithKids

Sets animalOKWithKids field with a value of type string.

    $query->setAnimalOKWithKids(string);

#### ::setAnimalOrigin

Sets animalOrigin field with a value of type string.

    $query->setAnimalOrigin(string);

#### ::setAnimalOthernames

Sets animalOthernames field with a value of type string.

    $query->setAnimalOthernames(string);

#### ::setAnimalOwnerExperience

Sets animalOwnerExperience field with a value of type string.

    $query->setAnimalOwnerExperience(string);

#### ::setAnimalOwnerID

Sets animalOwnerID field with a value of type integer.

    $query->setAnimalOwnerID(integer);

#### ::setAnimalPatternID

Sets animalPatternID field with a value of type integer.

    $query->setAnimalPatternID(integer);

#### ::setAnimalAdoptionPending

Sets animalAdoptionPending field with a value of type string.

    $query->setAnimalAdoptionPending(string);

#### ::setAnimalPrimaryBreedID

Sets animalPrimaryBreedID field with a value of type integer.

    $query->setAnimalPrimaryBreedID(integer);

#### ::setAnimalReceivedDate

Sets animalReceivedDate field with a value of type \DateTime.

    $query->setAnimalReceivedDate(\DateTime);

#### ::setAnimalRescueID

Sets animalRescueID field with a value of type string.

    $query->setAnimalRescueID(string);

#### ::setAnimalSecondaryBreedID

Sets animalSecondaryBreedID field with a value of type integer.

    $query->setAnimalSecondaryBreedID(integer);

#### ::setAnimalSex

Sets animalSex field with a value of type string.

    $query->setAnimalSex(string);

#### ::setAnimalShared

Sets animalShared field with a value of type string.

    $query->setAnimalShared(string);

#### ::setAnimalShedding

Sets animalShedding field with a value of type string.

    $query->setAnimalShedding(string);

#### ::setAnimalSizeCurrent

Sets animalSizeCurrent field with a value of type float.

    $query->setAnimalSizeCurrent(float);

#### ::setAnimalSizePotential

Sets animalSizePotential field with a value of type float.

    $query->setAnimalSizePotential(float);

#### ::setAnimalSizeUOM

Sets animalSizeUOM field with a value of type string.

    $query->setAnimalSizeUOM(string);

#### ::setAnimalSpeciesID

Sets animalSpeciesID field with a value of type integer.

    $query->setAnimalSpeciesID(integer);

#### ::setAnimalSponsorable

Sets animalSponsorable field with a value of type string.

    $query->setAnimalSponsorable(string);

#### ::setAnimalSponsors

Sets animalSponsors field with a value of type string.

    $query->setAnimalSponsors(string);

#### ::setAnimalSponsorshipDetails

Sets animalSponsorshipDetails field with a value of type string.

    $query->setAnimalSponsorshipDetails(string);

#### ::setAnimalSponsorshipMinimum

Sets animalSponsorshipMinimum field with a value of type float.

    $query->setAnimalSponsorshipMinimum(float);

#### ::setAnimalStatusID

Sets animalStatusID field with a value of type integer.

    $query->setAnimalStatusID(integer);

#### ::setAnimalSummary

Sets animalSummary field with a value of type string.

    $query->setAnimalSummary(string);

#### ::setAnimalTailType

Sets animalTailType field with a value of type string.

    $query->setAnimalTailType(string);

#### ::setAnimalTransferredToID

Sets animalTransferredToID field with a value of type integer.

    $query->setAnimalTransferredToID(integer);

#### ::setAnimalUptodate

Sets animalUptodate field with a value of type string.

    $query->setAnimalUptodate(string);

#### ::setAnimalVocal

Sets animalVocal field with a value of type string.

    $query->setAnimalVocal(string);

#### ::setAnimalYardRequired

Sets animalYardRequired field with a value of type string.

    $query->setAnimalYardRequired(string);

#### ::setAnimalAffectionate

Sets animalAffectionate field with a value of type string.

    $query->setAnimalAffectionate(string);

#### ::setAnimalApartment

Sets animalApartment field with a value of type string.

    $query->setAnimalApartment(string);

#### ::setAnimalCratetrained

Sets animalCratetrained field with a value of type string.

    $query->setAnimalCratetrained(string);

#### ::setAnimalDrools

Sets animalDrools field with a value of type string.

    $query->setAnimalDrools(string);

#### ::setAnimalEagerToPlease

Sets animalEagerToPlease field with a value of type string.

    $query->setAnimalEagerToPlease(string);

#### ::setAnimalEscapes

Sets animalEscapes field with a value of type string.

    $query->setAnimalEscapes(string);

#### ::setAnimalEventempered

Sets animalEventempered field with a value of type string.

    $query->setAnimalEventempered(string);

#### ::setAnimalFetches

Sets animalFetches field with a value of type string.

    $query->setAnimalFetches(string);

#### ::setAnimalGentle

Sets animalGentle field with a value of type string.

    $query->setAnimalGentle(string);

#### ::setAnimalGoodInCar

Sets animalGoodInCar field with a value of type string.

    $query->setAnimalGoodInCar(string);

#### ::setAnimalGoofy

Sets animalGoofy field with a value of type string.

    $query->setAnimalGoofy(string);

#### ::setAnimalHasAllergies

Sets animalHasAllergies field with a value of type string.

    $query->setAnimalHasAllergies(string);

#### ::setAnimalHearingImpaired

Sets animalHearingImpaired field with a value of type string.

    $query->setAnimalHearingImpaired(string);

#### ::setAnimalHypoallergenic

Sets animalHypoallergenic field with a value of type string.

    $query->setAnimalHypoallergenic(string);

#### ::setAnimalIndependent

Sets animalIndependent field with a value of type string.

    $query->setAnimalIndependent(string);

#### ::setAnimalIntelligent

Sets animalIntelligent field with a value of type string.

    $query->setAnimalIntelligent(string);

#### ::setAnimalLap

Sets animalLap field with a value of type string.

    $query->setAnimalLap(string);

#### ::setAnimalLeashtrained

Sets animalLeashtrained field with a value of type string.

    $query->setAnimalLeashtrained(string);

#### ::setAnimalNeedsCompanionAnimal

Sets animalNeedsCompanionAnimal field with a value of type string.

    $query->setAnimalNeedsCompanionAnimal(string);

#### ::setAnimalNoCold

Sets animalNoCold field with a value of type string.

    $query->setAnimalNoCold(string);

#### ::setAnimalNoFemaleDogs

Sets animalNoFemaleDogs field with a value of type string.

    $query->setAnimalNoFemaleDogs(string);

#### ::setAnimalNoHeat

Sets animalNoHeat field with a value of type string.

    $query->setAnimalNoHeat(string);

#### ::setAnimalNoLargeDogs

Sets animalNoLargeDogs field with a value of type string.

    $query->setAnimalNoLargeDogs(string);

#### ::setAnimalNoMaleDogs

Sets animalNoMaleDogs field with a value of type string.

    $query->setAnimalNoMaleDogs(string);

#### ::setAnimalNoSmallDogs

Sets animalNoSmallDogs field with a value of type string.

    $query->setAnimalNoSmallDogs(string);

#### ::setAnimalObedient

Sets animalObedient field with a value of type string.

    $query->setAnimalObedient(string);

#### ::setAnimalOKForSeniors

Sets animalOKForSeniors field with a value of type string.

    $query->setAnimalOKForSeniors(string);

#### ::setAnimalOKWithFarmAnimals

Sets animalOKWithFarmAnimals field with a value of type string.

    $query->setAnimalOKWithFarmAnimals(string);

#### ::setAnimalOlderKidsOnly

Sets animalOlderKidsOnly field with a value of type string.

    $query->setAnimalOlderKidsOnly(string);

#### ::setAnimalOngoingMedical

Sets animalOngoingMedical field with a value of type string.

    $query->setAnimalOngoingMedical(string);

#### ::setAnimalPlayful

Sets animalPlayful field with a value of type string.

    $query->setAnimalPlayful(string);

#### ::setAnimalPlaysToys

Sets animalPlaysToys field with a value of type string.

    $query->setAnimalPlaysToys(string);

#### ::setAnimalPredatory

Sets animalPredatory field with a value of type string.

    $query->setAnimalPredatory(string);

#### ::setAnimalProtective

Sets animalProtective field with a value of type string.

    $query->setAnimalProtective(string);

#### ::setAnimalSightImpaired

Sets animalSightImpaired field with a value of type string.

    $query->setAnimalSightImpaired(string);

#### ::setAnimalSkittish

Sets animalSkittish field with a value of type string.

    $query->setAnimalSkittish(string);

#### ::setAnimalSpecialDiet

Sets animalSpecialDiet field with a value of type string.

    $query->setAnimalSpecialDiet(string);

#### ::setAnimalSwims

Sets animalSwims field with a value of type string.

    $query->setAnimalSwims(string);

#### ::setAnimalTimid

Sets animalTimid field with a value of type string.

    $query->setAnimalTimid(string);

#### ::setAnimalGroups

Sets animalGroups field with a value of type integer.

    $query->setAnimalGroups(integer);

#### ::setAnimalExportAccounts

Sets animalExportAccounts field with a value of type integer.

    $query->setAnimalExportAccounts(integer);



## Animals\AddPicture

Performs animals.addPicture query.

    $query = new \RescueGroups\Requests\Objects\Animals\AddPicture();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setPictureBinary

Sets pictureBinary field with a value of type binary.

    $query->setPictureBinary(binary);

#### ::setFileName

Sets fileName field with a value of type string.

    $query->setFileName(string);

#### ::setMediaOrder

Sets mediaOrder field with a value of type int.

    $query->setMediaOrder(int);



## Animals\AddPictureUrl

Performs animals.addPictureUrl query.

    $query = new \RescueGroups\Requests\Objects\Animals\AddPictureUrl();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setPictureUrl

Sets pictureUrl field with a value of type url.

    $query->setPictureUrl(url);

#### ::setMediaOrder

Sets mediaOrder field with a value of type int.

    $query->setMediaOrder(int);



## Animals\AddVideo

Performs animals.addVideo query.

    $query = new \RescueGroups\Requests\Objects\Animals\AddVideo();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setVideoBinary

Sets videoBinary field with a value of type binary.

    $query->setVideoBinary(binary);

#### ::setFileName

Sets fileName field with a value of type string.

    $query->setFileName(string);

#### ::setMediaOrder

Sets mediaOrder field with a value of type int.

    $query->setMediaOrder(int);



## Animals\AddYoutubeUrl

Performs animals.addYoutubeUrl query.

    $query = new \RescueGroups\Requests\Objects\Animals\AddYoutubeUrl();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setYoutubeUrl

Sets youtubeUrl field with a value of type url.

    $query->setYoutubeUrl(url);

#### ::setMediaOrder

Sets mediaOrder field with a value of type int.

    $query->setMediaOrder(int);



## Animals\PictureReorder

Performs animals.pictureReorder query.

    $query = new \RescueGroups\Requests\Objects\Animals\PictureReorder();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setMediaID

Sets mediaID field with a value of type int.

    $query->setMediaID(int);

#### ::setNewOrder

Sets newOrder field with a value of type int.

    $query->setNewOrder(int);



## Animals\VideoReorder

Performs animals.videoReorder query.

    $query = new \RescueGroups\Requests\Objects\Animals\VideoReorder();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setMediaID

Sets mediaID field with a value of type int.

    $query->setMediaID(int);

#### ::setNewOrder

Sets newOrder field with a value of type int.

    $query->setNewOrder(int);



## Animals\VideoUrlReorder

Performs animals.videoUrlReorder query.

    $query = new \RescueGroups\Requests\Objects\Animals\VideoUrlReorder();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);

#### ::setMediaID

Sets mediaID field with a value of type int.

    $query->setMediaID(int);

#### ::setNewOrder

Sets newOrder field with a value of type int.

    $query->setNewOrder(int);



## Animals\Pictures

Performs animals.pictures query.

    $query = new \RescueGroups\Requests\Objects\Animals\Pictures();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);



## Animals\Videos

Performs animals.videos query.

    $query = new \RescueGroups\Requests\Objects\Animals\Videos();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);



## Animals\YoutubeUrls

Performs animals.youtubeUrls query.

    $query = new \RescueGroups\Requests\Objects\Animals\YoutubeUrls();

#### ::setAnimalID

Sets animalID field with a value of type integer.

    $query->setAnimalID(integer);



## Animals\GetRequireableFields

Performs animals.getRequireableFields query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetRequireableFields();



## Animals\GetRequiredFields

Performs animals.getRequiredFields query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetRequiredFields();



## Animals\SetRequiredFields

Performs animals.setRequiredFields query.

    $query = new \RescueGroups\Requests\Objects\Animals\SetRequiredFields();

#### ::setFieldlist

Sets fieldlist field with a value of type string.

    $query->setFieldlist(string);



## Animals\GetDisableableFields

Performs animals.getDisableableFields query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetDisableableFields();



## Animals\GetDisabledFields

Performs animals.getDisabledFields query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetDisabledFields();



## Animals\SetDisabledFields

Performs animals.setDisabledFields query.

    $query = new \RescueGroups\Requests\Objects\Animals\SetDisabledFields();

#### ::setFieldlist

Sets fieldlist field with a value of type string.

    $query->setFieldlist(string);



## Animals\GetSpecies

Performs animals.getSpecies query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetSpecies();



## Animals\GetEnabledSpecies

Performs animals.getEnabledSpecies query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetEnabledSpecies();



## Animals\SetEnabledSpecies

Performs animals.setEnabledSpecies query.

    $query = new \RescueGroups\Requests\Objects\Animals\SetEnabledSpecies();

#### ::setFieldlist

Sets fieldlist field with a value of type string.

    $query->setFieldlist(string);



## Animals\GetPublicableStatuses

Performs animals.getPublicableStatuses query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetPublicableStatuses();



## Animals\GetPublicStatuses

Performs animals.getPublicStatuses query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetPublicStatuses();



## Animals\SetPublicStatuses

Performs animals.setPublicStatuses query.

    $query = new \RescueGroups\Requests\Objects\Animals\SetPublicStatuses();

#### ::setStatuslist

Sets statuslist field with a value of type int.

    $query->setStatuslist(int);



## Animals\GetSettings

Performs animals.getSettings query.

    $query = new \RescueGroups\Requests\Objects\Animals\GetSettings();



## Animals\UpdateSettings

Performs animals.updateSettings query.

    $query = new \RescueGroups\Requests\Objects\Animals\UpdateSettings();

#### ::setEnableAnimalsSpecialListBabies

Sets enableAnimalsSpecialListBabies field with a value of type string.

    $query->setEnableAnimalsSpecialListBabies(string);

#### ::setSetAnimalsSpecialListBabiesYoungest

Sets setAnimalsSpecialListBabiesYoungest field with a value of type int.

    $query->setSetAnimalsSpecialListBabiesYoungest(int);

#### ::setSetAnimalsSpecialListBabiesOldest

Sets setAnimalsSpecialListBabiesOldest field with a value of type int.

    $query->setSetAnimalsSpecialListBabiesOldest(int);

#### ::setEnableAnimalsSpecialListTeens

Sets enableAnimalsSpecialListTeens field with a value of type string.

    $query->setEnableAnimalsSpecialListTeens(string);

#### ::setSetAnimalsSpecialListTeensYoungest

Sets setAnimalsSpecialListTeensYoungest field with a value of type int.

    $query->setSetAnimalsSpecialListTeensYoungest(int);

#### ::setSetAnimalsSpecialListTeensOldest

Sets setAnimalsSpecialListTeensOldest field with a value of type int.

    $query->setSetAnimalsSpecialListTeensOldest(int);

#### ::setEnableAnimalsSpecialListAdults

Sets enableAnimalsSpecialListAdults field with a value of type string.

    $query->setEnableAnimalsSpecialListAdults(string);

#### ::setSetAnimalsSpecialListAdultsYoungest

Sets setAnimalsSpecialListAdultsYoungest field with a value of type int.

    $query->setSetAnimalsSpecialListAdultsYoungest(int);

#### ::setSetAnimalsSpecialListAdultsOldest

Sets setAnimalsSpecialListAdultsOldest field with a value of type int.

    $query->setSetAnimalsSpecialListAdultsOldest(int);

#### ::setEnableAnimalsSpecialListSeniors

Sets enableAnimalsSpecialListSeniors field with a value of type string.

    $query->setEnableAnimalsSpecialListSeniors(string);

#### ::setSetAnimalsSpecialListSeniorsYoungest

Sets setAnimalsSpecialListSeniorsYoungest field with a value of type int.

    $query->setSetAnimalsSpecialListSeniorsYoungest(int);

#### ::setEnableAnimalsSpecialListLongtime

Sets enableAnimalsSpecialListLongtime field with a value of type string.

    $query->setEnableAnimalsSpecialListLongtime(string);

#### ::setSetAnimalsSpecialListLongtimeYoungest

Sets setAnimalsSpecialListLongtimeYoungest field with a value of type int.

    $query->setSetAnimalsSpecialListLongtimeYoungest(int);

#### ::setSetAnimalsSpecialListLongtimeOldest

Sets setAnimalsSpecialListLongtimeOldest field with a value of type int.

    $query->setSetAnimalsSpecialListLongtimeOldest(int);

#### ::setEnableAnimalsSpecialListRecent

Sets enableAnimalsSpecialListRecent field with a value of type string.

    $query->setEnableAnimalsSpecialListRecent(string);

#### ::setSetAnimalsSpecialListRecentDays

Sets setAnimalsSpecialListRecentDays field with a value of type int.

    $query->setSetAnimalsSpecialListRecentDays(int);

#### ::setEnableAnimalsSpecialListSpecialNeeds

Sets enableAnimalsSpecialListSpecialNeeds field with a value of type string.

    $query->setEnableAnimalsSpecialListSpecialNeeds(string);

#### ::setEnableAnimalsSpecialListUrgent

Sets enableAnimalsSpecialListUrgent field with a value of type string.

    $query->setEnableAnimalsSpecialListUrgent(string);

#### ::setEnableAnimalsSpecialListFoster

Sets enableAnimalsSpecialListFoster field with a value of type string.

    $query->setEnableAnimalsSpecialListFoster(string);

#### ::setEnableAnimalsSpecialListCourtesy

Sets enableAnimalsSpecialListCourtesy field with a value of type string.

    $query->setEnableAnimalsSpecialListCourtesy(string);

#### ::setEnableAnimalAutoRescueID

Sets enableAnimalAutoRescueID field with a value of type string.

    $query->setEnableAnimalAutoRescueID(string);

#### ::setSetAnimalAutoRescueIDFormat

Sets setAnimalAutoRescueIDFormat field with a value of type string.

    $query->setSetAnimalAutoRescueIDFormat(string);

#### ::setDisableAnimalAutoRescueIDCourtesyListings

Sets disableAnimalAutoRescueIDCourtesyListings field with a value of type string.

    $query->setDisableAnimalAutoRescueIDCourtesyListings(string);

#### ::setEnablePortalWebsite

Sets enablePortalWebsite field with a value of type string.

    $query->setEnablePortalWebsite(string);

#### ::setShowAnimalMicrochip

Sets showAnimalMicrochip field with a value of type string.

    $query->setShowAnimalMicrochip(string);

#### ::setShowAnimalAltered

Sets showAnimalAltered field with a value of type string.

    $query->setShowAnimalAltered(string);

#### ::setShowAnimalWillBeAltered

Sets showAnimalWillBeAltered field with a value of type string.

    $query->setShowAnimalWillBeAltered(string);

#### ::setShowAnimalRescueID

Sets showAnimalRescueID field with a value of type string.

    $query->setShowAnimalRescueID(string);

#### ::setShowAnimalAdoptionFee

Sets showAnimalAdoptionFee field with a value of type string.

    $query->setShowAnimalAdoptionFee(string);

#### ::setShowAnimalEuthanasiaInfo

Sets showAnimalEuthanasiaInfo field with a value of type string.

    $query->setShowAnimalEuthanasiaInfo(string);

#### ::setDisableAnimalCourtesyHeaderFooter

Sets disableAnimalCourtesyHeaderFooter field with a value of type string.

    $query->setDisableAnimalCourtesyHeaderFooter(string);

#### ::setShowAnimalKennelcardJournalEntries

Sets showAnimalKennelcardJournalEntries field with a value of type string.

    $query->setShowAnimalKennelcardJournalEntries(string);

#### ::setShowAnimalKennelcardJournalCost

Sets showAnimalKennelcardJournalCost field with a value of type string.

    $query->setShowAnimalKennelcardJournalCost(string);

#### ::setDisableAnimalExportAdopted

Sets disableAnimalExportAdopted field with a value of type string.

    $query->setDisableAnimalExportAdopted(string);

#### ::setEnableExportAdoptedToAdoptapet

Sets enableExportAdoptedToAdoptapet field with a value of type string.

    $query->setEnableExportAdoptedToAdoptapet(string);

#### ::setDisableAnimalExportCourtesy

Sets disableAnimalExportCourtesy field with a value of type string.

    $query->setDisableAnimalExportCourtesy(string);

#### ::setDisableAnimalExportAnimalWebPageLink

Sets disableAnimalExportAnimalWebPageLink field with a value of type string.

    $query->setDisableAnimalExportAnimalWebPageLink(string);

#### ::setDisableAnimalExportWebsiteLink

Sets disableAnimalExportWebsiteLink field with a value of type string.

    $query->setDisableAnimalExportWebsiteLink(string);

#### ::setDisableAnimalExportAdoptionFormLink

Sets disableAnimalExportAdoptionFormLink field with a value of type string.

    $query->setDisableAnimalExportAdoptionFormLink(string);

#### ::setEnableAnimalExportDescriptionHeader

Sets enableAnimalExportDescriptionHeader field with a value of type string.

    $query->setEnableAnimalExportDescriptionHeader(string);

#### ::setEnableAnimalExportDescriptionFooter

Sets enableAnimalExportDescriptionFooter field with a value of type string.

    $query->setEnableAnimalExportDescriptionFooter(string);

#### ::setEnableAnimalExportUniqueAnimalID

Sets enableAnimalExportUniqueAnimalID field with a value of type string.

    $query->setEnableAnimalExportUniqueAnimalID(string);

#### ::setEnableAnimalExportContactFieldFirstname

Sets enableAnimalExportContactFieldFirstname field with a value of type string.

    $query->setEnableAnimalExportContactFieldFirstname(string);

#### ::setEnableAnimalExportContactFieldLastname

Sets enableAnimalExportContactFieldLastname field with a value of type string.

    $query->setEnableAnimalExportContactFieldLastname(string);

#### ::setEnableAnimalExportContactFieldEmail

Sets enableAnimalExportContactFieldEmail field with a value of type string.

    $query->setEnableAnimalExportContactFieldEmail(string);

#### ::setEnableAnimalExportContactFieldPhoneHome

Sets enableAnimalExportContactFieldPhoneHome field with a value of type string.

    $query->setEnableAnimalExportContactFieldPhoneHome(string);

#### ::setEnableAnimalExportContactFieldPhoneCell

Sets enableAnimalExportContactFieldPhoneCell field with a value of type string.

    $query->setEnableAnimalExportContactFieldPhoneCell(string);

#### ::setSetAnimalExportYouTubeAccount

Sets setAnimalExportYouTubeAccount field with a value of type string.

    $query->setSetAnimalExportYouTubeAccount(string);

#### ::setSetAnimalExportYouTubeAuthorizationCode

Sets setAnimalExportYouTubeAuthorizationCode field with a value of type string.

    $query->setSetAnimalExportYouTubeAuthorizationCode(string);

#### ::setSetAnimalExportDefaultCategory1

Sets setAnimalExportDefaultCategory1 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory1(string);

#### ::setSetAnimalExportDefaultCategory4

Sets setAnimalExportDefaultCategory4 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory4(string);

#### ::setSetAnimalExportDefaultCategory3

Sets setAnimalExportDefaultCategory3 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory3(string);

#### ::setSetAnimalExportDefaultCategory2

Sets setAnimalExportDefaultCategory2 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory2(string);

#### ::setSetAnimalExportDefaultCategory5

Sets setAnimalExportDefaultCategory5 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory5(string);

#### ::setSetAnimalExportDefaultCategory6

Sets setAnimalExportDefaultCategory6 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory6(string);

#### ::setSetAnimalExportDefaultCategory8

Sets setAnimalExportDefaultCategory8 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory8(string);

#### ::setSetAnimalExportDefaultCategory7

Sets setAnimalExportDefaultCategory7 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory7(string);

#### ::setSetAnimalExportDefaultCategory13

Sets setAnimalExportDefaultCategory13 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory13(string);

#### ::setSetAnimalExportDefaultCategory9

Sets setAnimalExportDefaultCategory9 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory9(string);

#### ::setSetAnimalExportDefaultCategory11

Sets setAnimalExportDefaultCategory11 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory11(string);

#### ::setSetAnimalExportDefaultCategory10

Sets setAnimalExportDefaultCategory10 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory10(string);

#### ::setSetAnimalExportDefaultCategory12

Sets setAnimalExportDefaultCategory12 field with a value of type string.

    $query->setSetAnimalExportDefaultCategory12(string);

#### ::setDisableAnimalDescriptionVideo

Sets disableAnimalDescriptionVideo field with a value of type string.

    $query->setDisableAnimalDescriptionVideo(string);

#### ::setEnableAnimalDescriptionVideoLink

Sets enableAnimalDescriptionVideoLink field with a value of type string.

    $query->setEnableAnimalDescriptionVideoLink(string);

#### ::setEnableFreePetChipRegistry

Sets enableFreePetChipRegistry field with a value of type string.

    $query->setEnableFreePetChipRegistry(string);

#### ::setSetFreePetChipRegistryUserName

Sets setFreePetChipRegistryUserName field with a value of type string.

    $query->setSetFreePetChipRegistryUserName(string);

#### ::setEnablePetLinkRegistry

Sets enablePetLinkRegistry field with a value of type string.

    $query->setEnablePetLinkRegistry(string);

#### ::setSetPetLinkUserName

Sets setPetLinkUserName field with a value of type string.

    $query->setSetPetLinkUserName(string);

#### ::setSetPetLinkPassword

Sets setPetLinkPassword field with a value of type string.

    $query->setSetPetLinkPassword(string);

#### ::setDisableMicrochipUserAlert

Sets disableMicrochipUserAlert field with a value of type string.

    $query->setDisableMicrochipUserAlert(string);

#### ::setSetMicrochipAlertEmails

Sets setMicrochipAlertEmails field with a value of type string.

    $query->setSetMicrochipAlertEmails(string);





