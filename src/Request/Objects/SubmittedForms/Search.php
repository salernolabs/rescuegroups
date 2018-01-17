<?php
/**
 * SubmittedForms Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\SubmittedForms;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'submittedforms';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "submittedformID" => [1, 'submittedformID'],
        "submittedformFormID" => [0, 'submittedformFormID'],
        "submittedformAnimalID" => [0, 'submittedformAnimalID'],
        "submittedformAssignedTo" => [0, 'submittedformAssignedTo'],
        "submittedformAssignedToID" => [0, 'submittedformAssignedToID'],
        "submittedformCommentsCount" => [0, 'submittedformCommentsCount'],
        "submittedformCommentsInline" => [0, 'submittedformCommentsInline'],
        "submittedformCompleted" => [0, 'submittedformCompleted'],
        "submittedformUpdated" => [0, 'submittedformUpdated'],
        "submittedformFormName" => [0, 'submittedformFormName'],
        "submittedformPending" => [0, 'submittedformPending'],
        "submittedformStatus" => [0, 'submittedformStatus'],
        "submittedformStatusID" => [0, 'submittedformStatusID'],
        "submittedformAnswers" => [0, 'submittedformAnswers'],
        "submitterID" => [1, 'submitterID'],
        "submitterClass" => [0, 'submitterClass'],
        "submitterSalutation" => [0, 'submitterSalutation'],
        "submitterName" => [0, 'submitterName'],
        "submitterFirstname" => [0, 'submitterFirstname'],
        "submitterLastname" => [0, 'submitterLastname'],
        "submitterTitle" => [0, 'submitterTitle'],
        "submitterAddress" => [0, 'submitterAddress'],
        "submitterCity" => [0, 'submitterCity'],
        "submitterState" => [0, 'submitterState'],
        "submitterPostalcode" => [0, 'submitterPostalcode'],
        "submitterPlus4" => [0, 'submitterPlus4'],
        "submitterCounty" => [0, 'submitterCounty'],
        "submitterCountry" => [0, 'submitterCountry'],
        "submitterPhoneHome" => [0, 'submitterPhoneHome'],
        "submitterPhoneWork" => [0, 'submitterPhoneWork'],
        "submitterPhoneWorkExt" => [0, 'submitterPhoneWorkExt'],
        "submitterPhoneCell" => [0, 'submitterPhoneCell'],
        "submitterFax" => [0, 'submitterFax'],
        "submitterEmail" => [0, 'submitterEmail'],
        "submitterEmailAlt" => [0, 'submitterEmailAlt'],
        "submitterEmailPager" => [0, 'submitterEmailPager'],
        "submitterCompany" => [0, 'submitterCompany'],
        "submitterReferredBy" => [0, 'submitterReferredBy'],
        "submitterCarrier" => [0, 'submitterCarrier'],
        "submitterBounces" => [0, 'submitterBounces'],
        "submitterSendMail" => [0, 'submitterSendMail'],
        "submitterActive" => [0, 'submitterActive'],
        "submitterComment" => [0, 'submitterComment'],
        "submitterTransportation" => [0, 'submitterTransportation'],
        "submitterAvailability" => [0, 'submitterAvailability'],
        "submitterCaretakerPublic" => [0, 'submitterCaretakerPublic'],
        "submitterCoalitionMember" => [0, 'submitterCoalitionMember'],
    ];

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