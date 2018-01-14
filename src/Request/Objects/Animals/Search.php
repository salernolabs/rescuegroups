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
        "animalID" => [1, 'animalID'],
        "animalActivityLevel" => [0, 'animalActivityLevel'],
        "animalAdoptedDate" => [0, 'animalAdoptedDate'],
        "animalAdoptionFee" => [0, 'animalAdoptionFee'],
        "animalAdoptionLead" => [0, 'animalAdoptionLead'],
        "animalAdoptionLeadID" => [0, 'animalAdoptionLeadID'],
        "animalAltered" => [0, 'animalAltered'],
        "animalApplicationID" => [0, 'animalApplicationID'],
        "animalAvailableDate" => [0, 'animalAvailableDate'],
        "animalBirthdate" => [0, 'animalBirthdate'],
        "animalBirthdateExact" => [0, 'animalBirthdateExact'],
        "animalBreed" => [0, 'animalBreed'],
        "animalCoatLength" => [0, 'animalCoatLength'],
        "animalColonyID" => [0, 'animalColonyID'],
        "animalColor" => [0, 'animalColor'],
        "animalColorID" => [0, 'animalColorID'],
        "animalColorDetails" => [0, 'animalColorDetails'],
        "animalCondition" => [0, 'animalCondition'],
        "animalConditionID" => [0, 'animalConditionID'],
        "animalCost" => [0, 'animalCost'],
        "animalCourtesy" => [0, 'animalCourtesy'],
        "animalCreatedDate" => [0, 'animalCreatedDate'],
        "animalCreatedBy" => [0, 'animalCreatedBy'],
        "animalCreatedByID" => [0, 'animalCreatedByID'],
        "animalCreatedTimeframe" => [0, 'animalCreatedTimeframe'],
        "animalDaysInFoster" => [0, 'animalDaysInFoster'],
        "animalDeclawed" => [0, 'animalDeclawed'],
        "animalDescription" => [0, 'animalDescription'],
        "animalDescriptionPlain" => [0, 'animalDescriptionPlain'],
        "animalDistinguishingMarks" => [0, 'animalDistinguishingMarks'],
        "animalAllowExport" => [0, 'animalAllowExport'],
        "animalEarType" => [0, 'animalEarType'],
        "animalEnergyLevel" => [0, 'animalEnergyLevel'],
        "animalExerciseNeeds" => [0, 'animalExerciseNeeds'],
        "animalEyeColor" => [0, 'animalEyeColor'],
        "animalFence" => [0, 'animalFence'],
        "animalFosterID" => [0, 'animalFosterID'],
        "animalFound" => [0, 'animalFound'],
        "animalFoundDate" => [0, 'animalFoundDate'],
        "animalFoundPostalcode" => [0, 'animalFoundPostalcode'],
        "animalGeneralAge" => [0, 'animalGeneralAge'],
        "animalGeneralSizePotential" => [0, 'animalGeneralSizePotential'],
        "animalGroomingNeeds" => [0, 'animalGroomingNeeds'],
        "animalHighlightOrder" => [0, 'animalHighlightOrder'],
        "animalHousetrained" => [0, 'animalHousetrained'],
        "animalIndoorOutdoor" => [0, 'animalIndoorOutdoor'],
        "animalIntakes" => [0, 'animalIntakes'],
        "animalInternalID" => [0, 'animalInternalID'],
        "animalKillDate" => [0, 'animalKillDate'],
        "animalKillReason" => [0, 'animalKillReason'],
        "animalUpdatedBy" => [0, 'animalUpdatedBy'],
        "animalUpdatedByID" => [0, 'animalUpdatedByID'],
        "animalUpdatedDate" => [0, 'animalUpdatedDate'],
        "animalUpdatedTimeframe" => [0, 'animalUpdatedTimeframe'],
        "animalLocationID" => [0, 'animalLocationID'],
        "animalLocationPublic" => [0, 'animalLocationPublic'],
        "animalMicrochipped" => [0, 'animalMicrochipped'],
        "animalMicrochipNumber" => [0, 'animalMicrochipNumber'],
        "animalMicrochipVendor" => [0, 'animalMicrochipVendor'],
        "animalMixedBreed" => [0, 'animalMixedBreed'],
        "animalName" => [0, 'animalName'],
        "animalSpecialneeds" => [0, 'animalSpecialneeds'],
        "animalSpecialneedsDescription" => [0, 'animalSpecialneedsDescription'],
        "animalNeedsFoster" => [0, 'animalNeedsFoster'],
        "animalNewPeople" => [0, 'animalNewPeople'],
        "animalNotes" => [0, 'animalNotes'],
        "animalNotHousetrainedReason" => [0, 'animalNotHousetrainedReason'],
        "animalObedienceTraining" => [0, 'animalObedienceTraining'],
        "animalOKWithAdults" => [0, 'animalOKWithAdults'],
        "animalOKWithCats" => [0, 'animalOKWithCats'],
        "animalOKWithDogs" => [0, 'animalOKWithDogs'],
        "animalOKWithKids" => [0, 'animalOKWithKids'],
        "animalOpenIntakes" => [0, 'animalOpenIntakes'],
        "animalOrigin" => [0, 'animalOrigin'],
        "animalOthernames" => [0, 'animalOthernames'],
        "animalOutcomes" => [0, 'animalOutcomes'],
        "animalOwnerExperience" => [0, 'animalOwnerExperience'],
        "animalOwnerID" => [0, 'animalOwnerID'],
        "animalPattern" => [0, 'animalPattern'],
        "animalPatternID" => [0, 'animalPatternID'],
        "animalAdoptionPending" => [0, 'animalAdoptionPending'],
        "animalPrimaryBreed" => [0, 'animalPrimaryBreed'],
        "animalPrimaryBreedID" => [0, 'animalPrimaryBreedID'],
        "animalReceivedDate" => [0, 'animalReceivedDate'],
        "animalRescueID" => [0, 'animalRescueID'],
        "animalSecondaryBreed" => [0, 'animalSecondaryBreed'],
        "animalSecondaryBreedID" => [0, 'animalSecondaryBreedID'],
        "animalSex" => [0, 'animalSex'],
        "animalShared" => [0, 'animalShared'],
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
        "animalTransferredToID" => [0, 'animalTransferredToID'],
        "animalUptodate" => [0, 'animalUptodate'],
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
        "ownerID" => [0, 'ownerID'],
        "ownerActive" => [0, 'ownerActive'],
        "ownerAddress" => [0, 'ownerAddress'],
        "ownerBounces" => [0, 'ownerBounces'],
        "ownerCarrier" => [0, 'ownerCarrier'],
        "ownerCity" => [0, 'ownerCity'],
        "ownerComment" => [0, 'ownerComment'],
        "ownerCompany" => [0, 'ownerCompany'],
        "ownerCountry" => [0, 'ownerCountry'],
        "ownerCounty" => [0, 'ownerCounty'],
        "ownerEmail" => [0, 'ownerEmail'],
        "ownerEmailAlt" => [0, 'ownerEmailAlt'],
        "ownerEmailPager" => [0, 'ownerEmailPager'],
        "ownerFax" => [0, 'ownerFax'],
        "ownerFirstname" => [0, 'ownerFirstname'],
        "ownerLastname" => [0, 'ownerLastname'],
        "ownerName" => [0, 'ownerName'],
        "ownerPhoneCell" => [0, 'ownerPhoneCell'],
        "ownerPhoneHome" => [0, 'ownerPhoneHome'],
        "ownerPhoneWork" => [0, 'ownerPhoneWork'],
        "ownerPhoneWorkExt" => [0, 'ownerPhoneWorkExt'],
        "ownerPlus4" => [0, 'ownerPlus4'],
        "ownerReferredBy" => [0, 'ownerReferredBy'],
        "ownerSalutation" => [0, 'ownerSalutation'],
        "ownerSendMail" => [0, 'ownerSendMail'],
        "ownerState" => [0, 'ownerState'],
        "ownerTitle" => [0, 'ownerTitle'],
        "ownerPostalcode" => [0, 'ownerPostalcode'],
        "colonyAnimals" => [0, 'colonyAnimals'],
        "colonyCaretakers" => [0, 'colonyCaretakers'],
        "colonyLocation" => [0, 'colonyLocation'],
        "colonyLocationID" => [0, 'colonyLocationID'],
        "colonyName" => [0, 'colonyName'],
        "colonyRegisteredDate" => [0, 'colonyRegisteredDate'],
        "colonySpecificLocation" => [0, 'colonySpecificLocation'],
        "fosterID" => [0, 'fosterID'],
        "fosterActive" => [0, 'fosterActive'],
        "fosterAddress" => [0, 'fosterAddress'],
        "fosterBounces" => [0, 'fosterBounces'],
        "fosterCarrier" => [0, 'fosterCarrier'],
        "fosterCity" => [0, 'fosterCity'],
        "fosterComment" => [0, 'fosterComment'],
        "fosterCompany" => [0, 'fosterCompany'],
        "fosterCountry" => [0, 'fosterCountry'],
        "fosterCounty" => [0, 'fosterCounty'],
        "fosterEmail" => [0, 'fosterEmail'],
        "fosterEmailAlt" => [0, 'fosterEmailAlt'],
        "fosterEmailPager" => [0, 'fosterEmailPager'],
        "fosterFax" => [0, 'fosterFax'],
        "fosterFirstname" => [0, 'fosterFirstname'],
        "fosterLastname" => [0, 'fosterLastname'],
        "fosterName" => [0, 'fosterName'],
        "fosterPhoneCell" => [0, 'fosterPhoneCell'],
        "fosterPhoneHome" => [0, 'fosterPhoneHome'],
        "fosterPhoneWork" => [0, 'fosterPhoneWork'],
        "fosterPhoneWorkExt" => [0, 'fosterPhoneWorkExt'],
        "fosterPlus4" => [0, 'fosterPlus4'],
        "fosterReferredBy" => [0, 'fosterReferredBy'],
        "fosterSalutation" => [0, 'fosterSalutation'],
        "fosterSendMail" => [0, 'fosterSendMail'],
        "fosterState" => [0, 'fosterState'],
        "fosterTitle" => [0, 'fosterTitle'],
        "fosterPostalcode" => [0, 'fosterPostalcode'],
        "locationAddress" => [0, 'locationAddress'],
        "locationAnimals" => [0, 'locationAnimals'],
        "locationCity" => [0, 'locationCity'],
        "locationColonies" => [0, 'locationColonies'],
        "locationCountry" => [0, 'locationCountry'],
        "locationUrl" => [0, 'locationUrl'],
        "locationEvents" => [0, 'locationEvents'],
        "locationMeetrequests" => [0, 'locationMeetrequests'],
        "locationName" => [0, 'locationName'],
        "locationPhone" => [0, 'locationPhone'],
        "locationState" => [0, 'locationState'],
        "locationPostalcode" => [0, 'locationPostalcode'],
        "submittedformID" => [0, 'submittedformID'],
        "submittedformAnimalID" => [0, 'submittedformAnimalID'],
        "submittedformAssignedToID" => [0, 'submittedformAssignedToID'],
        "submittedformCommentsCount" => [0, 'submittedformCommentsCount'],
        "submittedformCommentsInline" => [0, 'submittedformCommentsInline'],
        "submittedformCompletedDate" => [0, 'submittedformCompletedDate'],
        "submittedformFormName" => [0, 'submittedformFormName'],
        "submittedformPending" => [0, 'submittedformPending'],
        "submittedformStatus" => [0, 'submittedformStatus'],
        "submittedformStepsCount" => [0, 'submittedformStepsCount'],
        "submitterID" => [0, 'submitterID'],
        "submitterActive" => [0, 'submitterActive'],
        "submitterAddress" => [0, 'submitterAddress'],
        "submitterBounces" => [0, 'submitterBounces'],
        "submitterCarrier" => [0, 'submitterCarrier'],
        "submitterCity" => [0, 'submitterCity'],
        "submitterComment" => [0, 'submitterComment'],
        "submitterCompany" => [0, 'submitterCompany'],
        "submitterCountry" => [0, 'submitterCountry'],
        "submitterCounty" => [0, 'submitterCounty'],
        "submitterEmail" => [0, 'submitterEmail'],
        "submitterEmailAlt" => [0, 'submitterEmailAlt'],
        "submitterEmailPager" => [0, 'submitterEmailPager'],
        "submitterFax" => [0, 'submitterFax'],
        "submitterFirstname" => [0, 'submitterFirstname'],
        "submitterLastname" => [0, 'submitterLastname'],
        "submitterName" => [0, 'submitterName'],
        "submitterPhoneCell" => [0, 'submitterPhoneCell'],
        "submitterPhoneHome" => [0, 'submitterPhoneHome'],
        "submitterPhoneWork" => [0, 'submitterPhoneWork'],
        "submitterPhoneWorkExt" => [0, 'submitterPhoneWorkExt'],
        "submitterPlus4" => [0, 'submitterPlus4'],
        "submitterReferredBy" => [0, 'submitterReferredBy'],
        "submitterSalutation" => [0, 'submitterSalutation'],
        "submitterSendMail" => [0, 'submitterSendMail'],
        "submitterState" => [0, 'submitterState'],
        "submitterTitle" => [0, 'submitterTitle'],
        "submitterPostalcode" => [0, 'submitterPostalcode'],
        "transferredtoActive" => [0, 'transferredtoActive'],
        "transferredtoAddress" => [0, 'transferredtoAddress'],
        "transferredtoBounces" => [0, 'transferredtoBounces'],
        "transferredtoCarrier" => [0, 'transferredtoCarrier'],
        "transferredtoCity" => [0, 'transferredtoCity'],
        "transferredtoComment" => [0, 'transferredtoComment'],
        "transferredtoCompany" => [0, 'transferredtoCompany'],
        "transferredtoID" => [0, 'transferredtoID'],
        "transferredtoCountry" => [0, 'transferredtoCountry'],
        "transferredtoCounty" => [0, 'transferredtoCounty'],
        "transferredtoEmail" => [0, 'transferredtoEmail'],
        "transferredtoEmailAlt" => [0, 'transferredtoEmailAlt'],
        "transferredtoEmailPager" => [0, 'transferredtoEmailPager'],
        "transferredtoFax" => [0, 'transferredtoFax'],
        "transferredtoFirstname" => [0, 'transferredtoFirstname'],
        "transferredtoLastname" => [0, 'transferredtoLastname'],
        "transferredtoName" => [0, 'transferredtoName'],
        "transferredtoPhoneCell" => [0, 'transferredtoPhoneCell'],
        "transferredtoPhoneHome" => [0, 'transferredtoPhoneHome'],
        "transferredtoPhoneWork" => [0, 'transferredtoPhoneWork'],
        "transferredtoPhoneWorkExt" => [0, 'transferredtoPhoneWorkExt'],
        "transferredtoPlus4" => [0, 'transferredtoPlus4'],
        "transferredtoReferredBy" => [0, 'transferredtoReferredBy'],
        "transferredtoSalutation" => [0, 'transferredtoSalutation'],
        "transferredtoSendMail" => [0, 'transferredtoSendMail'],
        "transferredtoState" => [0, 'transferredtoState'],
        "transferredtoTitle" => [0, 'transferredtoTitle'],
        "transferredtoPostalcode" => [0, 'transferredtoPostalcode'],
        "animalGroups" => [0, 'animalGroups'],
        "animalExportAccounts" => [0, 'animalExportAccounts'],
        "animalPictures" => [0, 'animalPictures'],
        "animalVideos" => [0, 'animalVideos'],
        "animalVideoUrls" => [0, 'animalVideoUrls'],
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
        return 'search';
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