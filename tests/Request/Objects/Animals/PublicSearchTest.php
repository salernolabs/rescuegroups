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
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('orgId')
            ->addFilter('orgId', 'equals', 'Org ID')
            ->addField('activityLevel')
            ->addFilter('activityLevel', 'equals', 'Activity level')
            ->addField('adoptedDate')
            ->addFilter('adoptedDate', 'equals', 'Adopted Date')
            ->addField('adoptionFee')
            ->addFilter('adoptionFee', 'equals', 'Adoption fee')
            ->addField('ageString')
            ->addFilter('ageString', 'equals', 'Age (years/months)')
            ->addField('altered')
            ->addFilter('altered', 'equals', 'Altered')
            ->addField('availableDate')
            ->addFilter('availableDate', 'equals', 'Available Date')
            ->addField('birthdate')
            ->addFilter('birthdate', 'equals', 'Birthdate')
            ->addField('birthdateExact')
            ->addFilter('birthdateExact', 'equals', 'Exact Birthdate')
            ->addField('breed')
            ->addFilter('breed', 'equals', 'Breed')
            ->addField('coatLength')
            ->addFilter('coatLength', 'equals', 'Coat Length')
            ->addField('color')
            ->addFilter('color', 'equals', 'Color')
            ->addField('colorId')
            ->addFilter('colorId', 'equals', 'Color (General)')
            ->addField('colorDetails')
            ->addFilter('colorDetails', 'equals', 'Color details')
            ->addField('courtesy')
            ->addFilter('courtesy', 'equals', 'Courtesy')
            ->addField('declawed')
            ->addFilter('declawed', 'equals', 'Declawed')
            ->addField('description')
            ->addFilter('description', 'equals', 'Description')
            ->addField('descriptionPlain')
            ->addFilter('descriptionPlain', 'equals', 'Description (no html)')
            ->addField('distinguishingMarks')
            ->addFilter('distinguishingMarks', 'equals', 'Distinguishing marks')
            ->addField('earType')
            ->addFilter('earType', 'equals', 'Ear type')
            ->addField('energyLevel')
            ->addFilter('energyLevel', 'equals', 'Energy level')
            ->addField('exerciseNeeds')
            ->addFilter('exerciseNeeds', 'equals', 'Exercise needs')
            ->addField('eyeColor')
            ->addFilter('eyeColor', 'equals', 'Eye color')
            ->addField('fence')
            ->addFilter('fence', 'equals', 'Requires a home with fence')
            ->addField('found')
            ->addFilter('found', 'equals', 'Found')
            ->addField('foundDate')
            ->addFilter('foundDate', 'equals', 'Found date')
            ->addField('foundPostalcode')
            ->addFilter('foundPostalcode', 'equals', 'Found zip/postal code')
            ->addField('generalAge')
            ->addFilter('generalAge', 'equals', 'General Age')
            ->addField('generalSizePotential')
            ->addFilter('generalSizePotential', 'equals', 'Size potential (general)')
            ->addField('groomingNeeds')
            ->addFilter('groomingNeeds', 'equals', 'Grooming needs')
            ->addField('housetrained')
            ->addFilter('housetrained', 'equals', 'Housetrained')
            ->addField('indoorOutdoor')
            ->addFilter('indoorOutdoor', 'equals', 'Indoor/Outdoor')
            ->addField('killDate')
            ->addFilter('killDate', 'equals', 'Euthanasia date')
            ->addField('killReason')
            ->addFilter('killReason', 'equals', 'Euthanasia reason')
            ->addField('location')
            ->addFilter('location', 'equals', 'Location')
            ->addField('locationCoordinates')
            ->addFilter('locationCoordinates', 'equals', 'Location coordinates')
            ->addField('locationDistance')
            ->addFilter('locationDistance', 'equals', 'Distance')
            ->addField('locationCitystate')
            ->addFilter('locationCitystate', 'equals', 'Location city, state')
            ->addField('locationState')
            ->addFilter('locationState', 'equals', 'Location state')
            ->addField('microchipped')
            ->addFilter('microchipped', 'equals', 'Microchipped')
            ->addField('mixedBreed')
            ->addFilter('mixedBreed', 'equals', 'Mixed breed')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('specialneeds')
            ->addFilter('specialneeds', 'equals', 'Has special needs')
            ->addField('specialneedsDescription')
            ->addFilter('specialneedsDescription', 'equals', 'Special needs description')
            ->addField('needsFoster')
            ->addFilter('needsFoster', 'equals', 'Needs a Foster')
            ->addField('newPeople')
            ->addFilter('newPeople', 'equals', 'Reaction to new people')
            ->addField('notHousetrainedReason')
            ->addFilter('notHousetrainedReason', 'equals', 'Reason not housetrained')
            ->addField('obedienceTraining')
            ->addFilter('obedienceTraining', 'equals', 'Obedience training')
            ->addField('okWithAdults')
            ->addFilter('okWithAdults', 'equals', 'Good with adults')
            ->addField('okWithCats')
            ->addFilter('okWithCats', 'equals', 'OK with cats')
            ->addField('okWithDogs')
            ->addFilter('okWithDogs', 'equals', 'OK with dogs')
            ->addField('okWithKids')
            ->addFilter('okWithKids', 'equals', 'OK with kids')
            ->addField('ownerExperience')
            ->addFilter('ownerExperience', 'equals', 'Owner experience needed')
            ->addField('pattern')
            ->addFilter('pattern', 'equals', 'Pattern')
            ->addField('patternId')
            ->addFilter('patternId', 'equals', 'Pattern')
            ->addField('adoptionPending')
            ->addFilter('adoptionPending', 'equals', 'Adoption pending')
            ->addField('primaryBreed')
            ->addFilter('primaryBreed', 'equals', 'Primary breed')
            ->addField('primaryBreedId')
            ->addFilter('primaryBreedId', 'equals', 'Primary breed')
            ->addField('rescueId')
            ->addFilter('rescueId', 'equals', 'Rescue ID')
            ->addField('searchString')
            ->addFilter('searchString', 'equals', 'Search')
            ->addField('secondaryBreed')
            ->addFilter('secondaryBreed', 'equals', 'Secondary Breed')
            ->addField('secondaryBreedId')
            ->addFilter('secondaryBreedId', 'equals', 'Secondary Breed')
            ->addField('sex')
            ->addFilter('sex', 'equals', 'Sex')
            ->addField('shedding')
            ->addFilter('shedding', 'equals', 'Shedding amount')
            ->addField('sizeCurrent')
            ->addFilter('sizeCurrent', 'equals', 'Current size')
            ->addField('sizePotential')
            ->addFilter('sizePotential', 'equals', 'Size potential')
            ->addField('sizeUOM')
            ->addFilter('sizeUOM', 'equals', 'Size unit of measure')
            ->addField('species')
            ->addFilter('species', 'equals', 'Species')
            ->addField('speciesId')
            ->addFilter('speciesId', 'equals', 'Species')
            ->addField('sponsorable')
            ->addFilter('sponsorable', 'equals', 'Allow sponsorship')
            ->addField('sponsors')
            ->addFilter('sponsors', 'equals', 'Sponsors')
            ->addField('sponsorshipDetails')
            ->addFilter('sponsorshipDetails', 'equals', 'Sponsorship details')
            ->addField('sponsorshipMinimum')
            ->addFilter('sponsorshipMinimum', 'equals', 'Sponsorship minimum')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->addField('statusId')
            ->addFilter('statusId', 'equals', 'Status')
            ->addField('summary')
            ->addFilter('summary', 'equals', 'Summary')
            ->addField('tailType')
            ->addFilter('tailType', 'equals', 'Tail type')
            ->addField('thumbnailUrl')
            ->addFilter('thumbnailUrl', 'equals', 'Thumbnail URL')
            ->addField('uptodate')
            ->addFilter('uptodate', 'equals', 'Up-to-date')
            ->addField('updatedDate')
            ->addFilter('updatedDate', 'equals', 'Last updated')
            ->addField('url')
            ->addFilter('url', 'equals', 'Web page')
            ->addField('vocal')
            ->addFilter('vocal', 'equals', 'Likes to vocalize')
            ->addField('yardRequired')
            ->addFilter('yardRequired', 'equals', 'Requires a Yard')
            ->addField('affectionate')
            ->addFilter('affectionate', 'equals', 'Affectionate')
            ->addField('apartment')
            ->addFilter('apartment', 'equals', 'Apartment appropriate')
            ->addField('cratetrained')
            ->addFilter('cratetrained', 'equals', 'Crate trained')
            ->addField('drools')
            ->addFilter('drools', 'equals', 'Drools excessively')
            ->addField('eagerToPlease')
            ->addFilter('eagerToPlease', 'equals', 'Eager to please')
            ->addField('escapes')
            ->addFilter('escapes', 'equals', 'Tries to escape')
            ->addField('eventempered')
            ->addFilter('eventempered', 'equals', 'Even-tempered')
            ->addField('fetches')
            ->addFilter('fetches', 'equals', 'Likes to fetch')
            ->addField('gentle')
            ->addFilter('gentle', 'equals', 'Gentle')
            ->addField('goodInCar')
            ->addFilter('goodInCar', 'equals', 'Does well in a car')
            ->addField('goofy')
            ->addFilter('goofy', 'equals', 'Goofy')
            ->addField('hasAllergies')
            ->addFilter('hasAllergies', 'equals', 'Has allergies')
            ->addField('hearingImpaired')
            ->addFilter('hearingImpaired', 'equals', 'Hearing impaired')
            ->addField('hypoallergenic')
            ->addFilter('hypoallergenic', 'equals', 'Hypoallergenic')
            ->addField('independent')
            ->addFilter('independent', 'equals', 'Independent / aloof')
            ->addField('intelligent')
            ->addFilter('intelligent', 'equals', 'Intelligent')
            ->addField('lap')
            ->addFilter('lap', 'equals', 'Lap pet')
            ->addField('leashtrained')
            ->addFilter('leashtrained', 'equals', 'Leash trained')
            ->addField('needsCompanion')
            ->addFilter('needsCompanion', 'equals', 'Needs companion animal')
            ->addField('noCold')
            ->addFilter('noCold', 'equals', 'Cold sensitive')
            ->addField('noFemaleDogs')
            ->addFilter('noFemaleDogs', 'equals', 'Not good with female dogs')
            ->addField('noHeat')
            ->addFilter('noHeat', 'equals', 'Heat sensitive')
            ->addField('noLargeDogs')
            ->addFilter('noLargeDogs', 'equals', 'Not good with large dogs')
            ->addField('noMaleDogs')
            ->addFilter('noMaleDogs', 'equals', 'Not good with male dogs')
            ->addField('noSmallDogs')
            ->addFilter('noSmallDogs', 'equals', 'Not good with small dogs')
            ->addField('obedient')
            ->addFilter('obedient', 'equals', 'Obedient')
            ->addField('okForSeniors')
            ->addFilter('okForSeniors', 'equals', 'Good for seniors / elderly')
            ->addField('okWithFarms')
            ->addFilter('okWithFarms', 'equals', 'Good with farm animals')
            ->addField('olderKidsOnly')
            ->addFilter('olderKidsOnly', 'equals', 'Older/ considerate kids only')
            ->addField('ongoingMedical')
            ->addFilter('ongoingMedical', 'equals', 'Needs ongoing medical care')
            ->addField('playful')
            ->addFilter('playful', 'equals', 'Playful')
            ->addField('playsToys')
            ->addFilter('playsToys', 'equals', 'Likes toys')
            ->addField('predatory')
            ->addFilter('predatory', 'equals', 'Predatory')
            ->addField('protective')
            ->addFilter('protective', 'equals', 'Protective / territorial')
            ->addField('sightImpaired')
            ->addFilter('sightImpaired', 'equals', 'Sight impaired')
            ->addField('skittish')
            ->addFilter('skittish', 'equals', 'Skittish')
            ->addField('specialDiet')
            ->addFilter('specialDiet', 'equals', 'Special diet required')
            ->addField('swims')
            ->addFilter('swims', 'equals', 'Likes to swim')
            ->addField('timid')
            ->addFilter('timid', 'equals', 'Timid / shy')
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
            ->addField('locationPostalcode')
            ->addFilter('locationPostalcode', 'equals', 'Postal Code')
            ->addField('pictures')
            ->addFilter('pictures', 'equals', 'Pictures')
            ->addField('videos')
            ->addFilter('videos', 'equals', 'Videos')
            ->addField('videoUrls')
            ->addFilter('videoUrls', 'equals', 'Video URLs')
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
            "locationPostalcode",
            "animalPictures",
            "animalVideos",
            "animalVideoUrls",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
