<?php
/**
 * Animals PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class PublicSearch extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicSearch';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;

    const FIELD_ID = 'id';
    const FIELD_ORG_ID = 'orgId';
    const FIELD_ACTIVITY_LEVEL = 'activityLevel';
    const FIELD_ADOPTED_DATE = 'adoptedDate';
    const FIELD_ADOPTION_FEE = 'adoptionFee';
    const FIELD_AGE_STRING = 'ageString';
    const FIELD_ALTERED = 'altered';
    const FIELD_AVAILABLE_DATE = 'availableDate';
    const FIELD_BIRTHDATE = 'birthdate';
    const FIELD_BIRTHDATE_EXACT = 'birthdateExact';
    const FIELD_BREED = 'breed';
    const FIELD_COAT_LENGTH = 'coatLength';
    const FIELD_COLOR = 'color';
    const FIELD_COLOR_ID = 'colorId';
    const FIELD_COLOR_DETAILS = 'colorDetails';
    const FIELD_COURTESY = 'courtesy';
    const FIELD_DECLAWED = 'declawed';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_PLAIN = 'descriptionPlain';
    const FIELD_DISTINGUISHING_MARKS = 'distinguishingMarks';
    const FIELD_EAR_TYPE = 'earType';
    const FIELD_ENERGY_LEVEL = 'energyLevel';
    const FIELD_EXERCISE_NEEDS = 'exerciseNeeds';
    const FIELD_EYE_COLOR = 'eyeColor';
    const FIELD_FENCE = 'fence';
    const FIELD_FOUND = 'found';
    const FIELD_FOUND_DATE = 'foundDate';
    const FIELD_FOUND_POSTALCODE = 'foundPostalcode';
    const FIELD_GENERAL_AGE = 'generalAge';
    const FIELD_GENERAL_SIZE_POTENTIAL = 'generalSizePotential';
    const FIELD_GROOMING_NEEDS = 'groomingNeeds';
    const FIELD_HOUSETRAINED = 'housetrained';
    const FIELD_INDOOR_OUTDOOR = 'indoorOutdoor';
    const FIELD_KILL_DATE = 'killDate';
    const FIELD_KILL_REASON = 'killReason';
    const FIELD_LOCATION = 'location';
    const FIELD_LOCATION_COORDINATES = 'locationCoordinates';
    const FIELD_LOCATION_DISTANCE = 'locationDistance';
    const FIELD_LOCATION_CITYSTATE = 'locationCitystate';
    const FIELD_LOCATION_STATE = 'locationState';
    const FIELD_MICROCHIPPED = 'microchipped';
    const FIELD_MIXED_BREED = 'mixedBreed';
    const FIELD_NAME = 'name';
    const FIELD_SPECIALNEEDS = 'specialneeds';
    const FIELD_SPECIALNEEDS_DESCRIPTION = 'specialneedsDescription';
    const FIELD_NEEDS_FOSTER = 'needsFoster';
    const FIELD_NEW_PEOPLE = 'newPeople';
    const FIELD_NOT_HOUSETRAINED_REASON = 'notHousetrainedReason';
    const FIELD_OBEDIENCE_TRAINING = 'obedienceTraining';
    const FIELD_OK_WITH_ADULTS = 'okWithAdults';
    const FIELD_OK_WITH_CATS = 'okWithCats';
    const FIELD_OK_WITH_DOGS = 'okWithDogs';
    const FIELD_OK_WITH_KIDS = 'okWithKids';
    const FIELD_OWNER_EXPERIENCE = 'ownerExperience';
    const FIELD_PATTERN = 'pattern';
    const FIELD_PATTERN_ID = 'patternId';
    const FIELD_ADOPTION_PENDING = 'adoptionPending';
    const FIELD_PRIMARY_BREED = 'primaryBreed';
    const FIELD_PRIMARY_BREED_ID = 'primaryBreedId';
    const FIELD_RESCUE_ID = 'rescueId';
    const FIELD_SEARCH_STRING = 'searchString';
    const FIELD_SECONDARY_BREED = 'secondaryBreed';
    const FIELD_SECONDARY_BREED_ID = 'secondaryBreedId';
    const FIELD_SEX = 'sex';
    const FIELD_SHEDDING = 'shedding';
    const FIELD_SIZE_CURRENT = 'sizeCurrent';
    const FIELD_SIZE_POTENTIAL = 'sizePotential';
    const FIELD_SIZE_U_O_M = 'sizeUOM';
    const FIELD_SPECIES = 'species';
    const FIELD_SPECIES_ID = 'speciesId';
    const FIELD_SPONSORABLE = 'sponsorable';
    const FIELD_SPONSORS = 'sponsors';
    const FIELD_SPONSORSHIP_DETAILS = 'sponsorshipDetails';
    const FIELD_SPONSORSHIP_MINIMUM = 'sponsorshipMinimum';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_ID = 'statusId';
    const FIELD_SUMMARY = 'summary';
    const FIELD_TAIL_TYPE = 'tailType';
    const FIELD_THUMBNAIL_URL = 'thumbnailUrl';
    const FIELD_UPTODATE = 'uptodate';
    const FIELD_UPDATED_DATE = 'updatedDate';
    const FIELD_URL = 'url';
    const FIELD_VOCAL = 'vocal';
    const FIELD_YARD_REQUIRED = 'yardRequired';
    const FIELD_AFFECTIONATE = 'affectionate';
    const FIELD_APARTMENT = 'apartment';
    const FIELD_CRATETRAINED = 'cratetrained';
    const FIELD_DROOLS = 'drools';
    const FIELD_EAGER_TO_PLEASE = 'eagerToPlease';
    const FIELD_ESCAPES = 'escapes';
    const FIELD_EVENTEMPERED = 'eventempered';
    const FIELD_FETCHES = 'fetches';
    const FIELD_GENTLE = 'gentle';
    const FIELD_GOOD_IN_CAR = 'goodInCar';
    const FIELD_GOOFY = 'goofy';
    const FIELD_HAS_ALLERGIES = 'hasAllergies';
    const FIELD_HEARING_IMPAIRED = 'hearingImpaired';
    const FIELD_HYPOALLERGENIC = 'hypoallergenic';
    const FIELD_INDEPENDENT = 'independent';
    const FIELD_INTELLIGENT = 'intelligent';
    const FIELD_LAP = 'lap';
    const FIELD_LEASHTRAINED = 'leashtrained';
    const FIELD_NEEDS_COMPANION = 'needsCompanion';
    const FIELD_NO_COLD = 'noCold';
    const FIELD_NO_FEMALE_DOGS = 'noFemaleDogs';
    const FIELD_NO_HEAT = 'noHeat';
    const FIELD_NO_LARGE_DOGS = 'noLargeDogs';
    const FIELD_NO_MALE_DOGS = 'noMaleDogs';
    const FIELD_NO_SMALL_DOGS = 'noSmallDogs';
    const FIELD_OBEDIENT = 'obedient';
    const FIELD_OK_FOR_SENIORS = 'okForSeniors';
    const FIELD_OK_WITH_FARMS = 'okWithFarms';
    const FIELD_OLDER_KIDS_ONLY = 'olderKidsOnly';
    const FIELD_ONGOING_MEDICAL = 'ongoingMedical';
    const FIELD_PLAYFUL = 'playful';
    const FIELD_PLAYS_TOYS = 'playsToys';
    const FIELD_PREDATORY = 'predatory';
    const FIELD_PROTECTIVE = 'protective';
    const FIELD_SIGHT_IMPAIRED = 'sightImpaired';
    const FIELD_SKITTISH = 'skittish';
    const FIELD_SPECIAL_DIET = 'specialDiet';
    const FIELD_SWIMS = 'swims';
    const FIELD_TIMID = 'timid';
    const FIELD_FOSTER_EMAIL = 'fosterEmail';
    const FIELD_FOSTER_FIRSTNAME = 'fosterFirstname';
    const FIELD_FOSTER_LASTNAME = 'fosterLastname';
    const FIELD_FOSTER_NAME = 'fosterName';
    const FIELD_FOSTER_PHONE_CELL = 'fosterPhoneCell';
    const FIELD_FOSTER_PHONE_HOME = 'fosterPhoneHome';
    const FIELD_FOSTER_SALUTATION = 'fosterSalutation';
    const FIELD_LOCATION_ADDRESS = 'locationAddress';
    const FIELD_LOCATION_CITY = 'locationCity';
    const FIELD_LOCATION_COUNTRY = 'locationCountry';
    const FIELD_LOCATION_URL = 'locationUrl';
    const FIELD_LOCATION_NAME = 'locationName';
    const FIELD_LOCATION_PHONE = 'locationPhone';
    const FIELD_LOCATION_POSTALCODE = 'locationPostalcode';
    const FIELD_PICTURES = 'pictures';
    const FIELD_VIDEOS = 'videos';
    const FIELD_VIDEO_URLS = 'videoUrls';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'animalID'],
        "orgId" => [0, 'animalOrgID'],
        "activityLevel" => [0, 'animalActivityLevel'],
        "adoptedDate" => [0, 'animalAdoptedDate'],
        "adoptionFee" => [0, 'animalAdoptionFee'],
        "ageString" => [0, 'animalAgeString'],
        "altered" => [0, 'animalAltered'],
        "availableDate" => [0, 'animalAvailableDate'],
        "birthdate" => [0, 'animalBirthdate'],
        "birthdateExact" => [0, 'animalBirthdateExact'],
        "breed" => [0, 'animalBreed'],
        "coatLength" => [0, 'animalCoatLength'],
        "color" => [0, 'animalColor'],
        "colorId" => [0, 'animalColorID'],
        "colorDetails" => [0, 'animalColorDetails'],
        "courtesy" => [0, 'animalCourtesy'],
        "declawed" => [0, 'animalDeclawed'],
        "description" => [0, 'animalDescription'],
        "descriptionPlain" => [0, 'animalDescriptionPlain'],
        "distinguishingMarks" => [0, 'animalDistinguishingMarks'],
        "earType" => [0, 'animalEarType'],
        "energyLevel" => [0, 'animalEnergyLevel'],
        "exerciseNeeds" => [0, 'animalExerciseNeeds'],
        "eyeColor" => [0, 'animalEyeColor'],
        "fence" => [0, 'animalFence'],
        "found" => [0, 'animalFound'],
        "foundDate" => [0, 'animalFoundDate'],
        "foundPostalcode" => [0, 'animalFoundPostalcode'],
        "generalAge" => [0, 'animalGeneralAge'],
        "generalSizePotential" => [0, 'animalGeneralSizePotential'],
        "groomingNeeds" => [0, 'animalGroomingNeeds'],
        "housetrained" => [0, 'animalHousetrained'],
        "indoorOutdoor" => [0, 'animalIndoorOutdoor'],
        "killDate" => [0, 'animalKillDate'],
        "killReason" => [0, 'animalKillReason'],
        "location" => [0, 'animalLocation'],
        "locationCoordinates" => [0, 'animalLocationCoordinates'],
        "locationDistance" => [0, 'animalLocationDistance'],
        "locationCitystate" => [0, 'animalLocationCitystate'],
        "locationState" => [0, 'animalLocationState'],
        "microchipped" => [0, 'animalMicrochipped'],
        "mixedBreed" => [0, 'animalMixedBreed'],
        "name" => [0, 'animalName'],
        "specialneeds" => [0, 'animalSpecialneeds'],
        "specialneedsDescription" => [0, 'animalSpecialneedsDescription'],
        "needsFoster" => [0, 'animalNeedsFoster'],
        "newPeople" => [0, 'animalNewPeople'],
        "notHousetrainedReason" => [0, 'animalNotHousetrainedReason'],
        "obedienceTraining" => [0, 'animalObedienceTraining'],
        "okWithAdults" => [0, 'animalOKWithAdults'],
        "okWithCats" => [0, 'animalOKWithCats'],
        "okWithDogs" => [0, 'animalOKWithDogs'],
        "okWithKids" => [0, 'animalOKWithKids'],
        "ownerExperience" => [0, 'animalOwnerExperience'],
        "pattern" => [0, 'animalPattern'],
        "patternId" => [0, 'animalPatternID'],
        "adoptionPending" => [0, 'animalAdoptionPending'],
        "primaryBreed" => [0, 'animalPrimaryBreed'],
        "primaryBreedId" => [0, 'animalPrimaryBreedID'],
        "rescueId" => [0, 'animalRescueID'],
        "searchString" => [0, 'animalSearchString'],
        "secondaryBreed" => [0, 'animalSecondaryBreed'],
        "secondaryBreedId" => [0, 'animalSecondaryBreedID'],
        "sex" => [0, 'animalSex'],
        "shedding" => [0, 'animalShedding'],
        "sizeCurrent" => [0, 'animalSizeCurrent'],
        "sizePotential" => [0, 'animalSizePotential'],
        "sizeUOM" => [0, 'animalSizeUOM'],
        "species" => [0, 'animalSpecies'],
        "speciesId" => [0, 'animalSpeciesID'],
        "sponsorable" => [0, 'animalSponsorable'],
        "sponsors" => [0, 'animalSponsors'],
        "sponsorshipDetails" => [0, 'animalSponsorshipDetails'],
        "sponsorshipMinimum" => [0, 'animalSponsorshipMinimum'],
        "status" => [0, 'animalStatus'],
        "statusId" => [0, 'animalStatusID'],
        "summary" => [0, 'animalSummary'],
        "tailType" => [0, 'animalTailType'],
        "thumbnailUrl" => [0, 'animalThumbnailUrl'],
        "uptodate" => [0, 'animalUptodate'],
        "updatedDate" => [0, 'animalUpdatedDate'],
        "url" => [0, 'animalUrl'],
        "vocal" => [0, 'animalVocal'],
        "yardRequired" => [0, 'animalYardRequired'],
        "affectionate" => [0, 'animalAffectionate'],
        "apartment" => [0, 'animalApartment'],
        "cratetrained" => [0, 'animalCratetrained'],
        "drools" => [0, 'animalDrools'],
        "eagerToPlease" => [0, 'animalEagerToPlease'],
        "escapes" => [0, 'animalEscapes'],
        "eventempered" => [0, 'animalEventempered'],
        "fetches" => [0, 'animalFetches'],
        "gentle" => [0, 'animalGentle'],
        "goodInCar" => [0, 'animalGoodInCar'],
        "goofy" => [0, 'animalGoofy'],
        "hasAllergies" => [0, 'animalHasAllergies'],
        "hearingImpaired" => [0, 'animalHearingImpaired'],
        "hypoallergenic" => [0, 'animalHypoallergenic'],
        "independent" => [0, 'animalIndependent'],
        "intelligent" => [0, 'animalIntelligent'],
        "lap" => [0, 'animalLap'],
        "leashtrained" => [0, 'animalLeashtrained'],
        "needsCompanion" => [0, 'animalNeedsCompanionAnimal'],
        "noCold" => [0, 'animalNoCold'],
        "noFemaleDogs" => [0, 'animalNoFemaleDogs'],
        "noHeat" => [0, 'animalNoHeat'],
        "noLargeDogs" => [0, 'animalNoLargeDogs'],
        "noMaleDogs" => [0, 'animalNoMaleDogs'],
        "noSmallDogs" => [0, 'animalNoSmallDogs'],
        "obedient" => [0, 'animalObedient'],
        "okForSeniors" => [0, 'animalOKForSeniors'],
        "okWithFarms" => [0, 'animalOKWithFarmAnimals'],
        "olderKidsOnly" => [0, 'animalOlderKidsOnly'],
        "ongoingMedical" => [0, 'animalOngoingMedical'],
        "playful" => [0, 'animalPlayful'],
        "playsToys" => [0, 'animalPlaysToys'],
        "predatory" => [0, 'animalPredatory'],
        "protective" => [0, 'animalProtective'],
        "sightImpaired" => [0, 'animalSightImpaired'],
        "skittish" => [0, 'animalSkittish'],
        "specialDiet" => [0, 'animalSpecialDiet'],
        "swims" => [0, 'animalSwims'],
        "timid" => [0, 'animalTimid'],
        "fosterEmail" => [0, 'fosterEmail'],
        "fosterFirstname" => [0, 'fosterFirstname'],
        "fosterLastname" => [0, 'fosterLastname'],
        "fosterName" => [0, 'fosterName'],
        "fosterPhoneCell" => [0, 'fosterPhoneCell'],
        "fosterPhoneHome" => [0, 'fosterPhoneHome'],
        "fosterSalutation" => [0, 'fosterSalutation'],
        "locationAddress" => [0, 'locationAddress'],
        "locationCity" => [0, 'locationCity'],
        "locationCountry" => [0, 'locationCountry'],
        "locationUrl" => [0, 'locationUrl'],
        "locationName" => [0, 'locationName'],
        "locationPhone" => [0, 'locationPhone'],
        "locationPostalcode" => [0, 'locationPostalcode'],
        "pictures" => [0, 'animalPictures'],
        "videos" => [0, 'animalVideos'],
        "videoUrls" => [0, 'animalVideoUrls'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Animal[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\Animal($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\Animal($data)];
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        $this->addSearchParameters($parameterArray);
    }
}