<?php
/**
 * Animals PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class PublicSearch implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "animalID" => 1,
        "animalOrgID" => 0,
        "animalActivityLevel" => 0,
        "animalAdoptedDate" => 0,
        "animalAdoptionFee" => 0,
        "animalAgeString" => 0,
        "animalAltered" => 0,
        "animalAvailableDate" => 0,
        "animalBirthdate" => 0,
        "animalBirthdateExact" => 0,
        "animalBreed" => 0,
        "animalCoatLength" => 0,
        "animalColor" => 0,
        "animalColorID" => 0,
        "animalColorDetails" => 0,
        "animalCourtesy" => 0,
        "animalDeclawed" => 0,
        "animalDescription" => 0,
        "animalDescriptionPlain" => 0,
        "animalDistinguishingMarks" => 0,
        "animalEarType" => 0,
        "animalEnergyLevel" => 0,
        "animalExerciseNeeds" => 0,
        "animalEyeColor" => 0,
        "animalFence" => 0,
        "animalFound" => 0,
        "animalFoundDate" => 0,
        "animalFoundPostalcode" => 0,
        "animalGeneralAge" => 0,
        "animalGeneralSizePotential" => 0,
        "animalGroomingNeeds" => 0,
        "animalHousetrained" => 0,
        "animalIndoorOutdoor" => 0,
        "animalKillDate" => 0,
        "animalKillReason" => 0,
        "animalLocation" => 0,
        "animalLocationCoordinates" => 0,
        "animalLocationDistance" => 0,
        "animalLocationCitystate" => 0,
        "animalLocationState" => 0,
        "animalMicrochipped" => 0,
        "animalMixedBreed" => 0,
        "animalName" => 0,
        "animalSpecialneeds" => 0,
        "animalSpecialneedsDescription" => 0,
        "animalNeedsFoster" => 0,
        "animalNewPeople" => 0,
        "animalNotHousetrainedReason" => 0,
        "animalObedienceTraining" => 0,
        "animalOKWithAdults" => 0,
        "animalOKWithCats" => 0,
        "animalOKWithDogs" => 0,
        "animalOKWithKids" => 0,
        "animalOwnerExperience" => 0,
        "animalPattern" => 0,
        "animalPatternID" => 0,
        "animalAdoptionPending" => 0,
        "animalPrimaryBreed" => 0,
        "animalPrimaryBreedID" => 0,
        "animalRescueID" => 0,
        "animalSearchString" => 0,
        "animalSecondaryBreed" => 0,
        "animalSecondaryBreedID" => 0,
        "animalSex" => 0,
        "animalShedding" => 0,
        "animalSizeCurrent" => 0,
        "animalSizePotential" => 0,
        "animalSizeUOM" => 0,
        "animalSpecies" => 0,
        "animalSpeciesID" => 0,
        "animalSponsorable" => 0,
        "animalSponsors" => 0,
        "animalSponsorshipDetails" => 0,
        "animalSponsorshipMinimum" => 0,
        "animalStatus" => 0,
        "animalStatusID" => 0,
        "animalSummary" => 0,
        "animalTailType" => 0,
        "animalThumbnailUrl" => 0,
        "animalUptodate" => 0,
        "animalUpdatedDate" => 0,
        "animalUrl" => 0,
        "animalVocal" => 0,
        "animalYardRequired" => 0,
        "animalAffectionate" => 0,
        "animalApartment" => 0,
        "animalCratetrained" => 0,
        "animalDrools" => 0,
        "animalEagerToPlease" => 0,
        "animalEscapes" => 0,
        "animalEventempered" => 0,
        "animalFetches" => 0,
        "animalGentle" => 0,
        "animalGoodInCar" => 0,
        "animalGoofy" => 0,
        "animalHasAllergies" => 0,
        "animalHearingImpaired" => 0,
        "animalHypoallergenic" => 0,
        "animalIndependent" => 0,
        "animalIntelligent" => 0,
        "animalLap" => 0,
        "animalLeashtrained" => 0,
        "animalNeedsCompanionAnimal" => 0,
        "animalNoCold" => 0,
        "animalNoFemaleDogs" => 0,
        "animalNoHeat" => 0,
        "animalNoLargeDogs" => 0,
        "animalNoMaleDogs" => 0,
        "animalNoSmallDogs" => 0,
        "animalObedient" => 0,
        "animalOKForSeniors" => 0,
        "animalOKWithFarmAnimals" => 0,
        "animalOlderKidsOnly" => 0,
        "animalOngoingMedical" => 0,
        "animalPlayful" => 0,
        "animalPlaysToys" => 0,
        "animalPredatory" => 0,
        "animalProtective" => 0,
        "animalSightImpaired" => 0,
        "animalSkittish" => 0,
        "animalSpecialDiet" => 0,
        "animalSwims" => 0,
        "animalTimid" => 0,
        "fosterEmail" => 0,
        "fosterFirstname" => 0,
        "fosterLastname" => 0,
        "fosterName" => 0,
        "fosterPhoneCell" => 0,
        "fosterPhoneHome" => 0,
        "fosterSalutation" => 0,
        "locationAddress" => 0,
        "locationCity" => 0,
        "locationCountry" => 0,
        "locationUrl" => 0,
        "locationName" => 0,
        "locationPhone" => 0,
        "locationState" => 0,
        "locationPostalcode" => 0,
        "animalPictures" => 0,
        "animalVideos" => 0,
        "animalVideoUrls" => 0,
    ];

    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animals';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicSearch';
    }

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