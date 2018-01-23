<?php
/**
 * Website UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Website;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'website';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Website down for maintenance
     *
     * @var string
     */
    private $enableDown = null;

    /**
     * Disable user email alerts for Favorite Animals and Breeds
     *
     * @var string
     */
    private $disableFavoriteEmails = null;

    /**
     * Upload website home page as Petfinder web page
     *
     * @var string
     */
    private $enablePetfinderHomePageUpload = null;

    /**
     * Website slogan
     *
     * @var string
     */
    private $setSlogan = null;

    /**
     * Website menu source
     *
     * @var integer
     */
    private $setMenuSource = null;

    /**
     * Custom front page
     *
     * @var integer
     */
    private $setIndexPageID = null;

    /**
     * Display Logo on front page
     *
     * @var string
     */
    private $enableFrontPageLogo = null;

    /**
     * Show the latest News articles on the front page
     *
     * @var string
     */
    private $enableFrontPageNews = null;

    /**
     * Show upcoming Events on the front page
     *
     * @var string
     */
    private $enableFrontPageEvents = null;

    /**
     * Show highlighted animals on the front page
     *
     * @var string
     */
    private $enableFrontPageHighlightedAnimals = null;

    /**
     * Number of highlighted animals to show on the front page
     *
     * @var string
     */
    private $setFrontPageNumberOfHighlightedAnimals = null;

    /**
     * Amount of highlighted animals' description to show on the front page
     *
     * @var string
     */
    private $setFrontPageHighlightedAnimalsDescriptionLength = null;

    /**
     * Show the Powered by RescueGroups.org image
     *
     * @var string
     */
    private $enableRescueGroupsPoweredByImage = null;

    /**
     * Show the user name on the menu next to the Logout option
     *
     * @var string
     */
    private $enableMenuLogoutUsername = null;

    /**
     * Show the date/time the website was last updated
     *
     * @var string
     */
    private $enableLastUpdated = null;

    /**
     * Set the animal picture mode
     *
     * @var string
     */
    private $setAnimalPictureMode = null;

    /**
     * Select the animal for the Featured animal picture
     *
     * @var integer
     */
    private $setAnimalPictureAnimalID = null;

    /**
     * Show the animal seach box
     *
     * @var string
     */
    private $enableAnimalSearchBox = null;

    /**
     * Show mailing address on the side bar
     *
     * @var string
     */
    private $enableSideBarAddress = null;

    /**
     * Show Email Page to a Friend
     *
     * @var string
     */
    private $enableEmailFriend = null;

    /**
     * Show share button
     *
     * @var string
     */
    private $enableShareButton = null;

    /**
     * Show the DogTime Sparky widget
     *
     * @var string
     */
    private $enableSparky = null;

    /**
     * Set the side bar width
     *
     * @var string
     */
    private $setSideBarWidth = null;

    /**
     * Show logo
     *
     * @var string
     */
    private $enableLogo = null;

    /**
     * Set the background image
     *
     * @var integer
     */
    private $setBackgroundImageID = null;

    /**
     * Enable the Meet Request feature
     *
     * @var string
     */
    private $enableAnimalMeet = null;

    /**
     * Enable the Contact Us form
     *
     * @var string
     */
    private $enableContactUsForm = null;

    /**
     * Animal Browse page layout
     *
     * @var string
     */
    private $setAnimalBrowseLayout = null;

    /**
     * Set the animal browse panel width
     *
     * @var string
     */
    private $setAnimalBrowsePanelWidth = null;

    /**
     * Animal Browse page columns
     *
     * @var string
     */
    private $setAnimalBrowsePanelColumns = null;

    /**
     * Animal Browse page number of animals
     *
     * @var string
     */
    private $setAnimalBrowseAnimalsPerPage = null;

    /**
     * Animal limit
     *
     * @var string
     */
    private $setAnimalBrowseLimit = null;

    /**
     * Hide courtesy listings on browse/list page
     *
     * @var string
     */
    private $disableAnimalBrowseCourtesyListings = null;

    /**
     * Show sponsorship link on the browse page
     *
     * @var string
     */
    private $showAnimalBrowseSponsorshipLink = null;

    /**
     * How much of each animal's description to display
     *
     * @var string
     */
    private $setAnimalBrowseDescriptionLength = null;

    /**
     * setAnimalBrowseFields
     *
     * @var string
     */
    private $setAnimalBrowseFields = null;

    /**
     * List Animals available for adoption
     *
     * @var string
     */
    private $enableAnimalAdoptions = null;

    /**
     * Animal detail page layout
     *
     * @var string
     */
    private $setAnimalDetailPageStyle = null;

    /**
     * Use a popover to display animal details
     *
     * @var string
     */
    private $enableAnimalDetailPagePopover = null;

    /**
     * Show the Animal detail page share button
     *
     * @var string
     */
    private $enableAnimalDetailPageShareButton = null;

    /**
     * Disable the Animal detail page Adoption Information link
     *
     * @var string
     */
    private $disableAnimalDetailPageAdoptionInfoLink = null;

    /**
     * Disable the Animal detail page Adoption Information link on courtesy animals
     *
     * @var string
     */
    private $disableAnimalDetailPageAdoptionInfoLinkCourtesy = null;

    /**
     * Show DogTime content on the Animal detail page
     *
     * @var string
     */
    private $showAnimalDetailPageDogTimeContent = null;

    /**
     * Show a link on the Animal detail page to Save-a-Dog or Save-a-Cat on DogTime
     *
     * @var string
     */
    private $showAnimalDetailPageDogTimeSaveaDog = null;

    /**
     * How many Events to show on the Animal detail page
     *
     * @var string
     */
    private $setAnimalDetailPageEventsLimit = null;

    /**
     * Show the Adopt Me sayings on the Animal detail page
     *
     * @var string
     */
    private $showAnimalDetailPageAdoptMeSayings = null;

    /**
     * Disable the My Rescue box on the Animal detail page
     *
     * @var string
     */
    private $disableAnimalDetailPageMyRescue = null;

    /**
     * Disable the link to the Petbond Animal adoption flyer
     *
     * @var string
     */
    private $disableAnimalFlyer = null;

    /**
     * Disable the Animal favorite count
     *
     * @var string
     */
    private $disableAnimalFavoriteCount = null;

    /**
     * Disable public access to the Animal successes
     *
     * @var string
     */
    private $disableAnimalSuccessesPublic = null;

    /**
     * Disable Animal success stories
     *
     * @var string
     */
    private $disableAnimalStories = null;

    /**
     * Show transferred Animals with successes
     *
     * @var string
     */
    private $showAnimalTransferredWithSuccesses = null;

    /**
     * Show Animal links
     *
     * @var string
     */
    private $showAnimalLinks = null;

    /**
     * Show Highlighted Animals on the Animal Home Page
     *
     * @var string
     */
    private $showAnimalHomePageHighlighted = null;

    /**
     * Set the Animal image border
     *
     * @var string
     */
    private $enableAnimalImageBorder = null;

    /**
     * Set the Animal image border style
     *
     * @var string
     */
    private $setAnimalImageBorderStyle = null;

    /**
     * Set the Animal image border color
     *
     * @var string
     */
    private $setAnimalImageBorderColor = null;

    /**
     * Set the Animal image matte color
     *
     * @var string
     */
    private $setAnimalImageMatteColor = null;

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
     * Automatically print the Animal Kennel Card
     *
     * @var string
     */
    private $enableAnimalKennelcardPrintAuto = null;

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
     * Disable the message that animal ages are best estimates
     *
     * @var string
     */
    private $disableAnimalAgeBestEstimate = null;


    /**
     * Set Website down for maintenance
     *
     * @param string $value
     * @return $this
     */
    public function setEnableDown($value)
    {
        $this->enableDown = $value;

        return $this;
    }

    /**
     * Set Disable user email alerts for Favorite Animals and Breeds
     *
     * @param string $value
     * @return $this
     */
    public function setDisableFavoriteEmails($value)
    {
        $this->disableFavoriteEmails = $value;

        return $this;
    }

    /**
     * Set Upload website home page as Petfinder web page
     *
     * @param string $value
     * @return $this
     */
    public function setEnablePetfinderHomePageUpload($value)
    {
        $this->enablePetfinderHomePageUpload = $value;

        return $this;
    }

    /**
     * Set Website slogan
     *
     * @param string $value
     * @return $this
     */
    public function setSetSlogan($value)
    {
        $this->setSlogan = $value;

        return $this;
    }

    /**
     * Set Website menu source
     *
     * @param integer $value
     * @return $this
     */
    public function setSetMenuSource($value)
    {
        $this->setMenuSource = $value;

        return $this;
    }

    /**
     * Set Custom front page
     *
     * @param integer $value
     * @return $this
     */
    public function setSetIndexPageID($value)
    {
        $this->setIndexPageID = $value;

        return $this;
    }

    /**
     * Set Display Logo on front page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableFrontPageLogo($value)
    {
        $this->enableFrontPageLogo = $value;

        return $this;
    }

    /**
     * Set Show the latest News articles on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableFrontPageNews($value)
    {
        $this->enableFrontPageNews = $value;

        return $this;
    }

    /**
     * Set Show upcoming Events on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableFrontPageEvents($value)
    {
        $this->enableFrontPageEvents = $value;

        return $this;
    }

    /**
     * Set Show highlighted animals on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableFrontPageHighlightedAnimals($value)
    {
        $this->enableFrontPageHighlightedAnimals = $value;

        return $this;
    }

    /**
     * Set Number of highlighted animals to show on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setSetFrontPageNumberOfHighlightedAnimals($value)
    {
        $this->setFrontPageNumberOfHighlightedAnimals = $value;

        return $this;
    }

    /**
     * Set Amount of highlighted animals' description to show on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setSetFrontPageHighlightedAnimalsDescriptionLength($value)
    {
        $this->setFrontPageHighlightedAnimalsDescriptionLength = $value;

        return $this;
    }

    /**
     * Set Show the Powered by RescueGroups.org image
     *
     * @param string $value
     * @return $this
     */
    public function setEnableRescueGroupsPoweredByImage($value)
    {
        $this->enableRescueGroupsPoweredByImage = $value;

        return $this;
    }

    /**
     * Set Show the user name on the menu next to the Logout option
     *
     * @param string $value
     * @return $this
     */
    public function setEnableMenuLogoutUsername($value)
    {
        $this->enableMenuLogoutUsername = $value;

        return $this;
    }

    /**
     * Set Show the date/time the website was last updated
     *
     * @param string $value
     * @return $this
     */
    public function setEnableLastUpdated($value)
    {
        $this->enableLastUpdated = $value;

        return $this;
    }

    /**
     * Set Set the animal picture mode
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalPictureMode($value)
    {
        $this->setAnimalPictureMode = $value;

        return $this;
    }

    /**
     * Set Select the animal for the Featured animal picture
     *
     * @param integer $value
     * @return $this
     */
    public function setSetAnimalPictureAnimalID($value)
    {
        $this->setAnimalPictureAnimalID = $value;

        return $this;
    }

    /**
     * Set Show the animal seach box
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalSearchBox($value)
    {
        $this->enableAnimalSearchBox = $value;

        return $this;
    }

    /**
     * Set Show mailing address on the side bar
     *
     * @param string $value
     * @return $this
     */
    public function setEnableSideBarAddress($value)
    {
        $this->enableSideBarAddress = $value;

        return $this;
    }

    /**
     * Set Show Email Page to a Friend
     *
     * @param string $value
     * @return $this
     */
    public function setEnableEmailFriend($value)
    {
        $this->enableEmailFriend = $value;

        return $this;
    }

    /**
     * Set Show share button
     *
     * @param string $value
     * @return $this
     */
    public function setEnableShareButton($value)
    {
        $this->enableShareButton = $value;

        return $this;
    }

    /**
     * Set Show the DogTime Sparky widget
     *
     * @param string $value
     * @return $this
     */
    public function setEnableSparky($value)
    {
        $this->enableSparky = $value;

        return $this;
    }

    /**
     * Set Set the side bar width
     *
     * @param string $value
     * @return $this
     */
    public function setSetSideBarWidth($value)
    {
        $this->setSideBarWidth = $value;

        return $this;
    }

    /**
     * Set Show logo
     *
     * @param string $value
     * @return $this
     */
    public function setEnableLogo($value)
    {
        $this->enableLogo = $value;

        return $this;
    }

    /**
     * Set Set the background image
     *
     * @param integer $value
     * @return $this
     */
    public function setSetBackgroundImageID($value)
    {
        $this->setBackgroundImageID = $value;

        return $this;
    }

    /**
     * Set Enable the Meet Request feature
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalMeet($value)
    {
        $this->enableAnimalMeet = $value;

        return $this;
    }

    /**
     * Set Enable the Contact Us form
     *
     * @param string $value
     * @return $this
     */
    public function setEnableContactUsForm($value)
    {
        $this->enableContactUsForm = $value;

        return $this;
    }

    /**
     * Set Animal Browse page layout
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalBrowseLayout($value)
    {
        $this->setAnimalBrowseLayout = $value;

        return $this;
    }

    /**
     * Set Set the animal browse panel width
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalBrowsePanelWidth($value)
    {
        $this->setAnimalBrowsePanelWidth = $value;

        return $this;
    }

    /**
     * Set Animal Browse page columns
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalBrowsePanelColumns($value)
    {
        $this->setAnimalBrowsePanelColumns = $value;

        return $this;
    }

    /**
     * Set Animal Browse page number of animals
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalBrowseAnimalsPerPage($value)
    {
        $this->setAnimalBrowseAnimalsPerPage = $value;

        return $this;
    }

    /**
     * Set Animal limit
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalBrowseLimit($value)
    {
        $this->setAnimalBrowseLimit = $value;

        return $this;
    }

    /**
     * Set Hide courtesy listings on browse/list page
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalBrowseCourtesyListings($value)
    {
        $this->disableAnimalBrowseCourtesyListings = $value;

        return $this;
    }

    /**
     * Set Show sponsorship link on the browse page
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalBrowseSponsorshipLink($value)
    {
        $this->showAnimalBrowseSponsorshipLink = $value;

        return $this;
    }

    /**
     * Set How much of each animal's description to display
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalBrowseDescriptionLength($value)
    {
        $this->setAnimalBrowseDescriptionLength = $value;

        return $this;
    }

    /**
     * Set setAnimalBrowseFields
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalBrowseFields($value)
    {
        $this->setAnimalBrowseFields = $value;

        return $this;
    }

    /**
     * Set List Animals available for adoption
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalAdoptions($value)
    {
        $this->enableAnimalAdoptions = $value;

        return $this;
    }

    /**
     * Set Animal detail page layout
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalDetailPageStyle($value)
    {
        $this->setAnimalDetailPageStyle = $value;

        return $this;
    }

    /**
     * Set Use a popover to display animal details
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalDetailPagePopover($value)
    {
        $this->enableAnimalDetailPagePopover = $value;

        return $this;
    }

    /**
     * Set Show the Animal detail page share button
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalDetailPageShareButton($value)
    {
        $this->enableAnimalDetailPageShareButton = $value;

        return $this;
    }

    /**
     * Set Disable the Animal detail page Adoption Information link
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalDetailPageAdoptionInfoLink($value)
    {
        $this->disableAnimalDetailPageAdoptionInfoLink = $value;

        return $this;
    }

    /**
     * Set Disable the Animal detail page Adoption Information link on courtesy animals
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalDetailPageAdoptionInfoLinkCourtesy($value)
    {
        $this->disableAnimalDetailPageAdoptionInfoLinkCourtesy = $value;

        return $this;
    }

    /**
     * Set Show DogTime content on the Animal detail page
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalDetailPageDogTimeContent($value)
    {
        $this->showAnimalDetailPageDogTimeContent = $value;

        return $this;
    }

    /**
     * Set Show a link on the Animal detail page to Save-a-Dog or Save-a-Cat on DogTime
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalDetailPageDogTimeSaveaDog($value)
    {
        $this->showAnimalDetailPageDogTimeSaveaDog = $value;

        return $this;
    }

    /**
     * Set How many Events to show on the Animal detail page
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalDetailPageEventsLimit($value)
    {
        $this->setAnimalDetailPageEventsLimit = $value;

        return $this;
    }

    /**
     * Set Show the Adopt Me sayings on the Animal detail page
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalDetailPageAdoptMeSayings($value)
    {
        $this->showAnimalDetailPageAdoptMeSayings = $value;

        return $this;
    }

    /**
     * Set Disable the My Rescue box on the Animal detail page
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalDetailPageMyRescue($value)
    {
        $this->disableAnimalDetailPageMyRescue = $value;

        return $this;
    }

    /**
     * Set Disable the link to the Petbond Animal adoption flyer
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalFlyer($value)
    {
        $this->disableAnimalFlyer = $value;

        return $this;
    }

    /**
     * Set Disable the Animal favorite count
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalFavoriteCount($value)
    {
        $this->disableAnimalFavoriteCount = $value;

        return $this;
    }

    /**
     * Set Disable public access to the Animal successes
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalSuccessesPublic($value)
    {
        $this->disableAnimalSuccessesPublic = $value;

        return $this;
    }

    /**
     * Set Disable Animal success stories
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalStories($value)
    {
        $this->disableAnimalStories = $value;

        return $this;
    }

    /**
     * Set Show transferred Animals with successes
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalTransferredWithSuccesses($value)
    {
        $this->showAnimalTransferredWithSuccesses = $value;

        return $this;
    }

    /**
     * Set Show Animal links
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalLinks($value)
    {
        $this->showAnimalLinks = $value;

        return $this;
    }

    /**
     * Set Show Highlighted Animals on the Animal Home Page
     *
     * @param string $value
     * @return $this
     */
    public function setShowAnimalHomePageHighlighted($value)
    {
        $this->showAnimalHomePageHighlighted = $value;

        return $this;
    }

    /**
     * Set Set the Animal image border
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalImageBorder($value)
    {
        $this->enableAnimalImageBorder = $value;

        return $this;
    }

    /**
     * Set Set the Animal image border style
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalImageBorderStyle($value)
    {
        $this->setAnimalImageBorderStyle = $value;

        return $this;
    }

    /**
     * Set Set the Animal image border color
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalImageBorderColor($value)
    {
        $this->setAnimalImageBorderColor = $value;

        return $this;
    }

    /**
     * Set Set the Animal image matte color
     *
     * @param string $value
     * @return $this
     */
    public function setSetAnimalImageMatteColor($value)
    {
        $this->setAnimalImageMatteColor = $value;

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
     * Set Automatically print the Animal Kennel Card
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalKennelcardPrintAuto($value)
    {
        $this->enableAnimalKennelcardPrintAuto = $value;

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
     * Set Disable the message that animal ages are best estimates
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalAgeBestEstimate($value)
    {
        $this->disableAnimalAgeBestEstimate = $value;

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

        if ($this->enableDown !== null) $parameterArray['values'][] = ["enableWebsiteDown"=>$this->enableDown];
        if ($this->disableFavoriteEmails !== null) $parameterArray['values'][] = ["disableWebsiteFavoriteEmails"=>$this->disableFavoriteEmails];
        if ($this->enablePetfinderHomePageUpload !== null) $parameterArray['values'][] = ["enableWebsitePetfinderHomePageUpload"=>$this->enablePetfinderHomePageUpload];
        if ($this->setSlogan !== null) $parameterArray['values'][] = ["setWebsiteSlogan"=>$this->setSlogan];
        if ($this->setMenuSource !== null) $parameterArray['values'][] = ["setWebsiteMenuSource"=>$this->setMenuSource];
        if ($this->setIndexPageID !== null) $parameterArray['values'][] = ["setWebsiteIndexPageID"=>$this->setIndexPageID];
        if ($this->enableFrontPageLogo !== null) $parameterArray['values'][] = ["enableWebsiteFrontPageLogo"=>$this->enableFrontPageLogo];
        if ($this->enableFrontPageNews !== null) $parameterArray['values'][] = ["enableWebsiteFrontPageNews"=>$this->enableFrontPageNews];
        if ($this->enableFrontPageEvents !== null) $parameterArray['values'][] = ["enableWebsiteFrontPageEvents"=>$this->enableFrontPageEvents];
        if ($this->enableFrontPageHighlightedAnimals !== null) $parameterArray['values'][] = ["enableWebsiteFrontPageHighlightedAnimals"=>$this->enableFrontPageHighlightedAnimals];
        if ($this->setFrontPageNumberOfHighlightedAnimals !== null) $parameterArray['values'][] = ["setWebsiteFrontPageNumberOfHighlightedAnimals"=>$this->setFrontPageNumberOfHighlightedAnimals];
        if ($this->setFrontPageHighlightedAnimalsDescriptionLength !== null) $parameterArray['values'][] = ["setWebsiteFrontPageHighlightedAnimalsDescriptionLength"=>$this->setFrontPageHighlightedAnimalsDescriptionLength];
        if ($this->enableRescueGroupsPoweredByImage !== null) $parameterArray['values'][] = ["enableWebsiteRescueGroupsPoweredByImage"=>$this->enableRescueGroupsPoweredByImage];
        if ($this->enableMenuLogoutUsername !== null) $parameterArray['values'][] = ["enableWebsiteMenuLogoutUsername"=>$this->enableMenuLogoutUsername];
        if ($this->enableLastUpdated !== null) $parameterArray['values'][] = ["enableWebsiteLastUpdated"=>$this->enableLastUpdated];
        if ($this->setAnimalPictureMode !== null) $parameterArray['values'][] = ["setWebsiteAnimalPictureMode"=>$this->setAnimalPictureMode];
        if ($this->setAnimalPictureAnimalID !== null) $parameterArray['values'][] = ["setWebsiteAnimalPictureAnimalID"=>$this->setAnimalPictureAnimalID];
        if ($this->enableAnimalSearchBox !== null) $parameterArray['values'][] = ["enableWebsiteAnimalSearchBox"=>$this->enableAnimalSearchBox];
        if ($this->enableSideBarAddress !== null) $parameterArray['values'][] = ["enableWebsiteSideBarAddress"=>$this->enableSideBarAddress];
        if ($this->enableEmailFriend !== null) $parameterArray['values'][] = ["enableWebsiteEmailFriend"=>$this->enableEmailFriend];
        if ($this->enableShareButton !== null) $parameterArray['values'][] = ["enableWebsiteShareButton"=>$this->enableShareButton];
        if ($this->enableSparky !== null) $parameterArray['values'][] = ["enableWebsiteSparky"=>$this->enableSparky];
        if ($this->setSideBarWidth !== null) $parameterArray['values'][] = ["setWebsiteSideBarWidth"=>$this->setSideBarWidth];
        if ($this->enableLogo !== null) $parameterArray['values'][] = ["enableWebsiteLogo"=>$this->enableLogo];
        if ($this->setBackgroundImageID !== null) $parameterArray['values'][] = ["setWebsiteBackgroundImageID"=>$this->setBackgroundImageID];
        if ($this->enableAnimalMeet !== null) $parameterArray['values'][] = ["enableAnimalMeet"=>$this->enableAnimalMeet];
        if ($this->enableContactUsForm !== null) $parameterArray['values'][] = ["enableWebsiteContactUsForm"=>$this->enableContactUsForm];
        if ($this->setAnimalBrowseLayout !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseLayout"=>$this->setAnimalBrowseLayout];
        if ($this->setAnimalBrowsePanelWidth !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowsePanelWidth"=>$this->setAnimalBrowsePanelWidth];
        if ($this->setAnimalBrowsePanelColumns !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowsePanelColumns"=>$this->setAnimalBrowsePanelColumns];
        if ($this->setAnimalBrowseAnimalsPerPage !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseAnimalsPerPage"=>$this->setAnimalBrowseAnimalsPerPage];
        if ($this->setAnimalBrowseLimit !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseLimit"=>$this->setAnimalBrowseLimit];
        if ($this->disableAnimalBrowseCourtesyListings !== null) $parameterArray['values'][] = ["disableWebsiteAnimalBrowseCourtesyListings"=>$this->disableAnimalBrowseCourtesyListings];
        if ($this->showAnimalBrowseSponsorshipLink !== null) $parameterArray['values'][] = ["showWebsiteAnimalBrowseSponsorshipLink"=>$this->showAnimalBrowseSponsorshipLink];
        if ($this->setAnimalBrowseDescriptionLength !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseDescriptionLength"=>$this->setAnimalBrowseDescriptionLength];
        if ($this->setAnimalBrowseFields !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseFields"=>$this->setAnimalBrowseFields];
        if ($this->enableAnimalAdoptions !== null) $parameterArray['values'][] = ["enableAnimalAdoptions"=>$this->enableAnimalAdoptions];
        if ($this->setAnimalDetailPageStyle !== null) $parameterArray['values'][] = ["setAnimalDetailPageStyle"=>$this->setAnimalDetailPageStyle];
        if ($this->enableAnimalDetailPagePopover !== null) $parameterArray['values'][] = ["enableAnimalDetailPagePopover"=>$this->enableAnimalDetailPagePopover];
        if ($this->enableAnimalDetailPageShareButton !== null) $parameterArray['values'][] = ["enableAnimalDetailPageShareButton"=>$this->enableAnimalDetailPageShareButton];
        if ($this->disableAnimalDetailPageAdoptionInfoLink !== null) $parameterArray['values'][] = ["disableAnimalDetailPageAdoptionInfoLink"=>$this->disableAnimalDetailPageAdoptionInfoLink];
        if ($this->disableAnimalDetailPageAdoptionInfoLinkCourtesy !== null) $parameterArray['values'][] = ["disableAnimalDetailPageAdoptionInfoLinkCourtesy"=>$this->disableAnimalDetailPageAdoptionInfoLinkCourtesy];
        if ($this->showAnimalDetailPageDogTimeContent !== null) $parameterArray['values'][] = ["showAnimalDetailPageDogTimeContent"=>$this->showAnimalDetailPageDogTimeContent];
        if ($this->showAnimalDetailPageDogTimeSaveaDog !== null) $parameterArray['values'][] = ["showAnimalDetailPageDogTimeSaveaDog"=>$this->showAnimalDetailPageDogTimeSaveaDog];
        if ($this->setAnimalDetailPageEventsLimit !== null) $parameterArray['values'][] = ["setAnimalDetailPageEventsLimit"=>$this->setAnimalDetailPageEventsLimit];
        if ($this->showAnimalDetailPageAdoptMeSayings !== null) $parameterArray['values'][] = ["showAnimalDetailPageAdoptMeSayings"=>$this->showAnimalDetailPageAdoptMeSayings];
        if ($this->disableAnimalDetailPageMyRescue !== null) $parameterArray['values'][] = ["disableAnimalDetailPageMyRescue"=>$this->disableAnimalDetailPageMyRescue];
        if ($this->disableAnimalFlyer !== null) $parameterArray['values'][] = ["disableAnimalFlyer"=>$this->disableAnimalFlyer];
        if ($this->disableAnimalFavoriteCount !== null) $parameterArray['values'][] = ["disableAnimalFavoriteCount"=>$this->disableAnimalFavoriteCount];
        if ($this->disableAnimalSuccessesPublic !== null) $parameterArray['values'][] = ["disableAnimalSuccessesPublic"=>$this->disableAnimalSuccessesPublic];
        if ($this->disableAnimalStories !== null) $parameterArray['values'][] = ["disableAnimalStories"=>$this->disableAnimalStories];
        if ($this->showAnimalTransferredWithSuccesses !== null) $parameterArray['values'][] = ["showAnimalTransferredWithSuccesses"=>$this->showAnimalTransferredWithSuccesses];
        if ($this->showAnimalLinks !== null) $parameterArray['values'][] = ["showAnimalLinks"=>$this->showAnimalLinks];
        if ($this->showAnimalHomePageHighlighted !== null) $parameterArray['values'][] = ["showAnimalHomePageHighlighted"=>$this->showAnimalHomePageHighlighted];
        if ($this->enableAnimalImageBorder !== null) $parameterArray['values'][] = ["enableAnimalImageBorder"=>$this->enableAnimalImageBorder];
        if ($this->setAnimalImageBorderStyle !== null) $parameterArray['values'][] = ["setAnimalImageBorderStyle"=>$this->setAnimalImageBorderStyle];
        if ($this->setAnimalImageBorderColor !== null) $parameterArray['values'][] = ["setAnimalImageBorderColor"=>$this->setAnimalImageBorderColor];
        if ($this->setAnimalImageMatteColor !== null) $parameterArray['values'][] = ["setAnimalImageMatteColor"=>$this->setAnimalImageMatteColor];
        if ($this->disableAnimalDescriptionVideo !== null) $parameterArray['values'][] = ["disableAnimalDescriptionVideo"=>$this->disableAnimalDescriptionVideo];
        if ($this->enableAnimalDescriptionVideoLink !== null) $parameterArray['values'][] = ["enableAnimalDescriptionVideoLink"=>$this->enableAnimalDescriptionVideoLink];
        if ($this->enableAnimalKennelcardPrintAuto !== null) $parameterArray['values'][] = ["enableAnimalKennelcardPrintAuto"=>$this->enableAnimalKennelcardPrintAuto];
        if ($this->showAnimalKennelcardJournalEntries !== null) $parameterArray['values'][] = ["showAnimalKennelcardJournalEntries"=>$this->showAnimalKennelcardJournalEntries];
        if ($this->showAnimalKennelcardJournalCost !== null) $parameterArray['values'][] = ["showAnimalKennelcardJournalCost"=>$this->showAnimalKennelcardJournalCost];
        if ($this->disableAnimalAgeBestEstimate !== null) $parameterArray['values'][] = ["disableAnimalAgeBestEstimate"=>$this->disableAnimalAgeBestEstimate];
    }
}