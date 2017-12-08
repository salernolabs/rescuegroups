<?php
/**
 * InventoryLoaners Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\InventoryLoaners\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\InventoryLoaners\Search();

        
        $query->setInventoryLoanerID("inventoryLoanerID");
        $query->setInventoryLoanerContactID("inventoryLoanerContactID");
        $query->setInventoryLoanerItemID("inventoryLoanerItemID");
        $query->setInventoryLoanerLoanDate("inventoryLoanerLoanDate");
        $query->setInventoryLoanerLoanCondition("inventoryLoanerLoanCondition");
        $query->setInventoryLoanerLoanConditionID("inventoryLoanerLoanConditionID");
        $query->setInventoryLoanerDueDate("inventoryLoanerDueDate");
        $query->setInventoryLoanerReturnDate("inventoryLoanerReturnDate");
        $query->setInventoryLoanerReturnCondition("inventoryLoanerReturnCondition");
        $query->setInventoryLoanerReturnConditionID("inventoryLoanerReturnConditionID");
        $query->setInventoryLoanerNotes("inventoryLoanerNotes");
        $query->setInventoryLoanerLastDueReminderDate("inventoryLoanerLastDueReminderDate");
        $query->setInventoryitemName("inventoryitemName");
        $query->setInventoryitemDescription("inventoryitemDescription");
        $query->setInventoryitemReceivedDate("inventoryitemReceivedDate");
        $query->setInventoryitemSource("inventoryitemSource");
        $query->setInventoryitemCost("inventoryitemCost");
        $query->setInventoryitemConditionID("inventoryitemConditionID");
        $query->setInventoryitemCondition("inventoryitemCondition");
        $query->setInventoryitemCategory("inventoryitemCategory");
        $query->setInventoryitemDisposedDate("inventoryitemDisposedDate");
        $query->setInventoryitemDisposedDestination("inventoryitemDisposedDestination");
        $query->setInventoryitemStorageLocation("inventoryitemStorageLocation");
        $query->setContactClass("contactClass");
        $query->setContactSalutation("contactSalutation");
        $query->setContactName("contactName");
        $query->setContactFirstname("contactFirstname");
        $query->setContactLastname("contactLastname");
        $query->setContactTitle("contactTitle");
        $query->setContactAddress("contactAddress");
        $query->setContactCity("contactCity");
        $query->setContactState("contactState");
        $query->setContactPostalcode("contactPostalcode");
        $query->setContactPlus4("contactPlus4");
        $query->setContactCounty("contactCounty");
        $query->setContactCountry("contactCountry");
        $query->setContactPhoneHome("contactPhoneHome");
        $query->setContactPhoneWork("contactPhoneWork");
        $query->setContactPhoneWorkExt("contactPhoneWorkExt");
        $query->setContactPhoneCell("contactPhoneCell");
        $query->setContactFax("contactFax");
        $query->setContactEmail("contactEmail");
        $query->setContactEmailAlt("contactEmailAlt");
        $query->setContactEmailPager("contactEmailPager");
        $query->setContactCompany("contactCompany");
        $query->setContactReferredBy("contactReferredBy");
        $query->setContactCarrier("contactCarrier");
        $query->setContactBounces("contactBounces");
        $query->setContactSendMail("contactSendMail");
        $query->setContactActive("contactActive");
        $query->setContactComment("contactComment");
        $query->setContactTransportation("contactTransportation");
        $query->setContactAvailability("contactAvailability");
        $query->setContactCaretakerPublic("contactCaretakerPublic");
        $query->setContactCoalitionMember("contactCoalitionMember");
        $query->setContactGroups("contactGroups");
        $query->setContactAdded("contactAdded");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryLoaners", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("inventoryLoanerID", $data["inventoryLoanerID"]);
        $this->assertEquals("inventoryLoanerContactID", $data["inventoryLoanerContactID"]);
        $this->assertEquals("inventoryLoanerItemID", $data["inventoryLoanerItemID"]);
        $this->assertEquals("inventoryLoanerLoanDate", $data["inventoryLoanerLoanDate"]);
        $this->assertEquals("inventoryLoanerLoanCondition", $data["inventoryLoanerLoanCondition"]);
        $this->assertEquals("inventoryLoanerLoanConditionID", $data["inventoryLoanerLoanConditionID"]);
        $this->assertEquals("inventoryLoanerDueDate", $data["inventoryLoanerDueDate"]);
        $this->assertEquals("inventoryLoanerReturnDate", $data["inventoryLoanerReturnDate"]);
        $this->assertEquals("inventoryLoanerReturnCondition", $data["inventoryLoanerReturnCondition"]);
        $this->assertEquals("inventoryLoanerReturnConditionID", $data["inventoryLoanerReturnConditionID"]);
        $this->assertEquals("inventoryLoanerNotes", $data["inventoryLoanerNotes"]);
        $this->assertEquals("inventoryLoanerLastDueReminderDate", $data["inventoryLoanerLastDueReminderDate"]);
        $this->assertEquals("inventoryitemName", $data["inventoryitemName"]);
        $this->assertEquals("inventoryitemDescription", $data["inventoryitemDescription"]);
        $this->assertEquals("inventoryitemReceivedDate", $data["inventoryitemReceivedDate"]);
        $this->assertEquals("inventoryitemSource", $data["inventoryitemSource"]);
        $this->assertEquals("inventoryitemCost", $data["inventoryitemCost"]);
        $this->assertEquals("inventoryitemConditionID", $data["inventoryitemConditionID"]);
        $this->assertEquals("inventoryitemCondition", $data["inventoryitemCondition"]);
        $this->assertEquals("inventoryitemCategory", $data["inventoryitemCategory"]);
        $this->assertEquals("inventoryitemDisposedDate", $data["inventoryitemDisposedDate"]);
        $this->assertEquals("inventoryitemDisposedDestination", $data["inventoryitemDisposedDestination"]);
        $this->assertEquals("inventoryitemStorageLocation", $data["inventoryitemStorageLocation"]);
        $this->assertEquals("contactClass", $data["contactClass"]);
        $this->assertEquals("contactSalutation", $data["contactSalutation"]);
        $this->assertEquals("contactName", $data["contactName"]);
        $this->assertEquals("contactFirstname", $data["contactFirstname"]);
        $this->assertEquals("contactLastname", $data["contactLastname"]);
        $this->assertEquals("contactTitle", $data["contactTitle"]);
        $this->assertEquals("contactAddress", $data["contactAddress"]);
        $this->assertEquals("contactCity", $data["contactCity"]);
        $this->assertEquals("contactState", $data["contactState"]);
        $this->assertEquals("contactPostalcode", $data["contactPostalcode"]);
        $this->assertEquals("contactPlus4", $data["contactPlus4"]);
        $this->assertEquals("contactCounty", $data["contactCounty"]);
        $this->assertEquals("contactCountry", $data["contactCountry"]);
        $this->assertEquals("contactPhoneHome", $data["contactPhoneHome"]);
        $this->assertEquals("contactPhoneWork", $data["contactPhoneWork"]);
        $this->assertEquals("contactPhoneWorkExt", $data["contactPhoneWorkExt"]);
        $this->assertEquals("contactPhoneCell", $data["contactPhoneCell"]);
        $this->assertEquals("contactFax", $data["contactFax"]);
        $this->assertEquals("contactEmail", $data["contactEmail"]);
        $this->assertEquals("contactEmailAlt", $data["contactEmailAlt"]);
        $this->assertEquals("contactEmailPager", $data["contactEmailPager"]);
        $this->assertEquals("contactCompany", $data["contactCompany"]);
        $this->assertEquals("contactReferredBy", $data["contactReferredBy"]);
        $this->assertEquals("contactCarrier", $data["contactCarrier"]);
        $this->assertEquals("contactBounces", $data["contactBounces"]);
        $this->assertEquals("contactSendMail", $data["contactSendMail"]);
        $this->assertEquals("contactActive", $data["contactActive"]);
        $this->assertEquals("contactComment", $data["contactComment"]);
        $this->assertEquals("contactTransportation", $data["contactTransportation"]);
        $this->assertEquals("contactAvailability", $data["contactAvailability"]);
        $this->assertEquals("contactCaretakerPublic", $data["contactCaretakerPublic"]);
        $this->assertEquals("contactCoalitionMember", $data["contactCoalitionMember"]);
        $this->assertEquals("contactGroups", $data["contactGroups"]);
        $this->assertEquals("contactAdded", $data["contactAdded"]);
    }
}