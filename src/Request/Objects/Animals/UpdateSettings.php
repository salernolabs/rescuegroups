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
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "enableAnimalsSpecialListBabies" => 0,
        "setAnimalsSpecialListBabiesYoungest" => 0,
        "setAnimalsSpecialListBabiesOldest" => 0,
        "enableAnimalsSpecialListTeens" => 0,
        "setAnimalsSpecialListTeensYoungest" => 0,
        "setAnimalsSpecialListTeensOldest" => 0,
        "enableAnimalsSpecialListAdults" => 0,
        "setAnimalsSpecialListAdultsYoungest" => 0,
        "setAnimalsSpecialListAdultsOldest" => 0,
        "enableAnimalsSpecialListSeniors" => 0,
        "setAnimalsSpecialListSeniorsYoungest" => 0,
        "enableAnimalsSpecialListLongtime" => 0,
        "setAnimalsSpecialListLongtimeYoungest" => 0,
        "setAnimalsSpecialListLongtimeOldest" => 0,
        "enableAnimalsSpecialListRecent" => 0,
        "setAnimalsSpecialListRecentDays" => 0,
        "enableAnimalsSpecialListSpecialNeeds" => 0,
        "enableAnimalsSpecialListUrgent" => 0,
        "enableAnimalsSpecialListFoster" => 0,
        "enableAnimalsSpecialListCourtesy" => 0,
        "enableAnimalAutoRescueID" => 0,
        "setAnimalAutoRescueIDFormat" => 0,
        "disableAnimalAutoRescueIDCourtesyListings" => 0,
        "enablePortalWebsite" => 0,
        "showAnimalMicrochip" => 0,
        "showAnimalAltered" => 0,
        "showAnimalWillBeAltered" => 0,
        "showAnimalRescueID" => 0,
        "showAnimalAdoptionFee" => 0,
        "showAnimalEuthanasiaInfo" => 0,
        "disableAnimalCourtesyHeaderFooter" => 0,
        "showAnimalKennelcardJournalEntries" => 0,
        "showAnimalKennelcardJournalCost" => 0,
        "disableAnimalExportAdopted" => 0,
        "enableExportAdoptedToAdoptapet" => 0,
        "disableAnimalExportCourtesy" => 0,
        "disableAnimalExportAnimalWebPageLink" => 0,
        "disableAnimalExportWebsiteLink" => 0,
        "disableAnimalExportAdoptionFormLink" => 0,
        "enableAnimalExportDescriptionHeader" => 0,
        "enableAnimalExportDescriptionFooter" => 0,
        "enableAnimalExportUniqueAnimalID" => 0,
        "enableAnimalExportContactFieldFirstname" => 0,
        "enableAnimalExportContactFieldLastname" => 0,
        "enableAnimalExportContactFieldEmail" => 0,
        "enableAnimalExportContactFieldPhoneHome" => 0,
        "enableAnimalExportContactFieldPhoneCell" => 0,
        "setAnimalExportYouTubeAccount" => 0,
        "setAnimalExportYouTubeAuthorizationCode" => 0,
        "setAnimalExportDefaultCategory1" => 0,
        "setAnimalExportDefaultCategory4" => 0,
        "setAnimalExportDefaultCategory3" => 0,
        "setAnimalExportDefaultCategory2" => 0,
        "setAnimalExportDefaultCategory5" => 0,
        "setAnimalExportDefaultCategory6" => 0,
        "setAnimalExportDefaultCategory8" => 0,
        "setAnimalExportDefaultCategory7" => 0,
        "setAnimalExportDefaultCategory13" => 0,
        "setAnimalExportDefaultCategory9" => 0,
        "setAnimalExportDefaultCategory11" => 0,
        "setAnimalExportDefaultCategory10" => 0,
        "setAnimalExportDefaultCategory12" => 0,
        "disableAnimalDescriptionVideo" => 0,
        "enableAnimalDescriptionVideoLink" => 0,
        "enableFreePetChipRegistry" => 0,
        "setFreePetChipRegistryUserName" => 0,
        "enablePetLinkRegistry" => 0,
        "setPetLinkUserName" => 0,
        "setPetLinkPassword" => 0,
        "disableMicrochipUserAlert" => 0,
        "setMicrochipAlertEmails" => 0,
    ];


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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {

    }

}