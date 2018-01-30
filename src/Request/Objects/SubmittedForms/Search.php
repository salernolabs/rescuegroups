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

    const FIELD_ID = 'id';
    const FIELD_FORM_ID = 'formId';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_ASSIGNED_TO = 'assignedTo';
    const FIELD_ASSIGNED_TO_ID = 'assignedToId';
    const FIELD_COMMENTS_COUNT = 'commentsCount';
    const FIELD_COMMENTS_INLINE = 'commentsInline';
    const FIELD_COMPLETED = 'completed';
    const FIELD_UPDATED = 'updated';
    const FIELD_FORM_NAME = 'formName';
    const FIELD_PENDING = 'pending';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_ID = 'statusId';
    const FIELD_ANSWERS = 'answers';
    const FIELD_SUBMITTER_ID = 'submitterId';
    const FIELD_SUBMITTER_CLASS = 'submitterClass';
    const FIELD_SUBMITTER_SALUTATION = 'submitterSalutation';
    const FIELD_SUBMITTER_NAME = 'submitterName';
    const FIELD_SUBMITTER_FIRSTNAME = 'submitterFirstname';
    const FIELD_SUBMITTER_LASTNAME = 'submitterLastname';
    const FIELD_SUBMITTER_TITLE = 'submitterTitle';
    const FIELD_SUBMITTER_ADDRESS = 'submitterAddress';
    const FIELD_SUBMITTER_CITY = 'submitterCity';
    const FIELD_SUBMITTER_STATE = 'submitterState';
    const FIELD_SUBMITTER_POSTALCODE = 'submitterPostalcode';
    const FIELD_SUBMITTER_PLUS4 = 'submitterPlus4';
    const FIELD_SUBMITTER_COUNTY = 'submitterCounty';
    const FIELD_SUBMITTER_COUNTRY = 'submitterCountry';
    const FIELD_SUBMITTER_PHONE_HOME = 'submitterPhoneHome';
    const FIELD_SUBMITTER_PHONE_WORK = 'submitterPhoneWork';
    const FIELD_SUBMITTER_PHONE_WORK_EXT = 'submitterPhoneWorkExt';
    const FIELD_SUBMITTER_PHONE_CELL = 'submitterPhoneCell';
    const FIELD_SUBMITTER_FAX = 'submitterFax';
    const FIELD_SUBMITTER_EMAIL = 'submitterEmail';
    const FIELD_SUBMITTER_EMAIL_ALT = 'submitterEmailAlt';
    const FIELD_SUBMITTER_EMAIL_PAGER = 'submitterEmailPager';
    const FIELD_SUBMITTER_COMPANY = 'submitterCompany';
    const FIELD_SUBMITTER_REFERRED_BY = 'submitterReferredBy';
    const FIELD_SUBMITTER_CARRIER = 'submitterCarrier';
    const FIELD_SUBMITTER_BOUNCES = 'submitterBounces';
    const FIELD_SUBMITTER_SEND_MAIL = 'submitterSendMail';
    const FIELD_SUBMITTER_ACTIVE = 'submitterActive';
    const FIELD_SUBMITTER_COMMENT = 'submitterComment';
    const FIELD_SUBMITTER_TRANSPORTATION = 'submitterTransportation';
    const FIELD_SUBMITTER_AVAILABILITY = 'submitterAvailability';
    const FIELD_SUBMITTER_CARETAKER_PUBLIC = 'submitterCaretakerPublic';
    const FIELD_SUBMITTER_COALITION_MEMBER = 'submitterCoalitionMember';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'submittedformID'],
        "formId" => [0, 'submittedformFormID'],
        "animalId" => [0, 'submittedformAnimalID'],
        "assignedTo" => [0, 'submittedformAssignedTo'],
        "assignedToId" => [0, 'submittedformAssignedToID'],
        "commentsCount" => [0, 'submittedformCommentsCount'],
        "commentsInline" => [0, 'submittedformCommentsInline'],
        "completed" => [0, 'submittedformCompleted'],
        "updated" => [0, 'submittedformUpdated'],
        "formName" => [0, 'submittedformFormName'],
        "pending" => [0, 'submittedformPending'],
        "status" => [0, 'submittedformStatus'],
        "statusId" => [0, 'submittedformStatusID'],
        "answers" => [0, 'submittedformAnswers'],
        "submitterId" => [1, 'submitterID'],
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
                $output[] = new \RescueGroups\Objects\Search\SubmittedForm($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\SubmittedForm($data)];
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