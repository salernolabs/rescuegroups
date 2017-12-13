<?php
/**
 * Animals Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
     * @var integer
     */
    private $animalConditionID = null;

    /**
     * Courtesy
     * @var string
     */
    private $animalCourtesy = null;

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
        return 'edit';
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
     * @param integer $animalConditionID
     * @return $this
     */
    public function setAnimalConditionID($animalConditionID)
    {
        $this->animalConditionID = $animalConditionID;

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
        if ($this->animalAdoptionLeadID !== null) $parameterArray['animalAdoptionLeadID'] = $this->animalAdoptionLeadID;
        if ($this->animalAltered !== null) $parameterArray['animalAltered'] = $this->animalAltered;
        if ($this->animalApplicationID !== null) $parameterArray['animalApplicationID'] = $this->animalApplicationID;
        if ($this->animalAvailableDate !== null) $parameterArray['animalAvailableDate'] = $this->animalAvailableDate;
        if ($this->animalBirthdate !== null) $parameterArray['animalBirthdate'] = $this->animalBirthdate;
        if ($this->animalBirthdateExact !== null) $parameterArray['animalBirthdateExact'] = $this->animalBirthdateExact;
        if ($this->animalCoatLength !== null) $parameterArray['animalCoatLength'] = $this->animalCoatLength;
        if ($this->animalColonyID !== null) $parameterArray['animalColonyID'] = $this->animalColonyID;
        if ($this->animalColorID !== null) $parameterArray['animalColorID'] = $this->animalColorID;
        if ($this->animalColorDetails !== null) $parameterArray['animalColorDetails'] = $this->animalColorDetails;
        if ($this->animalConditionID !== null) $parameterArray['animalConditionID'] = $this->animalConditionID;
        if ($this->animalCourtesy !== null) $parameterArray['animalCourtesy'] = $this->animalCourtesy;
        if ($this->animalDeclawed !== null) $parameterArray['animalDeclawed'] = $this->animalDeclawed;
        if ($this->animalDescription !== null) $parameterArray['animalDescription'] = $this->animalDescription;
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
        if ($this->animalInternalID !== null) $parameterArray['animalInternalID'] = $this->animalInternalID;
        if ($this->animalKillDate !== null) $parameterArray['animalKillDate'] = $this->animalKillDate;
        if ($this->animalKillReason !== null) $parameterArray['animalKillReason'] = $this->animalKillReason;
        if ($this->animalLocationID !== null) $parameterArray['animalLocationID'] = $this->animalLocationID;
        if ($this->animalLocationPublic !== null) $parameterArray['animalLocationPublic'] = $this->animalLocationPublic;
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
        if ($this->animalOrigin !== null) $parameterArray['animalOrigin'] = $this->animalOrigin;
        if ($this->animalOthernames !== null) $parameterArray['animalOthernames'] = $this->animalOthernames;
        if ($this->animalOwnerExperience !== null) $parameterArray['animalOwnerExperience'] = $this->animalOwnerExperience;
        if ($this->animalOwnerID !== null) $parameterArray['animalOwnerID'] = $this->animalOwnerID;
        if ($this->animalPatternID !== null) $parameterArray['animalPatternID'] = $this->animalPatternID;
        if ($this->animalAdoptionPending !== null) $parameterArray['animalAdoptionPending'] = $this->animalAdoptionPending;
        if ($this->animalPrimaryBreedID !== null) $parameterArray['animalPrimaryBreedID'] = $this->animalPrimaryBreedID;
        if ($this->animalReceivedDate !== null) $parameterArray['animalReceivedDate'] = $this->animalReceivedDate;
        if ($this->animalRescueID !== null) $parameterArray['animalRescueID'] = $this->animalRescueID;
        if ($this->animalSecondaryBreedID !== null) $parameterArray['animalSecondaryBreedID'] = $this->animalSecondaryBreedID;
        if ($this->animalSex !== null) $parameterArray['animalSex'] = $this->animalSex;
        if ($this->animalShared !== null) $parameterArray['animalShared'] = $this->animalShared;
        if ($this->animalShedding !== null) $parameterArray['animalShedding'] = $this->animalShedding;
        if ($this->animalSizeCurrent !== null) $parameterArray['animalSizeCurrent'] = $this->animalSizeCurrent;
        if ($this->animalSizePotential !== null) $parameterArray['animalSizePotential'] = $this->animalSizePotential;
        if ($this->animalSizeUOM !== null) $parameterArray['animalSizeUOM'] = $this->animalSizeUOM;
        if ($this->animalSpeciesID !== null) $parameterArray['animalSpeciesID'] = $this->animalSpeciesID;
        if ($this->animalSponsorable !== null) $parameterArray['animalSponsorable'] = $this->animalSponsorable;
        if ($this->animalSponsors !== null) $parameterArray['animalSponsors'] = $this->animalSponsors;
        if ($this->animalSponsorshipDetails !== null) $parameterArray['animalSponsorshipDetails'] = $this->animalSponsorshipDetails;
        if ($this->animalSponsorshipMinimum !== null) $parameterArray['animalSponsorshipMinimum'] = $this->animalSponsorshipMinimum;
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
        if ($this->animalGroups !== null) $parameterArray['animalGroups'] = $this->animalGroups;
        if ($this->animalExportAccounts !== null) $parameterArray['animalExportAccounts'] = $this->animalExportAccounts;

    }
}