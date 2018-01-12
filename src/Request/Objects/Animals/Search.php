<?php
/**
 * Animals Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "animalID" => 1,
        "animalActivityLevel" => 0,
        "animalAdoptedDate" => 0,
        "animalAdoptionFee" => 0,
        "animalAdoptionLead" => 0,
        "animalAdoptionLeadID" => 0,
        "animalAltered" => 0,
        "animalApplicationID" => 0,
        "animalAvailableDate" => 0,
        "animalBirthdate" => 0,
        "animalBirthdateExact" => 0,
        "animalBreed" => 0,
        "animalCoatLength" => 0,
        "animalColonyID" => 0,
        "animalColor" => 0,
        "animalColorID" => 0,
        "animalColorDetails" => 0,
        "animalCondition" => 0,
        "animalConditionID" => 0,
        "animalCost" => 0,
        "animalCourtesy" => 0,
        "animalCreatedDate" => 0,
        "animalCreatedBy" => 0,
        "animalCreatedByID" => 0,
        "animalCreatedTimeframe" => 0,
        "animalDaysInFoster" => 0,
        "animalDeclawed" => 0,
        "animalDescription" => 0,
        "animalDescriptionPlain" => 0,
        "animalDistinguishingMarks" => 0,
        "animalAllowExport" => 0,
        "animalEarType" => 0,
        "animalEnergyLevel" => 0,
        "animalExerciseNeeds" => 0,
        "animalEyeColor" => 0,
        "animalFence" => 0,
        "animalFosterID" => 0,
        "animalFound" => 0,
        "animalFoundDate" => 0,
        "animalFoundPostalcode" => 0,
        "animalGeneralAge" => 0,
        "animalGeneralSizePotential" => 0,
        "animalGroomingNeeds" => 0,
        "animalHighlightOrder" => 0,
        "animalHousetrained" => 0,
        "animalIndoorOutdoor" => 0,
        "animalIntakes" => 0,
        "animalInternalID" => 0,
        "animalKillDate" => 0,
        "animalKillReason" => 0,
        "animalUpdatedBy" => 0,
        "animalUpdatedByID" => 0,
        "animalUpdatedDate" => 0,
        "animalUpdatedTimeframe" => 0,
        "animalLocationID" => 0,
        "animalLocationPublic" => 0,
        "animalMicrochipped" => 0,
        "animalMicrochipNumber" => 0,
        "animalMicrochipVendor" => 0,
        "animalMixedBreed" => 0,
        "animalName" => 0,
        "animalSpecialneeds" => 0,
        "animalSpecialneedsDescription" => 0,
        "animalNeedsFoster" => 0,
        "animalNewPeople" => 0,
        "animalNotes" => 0,
        "animalNotHousetrainedReason" => 0,
        "animalObedienceTraining" => 0,
        "animalOKWithAdults" => 0,
        "animalOKWithCats" => 0,
        "animalOKWithDogs" => 0,
        "animalOKWithKids" => 0,
        "animalOpenIntakes" => 0,
        "animalOrigin" => 0,
        "animalOthernames" => 0,
        "animalOutcomes" => 0,
        "animalOwnerExperience" => 0,
        "animalOwnerID" => 0,
        "animalPattern" => 0,
        "animalPatternID" => 0,
        "animalAdoptionPending" => 0,
        "animalPrimaryBreed" => 0,
        "animalPrimaryBreedID" => 0,
        "animalReceivedDate" => 0,
        "animalRescueID" => 0,
        "animalSecondaryBreed" => 0,
        "animalSecondaryBreedID" => 0,
        "animalSex" => 0,
        "animalShared" => 0,
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
        "ownerID" => 0,
        "ownerActive" => 0,
        "ownerAddress" => 0,
        "ownerBounces" => 0,
        "ownerCarrier" => 0,
        "ownerCity" => 0,
        "ownerComment" => 0,
        "ownerCompany" => 0,
        "ownerCountry" => 0,
        "ownerCounty" => 0,
        "ownerEmail" => 0,
        "ownerEmailAlt" => 0,
        "ownerEmailPager" => 0,
        "ownerFax" => 0,
        "ownerFirstname" => 0,
        "ownerLastname" => 0,
        "ownerName" => 0,
        "ownerPhoneCell" => 0,
        "ownerPhoneHome" => 0,
        "ownerPhoneWork" => 0,
        "ownerPhoneWorkExt" => 0,
        "ownerPlus4" => 0,
        "ownerReferredBy" => 0,
        "ownerSalutation" => 0,
        "ownerSendMail" => 0,
        "ownerState" => 0,
        "ownerTitle" => 0,
        "ownerPostalcode" => 0,
        "colonyAnimals" => 0,
        "colonyCaretakers" => 0,
        "colonyLocation" => 0,
        "colonyLocationID" => 0,
        "colonyName" => 0,
        "colonyRegisteredDate" => 0,
        "colonySpecificLocation" => 0,
        "fosterID" => 0,
        "fosterActive" => 0,
        "fosterAddress" => 0,
        "fosterBounces" => 0,
        "fosterCarrier" => 0,
        "fosterCity" => 0,
        "fosterComment" => 0,
        "fosterCompany" => 0,
        "fosterCountry" => 0,
        "fosterCounty" => 0,
        "fosterEmail" => 0,
        "fosterEmailAlt" => 0,
        "fosterEmailPager" => 0,
        "fosterFax" => 0,
        "fosterFirstname" => 0,
        "fosterLastname" => 0,
        "fosterName" => 0,
        "fosterPhoneCell" => 0,
        "fosterPhoneHome" => 0,
        "fosterPhoneWork" => 0,
        "fosterPhoneWorkExt" => 0,
        "fosterPlus4" => 0,
        "fosterReferredBy" => 0,
        "fosterSalutation" => 0,
        "fosterSendMail" => 0,
        "fosterState" => 0,
        "fosterTitle" => 0,
        "fosterPostalcode" => 0,
        "locationAddress" => 0,
        "locationAnimals" => 0,
        "locationCity" => 0,
        "locationColonies" => 0,
        "locationCountry" => 0,
        "locationUrl" => 0,
        "locationEvents" => 0,
        "locationMeetrequests" => 0,
        "locationName" => 0,
        "locationPhone" => 0,
        "locationState" => 0,
        "locationPostalcode" => 0,
        "submittedformID" => 0,
        "submittedformAnimalID" => 0,
        "submittedformAssignedToID" => 0,
        "submittedformCommentsCount" => 0,
        "submittedformCommentsInline" => 0,
        "submittedformCompletedDate" => 0,
        "submittedformFormName" => 0,
        "submittedformPending" => 0,
        "submittedformStatus" => 0,
        "submittedformStepsCount" => 0,
        "submitterID" => 0,
        "submitterActive" => 0,
        "submitterAddress" => 0,
        "submitterBounces" => 0,
        "submitterCarrier" => 0,
        "submitterCity" => 0,
        "submitterComment" => 0,
        "submitterCompany" => 0,
        "submitterCountry" => 0,
        "submitterCounty" => 0,
        "submitterEmail" => 0,
        "submitterEmailAlt" => 0,
        "submitterEmailPager" => 0,
        "submitterFax" => 0,
        "submitterFirstname" => 0,
        "submitterLastname" => 0,
        "submitterName" => 0,
        "submitterPhoneCell" => 0,
        "submitterPhoneHome" => 0,
        "submitterPhoneWork" => 0,
        "submitterPhoneWorkExt" => 0,
        "submitterPlus4" => 0,
        "submitterReferredBy" => 0,
        "submitterSalutation" => 0,
        "submitterSendMail" => 0,
        "submitterState" => 0,
        "submitterTitle" => 0,
        "submitterPostalcode" => 0,
        "transferredtoActive" => 0,
        "transferredtoAddress" => 0,
        "transferredtoBounces" => 0,
        "transferredtoCarrier" => 0,
        "transferredtoCity" => 0,
        "transferredtoComment" => 0,
        "transferredtoCompany" => 0,
        "transferredtoID" => 0,
        "transferredtoCountry" => 0,
        "transferredtoCounty" => 0,
        "transferredtoEmail" => 0,
        "transferredtoEmailAlt" => 0,
        "transferredtoEmailPager" => 0,
        "transferredtoFax" => 0,
        "transferredtoFirstname" => 0,
        "transferredtoLastname" => 0,
        "transferredtoName" => 0,
        "transferredtoPhoneCell" => 0,
        "transferredtoPhoneHome" => 0,
        "transferredtoPhoneWork" => 0,
        "transferredtoPhoneWorkExt" => 0,
        "transferredtoPlus4" => 0,
        "transferredtoReferredBy" => 0,
        "transferredtoSalutation" => 0,
        "transferredtoSendMail" => 0,
        "transferredtoState" => 0,
        "transferredtoTitle" => 0,
        "transferredtoPostalcode" => 0,
        "animalGroups" => 0,
        "animalExportAccounts" => 0,
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
        return 'search';
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

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\Animal[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\Animal($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\Animal($data)];
    }

}