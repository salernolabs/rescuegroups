<?php
/**
 * SubmittedForms Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\SubmittedForms;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "submittedformID" => 1,
        "submittedformFormID" => 0,
        "submittedformAnimalID" => 0,
        "submittedformAssignedTo" => 0,
        "submittedformAssignedToID" => 0,
        "submittedformCommentsCount" => 0,
        "submittedformCommentsInline" => 0,
        "submittedformCompleted" => 0,
        "submittedformUpdated" => 0,
        "submittedformFormName" => 0,
        "submittedformPending" => 0,
        "submittedformStatus" => 0,
        "submittedformStatusID" => 0,
        "submittedformAnswers" => 0,
        "submitterID" => 1,
        "submitterClass" => 0,
        "submitterSalutation" => 0,
        "submitterName" => 0,
        "submitterFirstname" => 0,
        "submitterLastname" => 0,
        "submitterTitle" => 0,
        "submitterAddress" => 0,
        "submitterCity" => 0,
        "submitterState" => 0,
        "submitterPostalcode" => 0,
        "submitterPlus4" => 0,
        "submitterCounty" => 0,
        "submitterCountry" => 0,
        "submitterPhoneHome" => 0,
        "submitterPhoneWork" => 0,
        "submitterPhoneWorkExt" => 0,
        "submitterPhoneCell" => 0,
        "submitterFax" => 0,
        "submitterEmail" => 0,
        "submitterEmailAlt" => 0,
        "submitterEmailPager" => 0,
        "submitterCompany" => 0,
        "submitterReferredBy" => 0,
        "submitterCarrier" => 0,
        "submitterBounces" => 0,
        "submitterSendMail" => 0,
        "submitterActive" => 0,
        "submitterComment" => 0,
        "submitterTransportation" => 0,
        "submitterAvailability" => 0,
        "submitterCaretakerPublic" => 0,
        "submitterCoalitionMember" => 0,
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
        return 'search';
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

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\SubmittedForm[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\SubmittedForm($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\SubmittedForm($data)];
    }

}