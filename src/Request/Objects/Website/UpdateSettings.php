<?php
/**
 * Website UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Website;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "enableWebsiteDown" => 0,
        "disableWebsiteFavoriteEmails" => 0,
        "enableWebsitePetfinderHomePageUpload" => 0,
        "setWebsiteSlogan" => 0,
        "setWebsiteMenuSource" => 0,
        "setWebsiteIndexPageID" => 0,
        "enableWebsiteFrontPageLogo" => 0,
        "enableWebsiteFrontPageNews" => 0,
        "enableWebsiteFrontPageEvents" => 0,
        "enableWebsiteFrontPageHighlightedAnimals" => 0,
        "setWebsiteFrontPageNumberOfHighlightedAnimals" => 0,
        "setWebsiteFrontPageHighlightedAnimalsDescriptionLength" => 0,
        "enableWebsiteRescueGroupsPoweredByImage" => 0,
        "enableWebsiteMenuLogoutUsername" => 0,
        "enableWebsiteLastUpdated" => 0,
        "setWebsiteAnimalPictureMode" => 0,
        "setWebsiteAnimalPictureAnimalID" => 0,
        "enableWebsiteAnimalSearchBox" => 0,
        "enableWebsiteSideBarAddress" => 0,
        "enableWebsiteEmailFriend" => 0,
        "enableWebsiteShareButton" => 0,
        "enableWebsiteSparky" => 0,
        "setWebsiteSideBarWidth" => 0,
        "enableWebsiteLogo" => 0,
        "setWebsiteBackgroundImageID" => 0,
        "enableAnimalMeet" => 0,
        "enableWebsiteContactUsForm" => 0,
        "setWebsiteAnimalBrowseLayout" => 0,
        "setWebsiteAnimalBrowsePanelWidth" => 0,
        "setWebsiteAnimalBrowsePanelColumns" => 0,
        "setWebsiteAnimalBrowseAnimalsPerPage" => 0,
        "setWebsiteAnimalBrowseLimit" => 0,
        "disableWebsiteAnimalBrowseCourtesyListings" => 0,
        "showWebsiteAnimalBrowseSponsorshipLink" => 0,
        "setWebsiteAnimalBrowseDescriptionLength" => 0,
        "setWebsiteAnimalBrowseFields" => 0,
        "enableAnimalAdoptions" => 0,
        "setAnimalDetailPageStyle" => 0,
        "enableAnimalDetailPagePopover" => 0,
        "enableAnimalDetailPageShareButton" => 0,
        "disableAnimalDetailPageAdoptionInfoLink" => 0,
        "disableAnimalDetailPageAdoptionInfoLinkCourtesy" => 0,
        "showAnimalDetailPageDogTimeContent" => 0,
        "showAnimalDetailPageDogTimeSaveaDog" => 0,
        "setAnimalDetailPageEventsLimit" => 0,
        "showAnimalDetailPageAdoptMeSayings" => 0,
        "disableAnimalDetailPageMyRescue" => 0,
        "disableAnimalFlyer" => 0,
        "disableAnimalFavoriteCount" => 0,
        "disableAnimalSuccessesPublic" => 0,
        "disableAnimalStories" => 0,
        "showAnimalTransferredWithSuccesses" => 0,
        "showAnimalLinks" => 0,
        "showAnimalHomePageHighlighted" => 0,
        "enableAnimalImageBorder" => 0,
        "setAnimalImageBorderStyle" => 0,
        "setAnimalImageBorderColor" => 0,
        "setAnimalImageMatteColor" => 0,
        "disableAnimalDescriptionVideo" => 0,
        "enableAnimalDescriptionVideoLink" => 0,
        "enableAnimalKennelcardPrintAuto" => 0,
        "showAnimalKennelcardJournalEntries" => 0,
        "showAnimalKennelcardJournalCost" => 0,
        "disableAnimalAgeBestEstimate" => 0,
    ];

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
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Website[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Website($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Website($data)];
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        $this->addSearchParameters($parameterArray);
    }
}