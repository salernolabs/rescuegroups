<?php
/**
 * Animals UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Babies (Kittens, Puppies) enabled
     * @var string
     */
    private $enableAnimalsSpecialListBabies = null;

    /**
     * Babies (Kittens, Puppies) Youngest Age
     * @var string
     */
    private $setAnimalsSpecialListBabiesYoungest = null;

    /**
     * Babies (Kittens, Puppies) Oldest Age
     * @var string
     */
    private $setAnimalsSpecialListBabiesOldest = null;

    /**
     * Teens enabled
     * @var string
     */
    private $enableAnimalsSpecialListTeens = null;

    /**
     * Teens Youngest Age
     * @var string
     */
    private $setAnimalsSpecialListTeensYoungest = null;

    /**
     * Teens Oldest Age
     * @var string
     */
    private $setAnimalsSpecialListTeensOldest = null;

    /**
     * Adults enabled
     * @var string
     */
    private $enableAnimalsSpecialListAdults = null;

    /**
     * Adults Youngest Age
     * @var string
     */
    private $setAnimalsSpecialListAdultsYoungest = null;

    /**
     * Adults Oldest Age
     * @var string
     */
    private $setAnimalsSpecialListAdultsOldest = null;

    /**
     * Seniors enabled
     * @var string
     */
    private $enableAnimalsSpecialListSeniors = null;

    /**
     * Seniors Youngest Age
     * @var string
     */
    private $setAnimalsSpecialListSeniorsYoungest = null;

    /**
     * Long Time/Must Adopt enabled
     * @var string
     */
    private $enableAnimalsSpecialListLongtime = null;

    /**
     * Long Time/Must Adopt Shortest length of time
     * @var string
     */
    private $setAnimalsSpecialListLongtimeYoungest = null;

    /**
     * Long Time/Must Adopt Longest length of time
     * @var string
     */
    private $setAnimalsSpecialListLongtimeOldest = null;

    /**
     * Recent Arrivals enabled
     * @var string
     */
    private $enableAnimalsSpecialListRecent = null;

    /**
     * Recent Arrivals Shortest length of time
     * @var string
     */
    private $setAnimalsSpecialListRecentDays = null;

    /**
     * Special Needs enabled
     * @var string
     */
    private $enableAnimalsSpecialListSpecialNeeds = null;

    /**
     * Urgent enabled
     * @var string
     */
    private $enableAnimalsSpecialListUrgent = null;

    /**
     * Needs a Caretaker/Foster enabled
     * @var string
     */
    private $enableAnimalsSpecialListFoster = null;

    /**
     * Courtesy Listings enabled
     * @var string
     */
    private $enableAnimalsSpecialListCourtesy = null;

    /**
     * Automatically set animal's Rescue ID
     * @var string
     */
    private $enableAnimalAutoRescueID = null;

    /**
     * Format for Rescue IDs
     * @var string
     */
    private $setAnimalAutoRescueIDFormat = null;

    /**
     * Do not automatically assign Rescue ID for courtesy listings
     * @var string
     */
    private $disableAnimalAutoRescueIDCourtesyListings = null;

    /**
     * Enable the Portal website
     * @var string
     */
    private $enablePortalWebsite = null;

    /**
     * Show if the animal is microchipped
     * @var string
     */
    private $showAnimalMicrochip = null;

    /**
     * Show if the animal is altered
     * @var string
     */
    private $showAnimalAltered = null;

    /**
     * Show if the animal will be altered before adoption
     * @var string
     */
    private $showAnimalWillBeAltered = null;

    /**
     * Show the animal's Rescue ID
     * @var string
     */
    private $showAnimalRescueID = null;

    /**
     * Show the animal's adoption fee
     * @var string
     */
    private $showAnimalAdoptionFee = null;

    /**
     * Show the animal's euthanasia information
     * @var string
     */
    private $showAnimalEuthanasiaInfo = null;

    /**
     * Disable the animal header/footer to courtesy animals
     * @var string
     */
    private $disableAnimalCourtesyHeaderFooter = null;

    /**
     * Show journal entries on the kennel card
     * @var string
     */
    private $showAnimalKennelcardJournalEntries = null;

    /**
     * Show cost on the kennel card
     * @var string
     */
    private $showAnimalKennelcardJournalCost = null;

    /**
     * Prevent adopted animals from being uploaded to Petfinder
     * @var string
     */
    private $disableAnimalExportAdopted = null;

    /**
     * Export adopted pets to Adopt-a-Pet.com
     * @var string
     */
    private $enableExportAdoptedToAdoptapet = null;

    /**
     * Prevent courtesy animals from being uploaded to other sites
     * @var string
     */
    private $disableAnimalExportCourtesy = null;

    /**
     * Disable the link to the animal's web page
     * @var string
     */
    private $disableAnimalExportAnimalWebPageLink = null;

    /**
     * Disable the link to your organization's website
     * @var string
     */
    private $disableAnimalExportWebsiteLink = null;

    /**
     * Disable the link to your adoption form
     * @var string
     */
    private $disableAnimalExportAdoptionFormLink = null;

    /**
     * Include the Animal Description Header in the animal description
     * @var string
     */
    private $enableAnimalExportDescriptionHeader = null;

    /**
     * Include the Animal Description Footer in the animal description
     * @var string
     */
    private $enableAnimalExportDescriptionFooter = null;

    /**
     * Use the RescueGroups.org Animal ID as a Unique ID
     * @var string
     */
    private $enableAnimalExportUniqueAnimalID = null;

    /**
     * Show the foster/caretaker's first name
     * @var string
     */
    private $enableAnimalExportContactFieldFirstname = null;

    /**
     * Show the foster/caretaker's last name
     * @var string
     */
    private $enableAnimalExportContactFieldLastname = null;

    /**
     * Show the foster/caretaker's email address
     * @var string
     */
    private $enableAnimalExportContactFieldEmail = null;

    /**
     * Show the foster/caretaker's home phone number
     * @var string
     */
    private $enableAnimalExportContactFieldPhoneHome = null;

    /**
     * Show the foster/caretaker's cell phone number
     * @var string
     */
    private $enableAnimalExportContactFieldPhoneCell = null;

    /**
     * Account to use for YouTube video upload
     * @var string
     */
    private $setAnimalExportYouTubeAccount = null;

    /**
     * YouTube authorization code
     * @var string
     */
    private $setAnimalExportYouTubeAuthorizationCode = null;

    /**
     * By default, export to services that list animals for adoption
     * @var string
     */
    private $setAnimalExportDefaultCategory1 = null;

    /**
     * By default, export to services that list animals for adoption (from non-rescue/shelters)
     * @var string
     */
    private $setAnimalExportDefaultCategory4 = null;

    /**
     * By default, export to services that list animals for sale by breeder
     * @var string
     */
    private $setAnimalExportDefaultCategory3 = null;

    /**
     * By default, export to services that list animals for sale by owner
     * @var string
     */
    private $setAnimalExportDefaultCategory2 = null;

    /**
     * By default, export to services that provide animal related classifieds
     * @var string
     */
    private $setAnimalExportDefaultCategory5 = null;

    /**
     * By default, export to services that provide animal related community discussion/forums
     * @var string
     */
    private $setAnimalExportDefaultCategory6 = null;

    /**
     * By default, export to services that provide animal related educational information
     * @var string
     */
    private $setAnimalExportDefaultCategory8 = null;

    /**
     * By default, export to services that provide animal related news
     * @var string
     */
    private $setAnimalExportDefaultCategory7 = null;

    /**
     * By default, export to services that provide event calendars
     * @var string
     */
    private $setAnimalExportDefaultCategory13 = null;

    /**
     * By default, export to services that sell/promote animal related products (food, toys, treats, etc)
     * @var string
     */
    private $setAnimalExportDefaultCategory9 = null;

    /**
     * By default, export to services that sell/promote animal related services (training, grooming)
     * @var string
     */
    private $setAnimalExportDefaultCategory11 = null;

    /**
     * By default, export to services that sell/promote non-animal related products
     * @var string
     */
    private $setAnimalExportDefaultCategory10 = null;

    /**
     * By default, export to services that sell/promote non-animal related services
     * @var string
     */
    private $setAnimalExportDefaultCategory12 = null;

    /**
     * Disable videos in Animal descriptions
     * @var string
     */
    private $disableAnimalDescriptionVideo = null;

    /**
     * Use a link instead of embedding the video in Animal descriptions
     * @var string
     */
    private $enableAnimalDescriptionVideoLink = null;

    /**
     * Enable FreePetChipRegistry registrations
     * @var string
     */
    private $enableFreePetChipRegistry = null;

    /**
     * FreePetChipRegistry user name
     * @var string
     */
    private $setFreePetChipRegistryUserName = null;

    /**
     * Enable PetLink registrations
     * @var string
     */
    private $enablePetLinkRegistry = null;

    /**
     * PetLink user name
     * @var string
     */
    private $setPetLinkUserName = null;

    /**
     * PetLink password
     * @var string
     */
    private $setPetLinkPassword = null;

    /**
     * Disable the email alert to the volunteer concerning microchip registration (success or failure)
     * @var string
     */
    private $disableMicrochipUserAlert = null;

    /**
     * Email address(es) to alert concerning microchip registration (success or failure)
     * @var string
     */
    private $setMicrochipAlertEmails = null;


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
        return 'updateSettings';
    }

    /**
     * Set Babies (Kittens, Puppies) enabled
     *
     * @param string $enableAnimalsSpecialListBabies
     * @return $this
     */
    public function setEnableAnimalsSpecialListBabies($enableAnimalsSpecialListBabies)
    {
        $this->enableAnimalsSpecialListBabies = $enableAnimalsSpecialListBabies;

        return $this;
    }

    /**
     * Set Babies (Kittens, Puppies) Youngest Age
     *
     * @param string $setAnimalsSpecialListBabiesYoungest
     * @return $this
     */
    public function setSetAnimalsSpecialListBabiesYoungest($setAnimalsSpecialListBabiesYoungest)
    {
        $this->setAnimalsSpecialListBabiesYoungest = $setAnimalsSpecialListBabiesYoungest;

        return $this;
    }

    /**
     * Set Babies (Kittens, Puppies) Oldest Age
     *
     * @param string $setAnimalsSpecialListBabiesOldest
     * @return $this
     */
    public function setSetAnimalsSpecialListBabiesOldest($setAnimalsSpecialListBabiesOldest)
    {
        $this->setAnimalsSpecialListBabiesOldest = $setAnimalsSpecialListBabiesOldest;

        return $this;
    }

    /**
     * Set Teens enabled
     *
     * @param string $enableAnimalsSpecialListTeens
     * @return $this
     */
    public function setEnableAnimalsSpecialListTeens($enableAnimalsSpecialListTeens)
    {
        $this->enableAnimalsSpecialListTeens = $enableAnimalsSpecialListTeens;

        return $this;
    }

    /**
     * Set Teens Youngest Age
     *
     * @param string $setAnimalsSpecialListTeensYoungest
     * @return $this
     */
    public function setSetAnimalsSpecialListTeensYoungest($setAnimalsSpecialListTeensYoungest)
    {
        $this->setAnimalsSpecialListTeensYoungest = $setAnimalsSpecialListTeensYoungest;

        return $this;
    }

    /**
     * Set Teens Oldest Age
     *
     * @param string $setAnimalsSpecialListTeensOldest
     * @return $this
     */
    public function setSetAnimalsSpecialListTeensOldest($setAnimalsSpecialListTeensOldest)
    {
        $this->setAnimalsSpecialListTeensOldest = $setAnimalsSpecialListTeensOldest;

        return $this;
    }

    /**
     * Set Adults enabled
     *
     * @param string $enableAnimalsSpecialListAdults
     * @return $this
     */
    public function setEnableAnimalsSpecialListAdults($enableAnimalsSpecialListAdults)
    {
        $this->enableAnimalsSpecialListAdults = $enableAnimalsSpecialListAdults;

        return $this;
    }

    /**
     * Set Adults Youngest Age
     *
     * @param string $setAnimalsSpecialListAdultsYoungest
     * @return $this
     */
    public function setSetAnimalsSpecialListAdultsYoungest($setAnimalsSpecialListAdultsYoungest)
    {
        $this->setAnimalsSpecialListAdultsYoungest = $setAnimalsSpecialListAdultsYoungest;

        return $this;
    }

    /**
     * Set Adults Oldest Age
     *
     * @param string $setAnimalsSpecialListAdultsOldest
     * @return $this
     */
    public function setSetAnimalsSpecialListAdultsOldest($setAnimalsSpecialListAdultsOldest)
    {
        $this->setAnimalsSpecialListAdultsOldest = $setAnimalsSpecialListAdultsOldest;

        return $this;
    }

    /**
     * Set Seniors enabled
     *
     * @param string $enableAnimalsSpecialListSeniors
     * @return $this
     */
    public function setEnableAnimalsSpecialListSeniors($enableAnimalsSpecialListSeniors)
    {
        $this->enableAnimalsSpecialListSeniors = $enableAnimalsSpecialListSeniors;

        return $this;
    }

    /**
     * Set Seniors Youngest Age
     *
     * @param string $setAnimalsSpecialListSeniorsYoungest
     * @return $this
     */
    public function setSetAnimalsSpecialListSeniorsYoungest($setAnimalsSpecialListSeniorsYoungest)
    {
        $this->setAnimalsSpecialListSeniorsYoungest = $setAnimalsSpecialListSeniorsYoungest;

        return $this;
    }

    /**
     * Set Long Time/Must Adopt enabled
     *
     * @param string $enableAnimalsSpecialListLongtime
     * @return $this
     */
    public function setEnableAnimalsSpecialListLongtime($enableAnimalsSpecialListLongtime)
    {
        $this->enableAnimalsSpecialListLongtime = $enableAnimalsSpecialListLongtime;

        return $this;
    }

    /**
     * Set Long Time/Must Adopt Shortest length of time
     *
     * @param string $setAnimalsSpecialListLongtimeYoungest
     * @return $this
     */
    public function setSetAnimalsSpecialListLongtimeYoungest($setAnimalsSpecialListLongtimeYoungest)
    {
        $this->setAnimalsSpecialListLongtimeYoungest = $setAnimalsSpecialListLongtimeYoungest;

        return $this;
    }

    /**
     * Set Long Time/Must Adopt Longest length of time
     *
     * @param string $setAnimalsSpecialListLongtimeOldest
     * @return $this
     */
    public function setSetAnimalsSpecialListLongtimeOldest($setAnimalsSpecialListLongtimeOldest)
    {
        $this->setAnimalsSpecialListLongtimeOldest = $setAnimalsSpecialListLongtimeOldest;

        return $this;
    }

    /**
     * Set Recent Arrivals enabled
     *
     * @param string $enableAnimalsSpecialListRecent
     * @return $this
     */
    public function setEnableAnimalsSpecialListRecent($enableAnimalsSpecialListRecent)
    {
        $this->enableAnimalsSpecialListRecent = $enableAnimalsSpecialListRecent;

        return $this;
    }

    /**
     * Set Recent Arrivals Shortest length of time
     *
     * @param string $setAnimalsSpecialListRecentDays
     * @return $this
     */
    public function setSetAnimalsSpecialListRecentDays($setAnimalsSpecialListRecentDays)
    {
        $this->setAnimalsSpecialListRecentDays = $setAnimalsSpecialListRecentDays;

        return $this;
    }

    /**
     * Set Special Needs enabled
     *
     * @param string $enableAnimalsSpecialListSpecialNeeds
     * @return $this
     */
    public function setEnableAnimalsSpecialListSpecialNeeds($enableAnimalsSpecialListSpecialNeeds)
    {
        $this->enableAnimalsSpecialListSpecialNeeds = $enableAnimalsSpecialListSpecialNeeds;

        return $this;
    }

    /**
     * Set Urgent enabled
     *
     * @param string $enableAnimalsSpecialListUrgent
     * @return $this
     */
    public function setEnableAnimalsSpecialListUrgent($enableAnimalsSpecialListUrgent)
    {
        $this->enableAnimalsSpecialListUrgent = $enableAnimalsSpecialListUrgent;

        return $this;
    }

    /**
     * Set Needs a Caretaker/Foster enabled
     *
     * @param string $enableAnimalsSpecialListFoster
     * @return $this
     */
    public function setEnableAnimalsSpecialListFoster($enableAnimalsSpecialListFoster)
    {
        $this->enableAnimalsSpecialListFoster = $enableAnimalsSpecialListFoster;

        return $this;
    }

    /**
     * Set Courtesy Listings enabled
     *
     * @param string $enableAnimalsSpecialListCourtesy
     * @return $this
     */
    public function setEnableAnimalsSpecialListCourtesy($enableAnimalsSpecialListCourtesy)
    {
        $this->enableAnimalsSpecialListCourtesy = $enableAnimalsSpecialListCourtesy;

        return $this;
    }

    /**
     * Set Automatically set animal's Rescue ID
     *
     * @param string $enableAnimalAutoRescueID
     * @return $this
     */
    public function setEnableAnimalAutoRescueID($enableAnimalAutoRescueID)
    {
        $this->enableAnimalAutoRescueID = $enableAnimalAutoRescueID;

        return $this;
    }

    /**
     * Set Format for Rescue IDs
     *
     * @param string $setAnimalAutoRescueIDFormat
     * @return $this
     */
    public function setSetAnimalAutoRescueIDFormat($setAnimalAutoRescueIDFormat)
    {
        $this->setAnimalAutoRescueIDFormat = $setAnimalAutoRescueIDFormat;

        return $this;
    }

    /**
     * Set Do not automatically assign Rescue ID for courtesy listings
     *
     * @param string $disableAnimalAutoRescueIDCourtesyListings
     * @return $this
     */
    public function setDisableAnimalAutoRescueIDCourtesyListings($disableAnimalAutoRescueIDCourtesyListings)
    {
        $this->disableAnimalAutoRescueIDCourtesyListings = $disableAnimalAutoRescueIDCourtesyListings;

        return $this;
    }

    /**
     * Set Enable the Portal website
     *
     * @param string $enablePortalWebsite
     * @return $this
     */
    public function setEnablePortalWebsite($enablePortalWebsite)
    {
        $this->enablePortalWebsite = $enablePortalWebsite;

        return $this;
    }

    /**
     * Set Show if the animal is microchipped
     *
     * @param string $showAnimalMicrochip
     * @return $this
     */
    public function setShowAnimalMicrochip($showAnimalMicrochip)
    {
        $this->showAnimalMicrochip = $showAnimalMicrochip;

        return $this;
    }

    /**
     * Set Show if the animal is altered
     *
     * @param string $showAnimalAltered
     * @return $this
     */
    public function setShowAnimalAltered($showAnimalAltered)
    {
        $this->showAnimalAltered = $showAnimalAltered;

        return $this;
    }

    /**
     * Set Show if the animal will be altered before adoption
     *
     * @param string $showAnimalWillBeAltered
     * @return $this
     */
    public function setShowAnimalWillBeAltered($showAnimalWillBeAltered)
    {
        $this->showAnimalWillBeAltered = $showAnimalWillBeAltered;

        return $this;
    }

    /**
     * Set Show the animal's Rescue ID
     *
     * @param string $showAnimalRescueID
     * @return $this
     */
    public function setShowAnimalRescueID($showAnimalRescueID)
    {
        $this->showAnimalRescueID = $showAnimalRescueID;

        return $this;
    }

    /**
     * Set Show the animal's adoption fee
     *
     * @param string $showAnimalAdoptionFee
     * @return $this
     */
    public function setShowAnimalAdoptionFee($showAnimalAdoptionFee)
    {
        $this->showAnimalAdoptionFee = $showAnimalAdoptionFee;

        return $this;
    }

    /**
     * Set Show the animal's euthanasia information
     *
     * @param string $showAnimalEuthanasiaInfo
     * @return $this
     */
    public function setShowAnimalEuthanasiaInfo($showAnimalEuthanasiaInfo)
    {
        $this->showAnimalEuthanasiaInfo = $showAnimalEuthanasiaInfo;

        return $this;
    }

    /**
     * Set Disable the animal header/footer to courtesy animals
     *
     * @param string $disableAnimalCourtesyHeaderFooter
     * @return $this
     */
    public function setDisableAnimalCourtesyHeaderFooter($disableAnimalCourtesyHeaderFooter)
    {
        $this->disableAnimalCourtesyHeaderFooter = $disableAnimalCourtesyHeaderFooter;

        return $this;
    }

    /**
     * Set Show journal entries on the kennel card
     *
     * @param string $showAnimalKennelcardJournalEntries
     * @return $this
     */
    public function setShowAnimalKennelcardJournalEntries($showAnimalKennelcardJournalEntries)
    {
        $this->showAnimalKennelcardJournalEntries = $showAnimalKennelcardJournalEntries;

        return $this;
    }

    /**
     * Set Show cost on the kennel card
     *
     * @param string $showAnimalKennelcardJournalCost
     * @return $this
     */
    public function setShowAnimalKennelcardJournalCost($showAnimalKennelcardJournalCost)
    {
        $this->showAnimalKennelcardJournalCost = $showAnimalKennelcardJournalCost;

        return $this;
    }

    /**
     * Set Prevent adopted animals from being uploaded to Petfinder
     *
     * @param string $disableAnimalExportAdopted
     * @return $this
     */
    public function setDisableAnimalExportAdopted($disableAnimalExportAdopted)
    {
        $this->disableAnimalExportAdopted = $disableAnimalExportAdopted;

        return $this;
    }

    /**
     * Set Export adopted pets to Adopt-a-Pet.com
     *
     * @param string $enableExportAdoptedToAdoptapet
     * @return $this
     */
    public function setEnableExportAdoptedToAdoptapet($enableExportAdoptedToAdoptapet)
    {
        $this->enableExportAdoptedToAdoptapet = $enableExportAdoptedToAdoptapet;

        return $this;
    }

    /**
     * Set Prevent courtesy animals from being uploaded to other sites
     *
     * @param string $disableAnimalExportCourtesy
     * @return $this
     */
    public function setDisableAnimalExportCourtesy($disableAnimalExportCourtesy)
    {
        $this->disableAnimalExportCourtesy = $disableAnimalExportCourtesy;

        return $this;
    }

    /**
     * Set Disable the link to the animal's web page
     *
     * @param string $disableAnimalExportAnimalWebPageLink
     * @return $this
     */
    public function setDisableAnimalExportAnimalWebPageLink($disableAnimalExportAnimalWebPageLink)
    {
        $this->disableAnimalExportAnimalWebPageLink = $disableAnimalExportAnimalWebPageLink;

        return $this;
    }

    /**
     * Set Disable the link to your organization's website
     *
     * @param string $disableAnimalExportWebsiteLink
     * @return $this
     */
    public function setDisableAnimalExportWebsiteLink($disableAnimalExportWebsiteLink)
    {
        $this->disableAnimalExportWebsiteLink = $disableAnimalExportWebsiteLink;

        return $this;
    }

    /**
     * Set Disable the link to your adoption form
     *
     * @param string $disableAnimalExportAdoptionFormLink
     * @return $this
     */
    public function setDisableAnimalExportAdoptionFormLink($disableAnimalExportAdoptionFormLink)
    {
        $this->disableAnimalExportAdoptionFormLink = $disableAnimalExportAdoptionFormLink;

        return $this;
    }

    /**
     * Set Include the Animal Description Header in the animal description
     *
     * @param string $enableAnimalExportDescriptionHeader
     * @return $this
     */
    public function setEnableAnimalExportDescriptionHeader($enableAnimalExportDescriptionHeader)
    {
        $this->enableAnimalExportDescriptionHeader = $enableAnimalExportDescriptionHeader;

        return $this;
    }

    /**
     * Set Include the Animal Description Footer in the animal description
     *
     * @param string $enableAnimalExportDescriptionFooter
     * @return $this
     */
    public function setEnableAnimalExportDescriptionFooter($enableAnimalExportDescriptionFooter)
    {
        $this->enableAnimalExportDescriptionFooter = $enableAnimalExportDescriptionFooter;

        return $this;
    }

    /**
     * Set Use the RescueGroups.org Animal ID as a Unique ID
     *
     * @param string $enableAnimalExportUniqueAnimalID
     * @return $this
     */
    public function setEnableAnimalExportUniqueAnimalID($enableAnimalExportUniqueAnimalID)
    {
        $this->enableAnimalExportUniqueAnimalID = $enableAnimalExportUniqueAnimalID;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's first name
     *
     * @param string $enableAnimalExportContactFieldFirstname
     * @return $this
     */
    public function setEnableAnimalExportContactFieldFirstname($enableAnimalExportContactFieldFirstname)
    {
        $this->enableAnimalExportContactFieldFirstname = $enableAnimalExportContactFieldFirstname;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's last name
     *
     * @param string $enableAnimalExportContactFieldLastname
     * @return $this
     */
    public function setEnableAnimalExportContactFieldLastname($enableAnimalExportContactFieldLastname)
    {
        $this->enableAnimalExportContactFieldLastname = $enableAnimalExportContactFieldLastname;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's email address
     *
     * @param string $enableAnimalExportContactFieldEmail
     * @return $this
     */
    public function setEnableAnimalExportContactFieldEmail($enableAnimalExportContactFieldEmail)
    {
        $this->enableAnimalExportContactFieldEmail = $enableAnimalExportContactFieldEmail;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's home phone number
     *
     * @param string $enableAnimalExportContactFieldPhoneHome
     * @return $this
     */
    public function setEnableAnimalExportContactFieldPhoneHome($enableAnimalExportContactFieldPhoneHome)
    {
        $this->enableAnimalExportContactFieldPhoneHome = $enableAnimalExportContactFieldPhoneHome;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's cell phone number
     *
     * @param string $enableAnimalExportContactFieldPhoneCell
     * @return $this
     */
    public function setEnableAnimalExportContactFieldPhoneCell($enableAnimalExportContactFieldPhoneCell)
    {
        $this->enableAnimalExportContactFieldPhoneCell = $enableAnimalExportContactFieldPhoneCell;

        return $this;
    }

    /**
     * Set Account to use for YouTube video upload
     *
     * @param string $setAnimalExportYouTubeAccount
     * @return $this
     */
    public function setSetAnimalExportYouTubeAccount($setAnimalExportYouTubeAccount)
    {
        $this->setAnimalExportYouTubeAccount = $setAnimalExportYouTubeAccount;

        return $this;
    }

    /**
     * Set YouTube authorization code
     *
     * @param string $setAnimalExportYouTubeAuthorizationCode
     * @return $this
     */
    public function setSetAnimalExportYouTubeAuthorizationCode($setAnimalExportYouTubeAuthorizationCode)
    {
        $this->setAnimalExportYouTubeAuthorizationCode = $setAnimalExportYouTubeAuthorizationCode;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for adoption
     *
     * @param string $setAnimalExportDefaultCategory1
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory1($setAnimalExportDefaultCategory1)
    {
        $this->setAnimalExportDefaultCategory1 = $setAnimalExportDefaultCategory1;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for adoption (from non-rescue/shelters)
     *
     * @param string $setAnimalExportDefaultCategory4
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory4($setAnimalExportDefaultCategory4)
    {
        $this->setAnimalExportDefaultCategory4 = $setAnimalExportDefaultCategory4;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for sale by breeder
     *
     * @param string $setAnimalExportDefaultCategory3
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory3($setAnimalExportDefaultCategory3)
    {
        $this->setAnimalExportDefaultCategory3 = $setAnimalExportDefaultCategory3;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for sale by owner
     *
     * @param string $setAnimalExportDefaultCategory2
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory2($setAnimalExportDefaultCategory2)
    {
        $this->setAnimalExportDefaultCategory2 = $setAnimalExportDefaultCategory2;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related classifieds
     *
     * @param string $setAnimalExportDefaultCategory5
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory5($setAnimalExportDefaultCategory5)
    {
        $this->setAnimalExportDefaultCategory5 = $setAnimalExportDefaultCategory5;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related community discussion/forums
     *
     * @param string $setAnimalExportDefaultCategory6
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory6($setAnimalExportDefaultCategory6)
    {
        $this->setAnimalExportDefaultCategory6 = $setAnimalExportDefaultCategory6;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related educational information
     *
     * @param string $setAnimalExportDefaultCategory8
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory8($setAnimalExportDefaultCategory8)
    {
        $this->setAnimalExportDefaultCategory8 = $setAnimalExportDefaultCategory8;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related news
     *
     * @param string $setAnimalExportDefaultCategory7
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory7($setAnimalExportDefaultCategory7)
    {
        $this->setAnimalExportDefaultCategory7 = $setAnimalExportDefaultCategory7;

        return $this;
    }

    /**
     * Set By default, export to services that provide event calendars
     *
     * @param string $setAnimalExportDefaultCategory13
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory13($setAnimalExportDefaultCategory13)
    {
        $this->setAnimalExportDefaultCategory13 = $setAnimalExportDefaultCategory13;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote animal related products (food, toys, treats, etc)
     *
     * @param string $setAnimalExportDefaultCategory9
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory9($setAnimalExportDefaultCategory9)
    {
        $this->setAnimalExportDefaultCategory9 = $setAnimalExportDefaultCategory9;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote animal related services (training, grooming)
     *
     * @param string $setAnimalExportDefaultCategory11
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory11($setAnimalExportDefaultCategory11)
    {
        $this->setAnimalExportDefaultCategory11 = $setAnimalExportDefaultCategory11;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote non-animal related products
     *
     * @param string $setAnimalExportDefaultCategory10
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory10($setAnimalExportDefaultCategory10)
    {
        $this->setAnimalExportDefaultCategory10 = $setAnimalExportDefaultCategory10;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote non-animal related services
     *
     * @param string $setAnimalExportDefaultCategory12
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory12($setAnimalExportDefaultCategory12)
    {
        $this->setAnimalExportDefaultCategory12 = $setAnimalExportDefaultCategory12;

        return $this;
    }

    /**
     * Set Disable videos in Animal descriptions
     *
     * @param string $disableAnimalDescriptionVideo
     * @return $this
     */
    public function setDisableAnimalDescriptionVideo($disableAnimalDescriptionVideo)
    {
        $this->disableAnimalDescriptionVideo = $disableAnimalDescriptionVideo;

        return $this;
    }

    /**
     * Set Use a link instead of embedding the video in Animal descriptions
     *
     * @param string $enableAnimalDescriptionVideoLink
     * @return $this
     */
    public function setEnableAnimalDescriptionVideoLink($enableAnimalDescriptionVideoLink)
    {
        $this->enableAnimalDescriptionVideoLink = $enableAnimalDescriptionVideoLink;

        return $this;
    }

    /**
     * Set Enable FreePetChipRegistry registrations
     *
     * @param string $enableFreePetChipRegistry
     * @return $this
     */
    public function setEnableFreePetChipRegistry($enableFreePetChipRegistry)
    {
        $this->enableFreePetChipRegistry = $enableFreePetChipRegistry;

        return $this;
    }

    /**
     * Set FreePetChipRegistry user name
     *
     * @param string $setFreePetChipRegistryUserName
     * @return $this
     */
    public function setSetFreePetChipRegistryUserName($setFreePetChipRegistryUserName)
    {
        $this->setFreePetChipRegistryUserName = $setFreePetChipRegistryUserName;

        return $this;
    }

    /**
     * Set Enable PetLink registrations
     *
     * @param string $enablePetLinkRegistry
     * @return $this
     */
    public function setEnablePetLinkRegistry($enablePetLinkRegistry)
    {
        $this->enablePetLinkRegistry = $enablePetLinkRegistry;

        return $this;
    }

    /**
     * Set PetLink user name
     *
     * @param string $setPetLinkUserName
     * @return $this
     */
    public function setSetPetLinkUserName($setPetLinkUserName)
    {
        $this->setPetLinkUserName = $setPetLinkUserName;

        return $this;
    }

    /**
     * Set PetLink password
     *
     * @param string $setPetLinkPassword
     * @return $this
     */
    public function setSetPetLinkPassword($setPetLinkPassword)
    {
        $this->setPetLinkPassword = $setPetLinkPassword;

        return $this;
    }

    /**
     * Set Disable the email alert to the volunteer concerning microchip registration (success or failure)
     *
     * @param string $disableMicrochipUserAlert
     * @return $this
     */
    public function setDisableMicrochipUserAlert($disableMicrochipUserAlert)
    {
        $this->disableMicrochipUserAlert = $disableMicrochipUserAlert;

        return $this;
    }

    /**
     * Set Email address(es) to alert concerning microchip registration (success or failure)
     *
     * @param string $setMicrochipAlertEmails
     * @return $this
     */
    public function setSetMicrochipAlertEmails($setMicrochipAlertEmails)
    {
        $this->setMicrochipAlertEmails = $setMicrochipAlertEmails;

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
        if ($this->enableAnimalsSpecialListBabies !== null) $parameterArray['enableAnimalsSpecialListBabies'] = $this->enableAnimalsSpecialListBabies;
        if ($this->setAnimalsSpecialListBabiesYoungest !== null) $parameterArray['setAnimalsSpecialListBabiesYoungest'] = $this->setAnimalsSpecialListBabiesYoungest;
        if ($this->setAnimalsSpecialListBabiesOldest !== null) $parameterArray['setAnimalsSpecialListBabiesOldest'] = $this->setAnimalsSpecialListBabiesOldest;
        if ($this->enableAnimalsSpecialListTeens !== null) $parameterArray['enableAnimalsSpecialListTeens'] = $this->enableAnimalsSpecialListTeens;
        if ($this->setAnimalsSpecialListTeensYoungest !== null) $parameterArray['setAnimalsSpecialListTeensYoungest'] = $this->setAnimalsSpecialListTeensYoungest;
        if ($this->setAnimalsSpecialListTeensOldest !== null) $parameterArray['setAnimalsSpecialListTeensOldest'] = $this->setAnimalsSpecialListTeensOldest;
        if ($this->enableAnimalsSpecialListAdults !== null) $parameterArray['enableAnimalsSpecialListAdults'] = $this->enableAnimalsSpecialListAdults;
        if ($this->setAnimalsSpecialListAdultsYoungest !== null) $parameterArray['setAnimalsSpecialListAdultsYoungest'] = $this->setAnimalsSpecialListAdultsYoungest;
        if ($this->setAnimalsSpecialListAdultsOldest !== null) $parameterArray['setAnimalsSpecialListAdultsOldest'] = $this->setAnimalsSpecialListAdultsOldest;
        if ($this->enableAnimalsSpecialListSeniors !== null) $parameterArray['enableAnimalsSpecialListSeniors'] = $this->enableAnimalsSpecialListSeniors;
        if ($this->setAnimalsSpecialListSeniorsYoungest !== null) $parameterArray['setAnimalsSpecialListSeniorsYoungest'] = $this->setAnimalsSpecialListSeniorsYoungest;
        if ($this->enableAnimalsSpecialListLongtime !== null) $parameterArray['enableAnimalsSpecialListLongtime'] = $this->enableAnimalsSpecialListLongtime;
        if ($this->setAnimalsSpecialListLongtimeYoungest !== null) $parameterArray['setAnimalsSpecialListLongtimeYoungest'] = $this->setAnimalsSpecialListLongtimeYoungest;
        if ($this->setAnimalsSpecialListLongtimeOldest !== null) $parameterArray['setAnimalsSpecialListLongtimeOldest'] = $this->setAnimalsSpecialListLongtimeOldest;
        if ($this->enableAnimalsSpecialListRecent !== null) $parameterArray['enableAnimalsSpecialListRecent'] = $this->enableAnimalsSpecialListRecent;
        if ($this->setAnimalsSpecialListRecentDays !== null) $parameterArray['setAnimalsSpecialListRecentDays'] = $this->setAnimalsSpecialListRecentDays;
        if ($this->enableAnimalsSpecialListSpecialNeeds !== null) $parameterArray['enableAnimalsSpecialListSpecialNeeds'] = $this->enableAnimalsSpecialListSpecialNeeds;
        if ($this->enableAnimalsSpecialListUrgent !== null) $parameterArray['enableAnimalsSpecialListUrgent'] = $this->enableAnimalsSpecialListUrgent;
        if ($this->enableAnimalsSpecialListFoster !== null) $parameterArray['enableAnimalsSpecialListFoster'] = $this->enableAnimalsSpecialListFoster;
        if ($this->enableAnimalsSpecialListCourtesy !== null) $parameterArray['enableAnimalsSpecialListCourtesy'] = $this->enableAnimalsSpecialListCourtesy;
        if ($this->enableAnimalAutoRescueID !== null) $parameterArray['enableAnimalAutoRescueID'] = $this->enableAnimalAutoRescueID;
        if ($this->setAnimalAutoRescueIDFormat !== null) $parameterArray['setAnimalAutoRescueIDFormat'] = $this->setAnimalAutoRescueIDFormat;
        if ($this->disableAnimalAutoRescueIDCourtesyListings !== null) $parameterArray['disableAnimalAutoRescueIDCourtesyListings'] = $this->disableAnimalAutoRescueIDCourtesyListings;
        if ($this->enablePortalWebsite !== null) $parameterArray['enablePortalWebsite'] = $this->enablePortalWebsite;
        if ($this->showAnimalMicrochip !== null) $parameterArray['showAnimalMicrochip'] = $this->showAnimalMicrochip;
        if ($this->showAnimalAltered !== null) $parameterArray['showAnimalAltered'] = $this->showAnimalAltered;
        if ($this->showAnimalWillBeAltered !== null) $parameterArray['showAnimalWillBeAltered'] = $this->showAnimalWillBeAltered;
        if ($this->showAnimalRescueID !== null) $parameterArray['showAnimalRescueID'] = $this->showAnimalRescueID;
        if ($this->showAnimalAdoptionFee !== null) $parameterArray['showAnimalAdoptionFee'] = $this->showAnimalAdoptionFee;
        if ($this->showAnimalEuthanasiaInfo !== null) $parameterArray['showAnimalEuthanasiaInfo'] = $this->showAnimalEuthanasiaInfo;
        if ($this->disableAnimalCourtesyHeaderFooter !== null) $parameterArray['disableAnimalCourtesyHeaderFooter'] = $this->disableAnimalCourtesyHeaderFooter;
        if ($this->showAnimalKennelcardJournalEntries !== null) $parameterArray['showAnimalKennelcardJournalEntries'] = $this->showAnimalKennelcardJournalEntries;
        if ($this->showAnimalKennelcardJournalCost !== null) $parameterArray['showAnimalKennelcardJournalCost'] = $this->showAnimalKennelcardJournalCost;
        if ($this->disableAnimalExportAdopted !== null) $parameterArray['disableAnimalExportAdopted'] = $this->disableAnimalExportAdopted;
        if ($this->enableExportAdoptedToAdoptapet !== null) $parameterArray['enableExportAdoptedToAdoptapet'] = $this->enableExportAdoptedToAdoptapet;
        if ($this->disableAnimalExportCourtesy !== null) $parameterArray['disableAnimalExportCourtesy'] = $this->disableAnimalExportCourtesy;
        if ($this->disableAnimalExportAnimalWebPageLink !== null) $parameterArray['disableAnimalExportAnimalWebPageLink'] = $this->disableAnimalExportAnimalWebPageLink;
        if ($this->disableAnimalExportWebsiteLink !== null) $parameterArray['disableAnimalExportWebsiteLink'] = $this->disableAnimalExportWebsiteLink;
        if ($this->disableAnimalExportAdoptionFormLink !== null) $parameterArray['disableAnimalExportAdoptionFormLink'] = $this->disableAnimalExportAdoptionFormLink;
        if ($this->enableAnimalExportDescriptionHeader !== null) $parameterArray['enableAnimalExportDescriptionHeader'] = $this->enableAnimalExportDescriptionHeader;
        if ($this->enableAnimalExportDescriptionFooter !== null) $parameterArray['enableAnimalExportDescriptionFooter'] = $this->enableAnimalExportDescriptionFooter;
        if ($this->enableAnimalExportUniqueAnimalID !== null) $parameterArray['enableAnimalExportUniqueAnimalID'] = $this->enableAnimalExportUniqueAnimalID;
        if ($this->enableAnimalExportContactFieldFirstname !== null) $parameterArray['enableAnimalExportContactFieldFirstname'] = $this->enableAnimalExportContactFieldFirstname;
        if ($this->enableAnimalExportContactFieldLastname !== null) $parameterArray['enableAnimalExportContactFieldLastname'] = $this->enableAnimalExportContactFieldLastname;
        if ($this->enableAnimalExportContactFieldEmail !== null) $parameterArray['enableAnimalExportContactFieldEmail'] = $this->enableAnimalExportContactFieldEmail;
        if ($this->enableAnimalExportContactFieldPhoneHome !== null) $parameterArray['enableAnimalExportContactFieldPhoneHome'] = $this->enableAnimalExportContactFieldPhoneHome;
        if ($this->enableAnimalExportContactFieldPhoneCell !== null) $parameterArray['enableAnimalExportContactFieldPhoneCell'] = $this->enableAnimalExportContactFieldPhoneCell;
        if ($this->setAnimalExportYouTubeAccount !== null) $parameterArray['setAnimalExportYouTubeAccount'] = $this->setAnimalExportYouTubeAccount;
        if ($this->setAnimalExportYouTubeAuthorizationCode !== null) $parameterArray['setAnimalExportYouTubeAuthorizationCode'] = $this->setAnimalExportYouTubeAuthorizationCode;
        if ($this->setAnimalExportDefaultCategory1 !== null) $parameterArray['setAnimalExportDefaultCategory1'] = $this->setAnimalExportDefaultCategory1;
        if ($this->setAnimalExportDefaultCategory4 !== null) $parameterArray['setAnimalExportDefaultCategory4'] = $this->setAnimalExportDefaultCategory4;
        if ($this->setAnimalExportDefaultCategory3 !== null) $parameterArray['setAnimalExportDefaultCategory3'] = $this->setAnimalExportDefaultCategory3;
        if ($this->setAnimalExportDefaultCategory2 !== null) $parameterArray['setAnimalExportDefaultCategory2'] = $this->setAnimalExportDefaultCategory2;
        if ($this->setAnimalExportDefaultCategory5 !== null) $parameterArray['setAnimalExportDefaultCategory5'] = $this->setAnimalExportDefaultCategory5;
        if ($this->setAnimalExportDefaultCategory6 !== null) $parameterArray['setAnimalExportDefaultCategory6'] = $this->setAnimalExportDefaultCategory6;
        if ($this->setAnimalExportDefaultCategory8 !== null) $parameterArray['setAnimalExportDefaultCategory8'] = $this->setAnimalExportDefaultCategory8;
        if ($this->setAnimalExportDefaultCategory7 !== null) $parameterArray['setAnimalExportDefaultCategory7'] = $this->setAnimalExportDefaultCategory7;
        if ($this->setAnimalExportDefaultCategory13 !== null) $parameterArray['setAnimalExportDefaultCategory13'] = $this->setAnimalExportDefaultCategory13;
        if ($this->setAnimalExportDefaultCategory9 !== null) $parameterArray['setAnimalExportDefaultCategory9'] = $this->setAnimalExportDefaultCategory9;
        if ($this->setAnimalExportDefaultCategory11 !== null) $parameterArray['setAnimalExportDefaultCategory11'] = $this->setAnimalExportDefaultCategory11;
        if ($this->setAnimalExportDefaultCategory10 !== null) $parameterArray['setAnimalExportDefaultCategory10'] = $this->setAnimalExportDefaultCategory10;
        if ($this->setAnimalExportDefaultCategory12 !== null) $parameterArray['setAnimalExportDefaultCategory12'] = $this->setAnimalExportDefaultCategory12;
        if ($this->disableAnimalDescriptionVideo !== null) $parameterArray['disableAnimalDescriptionVideo'] = $this->disableAnimalDescriptionVideo;
        if ($this->enableAnimalDescriptionVideoLink !== null) $parameterArray['enableAnimalDescriptionVideoLink'] = $this->enableAnimalDescriptionVideoLink;
        if ($this->enableFreePetChipRegistry !== null) $parameterArray['enableFreePetChipRegistry'] = $this->enableFreePetChipRegistry;
        if ($this->setFreePetChipRegistryUserName !== null) $parameterArray['setFreePetChipRegistryUserName'] = $this->setFreePetChipRegistryUserName;
        if ($this->enablePetLinkRegistry !== null) $parameterArray['enablePetLinkRegistry'] = $this->enablePetLinkRegistry;
        if ($this->setPetLinkUserName !== null) $parameterArray['setPetLinkUserName'] = $this->setPetLinkUserName;
        if ($this->setPetLinkPassword !== null) $parameterArray['setPetLinkPassword'] = $this->setPetLinkPassword;
        if ($this->disableMicrochipUserAlert !== null) $parameterArray['disableMicrochipUserAlert'] = $this->disableMicrochipUserAlert;
        if ($this->setMicrochipAlertEmails !== null) $parameterArray['setMicrochipAlertEmails'] = $this->setMicrochipAlertEmails;

    }
}