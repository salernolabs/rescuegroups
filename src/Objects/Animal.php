<?php
/**
 * Animal Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Animal implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $animalID = null;

    /**
     * Activity level
     *
     * @var string
     */
    public $animalActivityLevel = null;

    /**
     * Adopted Date
     *
     * @var \DateTime
     */
    public $animalAdoptedDate = null;

    /**
     * Adoption fee
     *
     * @var string
     */
    public $animalAdoptionFee = null;

    /**
     * Adoption lead
     *
     * @var integer
     */
    public $animalAdoptionLeadID = null;

    /**
     * Altered
     *
     * @var string
     */
    public $animalAltered = null;

    /**
     * Application
     *
     * @var integer
     */
    public $animalApplicationID = null;

    /**
     * Available Date
     *
     * @var \DateTime
     */
    public $animalAvailableDate = null;

    /**
     * Birthdate
     *
     * @var \DateTime
     */
    public $animalBirthdate = null;

    /**
     * Exact Birthdate
     *
     * @var string
     */
    public $animalBirthdateExact = null;

    /**
     * Coat Length
     *
     * @var string
     */
    public $animalCoatLength = null;

    /**
     * Colony
     *
     * @var integer
     */
    public $animalColonyID = null;

    /**
     * Color (General)
     *
     * @var integer
     */
    public $animalColorID = null;

    /**
     * Color details
     *
     * @var string
     */
    public $animalColorDetails = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $animalConditionID = null;

    /**
     * Courtesy
     *
     * @var string
     */
    public $animalCourtesy = null;

    /**
     * Declawed
     *
     * @var string
     */
    public $animalDeclawed = null;

    /**
     * Description
     *
     * @var string
     */
    public $animalDescription = null;

    /**
     * Distinguishing marks
     *
     * @var string
     */
    public $animalDistinguishingMarks = null;

    /**
     * Allow export
     *
     * @var string
     */
    public $animalAllowExport = null;

    /**
     * Ear type
     *
     * @var string
     */
    public $animalEarType = null;

    /**
     * Energy level
     *
     * @var string
     */
    public $animalEnergyLevel = null;

    /**
     * Exercise needs
     *
     * @var string
     */
    public $animalExerciseNeeds = null;

    /**
     * Eye color
     *
     * @var string
     */
    public $animalEyeColor = null;

    /**
     * Requires a home with fence
     *
     * @var string
     */
    public $animalFence = null;

    /**
     * Foster
     *
     * @var integer
     */
    public $animalFosterID = null;

    /**
     * Found
     *
     * @var string
     */
    public $animalFound = null;

    /**
     * Found date
     *
     * @var \DateTime
     */
    public $animalFoundDate = null;

    /**
     * Found zip/postal code
     *
     * @var string
     */
    public $animalFoundPostalcode = null;

    /**
     * General Age
     *
     * @var string
     */
    public $animalGeneralAge = null;

    /**
     * Size potential (general)
     *
     * @var string
     */
    public $animalGeneralSizePotential = null;

    /**
     * Grooming needs
     *
     * @var string
     */
    public $animalGroomingNeeds = null;

    /**
     * Highlight
     *
     * @var string
     */
    public $animalHighlightOrder = null;

    /**
     * Housetrained
     *
     * @var string
     */
    public $animalHousetrained = null;

    /**
     * Indoor/Outdoor
     *
     * @var string
     */
    public $animalIndoorOutdoor = null;

    /**
     * Internal ID
     *
     * @var string
     */
    public $animalInternalID = null;

    /**
     * Euthanasia date
     *
     * @var \DateTime
     */
    public $animalKillDate = null;

    /**
     * Euthanasia reason
     *
     * @var string
     */
    public $animalKillReason = null;

    /**
     * Location
     *
     * @var integer
     */
    public $animalLocationID = null;

    /**
     * Location public
     *
     * @var string
     */
    public $animalLocationPublic = null;

    /**
     * Microchip number
     *
     * @var string
     */
    public $animalMicrochipNumber = null;

    /**
     * Microchip vendor
     *
     * @var integer
     */
    public $animalMicrochipVendor = null;

    /**
     * Mixed breed
     *
     * @var string
     */
    public $animalMixedBreed = null;

    /**
     * Name
     *
     * @var string
     */
    public $animalName = null;

    /**
     * Has special needs
     *
     * @var string
     */
    public $animalSpecialneeds = null;

    /**
     * Special needs description
     *
     * @var string
     */
    public $animalSpecialneedsDescription = null;

    /**
     * Needs a Foster
     *
     * @var string
     */
    public $animalNeedsFoster = null;

    /**
     * Reaction to new people
     *
     * @var string
     */
    public $animalNewPeople = null;

    /**
     * Private notes
     *
     * @var string
     */
    public $animalNotes = null;

    /**
     * Reason not housetrained
     *
     * @var string
     */
    public $animalNotHousetrainedReason = null;

    /**
     * Obedience training
     *
     * @var string
     */
    public $animalObedienceTraining = null;

    /**
     * Good with adults
     *
     * @var string
     */
    public $animalOKWithAdults = null;

    /**
     * OK with cats
     *
     * @var string
     */
    public $animalOKWithCats = null;

    /**
     * OK with dogs
     *
     * @var string
     */
    public $animalOKWithDogs = null;

    /**
     * OK with kids
     *
     * @var string
     */
    public $animalOKWithKids = null;

    /**
     * Origin
     *
     * @var string
     */
    public $animalOrigin = null;

    /**
     * Other names
     *
     * @var string
     */
    public $animalOthernames = null;

    /**
     * Owner experience needed
     *
     * @var string
     */
    public $animalOwnerExperience = null;

    /**
     * Owner
     *
     * @var integer
     */
    public $animalOwnerID = null;

    /**
     * Pattern
     *
     * @var integer
     */
    public $animalPatternID = null;

    /**
     * Adoption pending
     *
     * @var string
     */
    public $animalAdoptionPending = null;

    /**
     * Primary breed
     *
     * @var integer
     */
    public $animalPrimaryBreedID = null;

    /**
     * Received date
     *
     * @var \DateTime
     */
    public $animalReceivedDate = null;

    /**
     * Rescue ID
     *
     * @var string
     */
    public $animalRescueID = null;

    /**
     * Secondary Breed
     *
     * @var integer
     */
    public $animalSecondaryBreedID = null;

    /**
     * Sex
     *
     * @var string
     */
    public $animalSex = null;

    /**
     * Shared
     *
     * @var string
     */
    public $animalShared = null;

    /**
     * Shedding amount
     *
     * @var string
     */
    public $animalShedding = null;

    /**
     * Current size
     *
     * @var float
     */
    public $animalSizeCurrent = null;

    /**
     * Size potential
     *
     * @var float
     */
    public $animalSizePotential = null;

    /**
     * Size unit of measure
     *
     * @var string
     */
    public $animalSizeUOM = null;

    /**
     * Species
     *
     * @var integer
     */
    public $animalSpeciesID = null;

    /**
     * Allow sponsorship
     *
     * @var string
     */
    public $animalSponsorable = null;

    /**
     * Sponsors
     *
     * @var string
     */
    public $animalSponsors = null;

    /**
     * Sponsorship details
     *
     * @var string
     */
    public $animalSponsorshipDetails = null;

    /**
     * Sponsorship minimum
     *
     * @var float
     */
    public $animalSponsorshipMinimum = null;

    /**
     * Status
     *
     * @var integer
     */
    public $animalStatusID = null;

    /**
     * Summary
     *
     * @var string
     */
    public $animalSummary = null;

    /**
     * Tail type
     *
     * @var string
     */
    public $animalTailType = null;

    /**
     * Transferred to
     *
     * @var integer
     */
    public $animalTransferredToID = null;

    /**
     * Up-to-date
     *
     * @var string
     */
    public $animalUptodate = null;

    /**
     * Likes to vocalize
     *
     * @var string
     */
    public $animalVocal = null;

    /**
     * Requires a Yard
     *
     * @var string
     */
    public $animalYardRequired = null;

    /**
     * Affectionate
     *
     * @var string
     */
    public $animalAffectionate = null;

    /**
     * Apartment appropriate
     *
     * @var string
     */
    public $animalApartment = null;

    /**
     * Crate trained
     *
     * @var string
     */
    public $animalCratetrained = null;

    /**
     * Drools excessively
     *
     * @var string
     */
    public $animalDrools = null;

    /**
     * Eager to please
     *
     * @var string
     */
    public $animalEagerToPlease = null;

    /**
     * Tries to escape
     *
     * @var string
     */
    public $animalEscapes = null;

    /**
     * Even-tempered
     *
     * @var string
     */
    public $animalEventempered = null;

    /**
     * Likes to fetch
     *
     * @var string
     */
    public $animalFetches = null;

    /**
     * Gentle
     *
     * @var string
     */
    public $animalGentle = null;

    /**
     * Does well in a car
     *
     * @var string
     */
    public $animalGoodInCar = null;

    /**
     * Goofy
     *
     * @var string
     */
    public $animalGoofy = null;

    /**
     * Has allergies
     *
     * @var string
     */
    public $animalHasAllergies = null;

    /**
     * Hearing impaired
     *
     * @var string
     */
    public $animalHearingImpaired = null;

    /**
     * Hypoallergenic
     *
     * @var string
     */
    public $animalHypoallergenic = null;

    /**
     * Independent / aloof
     *
     * @var string
     */
    public $animalIndependent = null;

    /**
     * Intelligent
     *
     * @var string
     */
    public $animalIntelligent = null;

    /**
     * Lap pet
     *
     * @var string
     */
    public $animalLap = null;

    /**
     * Leash trained
     *
     * @var string
     */
    public $animalLeashtrained = null;

    /**
     * Needs companion animal
     *
     * @var string
     */
    public $animalNeedsCompanionAnimal = null;

    /**
     * Cold sensitive
     *
     * @var string
     */
    public $animalNoCold = null;

    /**
     * Not good with female dogs
     *
     * @var string
     */
    public $animalNoFemaleDogs = null;

    /**
     * Heat sensitive
     *
     * @var string
     */
    public $animalNoHeat = null;

    /**
     * Not good with large dogs
     *
     * @var string
     */
    public $animalNoLargeDogs = null;

    /**
     * Not good with male dogs
     *
     * @var string
     */
    public $animalNoMaleDogs = null;

    /**
     * Not good with small dogs
     *
     * @var string
     */
    public $animalNoSmallDogs = null;

    /**
     * Obedient
     *
     * @var string
     */
    public $animalObedient = null;

    /**
     * Good for seniors / elderly
     *
     * @var string
     */
    public $animalOKForSeniors = null;

    /**
     * Good with farm animals
     *
     * @var string
     */
    public $animalOKWithFarmAnimals = null;

    /**
     * Older/ considerate kids only
     *
     * @var string
     */
    public $animalOlderKidsOnly = null;

    /**
     * Needs ongoing medical care
     *
     * @var string
     */
    public $animalOngoingMedical = null;

    /**
     * Playful
     *
     * @var string
     */
    public $animalPlayful = null;

    /**
     * Likes toys
     *
     * @var string
     */
    public $animalPlaysToys = null;

    /**
     * Predatory
     *
     * @var string
     */
    public $animalPredatory = null;

    /**
     * Protective / territorial
     *
     * @var string
     */
    public $animalProtective = null;

    /**
     * Sight impaired
     *
     * @var string
     */
    public $animalSightImpaired = null;

    /**
     * Skittish
     *
     * @var string
     */
    public $animalSkittish = null;

    /**
     * Special diet required
     *
     * @var string
     */
    public $animalSpecialDiet = null;

    /**
     * Likes to swim
     *
     * @var string
     */
    public $animalSwims = null;

    /**
     * Timid / shy
     *
     * @var string
     */
    public $animalTimid = null;

    /**
     * Groups
     *
     * @var integer
     */
    public $animalGroups = null;

    /**
     * Export accounts
     *
     * @var integer
     */
    public $animalExportAccounts = null;


    /**
     * Animal Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->animalID)) $this->animalID = $inputData->animalID;
        if (!empty($inputData->animalActivityLevel)) $this->animalActivityLevel = $inputData->animalActivityLevel;
        if (!empty($inputData->animalAdoptedDate)) $this->animalAdoptedDate = $inputData->animalAdoptedDate;
        if (!empty($inputData->animalAdoptionFee)) $this->animalAdoptionFee = $inputData->animalAdoptionFee;
        if (!empty($inputData->animalAdoptionLeadID)) $this->animalAdoptionLeadID = $inputData->animalAdoptionLeadID;
        if (!empty($inputData->animalAltered)) $this->animalAltered = $inputData->animalAltered;
        if (!empty($inputData->animalApplicationID)) $this->animalApplicationID = $inputData->animalApplicationID;
        if (!empty($inputData->animalAvailableDate)) $this->animalAvailableDate = $inputData->animalAvailableDate;
        if (!empty($inputData->animalBirthdate)) $this->animalBirthdate = $inputData->animalBirthdate;
        if (!empty($inputData->animalBirthdateExact)) $this->animalBirthdateExact = $inputData->animalBirthdateExact;
        if (!empty($inputData->animalCoatLength)) $this->animalCoatLength = $inputData->animalCoatLength;
        if (!empty($inputData->animalColonyID)) $this->animalColonyID = $inputData->animalColonyID;
        if (!empty($inputData->animalColorID)) $this->animalColorID = $inputData->animalColorID;
        if (!empty($inputData->animalColorDetails)) $this->animalColorDetails = $inputData->animalColorDetails;
        if (!empty($inputData->animalConditionID)) $this->animalConditionID = $inputData->animalConditionID;
        if (!empty($inputData->animalCourtesy)) $this->animalCourtesy = $inputData->animalCourtesy;
        if (!empty($inputData->animalDeclawed)) $this->animalDeclawed = $inputData->animalDeclawed;
        if (!empty($inputData->animalDescription)) $this->animalDescription = $inputData->animalDescription;
        if (!empty($inputData->animalDistinguishingMarks)) $this->animalDistinguishingMarks = $inputData->animalDistinguishingMarks;
        if (!empty($inputData->animalAllowExport)) $this->animalAllowExport = $inputData->animalAllowExport;
        if (!empty($inputData->animalEarType)) $this->animalEarType = $inputData->animalEarType;
        if (!empty($inputData->animalEnergyLevel)) $this->animalEnergyLevel = $inputData->animalEnergyLevel;
        if (!empty($inputData->animalExerciseNeeds)) $this->animalExerciseNeeds = $inputData->animalExerciseNeeds;
        if (!empty($inputData->animalEyeColor)) $this->animalEyeColor = $inputData->animalEyeColor;
        if (!empty($inputData->animalFence)) $this->animalFence = $inputData->animalFence;
        if (!empty($inputData->animalFosterID)) $this->animalFosterID = $inputData->animalFosterID;
        if (!empty($inputData->animalFound)) $this->animalFound = $inputData->animalFound;
        if (!empty($inputData->animalFoundDate)) $this->animalFoundDate = $inputData->animalFoundDate;
        if (!empty($inputData->animalFoundPostalcode)) $this->animalFoundPostalcode = $inputData->animalFoundPostalcode;
        if (!empty($inputData->animalGeneralAge)) $this->animalGeneralAge = $inputData->animalGeneralAge;
        if (!empty($inputData->animalGeneralSizePotential)) $this->animalGeneralSizePotential = $inputData->animalGeneralSizePotential;
        if (!empty($inputData->animalGroomingNeeds)) $this->animalGroomingNeeds = $inputData->animalGroomingNeeds;
        if (!empty($inputData->animalHighlightOrder)) $this->animalHighlightOrder = $inputData->animalHighlightOrder;
        if (!empty($inputData->animalHousetrained)) $this->animalHousetrained = $inputData->animalHousetrained;
        if (!empty($inputData->animalIndoorOutdoor)) $this->animalIndoorOutdoor = $inputData->animalIndoorOutdoor;
        if (!empty($inputData->animalInternalID)) $this->animalInternalID = $inputData->animalInternalID;
        if (!empty($inputData->animalKillDate)) $this->animalKillDate = $inputData->animalKillDate;
        if (!empty($inputData->animalKillReason)) $this->animalKillReason = $inputData->animalKillReason;
        if (!empty($inputData->animalLocationID)) $this->animalLocationID = $inputData->animalLocationID;
        if (!empty($inputData->animalLocationPublic)) $this->animalLocationPublic = $inputData->animalLocationPublic;
        if (!empty($inputData->animalMicrochipNumber)) $this->animalMicrochipNumber = $inputData->animalMicrochipNumber;
        if (!empty($inputData->animalMicrochipVendor)) $this->animalMicrochipVendor = $inputData->animalMicrochipVendor;
        if (!empty($inputData->animalMixedBreed)) $this->animalMixedBreed = $inputData->animalMixedBreed;
        if (!empty($inputData->animalName)) $this->animalName = $inputData->animalName;
        if (!empty($inputData->animalSpecialneeds)) $this->animalSpecialneeds = $inputData->animalSpecialneeds;
        if (!empty($inputData->animalSpecialneedsDescription)) $this->animalSpecialneedsDescription = $inputData->animalSpecialneedsDescription;
        if (!empty($inputData->animalNeedsFoster)) $this->animalNeedsFoster = $inputData->animalNeedsFoster;
        if (!empty($inputData->animalNewPeople)) $this->animalNewPeople = $inputData->animalNewPeople;
        if (!empty($inputData->animalNotes)) $this->animalNotes = $inputData->animalNotes;
        if (!empty($inputData->animalNotHousetrainedReason)) $this->animalNotHousetrainedReason = $inputData->animalNotHousetrainedReason;
        if (!empty($inputData->animalObedienceTraining)) $this->animalObedienceTraining = $inputData->animalObedienceTraining;
        if (!empty($inputData->animalOKWithAdults)) $this->animalOKWithAdults = $inputData->animalOKWithAdults;
        if (!empty($inputData->animalOKWithCats)) $this->animalOKWithCats = $inputData->animalOKWithCats;
        if (!empty($inputData->animalOKWithDogs)) $this->animalOKWithDogs = $inputData->animalOKWithDogs;
        if (!empty($inputData->animalOKWithKids)) $this->animalOKWithKids = $inputData->animalOKWithKids;
        if (!empty($inputData->animalOrigin)) $this->animalOrigin = $inputData->animalOrigin;
        if (!empty($inputData->animalOthernames)) $this->animalOthernames = $inputData->animalOthernames;
        if (!empty($inputData->animalOwnerExperience)) $this->animalOwnerExperience = $inputData->animalOwnerExperience;
        if (!empty($inputData->animalOwnerID)) $this->animalOwnerID = $inputData->animalOwnerID;
        if (!empty($inputData->animalPatternID)) $this->animalPatternID = $inputData->animalPatternID;
        if (!empty($inputData->animalAdoptionPending)) $this->animalAdoptionPending = $inputData->animalAdoptionPending;
        if (!empty($inputData->animalPrimaryBreedID)) $this->animalPrimaryBreedID = $inputData->animalPrimaryBreedID;
        if (!empty($inputData->animalReceivedDate)) $this->animalReceivedDate = $inputData->animalReceivedDate;
        if (!empty($inputData->animalRescueID)) $this->animalRescueID = $inputData->animalRescueID;
        if (!empty($inputData->animalSecondaryBreedID)) $this->animalSecondaryBreedID = $inputData->animalSecondaryBreedID;
        if (!empty($inputData->animalSex)) $this->animalSex = $inputData->animalSex;
        if (!empty($inputData->animalShared)) $this->animalShared = $inputData->animalShared;
        if (!empty($inputData->animalShedding)) $this->animalShedding = $inputData->animalShedding;
        if (!empty($inputData->animalSizeCurrent)) $this->animalSizeCurrent = $inputData->animalSizeCurrent;
        if (!empty($inputData->animalSizePotential)) $this->animalSizePotential = $inputData->animalSizePotential;
        if (!empty($inputData->animalSizeUOM)) $this->animalSizeUOM = $inputData->animalSizeUOM;
        if (!empty($inputData->animalSpeciesID)) $this->animalSpeciesID = $inputData->animalSpeciesID;
        if (!empty($inputData->animalSponsorable)) $this->animalSponsorable = $inputData->animalSponsorable;
        if (!empty($inputData->animalSponsors)) $this->animalSponsors = $inputData->animalSponsors;
        if (!empty($inputData->animalSponsorshipDetails)) $this->animalSponsorshipDetails = $inputData->animalSponsorshipDetails;
        if (!empty($inputData->animalSponsorshipMinimum)) $this->animalSponsorshipMinimum = $inputData->animalSponsorshipMinimum;
        if (!empty($inputData->animalStatusID)) $this->animalStatusID = $inputData->animalStatusID;
        if (!empty($inputData->animalSummary)) $this->animalSummary = $inputData->animalSummary;
        if (!empty($inputData->animalTailType)) $this->animalTailType = $inputData->animalTailType;
        if (!empty($inputData->animalTransferredToID)) $this->animalTransferredToID = $inputData->animalTransferredToID;
        if (!empty($inputData->animalUptodate)) $this->animalUptodate = $inputData->animalUptodate;
        if (!empty($inputData->animalVocal)) $this->animalVocal = $inputData->animalVocal;
        if (!empty($inputData->animalYardRequired)) $this->animalYardRequired = $inputData->animalYardRequired;
        if (!empty($inputData->animalAffectionate)) $this->animalAffectionate = $inputData->animalAffectionate;
        if (!empty($inputData->animalApartment)) $this->animalApartment = $inputData->animalApartment;
        if (!empty($inputData->animalCratetrained)) $this->animalCratetrained = $inputData->animalCratetrained;
        if (!empty($inputData->animalDrools)) $this->animalDrools = $inputData->animalDrools;
        if (!empty($inputData->animalEagerToPlease)) $this->animalEagerToPlease = $inputData->animalEagerToPlease;
        if (!empty($inputData->animalEscapes)) $this->animalEscapes = $inputData->animalEscapes;
        if (!empty($inputData->animalEventempered)) $this->animalEventempered = $inputData->animalEventempered;
        if (!empty($inputData->animalFetches)) $this->animalFetches = $inputData->animalFetches;
        if (!empty($inputData->animalGentle)) $this->animalGentle = $inputData->animalGentle;
        if (!empty($inputData->animalGoodInCar)) $this->animalGoodInCar = $inputData->animalGoodInCar;
        if (!empty($inputData->animalGoofy)) $this->animalGoofy = $inputData->animalGoofy;
        if (!empty($inputData->animalHasAllergies)) $this->animalHasAllergies = $inputData->animalHasAllergies;
        if (!empty($inputData->animalHearingImpaired)) $this->animalHearingImpaired = $inputData->animalHearingImpaired;
        if (!empty($inputData->animalHypoallergenic)) $this->animalHypoallergenic = $inputData->animalHypoallergenic;
        if (!empty($inputData->animalIndependent)) $this->animalIndependent = $inputData->animalIndependent;
        if (!empty($inputData->animalIntelligent)) $this->animalIntelligent = $inputData->animalIntelligent;
        if (!empty($inputData->animalLap)) $this->animalLap = $inputData->animalLap;
        if (!empty($inputData->animalLeashtrained)) $this->animalLeashtrained = $inputData->animalLeashtrained;
        if (!empty($inputData->animalNeedsCompanionAnimal)) $this->animalNeedsCompanionAnimal = $inputData->animalNeedsCompanionAnimal;
        if (!empty($inputData->animalNoCold)) $this->animalNoCold = $inputData->animalNoCold;
        if (!empty($inputData->animalNoFemaleDogs)) $this->animalNoFemaleDogs = $inputData->animalNoFemaleDogs;
        if (!empty($inputData->animalNoHeat)) $this->animalNoHeat = $inputData->animalNoHeat;
        if (!empty($inputData->animalNoLargeDogs)) $this->animalNoLargeDogs = $inputData->animalNoLargeDogs;
        if (!empty($inputData->animalNoMaleDogs)) $this->animalNoMaleDogs = $inputData->animalNoMaleDogs;
        if (!empty($inputData->animalNoSmallDogs)) $this->animalNoSmallDogs = $inputData->animalNoSmallDogs;
        if (!empty($inputData->animalObedient)) $this->animalObedient = $inputData->animalObedient;
        if (!empty($inputData->animalOKForSeniors)) $this->animalOKForSeniors = $inputData->animalOKForSeniors;
        if (!empty($inputData->animalOKWithFarmAnimals)) $this->animalOKWithFarmAnimals = $inputData->animalOKWithFarmAnimals;
        if (!empty($inputData->animalOlderKidsOnly)) $this->animalOlderKidsOnly = $inputData->animalOlderKidsOnly;
        if (!empty($inputData->animalOngoingMedical)) $this->animalOngoingMedical = $inputData->animalOngoingMedical;
        if (!empty($inputData->animalPlayful)) $this->animalPlayful = $inputData->animalPlayful;
        if (!empty($inputData->animalPlaysToys)) $this->animalPlaysToys = $inputData->animalPlaysToys;
        if (!empty($inputData->animalPredatory)) $this->animalPredatory = $inputData->animalPredatory;
        if (!empty($inputData->animalProtective)) $this->animalProtective = $inputData->animalProtective;
        if (!empty($inputData->animalSightImpaired)) $this->animalSightImpaired = $inputData->animalSightImpaired;
        if (!empty($inputData->animalSkittish)) $this->animalSkittish = $inputData->animalSkittish;
        if (!empty($inputData->animalSpecialDiet)) $this->animalSpecialDiet = $inputData->animalSpecialDiet;
        if (!empty($inputData->animalSwims)) $this->animalSwims = $inputData->animalSwims;
        if (!empty($inputData->animalTimid)) $this->animalTimid = $inputData->animalTimid;
        if (!empty($inputData->animalGroups)) $this->animalGroups = $inputData->animalGroups;
        if (!empty($inputData->animalExportAccounts)) $this->animalExportAccounts = $inputData->animalExportAccounts;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->animalID !== null) $output['animalID'] = $this->animalID;
        if ($this->animalActivityLevel !== null) $output['animalActivityLevel'] = $this->animalActivityLevel;
        if ($this->animalAdoptedDate !== null) $output['animalAdoptedDate'] = $this->animalAdoptedDate;
        if ($this->animalAdoptionFee !== null) $output['animalAdoptionFee'] = $this->animalAdoptionFee;
        if ($this->animalAdoptionLeadID !== null) $output['animalAdoptionLeadID'] = $this->animalAdoptionLeadID;
        if ($this->animalAltered !== null) $output['animalAltered'] = $this->animalAltered;
        if ($this->animalApplicationID !== null) $output['animalApplicationID'] = $this->animalApplicationID;
        if ($this->animalAvailableDate !== null) $output['animalAvailableDate'] = $this->animalAvailableDate;
        if ($this->animalBirthdate !== null) $output['animalBirthdate'] = $this->animalBirthdate;
        if ($this->animalBirthdateExact !== null) $output['animalBirthdateExact'] = $this->animalBirthdateExact;
        if ($this->animalCoatLength !== null) $output['animalCoatLength'] = $this->animalCoatLength;
        if ($this->animalColonyID !== null) $output['animalColonyID'] = $this->animalColonyID;
        if ($this->animalColorID !== null) $output['animalColorID'] = $this->animalColorID;
        if ($this->animalColorDetails !== null) $output['animalColorDetails'] = $this->animalColorDetails;
        if ($this->animalConditionID !== null) $output['animalConditionID'] = $this->animalConditionID;
        if ($this->animalCourtesy !== null) $output['animalCourtesy'] = $this->animalCourtesy;
        if ($this->animalDeclawed !== null) $output['animalDeclawed'] = $this->animalDeclawed;
        if ($this->animalDescription !== null) $output['animalDescription'] = $this->animalDescription;
        if ($this->animalDistinguishingMarks !== null) $output['animalDistinguishingMarks'] = $this->animalDistinguishingMarks;
        if ($this->animalAllowExport !== null) $output['animalAllowExport'] = $this->animalAllowExport;
        if ($this->animalEarType !== null) $output['animalEarType'] = $this->animalEarType;
        if ($this->animalEnergyLevel !== null) $output['animalEnergyLevel'] = $this->animalEnergyLevel;
        if ($this->animalExerciseNeeds !== null) $output['animalExerciseNeeds'] = $this->animalExerciseNeeds;
        if ($this->animalEyeColor !== null) $output['animalEyeColor'] = $this->animalEyeColor;
        if ($this->animalFence !== null) $output['animalFence'] = $this->animalFence;
        if ($this->animalFosterID !== null) $output['animalFosterID'] = $this->animalFosterID;
        if ($this->animalFound !== null) $output['animalFound'] = $this->animalFound;
        if ($this->animalFoundDate !== null) $output['animalFoundDate'] = $this->animalFoundDate;
        if ($this->animalFoundPostalcode !== null) $output['animalFoundPostalcode'] = $this->animalFoundPostalcode;
        if ($this->animalGeneralAge !== null) $output['animalGeneralAge'] = $this->animalGeneralAge;
        if ($this->animalGeneralSizePotential !== null) $output['animalGeneralSizePotential'] = $this->animalGeneralSizePotential;
        if ($this->animalGroomingNeeds !== null) $output['animalGroomingNeeds'] = $this->animalGroomingNeeds;
        if ($this->animalHighlightOrder !== null) $output['animalHighlightOrder'] = $this->animalHighlightOrder;
        if ($this->animalHousetrained !== null) $output['animalHousetrained'] = $this->animalHousetrained;
        if ($this->animalIndoorOutdoor !== null) $output['animalIndoorOutdoor'] = $this->animalIndoorOutdoor;
        if ($this->animalInternalID !== null) $output['animalInternalID'] = $this->animalInternalID;
        if ($this->animalKillDate !== null) $output['animalKillDate'] = $this->animalKillDate;
        if ($this->animalKillReason !== null) $output['animalKillReason'] = $this->animalKillReason;
        if ($this->animalLocationID !== null) $output['animalLocationID'] = $this->animalLocationID;
        if ($this->animalLocationPublic !== null) $output['animalLocationPublic'] = $this->animalLocationPublic;
        if ($this->animalMicrochipNumber !== null) $output['animalMicrochipNumber'] = $this->animalMicrochipNumber;
        if ($this->animalMicrochipVendor !== null) $output['animalMicrochipVendor'] = $this->animalMicrochipVendor;
        if ($this->animalMixedBreed !== null) $output['animalMixedBreed'] = $this->animalMixedBreed;
        if ($this->animalName !== null) $output['animalName'] = $this->animalName;
        if ($this->animalSpecialneeds !== null) $output['animalSpecialneeds'] = $this->animalSpecialneeds;
        if ($this->animalSpecialneedsDescription !== null) $output['animalSpecialneedsDescription'] = $this->animalSpecialneedsDescription;
        if ($this->animalNeedsFoster !== null) $output['animalNeedsFoster'] = $this->animalNeedsFoster;
        if ($this->animalNewPeople !== null) $output['animalNewPeople'] = $this->animalNewPeople;
        if ($this->animalNotes !== null) $output['animalNotes'] = $this->animalNotes;
        if ($this->animalNotHousetrainedReason !== null) $output['animalNotHousetrainedReason'] = $this->animalNotHousetrainedReason;
        if ($this->animalObedienceTraining !== null) $output['animalObedienceTraining'] = $this->animalObedienceTraining;
        if ($this->animalOKWithAdults !== null) $output['animalOKWithAdults'] = $this->animalOKWithAdults;
        if ($this->animalOKWithCats !== null) $output['animalOKWithCats'] = $this->animalOKWithCats;
        if ($this->animalOKWithDogs !== null) $output['animalOKWithDogs'] = $this->animalOKWithDogs;
        if ($this->animalOKWithKids !== null) $output['animalOKWithKids'] = $this->animalOKWithKids;
        if ($this->animalOrigin !== null) $output['animalOrigin'] = $this->animalOrigin;
        if ($this->animalOthernames !== null) $output['animalOthernames'] = $this->animalOthernames;
        if ($this->animalOwnerExperience !== null) $output['animalOwnerExperience'] = $this->animalOwnerExperience;
        if ($this->animalOwnerID !== null) $output['animalOwnerID'] = $this->animalOwnerID;
        if ($this->animalPatternID !== null) $output['animalPatternID'] = $this->animalPatternID;
        if ($this->animalAdoptionPending !== null) $output['animalAdoptionPending'] = $this->animalAdoptionPending;
        if ($this->animalPrimaryBreedID !== null) $output['animalPrimaryBreedID'] = $this->animalPrimaryBreedID;
        if ($this->animalReceivedDate !== null) $output['animalReceivedDate'] = $this->animalReceivedDate;
        if ($this->animalRescueID !== null) $output['animalRescueID'] = $this->animalRescueID;
        if ($this->animalSecondaryBreedID !== null) $output['animalSecondaryBreedID'] = $this->animalSecondaryBreedID;
        if ($this->animalSex !== null) $output['animalSex'] = $this->animalSex;
        if ($this->animalShared !== null) $output['animalShared'] = $this->animalShared;
        if ($this->animalShedding !== null) $output['animalShedding'] = $this->animalShedding;
        if ($this->animalSizeCurrent !== null) $output['animalSizeCurrent'] = $this->animalSizeCurrent;
        if ($this->animalSizePotential !== null) $output['animalSizePotential'] = $this->animalSizePotential;
        if ($this->animalSizeUOM !== null) $output['animalSizeUOM'] = $this->animalSizeUOM;
        if ($this->animalSpeciesID !== null) $output['animalSpeciesID'] = $this->animalSpeciesID;
        if ($this->animalSponsorable !== null) $output['animalSponsorable'] = $this->animalSponsorable;
        if ($this->animalSponsors !== null) $output['animalSponsors'] = $this->animalSponsors;
        if ($this->animalSponsorshipDetails !== null) $output['animalSponsorshipDetails'] = $this->animalSponsorshipDetails;
        if ($this->animalSponsorshipMinimum !== null) $output['animalSponsorshipMinimum'] = $this->animalSponsorshipMinimum;
        if ($this->animalStatusID !== null) $output['animalStatusID'] = $this->animalStatusID;
        if ($this->animalSummary !== null) $output['animalSummary'] = $this->animalSummary;
        if ($this->animalTailType !== null) $output['animalTailType'] = $this->animalTailType;
        if ($this->animalTransferredToID !== null) $output['animalTransferredToID'] = $this->animalTransferredToID;
        if ($this->animalUptodate !== null) $output['animalUptodate'] = $this->animalUptodate;
        if ($this->animalVocal !== null) $output['animalVocal'] = $this->animalVocal;
        if ($this->animalYardRequired !== null) $output['animalYardRequired'] = $this->animalYardRequired;
        if ($this->animalAffectionate !== null) $output['animalAffectionate'] = $this->animalAffectionate;
        if ($this->animalApartment !== null) $output['animalApartment'] = $this->animalApartment;
        if ($this->animalCratetrained !== null) $output['animalCratetrained'] = $this->animalCratetrained;
        if ($this->animalDrools !== null) $output['animalDrools'] = $this->animalDrools;
        if ($this->animalEagerToPlease !== null) $output['animalEagerToPlease'] = $this->animalEagerToPlease;
        if ($this->animalEscapes !== null) $output['animalEscapes'] = $this->animalEscapes;
        if ($this->animalEventempered !== null) $output['animalEventempered'] = $this->animalEventempered;
        if ($this->animalFetches !== null) $output['animalFetches'] = $this->animalFetches;
        if ($this->animalGentle !== null) $output['animalGentle'] = $this->animalGentle;
        if ($this->animalGoodInCar !== null) $output['animalGoodInCar'] = $this->animalGoodInCar;
        if ($this->animalGoofy !== null) $output['animalGoofy'] = $this->animalGoofy;
        if ($this->animalHasAllergies !== null) $output['animalHasAllergies'] = $this->animalHasAllergies;
        if ($this->animalHearingImpaired !== null) $output['animalHearingImpaired'] = $this->animalHearingImpaired;
        if ($this->animalHypoallergenic !== null) $output['animalHypoallergenic'] = $this->animalHypoallergenic;
        if ($this->animalIndependent !== null) $output['animalIndependent'] = $this->animalIndependent;
        if ($this->animalIntelligent !== null) $output['animalIntelligent'] = $this->animalIntelligent;
        if ($this->animalLap !== null) $output['animalLap'] = $this->animalLap;
        if ($this->animalLeashtrained !== null) $output['animalLeashtrained'] = $this->animalLeashtrained;
        if ($this->animalNeedsCompanionAnimal !== null) $output['animalNeedsCompanionAnimal'] = $this->animalNeedsCompanionAnimal;
        if ($this->animalNoCold !== null) $output['animalNoCold'] = $this->animalNoCold;
        if ($this->animalNoFemaleDogs !== null) $output['animalNoFemaleDogs'] = $this->animalNoFemaleDogs;
        if ($this->animalNoHeat !== null) $output['animalNoHeat'] = $this->animalNoHeat;
        if ($this->animalNoLargeDogs !== null) $output['animalNoLargeDogs'] = $this->animalNoLargeDogs;
        if ($this->animalNoMaleDogs !== null) $output['animalNoMaleDogs'] = $this->animalNoMaleDogs;
        if ($this->animalNoSmallDogs !== null) $output['animalNoSmallDogs'] = $this->animalNoSmallDogs;
        if ($this->animalObedient !== null) $output['animalObedient'] = $this->animalObedient;
        if ($this->animalOKForSeniors !== null) $output['animalOKForSeniors'] = $this->animalOKForSeniors;
        if ($this->animalOKWithFarmAnimals !== null) $output['animalOKWithFarmAnimals'] = $this->animalOKWithFarmAnimals;
        if ($this->animalOlderKidsOnly !== null) $output['animalOlderKidsOnly'] = $this->animalOlderKidsOnly;
        if ($this->animalOngoingMedical !== null) $output['animalOngoingMedical'] = $this->animalOngoingMedical;
        if ($this->animalPlayful !== null) $output['animalPlayful'] = $this->animalPlayful;
        if ($this->animalPlaysToys !== null) $output['animalPlaysToys'] = $this->animalPlaysToys;
        if ($this->animalPredatory !== null) $output['animalPredatory'] = $this->animalPredatory;
        if ($this->animalProtective !== null) $output['animalProtective'] = $this->animalProtective;
        if ($this->animalSightImpaired !== null) $output['animalSightImpaired'] = $this->animalSightImpaired;
        if ($this->animalSkittish !== null) $output['animalSkittish'] = $this->animalSkittish;
        if ($this->animalSpecialDiet !== null) $output['animalSpecialDiet'] = $this->animalSpecialDiet;
        if ($this->animalSwims !== null) $output['animalSwims'] = $this->animalSwims;
        if ($this->animalTimid !== null) $output['animalTimid'] = $this->animalTimid;
        if ($this->animalGroups !== null) $output['animalGroups'] = $this->animalGroups;
        if ($this->animalExportAccounts !== null) $output['animalExportAccounts'] = $this->animalExportAccounts;

        return $output;
    }
}