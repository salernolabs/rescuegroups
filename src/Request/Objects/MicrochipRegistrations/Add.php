<?php
/**
 * MicrochipRegistrations Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\MicrochipRegistrations;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "microchipRegistrationAnimalID" => 1,
        "microchipRegistrationMicrochipNumber" => 1,
        "microchipRegistrationMicrochipVendor" => 1,
        "microchipRegistrationRegistry" => 1,
        "microchipRegistrationRegistrantFirstname" => 1,
        "microchipRegistrationRegistrantLastname" => 1,
        "microchipRegistrationRegistrantAddress" => 1,
        "microchipRegistrationRegistrantCity" => 1,
        "microchipRegistrationRegistrantState" => 1,
        "microchipRegistrationRegistrantPostalcode" => 1,
        "microchipRegistrationRegistrantCountry" => 1,
        "microchipRegistrationRegistrantPrimaryPhone" => 1,
        "microchipRegistrationRegistrantSecondaryPhone" => 0,
        "microchipRegistrationRegistrantPrimaryEmail" => 1,
        "microchipRegistrationRegistrantSecondaryEmail" => 0,
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
        return 'microchipRegistrations';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\MicrochipRegistration[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\MicrochipRegistration($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\MicrochipRegistration($data)];
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