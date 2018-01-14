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
     *
     * @var string
     */
    private $enableWebsiteDown = null;

    /**
     * Disable user email alerts for Favorite Animals and Breeds
     *
     * @var string
     */
    private $disableWebsiteFavoriteEmails = null;

    /**
     * Upload website home page as Petfinder web page
     *
     * @var string
     */
    private $enableWebsitePetfinderHomePageUpload = null;

    /**
     * Website slogan
     *
     * @var string
     */
    private $setWebsiteSlogan = null;

    /**
     * Website menu source
     *
     * @var integer
     */
    private $setWebsiteMenuSource = null;

    /**
     * Custom front page
     *
     * @var integer
     */
    private $setWebsiteIndexPageID = null;

    /**
     * Display Logo on front page
     *
     * @var string
     */
    private $enableWebsiteFrontPageLogo = null;

    /**
     * Show the latest News articles on the front page
     *
     * @var string
     */
    private $enableWebsiteFrontPageNews = null;

    /**
     * Show upcoming Events on the front page
     *
     * @var string
     */
    private $enableWebsiteFrontPageEvents = null;

    /**
     * Show highlighted animals on the front page
     *
     * @var string
     */
    private $enableWebsiteFrontPageHighlightedAnimals = null;

    /**
     * Number of highlighted animals to show on the front page
     *
     * @var string
     */
    private $setWebsiteFrontPageNumberOfHighlightedAnimals = null;

    /**
     * Amount of highlighted animals' description to show on the front page
     *
     * @var string
     */
    private $setWebsiteFrontPageHighlightedAnimalsDescriptionLength = null;

    /**
     * Show the Powered by RescueGroups.org image
     *
     * @var string
     */
    private $enableWebsiteRescueGroupsPoweredByImage = null;

    /**
     * Show the user name on the menu next to the Logout option
     *
     * @var string
     */
    private $enableWebsiteMenuLogoutUsername = null;

    /**
     * Show the date/time the website was last updated
     *
     * @var string
     */
    private $enableWebsiteLastUpdated = null;

    /**
     * Set the animal picture mode
     *
     * @var string
     */
    private $setWebsiteAnimalPictureMode = null;

    /**
     * Select the animal for the Featured animal picture
     *
     * @var integer
     */
    private $setWebsiteAnimalPictureAnimalID = null;

    /**
     * Show the animal seach box
     *
     * @var string
     */
    private $enableWebsiteAnimalSearchBox = null;

    /**
     * Show mailing address on the side bar
     *
     * @var string
     */
    private $enableWebsiteSideBarAddress = null;

    /**
     * Show Email Page to a Friend
     *
     * @var string
     */
    private $enableWebsiteEmailFriend = null;

    /**
     * Show share button
     *
     * @var string
     */
    private $enableWebsiteShareButton = null;

    /**
     * Show the DogTime Sparky widget
     *
     * @var string
     */
    private $enableWebsiteSparky = null;

    /**
     * Set the side bar width
     *
     * @var string
     */
    private $setWebsiteSideBarWidth = null;

    /**
     * Show logo
     *
     * @var string
     */
    private $enableWebsiteLogo = null;

    /**
     * Set the background image
     *
     * @var integer
     */
    private $setWebsiteBackgroundImageID = null;

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
    private $enableWebsiteContactUsForm = null;

    /**
     * Animal Browse page layout
     *
     * @var string
     */
    private $setWebsiteAnimalBrowseLayout = null;

    /**
     * Set the animal browse panel width
     *
     * @var string
     */
    private $setWebsiteAnimalBrowsePanelWidth = null;

    /**
     * Animal Browse page columns
     *
     * @var string
     */
    private $setWebsiteAnimalBrowsePanelColumns = null;

    /**
     * Animal Browse page number of animals
     *
     * @var string
     */
    private $setWebsiteAnimalBrowseAnimalsPerPage = null;

    /**
     * Animal limit
     *
     * @var string
     */
    private $setWebsiteAnimalBrowseLimit = null;

    /**
     * Hide courtesy listings on browse/list page
     *
     * @var string
     */
    private $disableWebsiteAnimalBrowseCourtesyListings = null;

    /**
     * Show sponsorship link on the browse page
     *
     * @var string
     */
    private $showWebsiteAnimalBrowseSponsorshipLink = null;

    /**
     * How much of each animal's description to display
     *
     * @var string
     */
    private $setWebsiteAnimalBrowseDescriptionLength = null;

    /**
     * setWebsiteAnimalBrowseFields
     *
     * @var string
     */
    private $setWebsiteAnimalBrowseFields = null;

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
    public function setEnableWebsiteDown($value)
    {
        $this->enableWebsiteDown = $value;

        return $this;
    }

    /**
     * Set Disable user email alerts for Favorite Animals and Breeds
     *
     * @param string $value
     * @return $this
     */
    public function setDisableWebsiteFavoriteEmails($value)
    {
        $this->disableWebsiteFavoriteEmails = $value;

        return $this;
    }

    /**
     * Set Upload website home page as Petfinder web page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsitePetfinderHomePageUpload($value)
    {
        $this->enableWebsitePetfinderHomePageUpload = $value;

        return $this;
    }

    /**
     * Set Website slogan
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteSlogan($value)
    {
        $this->setWebsiteSlogan = $value;

        return $this;
    }

    /**
     * Set Website menu source
     *
     * @param integer $value
     * @return $this
     */
    public function setSetWebsiteMenuSource($value)
    {
        $this->setWebsiteMenuSource = $value;

        return $this;
    }

    /**
     * Set Custom front page
     *
     * @param integer $value
     * @return $this
     */
    public function setSetWebsiteIndexPageID($value)
    {
        $this->setWebsiteIndexPageID = $value;

        return $this;
    }

    /**
     * Set Display Logo on front page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteFrontPageLogo($value)
    {
        $this->enableWebsiteFrontPageLogo = $value;

        return $this;
    }

    /**
     * Set Show the latest News articles on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteFrontPageNews($value)
    {
        $this->enableWebsiteFrontPageNews = $value;

        return $this;
    }

    /**
     * Set Show upcoming Events on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteFrontPageEvents($value)
    {
        $this->enableWebsiteFrontPageEvents = $value;

        return $this;
    }

    /**
     * Set Show highlighted animals on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteFrontPageHighlightedAnimals($value)
    {
        $this->enableWebsiteFrontPageHighlightedAnimals = $value;

        return $this;
    }

    /**
     * Set Number of highlighted animals to show on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteFrontPageNumberOfHighlightedAnimals($value)
    {
        $this->setWebsiteFrontPageNumberOfHighlightedAnimals = $value;

        return $this;
    }

    /**
     * Set Amount of highlighted animals' description to show on the front page
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteFrontPageHighlightedAnimalsDescriptionLength($value)
    {
        $this->setWebsiteFrontPageHighlightedAnimalsDescriptionLength = $value;

        return $this;
    }

    /**
     * Set Show the Powered by RescueGroups.org image
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteRescueGroupsPoweredByImage($value)
    {
        $this->enableWebsiteRescueGroupsPoweredByImage = $value;

        return $this;
    }

    /**
     * Set Show the user name on the menu next to the Logout option
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteMenuLogoutUsername($value)
    {
        $this->enableWebsiteMenuLogoutUsername = $value;

        return $this;
    }

    /**
     * Set Show the date/time the website was last updated
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteLastUpdated($value)
    {
        $this->enableWebsiteLastUpdated = $value;

        return $this;
    }

    /**
     * Set Set the animal picture mode
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteAnimalPictureMode($value)
    {
        $this->setWebsiteAnimalPictureMode = $value;

        return $this;
    }

    /**
     * Set Select the animal for the Featured animal picture
     *
     * @param integer $value
     * @return $this
     */
    public function setSetWebsiteAnimalPictureAnimalID($value)
    {
        $this->setWebsiteAnimalPictureAnimalID = $value;

        return $this;
    }

    /**
     * Set Show the animal seach box
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteAnimalSearchBox($value)
    {
        $this->enableWebsiteAnimalSearchBox = $value;

        return $this;
    }

    /**
     * Set Show mailing address on the side bar
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteSideBarAddress($value)
    {
        $this->enableWebsiteSideBarAddress = $value;

        return $this;
    }

    /**
     * Set Show Email Page to a Friend
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteEmailFriend($value)
    {
        $this->enableWebsiteEmailFriend = $value;

        return $this;
    }

    /**
     * Set Show share button
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteShareButton($value)
    {
        $this->enableWebsiteShareButton = $value;

        return $this;
    }

    /**
     * Set Show the DogTime Sparky widget
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteSparky($value)
    {
        $this->enableWebsiteSparky = $value;

        return $this;
    }

    /**
     * Set Set the side bar width
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteSideBarWidth($value)
    {
        $this->setWebsiteSideBarWidth = $value;

        return $this;
    }

    /**
     * Set Show logo
     *
     * @param string $value
     * @return $this
     */
    public function setEnableWebsiteLogo($value)
    {
        $this->enableWebsiteLogo = $value;

        return $this;
    }

    /**
     * Set Set the background image
     *
     * @param integer $value
     * @return $this
     */
    public function setSetWebsiteBackgroundImageID($value)
    {
        $this->setWebsiteBackgroundImageID = $value;

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
    public function setEnableWebsiteContactUsForm($value)
    {
        $this->enableWebsiteContactUsForm = $value;

        return $this;
    }

    /**
     * Set Animal Browse page layout
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseLayout($value)
    {
        $this->setWebsiteAnimalBrowseLayout = $value;

        return $this;
    }

    /**
     * Set Set the animal browse panel width
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteAnimalBrowsePanelWidth($value)
    {
        $this->setWebsiteAnimalBrowsePanelWidth = $value;

        return $this;
    }

    /**
     * Set Animal Browse page columns
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteAnimalBrowsePanelColumns($value)
    {
        $this->setWebsiteAnimalBrowsePanelColumns = $value;

        return $this;
    }

    /**
     * Set Animal Browse page number of animals
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseAnimalsPerPage($value)
    {
        $this->setWebsiteAnimalBrowseAnimalsPerPage = $value;

        return $this;
    }

    /**
     * Set Animal limit
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseLimit($value)
    {
        $this->setWebsiteAnimalBrowseLimit = $value;

        return $this;
    }

    /**
     * Set Hide courtesy listings on browse/list page
     *
     * @param string $value
     * @return $this
     */
    public function setDisableWebsiteAnimalBrowseCourtesyListings($value)
    {
        $this->disableWebsiteAnimalBrowseCourtesyListings = $value;

        return $this;
    }

    /**
     * Set Show sponsorship link on the browse page
     *
     * @param string $value
     * @return $this
     */
    public function setShowWebsiteAnimalBrowseSponsorshipLink($value)
    {
        $this->showWebsiteAnimalBrowseSponsorshipLink = $value;

        return $this;
    }

    /**
     * Set How much of each animal's description to display
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseDescriptionLength($value)
    {
        $this->setWebsiteAnimalBrowseDescriptionLength = $value;

        return $this;
    }

    /**
     * Set setWebsiteAnimalBrowseFields
     *
     * @param string $value
     * @return $this
     */
    public function setSetWebsiteAnimalBrowseFields($value)
    {
        $this->setWebsiteAnimalBrowseFields = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->enableWebsiteDown !== null) $parameterArray['values'][] = ["enableWebsiteDown"=>$this->enableWebsiteDown];
        if ($this->disableWebsiteFavoriteEmails !== null) $parameterArray['values'][] = ["disableWebsiteFavoriteEmails"=>$this->disableWebsiteFavoriteEmails];
        if ($this->enableWebsitePetfinderHomePageUpload !== null) $parameterArray['values'][] = ["enableWebsitePetfinderHomePageUpload"=>$this->enableWebsitePetfinderHomePageUpload];
        if ($this->setWebsiteSlogan !== null) $parameterArray['values'][] = ["setWebsiteSlogan"=>$this->setWebsiteSlogan];
        if ($this->setWebsiteMenuSource !== null) $parameterArray['values'][] = ["setWebsiteMenuSource"=>$this->setWebsiteMenuSource];
        if ($this->setWebsiteIndexPageID !== null) $parameterArray['values'][] = ["setWebsiteIndexPageID"=>$this->setWebsiteIndexPageID];
        if ($this->enableWebsiteFrontPageLogo !== null) $parameterArray['values'][] = ["enableWebsiteFrontPageLogo"=>$this->enableWebsiteFrontPageLogo];
        if ($this->enableWebsiteFrontPageNews !== null) $parameterArray['values'][] = ["enableWebsiteFrontPageNews"=>$this->enableWebsiteFrontPageNews];
        if ($this->enableWebsiteFrontPageEvents !== null) $parameterArray['values'][] = ["enableWebsiteFrontPageEvents"=>$this->enableWebsiteFrontPageEvents];
        if ($this->enableWebsiteFrontPageHighlightedAnimals !== null) $parameterArray['values'][] = ["enableWebsiteFrontPageHighlightedAnimals"=>$this->enableWebsiteFrontPageHighlightedAnimals];
        if ($this->setWebsiteFrontPageNumberOfHighlightedAnimals !== null) $parameterArray['values'][] = ["setWebsiteFrontPageNumberOfHighlightedAnimals"=>$this->setWebsiteFrontPageNumberOfHighlightedAnimals];
        if ($this->setWebsiteFrontPageHighlightedAnimalsDescriptionLength !== null) $parameterArray['values'][] = ["setWebsiteFrontPageHighlightedAnimalsDescriptionLength"=>$this->setWebsiteFrontPageHighlightedAnimalsDescriptionLength];
        if ($this->enableWebsiteRescueGroupsPoweredByImage !== null) $parameterArray['values'][] = ["enableWebsiteRescueGroupsPoweredByImage"=>$this->enableWebsiteRescueGroupsPoweredByImage];
        if ($this->enableWebsiteMenuLogoutUsername !== null) $parameterArray['values'][] = ["enableWebsiteMenuLogoutUsername"=>$this->enableWebsiteMenuLogoutUsername];
        if ($this->enableWebsiteLastUpdated !== null) $parameterArray['values'][] = ["enableWebsiteLastUpdated"=>$this->enableWebsiteLastUpdated];
        if ($this->setWebsiteAnimalPictureMode !== null) $parameterArray['values'][] = ["setWebsiteAnimalPictureMode"=>$this->setWebsiteAnimalPictureMode];
        if ($this->setWebsiteAnimalPictureAnimalID !== null) $parameterArray['values'][] = ["setWebsiteAnimalPictureAnimalID"=>$this->setWebsiteAnimalPictureAnimalID];
        if ($this->enableWebsiteAnimalSearchBox !== null) $parameterArray['values'][] = ["enableWebsiteAnimalSearchBox"=>$this->enableWebsiteAnimalSearchBox];
        if ($this->enableWebsiteSideBarAddress !== null) $parameterArray['values'][] = ["enableWebsiteSideBarAddress"=>$this->enableWebsiteSideBarAddress];
        if ($this->enableWebsiteEmailFriend !== null) $parameterArray['values'][] = ["enableWebsiteEmailFriend"=>$this->enableWebsiteEmailFriend];
        if ($this->enableWebsiteShareButton !== null) $parameterArray['values'][] = ["enableWebsiteShareButton"=>$this->enableWebsiteShareButton];
        if ($this->enableWebsiteSparky !== null) $parameterArray['values'][] = ["enableWebsiteSparky"=>$this->enableWebsiteSparky];
        if ($this->setWebsiteSideBarWidth !== null) $parameterArray['values'][] = ["setWebsiteSideBarWidth"=>$this->setWebsiteSideBarWidth];
        if ($this->enableWebsiteLogo !== null) $parameterArray['values'][] = ["enableWebsiteLogo"=>$this->enableWebsiteLogo];
        if ($this->setWebsiteBackgroundImageID !== null) $parameterArray['values'][] = ["setWebsiteBackgroundImageID"=>$this->setWebsiteBackgroundImageID];
        if ($this->enableAnimalMeet !== null) $parameterArray['values'][] = ["enableAnimalMeet"=>$this->enableAnimalMeet];
        if ($this->enableWebsiteContactUsForm !== null) $parameterArray['values'][] = ["enableWebsiteContactUsForm"=>$this->enableWebsiteContactUsForm];
        if ($this->setWebsiteAnimalBrowseLayout !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseLayout"=>$this->setWebsiteAnimalBrowseLayout];
        if ($this->setWebsiteAnimalBrowsePanelWidth !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowsePanelWidth"=>$this->setWebsiteAnimalBrowsePanelWidth];
        if ($this->setWebsiteAnimalBrowsePanelColumns !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowsePanelColumns"=>$this->setWebsiteAnimalBrowsePanelColumns];
        if ($this->setWebsiteAnimalBrowseAnimalsPerPage !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseAnimalsPerPage"=>$this->setWebsiteAnimalBrowseAnimalsPerPage];
        if ($this->setWebsiteAnimalBrowseLimit !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseLimit"=>$this->setWebsiteAnimalBrowseLimit];
        if ($this->disableWebsiteAnimalBrowseCourtesyListings !== null) $parameterArray['values'][] = ["disableWebsiteAnimalBrowseCourtesyListings"=>$this->disableWebsiteAnimalBrowseCourtesyListings];
        if ($this->showWebsiteAnimalBrowseSponsorshipLink !== null) $parameterArray['values'][] = ["showWebsiteAnimalBrowseSponsorshipLink"=>$this->showWebsiteAnimalBrowseSponsorshipLink];
        if ($this->setWebsiteAnimalBrowseDescriptionLength !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseDescriptionLength"=>$this->setWebsiteAnimalBrowseDescriptionLength];
        if ($this->setWebsiteAnimalBrowseFields !== null) $parameterArray['values'][] = ["setWebsiteAnimalBrowseFields"=>$this->setWebsiteAnimalBrowseFields];
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