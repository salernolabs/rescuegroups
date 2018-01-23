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
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Activity level
     *
     * @var string
     */
    public $activityLevel = null;

    /**
     * Adopted Date
     *
     * @var \DateTime
     */
    public $adoptedDate = null;

    /**
     * Adoption fee
     *
     * @var string
     */
    public $adoptionFee = null;

    /**
     * Adoption lead
     *
     * @var integer
     */
    public $adoptionLeadId = null;

    /**
     * Altered
     *
     * @var string
     */
    public $altered = null;

    /**
     * Application
     *
     * @var integer
     */
    public $applicationId = null;

    /**
     * Available Date
     *
     * @var \DateTime
     */
    public $availableDate = null;

    /**
     * Birthdate
     *
     * @var \DateTime
     */
    public $birthdate = null;

    /**
     * Exact Birthdate
     *
     * @var string
     */
    public $birthdateExact = null;

    /**
     * Coat Length
     *
     * @var string
     */
    public $coatLength = null;

    /**
     * Colony
     *
     * @var integer
     */
    public $colonyId = null;

    /**
     * Color (General)
     *
     * @var integer
     */
    public $colorId = null;

    /**
     * Color details
     *
     * @var string
     */
    public $colorDetails = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $conditionId = null;

    /**
     * Courtesy
     *
     * @var string
     */
    public $courtesy = null;

    /**
     * Declawed
     *
     * @var string
     */
    public $declawed = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Distinguishing marks
     *
     * @var string
     */
    public $distinguishingMarks = null;

    /**
     * Allow export
     *
     * @var string
     */
    public $allowExport = null;

    /**
     * Ear type
     *
     * @var string
     */
    public $earType = null;

    /**
     * Energy level
     *
     * @var string
     */
    public $energyLevel = null;

    /**
     * Exercise needs
     *
     * @var string
     */
    public $exerciseNeeds = null;

    /**
     * Eye color
     *
     * @var string
     */
    public $eyeColor = null;

    /**
     * Requires a home with fence
     *
     * @var string
     */
    public $fence = null;

    /**
     * Foster
     *
     * @var integer
     */
    public $fosterId = null;

    /**
     * Found
     *
     * @var string
     */
    public $found = null;

    /**
     * Found date
     *
     * @var \DateTime
     */
    public $foundDate = null;

    /**
     * Found zip/postal code
     *
     * @var string
     */
    public $foundPostalcode = null;

    /**
     * General Age
     *
     * @var string
     */
    public $generalAge = null;

    /**
     * Size potential (general)
     *
     * @var string
     */
    public $generalSizePotential = null;

    /**
     * Grooming needs
     *
     * @var string
     */
    public $groomingNeeds = null;

    /**
     * Highlight
     *
     * @var string
     */
    public $highlightOrder = null;

    /**
     * Housetrained
     *
     * @var string
     */
    public $housetrained = null;

    /**
     * Indoor/Outdoor
     *
     * @var string
     */
    public $indoorOutdoor = null;

    /**
     * Internal ID
     *
     * @var string
     */
    public $internalId = null;

    /**
     * Euthanasia date
     *
     * @var \DateTime
     */
    public $killDate = null;

    /**
     * Euthanasia reason
     *
     * @var string
     */
    public $killReason = null;

    /**
     * Location
     *
     * @var integer
     */
    public $locationId = null;

    /**
     * Location public
     *
     * @var string
     */
    public $locationPublic = null;

    /**
     * Microchip number
     *
     * @var string
     */
    public $microchipNumber = null;

    /**
     * Microchip vendor
     *
     * @var integer
     */
    public $microchipVendor = null;

    /**
     * Mixed breed
     *
     * @var string
     */
    public $mixedBreed = null;

    /**
     * Name
     *
     * @var string
     */
    public $name = null;

    /**
     * Has special needs
     *
     * @var string
     */
    public $specialneeds = null;

    /**
     * Special needs description
     *
     * @var string
     */
    public $specialneedsDescription = null;

    /**
     * Needs a Foster
     *
     * @var string
     */
    public $needsFoster = null;

    /**
     * Reaction to new people
     *
     * @var string
     */
    public $newPeople = null;

    /**
     * Private notes
     *
     * @var string
     */
    public $notes = null;

    /**
     * Reason not housetrained
     *
     * @var string
     */
    public $notHousetrainedReason = null;

    /**
     * Obedience training
     *
     * @var string
     */
    public $obedienceTraining = null;

    /**
     * Good with adults
     *
     * @var string
     */
    public $okWithAdults = null;

    /**
     * OK with cats
     *
     * @var string
     */
    public $okWithCats = null;

    /**
     * OK with dogs
     *
     * @var string
     */
    public $okWithDogs = null;

    /**
     * OK with kids
     *
     * @var string
     */
    public $okWithKids = null;

    /**
     * Origin
     *
     * @var string
     */
    public $origin = null;

    /**
     * Other names
     *
     * @var string
     */
    public $othernames = null;

    /**
     * Owner experience needed
     *
     * @var string
     */
    public $ownerExperience = null;

    /**
     * Owner
     *
     * @var integer
     */
    public $ownerId = null;

    /**
     * Pattern
     *
     * @var integer
     */
    public $patternId = null;

    /**
     * Adoption pending
     *
     * @var string
     */
    public $adoptionPending = null;

    /**
     * Primary breed
     *
     * @var integer
     */
    public $primaryBreedId = null;

    /**
     * Received date
     *
     * @var \DateTime
     */
    public $receivedDate = null;

    /**
     * Rescue ID
     *
     * @var string
     */
    public $rescueId = null;

    /**
     * Secondary Breed
     *
     * @var integer
     */
    public $secondaryBreedId = null;

    /**
     * Sex
     *
     * @var string
     */
    public $sex = null;

    /**
     * Shared
     *
     * @var string
     */
    public $shared = null;

    /**
     * Shedding amount
     *
     * @var string
     */
    public $shedding = null;

    /**
     * Current size
     *
     * @var float
     */
    public $sizeCurrent = null;

    /**
     * Size potential
     *
     * @var float
     */
    public $sizePotential = null;

    /**
     * Size unit of measure
     *
     * @var string
     */
    public $sizeUOM = null;

    /**
     * Species
     *
     * @var integer
     */
    public $speciesId = null;

    /**
     * Allow sponsorship
     *
     * @var string
     */
    public $sponsorable = null;

    /**
     * Sponsors
     *
     * @var string
     */
    public $sponsors = null;

    /**
     * Sponsorship details
     *
     * @var string
     */
    public $sponsorshipDetails = null;

    /**
     * Sponsorship minimum
     *
     * @var float
     */
    public $sponsorshipMinimum = null;

    /**
     * Status
     *
     * @var integer
     */
    public $statusId = null;

    /**
     * Summary
     *
     * @var string
     */
    public $summary = null;

    /**
     * Tail type
     *
     * @var string
     */
    public $tailType = null;

    /**
     * Transferred to
     *
     * @var integer
     */
    public $transferredToId = null;

    /**
     * Up-to-date
     *
     * @var string
     */
    public $uptodate = null;

    /**
     * Likes to vocalize
     *
     * @var string
     */
    public $vocal = null;

    /**
     * Requires a Yard
     *
     * @var string
     */
    public $yardRequired = null;

    /**
     * Affectionate
     *
     * @var string
     */
    public $affectionate = null;

    /**
     * Apartment appropriate
     *
     * @var string
     */
    public $apartment = null;

    /**
     * Crate trained
     *
     * @var string
     */
    public $cratetrained = null;

    /**
     * Drools excessively
     *
     * @var string
     */
    public $drools = null;

    /**
     * Eager to please
     *
     * @var string
     */
    public $eagerToPlease = null;

    /**
     * Tries to escape
     *
     * @var string
     */
    public $escapes = null;

    /**
     * Even-tempered
     *
     * @var string
     */
    public $eventempered = null;

    /**
     * Likes to fetch
     *
     * @var string
     */
    public $fetches = null;

    /**
     * Gentle
     *
     * @var string
     */
    public $gentle = null;

    /**
     * Does well in a car
     *
     * @var string
     */
    public $goodInCar = null;

    /**
     * Goofy
     *
     * @var string
     */
    public $goofy = null;

    /**
     * Has allergies
     *
     * @var string
     */
    public $hasAllergies = null;

    /**
     * Hearing impaired
     *
     * @var string
     */
    public $hearingImpaired = null;

    /**
     * Hypoallergenic
     *
     * @var string
     */
    public $hypoallergenic = null;

    /**
     * Independent / aloof
     *
     * @var string
     */
    public $independent = null;

    /**
     * Intelligent
     *
     * @var string
     */
    public $intelligent = null;

    /**
     * Lap pet
     *
     * @var string
     */
    public $lap = null;

    /**
     * Leash trained
     *
     * @var string
     */
    public $leashtrained = null;

    /**
     * Needs companion animal
     *
     * @var string
     */
    public $needsCompanion = null;

    /**
     * Cold sensitive
     *
     * @var string
     */
    public $noCold = null;

    /**
     * Not good with female dogs
     *
     * @var string
     */
    public $noFemaleDogs = null;

    /**
     * Heat sensitive
     *
     * @var string
     */
    public $noHeat = null;

    /**
     * Not good with large dogs
     *
     * @var string
     */
    public $noLargeDogs = null;

    /**
     * Not good with male dogs
     *
     * @var string
     */
    public $noMaleDogs = null;

    /**
     * Not good with small dogs
     *
     * @var string
     */
    public $noSmallDogs = null;

    /**
     * Obedient
     *
     * @var string
     */
    public $obedient = null;

    /**
     * Good for seniors / elderly
     *
     * @var string
     */
    public $okForSeniors = null;

    /**
     * Good with farm animals
     *
     * @var string
     */
    public $okWithFarms = null;

    /**
     * Older/ considerate kids only
     *
     * @var string
     */
    public $olderKidsOnly = null;

    /**
     * Needs ongoing medical care
     *
     * @var string
     */
    public $ongoingMedical = null;

    /**
     * Playful
     *
     * @var string
     */
    public $playful = null;

    /**
     * Likes toys
     *
     * @var string
     */
    public $playsToys = null;

    /**
     * Predatory
     *
     * @var string
     */
    public $predatory = null;

    /**
     * Protective / territorial
     *
     * @var string
     */
    public $protective = null;

    /**
     * Sight impaired
     *
     * @var string
     */
    public $sightImpaired = null;

    /**
     * Skittish
     *
     * @var string
     */
    public $skittish = null;

    /**
     * Special diet required
     *
     * @var string
     */
    public $specialDiet = null;

    /**
     * Likes to swim
     *
     * @var string
     */
    public $swims = null;

    /**
     * Timid / shy
     *
     * @var string
     */
    public $timid = null;

    /**
     * Groups
     *
     * @var integer
     */
    public $groups = null;

    /**
     * Export accounts
     *
     * @var integer
     */
    public $exportAccounts = null;


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
            'animalAdoptionLeadID' => 'adoptionLeadId',
            'animalAltered' => 'altered',
            'animalApplicationID' => 'applicationId',
            'animalAvailableDate' => 'availableDate',
            'animalBirthdate' => 'birthdate',
            'animalBirthdateExact' => 'birthdateExact',
            'animalCoatLength' => 'coatLength',
            'animalColonyID' => 'colonyId',
            'animalColorID' => 'colorId',
            'animalColorDetails' => 'colorDetails',
            'animalConditionID' => 'conditionId',
            'animalCourtesy' => 'courtesy',
            'animalDeclawed' => 'declawed',
            'animalDescription' => 'description',
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
            'animalInternalID' => 'internalId',
            'animalKillDate' => 'killDate',
            'animalKillReason' => 'killReason',
            'animalLocationID' => 'locationId',
            'animalLocationPublic' => 'locationPublic',
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
            'animalOrigin' => 'origin',
            'animalOthernames' => 'othernames',
            'animalOwnerExperience' => 'ownerExperience',
            'animalOwnerID' => 'ownerId',
            'animalPatternID' => 'patternId',
            'animalAdoptionPending' => 'adoptionPending',
            'animalPrimaryBreedID' => 'primaryBreedId',
            'animalReceivedDate' => 'receivedDate',
            'animalRescueID' => 'rescueId',
            'animalSecondaryBreedID' => 'secondaryBreedId',
            'animalSex' => 'sex',
            'animalShared' => 'shared',
            'animalShedding' => 'shedding',
            'animalSizeCurrent' => 'sizeCurrent',
            'animalSizePotential' => 'sizePotential',
            'animalSizeUOM' => 'sizeUOM',
            'animalSpeciesID' => 'speciesId',
            'animalSponsorable' => 'sponsorable',
            'animalSponsors' => 'sponsors',
            'animalSponsorshipDetails' => 'sponsorshipDetails',
            'animalSponsorshipMinimum' => 'sponsorshipMinimum',
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
            'animalGroups' => 'groups',
            'animalExportAccounts' => 'exportAccounts',
        ],
        'output' => [
            'id' => 'animalID',
            'activityLevel' => 'animalActivityLevel',
            'adoptedDate' => 'animalAdoptedDate',
            'adoptionFee' => 'animalAdoptionFee',
            'adoptionLeadId' => 'animalAdoptionLeadID',
            'altered' => 'animalAltered',
            'applicationId' => 'animalApplicationID',
            'availableDate' => 'animalAvailableDate',
            'birthdate' => 'animalBirthdate',
            'birthdateExact' => 'animalBirthdateExact',
            'coatLength' => 'animalCoatLength',
            'colonyId' => 'animalColonyID',
            'colorId' => 'animalColorID',
            'colorDetails' => 'animalColorDetails',
            'conditionId' => 'animalConditionID',
            'courtesy' => 'animalCourtesy',
            'declawed' => 'animalDeclawed',
            'description' => 'animalDescription',
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
            'internalId' => 'animalInternalID',
            'killDate' => 'animalKillDate',
            'killReason' => 'animalKillReason',
            'locationId' => 'animalLocationID',
            'locationPublic' => 'animalLocationPublic',
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
            'origin' => 'animalOrigin',
            'othernames' => 'animalOthernames',
            'ownerExperience' => 'animalOwnerExperience',
            'ownerId' => 'animalOwnerID',
            'patternId' => 'animalPatternID',
            'adoptionPending' => 'animalAdoptionPending',
            'primaryBreedId' => 'animalPrimaryBreedID',
            'receivedDate' => 'animalReceivedDate',
            'rescueId' => 'animalRescueID',
            'secondaryBreedId' => 'animalSecondaryBreedID',
            'sex' => 'animalSex',
            'shared' => 'animalShared',
            'shedding' => 'animalShedding',
            'sizeCurrent' => 'animalSizeCurrent',
            'sizePotential' => 'animalSizePotential',
            'sizeUOM' => 'animalSizeUOM',
            'speciesId' => 'animalSpeciesID',
            'sponsorable' => 'animalSponsorable',
            'sponsors' => 'animalSponsors',
            'sponsorshipDetails' => 'animalSponsorshipDetails',
            'sponsorshipMinimum' => 'animalSponsorshipMinimum',
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
            'groups' => 'animalGroups',
            'exportAccounts' => 'animalExportAccounts',
        ]
    ];

    /**
     * Animal Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}