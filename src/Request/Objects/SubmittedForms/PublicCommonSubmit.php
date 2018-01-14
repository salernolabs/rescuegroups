<?php
/**
 * SubmittedForms PublicCommonSubmit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\SubmittedForms;

class PublicCommonSubmit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "submittedformAnimalID" => 1,
        "submitterSalutation" => 0,
        "submitterFirstname" => 1,
        "submitterLastname" => 1,
        "submitterAddress" => 1,
        "submitterCity" => 1,
        "submitterState" => 1,
        "submitterPostalcode" => 1,
        "submitterPlus4" => 0,
        "submitterCounty" => 0,
        "submitterCountry" => 0,
        "submitterPhoneHome" => 1,
        "submitterPhoneWork" => 0,
        "submitterPhoneWorkExt" => 0,
        "submitterPhoneCell" => 0,
        "submitterFax" => 0,
        "submitterEmail" => 1,
        "submitterEmailAlt" => 0,
        "submitterEmailPager" => 0,
        "submitterReferredBy" => 0,
        "submittedformAnswers" => 1,
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
        return 'submittedforms';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicCommonSubmit';
    }

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\SubmittedForm[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\SubmittedForm($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\SubmittedForm($data)];
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