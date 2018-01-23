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
                $output[] = new \RescueGroups\Objects\Animal($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Animal($data)];
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