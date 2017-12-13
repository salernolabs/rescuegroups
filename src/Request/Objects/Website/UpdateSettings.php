<?php
/**
 * Website UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Website;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Website down for maintenance
     * @var string
     */
    private $enableWebsiteDown = null;

    /**
     * Disable user email alerts for Favorite Animals and Breeds
     * @var string
     */
    private $disableWebsiteFavoriteEmails = null;

    /**
     * Upload website home page as Petfinder web page
     * @var string
     */
    private $enableWebsitePetfinderHomePageUpload = null;

    /**
     * Website slogan
     * @var string
     */
    private $setWebsiteSlogan = null;

    /**
     * Website menu source
     * @var integer
     */
    private $setWebsiteMenuSource = null;

    /**
     * Custom front page
     * @var integer
     */
    private $setWebsiteIndexPageID = null;

    /**
     * Display Logo on front page
     * @var string
     */
    private $enableWebsiteFrontPageLogo = null;

    /**
     * Show the latest News articles on the front page
     * @var string
     */
    private $enableWebsiteFrontPageNews = null;

    /**
     * Show upcoming Events on the front page
     * @var string
     */
    private $enableWebsiteFrontPageEvents = null;

    /**
     * Show highlighted animals on the front page
     * @var string
     */
    private $enableWebsiteFrontPageHighlightedAnimals = null;

    /**
     * Number of highlighted animals to show on the front page
     * @var int
     */
    private $setWebsiteFrontPageNumberOfHighlightedAnimals = null;

    /**
     * Amount of highlighted animals' description to show on the front page
     * @var int
     */
    private $setWebsiteFrontPageHighlightedAnimalsDescriptionLength = null;

    /**
     * Show the Powered by RescueGroups.org image
     * @var string
     */
    private $enableWebsiteRescueGroupsPoweredByImage = null;

    /**
     * Show the user name on the menu next to the Logout option
     * @var string
     */
    private $enableWebsiteMenuLogoutUsername = null;

    /**
     * Show the date/time the website was last updated
     * @var string
     */
    private $enableWebsiteLastUpdated = null;

    /**
     * Set the animal picture mode
     * @var string
     */
    private $setWebsiteAnimalPictureMode = null;

    /**
     * Select the animal for the Featured animal picture
     * @var integer
     */
    private $setWebsiteAnimalPictureAnimalID = null;

    /**
     * Show the animal seach box
     * @var string
     */
    private $enableWebsiteAnimalSearchBox = null;

    /**
     * Show mailing address on the side bar
     * @var string
     */
    private $enableWebsiteSideBarAddress = null;

    /**
     * Show Email Page to a Friend
     * @var string
     */
    private $enableWebsiteEmailFriend = null;

    /**
     * Show share button
     * @var string
     */
    private $enableWebsiteShareButton = null;

    /**
     * Show the DogTime Sparky widget
     * @var string
     */
    private $enableWebsiteSparky = null;

    /**
     * Set the side bar width
     * @var int
     */
    private $setWebsiteSideBarWidth = null;

    /**
     * Show logo
     * @var string
     */
    private $enableWebsiteLogo = null;

    /**
     * Set the background image
     * @var integer
     */
    private $setWebsiteBackgroundImageID = null;

    /**
     * Enable the Meet Request feature
     * @var string
     */
    private $enableAnimalMeet = null;

    /**
     * Enable the Contact Us form
     * @var string
     */
    private $enableWebsiteContactUsForm = null;

    /**
     * Animal Browse page layout
     * @var string
     */
    private $setWebsiteAnimalBrowseLayout = null;

    /**
     * Set the animal browse panel width
     * @var int
     */
    private $setWebsiteAnimalBrowsePanelWidth = null;

    /**
     * Animal Browse page columns
     * @var int
     */
    private $setWebsiteAnimalBrowsePanelColumns = null;

    /**
     * Animal Browse page number of animals
     * @var int
     */
    private $setWebsiteAnimalBrowseAnimalsPerPage = null;

    /**
     * Animal limit
     * @var int
     */
    private $setWebsiteAnimalBrowseLimit = null;

    /**
     * Hide courtesy listings on browse/list page
     * @var string
     */
    private $disableWebsiteAnimalBrowseCourtesyListings = null;

    /**
     * Show sponsorship link on the browse page
     * @var string
     */
    private $showWebsiteAnimalBrowseSponsorshipLink = null;

    /**
     * How much of each animal's description to display
     * @var int
     */
    private $setWebsiteAnimalBrowseDescriptionLength = null;

    /**
     * 
     * @var string
     */
    private $setWebsiteAnimalBrowseFields = null;

    /**
     * List Animals available for adoption
     * @var string
     */
    private $enableAnimalAdoptions = null;

    /**
     * Animal detail page layout
     * @var string
     */
    private $setAnimalDetailPageStyle = null;

    /**
     * Use a popover to display animal details
     * @var string
     */
    private $enableAnimalDetailPagePopover = null;

    /**
     * Show the Animal detail page share button
     * @var string
     */
    private $enableAnimalDetailPageShareButton = null;

    /**
     * Disable the Animal detail page Adoption Information link
     * @var string
     */
    private $disableAnimalDetailPageAdoptionInfoLink = null;

    /**
     * Disable the Animal detail page Adoption Information link on courtesy animals
     * @var string
     */
    private $disableAnimalDetailPageAdoptionInfoLinkCourtesy = null;

    /**
     * Show DogTime content on the Animal detail page
     * @var string
     */
    private $showAnimalDetailPageDogTimeContent = null;

    /**
     * Show a link on the Animal detail page to Save-a-Dog or Save-a-Cat on DogTime
     * @var string
     */
    private $showAnimalDetailPageDogTimeSaveaDog = null;

    /**
     * How many Events to show on the Animal detail page
     * @var string
     */
    private $setAnimalDetailPageEventsLimit = null;

    /**
     * Show the Adopt Me sayings on the Animal detail page
     * @var string
     */
    private $showAnimalDetailPageAdoptMeSayings = null;

    /**
     * Disable the My Rescue box on the Animal detail page
     * @var string
     */
    private $disableAnimalDetailPageMyRescue = null;

    /**
     * Disable the link to the Petbond Animal adoption flyer
     * @var string
     */
    private $disableAnimalFlyer = null;

    /**
     * Disable the Animal favorite count
     * @var string
     */
    private $disableAnimalFavoriteCount = null;

    /**
     * Disable public access to the Animal successes
     * @var string
     */
    private $disableAnimalSuccessesPublic = null;

    /**
     * Disable Animal success stories
     * @var string
     */
    private $disableAnimalStories = null;

    /**
     * Show transferred Animals with successes
     * @var string
     */
    private $showAnimalTransferredWithSuccesses = null;

    /**
     * Show Animal links
     * @var string
     */
    private $showAnimalLinks = null;

    /**
     * Show Highlighted Animals on the Animal Home Page
     * @var string
     */
    private $showAnimalHomePageHighlighted = null;

    /**
     * Set the Animal image border
     * @var string
     */
    private $enableAnimalImageBorder = null;

    /**
     * Set the Animal image border style
     * @var string
     */
    private $setAnimalImageBorderStyle = null;

    /**
     * Set the Animal image border color
     * @var string
     */
    private $setAnimalImageBorderColor = null;

    /**
     * Set the Animal image matte color
     * @var string
     */
    private $setAnimalImageMatteColor = null;

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
     * Automatically print the Animal Kennel Card
     * @var string
     */
    private $enableAnimalKennelcardPrintAuto = null;

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
     * Disable the message that animal ages are best estimates
     * @var string
     */
    private $disableAnimalAgeBestEstimate = null;


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
        return 'website';
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
     * Set Website down for maintenance
     *
     * @param string $enableWebsiteDown
     * @return $this
     */
    public function setEnableWebsiteDown($enableWebsiteDown)
    {
        $this->enableWebsiteDown = $enableWebsiteDown;

        return $this;
    }

    /**
     * Set Disable user email alerts for Favorite Animals and Breeds
     *
     * @param string $disableWebsiteFavoriteEmails
     * @return $this
     */
    public function setDisableWebsiteFavoriteEmails($disableWebsiteFavoriteEmails)
    {
        $this->disableWebsiteFavoriteEmails = $disableWebsiteFavoriteEmails;

        return $this;
    }

    /**
     * Set Upload website home page as Petfinder web page
     *
     * @param string $enableWebsitePetfinderHomePageUpload
     * @return $this
     */
    public function setEnableWebsitePetfinderHomePageUpload($enableWebsitePetfinderHomePageUpload)
    {
        $this->enableWebsitePetfinderHomePageUpload = $enableWebsitePetfinderHomePageUpload;

        return $this;
    }

    /**
     * Set Website slogan
     *
     * @param string $setWebsiteSlogan
     * @return $this
     */
    public function setSetWebsiteSlogan($setWebsiteSlogan)
    {
        $this->setWebsiteSlogan = $setWebsiteSlogan;

        return $this;
    }

    /**
     * Set Website menu source
     *
     * @param integer $setWebsiteMenuSource
     * @return $this
     */
    public function setSetWebsiteMenuSource($setWebsiteMenuSource)
    {
        $this->setWebsiteMenuSource = $setWebsiteMenuSource;

        return $this;
    }

    /**
     * Set Custom front page
     *
     * @param integer $setWebsiteIndexPageID
     * @return $this
     */
    public function setSetWebsiteIndexPageID($setWebsiteIndexPageID)
    {
        $this->setWebsiteIndexPageID = $setWebsiteIndexPageID;

        return $this;
    }

    /**
     * Set Display Logo on front page
     *
     * @param string $enableWebsiteFrontPageLogo
     * @return $this
     */
    public function setEnableWebsiteFrontPageLogo($enableWebsiteFrontPageLogo)
    {
        $this->enableWebsiteFrontPageLogo = $enableWebsiteFrontPageLogo;

        return $this;
    }

    /**
     * Set Show the latest News articles on the front page
     *
     * @param string $enableWebsiteFrontPageNews
     * @return $this
     */
    public function setEnableWebsiteFrontPageNews($enableWebsiteFrontPageNews)
    {
        $this->enableWebsiteFrontPageNews = $enableWebsiteFrontPageNews;

        return $this;
    }

    /**
     * Set Show upcoming Events on the front page
     *
     * @param string $enableWebsiteFrontPageEvents
     * @return $this
     */
    public function setEnableWebsiteFrontPageEvents($enableWebsiteFrontPageEvents)
    {
        $this->enableWebsiteFrontPageEvents = $enableWebsiteFrontPageEvents;

        return $this;
    }

    /**
     * Set Show highlighted animals on the front page
     *
     * @param string $enableWebsiteFrontPageHighlightedAnimals
     * @return $this
     */
    public function setEnableWebsiteFrontPageHighlightedAnimals($enableWebsiteFrontPageHighlightedAnimals)
    {
        $this->enableWebsiteFrontPageHighlightedAnimals = $enableWebsiteFrontPageHighlightedAnimals;

        return $this;
    }

    /**
     * Set Number of highlighted animals to show on the front page
     *
     * @param int $setWebsiteFrontPageNumberOfHighlightedAnimals
     * @return $this
     */
    public function setSetWebsiteFrontPageNumberOfHighlightedAnimals($setWebsiteFrontPageNumberOfHighlightedAnimals)
    {
        $this->setWebsiteFrontPageNumberOfHighlightedAnimals = $setWebsiteFrontPageNumberOfHighlightedAnimals;

        return $this;
    }

    /**
     * Set Amount of highlighted animals' description to show on the front page
     *
     * @param int $setWebsiteFrontPageHighlightedAnimalsDescriptionLength
     * @return $this
     */
    public function setSetWebsiteFrontPageHighlightedAnimalsDescriptionLength($setWebsiteFrontPageHighlightedAnimalsDescriptionLength)
    {
        $this->setWebsiteFrontPageHighlightedAnimalsDescriptionLength = $setWebsiteFrontPageHighlightedAnimalsDescriptionLength;

        return $this;
    }

    /**
     * Set Show the Powered by RescueGroups.org image
     *
     * @param string $enableWebsiteRescueGroupsPoweredByImage
     * @return $this
     */
    public function setEnableWebsiteRescueGroupsPoweredByImage($enableWebsiteRescueGroupsPoweredByImage)
    {
        $this->enableWebsiteRescueGroupsPoweredByImage = $enableWebsiteRescueGroupsPoweredByImage;

        return $this;
    }

    /**
     * Set Show the user name on the menu next to the Logout option
     *
     * @param string $enableWebsiteMenuLogoutUsername
     * @return $this
     */
    public function setEnableWebsiteMenuLogoutUsername($enableWebsiteMenuLogoutUsername)
    {
        $this->enableWebsiteMenuLogoutUsername = $enableWebsiteMenuLogoutUsername;

        return $this;
    }

    /**
     * Set Show the date/time the website was last updated
     *
     * @param string $enableWebsiteLastUpdated
     * @return $this
     */
    public function setEnableWebsiteLastUpdated($enableWebsiteLastUpdated)
    {
        $this->enableWebsiteLastUpdated = $enableWebsiteLastUpdated;

        return $this;
    }

    /**
     * Set Set the animal picture mode
     *
     * @param string $setWebsiteAnimalPictureMode
     * @return $this
     */
    public function setSetWebsiteAnimalPictureMode($setWebsiteAnimalPictureMode)
    {
        $this->setWebsiteAnimalPictureMode = $setWebsiteAnimalPictureMode;

        return $this;
    }

    /**
     * Set Select the animal for the Featured animal picture
     *
     * @param integer $setWebsiteAnimalPictureAnimalID
     * @return $this
     */
    public function setSetWebsiteAnimalPictureAnimalID($setWebsiteAnimalPictureAnimalID)
    {
        $this->setWebsiteAnimalPictureAnimalID = $setWebsiteAnimalPictureAnimalID;

        return $this;
    }

    /**
     * Set Show the animal seach box
     *
     * @param string $enableWebsiteAnimalSearchBox
     * @return $this
     */
    public function setEnableWebsiteAnimalSearchBox($enableWebsiteAnimalSearchBox)
    {
        $this->enableWebsiteAnimalSearchBox = $enableWebsiteAnimalSearchBox;

        return $this;
    }

    /**
     * Set Show mailing address on the side bar
     *
     * @param string $enableWebsiteSideBarAddress
     * @return $this
     */
    public function setEnableWebsiteSideBarAddress($enableWebsiteSideBarAddress)
    {
        $this->enableWebsiteSideBarAddress = $enableWebsiteSideBarAddress;

        return $this;
    }

    /**
     * Set Show Email Page to a Friend
     *
     * @param string $enableWebsiteEmailFriend
     * @return $this
     */
    public function setEnableWebsiteEmailFriend($enableWebsiteEmailFriend)
    {
        $this->enableWebsiteEmailFriend = $enableWebsiteEmailFriend;

        return $this;
    }

    /**
     * Set Show share button
     *
     * @param string $enableWebsiteShareButton
     * @return $this
     */
    public function setEnableWebsiteShareButton($enableWebsiteShareButton)
    {
        $this->enableWebsiteShareButton = $enableWebsiteShareButton;

        return $this;
    }

    /**
     * Set Show the DogTime Sparky widget
     *
     * @param string $enableWebsiteSparky
     * @return $this
     */
    public function setEnableWebsiteSparky($enableWebsiteSparky)
    {
        $this->enableWebsiteSparky = $enableWebsiteSparky;

        return $this;
    }

    /**
     * Set Set the side bar width
     *
     * @param int $setWebsiteSideBarWidth
     * @return $this
     */
    public function setSetWebsiteSideBarWidth($setWebsiteSideBarWidth)
    {
        $this->setWebsiteSideBarWidth = $setWebsiteSideBarWidth;

        return $this;
    }

    /**
     * Set Show logo
     *
     * @param string $enableWebsiteLogo
     * @return $this
     */
    public function setEnableWebsiteLogo($enableWebsiteLogo)
    {
        $this->enableWebsiteLogo = $enableWebsiteLogo;

        return $this;
    }

    /**
     * Set Set the background image
     *
     * @param integer $setWebsiteBackgroundImageID
     * @return $this
     */
    public function setSetWebsiteBackgroundImageID($setWebsiteBackgroundImageID)
    {
        $this->setWebsiteBackgroundImageID = $setWebsiteBackgroundImageID;

        return $this;
    }

    /**
     * Set Enable the Meet Request feature
     *
     * @param string $enableAnimalMeet
     * @return $this
     */
    public function setEnableAnimalMeet($enableAnimalMeet)
    {
        $this->enableAnimalMeet = $enableAnimalMeet;

        return $this;
    }

    /**
     * Set Enable the Contact Us form
     *
     * @param string $enableWebsiteContactUsForm
     * @return $this
     */
    public function setEnableWebsiteContactUsForm($enableWebsiteContactUsForm)
    {
        $this->enableWebsiteContactUsForm = $enableWebsiteContactUsForm;

        return $this;
    }

    /**
     * Set Animal Browse page layout
     *
     * @param string $setWebsiteAnimalBrowseLayout
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseLayout($setWebsiteAnimalBrowseLayout)
    {
        $this->setWebsiteAnimalBrowseLayout = $setWebsiteAnimalBrowseLayout;

        return $this;
    }

    /**
     * Set Set the animal browse panel width
     *
     * @param int $setWebsiteAnimalBrowsePanelWidth
     * @return $this
     */
    public function setSetWebsiteAnimalBrowsePanelWidth($setWebsiteAnimalBrowsePanelWidth)
    {
        $this->setWebsiteAnimalBrowsePanelWidth = $setWebsiteAnimalBrowsePanelWidth;

        return $this;
    }

    /**
     * Set Animal Browse page columns
     *
     * @param int $setWebsiteAnimalBrowsePanelColumns
     * @return $this
     */
    public function setSetWebsiteAnimalBrowsePanelColumns($setWebsiteAnimalBrowsePanelColumns)
    {
        $this->setWebsiteAnimalBrowsePanelColumns = $setWebsiteAnimalBrowsePanelColumns;

        return $this;
    }

    /**
     * Set Animal Browse page number of animals
     *
     * @param int $setWebsiteAnimalBrowseAnimalsPerPage
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseAnimalsPerPage($setWebsiteAnimalBrowseAnimalsPerPage)
    {
        $this->setWebsiteAnimalBrowseAnimalsPerPage = $setWebsiteAnimalBrowseAnimalsPerPage;

        return $this;
    }

    /**
     * Set Animal limit
     *
     * @param int $setWebsiteAnimalBrowseLimit
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseLimit($setWebsiteAnimalBrowseLimit)
    {
        $this->setWebsiteAnimalBrowseLimit = $setWebsiteAnimalBrowseLimit;

        return $this;
    }

    /**
     * Set Hide courtesy listings on browse/list page
     *
     * @param string $disableWebsiteAnimalBrowseCourtesyListings
     * @return $this
     */
    public function setDisableWebsiteAnimalBrowseCourtesyListings($disableWebsiteAnimalBrowseCourtesyListings)
    {
        $this->disableWebsiteAnimalBrowseCourtesyListings = $disableWebsiteAnimalBrowseCourtesyListings;

        return $this;
    }

    /**
     * Set Show sponsorship link on the browse page
     *
     * @param string $showWebsiteAnimalBrowseSponsorshipLink
     * @return $this
     */
    public function setShowWebsiteAnimalBrowseSponsorshipLink($showWebsiteAnimalBrowseSponsorshipLink)
    {
        $this->showWebsiteAnimalBrowseSponsorshipLink = $showWebsiteAnimalBrowseSponsorshipLink;

        return $this;
    }

    /**
     * Set How much of each animal's description to display
     *
     * @param int $setWebsiteAnimalBrowseDescriptionLength
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseDescriptionLength($setWebsiteAnimalBrowseDescriptionLength)
    {
        $this->setWebsiteAnimalBrowseDescriptionLength = $setWebsiteAnimalBrowseDescriptionLength;

        return $this;
    }

    /**
     * Set 
     *
     * @param string $setWebsiteAnimalBrowseFields
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseFields($setWebsiteAnimalBrowseFields)
    {
        $this->setWebsiteAnimalBrowseFields = $setWebsiteAnimalBrowseFields;

        return $this;
    }

    /**
     * Set List Animals available for adoption
     *
     * @param string $enableAnimalAdoptions
     * @return $this
     */
    public function setEnableAnimalAdoptions($enableAnimalAdoptions)
    {
        $this->enableAnimalAdoptions = $enableAnimalAdoptions;

        return $this;
    }

    /**
     * Set Animal detail page layout
     *
     * @param string $setAnimalDetailPageStyle
     * @return $this
     */
    public function setSetAnimalDetailPageStyle($setAnimalDetailPageStyle)
    {
        $this->setAnimalDetailPageStyle = $setAnimalDetailPageStyle;

        return $this;
    }

    /**
     * Set Use a popover to display animal details
     *
     * @param string $enableAnimalDetailPagePopover
     * @return $this
     */
    public function setEnableAnimalDetailPagePopover($enableAnimalDetailPagePopover)
    {
        $this->enableAnimalDetailPagePopover = $enableAnimalDetailPagePopover;

        return $this;
    }

    /**
     * Set Show the Animal detail page share button
     *
     * @param string $enableAnimalDetailPageShareButton
     * @return $this
     */
    public function setEnableAnimalDetailPageShareButton($enableAnimalDetailPageShareButton)
    {
        $this->enableAnimalDetailPageShareButton = $enableAnimalDetailPageShareButton;

        return $this;
    }

    /**
     * Set Disable the Animal detail page Adoption Information link
     *
     * @param string $disableAnimalDetailPageAdoptionInfoLink
     * @return $this
     */
    public function setDisableAnimalDetailPageAdoptionInfoLink($disableAnimalDetailPageAdoptionInfoLink)
    {
        $this->disableAnimalDetailPageAdoptionInfoLink = $disableAnimalDetailPageAdoptionInfoLink;

        return $this;
    }

    /**
     * Set Disable the Animal detail page Adoption Information link on courtesy animals
     *
     * @param string $disableAnimalDetailPageAdoptionInfoLinkCourtesy
     * @return $this
     */
    public function setDisableAnimalDetailPageAdoptionInfoLinkCourtesy($disableAnimalDetailPageAdoptionInfoLinkCourtesy)
    {
        $this->disableAnimalDetailPageAdoptionInfoLinkCourtesy = $disableAnimalDetailPageAdoptionInfoLinkCourtesy;

        return $this;
    }

    /**
     * Set Show DogTime content on the Animal detail page
     *
     * @param string $showAnimalDetailPageDogTimeContent
     * @return $this
     */
    public function setShowAnimalDetailPageDogTimeContent($showAnimalDetailPageDogTimeContent)
    {
        $this->showAnimalDetailPageDogTimeContent = $showAnimalDetailPageDogTimeContent;

        return $this;
    }

    /**
     * Set Show a link on the Animal detail page to Save-a-Dog or Save-a-Cat on DogTime
     *
     * @param string $showAnimalDetailPageDogTimeSaveaDog
     * @return $this
     */
    public function setShowAnimalDetailPageDogTimeSaveaDog($showAnimalDetailPageDogTimeSaveaDog)
    {
        $this->showAnimalDetailPageDogTimeSaveaDog = $showAnimalDetailPageDogTimeSaveaDog;

        return $this;
    }

    /**
     * Set How many Events to show on the Animal detail page
     *
     * @param string $setAnimalDetailPageEventsLimit
     * @return $this
     */
    public function setSetAnimalDetailPageEventsLimit($setAnimalDetailPageEventsLimit)
    {
        $this->setAnimalDetailPageEventsLimit = $setAnimalDetailPageEventsLimit;

        return $this;
    }

    /**
     * Set Show the Adopt Me sayings on the Animal detail page
     *
     * @param string $showAnimalDetailPageAdoptMeSayings
     * @return $this
     */
    public function setShowAnimalDetailPageAdoptMeSayings($showAnimalDetailPageAdoptMeSayings)
    {
        $this->showAnimalDetailPageAdoptMeSayings = $showAnimalDetailPageAdoptMeSayings;

        return $this;
    }

    /**
     * Set Disable the My Rescue box on the Animal detail page
     *
     * @param string $disableAnimalDetailPageMyRescue
     * @return $this
     */
    public function setDisableAnimalDetailPageMyRescue($disableAnimalDetailPageMyRescue)
    {
        $this->disableAnimalDetailPageMyRescue = $disableAnimalDetailPageMyRescue;

        return $this;
    }

    /**
     * Set Disable the link to the Petbond Animal adoption flyer
     *
     * @param string $disableAnimalFlyer
     * @return $this
     */
    public function setDisableAnimalFlyer($disableAnimalFlyer)
    {
        $this->disableAnimalFlyer = $disableAnimalFlyer;

        return $this;
    }

    /**
     * Set Disable the Animal favorite count
     *
     * @param string $disableAnimalFavoriteCount
     * @return $this
     */
    public function setDisableAnimalFavoriteCount($disableAnimalFavoriteCount)
    {
        $this->disableAnimalFavoriteCount = $disableAnimalFavoriteCount;

        return $this;
    }

    /**
     * Set Disable public access to the Animal successes
     *
     * @param string $disableAnimalSuccessesPublic
     * @return $this
     */
    public function setDisableAnimalSuccessesPublic($disableAnimalSuccessesPublic)
    {
        $this->disableAnimalSuccessesPublic = $disableAnimalSuccessesPublic;

        return $this;
    }

    /**
     * Set Disable Animal success stories
     *
     * @param string $disableAnimalStories
     * @return $this
     */
    public function setDisableAnimalStories($disableAnimalStories)
    {
        $this->disableAnimalStories = $disableAnimalStories;

        return $this;
    }

    /**
     * Set Show transferred Animals with successes
     *
     * @param string $showAnimalTransferredWithSuccesses
     * @return $this
     */
    public function setShowAnimalTransferredWithSuccesses($showAnimalTransferredWithSuccesses)
    {
        $this->showAnimalTransferredWithSuccesses = $showAnimalTransferredWithSuccesses;

        return $this;
    }

    /**
     * Set Show Animal links
     *
     * @param string $showAnimalLinks
     * @return $this
     */
    public function setShowAnimalLinks($showAnimalLinks)
    {
        $this->showAnimalLinks = $showAnimalLinks;

        return $this;
    }

    /**
     * Set Show Highlighted Animals on the Animal Home Page
     *
     * @param string $showAnimalHomePageHighlighted
     * @return $this
     */
    public function setShowAnimalHomePageHighlighted($showAnimalHomePageHighlighted)
    {
        $this->showAnimalHomePageHighlighted = $showAnimalHomePageHighlighted;

        return $this;
    }

    /**
     * Set Set the Animal image border
     *
     * @param string $enableAnimalImageBorder
     * @return $this
     */
    public function setEnableAnimalImageBorder($enableAnimalImageBorder)
    {
        $this->enableAnimalImageBorder = $enableAnimalImageBorder;

        return $this;
    }

    /**
     * Set Set the Animal image border style
     *
     * @param string $setAnimalImageBorderStyle
     * @return $this
     */
    public function setSetAnimalImageBorderStyle($setAnimalImageBorderStyle)
    {
        $this->setAnimalImageBorderStyle = $setAnimalImageBorderStyle;

        return $this;
    }

    /**
     * Set Set the Animal image border color
     *
     * @param string $setAnimalImageBorderColor
     * @return $this
     */
    public function setSetAnimalImageBorderColor($setAnimalImageBorderColor)
    {
        $this->setAnimalImageBorderColor = $setAnimalImageBorderColor;

        return $this;
    }

    /**
     * Set Set the Animal image matte color
     *
     * @param string $setAnimalImageMatteColor
     * @return $this
     */
    public function setSetAnimalImageMatteColor($setAnimalImageMatteColor)
    {
        $this->setAnimalImageMatteColor = $setAnimalImageMatteColor;

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
     * Set Automatically print the Animal Kennel Card
     *
     * @param string $enableAnimalKennelcardPrintAuto
     * @return $this
     */
    public function setEnableAnimalKennelcardPrintAuto($enableAnimalKennelcardPrintAuto)
    {
        $this->enableAnimalKennelcardPrintAuto = $enableAnimalKennelcardPrintAuto;

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
     * Set Disable the message that animal ages are best estimates
     *
     * @param string $disableAnimalAgeBestEstimate
     * @return $this
     */
    public function setDisableAnimalAgeBestEstimate($disableAnimalAgeBestEstimate)
    {
        $this->disableAnimalAgeBestEstimate = $disableAnimalAgeBestEstimate;

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
        if ($this->enableWebsiteDown !== null) $parameterArray['enableWebsiteDown'] = $this->enableWebsiteDown;
        if ($this->disableWebsiteFavoriteEmails !== null) $parameterArray['disableWebsiteFavoriteEmails'] = $this->disableWebsiteFavoriteEmails;
        if ($this->enableWebsitePetfinderHomePageUpload !== null) $parameterArray['enableWebsitePetfinderHomePageUpload'] = $this->enableWebsitePetfinderHomePageUpload;
        if ($this->setWebsiteSlogan !== null) $parameterArray['setWebsiteSlogan'] = $this->setWebsiteSlogan;
        if ($this->setWebsiteMenuSource !== null) $parameterArray['setWebsiteMenuSource'] = $this->setWebsiteMenuSource;
        if ($this->setWebsiteIndexPageID !== null) $parameterArray['setWebsiteIndexPageID'] = $this->setWebsiteIndexPageID;
        if ($this->enableWebsiteFrontPageLogo !== null) $parameterArray['enableWebsiteFrontPageLogo'] = $this->enableWebsiteFrontPageLogo;
        if ($this->enableWebsiteFrontPageNews !== null) $parameterArray['enableWebsiteFrontPageNews'] = $this->enableWebsiteFrontPageNews;
        if ($this->enableWebsiteFrontPageEvents !== null) $parameterArray['enableWebsiteFrontPageEvents'] = $this->enableWebsiteFrontPageEvents;
        if ($this->enableWebsiteFrontPageHighlightedAnimals !== null) $parameterArray['enableWebsiteFrontPageHighlightedAnimals'] = $this->enableWebsiteFrontPageHighlightedAnimals;
        if ($this->setWebsiteFrontPageNumberOfHighlightedAnimals !== null) $parameterArray['setWebsiteFrontPageNumberOfHighlightedAnimals'] = $this->setWebsiteFrontPageNumberOfHighlightedAnimals;
        if ($this->setWebsiteFrontPageHighlightedAnimalsDescriptionLength !== null) $parameterArray['setWebsiteFrontPageHighlightedAnimalsDescriptionLength'] = $this->setWebsiteFrontPageHighlightedAnimalsDescriptionLength;
        if ($this->enableWebsiteRescueGroupsPoweredByImage !== null) $parameterArray['enableWebsiteRescueGroupsPoweredByImage'] = $this->enableWebsiteRescueGroupsPoweredByImage;
        if ($this->enableWebsiteMenuLogoutUsername !== null) $parameterArray['enableWebsiteMenuLogoutUsername'] = $this->enableWebsiteMenuLogoutUsername;
        if ($this->enableWebsiteLastUpdated !== null) $parameterArray['enableWebsiteLastUpdated'] = $this->enableWebsiteLastUpdated;
        if ($this->setWebsiteAnimalPictureMode !== null) $parameterArray['setWebsiteAnimalPictureMode'] = $this->setWebsiteAnimalPictureMode;
        if ($this->setWebsiteAnimalPictureAnimalID !== null) $parameterArray['setWebsiteAnimalPictureAnimalID'] = $this->setWebsiteAnimalPictureAnimalID;
        if ($this->enableWebsiteAnimalSearchBox !== null) $parameterArray['enableWebsiteAnimalSearchBox'] = $this->enableWebsiteAnimalSearchBox;
        if ($this->enableWebsiteSideBarAddress !== null) $parameterArray['enableWebsiteSideBarAddress'] = $this->enableWebsiteSideBarAddress;
        if ($this->enableWebsiteEmailFriend !== null) $parameterArray['enableWebsiteEmailFriend'] = $this->enableWebsiteEmailFriend;
        if ($this->enableWebsiteShareButton !== null) $parameterArray['enableWebsiteShareButton'] = $this->enableWebsiteShareButton;
        if ($this->enableWebsiteSparky !== null) $parameterArray['enableWebsiteSparky'] = $this->enableWebsiteSparky;
        if ($this->setWebsiteSideBarWidth !== null) $parameterArray['setWebsiteSideBarWidth'] = $this->setWebsiteSideBarWidth;
        if ($this->enableWebsiteLogo !== null) $parameterArray['enableWebsiteLogo'] = $this->enableWebsiteLogo;
        if ($this->setWebsiteBackgroundImageID !== null) $parameterArray['setWebsiteBackgroundImageID'] = $this->setWebsiteBackgroundImageID;
        if ($this->enableAnimalMeet !== null) $parameterArray['enableAnimalMeet'] = $this->enableAnimalMeet;
        if ($this->enableWebsiteContactUsForm !== null) $parameterArray['enableWebsiteContactUsForm'] = $this->enableWebsiteContactUsForm;
        if ($this->setWebsiteAnimalBrowseLayout !== null) $parameterArray['setWebsiteAnimalBrowseLayout'] = $this->setWebsiteAnimalBrowseLayout;
        if ($this->setWebsiteAnimalBrowsePanelWidth !== null) $parameterArray['setWebsiteAnimalBrowsePanelWidth'] = $this->setWebsiteAnimalBrowsePanelWidth;
        if ($this->setWebsiteAnimalBrowsePanelColumns !== null) $parameterArray['setWebsiteAnimalBrowsePanelColumns'] = $this->setWebsiteAnimalBrowsePanelColumns;
        if ($this->setWebsiteAnimalBrowseAnimalsPerPage !== null) $parameterArray['setWebsiteAnimalBrowseAnimalsPerPage'] = $this->setWebsiteAnimalBrowseAnimalsPerPage;
        if ($this->setWebsiteAnimalBrowseLimit !== null) $parameterArray['setWebsiteAnimalBrowseLimit'] = $this->setWebsiteAnimalBrowseLimit;
        if ($this->disableWebsiteAnimalBrowseCourtesyListings !== null) $parameterArray['disableWebsiteAnimalBrowseCourtesyListings'] = $this->disableWebsiteAnimalBrowseCourtesyListings;
        if ($this->showWebsiteAnimalBrowseSponsorshipLink !== null) $parameterArray['showWebsiteAnimalBrowseSponsorshipLink'] = $this->showWebsiteAnimalBrowseSponsorshipLink;
        if ($this->setWebsiteAnimalBrowseDescriptionLength !== null) $parameterArray['setWebsiteAnimalBrowseDescriptionLength'] = $this->setWebsiteAnimalBrowseDescriptionLength;
        if ($this->setWebsiteAnimalBrowseFields !== null) $parameterArray['setWebsiteAnimalBrowseFields'] = $this->setWebsiteAnimalBrowseFields;
        if ($this->enableAnimalAdoptions !== null) $parameterArray['enableAnimalAdoptions'] = $this->enableAnimalAdoptions;
        if ($this->setAnimalDetailPageStyle !== null) $parameterArray['setAnimalDetailPageStyle'] = $this->setAnimalDetailPageStyle;
        if ($this->enableAnimalDetailPagePopover !== null) $parameterArray['enableAnimalDetailPagePopover'] = $this->enableAnimalDetailPagePopover;
        if ($this->enableAnimalDetailPageShareButton !== null) $parameterArray['enableAnimalDetailPageShareButton'] = $this->enableAnimalDetailPageShareButton;
        if ($this->disableAnimalDetailPageAdoptionInfoLink !== null) $parameterArray['disableAnimalDetailPageAdoptionInfoLink'] = $this->disableAnimalDetailPageAdoptionInfoLink;
        if ($this->disableAnimalDetailPageAdoptionInfoLinkCourtesy !== null) $parameterArray['disableAnimalDetailPageAdoptionInfoLinkCourtesy'] = $this->disableAnimalDetailPageAdoptionInfoLinkCourtesy;
        if ($this->showAnimalDetailPageDogTimeContent !== null) $parameterArray['showAnimalDetailPageDogTimeContent'] = $this->showAnimalDetailPageDogTimeContent;
        if ($this->showAnimalDetailPageDogTimeSaveaDog !== null) $parameterArray['showAnimalDetailPageDogTimeSaveaDog'] = $this->showAnimalDetailPageDogTimeSaveaDog;
        if ($this->setAnimalDetailPageEventsLimit !== null) $parameterArray['setAnimalDetailPageEventsLimit'] = $this->setAnimalDetailPageEventsLimit;
        if ($this->showAnimalDetailPageAdoptMeSayings !== null) $parameterArray['showAnimalDetailPageAdoptMeSayings'] = $this->showAnimalDetailPageAdoptMeSayings;
        if ($this->disableAnimalDetailPageMyRescue !== null) $parameterArray['disableAnimalDetailPageMyRescue'] = $this->disableAnimalDetailPageMyRescue;
        if ($this->disableAnimalFlyer !== null) $parameterArray['disableAnimalFlyer'] = $this->disableAnimalFlyer;
        if ($this->disableAnimalFavoriteCount !== null) $parameterArray['disableAnimalFavoriteCount'] = $this->disableAnimalFavoriteCount;
        if ($this->disableAnimalSuccessesPublic !== null) $parameterArray['disableAnimalSuccessesPublic'] = $this->disableAnimalSuccessesPublic;
        if ($this->disableAnimalStories !== null) $parameterArray['disableAnimalStories'] = $this->disableAnimalStories;
        if ($this->showAnimalTransferredWithSuccesses !== null) $parameterArray['showAnimalTransferredWithSuccesses'] = $this->showAnimalTransferredWithSuccesses;
        if ($this->showAnimalLinks !== null) $parameterArray['showAnimalLinks'] = $this->showAnimalLinks;
        if ($this->showAnimalHomePageHighlighted !== null) $parameterArray['showAnimalHomePageHighlighted'] = $this->showAnimalHomePageHighlighted;
        if ($this->enableAnimalImageBorder !== null) $parameterArray['enableAnimalImageBorder'] = $this->enableAnimalImageBorder;
        if ($this->setAnimalImageBorderStyle !== null) $parameterArray['setAnimalImageBorderStyle'] = $this->setAnimalImageBorderStyle;
        if ($this->setAnimalImageBorderColor !== null) $parameterArray['setAnimalImageBorderColor'] = $this->setAnimalImageBorderColor;
        if ($this->setAnimalImageMatteColor !== null) $parameterArray['setAnimalImageMatteColor'] = $this->setAnimalImageMatteColor;
        if ($this->disableAnimalDescriptionVideo !== null) $parameterArray['disableAnimalDescriptionVideo'] = $this->disableAnimalDescriptionVideo;
        if ($this->enableAnimalDescriptionVideoLink !== null) $parameterArray['enableAnimalDescriptionVideoLink'] = $this->enableAnimalDescriptionVideoLink;
        if ($this->enableAnimalKennelcardPrintAuto !== null) $parameterArray['enableAnimalKennelcardPrintAuto'] = $this->enableAnimalKennelcardPrintAuto;
        if ($this->showAnimalKennelcardJournalEntries !== null) $parameterArray['showAnimalKennelcardJournalEntries'] = $this->showAnimalKennelcardJournalEntries;
        if ($this->showAnimalKennelcardJournalCost !== null) $parameterArray['showAnimalKennelcardJournalCost'] = $this->showAnimalKennelcardJournalCost;
        if ($this->disableAnimalAgeBestEstimate !== null) $parameterArray['disableAnimalAgeBestEstimate'] = $this->disableAnimalAgeBestEstimate;

    }
}