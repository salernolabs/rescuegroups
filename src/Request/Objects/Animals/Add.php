<?php
/**
 * Animals Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "animalActivityLevel" => 0,
        "animalAdoptedDate" => 0,
        "animalAdoptionFee" => 0,
        "animalAdoptionLeadID" => 0,
        "animalAdoptionPending" => 1,
        "animalAltered" => 0,
        "animalApplicationID" => 0,
        "animalAvailableDate" => 0,
        "animalBirthdate" => 0,
        "animalBirthdateExact" => 1,
        "animalCoatLength" => 0,
        "animalColonyID" => 0,
        "animalColorID" => 0,
        "animalColorDetails" => 0,
        "animalConditionID" => 0,
        "animalCourtesy" => 1,
        "animalDeclawed" => 0,
        "animalDescription" => 0,
        "animalDistinguishingMarks" => 0,
        "animalAllowExport" => 0,
        "animalEarType" => 0,
        "animalEnergyLevel" => 0,
        "animalExerciseNeeds" => 0,
        "animalEyeColor" => 0,
        "animalFence" => 0,
        "animalFosterID" => 0,
        "animalFound" => 1,
        "animalFoundDate" => 0,
        "animalFoundPostalcode" => 0,
        "animalGeneralAge" => 0,
        "animalGeneralSizePotential" => 0,
        "animalGroomingNeeds" => 0,
        "animalHighlightOrder" => 1,
        "animalHousetrained" => 0,
        "animalIndoorOutdoor" => 0,
        "animalInternalID" => 0,
        "animalKillDate" => 0,
        "animalKillReason" => 0,
        "animalLocationID" => 0,
        "animalLocationPublic" => 1,
        "animalMicrochipNumber" => 0,
        "animalMicrochipVendor" => 0,
        "animalMixedBreed" => 0,
        "animalName" => 1,
        "animalNeedsFoster" => 0,
        "animalNewPeople" => 0,
        "animalNotes" => 0,
        "animalNotHousetrainedReason" => 0,
        "animalObedienceTraining" => 0,
        "animalOKWithAdults" => 0,
        "animalOKWithCats" => 0,
        "animalOKWithDogs" => 0,
        "animalOKWithKids" => 0,
        "animalOrigin" => 0,
        "animalOthernames" => 0,
        "animalOwnerExperience" => 0,
        "animalOwnerID" => 0,
        "animalPatternID" => 0,
        "animalPrimaryBreedID" => 0,
        "animalReceivedDate" => 0,
        "animalRescueID" => 0,
        "animalSecondaryBreedID" => 0,
        "animalSex" => 0,
        "animalShared" => 0,
        "animalShedding" => 0,
        "animalSizeCurrent" => 0,
        "animalSizePotential" => 0,
        "animalSizeUOM" => 0,
        "animalSpecialneeds" => 0,
        "animalSpecialneedsDescription" => 0,
        "animalSpeciesID" => 1,
        "animalSponsorable" => 1,
        "animalSponsors" => 0,
        "animalSponsorshipDetails" => 0,
        "animalSponsorshipMinimum" => 0,
        "animalStatusID" => 1,
        "animalSummary" => 0,
        "animalTailType" => 0,
        "animalTransferredToID" => 0,
        "animalUptodate" => 0,
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
        "animalGroups" => 0,
        "animalExportAccounts" => 0,
    ];

    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
        return 'add';
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