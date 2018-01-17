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
        "animalID" => [1, 'animalID'],
        "animalOrgID" => [0, 'animalOrgID'],
        "animalActivityLevel" => [0, 'animalActivityLevel'],
        "animalAdoptedDate" => [0, 'animalAdoptedDate'],
        "animalAdoptionFee" => [0, 'animalAdoptionFee'],
        "animalAgeString" => [0, 'animalAgeString'],
        "animalAltered" => [0, 'animalAltered'],
        "animalAvailableDate" => [0, 'animalAvailableDate'],
        "animalBirthdate" => [0, 'animalBirthdate'],
        "animalBirthdateExact" => [0, 'animalBirthdateExact'],
        "animalBreed" => [0, 'animalBreed'],
        "animalCoatLength" => [0, 'animalCoatLength'],
        "animalColor" => [0, 'animalColor'],
        "animalColorID" => [0, 'animalColorID'],
        "animalColorDetails" => [0, 'animalColorDetails'],
        "animalCourtesy" => [0, 'animalCourtesy'],
        "animalDeclawed" => [0, 'animalDeclawed'],
        "animalDescription" => [0, 'animalDescription'],
        "animalDescriptionPlain" => [0, 'animalDescriptionPlain'],
        "animalDistinguishingMarks" => [0, 'animalDistinguishingMarks'],
        "animalEarType" => [0, 'animalEarType'],
        "animalEnergyLevel" => [0, 'animalEnergyLevel'],
        "animalExerciseNeeds" => [0, 'animalExerciseNeeds'],
        "animalEyeColor" => [0, 'animalEyeColor'],
        "animalFence" => [0, 'animalFence'],
        "animalFound" => [0, 'animalFound'],
        "animalFoundDate" => [0, 'animalFoundDate'],
        "animalFoundPostalcode" => [0, 'animalFoundPostalcode'],
        "animalGeneralAge" => [0, 'animalGeneralAge'],
        "animalGeneralSizePotential" => [0, 'animalGeneralSizePotential'],
        "animalGroomingNeeds" => [0, 'animalGroomingNeeds'],
        "animalHousetrained" => [0, 'animalHousetrained'],
        "animalIndoorOutdoor" => [0, 'animalIndoorOutdoor'],
        "animalKillDate" => [0, 'animalKillDate'],
        "animalKillReason" => [0, 'animalKillReason'],
        "animalLocation" => [0, 'animalLocation'],
        "animalLocationCoordinates" => [0, 'animalLocationCoordinates'],
        "animalLocationDistance" => [0, 'animalLocationDistance'],
        "animalLocationCitystate" => [0, 'animalLocationCitystate'],
        "animalLocationState" => [0, 'animalLocationState'],
        "animalMicrochipped" => [0, 'animalMicrochipped'],
        "animalMixedBreed" => [0, 'animalMixedBreed'],
        "animalName" => [0, 'animalName'],
        "animalSpecialneeds" => [0, 'animalSpecialneeds'],
        "animalSpecialneedsDescription" => [0, 'animalSpecialneedsDescription'],
        "animalNeedsFoster" => [0, 'animalNeedsFoster'],
        "animalNewPeople" => [0, 'animalNewPeople'],
        "animalNotHousetrainedReason" => [0, 'animalNotHousetrainedReason'],
        "animalObedienceTraining" => [0, 'animalObedienceTraining'],
        "animalOKWithAdults" => [0, 'animalOKWithAdults'],
        "animalOKWithCats" => [0, 'animalOKWithCats'],
        "animalOKWithDogs" => [0, 'animalOKWithDogs'],
        "animalOKWithKids" => [0, 'animalOKWithKids'],
        "animalOwnerExperience" => [0, 'animalOwnerExperience'],
        "animalPattern" => [0, 'animalPattern'],
        "animalPatternID" => [0, 'animalPatternID'],
        "animalAdoptionPending" => [0, 'animalAdoptionPending'],
        "animalPrimaryBreed" => [0, 'animalPrimaryBreed'],
        "animalPrimaryBreedID" => [0, 'animalPrimaryBreedID'],
        "animalRescueID" => [0, 'animalRescueID'],
        "animalSearchString" => [0, 'animalSearchString'],
        "animalSecondaryBreed" => [0, 'animalSecondaryBreed'],
        "animalSecondaryBreedID" => [0, 'animalSecondaryBreedID'],
        "animalSex" => [0, 'animalSex'],
        "animalShedding" => [0, 'animalShedding'],
        "animalSizeCurrent" => [0, 'animalSizeCurrent'],
        "animalSizePotential" => [0, 'animalSizePotential'],
        "animalSizeUOM" => [0, 'animalSizeUOM'],
        "animalSpecies" => [0, 'animalSpecies'],
        "animalSpeciesID" => [0, 'animalSpeciesID'],
        "animalSponsorable" => [0, 'animalSponsorable'],
        "animalSponsors" => [0, 'animalSponsors'],
        "animalSponsorshipDetails" => [0, 'animalSponsorshipDetails'],
        "animalSponsorshipMinimum" => [0, 'animalSponsorshipMinimum'],
        "animalStatus" => [0, 'animalStatus'],
        "animalStatusID" => [0, 'animalStatusID'],
        "animalSummary" => [0, 'animalSummary'],
        "animalTailType" => [0, 'animalTailType'],
        "animalThumbnailUrl" => [0, 'animalThumbnailUrl'],
        "animalUptodate" => [0, 'animalUptodate'],
        "animalUpdatedDate" => [0, 'animalUpdatedDate'],
        "animalUrl" => [0, 'animalUrl'],
        "animalVocal" => [0, 'animalVocal'],
        "animalYardRequired" => [0, 'animalYardRequired'],
        "animalAffectionate" => [0, 'animalAffectionate'],
        "animalApartment" => [0, 'animalApartment'],
        "animalCratetrained" => [0, 'animalCratetrained'],
        "animalDrools" => [0, 'animalDrools'],
        "animalEagerToPlease" => [0, 'animalEagerToPlease'],
        "animalEscapes" => [0, 'animalEscapes'],
        "animalEventempered" => [0, 'animalEventempered'],
        "animalFetches" => [0, 'animalFetches'],
        "animalGentle" => [0, 'animalGentle'],
        "animalGoodInCar" => [0, 'animalGoodInCar'],
        "animalGoofy" => [0, 'animalGoofy'],
        "animalHasAllergies" => [0, 'animalHasAllergies'],
        "animalHearingImpaired" => [0, 'animalHearingImpaired'],
        "animalHypoallergenic" => [0, 'animalHypoallergenic'],
        "animalIndependent" => [0, 'animalIndependent'],
        "animalIntelligent" => [0, 'animalIntelligent'],
        "animalLap" => [0, 'animalLap'],
        "animalLeashtrained" => [0, 'animalLeashtrained'],
        "animalNeedsCompanionAnimal" => [0, 'animalNeedsCompanionAnimal'],
        "animalNoCold" => [0, 'animalNoCold'],
        "animalNoFemaleDogs" => [0, 'animalNoFemaleDogs'],
        "animalNoHeat" => [0, 'animalNoHeat'],
        "animalNoLargeDogs" => [0, 'animalNoLargeDogs'],
        "animalNoMaleDogs" => [0, 'animalNoMaleDogs'],
        "animalNoSmallDogs" => [0, 'animalNoSmallDogs'],
        "animalObedient" => [0, 'animalObedient'],
        "animalOKForSeniors" => [0, 'animalOKForSeniors'],
        "animalOKWithFarmAnimals" => [0, 'animalOKWithFarmAnimals'],
        "animalOlderKidsOnly" => [0, 'animalOlderKidsOnly'],
        "animalOngoingMedical" => [0, 'animalOngoingMedical'],
        "animalPlayful" => [0, 'animalPlayful'],
        "animalPlaysToys" => [0, 'animalPlaysToys'],
        "animalPredatory" => [0, 'animalPredatory'],
        "animalProtective" => [0, 'animalProtective'],
        "animalSightImpaired" => [0, 'animalSightImpaired'],
        "animalSkittish" => [0, 'animalSkittish'],
        "animalSpecialDiet" => [0, 'animalSpecialDiet'],
        "animalSwims" => [0, 'animalSwims'],
        "animalTimid" => [0, 'animalTimid'],
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
        "locationState" => [0, 'locationState'],
        "locationPostalcode" => [0, 'locationPostalcode'],
        "animalPictures" => [0, 'animalPictures'],
        "animalVideos" => [0, 'animalVideos'],
        "animalVideoUrls" => [0, 'animalVideoUrls'],
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