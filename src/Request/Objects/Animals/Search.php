<?php
/**
 * Animals Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class Search extends \RescueGroups\Request\Objects\Base implements
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
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'animalID'],
        "activityLevel" => [0, 'animalActivityLevel'],
        "adoptedDate" => [0, 'animalAdoptedDate'],
        "adoptionFee" => [0, 'animalAdoptionFee'],
        "adoptionLead" => [0, 'animalAdoptionLead'],
        "adoptionLeadId" => [0, 'animalAdoptionLeadID'],
        "altered" => [0, 'animalAltered'],
        "applicationId" => [0, 'animalApplicationID'],
        "availableDate" => [0, 'animalAvailableDate'],
        "birthdate" => [0, 'animalBirthdate'],
        "birthdateExact" => [0, 'animalBirthdateExact'],
        "breed" => [0, 'animalBreed'],
        "coatLength" => [0, 'animalCoatLength'],
        "colonyId" => [0, 'animalColonyID'],
        "color" => [0, 'animalColor'],
        "colorId" => [0, 'animalColorID'],
        "colorDetails" => [0, 'animalColorDetails'],
        "condition" => [0, 'animalCondition'],
        "conditionId" => [0, 'animalConditionID'],
        "cost" => [0, 'animalCost'],
        "courtesy" => [0, 'animalCourtesy'],
        "createdDate" => [0, 'animalCreatedDate'],
        "createdBy" => [0, 'animalCreatedBy'],
        "createdById" => [0, 'animalCreatedByID'],
        "createdTimeframe" => [0, 'animalCreatedTimeframe'],
        "daysInFoster" => [0, 'animalDaysInFoster'],
        "declawed" => [0, 'animalDeclawed'],
        "description" => [0, 'animalDescription'],
        "descriptionPlain" => [0, 'animalDescriptionPlain'],
        "distinguishingMarks" => [0, 'animalDistinguishingMarks'],
        "allowExport" => [0, 'animalAllowExport'],
        "earType" => [0, 'animalEarType'],
        "energyLevel" => [0, 'animalEnergyLevel'],
        "exerciseNeeds" => [0, 'animalExerciseNeeds'],
        "eyeColor" => [0, 'animalEyeColor'],
        "fence" => [0, 'animalFence'],
        "fosterId" => [0, 'animalFosterID'],
        "found" => [0, 'animalFound'],
        "foundDate" => [0, 'animalFoundDate'],
        "foundPostalcode" => [0, 'animalFoundPostalcode'],
        "generalAge" => [0, 'animalGeneralAge'],
        "generalSizePotential" => [0, 'animalGeneralSizePotential'],
        "groomingNeeds" => [0, 'animalGroomingNeeds'],
        "highlightOrder" => [0, 'animalHighlightOrder'],
        "housetrained" => [0, 'animalHousetrained'],
        "indoorOutdoor" => [0, 'animalIndoorOutdoor'],
        "intakes" => [0, 'animalIntakes'],
        "internalId" => [0, 'animalInternalID'],
        "killDate" => [0, 'animalKillDate'],
        "killReason" => [0, 'animalKillReason'],
        "updatedBy" => [0, 'animalUpdatedBy'],
        "updatedById" => [0, 'animalUpdatedByID'],
        "updatedDate" => [0, 'animalUpdatedDate'],
        "updatedTimeframe" => [0, 'animalUpdatedTimeframe'],
        "locationId" => [0, 'animalLocationID'],
        "locationPublic" => [0, 'animalLocationPublic'],
        "microchipped" => [0, 'animalMicrochipped'],
        "microchipNumber" => [0, 'animalMicrochipNumber'],
        "microchipVendor" => [0, 'animalMicrochipVendor'],
        "mixedBreed" => [0, 'animalMixedBreed'],
        "name" => [0, 'animalName'],
        "specialneeds" => [0, 'animalSpecialneeds'],
        "specialneedsDescription" => [0, 'animalSpecialneedsDescription'],
        "needsFoster" => [0, 'animalNeedsFoster'],
        "newPeople" => [0, 'animalNewPeople'],
        "notes" => [0, 'animalNotes'],
        "notHousetrainedReason" => [0, 'animalNotHousetrainedReason'],
        "obedienceTraining" => [0, 'animalObedienceTraining'],
        "okWithAdults" => [0, 'animalOKWithAdults'],
        "okWithCats" => [0, 'animalOKWithCats'],
        "okWithDogs" => [0, 'animalOKWithDogs'],
        "okWithKids" => [0, 'animalOKWithKids'],
        "openIntakes" => [0, 'animalOpenIntakes'],
        "origin" => [0, 'animalOrigin'],
        "othernames" => [0, 'animalOthernames'],
        "outcomes" => [0, 'animalOutcomes'],
        "ownerExperience" => [0, 'animalOwnerExperience'],
        "ownerId" => [0, 'animalOwnerID'],
        "pattern" => [0, 'animalPattern'],
        "patternId" => [0, 'animalPatternID'],
        "adoptionPending" => [0, 'animalAdoptionPending'],
        "primaryBreed" => [0, 'animalPrimaryBreed'],
        "primaryBreedId" => [0, 'animalPrimaryBreedID'],
        "receivedDate" => [0, 'animalReceivedDate'],
        "rescueId" => [0, 'animalRescueID'],
        "secondaryBreed" => [0, 'animalSecondaryBreed'],
        "secondaryBreedId" => [0, 'animalSecondaryBreedID'],
        "sex" => [0, 'animalSex'],
        "shared" => [0, 'animalShared'],
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
        "transferredToId" => [0, 'animalTransferredToID'],
        "uptodate" => [0, 'animalUptodate'],
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
        "colonys" => [0, 'colonyAnimals'],
        "colonyCaretakers" => [0, 'colonyCaretakers'],
        "colonyLocation" => [0, 'colonyLocation'],
        "colonyLocationId" => [0, 'colonyLocationID'],
        "colonyName" => [0, 'colonyName'],
        "colonyRegisteredDate" => [0, 'colonyRegisteredDate'],
        "colonySpecificLocation" => [0, 'colonySpecificLocation'],
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
        "locations" => [0, 'locationAnimals'],
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
        "submittedformId" => [0, 'submittedformID'],
        "submittedformAssignedToId" => [0, 'submittedformAssignedToID'],
        "submittedformCommentsCount" => [0, 'submittedformCommentsCount'],
        "submittedformCommentsInline" => [0, 'submittedformCommentsInline'],
        "submittedformCompletedDate" => [0, 'submittedformCompletedDate'],
        "submittedformFormName" => [0, 'submittedformFormName'],
        "submittedformPending" => [0, 'submittedformPending'],
        "submittedformStatus" => [0, 'submittedformStatus'],
        "submittedformStepsCount" => [0, 'submittedformStepsCount'],
        "submitterId" => [0, 'submitterID'],
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
        "transferredtoId" => [0, 'transferredtoID'],
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
        "groups" => [0, 'animalGroups'],
        "exportAccounts" => [0, 'animalExportAccounts'],
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