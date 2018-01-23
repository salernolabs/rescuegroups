<?php
/**
 * Animals edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\Edit();

        $testObject = new \RescueGroups\Objects\Animal();
        $testObject->id = 'testValue ID';
        $testObject->activityLevel = 'testValue Activity level';
        $testObject->adoptedDate = 'testValue Adopted Date';
        $testObject->adoptionFee = 'testValue Adoption fee';
        $testObject->adoptionLeadId = 'testValue Adoption lead';
        $testObject->altered = 'testValue Altered';
        $testObject->applicationId = 'testValue Application';
        $testObject->availableDate = 'testValue Available Date';
        $testObject->birthdate = 'testValue Birthdate';
        $testObject->birthdateExact = 'testValue Exact Birthdate';
        $testObject->coatLength = 'testValue Coat Length';
        $testObject->colonyId = 'testValue Colony';
        $testObject->colorId = 'testValue Color (General)';
        $testObject->colorDetails = 'testValue Color details';
        $testObject->conditionId = 'testValue Condition';
        $testObject->courtesy = 'testValue Courtesy';
        $testObject->declawed = 'testValue Declawed';
        $testObject->description = 'testValue Description';
        $testObject->distinguishingMarks = 'testValue Distinguishing marks';
        $testObject->allowExport = 'testValue Allow export';
        $testObject->earType = 'testValue Ear type';
        $testObject->energyLevel = 'testValue Energy level';
        $testObject->exerciseNeeds = 'testValue Exercise needs';
        $testObject->eyeColor = 'testValue Eye color';
        $testObject->fence = 'testValue Requires a home with fence';
        $testObject->fosterId = 'testValue Foster';
        $testObject->found = 'testValue Found';
        $testObject->foundDate = 'testValue Found date';
        $testObject->foundPostalcode = 'testValue Found zip/postal code';
        $testObject->generalAge = 'testValue General Age';
        $testObject->generalSizePotential = 'testValue Size potential (general)';
        $testObject->groomingNeeds = 'testValue Grooming needs';
        $testObject->highlightOrder = 'testValue Highlight';
        $testObject->housetrained = 'testValue Housetrained';
        $testObject->indoorOutdoor = 'testValue Indoor/Outdoor';
        $testObject->internalId = 'testValue Internal ID';
        $testObject->killDate = 'testValue Euthanasia date';
        $testObject->killReason = 'testValue Euthanasia reason';
        $testObject->locationId = 'testValue Location';
        $testObject->locationPublic = 'testValue Location public';
        $testObject->microchipNumber = 'testValue Microchip number';
        $testObject->microchipVendor = 'testValue Microchip vendor';
        $testObject->mixedBreed = 'testValue Mixed breed';
        $testObject->name = 'testValue Name';
        $testObject->specialneeds = 'testValue Has special needs';
        $testObject->specialneedsDescription = 'testValue Special needs description';
        $testObject->needsFoster = 'testValue Needs a Foster';
        $testObject->newPeople = 'testValue Reaction to new people';
        $testObject->notes = 'testValue Private notes';
        $testObject->notHousetrainedReason = 'testValue Reason not housetrained';
        $testObject->obedienceTraining = 'testValue Obedience training';
        $testObject->okWithAdults = 'testValue Good with adults';
        $testObject->okWithCats = 'testValue OK with cats';
        $testObject->okWithDogs = 'testValue OK with dogs';
        $testObject->okWithKids = 'testValue OK with kids';
        $testObject->origin = 'testValue Origin';
        $testObject->othernames = 'testValue Other names';
        $testObject->ownerExperience = 'testValue Owner experience needed';
        $testObject->ownerId = 'testValue Owner';
        $testObject->patternId = 'testValue Pattern';
        $testObject->adoptionPending = 'testValue Adoption pending';
        $testObject->primaryBreedId = 'testValue Primary breed';
        $testObject->receivedDate = 'testValue Received date';
        $testObject->rescueId = 'testValue Rescue ID';
        $testObject->secondaryBreedId = 'testValue Secondary Breed';
        $testObject->sex = 'testValue Sex';
        $testObject->shared = 'testValue Shared';
        $testObject->shedding = 'testValue Shedding amount';
        $testObject->sizeCurrent = 'testValue Current size';
        $testObject->sizePotential = 'testValue Size potential';
        $testObject->sizeUOM = 'testValue Size unit of measure';
        $testObject->speciesId = 'testValue Species';
        $testObject->sponsorable = 'testValue Allow sponsorship';
        $testObject->sponsors = 'testValue Sponsors';
        $testObject->sponsorshipDetails = 'testValue Sponsorship details';
        $testObject->sponsorshipMinimum = 'testValue Sponsorship minimum';
        $testObject->statusId = 'testValue Status';
        $testObject->summary = 'testValue Summary';
        $testObject->tailType = 'testValue Tail type';
        $testObject->transferredToId = 'testValue Transferred to';
        $testObject->uptodate = 'testValue Up-to-date';
        $testObject->vocal = 'testValue Likes to vocalize';
        $testObject->yardRequired = 'testValue Requires a Yard';
        $testObject->affectionate = 'testValue Affectionate';
        $testObject->apartment = 'testValue Apartment appropriate';
        $testObject->cratetrained = 'testValue Crate trained';
        $testObject->drools = 'testValue Drools excessively';
        $testObject->eagerToPlease = 'testValue Eager to please';
        $testObject->escapes = 'testValue Tries to escape';
        $testObject->eventempered = 'testValue Even-tempered';
        $testObject->fetches = 'testValue Likes to fetch';
        $testObject->gentle = 'testValue Gentle';
        $testObject->goodInCar = 'testValue Does well in a car';
        $testObject->goofy = 'testValue Goofy';
        $testObject->hasAllergies = 'testValue Has allergies';
        $testObject->hearingImpaired = 'testValue Hearing impaired';
        $testObject->hypoallergenic = 'testValue Hypoallergenic';
        $testObject->independent = 'testValue Independent / aloof';
        $testObject->intelligent = 'testValue Intelligent';
        $testObject->lap = 'testValue Lap pet';
        $testObject->leashtrained = 'testValue Leash trained';
        $testObject->needsCompanion = 'testValue Needs companion animal';
        $testObject->noCold = 'testValue Cold sensitive';
        $testObject->noFemaleDogs = 'testValue Not good with female dogs';
        $testObject->noHeat = 'testValue Heat sensitive';
        $testObject->noLargeDogs = 'testValue Not good with large dogs';
        $testObject->noMaleDogs = 'testValue Not good with male dogs';
        $testObject->noSmallDogs = 'testValue Not good with small dogs';
        $testObject->obedient = 'testValue Obedient';
        $testObject->okForSeniors = 'testValue Good for seniors / elderly';
        $testObject->okWithFarms = 'testValue Good with farm animals';
        $testObject->olderKidsOnly = 'testValue Older/ considerate kids only';
        $testObject->ongoingMedical = 'testValue Needs ongoing medical care';
        $testObject->playful = 'testValue Playful';
        $testObject->playsToys = 'testValue Likes toys';
        $testObject->predatory = 'testValue Predatory';
        $testObject->protective = 'testValue Protective / territorial';
        $testObject->sightImpaired = 'testValue Sight impaired';
        $testObject->skittish = 'testValue Skittish';
        $testObject->specialDiet = 'testValue Special diet required';
        $testObject->swims = 'testValue Likes to swim';
        $testObject->timid = 'testValue Timid / shy';
        $testObject->groups = 'testValue Groups';
        $testObject->exportAccounts = 'testValue Export accounts';

        $query->updateAnimal($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['animalID']);
        $this->assertEquals('testValue Activity level', $data['values'][0]['animalActivityLevel']);
        $this->assertEquals('testValue Adopted Date', $data['values'][0]['animalAdoptedDate']);
        $this->assertEquals('testValue Adoption fee', $data['values'][0]['animalAdoptionFee']);
        $this->assertEquals('testValue Adoption lead', $data['values'][0]['animalAdoptionLeadID']);
        $this->assertEquals('testValue Altered', $data['values'][0]['animalAltered']);
        $this->assertEquals('testValue Application', $data['values'][0]['animalApplicationID']);
        $this->assertEquals('testValue Available Date', $data['values'][0]['animalAvailableDate']);
        $this->assertEquals('testValue Birthdate', $data['values'][0]['animalBirthdate']);
        $this->assertEquals('testValue Exact Birthdate', $data['values'][0]['animalBirthdateExact']);
        $this->assertEquals('testValue Coat Length', $data['values'][0]['animalCoatLength']);
        $this->assertEquals('testValue Colony', $data['values'][0]['animalColonyID']);
        $this->assertEquals('testValue Color (General)', $data['values'][0]['animalColorID']);
        $this->assertEquals('testValue Color details', $data['values'][0]['animalColorDetails']);
        $this->assertEquals('testValue Condition', $data['values'][0]['animalConditionID']);
        $this->assertEquals('testValue Courtesy', $data['values'][0]['animalCourtesy']);
        $this->assertEquals('testValue Declawed', $data['values'][0]['animalDeclawed']);
        $this->assertEquals('testValue Description', $data['values'][0]['animalDescription']);
        $this->assertEquals('testValue Distinguishing marks', $data['values'][0]['animalDistinguishingMarks']);
        $this->assertEquals('testValue Allow export', $data['values'][0]['animalAllowExport']);
        $this->assertEquals('testValue Ear type', $data['values'][0]['animalEarType']);
        $this->assertEquals('testValue Energy level', $data['values'][0]['animalEnergyLevel']);
        $this->assertEquals('testValue Exercise needs', $data['values'][0]['animalExerciseNeeds']);
        $this->assertEquals('testValue Eye color', $data['values'][0]['animalEyeColor']);
        $this->assertEquals('testValue Requires a home with fence', $data['values'][0]['animalFence']);
        $this->assertEquals('testValue Foster', $data['values'][0]['animalFosterID']);
        $this->assertEquals('testValue Found', $data['values'][0]['animalFound']);
        $this->assertEquals('testValue Found date', $data['values'][0]['animalFoundDate']);
        $this->assertEquals('testValue Found zip/postal code', $data['values'][0]['animalFoundPostalcode']);
        $this->assertEquals('testValue General Age', $data['values'][0]['animalGeneralAge']);
        $this->assertEquals('testValue Size potential (general)', $data['values'][0]['animalGeneralSizePotential']);
        $this->assertEquals('testValue Grooming needs', $data['values'][0]['animalGroomingNeeds']);
        $this->assertEquals('testValue Highlight', $data['values'][0]['animalHighlightOrder']);
        $this->assertEquals('testValue Housetrained', $data['values'][0]['animalHousetrained']);
        $this->assertEquals('testValue Indoor/Outdoor', $data['values'][0]['animalIndoorOutdoor']);
        $this->assertEquals('testValue Internal ID', $data['values'][0]['animalInternalID']);
        $this->assertEquals('testValue Euthanasia date', $data['values'][0]['animalKillDate']);
        $this->assertEquals('testValue Euthanasia reason', $data['values'][0]['animalKillReason']);
        $this->assertEquals('testValue Location', $data['values'][0]['animalLocationID']);
        $this->assertEquals('testValue Location public', $data['values'][0]['animalLocationPublic']);
        $this->assertEquals('testValue Microchip number', $data['values'][0]['animalMicrochipNumber']);
        $this->assertEquals('testValue Microchip vendor', $data['values'][0]['animalMicrochipVendor']);
        $this->assertEquals('testValue Mixed breed', $data['values'][0]['animalMixedBreed']);
        $this->assertEquals('testValue Name', $data['values'][0]['animalName']);
        $this->assertEquals('testValue Has special needs', $data['values'][0]['animalSpecialneeds']);
        $this->assertEquals('testValue Special needs description', $data['values'][0]['animalSpecialneedsDescription']);
        $this->assertEquals('testValue Needs a Foster', $data['values'][0]['animalNeedsFoster']);
        $this->assertEquals('testValue Reaction to new people', $data['values'][0]['animalNewPeople']);
        $this->assertEquals('testValue Private notes', $data['values'][0]['animalNotes']);
        $this->assertEquals('testValue Reason not housetrained', $data['values'][0]['animalNotHousetrainedReason']);
        $this->assertEquals('testValue Obedience training', $data['values'][0]['animalObedienceTraining']);
        $this->assertEquals('testValue Good with adults', $data['values'][0]['animalOKWithAdults']);
        $this->assertEquals('testValue OK with cats', $data['values'][0]['animalOKWithCats']);
        $this->assertEquals('testValue OK with dogs', $data['values'][0]['animalOKWithDogs']);
        $this->assertEquals('testValue OK with kids', $data['values'][0]['animalOKWithKids']);
        $this->assertEquals('testValue Origin', $data['values'][0]['animalOrigin']);
        $this->assertEquals('testValue Other names', $data['values'][0]['animalOthernames']);
        $this->assertEquals('testValue Owner experience needed', $data['values'][0]['animalOwnerExperience']);
        $this->assertEquals('testValue Owner', $data['values'][0]['animalOwnerID']);
        $this->assertEquals('testValue Pattern', $data['values'][0]['animalPatternID']);
        $this->assertEquals('testValue Adoption pending', $data['values'][0]['animalAdoptionPending']);
        $this->assertEquals('testValue Primary breed', $data['values'][0]['animalPrimaryBreedID']);
        $this->assertEquals('testValue Received date', $data['values'][0]['animalReceivedDate']);
        $this->assertEquals('testValue Rescue ID', $data['values'][0]['animalRescueID']);
        $this->assertEquals('testValue Secondary Breed', $data['values'][0]['animalSecondaryBreedID']);
        $this->assertEquals('testValue Sex', $data['values'][0]['animalSex']);
        $this->assertEquals('testValue Shared', $data['values'][0]['animalShared']);
        $this->assertEquals('testValue Shedding amount', $data['values'][0]['animalShedding']);
        $this->assertEquals('testValue Current size', $data['values'][0]['animalSizeCurrent']);
        $this->assertEquals('testValue Size potential', $data['values'][0]['animalSizePotential']);
        $this->assertEquals('testValue Size unit of measure', $data['values'][0]['animalSizeUOM']);
        $this->assertEquals('testValue Species', $data['values'][0]['animalSpeciesID']);
        $this->assertEquals('testValue Allow sponsorship', $data['values'][0]['animalSponsorable']);
        $this->assertEquals('testValue Sponsors', $data['values'][0]['animalSponsors']);
        $this->assertEquals('testValue Sponsorship details', $data['values'][0]['animalSponsorshipDetails']);
        $this->assertEquals('testValue Sponsorship minimum', $data['values'][0]['animalSponsorshipMinimum']);
        $this->assertEquals('testValue Status', $data['values'][0]['animalStatusID']);
        $this->assertEquals('testValue Summary', $data['values'][0]['animalSummary']);
        $this->assertEquals('testValue Tail type', $data['values'][0]['animalTailType']);
        $this->assertEquals('testValue Transferred to', $data['values'][0]['animalTransferredToID']);
        $this->assertEquals('testValue Up-to-date', $data['values'][0]['animalUptodate']);
        $this->assertEquals('testValue Likes to vocalize', $data['values'][0]['animalVocal']);
        $this->assertEquals('testValue Requires a Yard', $data['values'][0]['animalYardRequired']);
        $this->assertEquals('testValue Affectionate', $data['values'][0]['animalAffectionate']);
        $this->assertEquals('testValue Apartment appropriate', $data['values'][0]['animalApartment']);
        $this->assertEquals('testValue Crate trained', $data['values'][0]['animalCratetrained']);
        $this->assertEquals('testValue Drools excessively', $data['values'][0]['animalDrools']);
        $this->assertEquals('testValue Eager to please', $data['values'][0]['animalEagerToPlease']);
        $this->assertEquals('testValue Tries to escape', $data['values'][0]['animalEscapes']);
        $this->assertEquals('testValue Even-tempered', $data['values'][0]['animalEventempered']);
        $this->assertEquals('testValue Likes to fetch', $data['values'][0]['animalFetches']);
        $this->assertEquals('testValue Gentle', $data['values'][0]['animalGentle']);
        $this->assertEquals('testValue Does well in a car', $data['values'][0]['animalGoodInCar']);
        $this->assertEquals('testValue Goofy', $data['values'][0]['animalGoofy']);
        $this->assertEquals('testValue Has allergies', $data['values'][0]['animalHasAllergies']);
        $this->assertEquals('testValue Hearing impaired', $data['values'][0]['animalHearingImpaired']);
        $this->assertEquals('testValue Hypoallergenic', $data['values'][0]['animalHypoallergenic']);
        $this->assertEquals('testValue Independent / aloof', $data['values'][0]['animalIndependent']);
        $this->assertEquals('testValue Intelligent', $data['values'][0]['animalIntelligent']);
        $this->assertEquals('testValue Lap pet', $data['values'][0]['animalLap']);
        $this->assertEquals('testValue Leash trained', $data['values'][0]['animalLeashtrained']);
        $this->assertEquals('testValue Needs companion animal', $data['values'][0]['animalNeedsCompanionAnimal']);
        $this->assertEquals('testValue Cold sensitive', $data['values'][0]['animalNoCold']);
        $this->assertEquals('testValue Not good with female dogs', $data['values'][0]['animalNoFemaleDogs']);
        $this->assertEquals('testValue Heat sensitive', $data['values'][0]['animalNoHeat']);
        $this->assertEquals('testValue Not good with large dogs', $data['values'][0]['animalNoLargeDogs']);
        $this->assertEquals('testValue Not good with male dogs', $data['values'][0]['animalNoMaleDogs']);
        $this->assertEquals('testValue Not good with small dogs', $data['values'][0]['animalNoSmallDogs']);
        $this->assertEquals('testValue Obedient', $data['values'][0]['animalObedient']);
        $this->assertEquals('testValue Good for seniors / elderly', $data['values'][0]['animalOKForSeniors']);
        $this->assertEquals('testValue Good with farm animals', $data['values'][0]['animalOKWithFarmAnimals']);
        $this->assertEquals('testValue Older/ considerate kids only', $data['values'][0]['animalOlderKidsOnly']);
        $this->assertEquals('testValue Needs ongoing medical care', $data['values'][0]['animalOngoingMedical']);
        $this->assertEquals('testValue Playful', $data['values'][0]['animalPlayful']);
        $this->assertEquals('testValue Likes toys', $data['values'][0]['animalPlaysToys']);
        $this->assertEquals('testValue Predatory', $data['values'][0]['animalPredatory']);
        $this->assertEquals('testValue Protective / territorial', $data['values'][0]['animalProtective']);
        $this->assertEquals('testValue Sight impaired', $data['values'][0]['animalSightImpaired']);
        $this->assertEquals('testValue Skittish', $data['values'][0]['animalSkittish']);
        $this->assertEquals('testValue Special diet required', $data['values'][0]['animalSpecialDiet']);
        $this->assertEquals('testValue Likes to swim', $data['values'][0]['animalSwims']);
        $this->assertEquals('testValue Timid / shy', $data['values'][0]['animalTimid']);
        $this->assertEquals('testValue Groups', $data['values'][0]['animalGroups']);
        $this->assertEquals('testValue Export accounts', $data['values'][0]['animalExportAccounts']);
    }
}