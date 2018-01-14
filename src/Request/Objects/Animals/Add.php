<?php
/**
 * Animals Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Activity level
     *
     * @var string
     */
    private $animalActivityLevel = null;

    /**
     * Adopted Date
     *
     * @var \DateTime
     */
    private $animalAdoptedDate = null;

    /**
     * Adoption fee
     *
     * @var string
     */
    private $animalAdoptionFee = null;

    /**
     * Adoption lead
     *
     * @var integer
     */
    private $animalAdoptionLeadID = null;

    /**
     * Adoption pending
     *
     * @var string
     */
    private $animalAdoptionPending = null;

    /**
     * Altered
     *
     * @var string
     */
    private $animalAltered = null;

    /**
     * Application
     *
     * @var integer
     */
    private $animalApplicationID = null;

    /**
     * Available Date
     *
     * @var \DateTime
     */
    private $animalAvailableDate = null;

    /**
     * Birthdate
     *
     * @var \DateTime
     */
    private $animalBirthdate = null;

    /**
     * Exact Birthdate
     *
     * @var string
     */
    private $animalBirthdateExact = null;

    /**
     * Coat Length
     *
     * @var string
     */
    private $animalCoatLength = null;

    /**
     * Colony
     *
     * @var integer
     */
    private $animalColonyID = null;

    /**
     * Color (General)
     *
     * @var integer
     */
    private $animalColorID = null;

    /**
     * Color details
     *
     * @var string
     */
    private $animalColorDetails = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $animalConditionID = null;

    /**
     * Courtesy
     *
     * @var string
     */
    private $animalCourtesy = null;

    /**
     * Declawed
     *
     * @var string
     */
    private $animalDeclawed = null;

    /**
     * Description
     *
     * @var string
     */
    private $animalDescription = null;

    /**
     * Distinguishing marks
     *
     * @var string
     */
    private $animalDistinguishingMarks = null;

    /**
     * Allow export
     *
     * @var string
     */
    private $animalAllowExport = null;

    /**
     * Ear type
     *
     * @var string
     */
    private $animalEarType = null;

    /**
     * Energy level
     *
     * @var string
     */
    private $animalEnergyLevel = null;

    /**
     * Exercise needs
     *
     * @var string
     */
    private $animalExerciseNeeds = null;

    /**
     * Eye color
     *
     * @var string
     */
    private $animalEyeColor = null;

    /**
     * Requires a home with fence
     *
     * @var string
     */
    private $animalFence = null;

    /**
     * Foster
     *
     * @var integer
     */
    private $animalFosterID = null;

    /**
     * Found
     *
     * @var string
     */
    private $animalFound = null;

    /**
     * Found date
     *
     * @var \DateTime
     */
    private $animalFoundDate = null;

    /**
     * Found zip/postal code
     *
     * @var string
     */
    private $animalFoundPostalcode = null;

    /**
     * General Age
     *
     * @var string
     */
    private $animalGeneralAge = null;

    /**
     * Size potential (general)
     *
     * @var string
     */
    private $animalGeneralSizePotential = null;

    /**
     * Grooming needs
     *
     * @var string
     */
    private $animalGroomingNeeds = null;

    /**
     * Highlight
     *
     * @var string
     */
    private $animalHighlightOrder = null;

    /**
     * Housetrained
     *
     * @var string
     */
    private $animalHousetrained = null;

    /**
     * Indoor/Outdoor
     *
     * @var string
     */
    private $animalIndoorOutdoor = null;

    /**
     * Internal ID
     *
     * @var string
     */
    private $animalInternalID = null;

    /**
     * Euthanasia date
     *
     * @var \DateTime
     */
    private $animalKillDate = null;

    /**
     * Euthanasia reason
     *
     * @var string
     */
    private $animalKillReason = null;

    /**
     * Location
     *
     * @var integer
     */
    private $animalLocationID = null;

    /**
     * Location public
     *
     * @var string
     */
    private $animalLocationPublic = null;

    /**
     * Microchip number
     *
     * @var string
     */
    private $animalMicrochipNumber = null;

    /**
     * Microchip vendor
     *
     * @var integer
     */
    private $animalMicrochipVendor = null;

    /**
     * Mixed breed
     *
     * @var string
     */
    private $animalMixedBreed = null;

    /**
     * Name
     *
     * @var string
     */
    private $animalName = null;

    /**
     * Needs a Foster
     *
     * @var string
     */
    private $animalNeedsFoster = null;

    /**
     * Reaction to new people
     *
     * @var string
     */
    private $animalNewPeople = null;

    /**
     * Private notes
     *
     * @var string
     */
    private $animalNotes = null;

    /**
     * Reason not housetrained
     *
     * @var string
     */
    private $animalNotHousetrainedReason = null;

    /**
     * Obedience training
     *
     * @var string
     */
    private $animalObedienceTraining = null;

    /**
     * Good with adults
     *
     * @var string
     */
    private $animalOKWithAdults = null;

    /**
     * OK with cats
     *
     * @var string
     */
    private $animalOKWithCats = null;

    /**
     * OK with dogs
     *
     * @var string
     */
    private $animalOKWithDogs = null;

    /**
     * OK with kids
     *
     * @var string
     */
    private $animalOKWithKids = null;

    /**
     * Origin
     *
     * @var string
     */
    private $animalOrigin = null;

    /**
     * Other names
     *
     * @var string
     */
    private $animalOthernames = null;

    /**
     * Owner experience needed
     *
     * @var string
     */
    private $animalOwnerExperience = null;

    /**
     * Owner
     *
     * @var integer
     */
    private $animalOwnerID = null;

    /**
     * Pattern
     *
     * @var integer
     */
    private $animalPatternID = null;

    /**
     * Primary breed
     *
     * @var integer
     */
    private $animalPrimaryBreedID = null;

    /**
     * Received date
     *
     * @var \DateTime
     */
    private $animalReceivedDate = null;

    /**
     * Rescue ID
     *
     * @var string
     */
    private $animalRescueID = null;

    /**
     * Secondary Breed
     *
     * @var integer
     */
    private $animalSecondaryBreedID = null;

    /**
     * Sex
     *
     * @var string
     */
    private $animalSex = null;

    /**
     * Shared
     *
     * @var string
     */
    private $animalShared = null;

    /**
     * Shedding amount
     *
     * @var string
     */
    private $animalShedding = null;

    /**
     * Current size
     *
     * @var float
     */
    private $animalSizeCurrent = null;

    /**
     * Size potential
     *
     * @var float
     */
    private $animalSizePotential = null;

    /**
     * Size unit of measure
     *
     * @var string
     */
    private $animalSizeUOM = null;

    /**
     * Has special needs
     *
     * @var string
     */
    private $animalSpecialneeds = null;

    /**
     * Special needs description
     *
     * @var string
     */
    private $animalSpecialneedsDescription = null;

    /**
     * Species
     *
     * @var integer
     */
    private $animalSpeciesID = null;

    /**
     * Allow sponsorship
     *
     * @var string
     */
    private $animalSponsorable = null;

    /**
     * Sponsors
     *
     * @var string
     */
    private $animalSponsors = null;

    /**
     * Sponsorship details
     *
     * @var string
     */
    private $animalSponsorshipDetails = null;

    /**
     * Sponsorship minimum
     *
     * @var float
     */
    private $animalSponsorshipMinimum = null;

    /**
     * Status
     *
     * @var integer
     */
    private $animalStatusID = null;

    /**
     * Summary
     *
     * @var string
     */
    private $animalSummary = null;

    /**
     * Tail type
     *
     * @var string
     */
    private $animalTailType = null;

    /**
     * Transferred to
     *
     * @var integer
     */
    private $animalTransferredToID = null;

    /**
     * Up-to-date
     *
     * @var string
     */
    private $animalUptodate = null;

    /**
     * Likes to vocalize
     *
     * @var string
     */
    private $animalVocal = null;

    /**
     * Requires a Yard
     *
     * @var string
     */
    private $animalYardRequired = null;

    /**
     * Affectionate
     *
     * @var string
     */
    private $animalAffectionate = null;

    /**
     * Apartment appropriate
     *
     * @var string
     */
    private $animalApartment = null;

    /**
     * Crate trained
     *
     * @var string
     */
    private $animalCratetrained = null;

    /**
     * Drools excessively
     *
     * @var string
     */
    private $animalDrools = null;

    /**
     * Eager to please
     *
     * @var string
     */
    private $animalEagerToPlease = null;

    /**
     * Tries to escape
     *
     * @var string
     */
    private $animalEscapes = null;

    /**
     * Even-tempered
     *
     * @var string
     */
    private $animalEventempered = null;

    /**
     * Likes to fetch
     *
     * @var string
     */
    private $animalFetches = null;

    /**
     * Gentle
     *
     * @var string
     */
    private $animalGentle = null;

    /**
     * Does well in a car
     *
     * @var string
     */
    private $animalGoodInCar = null;

    /**
     * Goofy
     *
     * @var string
     */
    private $animalGoofy = null;

    /**
     * Has allergies
     *
     * @var string
     */
    private $animalHasAllergies = null;

    /**
     * Hearing impaired
     *
     * @var string
     */
    private $animalHearingImpaired = null;

    /**
     * Hypoallergenic
     *
     * @var string
     */
    private $animalHypoallergenic = null;

    /**
     * Independent / aloof
     *
     * @var string
     */
    private $animalIndependent = null;

    /**
     * Intelligent
     *
     * @var string
     */
    private $animalIntelligent = null;

    /**
     * Lap pet
     *
     * @var string
     */
    private $animalLap = null;

    /**
     * Leash trained
     *
     * @var string
     */
    private $animalLeashtrained = null;

    /**
     * Needs companion animal
     *
     * @var string
     */
    private $animalNeedsCompanionAnimal = null;

    /**
     * Cold sensitive
     *
     * @var string
     */
    private $animalNoCold = null;

    /**
     * Not good with female dogs
     *
     * @var string
     */
    private $animalNoFemaleDogs = null;

    /**
     * Heat sensitive
     *
     * @var string
     */
    private $animalNoHeat = null;

    /**
     * Not good with large dogs
     *
     * @var string
     */
    private $animalNoLargeDogs = null;

    /**
     * Not good with male dogs
     *
     * @var string
     */
    private $animalNoMaleDogs = null;

    /**
     * Not good with small dogs
     *
     * @var string
     */
    private $animalNoSmallDogs = null;

    /**
     * Obedient
     *
     * @var string
     */
    private $animalObedient = null;

    /**
     * Good for seniors / elderly
     *
     * @var string
     */
    private $animalOKForSeniors = null;

    /**
     * Good with farm animals
     *
     * @var string
     */
    private $animalOKWithFarmAnimals = null;

    /**
     * Older/ considerate kids only
     *
     * @var string
     */
    private $animalOlderKidsOnly = null;

    /**
     * Needs ongoing medical care
     *
     * @var string
     */
    private $animalOngoingMedical = null;

    /**
     * Playful
     *
     * @var string
     */
    private $animalPlayful = null;

    /**
     * Likes toys
     *
     * @var string
     */
    private $animalPlaysToys = null;

    /**
     * Predatory
     *
     * @var string
     */
    private $animalPredatory = null;

    /**
     * Protective / territorial
     *
     * @var string
     */
    private $animalProtective = null;

    /**
     * Sight impaired
     *
     * @var string
     */
    private $animalSightImpaired = null;

    /**
     * Skittish
     *
     * @var string
     */
    private $animalSkittish = null;

    /**
     * Special diet required
     *
     * @var string
     */
    private $animalSpecialDiet = null;

    /**
     * Likes to swim
     *
     * @var string
     */
    private $animalSwims = null;

    /**
     * Timid / shy
     *
     * @var string
     */
    private $animalTimid = null;

    /**
     * Groups
     *
     * @var integer
     */
    private $animalGroups = null;

    /**
     * Export accounts
     *
     * @var integer
     */
    private $animalExportAccounts = null;


    /**
     * Set Activity level
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalActivityLevel($value)
    {
        $this->animalActivityLevel = $value;

        return $this;
    }

    /**
     * Set Adopted Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setAnimalAdoptedDate($value)
    {
        $this->animalAdoptedDate = $value;

        return $this;
    }

    /**
     * Set Adoption fee
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalAdoptionFee($value)
    {
        $this->animalAdoptionFee = $value;

        return $this;
    }

    /**
     * Set Adoption lead
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalAdoptionLeadID($value)
    {
        $this->animalAdoptionLeadID = $value;

        return $this;
    }

    /**
     * Set Adoption pending
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalAdoptionPending($value)
    {
        $this->animalAdoptionPending = $value;

        return $this;
    }

    /**
     * Set Altered
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalAltered($value)
    {
        $this->animalAltered = $value;

        return $this;
    }

    /**
     * Set Application
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalApplicationID($value)
    {
        $this->animalApplicationID = $value;

        return $this;
    }

    /**
     * Set Available Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setAnimalAvailableDate($value)
    {
        $this->animalAvailableDate = $value;

        return $this;
    }

    /**
     * Set Birthdate
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setAnimalBirthdate($value)
    {
        $this->animalBirthdate = $value;

        return $this;
    }

    /**
     * Set Exact Birthdate
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalBirthdateExact($value)
    {
        $this->animalBirthdateExact = $value;

        return $this;
    }

    /**
     * Set Coat Length
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalCoatLength($value)
    {
        $this->animalCoatLength = $value;

        return $this;
    }

    /**
     * Set Colony
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalColonyID($value)
    {
        $this->animalColonyID = $value;

        return $this;
    }

    /**
     * Set Color (General)
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalColorID($value)
    {
        $this->animalColorID = $value;

        return $this;
    }

    /**
     * Set Color details
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalColorDetails($value)
    {
        $this->animalColorDetails = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalConditionID($value)
    {
        $this->animalConditionID = $value;

        return $this;
    }

    /**
     * Set Courtesy
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalCourtesy($value)
    {
        $this->animalCourtesy = $value;

        return $this;
    }

    /**
     * Set Declawed
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalDeclawed($value)
    {
        $this->animalDeclawed = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalDescription($value)
    {
        $this->animalDescription = $value;

        return $this;
    }

    /**
     * Set Distinguishing marks
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalDistinguishingMarks($value)
    {
        $this->animalDistinguishingMarks = $value;

        return $this;
    }

    /**
     * Set Allow export
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalAllowExport($value)
    {
        $this->animalAllowExport = $value;

        return $this;
    }

    /**
     * Set Ear type
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalEarType($value)
    {
        $this->animalEarType = $value;

        return $this;
    }

    /**
     * Set Energy level
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalEnergyLevel($value)
    {
        $this->animalEnergyLevel = $value;

        return $this;
    }

    /**
     * Set Exercise needs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExerciseNeeds($value)
    {
        $this->animalExerciseNeeds = $value;

        return $this;
    }

    /**
     * Set Eye color
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalEyeColor($value)
    {
        $this->animalEyeColor = $value;

        return $this;
    }

    /**
     * Set Requires a home with fence
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalFence($value)
    {
        $this->animalFence = $value;

        return $this;
    }

    /**
     * Set Foster
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalFosterID($value)
    {
        $this->animalFosterID = $value;

        return $this;
    }

    /**
     * Set Found
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalFound($value)
    {
        $this->animalFound = $value;

        return $this;
    }

    /**
     * Set Found date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setAnimalFoundDate($value)
    {
        $this->animalFoundDate = $value;

        return $this;
    }

    /**
     * Set Found zip/postal code
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalFoundPostalcode($value)
    {
        $this->animalFoundPostalcode = $value;

        return $this;
    }

    /**
     * Set General Age
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalGeneralAge($value)
    {
        $this->animalGeneralAge = $value;

        return $this;
    }

    /**
     * Set Size potential (general)
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalGeneralSizePotential($value)
    {
        $this->animalGeneralSizePotential = $value;

        return $this;
    }

    /**
     * Set Grooming needs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalGroomingNeeds($value)
    {
        $this->animalGroomingNeeds = $value;

        return $this;
    }

    /**
     * Set Highlight
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalHighlightOrder($value)
    {
        $this->animalHighlightOrder = $value;

        return $this;
    }

    /**
     * Set Housetrained
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalHousetrained($value)
    {
        $this->animalHousetrained = $value;

        return $this;
    }

    /**
     * Set Indoor/Outdoor
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalIndoorOutdoor($value)
    {
        $this->animalIndoorOutdoor = $value;

        return $this;
    }

    /**
     * Set Internal ID
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalInternalID($value)
    {
        $this->animalInternalID = $value;

        return $this;
    }

    /**
     * Set Euthanasia date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setAnimalKillDate($value)
    {
        $this->animalKillDate = $value;

        return $this;
    }

    /**
     * Set Euthanasia reason
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalKillReason($value)
    {
        $this->animalKillReason = $value;

        return $this;
    }

    /**
     * Set Location
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalLocationID($value)
    {
        $this->animalLocationID = $value;

        return $this;
    }

    /**
     * Set Location public
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalLocationPublic($value)
    {
        $this->animalLocationPublic = $value;

        return $this;
    }

    /**
     * Set Microchip number
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalMicrochipNumber($value)
    {
        $this->animalMicrochipNumber = $value;

        return $this;
    }

    /**
     * Set Microchip vendor
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalMicrochipVendor($value)
    {
        $this->animalMicrochipVendor = $value;

        return $this;
    }

    /**
     * Set Mixed breed
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalMixedBreed($value)
    {
        $this->animalMixedBreed = $value;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalName($value)
    {
        $this->animalName = $value;

        return $this;
    }

    /**
     * Set Needs a Foster
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNeedsFoster($value)
    {
        $this->animalNeedsFoster = $value;

        return $this;
    }

    /**
     * Set Reaction to new people
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNewPeople($value)
    {
        $this->animalNewPeople = $value;

        return $this;
    }

    /**
     * Set Private notes
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNotes($value)
    {
        $this->animalNotes = $value;

        return $this;
    }

    /**
     * Set Reason not housetrained
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNotHousetrainedReason($value)
    {
        $this->animalNotHousetrainedReason = $value;

        return $this;
    }

    /**
     * Set Obedience training
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalObedienceTraining($value)
    {
        $this->animalObedienceTraining = $value;

        return $this;
    }

    /**
     * Set Good with adults
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOKWithAdults($value)
    {
        $this->animalOKWithAdults = $value;

        return $this;
    }

    /**
     * Set OK with cats
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOKWithCats($value)
    {
        $this->animalOKWithCats = $value;

        return $this;
    }

    /**
     * Set OK with dogs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOKWithDogs($value)
    {
        $this->animalOKWithDogs = $value;

        return $this;
    }

    /**
     * Set OK with kids
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOKWithKids($value)
    {
        $this->animalOKWithKids = $value;

        return $this;
    }

    /**
     * Set Origin
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOrigin($value)
    {
        $this->animalOrigin = $value;

        return $this;
    }

    /**
     * Set Other names
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOthernames($value)
    {
        $this->animalOthernames = $value;

        return $this;
    }

    /**
     * Set Owner experience needed
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOwnerExperience($value)
    {
        $this->animalOwnerExperience = $value;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalOwnerID($value)
    {
        $this->animalOwnerID = $value;

        return $this;
    }

    /**
     * Set Pattern
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalPatternID($value)
    {
        $this->animalPatternID = $value;

        return $this;
    }

    /**
     * Set Primary breed
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalPrimaryBreedID($value)
    {
        $this->animalPrimaryBreedID = $value;

        return $this;
    }

    /**
     * Set Received date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setAnimalReceivedDate($value)
    {
        $this->animalReceivedDate = $value;

        return $this;
    }

    /**
     * Set Rescue ID
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalRescueID($value)
    {
        $this->animalRescueID = $value;

        return $this;
    }

    /**
     * Set Secondary Breed
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalSecondaryBreedID($value)
    {
        $this->animalSecondaryBreedID = $value;

        return $this;
    }

    /**
     * Set Sex
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSex($value)
    {
        $this->animalSex = $value;

        return $this;
    }

    /**
     * Set Shared
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalShared($value)
    {
        $this->animalShared = $value;

        return $this;
    }

    /**
     * Set Shedding amount
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalShedding($value)
    {
        $this->animalShedding = $value;

        return $this;
    }

    /**
     * Set Current size
     *
     * @param float $value
     * @return $this
     */
    public function setAnimalSizeCurrent($value)
    {
        $this->animalSizeCurrent = $value;

        return $this;
    }

    /**
     * Set Size potential
     *
     * @param float $value
     * @return $this
     */
    public function setAnimalSizePotential($value)
    {
        $this->animalSizePotential = $value;

        return $this;
    }

    /**
     * Set Size unit of measure
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSizeUOM($value)
    {
        $this->animalSizeUOM = $value;

        return $this;
    }

    /**
     * Set Has special needs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSpecialneeds($value)
    {
        $this->animalSpecialneeds = $value;

        return $this;
    }

    /**
     * Set Special needs description
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSpecialneedsDescription($value)
    {
        $this->animalSpecialneedsDescription = $value;

        return $this;
    }

    /**
     * Set Species
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalSpeciesID($value)
    {
        $this->animalSpeciesID = $value;

        return $this;
    }

    /**
     * Set Allow sponsorship
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSponsorable($value)
    {
        $this->animalSponsorable = $value;

        return $this;
    }

    /**
     * Set Sponsors
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSponsors($value)
    {
        $this->animalSponsors = $value;

        return $this;
    }

    /**
     * Set Sponsorship details
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSponsorshipDetails($value)
    {
        $this->animalSponsorshipDetails = $value;

        return $this;
    }

    /**
     * Set Sponsorship minimum
     *
     * @param float $value
     * @return $this
     */
    public function setAnimalSponsorshipMinimum($value)
    {
        $this->animalSponsorshipMinimum = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalStatusID($value)
    {
        $this->animalStatusID = $value;

        return $this;
    }

    /**
     * Set Summary
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSummary($value)
    {
        $this->animalSummary = $value;

        return $this;
    }

    /**
     * Set Tail type
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalTailType($value)
    {
        $this->animalTailType = $value;

        return $this;
    }

    /**
     * Set Transferred to
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalTransferredToID($value)
    {
        $this->animalTransferredToID = $value;

        return $this;
    }

    /**
     * Set Up-to-date
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalUptodate($value)
    {
        $this->animalUptodate = $value;

        return $this;
    }

    /**
     * Set Likes to vocalize
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalVocal($value)
    {
        $this->animalVocal = $value;

        return $this;
    }

    /**
     * Set Requires a Yard
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalYardRequired($value)
    {
        $this->animalYardRequired = $value;

        return $this;
    }

    /**
     * Set Affectionate
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalAffectionate($value)
    {
        $this->animalAffectionate = $value;

        return $this;
    }

    /**
     * Set Apartment appropriate
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalApartment($value)
    {
        $this->animalApartment = $value;

        return $this;
    }

    /**
     * Set Crate trained
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalCratetrained($value)
    {
        $this->animalCratetrained = $value;

        return $this;
    }

    /**
     * Set Drools excessively
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalDrools($value)
    {
        $this->animalDrools = $value;

        return $this;
    }

    /**
     * Set Eager to please
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalEagerToPlease($value)
    {
        $this->animalEagerToPlease = $value;

        return $this;
    }

    /**
     * Set Tries to escape
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalEscapes($value)
    {
        $this->animalEscapes = $value;

        return $this;
    }

    /**
     * Set Even-tempered
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalEventempered($value)
    {
        $this->animalEventempered = $value;

        return $this;
    }

    /**
     * Set Likes to fetch
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalFetches($value)
    {
        $this->animalFetches = $value;

        return $this;
    }

    /**
     * Set Gentle
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalGentle($value)
    {
        $this->animalGentle = $value;

        return $this;
    }

    /**
     * Set Does well in a car
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalGoodInCar($value)
    {
        $this->animalGoodInCar = $value;

        return $this;
    }

    /**
     * Set Goofy
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalGoofy($value)
    {
        $this->animalGoofy = $value;

        return $this;
    }

    /**
     * Set Has allergies
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalHasAllergies($value)
    {
        $this->animalHasAllergies = $value;

        return $this;
    }

    /**
     * Set Hearing impaired
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalHearingImpaired($value)
    {
        $this->animalHearingImpaired = $value;

        return $this;
    }

    /**
     * Set Hypoallergenic
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalHypoallergenic($value)
    {
        $this->animalHypoallergenic = $value;

        return $this;
    }

    /**
     * Set Independent / aloof
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalIndependent($value)
    {
        $this->animalIndependent = $value;

        return $this;
    }

    /**
     * Set Intelligent
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalIntelligent($value)
    {
        $this->animalIntelligent = $value;

        return $this;
    }

    /**
     * Set Lap pet
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalLap($value)
    {
        $this->animalLap = $value;

        return $this;
    }

    /**
     * Set Leash trained
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalLeashtrained($value)
    {
        $this->animalLeashtrained = $value;

        return $this;
    }

    /**
     * Set Needs companion animal
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNeedsCompanionAnimal($value)
    {
        $this->animalNeedsCompanionAnimal = $value;

        return $this;
    }

    /**
     * Set Cold sensitive
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNoCold($value)
    {
        $this->animalNoCold = $value;

        return $this;
    }

    /**
     * Set Not good with female dogs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNoFemaleDogs($value)
    {
        $this->animalNoFemaleDogs = $value;

        return $this;
    }

    /**
     * Set Heat sensitive
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNoHeat($value)
    {
        $this->animalNoHeat = $value;

        return $this;
    }

    /**
     * Set Not good with large dogs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNoLargeDogs($value)
    {
        $this->animalNoLargeDogs = $value;

        return $this;
    }

    /**
     * Set Not good with male dogs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNoMaleDogs($value)
    {
        $this->animalNoMaleDogs = $value;

        return $this;
    }

    /**
     * Set Not good with small dogs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalNoSmallDogs($value)
    {
        $this->animalNoSmallDogs = $value;

        return $this;
    }

    /**
     * Set Obedient
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalObedient($value)
    {
        $this->animalObedient = $value;

        return $this;
    }

    /**
     * Set Good for seniors / elderly
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOKForSeniors($value)
    {
        $this->animalOKForSeniors = $value;

        return $this;
    }

    /**
     * Set Good with farm animals
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOKWithFarmAnimals($value)
    {
        $this->animalOKWithFarmAnimals = $value;

        return $this;
    }

    /**
     * Set Older/ considerate kids only
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOlderKidsOnly($value)
    {
        $this->animalOlderKidsOnly = $value;

        return $this;
    }

    /**
     * Set Needs ongoing medical care
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalOngoingMedical($value)
    {
        $this->animalOngoingMedical = $value;

        return $this;
    }

    /**
     * Set Playful
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalPlayful($value)
    {
        $this->animalPlayful = $value;

        return $this;
    }

    /**
     * Set Likes toys
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalPlaysToys($value)
    {
        $this->animalPlaysToys = $value;

        return $this;
    }

    /**
     * Set Predatory
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalPredatory($value)
    {
        $this->animalPredatory = $value;

        return $this;
    }

    /**
     * Set Protective / territorial
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalProtective($value)
    {
        $this->animalProtective = $value;

        return $this;
    }

    /**
     * Set Sight impaired
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSightImpaired($value)
    {
        $this->animalSightImpaired = $value;

        return $this;
    }

    /**
     * Set Skittish
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSkittish($value)
    {
        $this->animalSkittish = $value;

        return $this;
    }

    /**
     * Set Special diet required
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSpecialDiet($value)
    {
        $this->animalSpecialDiet = $value;

        return $this;
    }

    /**
     * Set Likes to swim
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalSwims($value)
    {
        $this->animalSwims = $value;

        return $this;
    }

    /**
     * Set Timid / shy
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalTimid($value)
    {
        $this->animalTimid = $value;

        return $this;
    }

    /**
     * Set Groups
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalGroups($value)
    {
        $this->animalGroups = $value;

        return $this;
    }

    /**
     * Set Export accounts
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalExportAccounts($value)
    {
        $this->animalExportAccounts = $value;

        return $this;
    }


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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->animalActivityLevel !== null) $parameterArray['values'][] = ["animalActivityLevel"=>$this->animalActivityLevel];
        if ($this->animalAdoptedDate !== null) $parameterArray['values'][] = ["animalAdoptedDate"=>$this->animalAdoptedDate];
        if ($this->animalAdoptionFee !== null) $parameterArray['values'][] = ["animalAdoptionFee"=>$this->animalAdoptionFee];
        if ($this->animalAdoptionLeadID !== null) $parameterArray['values'][] = ["animalAdoptionLeadID"=>$this->animalAdoptionLeadID];
        if ($this->animalAdoptionPending !== null) $parameterArray['values'][] = ["animalAdoptionPending"=>$this->animalAdoptionPending];
        if ($this->animalAltered !== null) $parameterArray['values'][] = ["animalAltered"=>$this->animalAltered];
        if ($this->animalApplicationID !== null) $parameterArray['values'][] = ["animalApplicationID"=>$this->animalApplicationID];
        if ($this->animalAvailableDate !== null) $parameterArray['values'][] = ["animalAvailableDate"=>$this->animalAvailableDate];
        if ($this->animalBirthdate !== null) $parameterArray['values'][] = ["animalBirthdate"=>$this->animalBirthdate];
        if ($this->animalBirthdateExact !== null) $parameterArray['values'][] = ["animalBirthdateExact"=>$this->animalBirthdateExact];
        if ($this->animalCoatLength !== null) $parameterArray['values'][] = ["animalCoatLength"=>$this->animalCoatLength];
        if ($this->animalColonyID !== null) $parameterArray['values'][] = ["animalColonyID"=>$this->animalColonyID];
        if ($this->animalColorID !== null) $parameterArray['values'][] = ["animalColorID"=>$this->animalColorID];
        if ($this->animalColorDetails !== null) $parameterArray['values'][] = ["animalColorDetails"=>$this->animalColorDetails];
        if ($this->animalConditionID !== null) $parameterArray['values'][] = ["animalConditionID"=>$this->animalConditionID];
        if ($this->animalCourtesy !== null) $parameterArray['values'][] = ["animalCourtesy"=>$this->animalCourtesy];
        if ($this->animalDeclawed !== null) $parameterArray['values'][] = ["animalDeclawed"=>$this->animalDeclawed];
        if ($this->animalDescription !== null) $parameterArray['values'][] = ["animalDescription"=>$this->animalDescription];
        if ($this->animalDistinguishingMarks !== null) $parameterArray['values'][] = ["animalDistinguishingMarks"=>$this->animalDistinguishingMarks];
        if ($this->animalAllowExport !== null) $parameterArray['values'][] = ["animalAllowExport"=>$this->animalAllowExport];
        if ($this->animalEarType !== null) $parameterArray['values'][] = ["animalEarType"=>$this->animalEarType];
        if ($this->animalEnergyLevel !== null) $parameterArray['values'][] = ["animalEnergyLevel"=>$this->animalEnergyLevel];
        if ($this->animalExerciseNeeds !== null) $parameterArray['values'][] = ["animalExerciseNeeds"=>$this->animalExerciseNeeds];
        if ($this->animalEyeColor !== null) $parameterArray['values'][] = ["animalEyeColor"=>$this->animalEyeColor];
        if ($this->animalFence !== null) $parameterArray['values'][] = ["animalFence"=>$this->animalFence];
        if ($this->animalFosterID !== null) $parameterArray['values'][] = ["animalFosterID"=>$this->animalFosterID];
        if ($this->animalFound !== null) $parameterArray['values'][] = ["animalFound"=>$this->animalFound];
        if ($this->animalFoundDate !== null) $parameterArray['values'][] = ["animalFoundDate"=>$this->animalFoundDate];
        if ($this->animalFoundPostalcode !== null) $parameterArray['values'][] = ["animalFoundPostalcode"=>$this->animalFoundPostalcode];
        if ($this->animalGeneralAge !== null) $parameterArray['values'][] = ["animalGeneralAge"=>$this->animalGeneralAge];
        if ($this->animalGeneralSizePotential !== null) $parameterArray['values'][] = ["animalGeneralSizePotential"=>$this->animalGeneralSizePotential];
        if ($this->animalGroomingNeeds !== null) $parameterArray['values'][] = ["animalGroomingNeeds"=>$this->animalGroomingNeeds];
        if ($this->animalHighlightOrder !== null) $parameterArray['values'][] = ["animalHighlightOrder"=>$this->animalHighlightOrder];
        if ($this->animalHousetrained !== null) $parameterArray['values'][] = ["animalHousetrained"=>$this->animalHousetrained];
        if ($this->animalIndoorOutdoor !== null) $parameterArray['values'][] = ["animalIndoorOutdoor"=>$this->animalIndoorOutdoor];
        if ($this->animalInternalID !== null) $parameterArray['values'][] = ["animalInternalID"=>$this->animalInternalID];
        if ($this->animalKillDate !== null) $parameterArray['values'][] = ["animalKillDate"=>$this->animalKillDate];
        if ($this->animalKillReason !== null) $parameterArray['values'][] = ["animalKillReason"=>$this->animalKillReason];
        if ($this->animalLocationID !== null) $parameterArray['values'][] = ["animalLocationID"=>$this->animalLocationID];
        if ($this->animalLocationPublic !== null) $parameterArray['values'][] = ["animalLocationPublic"=>$this->animalLocationPublic];
        if ($this->animalMicrochipNumber !== null) $parameterArray['values'][] = ["animalMicrochipNumber"=>$this->animalMicrochipNumber];
        if ($this->animalMicrochipVendor !== null) $parameterArray['values'][] = ["animalMicrochipVendor"=>$this->animalMicrochipVendor];
        if ($this->animalMixedBreed !== null) $parameterArray['values'][] = ["animalMixedBreed"=>$this->animalMixedBreed];
        if ($this->animalName !== null) $parameterArray['values'][] = ["animalName"=>$this->animalName];
        if ($this->animalNeedsFoster !== null) $parameterArray['values'][] = ["animalNeedsFoster"=>$this->animalNeedsFoster];
        if ($this->animalNewPeople !== null) $parameterArray['values'][] = ["animalNewPeople"=>$this->animalNewPeople];
        if ($this->animalNotes !== null) $parameterArray['values'][] = ["animalNotes"=>$this->animalNotes];
        if ($this->animalNotHousetrainedReason !== null) $parameterArray['values'][] = ["animalNotHousetrainedReason"=>$this->animalNotHousetrainedReason];
        if ($this->animalObedienceTraining !== null) $parameterArray['values'][] = ["animalObedienceTraining"=>$this->animalObedienceTraining];
        if ($this->animalOKWithAdults !== null) $parameterArray['values'][] = ["animalOKWithAdults"=>$this->animalOKWithAdults];
        if ($this->animalOKWithCats !== null) $parameterArray['values'][] = ["animalOKWithCats"=>$this->animalOKWithCats];
        if ($this->animalOKWithDogs !== null) $parameterArray['values'][] = ["animalOKWithDogs"=>$this->animalOKWithDogs];
        if ($this->animalOKWithKids !== null) $parameterArray['values'][] = ["animalOKWithKids"=>$this->animalOKWithKids];
        if ($this->animalOrigin !== null) $parameterArray['values'][] = ["animalOrigin"=>$this->animalOrigin];
        if ($this->animalOthernames !== null) $parameterArray['values'][] = ["animalOthernames"=>$this->animalOthernames];
        if ($this->animalOwnerExperience !== null) $parameterArray['values'][] = ["animalOwnerExperience"=>$this->animalOwnerExperience];
        if ($this->animalOwnerID !== null) $parameterArray['values'][] = ["animalOwnerID"=>$this->animalOwnerID];
        if ($this->animalPatternID !== null) $parameterArray['values'][] = ["animalPatternID"=>$this->animalPatternID];
        if ($this->animalPrimaryBreedID !== null) $parameterArray['values'][] = ["animalPrimaryBreedID"=>$this->animalPrimaryBreedID];
        if ($this->animalReceivedDate !== null) $parameterArray['values'][] = ["animalReceivedDate"=>$this->animalReceivedDate];
        if ($this->animalRescueID !== null) $parameterArray['values'][] = ["animalRescueID"=>$this->animalRescueID];
        if ($this->animalSecondaryBreedID !== null) $parameterArray['values'][] = ["animalSecondaryBreedID"=>$this->animalSecondaryBreedID];
        if ($this->animalSex !== null) $parameterArray['values'][] = ["animalSex"=>$this->animalSex];
        if ($this->animalShared !== null) $parameterArray['values'][] = ["animalShared"=>$this->animalShared];
        if ($this->animalShedding !== null) $parameterArray['values'][] = ["animalShedding"=>$this->animalShedding];
        if ($this->animalSizeCurrent !== null) $parameterArray['values'][] = ["animalSizeCurrent"=>$this->animalSizeCurrent];
        if ($this->animalSizePotential !== null) $parameterArray['values'][] = ["animalSizePotential"=>$this->animalSizePotential];
        if ($this->animalSizeUOM !== null) $parameterArray['values'][] = ["animalSizeUOM"=>$this->animalSizeUOM];
        if ($this->animalSpecialneeds !== null) $parameterArray['values'][] = ["animalSpecialneeds"=>$this->animalSpecialneeds];
        if ($this->animalSpecialneedsDescription !== null) $parameterArray['values'][] = ["animalSpecialneedsDescription"=>$this->animalSpecialneedsDescription];
        if ($this->animalSpeciesID !== null) $parameterArray['values'][] = ["animalSpeciesID"=>$this->animalSpeciesID];
        if ($this->animalSponsorable !== null) $parameterArray['values'][] = ["animalSponsorable"=>$this->animalSponsorable];
        if ($this->animalSponsors !== null) $parameterArray['values'][] = ["animalSponsors"=>$this->animalSponsors];
        if ($this->animalSponsorshipDetails !== null) $parameterArray['values'][] = ["animalSponsorshipDetails"=>$this->animalSponsorshipDetails];
        if ($this->animalSponsorshipMinimum !== null) $parameterArray['values'][] = ["animalSponsorshipMinimum"=>$this->animalSponsorshipMinimum];
        if ($this->animalStatusID !== null) $parameterArray['values'][] = ["animalStatusID"=>$this->animalStatusID];
        if ($this->animalSummary !== null) $parameterArray['values'][] = ["animalSummary"=>$this->animalSummary];
        if ($this->animalTailType !== null) $parameterArray['values'][] = ["animalTailType"=>$this->animalTailType];
        if ($this->animalTransferredToID !== null) $parameterArray['values'][] = ["animalTransferredToID"=>$this->animalTransferredToID];
        if ($this->animalUptodate !== null) $parameterArray['values'][] = ["animalUptodate"=>$this->animalUptodate];
        if ($this->animalVocal !== null) $parameterArray['values'][] = ["animalVocal"=>$this->animalVocal];
        if ($this->animalYardRequired !== null) $parameterArray['values'][] = ["animalYardRequired"=>$this->animalYardRequired];
        if ($this->animalAffectionate !== null) $parameterArray['values'][] = ["animalAffectionate"=>$this->animalAffectionate];
        if ($this->animalApartment !== null) $parameterArray['values'][] = ["animalApartment"=>$this->animalApartment];
        if ($this->animalCratetrained !== null) $parameterArray['values'][] = ["animalCratetrained"=>$this->animalCratetrained];
        if ($this->animalDrools !== null) $parameterArray['values'][] = ["animalDrools"=>$this->animalDrools];
        if ($this->animalEagerToPlease !== null) $parameterArray['values'][] = ["animalEagerToPlease"=>$this->animalEagerToPlease];
        if ($this->animalEscapes !== null) $parameterArray['values'][] = ["animalEscapes"=>$this->animalEscapes];
        if ($this->animalEventempered !== null) $parameterArray['values'][] = ["animalEventempered"=>$this->animalEventempered];
        if ($this->animalFetches !== null) $parameterArray['values'][] = ["animalFetches"=>$this->animalFetches];
        if ($this->animalGentle !== null) $parameterArray['values'][] = ["animalGentle"=>$this->animalGentle];
        if ($this->animalGoodInCar !== null) $parameterArray['values'][] = ["animalGoodInCar"=>$this->animalGoodInCar];
        if ($this->animalGoofy !== null) $parameterArray['values'][] = ["animalGoofy"=>$this->animalGoofy];
        if ($this->animalHasAllergies !== null) $parameterArray['values'][] = ["animalHasAllergies"=>$this->animalHasAllergies];
        if ($this->animalHearingImpaired !== null) $parameterArray['values'][] = ["animalHearingImpaired"=>$this->animalHearingImpaired];
        if ($this->animalHypoallergenic !== null) $parameterArray['values'][] = ["animalHypoallergenic"=>$this->animalHypoallergenic];
        if ($this->animalIndependent !== null) $parameterArray['values'][] = ["animalIndependent"=>$this->animalIndependent];
        if ($this->animalIntelligent !== null) $parameterArray['values'][] = ["animalIntelligent"=>$this->animalIntelligent];
        if ($this->animalLap !== null) $parameterArray['values'][] = ["animalLap"=>$this->animalLap];
        if ($this->animalLeashtrained !== null) $parameterArray['values'][] = ["animalLeashtrained"=>$this->animalLeashtrained];
        if ($this->animalNeedsCompanionAnimal !== null) $parameterArray['values'][] = ["animalNeedsCompanionAnimal"=>$this->animalNeedsCompanionAnimal];
        if ($this->animalNoCold !== null) $parameterArray['values'][] = ["animalNoCold"=>$this->animalNoCold];
        if ($this->animalNoFemaleDogs !== null) $parameterArray['values'][] = ["animalNoFemaleDogs"=>$this->animalNoFemaleDogs];
        if ($this->animalNoHeat !== null) $parameterArray['values'][] = ["animalNoHeat"=>$this->animalNoHeat];
        if ($this->animalNoLargeDogs !== null) $parameterArray['values'][] = ["animalNoLargeDogs"=>$this->animalNoLargeDogs];
        if ($this->animalNoMaleDogs !== null) $parameterArray['values'][] = ["animalNoMaleDogs"=>$this->animalNoMaleDogs];
        if ($this->animalNoSmallDogs !== null) $parameterArray['values'][] = ["animalNoSmallDogs"=>$this->animalNoSmallDogs];
        if ($this->animalObedient !== null) $parameterArray['values'][] = ["animalObedient"=>$this->animalObedient];
        if ($this->animalOKForSeniors !== null) $parameterArray['values'][] = ["animalOKForSeniors"=>$this->animalOKForSeniors];
        if ($this->animalOKWithFarmAnimals !== null) $parameterArray['values'][] = ["animalOKWithFarmAnimals"=>$this->animalOKWithFarmAnimals];
        if ($this->animalOlderKidsOnly !== null) $parameterArray['values'][] = ["animalOlderKidsOnly"=>$this->animalOlderKidsOnly];
        if ($this->animalOngoingMedical !== null) $parameterArray['values'][] = ["animalOngoingMedical"=>$this->animalOngoingMedical];
        if ($this->animalPlayful !== null) $parameterArray['values'][] = ["animalPlayful"=>$this->animalPlayful];
        if ($this->animalPlaysToys !== null) $parameterArray['values'][] = ["animalPlaysToys"=>$this->animalPlaysToys];
        if ($this->animalPredatory !== null) $parameterArray['values'][] = ["animalPredatory"=>$this->animalPredatory];
        if ($this->animalProtective !== null) $parameterArray['values'][] = ["animalProtective"=>$this->animalProtective];
        if ($this->animalSightImpaired !== null) $parameterArray['values'][] = ["animalSightImpaired"=>$this->animalSightImpaired];
        if ($this->animalSkittish !== null) $parameterArray['values'][] = ["animalSkittish"=>$this->animalSkittish];
        if ($this->animalSpecialDiet !== null) $parameterArray['values'][] = ["animalSpecialDiet"=>$this->animalSpecialDiet];
        if ($this->animalSwims !== null) $parameterArray['values'][] = ["animalSwims"=>$this->animalSwims];
        if ($this->animalTimid !== null) $parameterArray['values'][] = ["animalTimid"=>$this->animalTimid];
        if ($this->animalGroups !== null) $parameterArray['values'][] = ["animalGroups"=>$this->animalGroups];
        if ($this->animalExportAccounts !== null) $parameterArray['values'][] = ["animalExportAccounts"=>$this->animalExportAccounts];
    }
}