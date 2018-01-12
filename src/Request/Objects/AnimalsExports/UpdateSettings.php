<?php
/**
 * AnimalsExports UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsExports;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "disableAnimalExportAdopted" => 0,
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
        return 'animalsExports';
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