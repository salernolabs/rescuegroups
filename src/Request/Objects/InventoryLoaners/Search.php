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