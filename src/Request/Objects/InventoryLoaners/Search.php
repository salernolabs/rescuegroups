<?php
/**
 * InventoryLoaners Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryLoaners;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'inventoryLoaners';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_CONTACT_ID = 'contactId';
    const FIELD_ITEM_ID = 'itemId';
    const FIELD_LOAN_DATE = 'loanDate';
    const FIELD_LOAN_CONDITION = 'loanCondition';
    const FIELD_LOAN_CONDITION_ID = 'loanConditionId';
    const FIELD_DUE_DATE = 'dueDate';
    const FIELD_RETURN_DATE = 'returnDate';
    const FIELD_RETURN_CONDITION = 'returnCondition';
    const FIELD_RETURN_CONDITION_ID = 'returnConditionId';
    const FIELD_NOTES = 'notes';
    const FIELD_LAST_DUE_REMINDER_DATE = 'lastDueReminderDate';
    const FIELD_INVENTORYITEM_NAME = 'inventoryitemName';
    const FIELD_INVENTORYITEM_DESCRIPTION = 'inventoryitemDescription';
    const FIELD_INVENTORYITEM_RECEIVED_DATE = 'inventoryitemReceivedDate';
    const FIELD_INVENTORYITEM_SOURCE = 'inventoryitemSource';
    const FIELD_INVENTORYITEM_COST = 'inventoryitemCost';
    const FIELD_INVENTORYITEM_CONDITION_ID = 'inventoryitemConditionId';
    const FIELD_INVENTORYITEM_CONDITION = 'inventoryitemCondition';
    const FIELD_INVENTORYITEM_CATEGORY = 'inventoryitemCategory';
    const FIELD_INVENTORYITEM_DISPOSED_DATE = 'inventoryitemDisposedDate';
    const FIELD_INVENTORYITEM_DISPOSED_DESTINATION = 'inventoryitemDisposedDestination';
    const FIELD_INVENTORYITEM_STORAGE_LOCATION = 'inventoryitemStorageLocation';
    const FIELD_CONTACT_CLASS = 'contactClass';
    const FIELD_CONTACT_SALUTATION = 'contactSalutation';
    const FIELD_CONTACT_NAME = 'contactName';
    const FIELD_CONTACT_FIRSTNAME = 'contactFirstname';
    const FIELD_CONTACT_LASTNAME = 'contactLastname';
    const FIELD_CONTACT_TITLE = 'contactTitle';
    const FIELD_CONTACT_ADDRESS = 'contactAddress';
    const FIELD_CONTACT_CITY = 'contactCity';
    const FIELD_CONTACT_STATE = 'contactState';
    const FIELD_CONTACT_POSTALCODE = 'contactPostalcode';
    const FIELD_CONTACT_PLUS4 = 'contactPlus4';
    const FIELD_CONTACT_COUNTY = 'contactCounty';
    const FIELD_CONTACT_COUNTRY = 'contactCountry';
    const FIELD_CONTACT_PHONE_HOME = 'contactPhoneHome';
    const FIELD_CONTACT_PHONE_WORK = 'contactPhoneWork';
    const FIELD_CONTACT_PHONE_WORK_EXT = 'contactPhoneWorkExt';
    const FIELD_CONTACT_PHONE_CELL = 'contactPhoneCell';
    const FIELD_CONTACT_FAX = 'contactFax';
    const FIELD_CONTACT_EMAIL = 'contactEmail';
    const FIELD_CONTACT_EMAIL_ALT = 'contactEmailAlt';
    const FIELD_CONTACT_EMAIL_PAGER = 'contactEmailPager';
    const FIELD_CONTACT_COMPANY = 'contactCompany';
    const FIELD_CONTACT_REFERRED_BY = 'contactReferredBy';
    const FIELD_CONTACT_CARRIER = 'contactCarrier';
    const FIELD_CONTACT_BOUNCES = 'contactBounces';
    const FIELD_CONTACT_SEND_MAIL = 'contactSendMail';
    const FIELD_CONTACT_ACTIVE = 'contactActive';
    const FIELD_CONTACT_COMMENT = 'contactComment';
    const FIELD_CONTACT_TRANSPORTATION = 'contactTransportation';
    const FIELD_CONTACT_AVAILABILITY = 'contactAvailability';
    const FIELD_CONTACT_CARETAKER_PUBLIC = 'contactCaretakerPublic';
    const FIELD_CONTACT_COALITION_MEMBER = 'contactCoalitionMember';
    const FIELD_CONTACT_GROUPS = 'contactGroups';
    const FIELD_CONTACT_ADDED = 'contactAdded';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'inventoryLoanerID'],
        "contactId" => [0, 'inventoryLoanerContactID'],
        "itemId" => [0, 'inventoryLoanerItemID'],
        "loanDate" => [0, 'inventoryLoanerLoanDate'],
        "loanCondition" => [0, 'inventoryLoanerLoanCondition'],
        "loanConditionId" => [0, 'inventoryLoanerLoanConditionID'],
        "dueDate" => [0, 'inventoryLoanerDueDate'],
        "returnDate" => [0, 'inventoryLoanerReturnDate'],
        "returnCondition" => [0, 'inventoryLoanerReturnCondition'],
        "returnConditionId" => [0, 'inventoryLoanerReturnConditionID'],
        "notes" => [0, 'inventoryLoanerNotes'],
        "lastDueReminderDate" => [0, 'inventoryLoanerLastDueReminderDate'],
        "inventoryitemName" => [0, 'inventoryitemName'],
        "inventoryitemDescription" => [0, 'inventoryitemDescription'],
        "inventoryitemReceivedDate" => [0, 'inventoryitemReceivedDate'],
        "inventoryitemSource" => [0, 'inventoryitemSource'],
        "inventoryitemCost" => [0, 'inventoryitemCost'],
        "inventoryitemConditionId" => [0, 'inventoryitemConditionID'],
        "inventoryitemCondition" => [0, 'inventoryitemCondition'],
        "inventoryitemCategory" => [0, 'inventoryitemCategory'],
        "inventoryitemDisposedDate" => [0, 'inventoryitemDisposedDate'],
        "inventoryitemDisposedDestination" => [0, 'inventoryitemDisposedDestination'],
        "inventoryitemStorageLocation" => [0, 'inventoryitemStorageLocation'],
        "contactClass" => [0, 'contactClass'],
        "contactSalutation" => [0, 'contactSalutation'],
        "contactName" => [0, 'contactName'],
        "contactFirstname" => [0, 'contactFirstname'],
        "contactLastname" => [0, 'contactLastname'],
        "contactTitle" => [0, 'contactTitle'],
        "contactAddress" => [0, 'contactAddress'],
        "contactCity" => [0, 'contactCity'],
        "contactState" => [0, 'contactState'],
        "contactPostalcode" => [0, 'contactPostalcode'],
        "contactPlus4" => [0, 'contactPlus4'],
        "contactCounty" => [0, 'contactCounty'],
        "contactCountry" => [0, 'contactCountry'],
        "contactPhoneHome" => [0, 'contactPhoneHome'],
        "contactPhoneWork" => [0, 'contactPhoneWork'],
        "contactPhoneWorkExt" => [0, 'contactPhoneWorkExt'],
        "contactPhoneCell" => [0, 'contactPhoneCell'],
        "contactFax" => [0, 'contactFax'],
        "contactEmail" => [0, 'contactEmail'],
        "contactEmailAlt" => [0, 'contactEmailAlt'],
        "contactEmailPager" => [0, 'contactEmailPager'],
        "contactCompany" => [0, 'contactCompany'],
        "contactReferredBy" => [0, 'contactReferredBy'],
        "contactCarrier" => [0, 'contactCarrier'],
        "contactBounces" => [0, 'contactBounces'],
        "contactSendMail" => [0, 'contactSendMail'],
        "contactActive" => [0, 'contactActive'],
        "contactComment" => [0, 'contactComment'],
        "contactTransportation" => [0, 'contactTransportation'],
        "contactAvailability" => [0, 'contactAvailability'],
        "contactCaretakerPublic" => [0, 'contactCaretakerPublic'],
        "contactCoalitionMember" => [0, 'contactCoalitionMember'],
        "contactGroups" => [0, 'contactGroups'],
        "contactAdded" => [0, 'contactAdded'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\InventoryLoaner[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\InventoryLoaner($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\InventoryLoaner($data)];
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