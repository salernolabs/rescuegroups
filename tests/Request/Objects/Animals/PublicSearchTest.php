<?php
/**
 * Animals publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('animalID')
            ->addFilter('animalID', 'equals', 'ID')
            ->addField('animalOrgID')
            ->addFilter('animalOrgID', 'equals', 'Org ID')
            ->addField('animalActivityLevel')
            ->addFilter('animalActivityLevel', 'equals', 'Activity level')
            ->addField('animalAdoptedDate')
            ->addFilter('animalAdoptedDate', 'equals', 'Adopted Date')
            ->addField('animalAdoptionFee')
            ->addFilter('animalAdoptionFee', 'equals', 'Adoption fee')
            ->addField('animalAgeString')
            ->addFilter('animalAgeString', 'equals', 'Age (years/months)')
            ->addField('animalAltered')
            ->addFilter('animalAltered', 'equals', 'Altered')
            ->addField('animalAvailableDate')
            ->addFilter('animalAvailableDate', 'equals', 'Available Date')
            ->addField('animalBirthdate')
            ->addFilter('animalBirthdate', 'equals', 'Birthdate')
            ->addField('animalBirthdateExact')
            ->addFilter('animalBirthdateExact', 'equals', 'Exact Birthdate')
            ->addField('animalBreed')
            ->addFilter('animalBreed', 'equals', 'Breed')
            ->addField('animalCoatLength')
            ->addFilter('animalCoatLength', 'equals', 'Coat Length')
            ->addField('animalColor')
            ->addFilter('animalColor', 'equals', 'Color')
            ->addField('animalColorID')
            ->addFilter('animalColorID', 'equals', 'Color (General)')
            ->addField('animalColorDetails')
            ->addFilter('animalColorDetails', 'equals', 'Color details')
            ->addField('animalCourtesy')
            ->addFilter('animalCourtesy', 'equals', 'Courtesy')
            ->addField('animalDeclawed')
            ->addFilter('animalDeclawed', 'equals', 'Declawed')
            ->addField('animalDescription')
            ->addFilter('animalDescription', 'equals', 'Description')
            ->addField('animalDescriptionPlain')
            ->addFilter('animalDescriptionPlain', 'equals', 'Description (no html)')
            ->addField('animalDistinguishingMarks')
            ->addFilter('animalDistinguishingMarks', 'equals', 'Distinguishing marks')
            ->addField('animalEarType')
            ->addFilter('animalEarType', 'equals', 'Ear type')
            ->addField('animalEnergyLevel')
            ->addFilter('animalEnergyLevel', 'equals', 'Energy level')
            ->addField('animalExerciseNeeds')
            ->addFilter('animalExerciseNeeds', 'equals', 'Exercise needs')
            ->addField('animalEyeColor')
            ->addFilter('animalEyeColor', 'equals', 'Eye color')
            ->addField('animalFence')
            ->addFilter('animalFence', 'equals', 'Requires a home with fence')
            ->addField('animalFound')
            ->addFilter('animalFound', 'equals', 'Found')
            ->addField('animalFoundDate')
            ->addFilter('animalFoundDate', 'equals', 'Found date')
            ->addField('animalFoundPostalcode')
            ->addFilter('animalFoundPostalcode', 'equals', 'Found zip/postal code')
            ->addField('animalGeneralAge')
            ->addFilter('animalGeneralAge', 'equals', 'General Age')
            ->addField('animalGeneralSizePotential')
            ->addFilter('animalGeneralSizePotential', 'equals', 'Size potential (general)')
            ->addField('animalGroomingNeeds')
            ->addFilter('animalGroomingNeeds', 'equals', 'Grooming needs')
            ->addField('animalHousetrained')
            ->addFilter('animalHousetrained', 'equals', 'Housetrained')
            ->addField('animalIndoorOutdoor')
            ->addFilter('animalIndoorOutdoor', 'equals', 'Indoor/Outdoor')
            ->addField('animalKillDate')
            ->addFilter('animalKillDate', 'equals', 'Euthanasia date')
            ->addField('animalKillReason')
            ->addFilter('animalKillReason', 'equals', 'Euthanasia reason')
            ->addField('animalLocation')
            ->addFilter('animalLocation', 'equals', 'Location')
            ->addField('animalLocationCoordinates')
            ->addFilter('animalLocationCoordinates', 'equals', 'Location coordinates')
            ->addField('animalLocationDistance')
            ->addFilter('animalLocationDistance', 'equals', 'Distance')
            ->addField('animalLocationCitystate')
            ->addFilter('animalLocationCitystate', 'equals', 'Location city, state')
            ->addField('animalLocationState')
            ->addFilter('animalLocationState', 'equals', 'Location state')
            ->addField('animalMicrochipped')
            ->addFilter('animalMicrochipped', 'equals', 'Microchipped')
            ->addField('animalMixedBreed')
            ->addFilter('animalMixedBreed', 'equals', 'Mixed breed')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Name')
            ->addField('pecialneeds')
            ->addFilter('pecialneeds', 'equals', 'Has special needs')
            ->addField('pecialneedsDescription')
            ->addFilter('pecialneedsDescription', 'equals', 'Special needs description')
            ->addField('animalNeedsFoster')
            ->addFilter('animalNeedsFoster', 'equals', 'Needs a Foster')
            ->addField('animalNewPeople')
            ->addFilter('animalNewPeople', 'equals', 'Reaction to new people')
            ->addField('animalNotHousetrainedReason')
            ->addFilter('animalNotHousetrainedReason', 'equals', 'Reason not housetrained')
            ->addField('animalObedienceTraining')
            ->addFilter('animalObedienceTraining', 'equals', 'Obedience training')
            ->addField('animalOKWithAdults')
            ->addFilter('animalOKWithAdults', 'equals', 'Good with adults')
            ->addField('animalOKWithCats')
            ->addFilter('animalOKWithCats', 'equals', 'OK with cats')
            ->addField('animalOKWithDogs')
            ->addFilter('animalOKWithDogs', 'equals', 'OK with dogs')
            ->addField('animalOKWithKids')
            ->addFilter('animalOKWithKids', 'equals', 'OK with kids')
            ->addField('animalOwnerExperience')
            ->addFilter('animalOwnerExperience', 'equals', 'Owner experience needed')
            ->addField('animalPattern')
            ->addFilter('animalPattern', 'equals', 'Pattern')
            ->addField('animalPatternID')
            ->addFilter('animalPatternID', 'equals', 'Pattern')
            ->addField('animalAdoptionPending')
            ->addFilter('animalAdoptionPending', 'equals', 'Adoption pending')
            ->addField('animalPrimaryBreed')
            ->addFilter('animalPrimaryBreed', 'equals', 'Primary breed')
            ->addField('animalPrimaryBreedID')
            ->addFilter('animalPrimaryBreedID', 'equals', 'Primary breed')
            ->addField('animalRescueID')
            ->addFilter('animalRescueID', 'equals', 'Rescue ID')
            ->addField('earchString')
            ->addFilter('earchString', 'equals', 'Search')
            ->addField('econdaryBreed')
            ->addFilter('econdaryBreed', 'equals', 'Secondary Breed')
            ->addField('econdaryBreedID')
            ->addFilter('econdaryBreedID', 'equals', 'Secondary Breed')
            ->addField('ex')
            ->addFilter('ex', 'equals', 'Sex')
            ->addField('hedding')
            ->addFilter('hedding', 'equals', 'Shedding amount')
            ->addField('izeCurrent')
            ->addFilter('izeCurrent', 'equals', 'Current size')
            ->addField('izePotential')
            ->addFilter('izePotential', 'equals', 'Size potential')
            ->addField('izeUOM')
            ->addFilter('izeUOM', 'equals', 'Size unit of measure')
            ->addField('pecies')
            ->addFilter('pecies', 'equals', 'Species')
            ->addField('peciesID')
            ->addFilter('peciesID', 'equals', 'Species')
            ->addField('ponsorable')
            ->addFilter('ponsorable', 'equals', 'Allow sponsorship')
            ->addField('ponsors')
            ->addFilter('ponsors', 'equals', 'Sponsors')
            ->addField('ponsorshipDetails')
            ->addFilter('ponsorshipDetails', 'equals', 'Sponsorship details')
            ->addField('ponsorshipMinimum')
            ->addFilter('ponsorshipMinimum', 'equals', 'Sponsorship minimum')
            ->addField('tatus')
            ->addFilter('tatus', 'equals', 'Status')
            ->addField('tatusID')
            ->addFilter('tatusID', 'equals', 'Status')
            ->addField('ummary')
            ->addFilter('ummary', 'equals', 'Summary')
            ->addField('animalTailType')
            ->addFilter('animalTailType', 'equals', 'Tail type')
            ->addField('animalThumbnailUrl')
            ->addFilter('animalThumbnailUrl', 'equals', 'Thumbnail URL')
            ->addField('animalUptodate')
            ->addFilter('animalUptodate', 'equals', 'Up-to-date')
            ->addField('animalUpdatedDate')
            ->addFilter('animalUpdatedDate', 'equals', 'Last updated')
            ->addField('animalUrl')
            ->addFilter('animalUrl', 'equals', 'Web page')
            ->addField('animalVocal')
            ->addFilter('animalVocal', 'equals', 'Likes to vocalize')
            ->addField('animalYardRequired')
            ->addFilter('animalYardRequired', 'equals', 'Requires a Yard')
            ->addField('animalAffectionate')
            ->addFilter('animalAffectionate', 'equals', 'Affectionate')
            ->addField('animalApartment')
            ->addFilter('animalApartment', 'equals', 'Apartment appropriate')
            ->addField('animalCratetrained')
            ->addFilter('animalCratetrained', 'equals', 'Crate trained')
            ->addField('animalDrools')
            ->addFilter('animalDrools', 'equals', 'Drools excessively')
            ->addField('animalEagerToPlease')
            ->addFilter('animalEagerToPlease', 'equals', 'Eager to please')
            ->addField('animalEscapes')
            ->addFilter('animalEscapes', 'equals', 'Tries to escape')
            ->addField('animalEventempered')
            ->addFilter('animalEventempered', 'equals', 'Even-tempered')
            ->addField('animalFetches')
            ->addFilter('animalFetches', 'equals', 'Likes to fetch')
            ->addField('animalGentle')
            ->addFilter('animalGentle', 'equals', 'Gentle')
            ->addField('animalGoodInCar')
            ->addFilter('animalGoodInCar', 'equals', 'Does well in a car')
            ->addField('animalGoofy')
            ->addFilter('animalGoofy', 'equals', 'Goofy')
            ->addField('animalHasAllergies')
            ->addFilter('animalHasAllergies', 'equals', 'Has allergies')
            ->addField('animalHearingImpaired')
            ->addFilter('animalHearingImpaired', 'equals', 'Hearing impaired')
            ->addField('animalHypoallergenic')
            ->addFilter('animalHypoallergenic', 'equals', 'Hypoallergenic')
            ->addField('animalIndependent')
            ->addFilter('animalIndependent', 'equals', 'Independent / aloof')
            ->addField('animalIntelligent')
            ->addFilter('animalIntelligent', 'equals', 'Intelligent')
            ->addField('animalLap')
            ->addFilter('animalLap', 'equals', 'Lap pet')
            ->addField('animalLeashtrained')
            ->addFilter('animalLeashtrained', 'equals', 'Leash trained')
            ->addField('animalNeedsCompanionAnimal')
            ->addFilter('animalNeedsCompanionAnimal', 'equals', 'Needs companion animal')
            ->addField('animalNoCold')
            ->addFilter('animalNoCold', 'equals', 'Cold sensitive')
            ->addField('animalNoFemaleDogs')
            ->addFilter('animalNoFemaleDogs', 'equals', 'Not good with female dogs')
            ->addField('animalNoHeat')
            ->addFilter('animalNoHeat', 'equals', 'Heat sensitive')
            ->addField('animalNoLargeDogs')
            ->addFilter('animalNoLargeDogs', 'equals', 'Not good with large dogs')
            ->addField('animalNoMaleDogs')
            ->addFilter('animalNoMaleDogs', 'equals', 'Not good with male dogs')
            ->addField('animalNoSmallDogs')
            ->addFilter('animalNoSmallDogs', 'equals', 'Not good with small dogs')
            ->addField('animalObedient')
            ->addFilter('animalObedient', 'equals', 'Obedient')
            ->addField('animalOKForSeniors')
            ->addFilter('animalOKForSeniors', 'equals', 'Good for seniors / elderly')
            ->addField('animalOKWithFarm')
            ->addFilter('animalOKWithFarm', 'equals', 'Good with farm animals')
            ->addField('animalOlderKidsOnly')
            ->addFilter('animalOlderKidsOnly', 'equals', 'Older/ considerate kids only')
            ->addField('animalOngoingMedical')
            ->addFilter('animalOngoingMedical', 'equals', 'Needs ongoing medical care')
            ->addField('animalPlayful')
            ->addFilter('animalPlayful', 'equals', 'Playful')
            ->addField('animalPlaysToys')
            ->addFilter('animalPlaysToys', 'equals', 'Likes toys')
            ->addField('animalPredatory')
            ->addFilter('animalPredatory', 'equals', 'Predatory')
            ->addField('animalProtective')
            ->addFilter('animalProtective', 'equals', 'Protective / territorial')
            ->addField('ightImpaired')
            ->addFilter('ightImpaired', 'equals', 'Sight impaired')
            ->addField('kittish')
            ->addFilter('kittish', 'equals', 'Skittish')
            ->addField('pecialDiet')
            ->addFilter('pecialDiet', 'equals', 'Special diet required')
            ->addField('wims')
            ->addFilter('wims', 'equals', 'Likes to swim')
            ->addField('animalTimid')
            ->addFilter('animalTimid', 'equals', 'Timid / shy')
            ->addField('fosterEmail')
            ->addFilter('fosterEmail', 'equals', 'Email')
            ->addField('fosterFirstname')
            ->addFilter('fosterFirstname', 'equals', 'First Name')
            ->addField('fosterLastname')
            ->addFilter('fosterLastname', 'equals', 'Last Name')
            ->addField('fosterName')
            ->addFilter('fosterName', 'equals', 'Foster')
            ->addField('fosterPhoneCell')
            ->addFilter('fosterPhoneCell', 'equals', 'Phone (Cell)')
            ->addField('fosterPhoneHome')
            ->addFilter('fosterPhoneHome', 'equals', 'Phone (Home)')
            ->addField('fosterSalutation')
            ->addFilter('fosterSalutation', 'equals', 'Salutation')
            ->addField('locationAddress')
            ->addFilter('locationAddress', 'equals', 'Address')
            ->addField('locationCity')
            ->addFilter('locationCity', 'equals', 'City')
            ->addField('locationCountry')
            ->addFilter('locationCountry', 'equals', 'Country')
            ->addField('locationUrl')
            ->addFilter('locationUrl', 'equals', 'Link')
            ->addField('locationName')
            ->addFilter('locationName', 'equals', 'Location')
            ->addField('locationPhone')
            ->addFilter('locationPhone', 'equals', 'Phone')
            ->addField('locationState')
            ->addFilter('locationState', 'equals', 'State')
            ->addField('locationPostalcode')
            ->addFilter('locationPostalcode', 'equals', 'Postal Code')
            ->addField('animalPictures')
            ->addFilter('animalPictures', 'equals', 'Pictures')
            ->addField('animalVideos')
            ->addFilter('animalVideos', 'equals', 'Videos')
            ->addField('animalVideoUrls')
            ->addFilter('animalVideoUrls', 'equals', 'Video URLs')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'animalID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'animalOrgID','operation'=>'equals','criteria'=>"Org ID"],
            ['fieldName'=>'animalActivityLevel','operation'=>'equals','criteria'=>"Activity level"],
            ['fieldName'=>'animalAdoptedDate','operation'=>'equals','criteria'=>"Adopted Date"],
            ['fieldName'=>'animalAdoptionFee','operation'=>'equals','criteria'=>"Adoption fee"],
            ['fieldName'=>'animalAgeString','operation'=>'equals','criteria'=>"Age (years/months)"],
            ['fieldName'=>'animalAltered','operation'=>'equals','criteria'=>"Altered"],
            ['fieldName'=>'animalAvailableDate','operation'=>'equals','criteria'=>"Available Date"],
            ['fieldName'=>'animalBirthdate','operation'=>'equals','criteria'=>"Birthdate"],
            ['fieldName'=>'animalBirthdateExact','operation'=>'equals','criteria'=>"Exact Birthdate"],
            ['fieldName'=>'animalBreed','operation'=>'equals','criteria'=>"Breed"],
            ['fieldName'=>'animalCoatLength','operation'=>'equals','criteria'=>"Coat Length"],
            ['fieldName'=>'animalColor','operation'=>'equals','criteria'=>"Color"],
            ['fieldName'=>'animalColorID','operation'=>'equals','criteria'=>"Color (General)"],
            ['fieldName'=>'animalColorDetails','operation'=>'equals','criteria'=>"Color details"],
            ['fieldName'=>'animalCourtesy','operation'=>'equals','criteria'=>"Courtesy"],
            ['fieldName'=>'animalDeclawed','operation'=>'equals','criteria'=>"Declawed"],
            ['fieldName'=>'animalDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'animalDescriptionPlain','operation'=>'equals','criteria'=>"Description (no html)"],
            ['fieldName'=>'animalDistinguishingMarks','operation'=>'equals','criteria'=>"Distinguishing marks"],
            ['fieldName'=>'animalEarType','operation'=>'equals','criteria'=>"Ear type"],
            ['fieldName'=>'animalEnergyLevel','operation'=>'equals','criteria'=>"Energy level"],
            ['fieldName'=>'animalExerciseNeeds','operation'=>'equals','criteria'=>"Exercise needs"],
            ['fieldName'=>'animalEyeColor','operation'=>'equals','criteria'=>"Eye color"],
            ['fieldName'=>'animalFence','operation'=>'equals','criteria'=>"Requires a home with fence"],
            ['fieldName'=>'animalFound','operation'=>'equals','criteria'=>"Found"],
            ['fieldName'=>'animalFoundDate','operation'=>'equals','criteria'=>"Found date"],
            ['fieldName'=>'animalFoundPostalcode','operation'=>'equals','criteria'=>"Found zip/postal code"],
            ['fieldName'=>'animalGeneralAge','operation'=>'equals','criteria'=>"General Age"],
            ['fieldName'=>'animalGeneralSizePotential','operation'=>'equals','criteria'=>"Size potential (general)"],
            ['fieldName'=>'animalGroomingNeeds','operation'=>'equals','criteria'=>"Grooming needs"],
            ['fieldName'=>'animalHousetrained','operation'=>'equals','criteria'=>"Housetrained"],
            ['fieldName'=>'animalIndoorOutdoor','operation'=>'equals','criteria'=>"Indoor/Outdoor"],
            ['fieldName'=>'animalKillDate','operation'=>'equals','criteria'=>"Euthanasia date"],
            ['fieldName'=>'animalKillReason','operation'=>'equals','criteria'=>"Euthanasia reason"],
            ['fieldName'=>'animalLocation','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'animalLocationCoordinates','operation'=>'equals','criteria'=>"Location coordinates"],
            ['fieldName'=>'animalLocationDistance','operation'=>'equals','criteria'=>"Distance"],
            ['fieldName'=>'animalLocationCitystate','operation'=>'equals','criteria'=>"Location city, state"],
            ['fieldName'=>'animalLocationState','operation'=>'equals','criteria'=>"Location state"],
            ['fieldName'=>'animalMicrochipped','operation'=>'equals','criteria'=>"Microchipped"],
            ['fieldName'=>'animalMixedBreed','operation'=>'equals','criteria'=>"Mixed breed"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'animalSpecialneeds','operation'=>'equals','criteria'=>"Has special needs"],
            ['fieldName'=>'animalSpecialneedsDescription','operation'=>'equals','criteria'=>"Special needs description"],
            ['fieldName'=>'animalNeedsFoster','operation'=>'equals','criteria'=>"Needs a Foster"],
            ['fieldName'=>'animalNewPeople','operation'=>'equals','criteria'=>"Reaction to new people"],
            ['fieldName'=>'animalNotHousetrainedReason','operation'=>'equals','criteria'=>"Reason not housetrained"],
            ['fieldName'=>'animalObedienceTraining','operation'=>'equals','criteria'=>"Obedience training"],
            ['fieldName'=>'animalOKWithAdults','operation'=>'equals','criteria'=>"Good with adults"],
            ['fieldName'=>'animalOKWithCats','operation'=>'equals','criteria'=>"OK with cats"],
            ['fieldName'=>'animalOKWithDogs','operation'=>'equals','criteria'=>"OK with dogs"],
            ['fieldName'=>'animalOKWithKids','operation'=>'equals','criteria'=>"OK with kids"],
            ['fieldName'=>'animalOwnerExperience','operation'=>'equals','criteria'=>"Owner experience needed"],
            ['fieldName'=>'animalPattern','operation'=>'equals','criteria'=>"Pattern"],
            ['fieldName'=>'animalPatternID','operation'=>'equals','criteria'=>"Pattern"],
            ['fieldName'=>'animalAdoptionPending','operation'=>'equals','criteria'=>"Adoption pending"],
            ['fieldName'=>'animalPrimaryBreed','operation'=>'equals','criteria'=>"Primary breed"],
            ['fieldName'=>'animalPrimaryBreedID','operation'=>'equals','criteria'=>"Primary breed"],
            ['fieldName'=>'animalRescueID','operation'=>'equals','criteria'=>"Rescue ID"],
            ['fieldName'=>'animalSearchString','operation'=>'equals','criteria'=>"Search"],
            ['fieldName'=>'animalSecondaryBreed','operation'=>'equals','criteria'=>"Secondary Breed"],
            ['fieldName'=>'animalSecondaryBreedID','operation'=>'equals','criteria'=>"Secondary Breed"],
            ['fieldName'=>'animalSex','operation'=>'equals','criteria'=>"Sex"],
            ['fieldName'=>'animalShedding','operation'=>'equals','criteria'=>"Shedding amount"],
            ['fieldName'=>'animalSizeCurrent','operation'=>'equals','criteria'=>"Current size"],
            ['fieldName'=>'animalSizePotential','operation'=>'equals','criteria'=>"Size potential"],
            ['fieldName'=>'animalSizeUOM','operation'=>'equals','criteria'=>"Size unit of measure"],
            ['fieldName'=>'animalSpecies','operation'=>'equals','criteria'=>"Species"],
            ['fieldName'=>'animalSpeciesID','operation'=>'equals','criteria'=>"Species"],
            ['fieldName'=>'animalSponsorable','operation'=>'equals','criteria'=>"Allow sponsorship"],
            ['fieldName'=>'animalSponsors','operation'=>'equals','criteria'=>"Sponsors"],
            ['fieldName'=>'animalSponsorshipDetails','operation'=>'equals','criteria'=>"Sponsorship details"],
            ['fieldName'=>'animalSponsorshipMinimum','operation'=>'equals','criteria'=>"Sponsorship minimum"],
            ['fieldName'=>'animalStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'animalStatusID','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'animalSummary','operation'=>'equals','criteria'=>"Summary"],
            ['fieldName'=>'animalTailType','operation'=>'equals','criteria'=>"Tail type"],
            ['fieldName'=>'animalThumbnailUrl','operation'=>'equals','criteria'=>"Thumbnail URL"],
            ['fieldName'=>'animalUptodate','operation'=>'equals','criteria'=>"Up-to-date"],
            ['fieldName'=>'animalUpdatedDate','operation'=>'equals','criteria'=>"Last updated"],
            ['fieldName'=>'animalUrl','operation'=>'equals','criteria'=>"Web page"],
            ['fieldName'=>'animalVocal','operation'=>'equals','criteria'=>"Likes to vocalize"],
            ['fieldName'=>'animalYardRequired','operation'=>'equals','criteria'=>"Requires a Yard"],
            ['fieldName'=>'animalAffectionate','operation'=>'equals','criteria'=>"Affectionate"],
            ['fieldName'=>'animalApartment','operation'=>'equals','criteria'=>"Apartment appropriate"],
            ['fieldName'=>'animalCratetrained','operation'=>'equals','criteria'=>"Crate trained"],
            ['fieldName'=>'animalDrools','operation'=>'equals','criteria'=>"Drools excessively"],
            ['fieldName'=>'animalEagerToPlease','operation'=>'equals','criteria'=>"Eager to please"],
            ['fieldName'=>'animalEscapes','operation'=>'equals','criteria'=>"Tries to escape"],
            ['fieldName'=>'animalEventempered','operation'=>'equals','criteria'=>"Even-tempered"],
            ['fieldName'=>'animalFetches','operation'=>'equals','criteria'=>"Likes to fetch"],
            ['fieldName'=>'animalGentle','operation'=>'equals','criteria'=>"Gentle"],
            ['fieldName'=>'animalGoodInCar','operation'=>'equals','criteria'=>"Does well in a car"],
            ['fieldName'=>'animalGoofy','operation'=>'equals','criteria'=>"Goofy"],
            ['fieldName'=>'animalHasAllergies','operation'=>'equals','criteria'=>"Has allergies"],
            ['fieldName'=>'animalHearingImpaired','operation'=>'equals','criteria'=>"Hearing impaired"],
            ['fieldName'=>'animalHypoallergenic','operation'=>'equals','criteria'=>"Hypoallergenic"],
            ['fieldName'=>'animalIndependent','operation'=>'equals','criteria'=>"Independent / aloof"],
            ['fieldName'=>'animalIntelligent','operation'=>'equals','criteria'=>"Intelligent"],
            ['fieldName'=>'animalLap','operation'=>'equals','criteria'=>"Lap pet"],
            ['fieldName'=>'animalLeashtrained','operation'=>'equals','criteria'=>"Leash trained"],
            ['fieldName'=>'animalNeedsCompanionAnimal','operation'=>'equals','criteria'=>"Needs companion animal"],
            ['fieldName'=>'animalNoCold','operation'=>'equals','criteria'=>"Cold sensitive"],
            ['fieldName'=>'animalNoFemaleDogs','operation'=>'equals','criteria'=>"Not good with female dogs"],
            ['fieldName'=>'animalNoHeat','operation'=>'equals','criteria'=>"Heat sensitive"],
            ['fieldName'=>'animalNoLargeDogs','operation'=>'equals','criteria'=>"Not good with large dogs"],
            ['fieldName'=>'animalNoMaleDogs','operation'=>'equals','criteria'=>"Not good with male dogs"],
            ['fieldName'=>'animalNoSmallDogs','operation'=>'equals','criteria'=>"Not good with small dogs"],
            ['fieldName'=>'animalObedient','operation'=>'equals','criteria'=>"Obedient"],
            ['fieldName'=>'animalOKForSeniors','operation'=>'equals','criteria'=>"Good for seniors / elderly"],
            ['fieldName'=>'animalOKWithFarmAnimals','operation'=>'equals','criteria'=>"Good with farm animals"],
            ['fieldName'=>'animalOlderKidsOnly','operation'=>'equals','criteria'=>"Older/ considerate kids only"],
            ['fieldName'=>'animalOngoingMedical','operation'=>'equals','criteria'=>"Needs ongoing medical care"],
            ['fieldName'=>'animalPlayful','operation'=>'equals','criteria'=>"Playful"],
            ['fieldName'=>'animalPlaysToys','operation'=>'equals','criteria'=>"Likes toys"],
            ['fieldName'=>'animalPredatory','operation'=>'equals','criteria'=>"Predatory"],
            ['fieldName'=>'animalProtective','operation'=>'equals','criteria'=>"Protective / territorial"],
            ['fieldName'=>'animalSightImpaired','operation'=>'equals','criteria'=>"Sight impaired"],
            ['fieldName'=>'animalSkittish','operation'=>'equals','criteria'=>"Skittish"],
            ['fieldName'=>'animalSpecialDiet','operation'=>'equals','criteria'=>"Special diet required"],
            ['fieldName'=>'animalSwims','operation'=>'equals','criteria'=>"Likes to swim"],
            ['fieldName'=>'animalTimid','operation'=>'equals','criteria'=>"Timid / shy"],
            ['fieldName'=>'fosterEmail','operation'=>'equals','criteria'=>"Email"],
            ['fieldName'=>'fosterFirstname','operation'=>'equals','criteria'=>"First Name"],
            ['fieldName'=>'fosterLastname','operation'=>'equals','criteria'=>"Last Name"],
            ['fieldName'=>'fosterName','operation'=>'equals','criteria'=>"Foster"],
            ['fieldName'=>'fosterPhoneCell','operation'=>'equals','criteria'=>"Phone (Cell)"],
            ['fieldName'=>'fosterPhoneHome','operation'=>'equals','criteria'=>"Phone (Home)"],
            ['fieldName'=>'fosterSalutation','operation'=>'equals','criteria'=>"Salutation"],
            ['fieldName'=>'locationAddress','operation'=>'equals','criteria'=>"Address"],
            ['fieldName'=>'locationCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'locationCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'locationUrl','operation'=>'equals','criteria'=>"Link"],
            ['fieldName'=>'locationName','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'locationPhone','operation'=>'equals','criteria'=>"Phone"],
            ['fieldName'=>'locationState','operation'=>'equals','criteria'=>"State"],
            ['fieldName'=>'locationPostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'animalPictures','operation'=>'equals','criteria'=>"Pictures"],
            ['fieldName'=>'animalVideos','operation'=>'equals','criteria'=>"Videos"],
            ['fieldName'=>'animalVideoUrls','operation'=>'equals','criteria'=>"Video URLs"],
        ];

        $translatedFields = [
            "animalID",
            "animalOrgID",
            "animalActivityLevel",
            "animalAdoptedDate",
            "animalAdoptionFee",
            "animalAgeString",
            "animalAltered",
            "animalAvailableDate",
            "animalBirthdate",
            "animalBirthdateExact",
            "animalBreed",
            "animalCoatLength",
            "animalColor",
            "animalColorID",
            "animalColorDetails",
            "animalCourtesy",
            "animalDeclawed",
            "animalDescription",
            "animalDescriptionPlain",
            "animalDistinguishingMarks",
            "animalEarType",
            "animalEnergyLevel",
            "animalExerciseNeeds",
            "animalEyeColor",
            "animalFence",
            "animalFound",
            "animalFoundDate",
            "animalFoundPostalcode",
            "animalGeneralAge",
            "animalGeneralSizePotential",
            "animalGroomingNeeds",
            "animalHousetrained",
            "animalIndoorOutdoor",
            "animalKillDate",
            "animalKillReason",
            "animalLocation",
            "animalLocationCoordinates",
            "animalLocationDistance",
            "animalLocationCitystate",
            "animalLocationState",
            "animalMicrochipped",
            "animalMixedBreed",
            "animalName",
            "animalSpecialneeds",
            "animalSpecialneedsDescription",
            "animalNeedsFoster",
            "animalNewPeople",
            "animalNotHousetrainedReason",
            "animalObedienceTraining",
            "animalOKWithAdults",
            "animalOKWithCats",
            "animalOKWithDogs",
            "animalOKWithKids",
            "animalOwnerExperience",
            "animalPattern",
            "animalPatternID",
            "animalAdoptionPending",
            "animalPrimaryBreed",
            "animalPrimaryBreedID",
            "animalRescueID",
            "animalSearchString",
            "animalSecondaryBreed",
            "animalSecondaryBreedID",
            "animalSex",
            "animalShedding",
            "animalSizeCurrent",
            "animalSizePotential",
            "animalSizeUOM",
            "animalSpecies",
            "animalSpeciesID",
            "animalSponsorable",
            "animalSponsors",
            "animalSponsorshipDetails",
            "animalSponsorshipMinimum",
            "animalStatus",
            "animalStatusID",
            "animalSummary",
            "animalTailType",
            "animalThumbnailUrl",
            "animalUptodate",
            "animalUpdatedDate",
            "animalUrl",
            "animalVocal",
            "animalYardRequired",
            "animalAffectionate",
            "animalApartment",
            "animalCratetrained",
            "animalDrools",
            "animalEagerToPlease",
            "animalEscapes",
            "animalEventempered",
            "animalFetches",
            "animalGentle",
            "animalGoodInCar",
            "animalGoofy",
            "animalHasAllergies",
            "animalHearingImpaired",
            "animalHypoallergenic",
            "animalIndependent",
            "animalIntelligent",
            "animalLap",
            "animalLeashtrained",
            "animalNeedsCompanionAnimal",
            "animalNoCold",
            "animalNoFemaleDogs",
            "animalNoHeat",
            "animalNoLargeDogs",
            "animalNoMaleDogs",
            "animalNoSmallDogs",
            "animalObedient",
            "animalOKForSeniors",
            "animalOKWithFarmAnimals",
            "animalOlderKidsOnly",
            "animalOngoingMedical",
            "animalPlayful",
            "animalPlaysToys",
            "animalPredatory",
            "animalProtective",
            "animalSightImpaired",
            "animalSkittish",
            "animalSpecialDiet",
            "animalSwims",
            "animalTimid",
            "fosterEmail",
            "fosterFirstname",
            "fosterLastname",
            "fosterName",
            "fosterPhoneCell",
            "fosterPhoneHome",
            "fosterSalutation",
            "locationAddress",
            "locationCity",
            "locationCountry",
            "locationUrl",
            "locationName",
            "locationPhone",
            "locationState",
            "locationPostalcode",
            "animalPictures",
            "animalVideos",
            "animalVideoUrls",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
