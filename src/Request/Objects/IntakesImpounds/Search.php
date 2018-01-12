<?php
/**
 * IntakesImpounds Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesImpounds;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesImpoundID" => 0,
        "intakesImpoundAnimalID" => 0,
        "intakesImpoundAnimalConditionID" => 0,
        "intakesImpoundDate" => 0,
        "intakesImpoundNotes" => 0,
        "intakesImpoundLocation" => 0,
        "intakesImpoundAddress" => 0,
        "intakesImpoundCity" => 0,
        "intakesImpoundState" => 0,
        "intakesImpoundPostalcode" => 0,
        "intakesImpoundFromID" => 0,
        "intakesImpoundStaffID" => 0,
        "intakesImpoundReasonID" => 0,
        "animalName" => 0,
        "animalConditionName" => 0,
        "impoundFromName" => 0,
        "impoundStaffName" => 0,
        "impoundReason" => 0,
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
        return 'intakesImpounds';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'search';
    }

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\IntakesImpound[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesImpound($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesImpound($data)];
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