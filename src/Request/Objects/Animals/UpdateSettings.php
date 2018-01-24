<?php
/**
 * Animals UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Babies (Kittens, Puppies) enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListBabies = null;

    /**
     * Babies (Kittens, Puppies) Youngest Age
     *
     * @var string
     */
    private $setAnimalsSpecialListBabiesYoungest = null;

    /**
     * Babies (Kittens, Puppies) Oldest Age
     *
     * @var string
     */
    private $setAnimalsSpecialListBabiesOldest = null;

    /**
     * Teens enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListTeens = null;

    /**
     * Teens Youngest Age
     *
     * @var string
     */
    private $setAnimalsSpecialListTeensYoungest = null;

    /**
     * Teens Oldest Age
     *
     * @var string
     */
    private $setAnimalsSpecialListTeensOldest = null;

    /**
     * Adults enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListAdults = null;

    /**
     * Adults Youngest Age
     *
     * @var string
     */
    private $setAnimalsSpecialListAdultsYoungest = null;

    /**
     * Adults Oldest Age
     *
     * @var string
     */
    private $setAnimalsSpecialListAdultsOldest = null;

    /**
     * Seniors enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListSeniors = null;

    /**
     * Seniors Youngest Age
     *
     * @var string
     */
    private $setAnimalsSpecialListSeniorsYoungest = null;

    /**
     * Long Time/Must Adopt enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListLongtime = null;

    /**
     * Long Time/Must Adopt Shortest length of time
     *
     * @var string
     */
    private $setAnimalsSpecialListLongtimeYoungest = null;

    /**
     * Long Time/Must Adopt Longest length of time
     *
     * @var string
     */
    private $setAnimalsSpecialListLongtimeOldest = null;

    /**
     * Recent Arrivals enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListRecent = null;

    /**
     * Recent Arrivals Shortest length of time
     *
     * @var string
     */
    private $setAnimalsSpecialListRecentDays = null;

    /**
     * Special Needs enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListSpecialNeeds = null;

    /**
     * Urgent enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListUrgent = null;

    /**
     * Needs a Caretaker/Foster enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListFoster = null;

    /**
     * Courtesy Listings enabled
     *
     * @var string
     */
    private $enableAnimalsSpecialListCourtesy = null;

    /**
     * Automatically set animal's Rescue ID
     *
     * @var string
     */
    private $enableAnimalAutoRescueID = null;

    /**
     * Format for Rescue IDs
     *
     * @var string
     */
    private $setAnimalAutoRescueIDFormat = null;

    /**
     * Do not automatically assign Rescue ID for courtesy listings
     *
     * @var string
     */
    private $disableAnimalAutoRescueIDCourtesyListings = null;

    /**
     * Enable the Portal website
     *
     * @var string
     */
    private $enablePortalWebsite = null;

    /**
     * Show if the animal is microchipped
     *
     * @var string
     */
    private $showAnimalMicrochip = null;

    /**
     * Show if the animal is altered
     *
     * @var string
     */
    private $showAnimalAltered = null;

    /**
     * Show if the animal will be altered before adoption
     *
     * @var string
     */
    private $showAnimalWillBeAltered = null;

    /**
     * Show the animal's Rescue ID
     *
     * @var string
     */
    private $showAnimalRescueID = null;

    /**
     * Show the animal's adoption fee
     *
     * @var string
     */
    private $showAnimalAdoptionFee = null;

    /**
     * Show the animal's euthanasia information
     *
     * @var string
     */
    private $showAnimalEuthanasiaInfo = null;

    /**
     * Disable the animal header/footer to courtesy animals
     *
     * @var string
     */
    private $disableAnimalCourtesyHeaderFooter = null;

    /**
     * Show journal entries on the kennel card
     *
     * @var string
     */
    private $showAnimalKennelcardJournalEntries = null;

    /**
     * Show cost on the kennel card
     *
     * @var string
     */
    private $showAnimalKennelcardJournalCost = null;

    /**
     * Prevent adopted animals from being uploaded to Petfinder
     *
     * @var string
     */
    private $disableAnimalExportAdopted = null;

    /**
     * Export adopted pets to Adopt-a-Pet.com
     *
     * @var string
     */
    private $enableExportAdoptedToAdoptapet = null;

    /**
     * Prevent courtesy animals from being uploaded to other sites
     *
     * @var string
     */
    private $disableAnimalExportCourtesy = null;

    /**
     * Disable the link to the animal's web page
     *
     * @var string
     */
    private $disableAnimalExportAnimalWebPageLink = null;

    /**
     * Disable the link to your organization's website
     *
     * @var string
     */
    private $disableAnimalExportWebsiteLink = null;

    /**
     * Disable the link to your adoption form
     *
     * @var string
     */
    private $disableAnimalExportAdoptionFormLink = null;

    /**
     * Include the Animal Description Header in the animal description
     *
     * @var string
     */
    private $enableAnimalExportDescriptionHeader = null;

    /**
     * Include the Animal Description Footer in the animal description
     *
     * @var string
     */
    private $enableAnimalExportDescriptionFooter = null;

    /**
     * Use the RescueGroups.org Animal ID as a Unique ID
     *
     * @var string
     */
    private $enableAnimalExportUniqueAnimalID = null;

    /**
     * Show the foster/caretaker's first name
     *
     * @var string
     */
    private $enableAnimalExportContactFieldFirstname = null;

    /**
     * Show the foster/caretaker's last name
     *
     * @var string
     */
    private $enableAnimalExportContactFieldLastname = null;

    /**
     * Show the foster/caretaker's email address
     *
     * @var string
     */
    private $enableAnimalExportContactFieldEmail = null;

    /**
     * Show the foster/caretaker's home phone number
     *
     * @var string
     */
    private $enableAnimalExportContactFieldPhoneHome = null;

    /**
     * Show the foster/caretaker's cell phone number
     *
     * @var string
     */
    private $enableAnimalExportContactFieldPhoneCell = null;

    /**
     * Account to use for YouTube video upload
     *
     * @var string
     */
    private $setAnimalExportYouTubeAccount = null;

    /**
     * YouTube authorization code
     *
     * @var string
     */
    private $setAnimalExportYouTubeAuthorizationCode = null;

    /**
     * By default, export to services that list animals for adoption
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory1 = null;

    /**
     * By default, export to services that list animals for adoption (from non-rescue/shelters)
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory4 = null;

    /**
     * By default, export to services that list animals for sale by breeder
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory3 = null;

    /**
     * By default, export to services that list animals for sale by owner
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory2 = null;

    /**
     * By default, export to services that provide animal related classifieds
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory5 = null;

    /**
     * By default, export to services that provide animal related community discussion/forums
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory6 = null;

    /**
     * By default, export to services that provide animal related educational information
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory8 = null;

    /**
     * By default, export to services that provide animal related news
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory7 = null;

    /**
     * By default, export to services that provide event calendars
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory13 = null;

    /**
     * By default, export to services that sell/promote animal related products (food, toys, treats, etc)
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory9 = null;

    /**
     * By default, export to services that sell/promote animal related services (training, grooming)
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory11 = null;

    /**
     * By default, export to services that sell/promote non-animal related products
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory10 = null;

    /**
     * By default, export to services that sell/promote non-animal related services
     *
     * @var string
     */
    private $setAnimalExportDefaultCategory12 = null;

    /**
     * Disable videos in Animal descriptions
     *
     * @var string
     */
    private $disableAnimalDescriptionVideo = null;

    /**
     * Use a link instead of embedding the video in Animal descriptions
     *
     * @var string
     */
    private $enableAnimalDescriptionVideoLink = null;

    /**
     * Enable FreePetChipRegistry registrations
     *
     * @var string
     */
    private $enableFreePetChipRegistry = null;

    /**
     * FreePetChipRegistry user name
     *
     * @var string
     */
    private $setFreePetChipRegistryUserName = null;

    /**
     * Enable PetLink registrations
     *
     * @var string
     */
    private $enablePetLinkRegistry = null;

    /**
     * PetLink user name
     *
     * @var string
     */
    private $setPetLinkUserName = null;

    /**
     * PetLink password
     *
     * @var string
     */
    private $setPetLinkPassword = null;

    /**
     * Disable the email alert to the volunteer concerning microchip registration (success or failure)
     *
     * @var string
     */
    private $disableMicrochipUserAlert = null;

    /**
     * Email address(es) to alert concerning microchip registration (success or failure)
     *
     * @var string
     */
    private $setMicrochipAlertEmails = null;


    /**
     * Set Babies (Kittens, Puppies) enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListBabies($value)
    {
        $this->enableAnimalsSpecialListBabies = $value;

        return $this;
    }

    /**
     * Set Babies (Kittens, Puppies) Youngest Age
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListBabiesYoungest($value)
    {
        $this->setAnimalsSpecialListBabiesYoungest = $value;

        return $this;
    }

    /**
     * Set Babies (Kittens, Puppies) Oldest Age
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListBabiesOldest($value)
    {
        $this->setAnimalsSpecialListBabiesOldest = $value;

        return $this;
    }

    /**
     * Set Teens enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListTeens($value)
    {
        $this->enableAnimalsSpecialListTeens = $value;

        return $this;
    }

    /**
     * Set Teens Youngest Age
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListTeensYoungest($value)
    {
        $this->setAnimalsSpecialListTeensYoungest = $value;

        return $this;
    }

    /**
     * Set Teens Oldest Age
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListTeensOldest($value)
    {
        $this->setAnimalsSpecialListTeensOldest = $value;

        return $this;
    }

    /**
     * Set Adults enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListAdults($value)
    {
        $this->enableAnimalsSpecialListAdults = $value;

        return $this;
    }

    /**
     * Set Adults Youngest Age
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListAdultsYoungest($value)
    {
        $this->setAnimalsSpecialListAdultsYoungest = $value;

        return $this;
    }

    /**
     * Set Adults Oldest Age
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListAdultsOldest($value)
    {
        $this->setAnimalsSpecialListAdultsOldest = $value;

        return $this;
    }

    /**
     * Set Seniors enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListSeniors($value)
    {
        $this->enableAnimalsSpecialListSeniors = $value;

        return $this;
    }

    /**
     * Set Seniors Youngest Age
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListSeniorsYoungest($value)
    {
        $this->setAnimalsSpecialListSeniorsYoungest = $value;

        return $this;
    }

    /**
     * Set Long Time/Must Adopt enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListLongtime($value)
    {
        $this->enableAnimalsSpecialListLongtime = $value;

        return $this;
    }

    /**
     * Set Long Time/Must Adopt Shortest length of time
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListLongtimeYoungest($value)
    {
        $this->setAnimalsSpecialListLongtimeYoungest = $value;

        return $this;
    }

    /**
     * Set Long Time/Must Adopt Longest length of time
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListLongtimeOldest($value)
    {
        $this->setAnimalsSpecialListLongtimeOldest = $value;

        return $this;
    }

    /**
     * Set Recent Arrivals enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListRecent($value)
    {
        $this->enableAnimalsSpecialListRecent = $value;

        return $this;
    }

    /**
     * Set Recent Arrivals Shortest length of time
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalsSpecialListRecentDays($value)
    {
        $this->setAnimalsSpecialListRecentDays = $value;

        return $this;
    }

    /**
     * Set Special Needs enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListSpecialNeeds($value)
    {
        $this->enableAnimalsSpecialListSpecialNeeds = $value;

        return $this;
    }

    /**
     * Set Urgent enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListUrgent($value)
    {
        $this->enableAnimalsSpecialListUrgent = $value;

        return $this;
    }

    /**
     * Set Needs a Caretaker/Foster enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListFoster($value)
    {
        $this->enableAnimalsSpecialListFoster = $value;

        return $this;
    }

    /**
     * Set Courtesy Listings enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalsSpecialListCourtesy($value)
    {
        $this->enableAnimalsSpecialListCourtesy = $value;

        return $this;
    }

    /**
     * Set Automatically set animal's Rescue ID
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalAutoRescueID($value)
    {
        $this->enableAnimalAutoRescueID = $value;

        return $this;
    }

    /**
     * Set Format for Rescue IDs
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalAutoRescueIDFormat($value)
    {
        $this->setAnimalAutoRescueIDFormat = $value;

        return $this;
    }

    /**
     * Set Do not automatically assign Rescue ID for courtesy listings
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalAutoRescueIDCourtesyListings($value)
    {
        $this->disableAnimalAutoRescueIDCourtesyListings = $value;

        return $this;
    }

    /**
     * Set Enable the Portal website
     *
     * @param string $value
     * @return $this
     */
    public function setEnablePortalWebsite($value)
    {
        $this->enablePortalWebsite = $value;

        return $this;
    }

    /**
     * Set Show if the animal is microchipped
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalMicrochip($value)
    {
        $this->showAnimalMicrochip = $value;

        return $this;
    }

    /**
     * Set Show if the animal is altered
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalAltered($value)
    {
        $this->showAnimalAltered = $value;

        return $this;
    }

    /**
     * Set Show if the animal will be altered before adoption
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalWillBeAltered($value)
    {
        $this->showAnimalWillBeAltered = $value;

        return $this;
    }

    /**
     * Set Show the animal's Rescue ID
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalRescueID($value)
    {
        $this->showAnimalRescueID = $value;

        return $this;
    }

    /**
     * Set Show the animal's adoption fee
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalAdoptionFee($value)
    {
        $this->showAnimalAdoptionFee = $value;

        return $this;
    }

    /**
     * Set Show the animal's euthanasia information
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalEuthanasiaInfo($value)
    {
        $this->showAnimalEuthanasiaInfo = $value;

        return $this;
    }

    /**
     * Set Disable the animal header/footer to courtesy animals
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalCourtesyHeaderFooter($value)
    {
        $this->disableAnimalCourtesyHeaderFooter = $value;

        return $this;
    }

    /**
     * Set Show journal entries on the kennel card
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalKennelcardJournalEntries($value)
    {
        $this->showAnimalKennelcardJournalEntries = $value;

        return $this;
    }

    /**
     * Set Show cost on the kennel card
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalKennelcardJournalCost($value)
    {
        $this->showAnimalKennelcardJournalCost = $value;

        return $this;
    }

    /**
     * Set Prevent adopted animals from being uploaded to Petfinder
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportAdopted($value)
    {
        $this->disableAnimalExportAdopted = $value;

        return $this;
    }

    /**
     * Set Export adopted pets to Adopt-a-Pet.com
     *
     * @param string $value
     * @return $this
     */
    public function setEnableExportAdoptedToAdoptapet($value)
    {
        $this->enableExportAdoptedToAdoptapet = $value;

        return $this;
    }

    /**
     * Set Prevent courtesy animals from being uploaded to other sites
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportCourtesy($value)
    {
        $this->disableAnimalExportCourtesy = $value;

        return $this;
    }

    /**
     * Set Disable the link to the animal's web page
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportAnimalWebPageLink($value)
    {
        $this->disableAnimalExportAnimalWebPageLink = $value;

        return $this;
    }

    /**
     * Set Disable the link to your organization's website
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportWebsiteLink($value)
    {
        $this->disableAnimalExportWebsiteLink = $value;

        return $this;
    }

    /**
     * Set Disable the link to your adoption form
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportAdoptionFormLink($value)
    {
        $this->disableAnimalExportAdoptionFormLink = $value;

        return $this;
    }

    /**
     * Set Include the Animal Description Header in the animal description
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportDescriptionHeader($value)
    {
        $this->enableAnimalExportDescriptionHeader = $value;

        return $this;
    }

    /**
     * Set Include the Animal Description Footer in the animal description
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportDescriptionFooter($value)
    {
        $this->enableAnimalExportDescriptionFooter = $value;

        return $this;
    }

    /**
     * Set Use the RescueGroups.org Animal ID as a Unique ID
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportUniqueAnimalID($value)
    {
        $this->enableAnimalExportUniqueAnimalID = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's first name
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldFirstname($value)
    {
        $this->enableAnimalExportContactFieldFirstname = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's last name
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldLastname($value)
    {
        $this->enableAnimalExportContactFieldLastname = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's email address
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldEmail($value)
    {
        $this->enableAnimalExportContactFieldEmail = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's home phone number
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldPhoneHome($value)
    {
        $this->enableAnimalExportContactFieldPhoneHome = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's cell phone number
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldPhoneCell($value)
    {
        $this->enableAnimalExportContactFieldPhoneCell = $value;

        return $this;
    }

    /**
     * Set Account to use for YouTube video upload
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportYouTubeAccount($value)
    {
        $this->setAnimalExportYouTubeAccount = $value;

        return $this;
    }

    /**
     * Set YouTube authorization code
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportYouTubeAuthorizationCode($value)
    {
        $this->setAnimalExportYouTubeAuthorizationCode = $value;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for adoption
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory1($value)
    {
        $this->setAnimalExportDefaultCategory1 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for adoption (from non-rescue/shelters)
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory4($value)
    {
        $this->setAnimalExportDefaultCategory4 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for sale by breeder
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory3($value)
    {
        $this->setAnimalExportDefaultCategory3 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for sale by owner
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory2($value)
    {
        $this->setAnimalExportDefaultCategory2 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related classifieds
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory5($value)
    {
        $this->setAnimalExportDefaultCategory5 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related community discussion/forums
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory6($value)
    {
        $this->setAnimalExportDefaultCategory6 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related educational information
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory8($value)
    {
        $this->setAnimalExportDefaultCategory8 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related news
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory7($value)
    {
        $this->setAnimalExportDefaultCategory7 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that provide event calendars
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory13($value)
    {
        $this->setAnimalExportDefaultCategory13 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote animal related products (food, toys, treats, etc)
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory9($value)
    {
        $this->setAnimalExportDefaultCategory9 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote animal related services (training, grooming)
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory11($value)
    {
        $this->setAnimalExportDefaultCategory11 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote non-animal related products
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory10($value)
    {
        $this->setAnimalExportDefaultCategory10 = $value;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote non-animal related services
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportDefaultCategory12($value)
    {
        $this->setAnimalExportDefaultCategory12 = $value;

        return $this;
    }

    /**
     * Set Disable videos in Animal descriptions
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalDescriptionVideo($value)
    {
        $this->disableAnimalDescriptionVideo = $value;

        return $this;
    }

    /**
     * Set Use a link instead of embedding the video in Animal descriptions
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalDescriptionVideoLink($value)
    {
        $this->enableAnimalDescriptionVideoLink = $value;

        return $this;
    }

    /**
     * Set Enable FreePetChipRegistry registrations
     *
     * @param string $value
     * @return $this
     */
    public function setEnableFreePetChipRegistry($value)
    {
        $this->enableFreePetChipRegistry = $value;

        return $this;
    }

    /**
     * Set FreePetChipRegistry user name
     *
     * @param string $value
     * @return $this
     */
    public function setFreePetChipRegistryUserName($value)
    {
        $this->setFreePetChipRegistryUserName = $value;

        return $this;
    }

    /**
     * Set Enable PetLink registrations
     *
     * @param string $value
     * @return $this
     */
    public function setEnablePetLinkRegistry($value)
    {
        $this->enablePetLinkRegistry = $value;

        return $this;
    }

    /**
     * Set PetLink user name
     *
     * @param string $value
     * @return $this
     */
    public function setPetLinkUserName($value)
    {
        $this->setPetLinkUserName = $value;

        return $this;
    }

    /**
     * Set PetLink password
     *
     * @param string $value
     * @return $this
     */
    public function setPetLinkPassword($value)
    {
        $this->setPetLinkPassword = $value;

        return $this;
    }

    /**
     * Set Disable the email alert to the volunteer concerning microchip registration (success or failure)
     *
     * @param string $value
     * @return $this
     */
    public function setDisableMicrochipUserAlert($value)
    {
        $this->disableMicrochipUserAlert = $value;

        return $this;
    }

    /**
     * Set Email address(es) to alert concerning microchip registration (success or failure)
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipAlertEmails($value)
    {
        $this->setMicrochipAlertEmails = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        $value = [];
        if ($this->enableAnimalsSpecialListBabies !== null) $value["enableAnimalsSpecialListBabies"] = $this->enableAnimalsSpecialListBabies;
        if ($this->setAnimalsSpecialListBabiesYoungest !== null) $value["setAnimalsSpecialListBabiesYoungest"] = $this->setAnimalsSpecialListBabiesYoungest;
        if ($this->setAnimalsSpecialListBabiesOldest !== null) $value["setAnimalsSpecialListBabiesOldest"] = $this->setAnimalsSpecialListBabiesOldest;
        if ($this->enableAnimalsSpecialListTeens !== null) $value["enableAnimalsSpecialListTeens"] = $this->enableAnimalsSpecialListTeens;
        if ($this->setAnimalsSpecialListTeensYoungest !== null) $value["setAnimalsSpecialListTeensYoungest"] = $this->setAnimalsSpecialListTeensYoungest;
        if ($this->setAnimalsSpecialListTeensOldest !== null) $value["setAnimalsSpecialListTeensOldest"] = $this->setAnimalsSpecialListTeensOldest;
        if ($this->enableAnimalsSpecialListAdults !== null) $value["enableAnimalsSpecialListAdults"] = $this->enableAnimalsSpecialListAdults;
        if ($this->setAnimalsSpecialListAdultsYoungest !== null) $value["setAnimalsSpecialListAdultsYoungest"] = $this->setAnimalsSpecialListAdultsYoungest;
        if ($this->setAnimalsSpecialListAdultsOldest !== null) $value["setAnimalsSpecialListAdultsOldest"] = $this->setAnimalsSpecialListAdultsOldest;
        if ($this->enableAnimalsSpecialListSeniors !== null) $value["enableAnimalsSpecialListSeniors"] = $this->enableAnimalsSpecialListSeniors;
        if ($this->setAnimalsSpecialListSeniorsYoungest !== null) $value["setAnimalsSpecialListSeniorsYoungest"] = $this->setAnimalsSpecialListSeniorsYoungest;
        if ($this->enableAnimalsSpecialListLongtime !== null) $value["enableAnimalsSpecialListLongtime"] = $this->enableAnimalsSpecialListLongtime;
        if ($this->setAnimalsSpecialListLongtimeYoungest !== null) $value["setAnimalsSpecialListLongtimeYoungest"] = $this->setAnimalsSpecialListLongtimeYoungest;
        if ($this->setAnimalsSpecialListLongtimeOldest !== null) $value["setAnimalsSpecialListLongtimeOldest"] = $this->setAnimalsSpecialListLongtimeOldest;
        if ($this->enableAnimalsSpecialListRecent !== null) $value["enableAnimalsSpecialListRecent"] = $this->enableAnimalsSpecialListRecent;
        if ($this->setAnimalsSpecialListRecentDays !== null) $value["setAnimalsSpecialListRecentDays"] = $this->setAnimalsSpecialListRecentDays;
        if ($this->enableAnimalsSpecialListSpecialNeeds !== null) $value["enableAnimalsSpecialListSpecialNeeds"] = $this->enableAnimalsSpecialListSpecialNeeds;
        if ($this->enableAnimalsSpecialListUrgent !== null) $value["enableAnimalsSpecialListUrgent"] = $this->enableAnimalsSpecialListUrgent;
        if ($this->enableAnimalsSpecialListFoster !== null) $value["enableAnimalsSpecialListFoster"] = $this->enableAnimalsSpecialListFoster;
        if ($this->enableAnimalsSpecialListCourtesy !== null) $value["enableAnimalsSpecialListCourtesy"] = $this->enableAnimalsSpecialListCourtesy;
        if ($this->enableAnimalAutoRescueID !== null) $value["enableAnimalAutoRescueID"] = $this->enableAnimalAutoRescueID;
        if ($this->setAnimalAutoRescueIDFormat !== null) $value["setAnimalAutoRescueIDFormat"] = $this->setAnimalAutoRescueIDFormat;
        if ($this->disableAnimalAutoRescueIDCourtesyListings !== null) $value["disableAnimalAutoRescueIDCourtesyListings"] = $this->disableAnimalAutoRescueIDCourtesyListings;
        if ($this->enablePortalWebsite !== null) $value["enablePortalWebsite"] = $this->enablePortalWebsite;
        if ($this->showAnimalMicrochip !== null) $value["showAnimalMicrochip"] = $this->showAnimalMicrochip;
        if ($this->showAnimalAltered !== null) $value["showAnimalAltered"] = $this->showAnimalAltered;
        if ($this->showAnimalWillBeAltered !== null) $value["showAnimalWillBeAltered"] = $this->showAnimalWillBeAltered;
        if ($this->showAnimalRescueID !== null) $value["showAnimalRescueID"] = $this->showAnimalRescueID;
        if ($this->showAnimalAdoptionFee !== null) $value["showAnimalAdoptionFee"] = $this->showAnimalAdoptionFee;
        if ($this->showAnimalEuthanasiaInfo !== null) $value["showAnimalEuthanasiaInfo"] = $this->showAnimalEuthanasiaInfo;
        if ($this->disableAnimalCourtesyHeaderFooter !== null) $value["disableAnimalCourtesyHeaderFooter"] = $this->disableAnimalCourtesyHeaderFooter;
        if ($this->showAnimalKennelcardJournalEntries !== null) $value["showAnimalKennelcardJournalEntries"] = $this->showAnimalKennelcardJournalEntries;
        if ($this->showAnimalKennelcardJournalCost !== null) $value["showAnimalKennelcardJournalCost"] = $this->showAnimalKennelcardJournalCost;
        if ($this->disableAnimalExportAdopted !== null) $value["disableAnimalExportAdopted"] = $this->disableAnimalExportAdopted;
        if ($this->enableExportAdoptedToAdoptapet !== null) $value["enableExportAdoptedToAdoptapet"] = $this->enableExportAdoptedToAdoptapet;
        if ($this->disableAnimalExportCourtesy !== null) $value["disableAnimalExportCourtesy"] = $this->disableAnimalExportCourtesy;
        if ($this->disableAnimalExportAnimalWebPageLink !== null) $value["disableAnimalExportAnimalWebPageLink"] = $this->disableAnimalExportAnimalWebPageLink;
        if ($this->disableAnimalExportWebsiteLink !== null) $value["disableAnimalExportWebsiteLink"] = $this->disableAnimalExportWebsiteLink;
        if ($this->disableAnimalExportAdoptionFormLink !== null) $value["disableAnimalExportAdoptionFormLink"] = $this->disableAnimalExportAdoptionFormLink;
        if ($this->enableAnimalExportDescriptionHeader !== null) $value["enableAnimalExportDescriptionHeader"] = $this->enableAnimalExportDescriptionHeader;
        if ($this->enableAnimalExportDescriptionFooter !== null) $value["enableAnimalExportDescriptionFooter"] = $this->enableAnimalExportDescriptionFooter;
        if ($this->enableAnimalExportUniqueAnimalID !== null) $value["enableAnimalExportUniqueAnimalID"] = $this->enableAnimalExportUniqueAnimalID;
        if ($this->enableAnimalExportContactFieldFirstname !== null) $value["enableAnimalExportContactFieldFirstname"] = $this->enableAnimalExportContactFieldFirstname;
        if ($this->enableAnimalExportContactFieldLastname !== null) $value["enableAnimalExportContactFieldLastname"] = $this->enableAnimalExportContactFieldLastname;
        if ($this->enableAnimalExportContactFieldEmail !== null) $value["enableAnimalExportContactFieldEmail"] = $this->enableAnimalExportContactFieldEmail;
        if ($this->enableAnimalExportContactFieldPhoneHome !== null) $value["enableAnimalExportContactFieldPhoneHome"] = $this->enableAnimalExportContactFieldPhoneHome;
        if ($this->enableAnimalExportContactFieldPhoneCell !== null) $value["enableAnimalExportContactFieldPhoneCell"] = $this->enableAnimalExportContactFieldPhoneCell;
        if ($this->setAnimalExportYouTubeAccount !== null) $value["setAnimalExportYouTubeAccount"] = $this->setAnimalExportYouTubeAccount;
        if ($this->setAnimalExportYouTubeAuthorizationCode !== null) $value["setAnimalExportYouTubeAuthorizationCode"] = $this->setAnimalExportYouTubeAuthorizationCode;
        if ($this->setAnimalExportDefaultCategory1 !== null) $value["setAnimalExportDefaultCategory1"] = $this->setAnimalExportDefaultCategory1;
        if ($this->setAnimalExportDefaultCategory4 !== null) $value["setAnimalExportDefaultCategory4"] = $this->setAnimalExportDefaultCategory4;
        if ($this->setAnimalExportDefaultCategory3 !== null) $value["setAnimalExportDefaultCategory3"] = $this->setAnimalExportDefaultCategory3;
        if ($this->setAnimalExportDefaultCategory2 !== null) $value["setAnimalExportDefaultCategory2"] = $this->setAnimalExportDefaultCategory2;
        if ($this->setAnimalExportDefaultCategory5 !== null) $value["setAnimalExportDefaultCategory5"] = $this->setAnimalExportDefaultCategory5;
        if ($this->setAnimalExportDefaultCategory6 !== null) $value["setAnimalExportDefaultCategory6"] = $this->setAnimalExportDefaultCategory6;
        if ($this->setAnimalExportDefaultCategory8 !== null) $value["setAnimalExportDefaultCategory8"] = $this->setAnimalExportDefaultCategory8;
        if ($this->setAnimalExportDefaultCategory7 !== null) $value["setAnimalExportDefaultCategory7"] = $this->setAnimalExportDefaultCategory7;
        if ($this->setAnimalExportDefaultCategory13 !== null) $value["setAnimalExportDefaultCategory13"] = $this->setAnimalExportDefaultCategory13;
        if ($this->setAnimalExportDefaultCategory9 !== null) $value["setAnimalExportDefaultCategory9"] = $this->setAnimalExportDefaultCategory9;
        if ($this->setAnimalExportDefaultCategory11 !== null) $value["setAnimalExportDefaultCategory11"] = $this->setAnimalExportDefaultCategory11;
        if ($this->setAnimalExportDefaultCategory10 !== null) $value["setAnimalExportDefaultCategory10"] = $this->setAnimalExportDefaultCategory10;
        if ($this->setAnimalExportDefaultCategory12 !== null) $value["setAnimalExportDefaultCategory12"] = $this->setAnimalExportDefaultCategory12;
        if ($this->disableAnimalDescriptionVideo !== null) $value["disableAnimalDescriptionVideo"] = $this->disableAnimalDescriptionVideo;
        if ($this->enableAnimalDescriptionVideoLink !== null) $value["enableAnimalDescriptionVideoLink"] = $this->enableAnimalDescriptionVideoLink;
        if ($this->enableFreePetChipRegistry !== null) $value["enableFreePetChipRegistry"] = $this->enableFreePetChipRegistry;
        if ($this->setFreePetChipRegistryUserName !== null) $value["setFreePetChipRegistryUserName"] = $this->setFreePetChipRegistryUserName;
        if ($this->enablePetLinkRegistry !== null) $value["enablePetLinkRegistry"] = $this->enablePetLinkRegistry;
        if ($this->setPetLinkUserName !== null) $value["setPetLinkUserName"] = $this->setPetLinkUserName;
        if ($this->setPetLinkPassword !== null) $value["setPetLinkPassword"] = $this->setPetLinkPassword;
        if ($this->disableMicrochipUserAlert !== null) $value["disableMicrochipUserAlert"] = $this->disableMicrochipUserAlert;
        if ($this->setMicrochipAlertEmails !== null) $value["setMicrochipAlertEmails"] = $this->setMicrochipAlertEmails;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}