<?php
/**
 * Animal Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class Animal extends \RescueGroups\Objects\Animal implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Adoption lead
     *
     * @var string
     */
    public $adoptionLead = null;

    /**
     * Breed
     *
     * @var string
     */
    public $breed = null;

    /**
     * Color
     *
     * @var string
     */
    public $color = null;

    /**
     * Condition
     *
     * @var string
     */
    public $condition = null;

    /**
     * Cost
     *
     * @var string
     */
    public $cost = null;

    /**
     * Created
     *
     * @var \DateTime
     */
    public $createdDate = null;

    /**
     * Created by
     *
     * @var string
     */
    public $createdBy = null;

    /**
     * Created by ID
     *
     * @var integer
     */
    public $createdById = null;

    /**
     * Created time frame
     *
     * @var string
     */
    public $createdTimeframe = null;

    /**
     * Days in Foster
     *
     * @var string
     */
    public $daysInFoster = null;

    /**
     * Description (no html)
     *
     * @var string
     */
    public $descriptionPlain = null;

    /**
     * Intakes
     *
     * @var string
     */
    public $intakes = null;

    /**
     * Updated by
     *
     * @var string
     */
    public $updatedBy = null;

    /**
     * Updated by ID
     *
     * @var integer
     */
    public $updatedById = null;

    /**
     * Last updated
     *
     * @var \DateTime
     */
    public $updatedDate = null;

    /**
     * Updated timeframe
     *
     * @var string
     */
    public $updatedTimeframe = null;

    /**
     * Microchipped
     *
     * @var string
     */
    public $microchipped = null;

    /**
     * Open Intakes
     *
     * @var string
     */
    public $openIntakes = null;

    /**
     * Outcomes
     *
     * @var string
     */
    public $outcomes = null;

    /**
     * Pattern
     *
     * @var string
     */
    public $pattern = null;

    /**
     * Primary breed
     *
     * @var string
     */
    public $primaryBreed = null;

    /**
     * Secondary Breed
     *
     * @var string
     */
    public $secondaryBreed = null;

    /**
     * Species
     *
     * @var string
     */
    public $species = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Active
     *
     * @var string
     */
    public $ownerActive = null;

    /**
     * Address
     *
     * @var string
     */
    public $ownerAddress = null;

    /**
     * Bounced Emails
     *
     * @var string
     */
    public $ownerBounces = null;

    /**
     * Carrier
     *
     * @var string
     */
    public $ownerCarrier = null;

    /**
     * City
     *
     * @var string
     */
    public $ownerCity = null;

    /**
     * Comment
     *
     * @var string
     */
    public $ownerComment = null;

    /**
     * Company
     *
     * @var string
     */
    public $ownerCompany = null;

    /**
     * Country
     *
     * @var string
     */
    public $ownerCountry = null;

    /**
     * County
     *
     * @var string
     */
    public $ownerCounty = null;

    /**
     * Email
     *
     * @var string
     */
    public $ownerEmail = null;

    /**
     * Email (Alternate)
     *
     * @var string
     */
    public $ownerEmailAlt = null;

    /**
     * Email (Text/Pager)
     *
     * @var string
     */
    public $ownerEmailPager = null;

    /**
     * Fax
     *
     * @var string
     */
    public $ownerFax = null;

    /**
     * First Name
     *
     * @var string
     */
    public $ownerFirstname = null;

    /**
     * Last Name
     *
     * @var string
     */
    public $ownerLastname = null;

    /**
     * Name
     *
     * @var string
     */
    public $ownerName = null;

    /**
     * Phone (Cell)
     *
     * @var string
     */
    public $ownerPhoneCell = null;

    /**
     * Phone (Home)
     *
     * @var string
     */
    public $ownerPhoneHome = null;

    /**
     * Phone (Work)
     *
     * @var string
     */
    public $ownerPhoneWork = null;

    /**
     * Phone Extension (Work)
     *
     * @var string
     */
    public $ownerPhoneWorkExt = null;

    /**
     * Plus4
     *
     * @var string
     */
    public $ownerPlus4 = null;

    /**
     * Referred By
     *
     * @var string
     */
    public $ownerReferredBy = null;

    /**
     * Salutation
     *
     * @var string
     */
    public $ownerSalutation = null;

    /**
     * Send Mail
     *
     * @var string
     */
    public $ownerSendMail = null;

    /**
     * State
     *
     * @var string
     */
    public $ownerState = null;

    /**
     * Title
     *
     * @var string
     */
    public $ownerTitle = null;

    /**
     * Zip/Postal Code
     *
     * @var string
     */
    public $ownerPostalcode = null;

    /**
     * Animals
     *
     * @var string
     */
    public $colonys = null;

    /**
     * Caretakers
     *
     * @var string
     */
    public $colonyCaretakers = null;

    /**
     * Location
     *
     * @var string
     */
    public $colonyLocation = null;

    /**
     * Location
     *
     * @var integer
     */
    public $colonyLocationId = null;

    /**
     * Colony
     *
     * @var string
     */
    public $colonyName = null;

    /**
     * Registered
     *
     * @var \DateTime
     */
    public $colonyRegisteredDate = null;

    /**
     * Specific Location
     *
     * @var string
     */
    public $colonySpecificLocation = null;

    /**
     * Active
     *
     * @var string
     */
    public $fosterActive = null;

    /**
     * Address
     *
     * @var string
     */
    public $fosterAddress = null;

    /**
     * Bounced Emails
     *
     * @var string
     */
    public $fosterBounces = null;

    /**
     * Carrier
     *
     * @var string
     */
    public $fosterCarrier = null;

    /**
     * City
     *
     * @var string
     */
    public $fosterCity = null;

    /**
     * Comment
     *
     * @var string
     */
    public $fosterComment = null;

    /**
     * Company
     *
     * @var string
     */
    public $fosterCompany = null;

    /**
     * Country
     *
     * @var string
     */
    public $fosterCountry = null;

    /**
     * County
     *
     * @var string
     */
    public $fosterCounty = null;

    /**
     * Email
     *
     * @var string
     */
    public $fosterEmail = null;

    /**
     * Email (Alternate)
     *
     * @var string
     */
    public $fosterEmailAlt = null;

    /**
     * Email (Text/Pager)
     *
     * @var string
     */
    public $fosterEmailPager = null;

    /**
     * Fax
     *
     * @var string
     */
    public $fosterFax = null;

    /**
     * First Name
     *
     * @var string
     */
    public $fosterFirstname = null;

    /**
     * Last Name
     *
     * @var string
     */
    public $fosterLastname = null;

    /**
     * Foster
     *
     * @var string
     */
    public $fosterName = null;

    /**
     * Phone (Cell)
     *
     * @var string
     */
    public $fosterPhoneCell = null;

    /**
     * Phone (Home)
     *
     * @var string
     */
    public $fosterPhoneHome = null;

    /**
     * Phone (Work)
     *
     * @var string
     */
    public $fosterPhoneWork = null;

    /**
     * Phone Extension (Work)
     *
     * @var string
     */
    public $fosterPhoneWorkExt = null;

    /**
     * Plus4
     *
     * @var string
     */
    public $fosterPlus4 = null;

    /**
     * Referred By
     *
     * @var string
     */
    public $fosterReferredBy = null;

    /**
     * Salutation
     *
     * @var string
     */
    public $fosterSalutation = null;

    /**
     * Send Mail
     *
     * @var string
     */
    public $fosterSendMail = null;

    /**
     * State
     *
     * @var string
     */
    public $fosterState = null;

    /**
     * Title
     *
     * @var string
     */
    public $fosterTitle = null;

    /**
     * Zip/Postal Code
     *
     * @var string
     */
    public $fosterPostalcode = null;

    /**
     * Address
     *
     * @var string
     */
    public $locationAddress = null;

    /**
     * Animals
     *
     * @var string
     */
    public $locations = null;

    /**
     * City
     *
     * @var string
     */
    public $locationCity = null;

    /**
     * Colonies
     *
     * @var string
     */
    public $locationColonies = null;

    /**
     * Country
     *
     * @var string
     */
    public $locationCountry = null;

    /**
     * Link
     *
     * @var string
     */
    public $locationUrl = null;

    /**
     * Events
     *
     * @var string
     */
    public $locationEvents = null;

    /**
     * Meet Requests
     *
     * @var string
     */
    public $locationMeetrequests = null;

    /**
     * Location
     *
     * @var string
     */
    public $locationName = null;

    /**
     * Phone
     *
     * @var string
     */
    public $locationPhone = null;

    /**
     * State
     *
     * @var string
     */
    public $locationState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $locationPostalcode = null;

    /**
     * Form ID
     *
     * @var string
     */
    public $submittedformId = null;

    /**
     * Assigned To
     *
     * @var string
     */
    public $submittedformAssignedToId = null;

    /**
     * Comments
     *
     * @var string
     */
    public $submittedformCommentsCount = null;

    /**
     * Comments (inline)
     *
     * @var string
     */
    public $submittedformCommentsInline = null;

    /**
     * Submitted
     *
     * @var \DateTime
     */
    public $submittedformCompletedDate = null;

    /**
     * Form
     *
     * @var string
     */
    public $submittedformFormName = null;

    /**
     * Open
     *
     * @var string
     */
    public $submittedformPending = null;

    /**
     * Status
     *
     * @var string
     */
    public $submittedformStatus = null;

    /**
     * Steps
     *
     * @var string
     */
    public $submittedformStepsCount = null;

    /**
     * Submitter ID
     *
     * @var integer
     */
    public $submitterId = null;

    /**
     * Active
     *
     * @var string
     */
    public $submitterActive = null;

    /**
     * Address
     *
     * @var string
     */
    public $submitterAddress = null;

    /**
     * Bounced Emails
     *
     * @var string
     */
    public $submitterBounces = null;

    /**
     * Carrier
     *
     * @var string
     */
    public $submitterCarrier = null;

    /**
     * City
     *
     * @var string
     */
    public $submitterCity = null;

    /**
     * Comment
     *
     * @var string
     */
    public $submitterComment = null;

    /**
     * Company
     *
     * @var string
     */
    public $submitterCompany = null;

    /**
     * Country
     *
     * @var string
     */
    public $submitterCountry = null;

    /**
     * County
     *
     * @var string
     */
    public $submitterCounty = null;

    /**
     * Email
     *
     * @var string
     */
    public $submitterEmail = null;

    /**
     * Email (Alternate)
     *
     * @var string
     */
    public $submitterEmailAlt = null;

    /**
     * Email (Text/Pager)
     *
     * @var string
     */
    public $submitterEmailPager = null;

    /**
     * Fax
     *
     * @var string
     */
    public $submitterFax = null;

    /**
     * First Name
     *
     * @var string
     */
    public $submitterFirstname = null;

    /**
     * Last Name
     *
     * @var string
     */
    public $submitterLastname = null;

    /**
     * Name
     *
     * @var string
     */
    public $submitterName = null;

    /**
     * Phone (Cell)
     *
     * @var string
     */
    public $submitterPhoneCell = null;

    /**
     * Phone (Home)
     *
     * @var string
     */
    public $submitterPhoneHome = null;

    /**
     * Phone (Work)
     *
     * @var string
     */
    public $submitterPhoneWork = null;

    /**
     * Phone Extension (Work)
     *
     * @var string
     */
    public $submitterPhoneWorkExt = null;

    /**
     * Plus4
     *
     * @var string
     */
    public $submitterPlus4 = null;

    /**
     * Referred By
     *
     * @var string
     */
    public $submitterReferredBy = null;

    /**
     * Salutation
     *
     * @var string
     */
    public $submitterSalutation = null;

    /**
     * Send Mail
     *
     * @var string
     */
    public $submitterSendMail = null;

    /**
     * State
     *
     * @var string
     */
    public $submitterState = null;

    /**
     * Title
     *
     * @var string
     */
    public $submitterTitle = null;

    /**
     * Zip/Postal Code
     *
     * @var string
     */
    public $submitterPostalcode = null;

    /**
     * Active
     *
     * @var string
     */
    public $transferredtoActive = null;

    /**
     * Address
     *
     * @var string
     */
    public $transferredtoAddress = null;

    /**
     * Bounced Emails
     *
     * @var string
     */
    public $transferredtoBounces = null;

    /**
     * Carrier
     *
     * @var string
     */
    public $transferredtoCarrier = null;

    /**
     * City
     *
     * @var string
     */
    public $transferredtoCity = null;

    /**
     * Comment
     *
     * @var string
     */
    public $transferredtoComment = null;

    /**
     * Company
     *
     * @var string
     */
    public $transferredtoCompany = null;

    /**
     * Transferred To ID
     *
     * @var string
     */
    public $transferredtoId = null;

    /**
     * Country
     *
     * @var string
     */
    public $transferredtoCountry = null;

    /**
     * County
     *
     * @var string
     */
    public $transferredtoCounty = null;

    /**
     * Email
     *
     * @var string
     */
    public $transferredtoEmail = null;

    /**
     * Email (Alternate)
     *
     * @var string
     */
    public $transferredtoEmailAlt = null;

    /**
     * Email (Text/Pager)
     *
     * @var string
     */
    public $transferredtoEmailPager = null;

    /**
     * Fax
     *
     * @var string
     */
    public $transferredtoFax = null;

    /**
     * First Name
     *
     * @var string
     */
    public $transferredtoFirstname = null;

    /**
     * Last Name
     *
     * @var string
     */
    public $transferredtoLastname = null;

    /**
     * Transferred to Name
     *
     * @var string
     */
    public $transferredtoName = null;

    /**
     * Phone (Cell)
     *
     * @var string
     */
    public $transferredtoPhoneCell = null;

    /**
     * Phone (Home)
     *
     * @var string
     */
    public $transferredtoPhoneHome = null;

    /**
     * Phone (Work)
     *
     * @var string
     */
    public $transferredtoPhoneWork = null;

    /**
     * Phone Extension (Work)
     *
     * @var string
     */
    public $transferredtoPhoneWorkExt = null;

    /**
     * Plus4
     *
     * @var string
     */
    public $transferredtoPlus4 = null;

    /**
     * Referred By
     *
     * @var string
     */
    public $transferredtoReferredBy = null;

    /**
     * Salutation
     *
     * @var string
     */
    public $transferredtoSalutation = null;

    /**
     * Send Mail
     *
     * @var string
     */
    public $transferredtoSendMail = null;

    /**
     * State
     *
     * @var string
     */
    public $transferredtoState = null;

    /**
     * Title
     *
     * @var string
     */
    public $transferredtoTitle = null;

    /**
     * Zip/Postal Code
     *
     * @var string
     */
    public $transferredtoPostalcode = null;

    /**
     * Pictures
     *
     * @var string
     */
    public $pictures = null;

    /**
     * Videos
     *
     * @var string
     */
    public $videos = null;

    /**
     * Video URLs
     *
     * @var string
     */
    public $videoUrls = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'animalID' => 'id',
            'animalActivityLevel' => 'activityLevel',
            'animalAdoptedDate' => 'adoptedDate',
            'animalAdoptionFee' => 'adoptionFee',
            'animalAdoptionLead' => 'adoptionLead',
            'animalAdoptionLeadID' => 'adoptionLeadId',
            'animalAltered' => 'altered',
            'animalApplicationID' => 'applicationId',
            'animalAvailableDate' => 'availableDate',
            'animalBirthdate' => 'birthdate',
            'animalBirthdateExact' => 'birthdateExact',
            'animalBreed' => 'breed',
            'animalCoatLength' => 'coatLength',
            'animalColonyID' => 'colonyId',
            'animalColor' => 'color',
            'animalColorID' => 'colorId',
            'animalColorDetails' => 'colorDetails',
            'animalCondition' => 'condition',
            'animalConditionID' => 'conditionId',
            'animalCost' => 'cost',
            'animalCourtesy' => 'courtesy',
            'animalCreatedDate' => 'createdDate',
            'animalCreatedBy' => 'createdBy',
            'animalCreatedByID' => 'createdById',
            'animalCreatedTimeframe' => 'createdTimeframe',
            'animalDaysInFoster' => 'daysInFoster',
            'animalDeclawed' => 'declawed',
            'animalDescription' => 'description',
            'animalDescriptionPlain' => 'descriptionPlain',
            'animalDistinguishingMarks' => 'distinguishingMarks',
            'animalAllowExport' => 'allowExport',
            'animalEarType' => 'earType',
            'animalEnergyLevel' => 'energyLevel',
            'animalExerciseNeeds' => 'exerciseNeeds',
            'animalEyeColor' => 'eyeColor',
            'animalFence' => 'fence',
            'animalFosterID' => 'fosterId',
            'animalFound' => 'found',
            'animalFoundDate' => 'foundDate',
            'animalFoundPostalcode' => 'foundPostalcode',
            'animalGeneralAge' => 'generalAge',
            'animalGeneralSizePotential' => 'generalSizePotential',
            'animalGroomingNeeds' => 'groomingNeeds',
            'animalHighlightOrder' => 'highlightOrder',
            'animalHousetrained' => 'housetrained',
            'animalIndoorOutdoor' => 'indoorOutdoor',
            'animalIntakes' => 'intakes',
            'animalInternalID' => 'internalId',
            'animalKillDate' => 'killDate',
            'animalKillReason' => 'killReason',
            'animalUpdatedBy' => 'updatedBy',
            'animalUpdatedByID' => 'updatedById',
            'animalUpdatedDate' => 'updatedDate',
            'animalUpdatedTimeframe' => 'updatedTimeframe',
            'animalLocationID' => 'locationId',
            'animalLocationPublic' => 'locationPublic',
            'animalMicrochipped' => 'microchipped',
            'animalMicrochipNumber' => 'microchipNumber',
            'animalMicrochipVendor' => 'microchipVendor',
            'animalMixedBreed' => 'mixedBreed',
            'animalName' => 'name',
            'animalSpecialneeds' => 'specialneeds',
            'animalSpecialneedsDescription' => 'specialneedsDescription',
            'animalNeedsFoster' => 'needsFoster',
            'animalNewPeople' => 'newPeople',
            'animalNotes' => 'notes',
            'animalNotHousetrainedReason' => 'notHousetrainedReason',
            'animalObedienceTraining' => 'obedienceTraining',
            'animalOKWithAdults' => 'okWithAdults',
            'animalOKWithCats' => 'okWithCats',
            'animalOKWithDogs' => 'okWithDogs',
            'animalOKWithKids' => 'okWithKids',
            'animalOpenIntakes' => 'openIntakes',
            'animalOrigin' => 'origin',
            'animalOthernames' => 'othernames',
            'animalOutcomes' => 'outcomes',
            'animalOwnerExperience' => 'ownerExperience',
            'animalOwnerID' => 'ownerId',
            'animalPattern' => 'pattern',
            'animalPatternID' => 'patternId',
            'animalAdoptionPending' => 'adoptionPending',
            'animalPrimaryBreed' => 'primaryBreed',
            'animalPrimaryBreedID' => 'primaryBreedId',
            'animalReceivedDate' => 'receivedDate',
            'animalRescueID' => 'rescueId',
            'animalSecondaryBreed' => 'secondaryBreed',
            'animalSecondaryBreedID' => 'secondaryBreedId',
            'animalSex' => 'sex',
            'animalShared' => 'shared',
            'animalShedding' => 'shedding',
            'animalSizeCurrent' => 'sizeCurrent',
            'animalSizePotential' => 'sizePotential',
            'animalSizeUOM' => 'sizeUOM',
            'animalSpecies' => 'species',
            'animalSpeciesID' => 'speciesId',
            'animalSponsorable' => 'sponsorable',
            'animalSponsors' => 'sponsors',
            'animalSponsorshipDetails' => 'sponsorshipDetails',
            'animalSponsorshipMinimum' => 'sponsorshipMinimum',
            'animalStatus' => 'status',
            'animalStatusID' => 'statusId',
            'animalSummary' => 'summary',
            'animalTailType' => 'tailType',
            'animalTransferredToID' => 'transferredToId',
            'animalUptodate' => 'uptodate',
            'animalVocal' => 'vocal',
            'animalYardRequired' => 'yardRequired',
            'animalAffectionate' => 'affectionate',
            'animalApartment' => 'apartment',
            'animalCratetrained' => 'cratetrained',
            'animalDrools' => 'drools',
            'animalEagerToPlease' => 'eagerToPlease',
            'animalEscapes' => 'escapes',
            'animalEventempered' => 'eventempered',
            'animalFetches' => 'fetches',
            'animalGentle' => 'gentle',
            'animalGoodInCar' => 'goodInCar',
            'animalGoofy' => 'goofy',
            'animalHasAllergies' => 'hasAllergies',
            'animalHearingImpaired' => 'hearingImpaired',
            'animalHypoallergenic' => 'hypoallergenic',
            'animalIndependent' => 'independent',
            'animalIntelligent' => 'intelligent',
            'animalLap' => 'lap',
            'animalLeashtrained' => 'leashtrained',
            'animalNeedsCompanionAnimal' => 'needsCompanion',
            'animalNoCold' => 'noCold',
            'animalNoFemaleDogs' => 'noFemaleDogs',
            'animalNoHeat' => 'noHeat',
            'animalNoLargeDogs' => 'noLargeDogs',
            'animalNoMaleDogs' => 'noMaleDogs',
            'animalNoSmallDogs' => 'noSmallDogs',
            'animalObedient' => 'obedient',
            'animalOKForSeniors' => 'okForSeniors',
            'animalOKWithFarmAnimals' => 'okWithFarms',
            'animalOlderKidsOnly' => 'olderKidsOnly',
            'animalOngoingMedical' => 'ongoingMedical',
            'animalPlayful' => 'playful',
            'animalPlaysToys' => 'playsToys',
            'animalPredatory' => 'predatory',
            'animalProtective' => 'protective',
            'animalSightImpaired' => 'sightImpaired',
            'animalSkittish' => 'skittish',
            'animalSpecialDiet' => 'specialDiet',
            'animalSwims' => 'swims',
            'animalTimid' => 'timid',
            'ownerActive' => 'ownerActive',
            'ownerAddress' => 'ownerAddress',
            'ownerBounces' => 'ownerBounces',
            'ownerCarrier' => 'ownerCarrier',
            'ownerCity' => 'ownerCity',
            'ownerComment' => 'ownerComment',
            'ownerCompany' => 'ownerCompany',
            'ownerCountry' => 'ownerCountry',
            'ownerCounty' => 'ownerCounty',
            'ownerEmail' => 'ownerEmail',
            'ownerEmailAlt' => 'ownerEmailAlt',
            'ownerEmailPager' => 'ownerEmailPager',
            'ownerFax' => 'ownerFax',
            'ownerFirstname' => 'ownerFirstname',
            'ownerLastname' => 'ownerLastname',
            'ownerName' => 'ownerName',
            'ownerPhoneCell' => 'ownerPhoneCell',
            'ownerPhoneHome' => 'ownerPhoneHome',
            'ownerPhoneWork' => 'ownerPhoneWork',
            'ownerPhoneWorkExt' => 'ownerPhoneWorkExt',
            'ownerPlus4' => 'ownerPlus4',
            'ownerReferredBy' => 'ownerReferredBy',
            'ownerSalutation' => 'ownerSalutation',
            'ownerSendMail' => 'ownerSendMail',
            'ownerState' => 'ownerState',
            'ownerTitle' => 'ownerTitle',
            'ownerPostalcode' => 'ownerPostalcode',
            'colonyAnimals' => 'colonys',
            'colonyCaretakers' => 'colonyCaretakers',
            'colonyLocation' => 'colonyLocation',
            'colonyLocationID' => 'colonyLocationId',
            'colonyName' => 'colonyName',
            'colonyRegisteredDate' => 'colonyRegisteredDate',
            'colonySpecificLocation' => 'colonySpecificLocation',
            'fosterActive' => 'fosterActive',
            'fosterAddress' => 'fosterAddress',
            'fosterBounces' => 'fosterBounces',
            'fosterCarrier' => 'fosterCarrier',
            'fosterCity' => 'fosterCity',
            'fosterComment' => 'fosterComment',
            'fosterCompany' => 'fosterCompany',
            'fosterCountry' => 'fosterCountry',
            'fosterCounty' => 'fosterCounty',
            'fosterEmail' => 'fosterEmail',
            'fosterEmailAlt' => 'fosterEmailAlt',
            'fosterEmailPager' => 'fosterEmailPager',
            'fosterFax' => 'fosterFax',
            'fosterFirstname' => 'fosterFirstname',
            'fosterLastname' => 'fosterLastname',
            'fosterName' => 'fosterName',
            'fosterPhoneCell' => 'fosterPhoneCell',
            'fosterPhoneHome' => 'fosterPhoneHome',
            'fosterPhoneWork' => 'fosterPhoneWork',
            'fosterPhoneWorkExt' => 'fosterPhoneWorkExt',
            'fosterPlus4' => 'fosterPlus4',
            'fosterReferredBy' => 'fosterReferredBy',
            'fosterSalutation' => 'fosterSalutation',
            'fosterSendMail' => 'fosterSendMail',
            'fosterState' => 'fosterState',
            'fosterTitle' => 'fosterTitle',
            'fosterPostalcode' => 'fosterPostalcode',
            'locationAddress' => 'locationAddress',
            'locationAnimals' => 'locations',
            'locationCity' => 'locationCity',
            'locationColonies' => 'locationColonies',
            'locationCountry' => 'locationCountry',
            'locationUrl' => 'locationUrl',
            'locationEvents' => 'locationEvents',
            'locationMeetrequests' => 'locationMeetrequests',
            'locationName' => 'locationName',
            'locationPhone' => 'locationPhone',
            'locationState' => 'locationState',
            'locationPostalcode' => 'locationPostalcode',
            'submittedformID' => 'submittedformId',
            'submittedformAssignedToID' => 'submittedformAssignedToId',
            'submittedformCommentsCount' => 'submittedformCommentsCount',
            'submittedformCommentsInline' => 'submittedformCommentsInline',
            'submittedformCompletedDate' => 'submittedformCompletedDate',
            'submittedformFormName' => 'submittedformFormName',
            'submittedformPending' => 'submittedformPending',
            'submittedformStatus' => 'submittedformStatus',
            'submittedformStepsCount' => 'submittedformStepsCount',
            'submitterID' => 'submitterId',
            'submitterActive' => 'submitterActive',
            'submitterAddress' => 'submitterAddress',
            'submitterBounces' => 'submitterBounces',
            'submitterCarrier' => 'submitterCarrier',
            'submitterCity' => 'submitterCity',
            'submitterComment' => 'submitterComment',
            'submitterCompany' => 'submitterCompany',
            'submitterCountry' => 'submitterCountry',
            'submitterCounty' => 'submitterCounty',
            'submitterEmail' => 'submitterEmail',
            'submitterEmailAlt' => 'submitterEmailAlt',
            'submitterEmailPager' => 'submitterEmailPager',
            'submitterFax' => 'submitterFax',
            'submitterFirstname' => 'submitterFirstname',
            'submitterLastname' => 'submitterLastname',
            'submitterName' => 'submitterName',
            'submitterPhoneCell' => 'submitterPhoneCell',
            'submitterPhoneHome' => 'submitterPhoneHome',
            'submitterPhoneWork' => 'submitterPhoneWork',
            'submitterPhoneWorkExt' => 'submitterPhoneWorkExt',
            'submitterPlus4' => 'submitterPlus4',
            'submitterReferredBy' => 'submitterReferredBy',
            'submitterSalutation' => 'submitterSalutation',
            'submitterSendMail' => 'submitterSendMail',
            'submitterState' => 'submitterState',
            'submitterTitle' => 'submitterTitle',
            'submitterPostalcode' => 'submitterPostalcode',
            'transferredtoActive' => 'transferredtoActive',
            'transferredtoAddress' => 'transferredtoAddress',
            'transferredtoBounces' => 'transferredtoBounces',
            'transferredtoCarrier' => 'transferredtoCarrier',
            'transferredtoCity' => 'transferredtoCity',
            'transferredtoComment' => 'transferredtoComment',
            'transferredtoCompany' => 'transferredtoCompany',
            'transferredtoID' => 'transferredtoId',
            'transferredtoCountry' => 'transferredtoCountry',
            'transferredtoCounty' => 'transferredtoCounty',
            'transferredtoEmail' => 'transferredtoEmail',
            'transferredtoEmailAlt' => 'transferredtoEmailAlt',
            'transferredtoEmailPager' => 'transferredtoEmailPager',
            'transferredtoFax' => 'transferredtoFax',
            'transferredtoFirstname' => 'transferredtoFirstname',
            'transferredtoLastname' => 'transferredtoLastname',
            'transferredtoName' => 'transferredtoName',
            'transferredtoPhoneCell' => 'transferredtoPhoneCell',
            'transferredtoPhoneHome' => 'transferredtoPhoneHome',
            'transferredtoPhoneWork' => 'transferredtoPhoneWork',
            'transferredtoPhoneWorkExt' => 'transferredtoPhoneWorkExt',
            'transferredtoPlus4' => 'transferredtoPlus4',
            'transferredtoReferredBy' => 'transferredtoReferredBy',
            'transferredtoSalutation' => 'transferredtoSalutation',
            'transferredtoSendMail' => 'transferredtoSendMail',
            'transferredtoState' => 'transferredtoState',
            'transferredtoTitle' => 'transferredtoTitle',
            'transferredtoPostalcode' => 'transferredtoPostalcode',
            'animalGroups' => 'groups',
            'animalExportAccounts' => 'exportAccounts',
            'animalPictures' => 'pictures',
            'animalVideos' => 'videos',
            'animalVideoUrls' => 'videoUrls',
        ],
        'output' => [
            'id' => 'animalID',
            'activityLevel' => 'animalActivityLevel',
            'adoptedDate' => 'animalAdoptedDate',
            'adoptionFee' => 'animalAdoptionFee',
            'adoptionLead' => 'animalAdoptionLead',
            'adoptionLeadId' => 'animalAdoptionLeadID',
            'altered' => 'animalAltered',
            'applicationId' => 'animalApplicationID',
            'availableDate' => 'animalAvailableDate',
            'birthdate' => 'animalBirthdate',
            'birthdateExact' => 'animalBirthdateExact',
            'breed' => 'animalBreed',
            'coatLength' => 'animalCoatLength',
            'colonyId' => 'animalColonyID',
            'color' => 'animalColor',
            'colorId' => 'animalColorID',
            'colorDetails' => 'animalColorDetails',
            'condition' => 'animalCondition',
            'conditionId' => 'animalConditionID',
            'cost' => 'animalCost',
            'courtesy' => 'animalCourtesy',
            'createdDate' => 'animalCreatedDate',
            'createdBy' => 'animalCreatedBy',
            'createdById' => 'animalCreatedByID',
            'createdTimeframe' => 'animalCreatedTimeframe',
            'daysInFoster' => 'animalDaysInFoster',
            'declawed' => 'animalDeclawed',
            'description' => 'animalDescription',
            'descriptionPlain' => 'animalDescriptionPlain',
            'distinguishingMarks' => 'animalDistinguishingMarks',
            'allowExport' => 'animalAllowExport',
            'earType' => 'animalEarType',
            'energyLevel' => 'animalEnergyLevel',
            'exerciseNeeds' => 'animalExerciseNeeds',
            'eyeColor' => 'animalEyeColor',
            'fence' => 'animalFence',
            'fosterId' => 'animalFosterID',
            'found' => 'animalFound',
            'foundDate' => 'animalFoundDate',
            'foundPostalcode' => 'animalFoundPostalcode',
            'generalAge' => 'animalGeneralAge',
            'generalSizePotential' => 'animalGeneralSizePotential',
            'groomingNeeds' => 'animalGroomingNeeds',
            'highlightOrder' => 'animalHighlightOrder',
            'housetrained' => 'animalHousetrained',
            'indoorOutdoor' => 'animalIndoorOutdoor',
            'intakes' => 'animalIntakes',
            'internalId' => 'animalInternalID',
            'killDate' => 'animalKillDate',
            'killReason' => 'animalKillReason',
            'updatedBy' => 'animalUpdatedBy',
            'updatedById' => 'animalUpdatedByID',
            'updatedDate' => 'animalUpdatedDate',
            'updatedTimeframe' => 'animalUpdatedTimeframe',
            'locationId' => 'animalLocationID',
            'locationPublic' => 'animalLocationPublic',
            'microchipped' => 'animalMicrochipped',
            'microchipNumber' => 'animalMicrochipNumber',
            'microchipVendor' => 'animalMicrochipVendor',
            'mixedBreed' => 'animalMixedBreed',
            'name' => 'animalName',
            'specialneeds' => 'animalSpecialneeds',
            'specialneedsDescription' => 'animalSpecialneedsDescription',
            'needsFoster' => 'animalNeedsFoster',
            'newPeople' => 'animalNewPeople',
            'notes' => 'animalNotes',
            'notHousetrainedReason' => 'animalNotHousetrainedReason',
            'obedienceTraining' => 'animalObedienceTraining',
            'okWithAdults' => 'animalOKWithAdults',
            'okWithCats' => 'animalOKWithCats',
            'okWithDogs' => 'animalOKWithDogs',
            'okWithKids' => 'animalOKWithKids',
            'openIntakes' => 'animalOpenIntakes',
            'origin' => 'animalOrigin',
            'othernames' => 'animalOthernames',
            'outcomes' => 'animalOutcomes',
            'ownerExperience' => 'animalOwnerExperience',
            'ownerId' => 'animalOwnerID',
            'pattern' => 'animalPattern',
            'patternId' => 'animalPatternID',
            'adoptionPending' => 'animalAdoptionPending',
            'primaryBreed' => 'animalPrimaryBreed',
            'primaryBreedId' => 'animalPrimaryBreedID',
            'receivedDate' => 'animalReceivedDate',
            'rescueId' => 'animalRescueID',
            'secondaryBreed' => 'animalSecondaryBreed',
            'secondaryBreedId' => 'animalSecondaryBreedID',
            'sex' => 'animalSex',
            'shared' => 'animalShared',
            'shedding' => 'animalShedding',
            'sizeCurrent' => 'animalSizeCurrent',
            'sizePotential' => 'animalSizePotential',
            'sizeUOM' => 'animalSizeUOM',
            'species' => 'animalSpecies',
            'speciesId' => 'animalSpeciesID',
            'sponsorable' => 'animalSponsorable',
            'sponsors' => 'animalSponsors',
            'sponsorshipDetails' => 'animalSponsorshipDetails',
            'sponsorshipMinimum' => 'animalSponsorshipMinimum',
            'status' => 'animalStatus',
            'statusId' => 'animalStatusID',
            'summary' => 'animalSummary',
            'tailType' => 'animalTailType',
            'transferredToId' => 'animalTransferredToID',
            'uptodate' => 'animalUptodate',
            'vocal' => 'animalVocal',
            'yardRequired' => 'animalYardRequired',
            'affectionate' => 'animalAffectionate',
            'apartment' => 'animalApartment',
            'cratetrained' => 'animalCratetrained',
            'drools' => 'animalDrools',
            'eagerToPlease' => 'animalEagerToPlease',
            'escapes' => 'animalEscapes',
            'eventempered' => 'animalEventempered',
            'fetches' => 'animalFetches',
            'gentle' => 'animalGentle',
            'goodInCar' => 'animalGoodInCar',
            'goofy' => 'animalGoofy',
            'hasAllergies' => 'animalHasAllergies',
            'hearingImpaired' => 'animalHearingImpaired',
            'hypoallergenic' => 'animalHypoallergenic',
            'independent' => 'animalIndependent',
            'intelligent' => 'animalIntelligent',
            'lap' => 'animalLap',
            'leashtrained' => 'animalLeashtrained',
            'needsCompanion' => 'animalNeedsCompanionAnimal',
            'noCold' => 'animalNoCold',
            'noFemaleDogs' => 'animalNoFemaleDogs',
            'noHeat' => 'animalNoHeat',
            'noLargeDogs' => 'animalNoLargeDogs',
            'noMaleDogs' => 'animalNoMaleDogs',
            'noSmallDogs' => 'animalNoSmallDogs',
            'obedient' => 'animalObedient',
            'okForSeniors' => 'animalOKForSeniors',
            'okWithFarms' => 'animalOKWithFarmAnimals',
            'olderKidsOnly' => 'animalOlderKidsOnly',
            'ongoingMedical' => 'animalOngoingMedical',
            'playful' => 'animalPlayful',
            'playsToys' => 'animalPlaysToys',
            'predatory' => 'animalPredatory',
            'protective' => 'animalProtective',
            'sightImpaired' => 'animalSightImpaired',
            'skittish' => 'animalSkittish',
            'specialDiet' => 'animalSpecialDiet',
            'swims' => 'animalSwims',
            'timid' => 'animalTimid',
            'ownerActive' => 'ownerActive',
            'ownerAddress' => 'ownerAddress',
            'ownerBounces' => 'ownerBounces',
            'ownerCarrier' => 'ownerCarrier',
            'ownerCity' => 'ownerCity',
            'ownerComment' => 'ownerComment',
            'ownerCompany' => 'ownerCompany',
            'ownerCountry' => 'ownerCountry',
            'ownerCounty' => 'ownerCounty',
            'ownerEmail' => 'ownerEmail',
            'ownerEmailAlt' => 'ownerEmailAlt',
            'ownerEmailPager' => 'ownerEmailPager',
            'ownerFax' => 'ownerFax',
            'ownerFirstname' => 'ownerFirstname',
            'ownerLastname' => 'ownerLastname',
            'ownerName' => 'ownerName',
            'ownerPhoneCell' => 'ownerPhoneCell',
            'ownerPhoneHome' => 'ownerPhoneHome',
            'ownerPhoneWork' => 'ownerPhoneWork',
            'ownerPhoneWorkExt' => 'ownerPhoneWorkExt',
            'ownerPlus4' => 'ownerPlus4',
            'ownerReferredBy' => 'ownerReferredBy',
            'ownerSalutation' => 'ownerSalutation',
            'ownerSendMail' => 'ownerSendMail',
            'ownerState' => 'ownerState',
            'ownerTitle' => 'ownerTitle',
            'ownerPostalcode' => 'ownerPostalcode',
            'colonys' => 'colonyAnimals',
            'colonyCaretakers' => 'colonyCaretakers',
            'colonyLocation' => 'colonyLocation',
            'colonyLocationId' => 'colonyLocationID',
            'colonyName' => 'colonyName',
            'colonyRegisteredDate' => 'colonyRegisteredDate',
            'colonySpecificLocation' => 'colonySpecificLocation',
            'fosterActive' => 'fosterActive',
            'fosterAddress' => 'fosterAddress',
            'fosterBounces' => 'fosterBounces',
            'fosterCarrier' => 'fosterCarrier',
            'fosterCity' => 'fosterCity',
            'fosterComment' => 'fosterComment',
            'fosterCompany' => 'fosterCompany',
            'fosterCountry' => 'fosterCountry',
            'fosterCounty' => 'fosterCounty',
            'fosterEmail' => 'fosterEmail',
            'fosterEmailAlt' => 'fosterEmailAlt',
            'fosterEmailPager' => 'fosterEmailPager',
            'fosterFax' => 'fosterFax',
            'fosterFirstname' => 'fosterFirstname',
            'fosterLastname' => 'fosterLastname',
            'fosterName' => 'fosterName',
            'fosterPhoneCell' => 'fosterPhoneCell',
            'fosterPhoneHome' => 'fosterPhoneHome',
            'fosterPhoneWork' => 'fosterPhoneWork',
            'fosterPhoneWorkExt' => 'fosterPhoneWorkExt',
            'fosterPlus4' => 'fosterPlus4',
            'fosterReferredBy' => 'fosterReferredBy',
            'fosterSalutation' => 'fosterSalutation',
            'fosterSendMail' => 'fosterSendMail',
            'fosterState' => 'fosterState',
            'fosterTitle' => 'fosterTitle',
            'fosterPostalcode' => 'fosterPostalcode',
            'locationAddress' => 'locationAddress',
            'locations' => 'locationAnimals',
            'locationCity' => 'locationCity',
            'locationColonies' => 'locationColonies',
            'locationCountry' => 'locationCountry',
            'locationUrl' => 'locationUrl',
            'locationEvents' => 'locationEvents',
            'locationMeetrequests' => 'locationMeetrequests',
            'locationName' => 'locationName',
            'locationPhone' => 'locationPhone',
            'locationState' => 'locationState',
            'locationPostalcode' => 'locationPostalcode',
            'submittedformId' => 'submittedformID',
            'submittedformAssignedToId' => 'submittedformAssignedToID',
            'submittedformCommentsCount' => 'submittedformCommentsCount',
            'submittedformCommentsInline' => 'submittedformCommentsInline',
            'submittedformCompletedDate' => 'submittedformCompletedDate',
            'submittedformFormName' => 'submittedformFormName',
            'submittedformPending' => 'submittedformPending',
            'submittedformStatus' => 'submittedformStatus',
            'submittedformStepsCount' => 'submittedformStepsCount',
            'submitterId' => 'submitterID',
            'submitterActive' => 'submitterActive',
            'submitterAddress' => 'submitterAddress',
            'submitterBounces' => 'submitterBounces',
            'submitterCarrier' => 'submitterCarrier',
            'submitterCity' => 'submitterCity',
            'submitterComment' => 'submitterComment',
            'submitterCompany' => 'submitterCompany',
            'submitterCountry' => 'submitterCountry',
            'submitterCounty' => 'submitterCounty',
            'submitterEmail' => 'submitterEmail',
            'submitterEmailAlt' => 'submitterEmailAlt',
            'submitterEmailPager' => 'submitterEmailPager',
            'submitterFax' => 'submitterFax',
            'submitterFirstname' => 'submitterFirstname',
            'submitterLastname' => 'submitterLastname',
            'submitterName' => 'submitterName',
            'submitterPhoneCell' => 'submitterPhoneCell',
            'submitterPhoneHome' => 'submitterPhoneHome',
            'submitterPhoneWork' => 'submitterPhoneWork',
            'submitterPhoneWorkExt' => 'submitterPhoneWorkExt',
            'submitterPlus4' => 'submitterPlus4',
            'submitterReferredBy' => 'submitterReferredBy',
            'submitterSalutation' => 'submitterSalutation',
            'submitterSendMail' => 'submitterSendMail',
            'submitterState' => 'submitterState',
            'submitterTitle' => 'submitterTitle',
            'submitterPostalcode' => 'submitterPostalcode',
            'transferredtoActive' => 'transferredtoActive',
            'transferredtoAddress' => 'transferredtoAddress',
            'transferredtoBounces' => 'transferredtoBounces',
            'transferredtoCarrier' => 'transferredtoCarrier',
            'transferredtoCity' => 'transferredtoCity',
            'transferredtoComment' => 'transferredtoComment',
            'transferredtoCompany' => 'transferredtoCompany',
            'transferredtoId' => 'transferredtoID',
            'transferredtoCountry' => 'transferredtoCountry',
            'transferredtoCounty' => 'transferredtoCounty',
            'transferredtoEmail' => 'transferredtoEmail',
            'transferredtoEmailAlt' => 'transferredtoEmailAlt',
            'transferredtoEmailPager' => 'transferredtoEmailPager',
            'transferredtoFax' => 'transferredtoFax',
            'transferredtoFirstname' => 'transferredtoFirstname',
            'transferredtoLastname' => 'transferredtoLastname',
            'transferredtoName' => 'transferredtoName',
            'transferredtoPhoneCell' => 'transferredtoPhoneCell',
            'transferredtoPhoneHome' => 'transferredtoPhoneHome',
            'transferredtoPhoneWork' => 'transferredtoPhoneWork',
            'transferredtoPhoneWorkExt' => 'transferredtoPhoneWorkExt',
            'transferredtoPlus4' => 'transferredtoPlus4',
            'transferredtoReferredBy' => 'transferredtoReferredBy',
            'transferredtoSalutation' => 'transferredtoSalutation',
            'transferredtoSendMail' => 'transferredtoSendMail',
            'transferredtoState' => 'transferredtoState',
            'transferredtoTitle' => 'transferredtoTitle',
            'transferredtoPostalcode' => 'transferredtoPostalcode',
            'groups' => 'animalGroups',
            'exportAccounts' => 'animalExportAccounts',
            'pictures' => 'animalPictures',
            'videos' => 'animalVideos',
            'videoUrls' => 'animalVideoUrls',
        ]
    ];

}