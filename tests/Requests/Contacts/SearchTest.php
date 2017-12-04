<?php
/**
 * Contacts Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Contacts\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Contacts\Search();

        
        $query->setContactID("contactID");
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
        $query->setContactType("contactType");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contacts", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("contactID", $data["contactID"]);
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
        $this->assertEquals("contactType", $data["contactType"]);
    }
}