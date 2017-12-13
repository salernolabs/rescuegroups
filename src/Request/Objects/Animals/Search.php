<?php
/**
 * Animals Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $animalID = null;

    /**
     * Activity level
     * @var string
     */
    private $animalActivityLevel = null;

    /**
     * Adopted Date
     * @var \DateTime
     */
    private $animalAdoptedDate = null;

    /**
     * Adoption fee
     * @var string
     */
    private $animalAdoptionFee = null;

    /**
     * Adoption lead
     * @var string
     */
    private $animalAdoptionLead = null;

    /**
     * Adoption lead
     * @var integer
     */
    private $animalAdoptionLeadID = null;

    /**
     * Altered
     * @var string
     */
    private $animalAltered = null;

    /**
     * Application
     * @var integer
     */
    private $animalApplicationID = null;

    /**
     * Available Date
     * @var \DateTime
     */
    private $animalAvailableDate = null;

    /**
     * Birthdate
     * @var \DateTime
     */
    private $animalBirthdate = null;

    /**
     * Exact Birthdate
     * @var string
     */
    private $animalBirthdateExact = null;

    /**
     * Breed
     * @var string
     */
    private $animalBreed = null;

    /**
     * Coat Length
     * @var string
     */
    private $animalCoatLength = null;

    /**
     * Colony
     * @var integer
     */
    private $animalColonyID = null;

    /**
     * Color
     * @var string
     */
    private $animalColor = null;

    /**
     * Color (General)
     * @var integer
     */
    private $animalColorID = null;

    /**
     * Color details
     * @var string
     */
    private $animalColorDetails = null;

    /**
     * Condition
     * @var string
     */
    private $animalCondition = null;

    /**
     * Condition
     * @var integer
     */
    private $animalConditionID = null;

    /**
     * Cost
     * @var string
     */
    private $animalCost = null;

    /**
     * Courtesy
     * @var string
     */
    private $animalCourtesy = null;

    /**
     * Created
     * @var \DateTime
     */
    private $animalCreatedDate = null;

    /**
     * Created by
     * @var string
     */
    private $animalCreatedBy = null;

    /**
     * Created by ID
     * @var integer
     */
    private $animalCreatedByID = null;

    /**
     * Created time frame
     * @var string
     */
    private $animalCreatedTimeframe = null;

    /**
     * Days in Foster
     * @var string
     */
    private $animalDaysInFoster = null;

    /**
     * Declawed
     * @var string
     */
    private $animalDeclawed = null;

    /**
     * Description
     * @var string
     */
    private $animalDescription = null;

    /**
     * Description (no html)
     * @var string
     */
    private $animalDescriptionPlain = null;

    /**
     * Distinguishing marks
     * @var string
     */
    private $animalDistinguishingMarks = null;

    /**
     * Allow export
     * @var string
     */
    private $animalAllowExport = null;

    /**
     * Ear type
     * @var string
     */
    private $animalEarType = null;

    /**
     * Energy level
     * @var string
     */
    private $animalEnergyLevel = null;

    /**
     * Exercise needs
     * @var string
     */
    private $animalExerciseNeeds = null;

    /**
     * Eye color
     * @var string
     */
    private $animalEyeColor = null;

    /**
     * Requires a home with fence
     * @var string
     */
    private $animalFence = null;

    /**
     * Foster
     * @var integer
     */
    private $animalFosterID = null;

    /**
     * Found
     * @var string
     */
    private $animalFound = null;

    /**
     * Found date
     * @var \DateTime
     */
    private $animalFoundDate = null;

    /**
     * Found zip/postal code
     * @var string
     */
    private $animalFoundPostalcode = null;

    /**
     * General Age
     * @var string
     */
    private $animalGeneralAge = null;

    /**
     * Size potential (general)
     * @var string
     */
    private $animalGeneralSizePotential = null;

    /**
     * Grooming needs
     * @var string
     */
    private $animalGroomingNeeds = null;

    /**
     * Highlight
     * @var string
     */
    private $animalHighlightOrder = null;

    /**
     * Housetrained
     * @var string
     */
    private $animalHousetrained = null;

    /**
     * Indoor/Outdoor
     * @var string
     */
    private $animalIndoorOutdoor = null;

    /**
     * Intakes
     * @var string
     */
    private $animalIntakes = null;

    /**
     * Internal ID
     * @var string
     */
    private $animalInternalID = null;

    /**
     * Euthanasia date
     * @var \DateTime
     */
    private $animalKillDate = null;

    /**
     * Euthanasia reason
     * @var string
     */
    private $animalKillReason = null;

    /**
     * Updated by
     * @var string
     */
    private $animalUpdatedBy = null;

    /**
     * Updated by ID
     * @var integer
     */
    private $animalUpdatedByID = null;

    /**
     * Last updated
     * @var \DateTime
     */
    private $animalUpdatedDate = null;

    /**
     * Updated timeframe
     * @var string
     */
    private $animalUpdatedTimeframe = null;

    /**
     * Location
     * @var integer
     */
    private $animalLocationID = null;

    /**
     * Location public
     * @var string
     */
    private $animalLocationPublic = null;

    /**
     * Microchipped
     * @var string
     */
    private $animalMicrochipped = null;

    /**
     * Microchip number
     * @var string
     */
    private $animalMicrochipNumber = null;

    /**
     * Microchip vendor
     * @var integer
     */
    private $animalMicrochipVendor = null;

    /**
     * Mixed breed
     * @var string
     */
    private $animalMixedBreed = null;

    /**
     * Name
     * @var string
     */
    private $animalName = null;

    /**
     * Has special needs
     * @var string
     */
    private $animalSpecialneeds = null;

    /**
     * Special needs description
     * @var string
     */
    private $animalSpecialneedsDescription = null;

    /**
     * Needs a Foster
     * @var string
     */
    private $animalNeedsFoster = null;

    /**
     * Reaction to new people
     * @var string
     */
    private $animalNewPeople = null;

    /**
     * Private notes
     * @var string
     */
    private $animalNotes = null;

    /**
     * Reason not housetrained
     * @var string
     */
    private $animalNotHousetrainedReason = null;

    /**
     * Obedience training
     * @var string
     */
    private $animalObedienceTraining = null;

    /**
     * Good with adults
     * @var string
     */
    private $animalOKWithAdults = null;

    /**
     * OK with cats
     * @var string
     */
    private $animalOKWithCats = null;

    /**
     * OK with dogs
     * @var string
     */
    private $animalOKWithDogs = null;

    /**
     * OK with kids
     * @var string
     */
    private $animalOKWithKids = null;

    /**
     * Open Intakes
     * @var string
     */
    private $animalOpenIntakes = null;

    /**
     * Origin
     * @var string
     */
    private $animalOrigin = null;

    /**
     * Other names
     * @var string
     */
    private $animalOthernames = null;

    /**
     * Outcomes
     * @var string
     */
    private $animalOutcomes = null;

    /**
     * Owner experience needed
     * @var string
     */
    private $animalOwnerExperience = null;

    /**
     * Owner
     * @var integer
     */
    private $animalOwnerID = null;

    /**
     * Pattern
     * @var string
     */
    private $animalPattern = null;

    /**
     * Pattern
     * @var integer
     */
    private $animalPatternID = null;

    /**
     * Adoption pending
     * @var string
     */
    private $animalAdoptionPending = null;

    /**
     * Primary breed
     * @var string
     */
    private $animalPrimaryBreed = null;

    /**
     * Primary breed
     * @var integer
     */
    private $animalPrimaryBreedID = null;

    /**
     * Received date
     * @var \DateTime
     */
    private $animalReceivedDate = null;

    /**
     * Rescue ID
     * @var string
     */
    private $animalRescueID = null;

    /**
     * Secondary Breed
     * @var string
     */
    private $animalSecondaryBreed = null;

    /**
     * Secondary Breed
     * @var integer
     */
    private $animalSecondaryBreedID = null;

    /**
     * Sex
     * @var string
     */
    private $animalSex = null;

    /**
     * Shared
     * @var string
     */
    private $animalShared = null;

    /**
     * Shedding amount
     * @var string
     */
    private $animalShedding = null;

    /**
     * Current size
     * @var float
     */
    private $animalSizeCurrent = null;

    /**
     * Size potential
     * @var float
     */
    private $animalSizePotential = null;

    /**
     * Size unit of measure
     * @var string
     */
    private $animalSizeUOM = null;

    /**
     * Species
     * @var string
     */
    private $animalSpecies = null;

    /**
     * Species
     * @var integer
     */
    private $animalSpeciesID = null;

    /**
     * Allow sponsorship
     * @var string
     */
    private $animalSponsorable = null;

    /**
     * Sponsors
     * @var string
     */
    private $animalSponsors = null;

    /**
     * Sponsorship details
     * @var string
     */
    private $animalSponsorshipDetails = null;

    /**
     * Sponsorship minimum
     * @var float
     */
    private $animalSponsorshipMinimum = null;

    /**
     * Status
     * @var string
     */
    private $animalStatus = null;

    /**
     * Status
     * @var integer
     */
    private $animalStatusID = null;

    /**
     * Summary
     * @var string
     */
    private $animalSummary = null;

    /**
     * Tail type
     * @var string
     */
    private $animalTailType = null;

    /**
     * Transferred to
     * @var integer
     */
    private $animalTransferredToID = null;

    /**
     * Up-to-date
     * @var string
     */
    private $animalUptodate = null;

    /**
     * Likes to vocalize
     * @var string
     */
    private $animalVocal = null;

    /**
     * Requires a Yard
     * @var string
     */
    private $animalYardRequired = null;

    /**
     * Affectionate
     * @var string
     */
    private $animalAffectionate = null;

    /**
     * Apartment appropriate
     * @var string
     */
    private $animalApartment = null;

    /**
     * Crate trained
     * @var string
     */
    private $animalCratetrained = null;

    /**
     * Drools excessively
     * @var string
     */
    private $animalDrools = null;

    /**
     * Eager to please
     * @var string
     */
    private $animalEagerToPlease = null;

    /**
     * Tries to escape
     * @var string
     */
    private $animalEscapes = null;

    /**
     * Even-tempered
     * @var string
     */
    private $animalEventempered = null;

    /**
     * Likes to fetch
     * @var string
     */
    private $animalFetches = null;

    /**
     * Gentle
     * @var string
     */
    private $animalGentle = null;

    /**
     * Does well in a car
     * @var string
     */
    private $animalGoodInCar = null;

    /**
     * Goofy
     * @var string
     */
    private $animalGoofy = null;

    /**
     * Has allergies
     * @var string
     */
    private $animalHasAllergies = null;

    /**
     * Hearing impaired
     * @var string
     */
    private $animalHearingImpaired = null;

    /**
     * Hypoallergenic
     * @var string
     */
    private $animalHypoallergenic = null;

    /**
     * Independent / aloof
     * @var string
     */
    private $animalIndependent = null;

    /**
     * Intelligent
     * @var string
     */
    private $animalIntelligent = null;

    /**
     * Lap pet
     * @var string
     */
    private $animalLap = null;

    /**
     * Leash trained
     * @var string
     */
    private $animalLeashtrained = null;

    /**
     * Needs companion animal
     * @var string
     */
    private $animalNeedsCompanionAnimal = null;

    /**
     * Cold sensitive
     * @var string
     */
    private $animalNoCold = null;

    /**
     * Not good with female dogs
     * @var string
     */
    private $animalNoFemaleDogs = null;

    /**
     * Heat sensitive
     * @var string
     */
    private $animalNoHeat = null;

    /**
     * Not good with large dogs
     * @var string
     */
    private $animalNoLargeDogs = null;

    /**
     * Not good with male dogs
     * @var string
     */
    private $animalNoMaleDogs = null;

    /**
     * Not good with small dogs
     * @var string
     */
    private $animalNoSmallDogs = null;

    /**
     * Obedient
     * @var string
     */
    private $animalObedient = null;

    /**
     * Good for seniors / elderly
     * @var string
     */
    private $animalOKForSeniors = null;

    /**
     * Good with farm animals
     * @var string
     */
    private $animalOKWithFarmAnimals = null;

    /**
     * Older/ considerate kids only
     * @var string
     */
    private $animalOlderKidsOnly = null;

    /**
     * Needs ongoing medical care
     * @var string
     */
    private $animalOngoingMedical = null;

    /**
     * Playful
     * @var string
     */
    private $animalPlayful = null;

    /**
     * Likes toys
     * @var string
     */
    private $animalPlaysToys = null;

    /**
     * Predatory
     * @var string
     */
    private $animalPredatory = null;

    /**
     * Protective / territorial
     * @var string
     */
    private $animalProtective = null;

    /**
     * Sight impaired
     * @var string
     */
    private $animalSightImpaired = null;

    /**
     * Skittish
     * @var string
     */
    private $animalSkittish = null;

    /**
     * Special diet required
     * @var string
     */
    private $animalSpecialDiet = null;

    /**
     * Likes to swim
     * @var string
     */
    private $animalSwims = null;

    /**
     * Timid / shy
     * @var string
     */
    private $animalTimid = null;

    /**
     * Owner ID
     * @var integer
     */
    private $ownerID = null;

    /**
     * Active
     * @var string
     */
    private $ownerActive = null;

    /**
     * Address
     * @var string
     */
    private $ownerAddress = null;

    /**
     * Bounced Emails
     * @var string
     */
    private $ownerBounces = null;

    /**
     * Carrier
     * @var string
     */
    private $ownerCarrier = null;

    /**
     * City
     * @var string
     */
    private $ownerCity = null;

    /**
     * Comment
     * @var string
     */
    private $ownerComment = null;

    /**
     * Company
     * @var string
     */
    private $ownerCompany = null;

    /**
     * Country
     * @var string
     */
    private $ownerCountry = null;

    /**
     * County
     * @var string
     */
    private $ownerCounty = null;

    /**
     * Email
     * @var string
     */
    private $ownerEmail = null;

    /**
     * Email (Alternate)
     * @var string
     */
    private $ownerEmailAlt = null;

    /**
     * Email (Text/Pager)
     * @var string
     */
    private $ownerEmailPager = null;

    /**
     * Fax
     * @var string
     */
    private $ownerFax = null;

    /**
     * First Name
     * @var string
     */
    private $ownerFirstname = null;

    /**
     * Last Name
     * @var string
     */
    private $ownerLastname = null;

    /**
     * Name
     * @var string
     */
    private $ownerName = null;

    /**
     * Phone (Cell)
     * @var string
     */
    private $ownerPhoneCell = null;

    /**
     * Phone (Home)
     * @var string
     */
    private $ownerPhoneHome = null;

    /**
     * Phone (Work)
     * @var string
     */
    private $ownerPhoneWork = null;

    /**
     * Phone Extension (Work)
     * @var string
     */
    private $ownerPhoneWorkExt = null;

    /**
     * Plus4
     * @var string
     */
    private $ownerPlus4 = null;

    /**
     * Referred By
     * @var string
     */
    private $ownerReferredBy = null;

    /**
     * Salutation
     * @var string
     */
    private $ownerSalutation = null;

    /**
     * Send Mail
     * @var string
     */
    private $ownerSendMail = null;

    /**
     * State
     * @var string
     */
    private $ownerState = null;

    /**
     * Title
     * @var string
     */
    private $ownerTitle = null;

    /**
     * Zip/Postal Code
     * @var string
     */
    private $ownerPostalcode = null;

    /**
     * Animals
     * @var string
     */
    private $colonyAnimals = null;

    /**
     * Caretakers
     * @var string
     */
    private $colonyCaretakers = null;

    /**
     * Location
     * @var string
     */
    private $colonyLocation = null;

    /**
     * Location
     * @var integer
     */
    private $colonyLocationID = null;

    /**
     * Colony
     * @var string
     */
    private $colonyName = null;

    /**
     * Registered
     * @var \DateTime
     */
    private $colonyRegisteredDate = null;

    /**
     * Specific Location
     * @var string
     */
    private $colonySpecificLocation = null;

    /**
     * Foster ID
     * @var integer
     */
    private $fosterID = null;

    /**
     * Active
     * @var string
     */
    private $fosterActive = null;

    /**
     * Address
     * @var string
     */
    private $fosterAddress = null;

    /**
     * Bounced Emails
     * @var string
     */
    private $fosterBounces = null;

    /**
     * Carrier
     * @var string
     */
    private $fosterCarrier = null;

    /**
     * City
     * @var string
     */
    private $fosterCity = null;

    /**
     * Comment
     * @var string
     */
    private $fosterComment = null;

    /**
     * Company
     * @var string
     */
    private $fosterCompany = null;

    /**
     * Country
     * @var string
     */
    private $fosterCountry = null;

    /**
     * County
     * @var string
     */
    private $fosterCounty = null;

    /**
     * Email
     * @var string
     */
    private $fosterEmail = null;

    /**
     * Email (Alternate)
     * @var string
     */
    private $fosterEmailAlt = null;

    /**
     * Email (Text/Pager)
     * @var string
     */
    private $fosterEmailPager = null;

    /**
     * Fax
     * @var string
     */
    private $fosterFax = null;

    /**
     * First Name
     * @var string
     */
    private $fosterFirstname = null;

    /**
     * Last Name
     * @var string
     */
    private $fosterLastname = null;

    /**
     * Foster
     * @var string
     */
    private $fosterName = null;

    /**
     * Phone (Cell)
     * @var string
     */
    private $fosterPhoneCell = null;

    /**
     * Phone (Home)
     * @var string
     */
    private $fosterPhoneHome = null;

    /**
     * Phone (Work)
     * @var string
     */
    private $fosterPhoneWork = null;

    /**
     * Phone Extension (Work)
     * @var string
     */
    private $fosterPhoneWorkExt = null;

    /**
     * Plus4
     * @var string
     */
    private $fosterPlus4 = null;

    /**
     * Referred By
     * @var string
     */
    private $fosterReferredBy = null;

    /**
     * Salutation
     * @var string
     */
    private $fosterSalutation = null;

    /**
     * Send Mail
     * @var string
     */
    private $fosterSendMail = null;

    /**
     * State
     * @var string
     */
    private $fosterState = null;

    /**
     * Title
     * @var string
     */
    private $fosterTitle = null;

    /**
     * Zip/Postal Code
     * @var string
     */
    private $fosterPostalcode = null;

    /**
     * Address
     * @var string
     */
    private $locationAddress = null;

    /**
     * Animals
     * @var string
     */
    private $locationAnimals = null;

    /**
     * City
     * @var string
     */
    private $locationCity = null;

    /**
     * Colonies
     * @var string
     */
    private $locationColonies = null;

    /**
     * Country
     * @var string
     */
    private $locationCountry = null;

    /**
     * Link
     * @var string
     */
    private $locationUrl = null;

    /**
     * Events
     * @var string
     */
    private $locationEvents = null;

    /**
     * Meet Requests
     * @var string
     */
    private $locationMeetrequests = null;

    /**
     * Location
     * @var string
     */
    private $locationName = null;

    /**
     * Phone
     * @var string
     */
    private $locationPhone = null;

    /**
     * State
     * @var string
     */
    private $locationState = null;

    /**
     * Postal Code
     * @var string
     */
    private $locationPostalcode = null;

    /**
     * Form ID
     * @var string
     */
    private $submittedformID = null;

    /**
     * Animal
     * @var string
     */
    private $submittedformAnimalID = null;

    /**
     * Assigned To
     * @var string
     */
    private $submittedformAssignedToID = null;

    /**
     * Comments
     * @var string
     */
    private $submittedformCommentsCount = null;

    /**
     * Comments (inline)
     * @var string
     */
    private $submittedformCommentsInline = null;

    /**
     * Submitted
     * @var \DateTime
     */
    private $submittedformCompletedDate = null;

    /**
     * Form
     * @var string
     */
    private $submittedformFormName = null;

    /**
     * Open
     * @var string
     */
    private $submittedformPending = null;

    /**
     * Status
     * @var string
     */
    private $submittedformStatus = null;

    /**
     * Steps
     * @var string
     */
    private $submittedformStepsCount = null;

    /**
     * Submitter ID
     * @var integer
     */
    private $submitterID = null;

    /**
     * Active
     * @var string
     */
    private $submitterActive = null;

    /**
     * Address
     * @var string
     */
    private $submitterAddress = null;

    /**
     * Bounced Emails
     * @var string
     */
    private $submitterBounces = null;

    /**
     * Carrier
     * @var string
     */
    private $submitterCarrier = null;

    /**
     * City
     * @var string
     */
    private $submitterCity = null;

    /**
     * Comment
     * @var string
     */
    private $submitterComment = null;

    /**
     * Company
     * @var string
     */
    private $submitterCompany = null;

    /**
     * Country
     * @var string
     */
    private $submitterCountry = null;

    /**
     * County
     * @var string
     */
    private $submitterCounty = null;

    /**
     * Email
     * @var string
     */
    private $submitterEmail = null;

    /**
     * Email (Alternate)
     * @var string
     */
    private $submitterEmailAlt = null;

    /**
     * Email (Text/Pager)
     * @var string
     */
    private $submitterEmailPager = null;

    /**
     * Fax
     * @var string
     */
    private $submitterFax = null;

    /**
     * First Name
     * @var string
     */
    private $submitterFirstname = null;

    /**
     * Last Name
     * @var string
     */
    private $submitterLastname = null;

    /**
     * Name
     * @var string
     */
    private $submitterName = null;

    /**
     * Phone (Cell)
     * @var string
     */
    private $submitterPhoneCell = null;

    /**
     * Phone (Home)
     * @var string
     */
    private $submitterPhoneHome = null;

    /**
     * Phone (Work)
     * @var string
     */
    private $submitterPhoneWork = null;

    /**
     * Phone Extension (Work)
     * @var string
     */
    private $submitterPhoneWorkExt = null;

    /**
     * Plus4
     * @var string
     */
    private $submitterPlus4 = null;

    /**
     * Referred By
     * @var string
     */
    private $submitterReferredBy = null;

    /**
     * Salutation
     * @var string
     */
    private $submitterSalutation = null;

    /**
     * Send Mail
     * @var string
     */
    private $submitterSendMail = null;

    /**
     * State
     * @var string
     */
    private $submitterState = null;

    /**
     * Title
     * @var string
     */
    private $submitterTitle = null;

    /**
     * Zip/Postal Code
     * @var string
     */
    private $submitterPostalcode = null;

    /**
     * Active
     * @var string
     */
    private $transferredtoActive = null;

    /**
     * Address
     * @var string
     */
    private $transferredtoAddress = null;

    /**
     * Bounced Emails
     * @var string
     */
    private $transferredtoBounces = null;

    /**
     * Carrier
     * @var string
     */
    private $transferredtoCarrier = null;

    /**
     * City
     * @var string
     */
    private $transferredtoCity = null;

    /**
     * Comment
     * @var string
     */
    private $transferredtoComment = null;

    /**
     * Company
     * @var string
     */
    private $transferredtoCompany = null;

    /**
     * Transferred To ID
     * @var string
     */
    private $transferredtoID = null;

    /**
     * Country
     * @var string
     */
    private $transferredtoCountry = null;

    /**
     * County
     * @var string
     */
    private $transferredtoCounty = null;

    /**
     * Email
     * @var string
     */
    private $transferredtoEmail = null;

    /**
     * Email (Alternate)
     * @var string
     */
    private $transferredtoEmailAlt = null;

    /**
     * Email (Text/Pager)
     * @var string
     */
    private $transferredtoEmailPager = null;

    /**
     * Fax
     * @var string
     */
    private $transferredtoFax = null;

    /**
     * First Name
     * @var string
     */
    private $transferredtoFirstname = null;

    /**
     * Last Name
     * @var string
     */
    private $transferredtoLastname = null;

    /**
     * Transferred to Name
     * @var string
     */
    private $transferredtoName = null;

    /**
     * Phone (Cell)
     * @var string
     */
    private $transferredtoPhoneCell = null;

    /**
     * Phone (Home)
     * @var string
     */
    private $transferredtoPhoneHome = null;

    /**
     * Phone (Work)
     * @var string
     */
    private $transferredtoPhoneWork = null;

    /**
     * Phone Extension (Work)
     * @var string
     */
    private $transferredtoPhoneWorkExt = null;

    /**
     * Plus4
     * @var string
     */
    private $transferredtoPlus4 = null;

    /**
     * Referred By
     * @var string
     */
    private $transferredtoReferredBy = null;

    /**
     * Salutation
     * @var string
     */
    private $transferredtoSalutation = null;

    /**
     * Send Mail
     * @var string
     */
    private $transferredtoSendMail = null;

    /**
     * State
     * @var string
     */
    private $transferredtoState = null;

    /**
     * Title
     * @var string
     */
    private $transferredtoTitle = null;

    /**
     * Zip/Postal Code
     * @var string
     */
    private $transferredtoPostalcode = null;

    /**
     * Groups
     * @var integer
     */
    private $animalGroups = null;

    /**
     * Export accounts
     * @var integer
     */
    private $animalExportAccounts = null;

    /**
     * Pictures
     * @var string
     */
    private $animalPictures = null;

    /**
     * Videos
     * @var string
     */
    private $animalVideos = null;

    /**
     * Video URLs
     * @var string
     */
    private $animalVideoUrls = null;


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
     * Set ID
     *
     * @param integer $animalID
     * @return $this
     */
    public function setAnimalID($animalID)
    {
        $this->animalID = $animalID;

        return $this;
    }

    /**
     * Set Activity level
     *
     * @param string $animalActivityLevel
     * @return $this
     */
    public function setAnimalActivityLevel($animalActivityLevel)
    {
        $this->animalActivityLevel = $animalActivityLevel;

        return $this;
    }

    /**
     * Set Adopted Date
     *
     * @param \DateTime $animalAdoptedDate
     * @return $this
     */
    public function setAnimalAdoptedDate($animalAdoptedDate)
    {
        $this->animalAdoptedDate = $animalAdoptedDate;

        return $this;
    }

    /**
     * Set Adoption fee
     *
     * @param string $animalAdoptionFee
     * @return $this
     */
    public function setAnimalAdoptionFee($animalAdoptionFee)
    {
        $this->animalAdoptionFee = $animalAdoptionFee;

        return $this;
    }

    /**
     * Set Adoption lead
     *
     * @param string $animalAdoptionLead
     * @return $this
     */
    public function setAnimalAdoptionLead($animalAdoptionLead)
    {
        $this->animalAdoptionLead = $animalAdoptionLead;

        return $this;
    }

    /**
     * Set Adoption lead
     *
     * @param integer $animalAdoptionLeadID
     * @return $this
     */
    public function setAnimalAdoptionLeadID($animalAdoptionLeadID)
    {
        $this->animalAdoptionLeadID = $animalAdoptionLeadID;

        return $this;
    }

    /**
     * Set Altered
     *
     * @param string $animalAltered
     * @return $this
     */
    public function setAnimalAltered($animalAltered)
    {
        $this->animalAltered = $animalAltered;

        return $this;
    }

    /**
     * Set Application
     *
     * @param integer $animalApplicationID
     * @return $this
     */
    public function setAnimalApplicationID($animalApplicationID)
    {
        $this->animalApplicationID = $animalApplicationID;

        return $this;
    }

    /**
     * Set Available Date
     *
     * @param \DateTime $animalAvailableDate
     * @return $this
     */
    public function setAnimalAvailableDate($animalAvailableDate)
    {
        $this->animalAvailableDate = $animalAvailableDate;

        return $this;
    }

    /**
     * Set Birthdate
     *
     * @param \DateTime $animalBirthdate
     * @return $this
     */
    public function setAnimalBirthdate($animalBirthdate)
    {
        $this->animalBirthdate = $animalBirthdate;

        return $this;
    }

    /**
     * Set Exact Birthdate
     *
     * @param string $animalBirthdateExact
     * @return $this
     */
    public function setAnimalBirthdateExact($animalBirthdateExact)
    {
        $this->animalBirthdateExact = $animalBirthdateExact;

        return $this;
    }

    /**
     * Set Breed
     *
     * @param string $animalBreed
     * @return $this
     */
    public function setAnimalBreed($animalBreed)
    {
        $this->animalBreed = $animalBreed;

        return $this;
    }

    /**
     * Set Coat Length
     *
     * @param string $animalCoatLength
     * @return $this
     */
    public function setAnimalCoatLength($animalCoatLength)
    {
        $this->animalCoatLength = $animalCoatLength;

        return $this;
    }

    /**
     * Set Colony
     *
     * @param integer $animalColonyID
     * @return $this
     */
    public function setAnimalColonyID($animalColonyID)
    {
        $this->animalColonyID = $animalColonyID;

        return $this;
    }

    /**
     * Set Color
     *
     * @param string $animalColor
     * @return $this
     */
    public function setAnimalColor($animalColor)
    {
        $this->animalColor = $animalColor;

        return $this;
    }

    /**
     * Set Color (General)
     *
     * @param integer $animalColorID
     * @return $this
     */
    public function setAnimalColorID($animalColorID)
    {
        $this->animalColorID = $animalColorID;

        return $this;
    }

    /**
     * Set Color details
     *
     * @param string $animalColorDetails
     * @return $this
     */
    public function setAnimalColorDetails($animalColorDetails)
    {
        $this->animalColorDetails = $animalColorDetails;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param string $animalCondition
     * @return $this
     */
    public function setAnimalCondition($animalCondition)
    {
        $this->animalCondition = $animalCondition;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $animalConditionID
     * @return $this
     */
    public function setAnimalConditionID($animalConditionID)
    {
        $this->animalConditionID = $animalConditionID;

        return $this;
    }

    /**
     * Set Cost
     *
     * @param string $animalCost
     * @return $this
     */
    public function setAnimalCost($animalCost)
    {
        $this->animalCost = $animalCost;

        return $this;
    }

    /**
     * Set Courtesy
     *
     * @param string $animalCourtesy
     * @return $this
     */
    public function setAnimalCourtesy($animalCourtesy)
    {
        $this->animalCourtesy = $animalCourtesy;

        return $this;
    }

    /**
     * Set Created
     *
     * @param \DateTime $animalCreatedDate
     * @return $this
     */
    public function setAnimalCreatedDate($animalCreatedDate)
    {
        $this->animalCreatedDate = $animalCreatedDate;

        return $this;
    }

    /**
     * Set Created by
     *
     * @param string $animalCreatedBy
     * @return $this
     */
    public function setAnimalCreatedBy($animalCreatedBy)
    {
        $this->animalCreatedBy = $animalCreatedBy;

        return $this;
    }

    /**
     * Set Created by ID
     *
     * @param integer $animalCreatedByID
     * @return $this
     */
    public function setAnimalCreatedByID($animalCreatedByID)
    {
        $this->animalCreatedByID = $animalCreatedByID;

        return $this;
    }

    /**
     * Set Created time frame
     *
     * @param string $animalCreatedTimeframe
     * @return $this
     */
    public function setAnimalCreatedTimeframe($animalCreatedTimeframe)
    {
        $this->animalCreatedTimeframe = $animalCreatedTimeframe;

        return $this;
    }

    /**
     * Set Days in Foster
     *
     * @param string $animalDaysInFoster
     * @return $this
     */
    public function setAnimalDaysInFoster($animalDaysInFoster)
    {
        $this->animalDaysInFoster = $animalDaysInFoster;

        return $this;
    }

    /**
     * Set Declawed
     *
     * @param string $animalDeclawed
     * @return $this
     */
    public function setAnimalDeclawed($animalDeclawed)
    {
        $this->animalDeclawed = $animalDeclawed;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $animalDescription
     * @return $this
     */
    public function setAnimalDescription($animalDescription)
    {
        $this->animalDescription = $animalDescription;

        return $this;
    }

    /**
     * Set Description (no html)
     *
     * @param string $animalDescriptionPlain
     * @return $this
     */
    public function setAnimalDescriptionPlain($animalDescriptionPlain)
    {
        $this->animalDescriptionPlain = $animalDescriptionPlain;

        return $this;
    }

    /**
     * Set Distinguishing marks
     *
     * @param string $animalDistinguishingMarks
     * @return $this
     */
    public function setAnimalDistinguishingMarks($animalDistinguishingMarks)
    {
        $this->animalDistinguishingMarks = $animalDistinguishingMarks;

        return $this;
    }

    /**
     * Set Allow export
     *
     * @param string $animalAllowExport
     * @return $this
     */
    public function setAnimalAllowExport($animalAllowExport)
    {
        $this->animalAllowExport = $animalAllowExport;

        return $this;
    }

    /**
     * Set Ear type
     *
     * @param string $animalEarType
     * @return $this
     */
    public function setAnimalEarType($animalEarType)
    {
        $this->animalEarType = $animalEarType;

        return $this;
    }

    /**
     * Set Energy level
     *
     * @param string $animalEnergyLevel
     * @return $this
     */
    public function setAnimalEnergyLevel($animalEnergyLevel)
    {
        $this->animalEnergyLevel = $animalEnergyLevel;

        return $this;
    }

    /**
     * Set Exercise needs
     *
     * @param string $animalExerciseNeeds
     * @return $this
     */
    public function setAnimalExerciseNeeds($animalExerciseNeeds)
    {
        $this->animalExerciseNeeds = $animalExerciseNeeds;

        return $this;
    }

    /**
     * Set Eye color
     *
     * @param string $animalEyeColor
     * @return $this
     */
    public function setAnimalEyeColor($animalEyeColor)
    {
        $this->animalEyeColor = $animalEyeColor;

        return $this;
    }

    /**
     * Set Requires a home with fence
     *
     * @param string $animalFence
     * @return $this
     */
    public function setAnimalFence($animalFence)
    {
        $this->animalFence = $animalFence;

        return $this;
    }

    /**
     * Set Foster
     *
     * @param integer $animalFosterID
     * @return $this
     */
    public function setAnimalFosterID($animalFosterID)
    {
        $this->animalFosterID = $animalFosterID;

        return $this;
    }

    /**
     * Set Found
     *
     * @param string $animalFound
     * @return $this
     */
    public function setAnimalFound($animalFound)
    {
        $this->animalFound = $animalFound;

        return $this;
    }

    /**
     * Set Found date
     *
     * @param \DateTime $animalFoundDate
     * @return $this
     */
    public function setAnimalFoundDate($animalFoundDate)
    {
        $this->animalFoundDate = $animalFoundDate;

        return $this;
    }

    /**
     * Set Found zip/postal code
     *
     * @param string $animalFoundPostalcode
     * @return $this
     */
    public function setAnimalFoundPostalcode($animalFoundPostalcode)
    {
        $this->animalFoundPostalcode = $animalFoundPostalcode;

        return $this;
    }

    /**
     * Set General Age
     *
     * @param string $animalGeneralAge
     * @return $this
     */
    public function setAnimalGeneralAge($animalGeneralAge)
    {
        $this->animalGeneralAge = $animalGeneralAge;

        return $this;
    }

    /**
     * Set Size potential (general)
     *
     * @param string $animalGeneralSizePotential
     * @return $this
     */
    public function setAnimalGeneralSizePotential($animalGeneralSizePotential)
    {
        $this->animalGeneralSizePotential = $animalGeneralSizePotential;

        return $this;
    }

    /**
     * Set Grooming needs
     *
     * @param string $animalGroomingNeeds
     * @return $this
     */
    public function setAnimalGroomingNeeds($animalGroomingNeeds)
    {
        $this->animalGroomingNeeds = $animalGroomingNeeds;

        return $this;
    }

    /**
     * Set Highlight
     *
     * @param string $animalHighlightOrder
     * @return $this
     */
    public function setAnimalHighlightOrder($animalHighlightOrder)
    {
        $this->animalHighlightOrder = $animalHighlightOrder;

        return $this;
    }

    /**
     * Set Housetrained
     *
     * @param string $animalHousetrained
     * @return $this
     */
    public function setAnimalHousetrained($animalHousetrained)
    {
        $this->animalHousetrained = $animalHousetrained;

        return $this;
    }

    /**
     * Set Indoor/Outdoor
     *
     * @param string $animalIndoorOutdoor
     * @return $this
     */
    public function setAnimalIndoorOutdoor($animalIndoorOutdoor)
    {
        $this->animalIndoorOutdoor = $animalIndoorOutdoor;

        return $this;
    }

    /**
     * Set Intakes
     *
     * @param string $animalIntakes
     * @return $this
     */
    public function setAnimalIntakes($animalIntakes)
    {
        $this->animalIntakes = $animalIntakes;

        return $this;
    }

    /**
     * Set Internal ID
     *
     * @param string $animalInternalID
     * @return $this
     */
    public function setAnimalInternalID($animalInternalID)
    {
        $this->animalInternalID = $animalInternalID;

        return $this;
    }

    /**
     * Set Euthanasia date
     *
     * @param \DateTime $animalKillDate
     * @return $this
     */
    public function setAnimalKillDate($animalKillDate)
    {
        $this->animalKillDate = $animalKillDate;

        return $this;
    }

    /**
     * Set Euthanasia reason
     *
     * @param string $animalKillReason
     * @return $this
     */
    public function setAnimalKillReason($animalKillReason)
    {
        $this->animalKillReason = $animalKillReason;

        return $this;
    }

    /**
     * Set Updated by
     *
     * @param string $animalUpdatedBy
     * @return $this
     */
    public function setAnimalUpdatedBy($animalUpdatedBy)
    {
        $this->animalUpdatedBy = $animalUpdatedBy;

        return $this;
    }

    /**
     * Set Updated by ID
     *
     * @param integer $animalUpdatedByID
     * @return $this
     */
    public function setAnimalUpdatedByID($animalUpdatedByID)
    {
        $this->animalUpdatedByID = $animalUpdatedByID;

        return $this;
    }

    /**
     * Set Last updated
     *
     * @param \DateTime $animalUpdatedDate
     * @return $this
     */
    public function setAnimalUpdatedDate($animalUpdatedDate)
    {
        $this->animalUpdatedDate = $animalUpdatedDate;

        return $this;
    }

    /**
     * Set Updated timeframe
     *
     * @param string $animalUpdatedTimeframe
     * @return $this
     */
    public function setAnimalUpdatedTimeframe($animalUpdatedTimeframe)
    {
        $this->animalUpdatedTimeframe = $animalUpdatedTimeframe;

        return $this;
    }

    /**
     * Set Location
     *
     * @param integer $animalLocationID
     * @return $this
     */
    public function setAnimalLocationID($animalLocationID)
    {
        $this->animalLocationID = $animalLocationID;

        return $this;
    }

    /**
     * Set Location public
     *
     * @param string $animalLocationPublic
     * @return $this
     */
    public function setAnimalLocationPublic($animalLocationPublic)
    {
        $this->animalLocationPublic = $animalLocationPublic;

        return $this;
    }

    /**
     * Set Microchipped
     *
     * @param string $animalMicrochipped
     * @return $this
     */
    public function setAnimalMicrochipped($animalMicrochipped)
    {
        $this->animalMicrochipped = $animalMicrochipped;

        return $this;
    }

    /**
     * Set Microchip number
     *
     * @param string $animalMicrochipNumber
     * @return $this
     */
    public function setAnimalMicrochipNumber($animalMicrochipNumber)
    {
        $this->animalMicrochipNumber = $animalMicrochipNumber;

        return $this;
    }

    /**
     * Set Microchip vendor
     *
     * @param integer $animalMicrochipVendor
     * @return $this
     */
    public function setAnimalMicrochipVendor($animalMicrochipVendor)
    {
        $this->animalMicrochipVendor = $animalMicrochipVendor;

        return $this;
    }

    /**
     * Set Mixed breed
     *
     * @param string $animalMixedBreed
     * @return $this
     */
    public function setAnimalMixedBreed($animalMixedBreed)
    {
        $this->animalMixedBreed = $animalMixedBreed;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $animalName
     * @return $this
     */
    public function setAnimalName($animalName)
    {
        $this->animalName = $animalName;

        return $this;
    }

    /**
     * Set Has special needs
     *
     * @param string $animalSpecialneeds
     * @return $this
     */
    public function setAnimalSpecialneeds($animalSpecialneeds)
    {
        $this->animalSpecialneeds = $animalSpecialneeds;

        return $this;
    }

    /**
     * Set Special needs description
     *
     * @param string $animalSpecialneedsDescription
     * @return $this
     */
    public function setAnimalSpecialneedsDescription($animalSpecialneedsDescription)
    {
        $this->animalSpecialneedsDescription = $animalSpecialneedsDescription;

        return $this;
    }

    /**
     * Set Needs a Foster
     *
     * @param string $animalNeedsFoster
     * @return $this
     */
    public function setAnimalNeedsFoster($animalNeedsFoster)
    {
        $this->animalNeedsFoster = $animalNeedsFoster;

        return $this;
    }

    /**
     * Set Reaction to new people
     *
     * @param string $animalNewPeople
     * @return $this
     */
    public function setAnimalNewPeople($animalNewPeople)
    {
        $this->animalNewPeople = $animalNewPeople;

        return $this;
    }

    /**
     * Set Private notes
     *
     * @param string $animalNotes
     * @return $this
     */
    public function setAnimalNotes($animalNotes)
    {
        $this->animalNotes = $animalNotes;

        return $this;
    }

    /**
     * Set Reason not housetrained
     *
     * @param string $animalNotHousetrainedReason
     * @return $this
     */
    public function setAnimalNotHousetrainedReason($animalNotHousetrainedReason)
    {
        $this->animalNotHousetrainedReason = $animalNotHousetrainedReason;

        return $this;
    }

    /**
     * Set Obedience training
     *
     * @param string $animalObedienceTraining
     * @return $this
     */
    public function setAnimalObedienceTraining($animalObedienceTraining)
    {
        $this->animalObedienceTraining = $animalObedienceTraining;

        return $this;
    }

    /**
     * Set Good with adults
     *
     * @param string $animalOKWithAdults
     * @return $this
     */
    public function setAnimalOKWithAdults($animalOKWithAdults)
    {
        $this->animalOKWithAdults = $animalOKWithAdults;

        return $this;
    }

    /**
     * Set OK with cats
     *
     * @param string $animalOKWithCats
     * @return $this
     */
    public function setAnimalOKWithCats($animalOKWithCats)
    {
        $this->animalOKWithCats = $animalOKWithCats;

        return $this;
    }

    /**
     * Set OK with dogs
     *
     * @param string $animalOKWithDogs
     * @return $this
     */
    public function setAnimalOKWithDogs($animalOKWithDogs)
    {
        $this->animalOKWithDogs = $animalOKWithDogs;

        return $this;
    }

    /**
     * Set OK with kids
     *
     * @param string $animalOKWithKids
     * @return $this
     */
    public function setAnimalOKWithKids($animalOKWithKids)
    {
        $this->animalOKWithKids = $animalOKWithKids;

        return $this;
    }

    /**
     * Set Open Intakes
     *
     * @param string $animalOpenIntakes
     * @return $this
     */
    public function setAnimalOpenIntakes($animalOpenIntakes)
    {
        $this->animalOpenIntakes = $animalOpenIntakes;

        return $this;
    }

    /**
     * Set Origin
     *
     * @param string $animalOrigin
     * @return $this
     */
    public function setAnimalOrigin($animalOrigin)
    {
        $this->animalOrigin = $animalOrigin;

        return $this;
    }

    /**
     * Set Other names
     *
     * @param string $animalOthernames
     * @return $this
     */
    public function setAnimalOthernames($animalOthernames)
    {
        $this->animalOthernames = $animalOthernames;

        return $this;
    }

    /**
     * Set Outcomes
     *
     * @param string $animalOutcomes
     * @return $this
     */
    public function setAnimalOutcomes($animalOutcomes)
    {
        $this->animalOutcomes = $animalOutcomes;

        return $this;
    }

    /**
     * Set Owner experience needed
     *
     * @param string $animalOwnerExperience
     * @return $this
     */
    public function setAnimalOwnerExperience($animalOwnerExperience)
    {
        $this->animalOwnerExperience = $animalOwnerExperience;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param integer $animalOwnerID
     * @return $this
     */
    public function setAnimalOwnerID($animalOwnerID)
    {
        $this->animalOwnerID = $animalOwnerID;

        return $this;
    }

    /**
     * Set Pattern
     *
     * @param string $animalPattern
     * @return $this
     */
    public function setAnimalPattern($animalPattern)
    {
        $this->animalPattern = $animalPattern;

        return $this;
    }

    /**
     * Set Pattern
     *
     * @param integer $animalPatternID
     * @return $this
     */
    public function setAnimalPatternID($animalPatternID)
    {
        $this->animalPatternID = $animalPatternID;

        return $this;
    }

    /**
     * Set Adoption pending
     *
     * @param string $animalAdoptionPending
     * @return $this
     */
    public function setAnimalAdoptionPending($animalAdoptionPending)
    {
        $this->animalAdoptionPending = $animalAdoptionPending;

        return $this;
    }

    /**
     * Set Primary breed
     *
     * @param string $animalPrimaryBreed
     * @return $this
     */
    public function setAnimalPrimaryBreed($animalPrimaryBreed)
    {
        $this->animalPrimaryBreed = $animalPrimaryBreed;

        return $this;
    }

    /**
     * Set Primary breed
     *
     * @param integer $animalPrimaryBreedID
     * @return $this
     */
    public function setAnimalPrimaryBreedID($animalPrimaryBreedID)
    {
        $this->animalPrimaryBreedID = $animalPrimaryBreedID;

        return $this;
    }

    /**
     * Set Received date
     *
     * @param \DateTime $animalReceivedDate
     * @return $this
     */
    public function setAnimalReceivedDate($animalReceivedDate)
    {
        $this->animalReceivedDate = $animalReceivedDate;

        return $this;
    }

    /**
     * Set Rescue ID
     *
     * @param string $animalRescueID
     * @return $this
     */
    public function setAnimalRescueID($animalRescueID)
    {
        $this->animalRescueID = $animalRescueID;

        return $this;
    }

    /**
     * Set Secondary Breed
     *
     * @param string $animalSecondaryBreed
     * @return $this
     */
    public function setAnimalSecondaryBreed($animalSecondaryBreed)
    {
        $this->animalSecondaryBreed = $animalSecondaryBreed;

        return $this;
    }

    /**
     * Set Secondary Breed
     *
     * @param integer $animalSecondaryBreedID
     * @return $this
     */
    public function setAnimalSecondaryBreedID($animalSecondaryBreedID)
    {
        $this->animalSecondaryBreedID = $animalSecondaryBreedID;

        return $this;
    }

    /**
     * Set Sex
     *
     * @param string $animalSex
     * @return $this
     */
    public function setAnimalSex($animalSex)
    {
        $this->animalSex = $animalSex;

        return $this;
    }

    /**
     * Set Shared
     *
     * @param string $animalShared
     * @return $this
     */
    public function setAnimalShared($animalShared)
    {
        $this->animalShared = $animalShared;

        return $this;
    }

    /**
     * Set Shedding amount
     *
     * @param string $animalShedding
     * @return $this
     */
    public function setAnimalShedding($animalShedding)
    {
        $this->animalShedding = $animalShedding;

        return $this;
    }

    /**
     * Set Current size
     *
     * @param float $animalSizeCurrent
     * @return $this
     */
    public function setAnimalSizeCurrent($animalSizeCurrent)
    {
        $this->animalSizeCurrent = $animalSizeCurrent;

        return $this;
    }

    /**
     * Set Size potential
     *
     * @param float $animalSizePotential
     * @return $this
     */
    public function setAnimalSizePotential($animalSizePotential)
    {
        $this->animalSizePotential = $animalSizePotential;

        return $this;
    }

    /**
     * Set Size unit of measure
     *
     * @param string $animalSizeUOM
     * @return $this
     */
    public function setAnimalSizeUOM($animalSizeUOM)
    {
        $this->animalSizeUOM = $animalSizeUOM;

        return $this;
    }

    /**
     * Set Species
     *
     * @param string $animalSpecies
     * @return $this
     */
    public function setAnimalSpecies($animalSpecies)
    {
        $this->animalSpecies = $animalSpecies;

        return $this;
    }

    /**
     * Set Species
     *
     * @param integer $animalSpeciesID
     * @return $this
     */
    public function setAnimalSpeciesID($animalSpeciesID)
    {
        $this->animalSpeciesID = $animalSpeciesID;

        return $this;
    }

    /**
     * Set Allow sponsorship
     *
     * @param string $animalSponsorable
     * @return $this
     */
    public function setAnimalSponsorable($animalSponsorable)
    {
        $this->animalSponsorable = $animalSponsorable;

        return $this;
    }

    /**
     * Set Sponsors
     *
     * @param string $animalSponsors
     * @return $this
     */
    public function setAnimalSponsors($animalSponsors)
    {
        $this->animalSponsors = $animalSponsors;

        return $this;
    }

    /**
     * Set Sponsorship details
     *
     * @param string $animalSponsorshipDetails
     * @return $this
     */
    public function setAnimalSponsorshipDetails($animalSponsorshipDetails)
    {
        $this->animalSponsorshipDetails = $animalSponsorshipDetails;

        return $this;
    }

    /**
     * Set Sponsorship minimum
     *
     * @param float $animalSponsorshipMinimum
     * @return $this
     */
    public function setAnimalSponsorshipMinimum($animalSponsorshipMinimum)
    {
        $this->animalSponsorshipMinimum = $animalSponsorshipMinimum;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $animalStatus
     * @return $this
     */
    public function setAnimalStatus($animalStatus)
    {
        $this->animalStatus = $animalStatus;

        return $this;
    }

    /**
     * Set Status
     *
     * @param integer $animalStatusID
     * @return $this
     */
    public function setAnimalStatusID($animalStatusID)
    {
        $this->animalStatusID = $animalStatusID;

        return $this;
    }

    /**
     * Set Summary
     *
     * @param string $animalSummary
     * @return $this
     */
    public function setAnimalSummary($animalSummary)
    {
        $this->animalSummary = $animalSummary;

        return $this;
    }

    /**
     * Set Tail type
     *
     * @param string $animalTailType
     * @return $this
     */
    public function setAnimalTailType($animalTailType)
    {
        $this->animalTailType = $animalTailType;

        return $this;
    }

    /**
     * Set Transferred to
     *
     * @param integer $animalTransferredToID
     * @return $this
     */
    public function setAnimalTransferredToID($animalTransferredToID)
    {
        $this->animalTransferredToID = $animalTransferredToID;

        return $this;
    }

    /**
     * Set Up-to-date
     *
     * @param string $animalUptodate
     * @return $this
     */
    public function setAnimalUptodate($animalUptodate)
    {
        $this->animalUptodate = $animalUptodate;

        return $this;
    }

    /**
     * Set Likes to vocalize
     *
     * @param string $animalVocal
     * @return $this
     */
    public function setAnimalVocal($animalVocal)
    {
        $this->animalVocal = $animalVocal;

        return $this;
    }

    /**
     * Set Requires a Yard
     *
     * @param string $animalYardRequired
     * @return $this
     */
    public function setAnimalYardRequired($animalYardRequired)
    {
        $this->animalYardRequired = $animalYardRequired;

        return $this;
    }

    /**
     * Set Affectionate
     *
     * @param string $animalAffectionate
     * @return $this
     */
    public function setAnimalAffectionate($animalAffectionate)
    {
        $this->animalAffectionate = $animalAffectionate;

        return $this;
    }

    /**
     * Set Apartment appropriate
     *
     * @param string $animalApartment
     * @return $this
     */
    public function setAnimalApartment($animalApartment)
    {
        $this->animalApartment = $animalApartment;

        return $this;
    }

    /**
     * Set Crate trained
     *
     * @param string $animalCratetrained
     * @return $this
     */
    public function setAnimalCratetrained($animalCratetrained)
    {
        $this->animalCratetrained = $animalCratetrained;

        return $this;
    }

    /**
     * Set Drools excessively
     *
     * @param string $animalDrools
     * @return $this
     */
    public function setAnimalDrools($animalDrools)
    {
        $this->animalDrools = $animalDrools;

        return $this;
    }

    /**
     * Set Eager to please
     *
     * @param string $animalEagerToPlease
     * @return $this
     */
    public function setAnimalEagerToPlease($animalEagerToPlease)
    {
        $this->animalEagerToPlease = $animalEagerToPlease;

        return $this;
    }

    /**
     * Set Tries to escape
     *
     * @param string $animalEscapes
     * @return $this
     */
    public function setAnimalEscapes($animalEscapes)
    {
        $this->animalEscapes = $animalEscapes;

        return $this;
    }

    /**
     * Set Even-tempered
     *
     * @param string $animalEventempered
     * @return $this
     */
    public function setAnimalEventempered($animalEventempered)
    {
        $this->animalEventempered = $animalEventempered;

        return $this;
    }

    /**
     * Set Likes to fetch
     *
     * @param string $animalFetches
     * @return $this
     */
    public function setAnimalFetches($animalFetches)
    {
        $this->animalFetches = $animalFetches;

        return $this;
    }

    /**
     * Set Gentle
     *
     * @param string $animalGentle
     * @return $this
     */
    public function setAnimalGentle($animalGentle)
    {
        $this->animalGentle = $animalGentle;

        return $this;
    }

    /**
     * Set Does well in a car
     *
     * @param string $animalGoodInCar
     * @return $this
     */
    public function setAnimalGoodInCar($animalGoodInCar)
    {
        $this->animalGoodInCar = $animalGoodInCar;

        return $this;
    }

    /**
     * Set Goofy
     *
     * @param string $animalGoofy
     * @return $this
     */
    public function setAnimalGoofy($animalGoofy)
    {
        $this->animalGoofy = $animalGoofy;

        return $this;
    }

    /**
     * Set Has allergies
     *
     * @param string $animalHasAllergies
     * @return $this
     */
    public function setAnimalHasAllergies($animalHasAllergies)
    {
        $this->animalHasAllergies = $animalHasAllergies;

        return $this;
    }

    /**
     * Set Hearing impaired
     *
     * @param string $animalHearingImpaired
     * @return $this
     */
    public function setAnimalHearingImpaired($animalHearingImpaired)
    {
        $this->animalHearingImpaired = $animalHearingImpaired;

        return $this;
    }

    /**
     * Set Hypoallergenic
     *
     * @param string $animalHypoallergenic
     * @return $this
     */
    public function setAnimalHypoallergenic($animalHypoallergenic)
    {
        $this->animalHypoallergenic = $animalHypoallergenic;

        return $this;
    }

    /**
     * Set Independent / aloof
     *
     * @param string $animalIndependent
     * @return $this
     */
    public function setAnimalIndependent($animalIndependent)
    {
        $this->animalIndependent = $animalIndependent;

        return $this;
    }

    /**
     * Set Intelligent
     *
     * @param string $animalIntelligent
     * @return $this
     */
    public function setAnimalIntelligent($animalIntelligent)
    {
        $this->animalIntelligent = $animalIntelligent;

        return $this;
    }

    /**
     * Set Lap pet
     *
     * @param string $animalLap
     * @return $this
     */
    public function setAnimalLap($animalLap)
    {
        $this->animalLap = $animalLap;

        return $this;
    }

    /**
     * Set Leash trained
     *
     * @param string $animalLeashtrained
     * @return $this
     */
    public function setAnimalLeashtrained($animalLeashtrained)
    {
        $this->animalLeashtrained = $animalLeashtrained;

        return $this;
    }

    /**
     * Set Needs companion animal
     *
     * @param string $animalNeedsCompanionAnimal
     * @return $this
     */
    public function setAnimalNeedsCompanionAnimal($animalNeedsCompanionAnimal)
    {
        $this->animalNeedsCompanionAnimal = $animalNeedsCompanionAnimal;

        return $this;
    }

    /**
     * Set Cold sensitive
     *
     * @param string $animalNoCold
     * @return $this
     */
    public function setAnimalNoCold($animalNoCold)
    {
        $this->animalNoCold = $animalNoCold;

        return $this;
    }

    /**
     * Set Not good with female dogs
     *
     * @param string $animalNoFemaleDogs
     * @return $this
     */
    public function setAnimalNoFemaleDogs($animalNoFemaleDogs)
    {
        $this->animalNoFemaleDogs = $animalNoFemaleDogs;

        return $this;
    }

    /**
     * Set Heat sensitive
     *
     * @param string $animalNoHeat
     * @return $this
     */
    public function setAnimalNoHeat($animalNoHeat)
    {
        $this->animalNoHeat = $animalNoHeat;

        return $this;
    }

    /**
     * Set Not good with large dogs
     *
     * @param string $animalNoLargeDogs
     * @return $this
     */
    public function setAnimalNoLargeDogs($animalNoLargeDogs)
    {
        $this->animalNoLargeDogs = $animalNoLargeDogs;

        return $this;
    }

    /**
     * Set Not good with male dogs
     *
     * @param string $animalNoMaleDogs
     * @return $this
     */
    public function setAnimalNoMaleDogs($animalNoMaleDogs)
    {
        $this->animalNoMaleDogs = $animalNoMaleDogs;

        return $this;
    }

    /**
     * Set Not good with small dogs
     *
     * @param string $animalNoSmallDogs
     * @return $this
     */
    public function setAnimalNoSmallDogs($animalNoSmallDogs)
    {
        $this->animalNoSmallDogs = $animalNoSmallDogs;

        return $this;
    }

    /**
     * Set Obedient
     *
     * @param string $animalObedient
     * @return $this
     */
    public function setAnimalObedient($animalObedient)
    {
        $this->animalObedient = $animalObedient;

        return $this;
    }

    /**
     * Set Good for seniors / elderly
     *
     * @param string $animalOKForSeniors
     * @return $this
     */
    public function setAnimalOKForSeniors($animalOKForSeniors)
    {
        $this->animalOKForSeniors = $animalOKForSeniors;

        return $this;
    }

    /**
     * Set Good with farm animals
     *
     * @param string $animalOKWithFarmAnimals
     * @return $this
     */
    public function setAnimalOKWithFarmAnimals($animalOKWithFarmAnimals)
    {
        $this->animalOKWithFarmAnimals = $animalOKWithFarmAnimals;

        return $this;
    }

    /**
     * Set Older/ considerate kids only
     *
     * @param string $animalOlderKidsOnly
     * @return $this
     */
    public function setAnimalOlderKidsOnly($animalOlderKidsOnly)
    {
        $this->animalOlderKidsOnly = $animalOlderKidsOnly;

        return $this;
    }

    /**
     * Set Needs ongoing medical care
     *
     * @param string $animalOngoingMedical
     * @return $this
     */
    public function setAnimalOngoingMedical($animalOngoingMedical)
    {
        $this->animalOngoingMedical = $animalOngoingMedical;

        return $this;
    }

    /**
     * Set Playful
     *
     * @param string $animalPlayful
     * @return $this
     */
    public function setAnimalPlayful($animalPlayful)
    {
        $this->animalPlayful = $animalPlayful;

        return $this;
    }

    /**
     * Set Likes toys
     *
     * @param string $animalPlaysToys
     * @return $this
     */
    public function setAnimalPlaysToys($animalPlaysToys)
    {
        $this->animalPlaysToys = $animalPlaysToys;

        return $this;
    }

    /**
     * Set Predatory
     *
     * @param string $animalPredatory
     * @return $this
     */
    public function setAnimalPredatory($animalPredatory)
    {
        $this->animalPredatory = $animalPredatory;

        return $this;
    }

    /**
     * Set Protective / territorial
     *
     * @param string $animalProtective
     * @return $this
     */
    public function setAnimalProtective($animalProtective)
    {
        $this->animalProtective = $animalProtective;

        return $this;
    }

    /**
     * Set Sight impaired
     *
     * @param string $animalSightImpaired
     * @return $this
     */
    public function setAnimalSightImpaired($animalSightImpaired)
    {
        $this->animalSightImpaired = $animalSightImpaired;

        return $this;
    }

    /**
     * Set Skittish
     *
     * @param string $animalSkittish
     * @return $this
     */
    public function setAnimalSkittish($animalSkittish)
    {
        $this->animalSkittish = $animalSkittish;

        return $this;
    }

    /**
     * Set Special diet required
     *
     * @param string $animalSpecialDiet
     * @return $this
     */
    public function setAnimalSpecialDiet($animalSpecialDiet)
    {
        $this->animalSpecialDiet = $animalSpecialDiet;

        return $this;
    }

    /**
     * Set Likes to swim
     *
     * @param string $animalSwims
     * @return $this
     */
    public function setAnimalSwims($animalSwims)
    {
        $this->animalSwims = $animalSwims;

        return $this;
    }

    /**
     * Set Timid / shy
     *
     * @param string $animalTimid
     * @return $this
     */
    public function setAnimalTimid($animalTimid)
    {
        $this->animalTimid = $animalTimid;

        return $this;
    }

    /**
     * Set Owner ID
     *
     * @param integer $ownerID
     * @return $this
     */
    public function setOwnerID($ownerID)
    {
        $this->ownerID = $ownerID;

        return $this;
    }

    /**
     * Set Active
     *
     * @param string $ownerActive
     * @return $this
     */
    public function setOwnerActive($ownerActive)
    {
        $this->ownerActive = $ownerActive;

        return $this;
    }

    /**
     * Set Address
     *
     * @param string $ownerAddress
     * @return $this
     */
    public function setOwnerAddress($ownerAddress)
    {
        $this->ownerAddress = $ownerAddress;

        return $this;
    }

    /**
     * Set Bounced Emails
     *
     * @param string $ownerBounces
     * @return $this
     */
    public function setOwnerBounces($ownerBounces)
    {
        $this->ownerBounces = $ownerBounces;

        return $this;
    }

    /**
     * Set Carrier
     *
     * @param string $ownerCarrier
     * @return $this
     */
    public function setOwnerCarrier($ownerCarrier)
    {
        $this->ownerCarrier = $ownerCarrier;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $ownerCity
     * @return $this
     */
    public function setOwnerCity($ownerCity)
    {
        $this->ownerCity = $ownerCity;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $ownerComment
     * @return $this
     */
    public function setOwnerComment($ownerComment)
    {
        $this->ownerComment = $ownerComment;

        return $this;
    }

    /**
     * Set Company
     *
     * @param string $ownerCompany
     * @return $this
     */
    public function setOwnerCompany($ownerCompany)
    {
        $this->ownerCompany = $ownerCompany;

        return $this;
    }

    /**
     * Set Country
     *
     * @param string $ownerCountry
     * @return $this
     */
    public function setOwnerCountry($ownerCountry)
    {
        $this->ownerCountry = $ownerCountry;

        return $this;
    }

    /**
     * Set County
     *
     * @param string $ownerCounty
     * @return $this
     */
    public function setOwnerCounty($ownerCounty)
    {
        $this->ownerCounty = $ownerCounty;

        return $this;
    }

    /**
     * Set Email
     *
     * @param string $ownerEmail
     * @return $this
     */
    public function setOwnerEmail($ownerEmail)
    {
        $this->ownerEmail = $ownerEmail;

        return $this;
    }

    /**
     * Set Email (Alternate)
     *
     * @param string $ownerEmailAlt
     * @return $this
     */
    public function setOwnerEmailAlt($ownerEmailAlt)
    {
        $this->ownerEmailAlt = $ownerEmailAlt;

        return $this;
    }

    /**
     * Set Email (Text/Pager)
     *
     * @param string $ownerEmailPager
     * @return $this
     */
    public function setOwnerEmailPager($ownerEmailPager)
    {
        $this->ownerEmailPager = $ownerEmailPager;

        return $this;
    }

    /**
     * Set Fax
     *
     * @param string $ownerFax
     * @return $this
     */
    public function setOwnerFax($ownerFax)
    {
        $this->ownerFax = $ownerFax;

        return $this;
    }

    /**
     * Set First Name
     *
     * @param string $ownerFirstname
     * @return $this
     */
    public function setOwnerFirstname($ownerFirstname)
    {
        $this->ownerFirstname = $ownerFirstname;

        return $this;
    }

    /**
     * Set Last Name
     *
     * @param string $ownerLastname
     * @return $this
     */
    public function setOwnerLastname($ownerLastname)
    {
        $this->ownerLastname = $ownerLastname;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $ownerName
     * @return $this
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Set Phone (Cell)
     *
     * @param string $ownerPhoneCell
     * @return $this
     */
    public function setOwnerPhoneCell($ownerPhoneCell)
    {
        $this->ownerPhoneCell = $ownerPhoneCell;

        return $this;
    }

    /**
     * Set Phone (Home)
     *
     * @param string $ownerPhoneHome
     * @return $this
     */
    public function setOwnerPhoneHome($ownerPhoneHome)
    {
        $this->ownerPhoneHome = $ownerPhoneHome;

        return $this;
    }

    /**
     * Set Phone (Work)
     *
     * @param string $ownerPhoneWork
     * @return $this
     */
    public function setOwnerPhoneWork($ownerPhoneWork)
    {
        $this->ownerPhoneWork = $ownerPhoneWork;

        return $this;
    }

    /**
     * Set Phone Extension (Work)
     *
     * @param string $ownerPhoneWorkExt
     * @return $this
     */
    public function setOwnerPhoneWorkExt($ownerPhoneWorkExt)
    {
        $this->ownerPhoneWorkExt = $ownerPhoneWorkExt;

        return $this;
    }

    /**
     * Set Plus4
     *
     * @param string $ownerPlus4
     * @return $this
     */
    public function setOwnerPlus4($ownerPlus4)
    {
        $this->ownerPlus4 = $ownerPlus4;

        return $this;
    }

    /**
     * Set Referred By
     *
     * @param string $ownerReferredBy
     * @return $this
     */
    public function setOwnerReferredBy($ownerReferredBy)
    {
        $this->ownerReferredBy = $ownerReferredBy;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $ownerSalutation
     * @return $this
     */
    public function setOwnerSalutation($ownerSalutation)
    {
        $this->ownerSalutation = $ownerSalutation;

        return $this;
    }

    /**
     * Set Send Mail
     *
     * @param string $ownerSendMail
     * @return $this
     */
    public function setOwnerSendMail($ownerSendMail)
    {
        $this->ownerSendMail = $ownerSendMail;

        return $this;
    }

    /**
     * Set State
     *
     * @param string $ownerState
     * @return $this
     */
    public function setOwnerState($ownerState)
    {
        $this->ownerState = $ownerState;

        return $this;
    }

    /**
     * Set Title
     *
     * @param string $ownerTitle
     * @return $this
     */
    public function setOwnerTitle($ownerTitle)
    {
        $this->ownerTitle = $ownerTitle;

        return $this;
    }

    /**
     * Set Zip/Postal Code
     *
     * @param string $ownerPostalcode
     * @return $this
     */
    public function setOwnerPostalcode($ownerPostalcode)
    {
        $this->ownerPostalcode = $ownerPostalcode;

        return $this;
    }

    /**
     * Set Animals
     *
     * @param string $colonyAnimals
     * @return $this
     */
    public function setColonyAnimals($colonyAnimals)
    {
        $this->colonyAnimals = $colonyAnimals;

        return $this;
    }

    /**
     * Set Caretakers
     *
     * @param string $colonyCaretakers
     * @return $this
     */
    public function setColonyCaretakers($colonyCaretakers)
    {
        $this->colonyCaretakers = $colonyCaretakers;

        return $this;
    }

    /**
     * Set Location
     *
     * @param string $colonyLocation
     * @return $this
     */
    public function setColonyLocation($colonyLocation)
    {
        $this->colonyLocation = $colonyLocation;

        return $this;
    }

    /**
     * Set Location
     *
     * @param integer $colonyLocationID
     * @return $this
     */
    public function setColonyLocationID($colonyLocationID)
    {
        $this->colonyLocationID = $colonyLocationID;

        return $this;
    }

    /**
     * Set Colony
     *
     * @param string $colonyName
     * @return $this
     */
    public function setColonyName($colonyName)
    {
        $this->colonyName = $colonyName;

        return $this;
    }

    /**
     * Set Registered
     *
     * @param \DateTime $colonyRegisteredDate
     * @return $this
     */
    public function setColonyRegisteredDate($colonyRegisteredDate)
    {
        $this->colonyRegisteredDate = $colonyRegisteredDate;

        return $this;
    }

    /**
     * Set Specific Location
     *
     * @param string $colonySpecificLocation
     * @return $this
     */
    public function setColonySpecificLocation($colonySpecificLocation)
    {
        $this->colonySpecificLocation = $colonySpecificLocation;

        return $this;
    }

    /**
     * Set Foster ID
     *
     * @param integer $fosterID
     * @return $this
     */
    public function setFosterID($fosterID)
    {
        $this->fosterID = $fosterID;

        return $this;
    }

    /**
     * Set Active
     *
     * @param string $fosterActive
     * @return $this
     */
    public function setFosterActive($fosterActive)
    {
        $this->fosterActive = $fosterActive;

        return $this;
    }

    /**
     * Set Address
     *
     * @param string $fosterAddress
     * @return $this
     */
    public function setFosterAddress($fosterAddress)
    {
        $this->fosterAddress = $fosterAddress;

        return $this;
    }

    /**
     * Set Bounced Emails
     *
     * @param string $fosterBounces
     * @return $this
     */
    public function setFosterBounces($fosterBounces)
    {
        $this->fosterBounces = $fosterBounces;

        return $this;
    }

    /**
     * Set Carrier
     *
     * @param string $fosterCarrier
     * @return $this
     */
    public function setFosterCarrier($fosterCarrier)
    {
        $this->fosterCarrier = $fosterCarrier;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $fosterCity
     * @return $this
     */
    public function setFosterCity($fosterCity)
    {
        $this->fosterCity = $fosterCity;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $fosterComment
     * @return $this
     */
    public function setFosterComment($fosterComment)
    {
        $this->fosterComment = $fosterComment;

        return $this;
    }

    /**
     * Set Company
     *
     * @param string $fosterCompany
     * @return $this
     */
    public function setFosterCompany($fosterCompany)
    {
        $this->fosterCompany = $fosterCompany;

        return $this;
    }

    /**
     * Set Country
     *
     * @param string $fosterCountry
     * @return $this
     */
    public function setFosterCountry($fosterCountry)
    {
        $this->fosterCountry = $fosterCountry;

        return $this;
    }

    /**
     * Set County
     *
     * @param string $fosterCounty
     * @return $this
     */
    public function setFosterCounty($fosterCounty)
    {
        $this->fosterCounty = $fosterCounty;

        return $this;
    }

    /**
     * Set Email
     *
     * @param string $fosterEmail
     * @return $this
     */
    public function setFosterEmail($fosterEmail)
    {
        $this->fosterEmail = $fosterEmail;

        return $this;
    }

    /**
     * Set Email (Alternate)
     *
     * @param string $fosterEmailAlt
     * @return $this
     */
    public function setFosterEmailAlt($fosterEmailAlt)
    {
        $this->fosterEmailAlt = $fosterEmailAlt;

        return $this;
    }

    /**
     * Set Email (Text/Pager)
     *
     * @param string $fosterEmailPager
     * @return $this
     */
    public function setFosterEmailPager($fosterEmailPager)
    {
        $this->fosterEmailPager = $fosterEmailPager;

        return $this;
    }

    /**
     * Set Fax
     *
     * @param string $fosterFax
     * @return $this
     */
    public function setFosterFax($fosterFax)
    {
        $this->fosterFax = $fosterFax;

        return $this;
    }

    /**
     * Set First Name
     *
     * @param string $fosterFirstname
     * @return $this
     */
    public function setFosterFirstname($fosterFirstname)
    {
        $this->fosterFirstname = $fosterFirstname;

        return $this;
    }

    /**
     * Set Last Name
     *
     * @param string $fosterLastname
     * @return $this
     */
    public function setFosterLastname($fosterLastname)
    {
        $this->fosterLastname = $fosterLastname;

        return $this;
    }

    /**
     * Set Foster
     *
     * @param string $fosterName
     * @return $this
     */
    public function setFosterName($fosterName)
    {
        $this->fosterName = $fosterName;

        return $this;
    }

    /**
     * Set Phone (Cell)
     *
     * @param string $fosterPhoneCell
     * @return $this
     */
    public function setFosterPhoneCell($fosterPhoneCell)
    {
        $this->fosterPhoneCell = $fosterPhoneCell;

        return $this;
    }

    /**
     * Set Phone (Home)
     *
     * @param string $fosterPhoneHome
     * @return $this
     */
    public function setFosterPhoneHome($fosterPhoneHome)
    {
        $this->fosterPhoneHome = $fosterPhoneHome;

        return $this;
    }

    /**
     * Set Phone (Work)
     *
     * @param string $fosterPhoneWork
     * @return $this
     */
    public function setFosterPhoneWork($fosterPhoneWork)
    {
        $this->fosterPhoneWork = $fosterPhoneWork;

        return $this;
    }

    /**
     * Set Phone Extension (Work)
     *
     * @param string $fosterPhoneWorkExt
     * @return $this
     */
    public function setFosterPhoneWorkExt($fosterPhoneWorkExt)
    {
        $this->fosterPhoneWorkExt = $fosterPhoneWorkExt;

        return $this;
    }

    /**
     * Set Plus4
     *
     * @param string $fosterPlus4
     * @return $this
     */
    public function setFosterPlus4($fosterPlus4)
    {
        $this->fosterPlus4 = $fosterPlus4;

        return $this;
    }

    /**
     * Set Referred By
     *
     * @param string $fosterReferredBy
     * @return $this
     */
    public function setFosterReferredBy($fosterReferredBy)
    {
        $this->fosterReferredBy = $fosterReferredBy;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $fosterSalutation
     * @return $this
     */
    public function setFosterSalutation($fosterSalutation)
    {
        $this->fosterSalutation = $fosterSalutation;

        return $this;
    }

    /**
     * Set Send Mail
     *
     * @param string $fosterSendMail
     * @return $this
     */
    public function setFosterSendMail($fosterSendMail)
    {
        $this->fosterSendMail = $fosterSendMail;

        return $this;
    }

    /**
     * Set State
     *
     * @param string $fosterState
     * @return $this
     */
    public function setFosterState($fosterState)
    {
        $this->fosterState = $fosterState;

        return $this;
    }

    /**
     * Set Title
     *
     * @param string $fosterTitle
     * @return $this
     */
    public function setFosterTitle($fosterTitle)
    {
        $this->fosterTitle = $fosterTitle;

        return $this;
    }

    /**
     * Set Zip/Postal Code
     *
     * @param string $fosterPostalcode
     * @return $this
     */
    public function setFosterPostalcode($fosterPostalcode)
    {
        $this->fosterPostalcode = $fosterPostalcode;

        return $this;
    }

    /**
     * Set Address
     *
     * @param string $locationAddress
     * @return $this
     */
    public function setLocationAddress($locationAddress)
    {
        $this->locationAddress = $locationAddress;

        return $this;
    }

    /**
     * Set Animals
     *
     * @param string $locationAnimals
     * @return $this
     */
    public function setLocationAnimals($locationAnimals)
    {
        $this->locationAnimals = $locationAnimals;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $locationCity
     * @return $this
     */
    public function setLocationCity($locationCity)
    {
        $this->locationCity = $locationCity;

        return $this;
    }

    /**
     * Set Colonies
     *
     * @param string $locationColonies
     * @return $this
     */
    public function setLocationColonies($locationColonies)
    {
        $this->locationColonies = $locationColonies;

        return $this;
    }

    /**
     * Set Country
     *
     * @param string $locationCountry
     * @return $this
     */
    public function setLocationCountry($locationCountry)
    {
        $this->locationCountry = $locationCountry;

        return $this;
    }

    /**
     * Set Link
     *
     * @param string $locationUrl
     * @return $this
     */
    public function setLocationUrl($locationUrl)
    {
        $this->locationUrl = $locationUrl;

        return $this;
    }

    /**
     * Set Events
     *
     * @param string $locationEvents
     * @return $this
     */
    public function setLocationEvents($locationEvents)
    {
        $this->locationEvents = $locationEvents;

        return $this;
    }

    /**
     * Set Meet Requests
     *
     * @param string $locationMeetrequests
     * @return $this
     */
    public function setLocationMeetrequests($locationMeetrequests)
    {
        $this->locationMeetrequests = $locationMeetrequests;

        return $this;
    }

    /**
     * Set Location
     *
     * @param string $locationName
     * @return $this
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Set Phone
     *
     * @param string $locationPhone
     * @return $this
     */
    public function setLocationPhone($locationPhone)
    {
        $this->locationPhone = $locationPhone;

        return $this;
    }

    /**
     * Set State
     *
     * @param string $locationState
     * @return $this
     */
    public function setLocationState($locationState)
    {
        $this->locationState = $locationState;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $locationPostalcode
     * @return $this
     */
    public function setLocationPostalcode($locationPostalcode)
    {
        $this->locationPostalcode = $locationPostalcode;

        return $this;
    }

    /**
     * Set Form ID
     *
     * @param string $submittedformID
     * @return $this
     */
    public function setSubmittedformID($submittedformID)
    {
        $this->submittedformID = $submittedformID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param string $submittedformAnimalID
     * @return $this
     */
    public function setSubmittedformAnimalID($submittedformAnimalID)
    {
        $this->submittedformAnimalID = $submittedformAnimalID;

        return $this;
    }

    /**
     * Set Assigned To
     *
     * @param string $submittedformAssignedToID
     * @return $this
     */
    public function setSubmittedformAssignedToID($submittedformAssignedToID)
    {
        $this->submittedformAssignedToID = $submittedformAssignedToID;

        return $this;
    }

    /**
     * Set Comments
     *
     * @param string $submittedformCommentsCount
     * @return $this
     */
    public function setSubmittedformCommentsCount($submittedformCommentsCount)
    {
        $this->submittedformCommentsCount = $submittedformCommentsCount;

        return $this;
    }

    /**
     * Set Comments (inline)
     *
     * @param string $submittedformCommentsInline
     * @return $this
     */
    public function setSubmittedformCommentsInline($submittedformCommentsInline)
    {
        $this->submittedformCommentsInline = $submittedformCommentsInline;

        return $this;
    }

    /**
     * Set Submitted
     *
     * @param \DateTime $submittedformCompletedDate
     * @return $this
     */
    public function setSubmittedformCompletedDate($submittedformCompletedDate)
    {
        $this->submittedformCompletedDate = $submittedformCompletedDate;

        return $this;
    }

    /**
     * Set Form
     *
     * @param string $submittedformFormName
     * @return $this
     */
    public function setSubmittedformFormName($submittedformFormName)
    {
        $this->submittedformFormName = $submittedformFormName;

        return $this;
    }

    /**
     * Set Open
     *
     * @param string $submittedformPending
     * @return $this
     */
    public function setSubmittedformPending($submittedformPending)
    {
        $this->submittedformPending = $submittedformPending;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $submittedformStatus
     * @return $this
     */
    public function setSubmittedformStatus($submittedformStatus)
    {
        $this->submittedformStatus = $submittedformStatus;

        return $this;
    }

    /**
     * Set Steps
     *
     * @param string $submittedformStepsCount
     * @return $this
     */
    public function setSubmittedformStepsCount($submittedformStepsCount)
    {
        $this->submittedformStepsCount = $submittedformStepsCount;

        return $this;
    }

    /**
     * Set Submitter ID
     *
     * @param integer $submitterID
     * @return $this
     */
    public function setSubmitterID($submitterID)
    {
        $this->submitterID = $submitterID;

        return $this;
    }

    /**
     * Set Active
     *
     * @param string $submitterActive
     * @return $this
     */
    public function setSubmitterActive($submitterActive)
    {
        $this->submitterActive = $submitterActive;

        return $this;
    }

    /**
     * Set Address
     *
     * @param string $submitterAddress
     * @return $this
     */
    public function setSubmitterAddress($submitterAddress)
    {
        $this->submitterAddress = $submitterAddress;

        return $this;
    }

    /**
     * Set Bounced Emails
     *
     * @param string $submitterBounces
     * @return $this
     */
    public function setSubmitterBounces($submitterBounces)
    {
        $this->submitterBounces = $submitterBounces;

        return $this;
    }

    /**
     * Set Carrier
     *
     * @param string $submitterCarrier
     * @return $this
     */
    public function setSubmitterCarrier($submitterCarrier)
    {
        $this->submitterCarrier = $submitterCarrier;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $submitterCity
     * @return $this
     */
    public function setSubmitterCity($submitterCity)
    {
        $this->submitterCity = $submitterCity;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $submitterComment
     * @return $this
     */
    public function setSubmitterComment($submitterComment)
    {
        $this->submitterComment = $submitterComment;

        return $this;
    }

    /**
     * Set Company
     *
     * @param string $submitterCompany
     * @return $this
     */
    public function setSubmitterCompany($submitterCompany)
    {
        $this->submitterCompany = $submitterCompany;

        return $this;
    }

    /**
     * Set Country
     *
     * @param string $submitterCountry
     * @return $this
     */
    public function setSubmitterCountry($submitterCountry)
    {
        $this->submitterCountry = $submitterCountry;

        return $this;
    }

    /**
     * Set County
     *
     * @param string $submitterCounty
     * @return $this
     */
    public function setSubmitterCounty($submitterCounty)
    {
        $this->submitterCounty = $submitterCounty;

        return $this;
    }

    /**
     * Set Email
     *
     * @param string $submitterEmail
     * @return $this
     */
    public function setSubmitterEmail($submitterEmail)
    {
        $this->submitterEmail = $submitterEmail;

        return $this;
    }

    /**
     * Set Email (Alternate)
     *
     * @param string $submitterEmailAlt
     * @return $this
     */
    public function setSubmitterEmailAlt($submitterEmailAlt)
    {
        $this->submitterEmailAlt = $submitterEmailAlt;

        return $this;
    }

    /**
     * Set Email (Text/Pager)
     *
     * @param string $submitterEmailPager
     * @return $this
     */
    public function setSubmitterEmailPager($submitterEmailPager)
    {
        $this->submitterEmailPager = $submitterEmailPager;

        return $this;
    }

    /**
     * Set Fax
     *
     * @param string $submitterFax
     * @return $this
     */
    public function setSubmitterFax($submitterFax)
    {
        $this->submitterFax = $submitterFax;

        return $this;
    }

    /**
     * Set First Name
     *
     * @param string $submitterFirstname
     * @return $this
     */
    public function setSubmitterFirstname($submitterFirstname)
    {
        $this->submitterFirstname = $submitterFirstname;

        return $this;
    }

    /**
     * Set Last Name
     *
     * @param string $submitterLastname
     * @return $this
     */
    public function setSubmitterLastname($submitterLastname)
    {
        $this->submitterLastname = $submitterLastname;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $submitterName
     * @return $this
     */
    public function setSubmitterName($submitterName)
    {
        $this->submitterName = $submitterName;

        return $this;
    }

    /**
     * Set Phone (Cell)
     *
     * @param string $submitterPhoneCell
     * @return $this
     */
    public function setSubmitterPhoneCell($submitterPhoneCell)
    {
        $this->submitterPhoneCell = $submitterPhoneCell;

        return $this;
    }

    /**
     * Set Phone (Home)
     *
     * @param string $submitterPhoneHome
     * @return $this
     */
    public function setSubmitterPhoneHome($submitterPhoneHome)
    {
        $this->submitterPhoneHome = $submitterPhoneHome;

        return $this;
    }

    /**
     * Set Phone (Work)
     *
     * @param string $submitterPhoneWork
     * @return $this
     */
    public function setSubmitterPhoneWork($submitterPhoneWork)
    {
        $this->submitterPhoneWork = $submitterPhoneWork;

        return $this;
    }

    /**
     * Set Phone Extension (Work)
     *
     * @param string $submitterPhoneWorkExt
     * @return $this
     */
    public function setSubmitterPhoneWorkExt($submitterPhoneWorkExt)
    {
        $this->submitterPhoneWorkExt = $submitterPhoneWorkExt;

        return $this;
    }

    /**
     * Set Plus4
     *
     * @param string $submitterPlus4
     * @return $this
     */
    public function setSubmitterPlus4($submitterPlus4)
    {
        $this->submitterPlus4 = $submitterPlus4;

        return $this;
    }

    /**
     * Set Referred By
     *
     * @param string $submitterReferredBy
     * @return $this
     */
    public function setSubmitterReferredBy($submitterReferredBy)
    {
        $this->submitterReferredBy = $submitterReferredBy;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $submitterSalutation
     * @return $this
     */
    public function setSubmitterSalutation($submitterSalutation)
    {
        $this->submitterSalutation = $submitterSalutation;

        return $this;
    }

    /**
     * Set Send Mail
     *
     * @param string $submitterSendMail
     * @return $this
     */
    public function setSubmitterSendMail($submitterSendMail)
    {
        $this->submitterSendMail = $submitterSendMail;

        return $this;
    }

    /**
     * Set State
     *
     * @param string $submitterState
     * @return $this
     */
    public function setSubmitterState($submitterState)
    {
        $this->submitterState = $submitterState;

        return $this;
    }

    /**
     * Set Title
     *
     * @param string $submitterTitle
     * @return $this
     */
    public function setSubmitterTitle($submitterTitle)
    {
        $this->submitterTitle = $submitterTitle;

        return $this;
    }

    /**
     * Set Zip/Postal Code
     *
     * @param string $submitterPostalcode
     * @return $this
     */
    public function setSubmitterPostalcode($submitterPostalcode)
    {
        $this->submitterPostalcode = $submitterPostalcode;

        return $this;
    }

    /**
     * Set Active
     *
     * @param string $transferredtoActive
     * @return $this
     */
    public function setTransferredtoActive($transferredtoActive)
    {
        $this->transferredtoActive = $transferredtoActive;

        return $this;
    }

    /**
     * Set Address
     *
     * @param string $transferredtoAddress
     * @return $this
     */
    public function setTransferredtoAddress($transferredtoAddress)
    {
        $this->transferredtoAddress = $transferredtoAddress;

        return $this;
    }

    /**
     * Set Bounced Emails
     *
     * @param string $transferredtoBounces
     * @return $this
     */
    public function setTransferredtoBounces($transferredtoBounces)
    {
        $this->transferredtoBounces = $transferredtoBounces;

        return $this;
    }

    /**
     * Set Carrier
     *
     * @param string $transferredtoCarrier
     * @return $this
     */
    public function setTransferredtoCarrier($transferredtoCarrier)
    {
        $this->transferredtoCarrier = $transferredtoCarrier;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $transferredtoCity
     * @return $this
     */
    public function setTransferredtoCity($transferredtoCity)
    {
        $this->transferredtoCity = $transferredtoCity;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $transferredtoComment
     * @return $this
     */
    public function setTransferredtoComment($transferredtoComment)
    {
        $this->transferredtoComment = $transferredtoComment;

        return $this;
    }

    /**
     * Set Company
     *
     * @param string $transferredtoCompany
     * @return $this
     */
    public function setTransferredtoCompany($transferredtoCompany)
    {
        $this->transferredtoCompany = $transferredtoCompany;

        return $this;
    }

    /**
     * Set Transferred To ID
     *
     * @param string $transferredtoID
     * @return $this
     */
    public function setTransferredtoID($transferredtoID)
    {
        $this->transferredtoID = $transferredtoID;

        return $this;
    }

    /**
     * Set Country
     *
     * @param string $transferredtoCountry
     * @return $this
     */
    public function setTransferredtoCountry($transferredtoCountry)
    {
        $this->transferredtoCountry = $transferredtoCountry;

        return $this;
    }

    /**
     * Set County
     *
     * @param string $transferredtoCounty
     * @return $this
     */
    public function setTransferredtoCounty($transferredtoCounty)
    {
        $this->transferredtoCounty = $transferredtoCounty;

        return $this;
    }

    /**
     * Set Email
     *
     * @param string $transferredtoEmail
     * @return $this
     */
    public function setTransferredtoEmail($transferredtoEmail)
    {
        $this->transferredtoEmail = $transferredtoEmail;

        return $this;
    }

    /**
     * Set Email (Alternate)
     *
     * @param string $transferredtoEmailAlt
     * @return $this
     */
    public function setTransferredtoEmailAlt($transferredtoEmailAlt)
    {
        $this->transferredtoEmailAlt = $transferredtoEmailAlt;

        return $this;
    }

    /**
     * Set Email (Text/Pager)
     *
     * @param string $transferredtoEmailPager
     * @return $this
     */
    public function setTransferredtoEmailPager($transferredtoEmailPager)
    {
        $this->transferredtoEmailPager = $transferredtoEmailPager;

        return $this;
    }

    /**
     * Set Fax
     *
     * @param string $transferredtoFax
     * @return $this
     */
    public function setTransferredtoFax($transferredtoFax)
    {
        $this->transferredtoFax = $transferredtoFax;

        return $this;
    }

    /**
     * Set First Name
     *
     * @param string $transferredtoFirstname
     * @return $this
     */
    public function setTransferredtoFirstname($transferredtoFirstname)
    {
        $this->transferredtoFirstname = $transferredtoFirstname;

        return $this;
    }

    /**
     * Set Last Name
     *
     * @param string $transferredtoLastname
     * @return $this
     */
    public function setTransferredtoLastname($transferredtoLastname)
    {
        $this->transferredtoLastname = $transferredtoLastname;

        return $this;
    }

    /**
     * Set Transferred to Name
     *
     * @param string $transferredtoName
     * @return $this
     */
    public function setTransferredtoName($transferredtoName)
    {
        $this->transferredtoName = $transferredtoName;

        return $this;
    }

    /**
     * Set Phone (Cell)
     *
     * @param string $transferredtoPhoneCell
     * @return $this
     */
    public function setTransferredtoPhoneCell($transferredtoPhoneCell)
    {
        $this->transferredtoPhoneCell = $transferredtoPhoneCell;

        return $this;
    }

    /**
     * Set Phone (Home)
     *
     * @param string $transferredtoPhoneHome
     * @return $this
     */
    public function setTransferredtoPhoneHome($transferredtoPhoneHome)
    {
        $this->transferredtoPhoneHome = $transferredtoPhoneHome;

        return $this;
    }

    /**
     * Set Phone (Work)
     *
     * @param string $transferredtoPhoneWork
     * @return $this
     */
    public function setTransferredtoPhoneWork($transferredtoPhoneWork)
    {
        $this->transferredtoPhoneWork = $transferredtoPhoneWork;

        return $this;
    }

    /**
     * Set Phone Extension (Work)
     *
     * @param string $transferredtoPhoneWorkExt
     * @return $this
     */
    public function setTransferredtoPhoneWorkExt($transferredtoPhoneWorkExt)
    {
        $this->transferredtoPhoneWorkExt = $transferredtoPhoneWorkExt;

        return $this;
    }

    /**
     * Set Plus4
     *
     * @param string $transferredtoPlus4
     * @return $this
     */
    public function setTransferredtoPlus4($transferredtoPlus4)
    {
        $this->transferredtoPlus4 = $transferredtoPlus4;

        return $this;
    }

    /**
     * Set Referred By
     *
     * @param string $transferredtoReferredBy
     * @return $this
     */
    public function setTransferredtoReferredBy($transferredtoReferredBy)
    {
        $this->transferredtoReferredBy = $transferredtoReferredBy;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $transferredtoSalutation
     * @return $this
     */
    public function setTransferredtoSalutation($transferredtoSalutation)
    {
        $this->transferredtoSalutation = $transferredtoSalutation;

        return $this;
    }

    /**
     * Set Send Mail
     *
     * @param string $transferredtoSendMail
     * @return $this
     */
    public function setTransferredtoSendMail($transferredtoSendMail)
    {
        $this->transferredtoSendMail = $transferredtoSendMail;

        return $this;
    }

    /**
     * Set State
     *
     * @param string $transferredtoState
     * @return $this
     */
    public function setTransferredtoState($transferredtoState)
    {
        $this->transferredtoState = $transferredtoState;

        return $this;
    }

    /**
     * Set Title
     *
     * @param string $transferredtoTitle
     * @return $this
     */
    public function setTransferredtoTitle($transferredtoTitle)
    {
        $this->transferredtoTitle = $transferredtoTitle;

        return $this;
    }

    /**
     * Set Zip/Postal Code
     *
     * @param string $transferredtoPostalcode
     * @return $this
     */
    public function setTransferredtoPostalcode($transferredtoPostalcode)
    {
        $this->transferredtoPostalcode = $transferredtoPostalcode;

        return $this;
    }

    /**
     * Set Groups
     *
     * @param integer $animalGroups
     * @return $this
     */
    public function setAnimalGroups($animalGroups)
    {
        $this->animalGroups = $animalGroups;

        return $this;
    }

    /**
     * Set Export accounts
     *
     * @param integer $animalExportAccounts
     * @return $this
     */
    public function setAnimalExportAccounts($animalExportAccounts)
    {
        $this->animalExportAccounts = $animalExportAccounts;

        return $this;
    }

    /**
     * Set Pictures
     *
     * @param string $animalPictures
     * @return $this
     */
    public function setAnimalPictures($animalPictures)
    {
        $this->animalPictures = $animalPictures;

        return $this;
    }

    /**
     * Set Videos
     *
     * @param string $animalVideos
     * @return $this
     */
    public function setAnimalVideos($animalVideos)
    {
        $this->animalVideos = $animalVideos;

        return $this;
    }

    /**
     * Set Video URLs
     *
     * @param string $animalVideoUrls
     * @return $this
     */
    public function setAnimalVideoUrls($animalVideoUrls)
    {
        $this->animalVideoUrls = $animalVideoUrls;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->animalActivityLevel !== null) $parameterArray['animalActivityLevel'] = $this->animalActivityLevel;
        if ($this->animalAdoptedDate !== null) $parameterArray['animalAdoptedDate'] = $this->animalAdoptedDate;
        if ($this->animalAdoptionFee !== null) $parameterArray['animalAdoptionFee'] = $this->animalAdoptionFee;
        if ($this->animalAdoptionLead !== null) $parameterArray['animalAdoptionLead'] = $this->animalAdoptionLead;
        if ($this->animalAdoptionLeadID !== null) $parameterArray['animalAdoptionLeadID'] = $this->animalAdoptionLeadID;
        if ($this->animalAltered !== null) $parameterArray['animalAltered'] = $this->animalAltered;
        if ($this->animalApplicationID !== null) $parameterArray['animalApplicationID'] = $this->animalApplicationID;
        if ($this->animalAvailableDate !== null) $parameterArray['animalAvailableDate'] = $this->animalAvailableDate;
        if ($this->animalBirthdate !== null) $parameterArray['animalBirthdate'] = $this->animalBirthdate;
        if ($this->animalBirthdateExact !== null) $parameterArray['animalBirthdateExact'] = $this->animalBirthdateExact;
        if ($this->animalBreed !== null) $parameterArray['animalBreed'] = $this->animalBreed;
        if ($this->animalCoatLength !== null) $parameterArray['animalCoatLength'] = $this->animalCoatLength;
        if ($this->animalColonyID !== null) $parameterArray['animalColonyID'] = $this->animalColonyID;
        if ($this->animalColor !== null) $parameterArray['animalColor'] = $this->animalColor;
        if ($this->animalColorID !== null) $parameterArray['animalColorID'] = $this->animalColorID;
        if ($this->animalColorDetails !== null) $parameterArray['animalColorDetails'] = $this->animalColorDetails;
        if ($this->animalCondition !== null) $parameterArray['animalCondition'] = $this->animalCondition;
        if ($this->animalConditionID !== null) $parameterArray['animalConditionID'] = $this->animalConditionID;
        if ($this->animalCost !== null) $parameterArray['animalCost'] = $this->animalCost;
        if ($this->animalCourtesy !== null) $parameterArray['animalCourtesy'] = $this->animalCourtesy;
        if ($this->animalCreatedDate !== null) $parameterArray['animalCreatedDate'] = $this->animalCreatedDate;
        if ($this->animalCreatedBy !== null) $parameterArray['animalCreatedBy'] = $this->animalCreatedBy;
        if ($this->animalCreatedByID !== null) $parameterArray['animalCreatedByID'] = $this->animalCreatedByID;
        if ($this->animalCreatedTimeframe !== null) $parameterArray['animalCreatedTimeframe'] = $this->animalCreatedTimeframe;
        if ($this->animalDaysInFoster !== null) $parameterArray['animalDaysInFoster'] = $this->animalDaysInFoster;
        if ($this->animalDeclawed !== null) $parameterArray['animalDeclawed'] = $this->animalDeclawed;
        if ($this->animalDescription !== null) $parameterArray['animalDescription'] = $this->animalDescription;
        if ($this->animalDescriptionPlain !== null) $parameterArray['animalDescriptionPlain'] = $this->animalDescriptionPlain;
        if ($this->animalDistinguishingMarks !== null) $parameterArray['animalDistinguishingMarks'] = $this->animalDistinguishingMarks;
        if ($this->animalAllowExport !== null) $parameterArray['animalAllowExport'] = $this->animalAllowExport;
        if ($this->animalEarType !== null) $parameterArray['animalEarType'] = $this->animalEarType;
        if ($this->animalEnergyLevel !== null) $parameterArray['animalEnergyLevel'] = $this->animalEnergyLevel;
        if ($this->animalExerciseNeeds !== null) $parameterArray['animalExerciseNeeds'] = $this->animalExerciseNeeds;
        if ($this->animalEyeColor !== null) $parameterArray['animalEyeColor'] = $this->animalEyeColor;
        if ($this->animalFence !== null) $parameterArray['animalFence'] = $this->animalFence;
        if ($this->animalFosterID !== null) $parameterArray['animalFosterID'] = $this->animalFosterID;
        if ($this->animalFound !== null) $parameterArray['animalFound'] = $this->animalFound;
        if ($this->animalFoundDate !== null) $parameterArray['animalFoundDate'] = $this->animalFoundDate;
        if ($this->animalFoundPostalcode !== null) $parameterArray['animalFoundPostalcode'] = $this->animalFoundPostalcode;
        if ($this->animalGeneralAge !== null) $parameterArray['animalGeneralAge'] = $this->animalGeneralAge;
        if ($this->animalGeneralSizePotential !== null) $parameterArray['animalGeneralSizePotential'] = $this->animalGeneralSizePotential;
        if ($this->animalGroomingNeeds !== null) $parameterArray['animalGroomingNeeds'] = $this->animalGroomingNeeds;
        if ($this->animalHighlightOrder !== null) $parameterArray['animalHighlightOrder'] = $this->animalHighlightOrder;
        if ($this->animalHousetrained !== null) $parameterArray['animalHousetrained'] = $this->animalHousetrained;
        if ($this->animalIndoorOutdoor !== null) $parameterArray['animalIndoorOutdoor'] = $this->animalIndoorOutdoor;
        if ($this->animalIntakes !== null) $parameterArray['animalIntakes'] = $this->animalIntakes;
        if ($this->animalInternalID !== null) $parameterArray['animalInternalID'] = $this->animalInternalID;
        if ($this->animalKillDate !== null) $parameterArray['animalKillDate'] = $this->animalKillDate;
        if ($this->animalKillReason !== null) $parameterArray['animalKillReason'] = $this->animalKillReason;
        if ($this->animalUpdatedBy !== null) $parameterArray['animalUpdatedBy'] = $this->animalUpdatedBy;
        if ($this->animalUpdatedByID !== null) $parameterArray['animalUpdatedByID'] = $this->animalUpdatedByID;
        if ($this->animalUpdatedDate !== null) $parameterArray['animalUpdatedDate'] = $this->animalUpdatedDate;
        if ($this->animalUpdatedTimeframe !== null) $parameterArray['animalUpdatedTimeframe'] = $this->animalUpdatedTimeframe;
        if ($this->animalLocationID !== null) $parameterArray['animalLocationID'] = $this->animalLocationID;
        if ($this->animalLocationPublic !== null) $parameterArray['animalLocationPublic'] = $this->animalLocationPublic;
        if ($this->animalMicrochipped !== null) $parameterArray['animalMicrochipped'] = $this->animalMicrochipped;
        if ($this->animalMicrochipNumber !== null) $parameterArray['animalMicrochipNumber'] = $this->animalMicrochipNumber;
        if ($this->animalMicrochipVendor !== null) $parameterArray['animalMicrochipVendor'] = $this->animalMicrochipVendor;
        if ($this->animalMixedBreed !== null) $parameterArray['animalMixedBreed'] = $this->animalMixedBreed;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalSpecialneeds !== null) $parameterArray['animalSpecialneeds'] = $this->animalSpecialneeds;
        if ($this->animalSpecialneedsDescription !== null) $parameterArray['animalSpecialneedsDescription'] = $this->animalSpecialneedsDescription;
        if ($this->animalNeedsFoster !== null) $parameterArray['animalNeedsFoster'] = $this->animalNeedsFoster;
        if ($this->animalNewPeople !== null) $parameterArray['animalNewPeople'] = $this->animalNewPeople;
        if ($this->animalNotes !== null) $parameterArray['animalNotes'] = $this->animalNotes;
        if ($this->animalNotHousetrainedReason !== null) $parameterArray['animalNotHousetrainedReason'] = $this->animalNotHousetrainedReason;
        if ($this->animalObedienceTraining !== null) $parameterArray['animalObedienceTraining'] = $this->animalObedienceTraining;
        if ($this->animalOKWithAdults !== null) $parameterArray['animalOKWithAdults'] = $this->animalOKWithAdults;
        if ($this->animalOKWithCats !== null) $parameterArray['animalOKWithCats'] = $this->animalOKWithCats;
        if ($this->animalOKWithDogs !== null) $parameterArray['animalOKWithDogs'] = $this->animalOKWithDogs;
        if ($this->animalOKWithKids !== null) $parameterArray['animalOKWithKids'] = $this->animalOKWithKids;
        if ($this->animalOpenIntakes !== null) $parameterArray['animalOpenIntakes'] = $this->animalOpenIntakes;
        if ($this->animalOrigin !== null) $parameterArray['animalOrigin'] = $this->animalOrigin;
        if ($this->animalOthernames !== null) $parameterArray['animalOthernames'] = $this->animalOthernames;
        if ($this->animalOutcomes !== null) $parameterArray['animalOutcomes'] = $this->animalOutcomes;
        if ($this->animalOwnerExperience !== null) $parameterArray['animalOwnerExperience'] = $this->animalOwnerExperience;
        if ($this->animalOwnerID !== null) $parameterArray['animalOwnerID'] = $this->animalOwnerID;
        if ($this->animalPattern !== null) $parameterArray['animalPattern'] = $this->animalPattern;
        if ($this->animalPatternID !== null) $parameterArray['animalPatternID'] = $this->animalPatternID;
        if ($this->animalAdoptionPending !== null) $parameterArray['animalAdoptionPending'] = $this->animalAdoptionPending;
        if ($this->animalPrimaryBreed !== null) $parameterArray['animalPrimaryBreed'] = $this->animalPrimaryBreed;
        if ($this->animalPrimaryBreedID !== null) $parameterArray['animalPrimaryBreedID'] = $this->animalPrimaryBreedID;
        if ($this->animalReceivedDate !== null) $parameterArray['animalReceivedDate'] = $this->animalReceivedDate;
        if ($this->animalRescueID !== null) $parameterArray['animalRescueID'] = $this->animalRescueID;
        if ($this->animalSecondaryBreed !== null) $parameterArray['animalSecondaryBreed'] = $this->animalSecondaryBreed;
        if ($this->animalSecondaryBreedID !== null) $parameterArray['animalSecondaryBreedID'] = $this->animalSecondaryBreedID;
        if ($this->animalSex !== null) $parameterArray['animalSex'] = $this->animalSex;
        if ($this->animalShared !== null) $parameterArray['animalShared'] = $this->animalShared;
        if ($this->animalShedding !== null) $parameterArray['animalShedding'] = $this->animalShedding;
        if ($this->animalSizeCurrent !== null) $parameterArray['animalSizeCurrent'] = $this->animalSizeCurrent;
        if ($this->animalSizePotential !== null) $parameterArray['animalSizePotential'] = $this->animalSizePotential;
        if ($this->animalSizeUOM !== null) $parameterArray['animalSizeUOM'] = $this->animalSizeUOM;
        if ($this->animalSpecies !== null) $parameterArray['animalSpecies'] = $this->animalSpecies;
        if ($this->animalSpeciesID !== null) $parameterArray['animalSpeciesID'] = $this->animalSpeciesID;
        if ($this->animalSponsorable !== null) $parameterArray['animalSponsorable'] = $this->animalSponsorable;
        if ($this->animalSponsors !== null) $parameterArray['animalSponsors'] = $this->animalSponsors;
        if ($this->animalSponsorshipDetails !== null) $parameterArray['animalSponsorshipDetails'] = $this->animalSponsorshipDetails;
        if ($this->animalSponsorshipMinimum !== null) $parameterArray['animalSponsorshipMinimum'] = $this->animalSponsorshipMinimum;
        if ($this->animalStatus !== null) $parameterArray['animalStatus'] = $this->animalStatus;
        if ($this->animalStatusID !== null) $parameterArray['animalStatusID'] = $this->animalStatusID;
        if ($this->animalSummary !== null) $parameterArray['animalSummary'] = $this->animalSummary;
        if ($this->animalTailType !== null) $parameterArray['animalTailType'] = $this->animalTailType;
        if ($this->animalTransferredToID !== null) $parameterArray['animalTransferredToID'] = $this->animalTransferredToID;
        if ($this->animalUptodate !== null) $parameterArray['animalUptodate'] = $this->animalUptodate;
        if ($this->animalVocal !== null) $parameterArray['animalVocal'] = $this->animalVocal;
        if ($this->animalYardRequired !== null) $parameterArray['animalYardRequired'] = $this->animalYardRequired;
        if ($this->animalAffectionate !== null) $parameterArray['animalAffectionate'] = $this->animalAffectionate;
        if ($this->animalApartment !== null) $parameterArray['animalApartment'] = $this->animalApartment;
        if ($this->animalCratetrained !== null) $parameterArray['animalCratetrained'] = $this->animalCratetrained;
        if ($this->animalDrools !== null) $parameterArray['animalDrools'] = $this->animalDrools;
        if ($this->animalEagerToPlease !== null) $parameterArray['animalEagerToPlease'] = $this->animalEagerToPlease;
        if ($this->animalEscapes !== null) $parameterArray['animalEscapes'] = $this->animalEscapes;
        if ($this->animalEventempered !== null) $parameterArray['animalEventempered'] = $this->animalEventempered;
        if ($this->animalFetches !== null) $parameterArray['animalFetches'] = $this->animalFetches;
        if ($this->animalGentle !== null) $parameterArray['animalGentle'] = $this->animalGentle;
        if ($this->animalGoodInCar !== null) $parameterArray['animalGoodInCar'] = $this->animalGoodInCar;
        if ($this->animalGoofy !== null) $parameterArray['animalGoofy'] = $this->animalGoofy;
        if ($this->animalHasAllergies !== null) $parameterArray['animalHasAllergies'] = $this->animalHasAllergies;
        if ($this->animalHearingImpaired !== null) $parameterArray['animalHearingImpaired'] = $this->animalHearingImpaired;
        if ($this->animalHypoallergenic !== null) $parameterArray['animalHypoallergenic'] = $this->animalHypoallergenic;
        if ($this->animalIndependent !== null) $parameterArray['animalIndependent'] = $this->animalIndependent;
        if ($this->animalIntelligent !== null) $parameterArray['animalIntelligent'] = $this->animalIntelligent;
        if ($this->animalLap !== null) $parameterArray['animalLap'] = $this->animalLap;
        if ($this->animalLeashtrained !== null) $parameterArray['animalLeashtrained'] = $this->animalLeashtrained;
        if ($this->animalNeedsCompanionAnimal !== null) $parameterArray['animalNeedsCompanionAnimal'] = $this->animalNeedsCompanionAnimal;
        if ($this->animalNoCold !== null) $parameterArray['animalNoCold'] = $this->animalNoCold;
        if ($this->animalNoFemaleDogs !== null) $parameterArray['animalNoFemaleDogs'] = $this->animalNoFemaleDogs;
        if ($this->animalNoHeat !== null) $parameterArray['animalNoHeat'] = $this->animalNoHeat;
        if ($this->animalNoLargeDogs !== null) $parameterArray['animalNoLargeDogs'] = $this->animalNoLargeDogs;
        if ($this->animalNoMaleDogs !== null) $parameterArray['animalNoMaleDogs'] = $this->animalNoMaleDogs;
        if ($this->animalNoSmallDogs !== null) $parameterArray['animalNoSmallDogs'] = $this->animalNoSmallDogs;
        if ($this->animalObedient !== null) $parameterArray['animalObedient'] = $this->animalObedient;
        if ($this->animalOKForSeniors !== null) $parameterArray['animalOKForSeniors'] = $this->animalOKForSeniors;
        if ($this->animalOKWithFarmAnimals !== null) $parameterArray['animalOKWithFarmAnimals'] = $this->animalOKWithFarmAnimals;
        if ($this->animalOlderKidsOnly !== null) $parameterArray['animalOlderKidsOnly'] = $this->animalOlderKidsOnly;
        if ($this->animalOngoingMedical !== null) $parameterArray['animalOngoingMedical'] = $this->animalOngoingMedical;
        if ($this->animalPlayful !== null) $parameterArray['animalPlayful'] = $this->animalPlayful;
        if ($this->animalPlaysToys !== null) $parameterArray['animalPlaysToys'] = $this->animalPlaysToys;
        if ($this->animalPredatory !== null) $parameterArray['animalPredatory'] = $this->animalPredatory;
        if ($this->animalProtective !== null) $parameterArray['animalProtective'] = $this->animalProtective;
        if ($this->animalSightImpaired !== null) $parameterArray['animalSightImpaired'] = $this->animalSightImpaired;
        if ($this->animalSkittish !== null) $parameterArray['animalSkittish'] = $this->animalSkittish;
        if ($this->animalSpecialDiet !== null) $parameterArray['animalSpecialDiet'] = $this->animalSpecialDiet;
        if ($this->animalSwims !== null) $parameterArray['animalSwims'] = $this->animalSwims;
        if ($this->animalTimid !== null) $parameterArray['animalTimid'] = $this->animalTimid;
        if ($this->ownerID !== null) $parameterArray['ownerID'] = $this->ownerID;
        if ($this->ownerActive !== null) $parameterArray['ownerActive'] = $this->ownerActive;
        if ($this->ownerAddress !== null) $parameterArray['ownerAddress'] = $this->ownerAddress;
        if ($this->ownerBounces !== null) $parameterArray['ownerBounces'] = $this->ownerBounces;
        if ($this->ownerCarrier !== null) $parameterArray['ownerCarrier'] = $this->ownerCarrier;
        if ($this->ownerCity !== null) $parameterArray['ownerCity'] = $this->ownerCity;
        if ($this->ownerComment !== null) $parameterArray['ownerComment'] = $this->ownerComment;
        if ($this->ownerCompany !== null) $parameterArray['ownerCompany'] = $this->ownerCompany;
        if ($this->ownerCountry !== null) $parameterArray['ownerCountry'] = $this->ownerCountry;
        if ($this->ownerCounty !== null) $parameterArray['ownerCounty'] = $this->ownerCounty;
        if ($this->ownerEmail !== null) $parameterArray['ownerEmail'] = $this->ownerEmail;
        if ($this->ownerEmailAlt !== null) $parameterArray['ownerEmailAlt'] = $this->ownerEmailAlt;
        if ($this->ownerEmailPager !== null) $parameterArray['ownerEmailPager'] = $this->ownerEmailPager;
        if ($this->ownerFax !== null) $parameterArray['ownerFax'] = $this->ownerFax;
        if ($this->ownerFirstname !== null) $parameterArray['ownerFirstname'] = $this->ownerFirstname;
        if ($this->ownerLastname !== null) $parameterArray['ownerLastname'] = $this->ownerLastname;
        if ($this->ownerName !== null) $parameterArray['ownerName'] = $this->ownerName;
        if ($this->ownerPhoneCell !== null) $parameterArray['ownerPhoneCell'] = $this->ownerPhoneCell;
        if ($this->ownerPhoneHome !== null) $parameterArray['ownerPhoneHome'] = $this->ownerPhoneHome;
        if ($this->ownerPhoneWork !== null) $parameterArray['ownerPhoneWork'] = $this->ownerPhoneWork;
        if ($this->ownerPhoneWorkExt !== null) $parameterArray['ownerPhoneWorkExt'] = $this->ownerPhoneWorkExt;
        if ($this->ownerPlus4 !== null) $parameterArray['ownerPlus4'] = $this->ownerPlus4;
        if ($this->ownerReferredBy !== null) $parameterArray['ownerReferredBy'] = $this->ownerReferredBy;
        if ($this->ownerSalutation !== null) $parameterArray['ownerSalutation'] = $this->ownerSalutation;
        if ($this->ownerSendMail !== null) $parameterArray['ownerSendMail'] = $this->ownerSendMail;
        if ($this->ownerState !== null) $parameterArray['ownerState'] = $this->ownerState;
        if ($this->ownerTitle !== null) $parameterArray['ownerTitle'] = $this->ownerTitle;
        if ($this->ownerPostalcode !== null) $parameterArray['ownerPostalcode'] = $this->ownerPostalcode;
        if ($this->colonyAnimals !== null) $parameterArray['colonyAnimals'] = $this->colonyAnimals;
        if ($this->colonyCaretakers !== null) $parameterArray['colonyCaretakers'] = $this->colonyCaretakers;
        if ($this->colonyLocation !== null) $parameterArray['colonyLocation'] = $this->colonyLocation;
        if ($this->colonyLocationID !== null) $parameterArray['colonyLocationID'] = $this->colonyLocationID;
        if ($this->colonyName !== null) $parameterArray['colonyName'] = $this->colonyName;
        if ($this->colonyRegisteredDate !== null) $parameterArray['colonyRegisteredDate'] = $this->colonyRegisteredDate;
        if ($this->colonySpecificLocation !== null) $parameterArray['colonySpecificLocation'] = $this->colonySpecificLocation;
        if ($this->fosterID !== null) $parameterArray['fosterID'] = $this->fosterID;
        if ($this->fosterActive !== null) $parameterArray['fosterActive'] = $this->fosterActive;
        if ($this->fosterAddress !== null) $parameterArray['fosterAddress'] = $this->fosterAddress;
        if ($this->fosterBounces !== null) $parameterArray['fosterBounces'] = $this->fosterBounces;
        if ($this->fosterCarrier !== null) $parameterArray['fosterCarrier'] = $this->fosterCarrier;
        if ($this->fosterCity !== null) $parameterArray['fosterCity'] = $this->fosterCity;
        if ($this->fosterComment !== null) $parameterArray['fosterComment'] = $this->fosterComment;
        if ($this->fosterCompany !== null) $parameterArray['fosterCompany'] = $this->fosterCompany;
        if ($this->fosterCountry !== null) $parameterArray['fosterCountry'] = $this->fosterCountry;
        if ($this->fosterCounty !== null) $parameterArray['fosterCounty'] = $this->fosterCounty;
        if ($this->fosterEmail !== null) $parameterArray['fosterEmail'] = $this->fosterEmail;
        if ($this->fosterEmailAlt !== null) $parameterArray['fosterEmailAlt'] = $this->fosterEmailAlt;
        if ($this->fosterEmailPager !== null) $parameterArray['fosterEmailPager'] = $this->fosterEmailPager;
        if ($this->fosterFax !== null) $parameterArray['fosterFax'] = $this->fosterFax;
        if ($this->fosterFirstname !== null) $parameterArray['fosterFirstname'] = $this->fosterFirstname;
        if ($this->fosterLastname !== null) $parameterArray['fosterLastname'] = $this->fosterLastname;
        if ($this->fosterName !== null) $parameterArray['fosterName'] = $this->fosterName;
        if ($this->fosterPhoneCell !== null) $parameterArray['fosterPhoneCell'] = $this->fosterPhoneCell;
        if ($this->fosterPhoneHome !== null) $parameterArray['fosterPhoneHome'] = $this->fosterPhoneHome;
        if ($this->fosterPhoneWork !== null) $parameterArray['fosterPhoneWork'] = $this->fosterPhoneWork;
        if ($this->fosterPhoneWorkExt !== null) $parameterArray['fosterPhoneWorkExt'] = $this->fosterPhoneWorkExt;
        if ($this->fosterPlus4 !== null) $parameterArray['fosterPlus4'] = $this->fosterPlus4;
        if ($this->fosterReferredBy !== null) $parameterArray['fosterReferredBy'] = $this->fosterReferredBy;
        if ($this->fosterSalutation !== null) $parameterArray['fosterSalutation'] = $this->fosterSalutation;
        if ($this->fosterSendMail !== null) $parameterArray['fosterSendMail'] = $this->fosterSendMail;
        if ($this->fosterState !== null) $parameterArray['fosterState'] = $this->fosterState;
        if ($this->fosterTitle !== null) $parameterArray['fosterTitle'] = $this->fosterTitle;
        if ($this->fosterPostalcode !== null) $parameterArray['fosterPostalcode'] = $this->fosterPostalcode;
        if ($this->locationAddress !== null) $parameterArray['locationAddress'] = $this->locationAddress;
        if ($this->locationAnimals !== null) $parameterArray['locationAnimals'] = $this->locationAnimals;
        if ($this->locationCity !== null) $parameterArray['locationCity'] = $this->locationCity;
        if ($this->locationColonies !== null) $parameterArray['locationColonies'] = $this->locationColonies;
        if ($this->locationCountry !== null) $parameterArray['locationCountry'] = $this->locationCountry;
        if ($this->locationUrl !== null) $parameterArray['locationUrl'] = $this->locationUrl;
        if ($this->locationEvents !== null) $parameterArray['locationEvents'] = $this->locationEvents;
        if ($this->locationMeetrequests !== null) $parameterArray['locationMeetrequests'] = $this->locationMeetrequests;
        if ($this->locationName !== null) $parameterArray['locationName'] = $this->locationName;
        if ($this->locationPhone !== null) $parameterArray['locationPhone'] = $this->locationPhone;
        if ($this->locationState !== null) $parameterArray['locationState'] = $this->locationState;
        if ($this->locationPostalcode !== null) $parameterArray['locationPostalcode'] = $this->locationPostalcode;
        if ($this->submittedformID !== null) $parameterArray['submittedformID'] = $this->submittedformID;
        if ($this->submittedformAnimalID !== null) $parameterArray['submittedformAnimalID'] = $this->submittedformAnimalID;
        if ($this->submittedformAssignedToID !== null) $parameterArray['submittedformAssignedToID'] = $this->submittedformAssignedToID;
        if ($this->submittedformCommentsCount !== null) $parameterArray['submittedformCommentsCount'] = $this->submittedformCommentsCount;
        if ($this->submittedformCommentsInline !== null) $parameterArray['submittedformCommentsInline'] = $this->submittedformCommentsInline;
        if ($this->submittedformCompletedDate !== null) $parameterArray['submittedformCompletedDate'] = $this->submittedformCompletedDate;
        if ($this->submittedformFormName !== null) $parameterArray['submittedformFormName'] = $this->submittedformFormName;
        if ($this->submittedformPending !== null) $parameterArray['submittedformPending'] = $this->submittedformPending;
        if ($this->submittedformStatus !== null) $parameterArray['submittedformStatus'] = $this->submittedformStatus;
        if ($this->submittedformStepsCount !== null) $parameterArray['submittedformStepsCount'] = $this->submittedformStepsCount;
        if ($this->submitterID !== null) $parameterArray['submitterID'] = $this->submitterID;
        if ($this->submitterActive !== null) $parameterArray['submitterActive'] = $this->submitterActive;
        if ($this->submitterAddress !== null) $parameterArray['submitterAddress'] = $this->submitterAddress;
        if ($this->submitterBounces !== null) $parameterArray['submitterBounces'] = $this->submitterBounces;
        if ($this->submitterCarrier !== null) $parameterArray['submitterCarrier'] = $this->submitterCarrier;
        if ($this->submitterCity !== null) $parameterArray['submitterCity'] = $this->submitterCity;
        if ($this->submitterComment !== null) $parameterArray['submitterComment'] = $this->submitterComment;
        if ($this->submitterCompany !== null) $parameterArray['submitterCompany'] = $this->submitterCompany;
        if ($this->submitterCountry !== null) $parameterArray['submitterCountry'] = $this->submitterCountry;
        if ($this->submitterCounty !== null) $parameterArray['submitterCounty'] = $this->submitterCounty;
        if ($this->submitterEmail !== null) $parameterArray['submitterEmail'] = $this->submitterEmail;
        if ($this->submitterEmailAlt !== null) $parameterArray['submitterEmailAlt'] = $this->submitterEmailAlt;
        if ($this->submitterEmailPager !== null) $parameterArray['submitterEmailPager'] = $this->submitterEmailPager;
        if ($this->submitterFax !== null) $parameterArray['submitterFax'] = $this->submitterFax;
        if ($this->submitterFirstname !== null) $parameterArray['submitterFirstname'] = $this->submitterFirstname;
        if ($this->submitterLastname !== null) $parameterArray['submitterLastname'] = $this->submitterLastname;
        if ($this->submitterName !== null) $parameterArray['submitterName'] = $this->submitterName;
        if ($this->submitterPhoneCell !== null) $parameterArray['submitterPhoneCell'] = $this->submitterPhoneCell;
        if ($this->submitterPhoneHome !== null) $parameterArray['submitterPhoneHome'] = $this->submitterPhoneHome;
        if ($this->submitterPhoneWork !== null) $parameterArray['submitterPhoneWork'] = $this->submitterPhoneWork;
        if ($this->submitterPhoneWorkExt !== null) $parameterArray['submitterPhoneWorkExt'] = $this->submitterPhoneWorkExt;
        if ($this->submitterPlus4 !== null) $parameterArray['submitterPlus4'] = $this->submitterPlus4;
        if ($this->submitterReferredBy !== null) $parameterArray['submitterReferredBy'] = $this->submitterReferredBy;
        if ($this->submitterSalutation !== null) $parameterArray['submitterSalutation'] = $this->submitterSalutation;
        if ($this->submitterSendMail !== null) $parameterArray['submitterSendMail'] = $this->submitterSendMail;
        if ($this->submitterState !== null) $parameterArray['submitterState'] = $this->submitterState;
        if ($this->submitterTitle !== null) $parameterArray['submitterTitle'] = $this->submitterTitle;
        if ($this->submitterPostalcode !== null) $parameterArray['submitterPostalcode'] = $this->submitterPostalcode;
        if ($this->transferredtoActive !== null) $parameterArray['transferredtoActive'] = $this->transferredtoActive;
        if ($this->transferredtoAddress !== null) $parameterArray['transferredtoAddress'] = $this->transferredtoAddress;
        if ($this->transferredtoBounces !== null) $parameterArray['transferredtoBounces'] = $this->transferredtoBounces;
        if ($this->transferredtoCarrier !== null) $parameterArray['transferredtoCarrier'] = $this->transferredtoCarrier;
        if ($this->transferredtoCity !== null) $parameterArray['transferredtoCity'] = $this->transferredtoCity;
        if ($this->transferredtoComment !== null) $parameterArray['transferredtoComment'] = $this->transferredtoComment;
        if ($this->transferredtoCompany !== null) $parameterArray['transferredtoCompany'] = $this->transferredtoCompany;
        if ($this->transferredtoID !== null) $parameterArray['transferredtoID'] = $this->transferredtoID;
        if ($this->transferredtoCountry !== null) $parameterArray['transferredtoCountry'] = $this->transferredtoCountry;
        if ($this->transferredtoCounty !== null) $parameterArray['transferredtoCounty'] = $this->transferredtoCounty;
        if ($this->transferredtoEmail !== null) $parameterArray['transferredtoEmail'] = $this->transferredtoEmail;
        if ($this->transferredtoEmailAlt !== null) $parameterArray['transferredtoEmailAlt'] = $this->transferredtoEmailAlt;
        if ($this->transferredtoEmailPager !== null) $parameterArray['transferredtoEmailPager'] = $this->transferredtoEmailPager;
        if ($this->transferredtoFax !== null) $parameterArray['transferredtoFax'] = $this->transferredtoFax;
        if ($this->transferredtoFirstname !== null) $parameterArray['transferredtoFirstname'] = $this->transferredtoFirstname;
        if ($this->transferredtoLastname !== null) $parameterArray['transferredtoLastname'] = $this->transferredtoLastname;
        if ($this->transferredtoName !== null) $parameterArray['transferredtoName'] = $this->transferredtoName;
        if ($this->transferredtoPhoneCell !== null) $parameterArray['transferredtoPhoneCell'] = $this->transferredtoPhoneCell;
        if ($this->transferredtoPhoneHome !== null) $parameterArray['transferredtoPhoneHome'] = $this->transferredtoPhoneHome;
        if ($this->transferredtoPhoneWork !== null) $parameterArray['transferredtoPhoneWork'] = $this->transferredtoPhoneWork;
        if ($this->transferredtoPhoneWorkExt !== null) $parameterArray['transferredtoPhoneWorkExt'] = $this->transferredtoPhoneWorkExt;
        if ($this->transferredtoPlus4 !== null) $parameterArray['transferredtoPlus4'] = $this->transferredtoPlus4;
        if ($this->transferredtoReferredBy !== null) $parameterArray['transferredtoReferredBy'] = $this->transferredtoReferredBy;
        if ($this->transferredtoSalutation !== null) $parameterArray['transferredtoSalutation'] = $this->transferredtoSalutation;
        if ($this->transferredtoSendMail !== null) $parameterArray['transferredtoSendMail'] = $this->transferredtoSendMail;
        if ($this->transferredtoState !== null) $parameterArray['transferredtoState'] = $this->transferredtoState;
        if ($this->transferredtoTitle !== null) $parameterArray['transferredtoTitle'] = $this->transferredtoTitle;
        if ($this->transferredtoPostalcode !== null) $parameterArray['transferredtoPostalcode'] = $this->transferredtoPostalcode;
        if ($this->animalGroups !== null) $parameterArray['animalGroups'] = $this->animalGroups;
        if ($this->animalExportAccounts !== null) $parameterArray['animalExportAccounts'] = $this->animalExportAccounts;
        if ($this->animalPictures !== null) $parameterArray['animalPictures'] = $this->animalPictures;
        if ($this->animalVideos !== null) $parameterArray['animalVideos'] = $this->animalVideos;
        if ($this->animalVideoUrls !== null) $parameterArray['animalVideoUrls'] = $this->animalVideoUrls;

        $this->addSearchParameters($parameterArray);

    }
}