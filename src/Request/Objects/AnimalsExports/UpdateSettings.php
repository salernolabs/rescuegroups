<?php
/**
 * AnimalsExports UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsExports;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\AnimalsExport[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\AnimalsExport($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\AnimalsExport($data)];
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