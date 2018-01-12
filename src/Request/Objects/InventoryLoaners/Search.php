<?php
/**
 * InventoryLoaners Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryLoaners;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "inventoryLoanerID" => 1,
        "inventoryLoanerContactID" => 0,
        "inventoryLoanerItemID" => 0,
        "inventoryLoanerLoanDate" => 0,
        "inventoryLoanerLoanCondition" => 0,
        "inventoryLoanerLoanConditionID" => 0,
        "inventoryLoanerDueDate" => 0,
        "inventoryLoanerReturnDate" => 0,
        "inventoryLoanerReturnCondition" => 0,
        "inventoryLoanerReturnConditionID" => 0,
        "inventoryLoanerNotes" => 0,
        "inventoryLoanerLastDueReminderDate" => 0,
        "inventoryitemName" => 0,
        "inventoryitemDescription" => 0,
        "inventoryitemReceivedDate" => 0,
        "inventoryitemSource" => 0,
        "inventoryitemCost" => 0,
        "inventoryitemConditionID" => 0,
        "inventoryitemCondition" => 0,
        "inventoryitemCategory" => 0,
        "inventoryitemDisposedDate" => 0,
        "inventoryitemDisposedDestination" => 0,
        "inventoryitemStorageLocation" => 0,
        "contactClass" => 0,
        "contactSalutation" => 0,
        "contactName" => 0,
        "contactFirstname" => 0,
        "contactLastname" => 0,
        "contactTitle" => 0,
        "contactAddress" => 0,
        "contactCity" => 0,
        "contactState" => 0,
        "contactPostalcode" => 0,
        "contactPlus4" => 0,
        "contactCounty" => 0,
        "contactCountry" => 0,
        "contactPhoneHome" => 0,
        "contactPhoneWork" => 0,
        "contactPhoneWorkExt" => 0,
        "contactPhoneCell" => 0,
        "contactFax" => 0,
        "contactEmail" => 0,
        "contactEmailAlt" => 0,
        "contactEmailPager" => 0,
        "contactCompany" => 0,
        "contactReferredBy" => 0,
        "contactCarrier" => 0,
        "contactBounces" => 0,
        "contactSendMail" => 0,
        "contactActive" => 0,
        "contactComment" => 0,
        "contactTransportation" => 0,
        "contactAvailability" => 0,
        "contactCaretakerPublic" => 0,
        "contactCoalitionMember" => 0,
        "contactGroups" => 0,
        "contactAdded" => 0,
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
        return 'inventoryLoaners';
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
     * @returns \RescueGroups\Response\Objects\InventoryLoaner[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\InventoryLoaner($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\InventoryLoaner($data)];
    }

}