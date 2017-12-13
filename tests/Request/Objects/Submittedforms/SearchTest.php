<?php
/**
 * Submittedforms Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Submittedforms;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Submittedforms\Search();

        
        $query->setSubmittedformID("submittedformID");
        $query->setSubmittedformFormID("submittedformFormID");
        $query->setSubmittedformAnimalID("submittedformAnimalID");
        $query->setSubmittedformAssignedTo("submittedformAssignedTo");
        $query->setSubmittedformAssignedToID("submittedformAssignedToID");
        $query->setSubmittedformCommentsCount("submittedformCommentsCount");
        $query->setSubmittedformCommentsInline("submittedformCommentsInline");
        $query->setSubmittedformCompleted("submittedformCompleted");
        $query->setSubmittedformUpdated("submittedformUpdated");
        $query->setSubmittedformFormName("submittedformFormName");
        $query->setSubmittedformPending("submittedformPending");
        $query->setSubmittedformStatus("submittedformStatus");
        $query->setSubmittedformStatusID("submittedformStatusID");
        $query->setSubmittedformAnswers("submittedformAnswers");
        $query->setSubmitterID("submitterID");
        $query->setSubmitterClass("submitterClass");
        $query->setSubmitterSalutation("submitterSalutation");
        $query->setSubmitterName("submitterName");
        $query->setSubmitterFirstname("submitterFirstname");
        $query->setSubmitterLastname("submitterLastname");
        $query->setSubmitterTitle("submitterTitle");
        $query->setSubmitterAddress("submitterAddress");
        $query->setSubmitterCity("submitterCity");
        $query->setSubmitterState("submitterState");
        $query->setSubmitterPostalcode("submitterPostalcode");
        $query->setSubmitterPlus4("submitterPlus4");
        $query->setSubmitterCounty("submitterCounty");
        $query->setSubmitterCountry("submitterCountry");
        $query->setSubmitterPhoneHome("submitterPhoneHome");
        $query->setSubmitterPhoneWork("submitterPhoneWork");
        $query->setSubmitterPhoneWorkExt("submitterPhoneWorkExt");
        $query->setSubmitterPhoneCell("submitterPhoneCell");
        $query->setSubmitterFax("submitterFax");
        $query->setSubmitterEmail("submitterEmail");
        $query->setSubmitterEmailAlt("submitterEmailAlt");
        $query->setSubmitterEmailPager("submitterEmailPager");
        $query->setSubmitterCompany("submitterCompany");
        $query->setSubmitterReferredBy("submitterReferredBy");
        $query->setSubmitterCarrier("submitterCarrier");
        $query->setSubmitterBounces("submitterBounces");
        $query->setSubmitterSendMail("submitterSendMail");
        $query->setSubmitterActive("submitterActive");
        $query->setSubmitterComment("submitterComment");
        $query->setSubmitterTransportation("submitterTransportation");
        $query->setSubmitterAvailability("submitterAvailability");
        $query->setSubmitterCaretakerPublic("submitterCaretakerPublic");
        $query->setSubmitterCoalitionMember("submitterCoalitionMember");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("submittedforms", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("submittedformID", $data["submittedformID"]);
        $this->assertEquals("submittedformFormID", $data["submittedformFormID"]);
        $this->assertEquals("submittedformAnimalID", $data["submittedformAnimalID"]);
        $this->assertEquals("submittedformAssignedTo", $data["submittedformAssignedTo"]);
        $this->assertEquals("submittedformAssignedToID", $data["submittedformAssignedToID"]);
        $this->assertEquals("submittedformCommentsCount", $data["submittedformCommentsCount"]);
        $this->assertEquals("submittedformCommentsInline", $data["submittedformCommentsInline"]);
        $this->assertEquals("submittedformCompleted", $data["submittedformCompleted"]);
        $this->assertEquals("submittedformUpdated", $data["submittedformUpdated"]);
        $this->assertEquals("submittedformFormName", $data["submittedformFormName"]);
        $this->assertEquals("submittedformPending", $data["submittedformPending"]);
        $this->assertEquals("submittedformStatus", $data["submittedformStatus"]);
        $this->assertEquals("submittedformStatusID", $data["submittedformStatusID"]);
        $this->assertEquals("submittedformAnswers", $data["submittedformAnswers"]);
        $this->assertEquals("submitterID", $data["submitterID"]);
        $this->assertEquals("submitterClass", $data["submitterClass"]);
        $this->assertEquals("submitterSalutation", $data["submitterSalutation"]);
        $this->assertEquals("submitterName", $data["submitterName"]);
        $this->assertEquals("submitterFirstname", $data["submitterFirstname"]);
        $this->assertEquals("submitterLastname", $data["submitterLastname"]);
        $this->assertEquals("submitterTitle", $data["submitterTitle"]);
        $this->assertEquals("submitterAddress", $data["submitterAddress"]);
        $this->assertEquals("submitterCity", $data["submitterCity"]);
        $this->assertEquals("submitterState", $data["submitterState"]);
        $this->assertEquals("submitterPostalcode", $data["submitterPostalcode"]);
        $this->assertEquals("submitterPlus4", $data["submitterPlus4"]);
        $this->assertEquals("submitterCounty", $data["submitterCounty"]);
        $this->assertEquals("submitterCountry", $data["submitterCountry"]);
        $this->assertEquals("submitterPhoneHome", $data["submitterPhoneHome"]);
        $this->assertEquals("submitterPhoneWork", $data["submitterPhoneWork"]);
        $this->assertEquals("submitterPhoneWorkExt", $data["submitterPhoneWorkExt"]);
        $this->assertEquals("submitterPhoneCell", $data["submitterPhoneCell"]);
        $this->assertEquals("submitterFax", $data["submitterFax"]);
        $this->assertEquals("submitterEmail", $data["submitterEmail"]);
        $this->assertEquals("submitterEmailAlt", $data["submitterEmailAlt"]);
        $this->assertEquals("submitterEmailPager", $data["submitterEmailPager"]);
        $this->assertEquals("submitterCompany", $data["submitterCompany"]);
        $this->assertEquals("submitterReferredBy", $data["submitterReferredBy"]);
        $this->assertEquals("submitterCarrier", $data["submitterCarrier"]);
        $this->assertEquals("submitterBounces", $data["submitterBounces"]);
        $this->assertEquals("submitterSendMail", $data["submitterSendMail"]);
        $this->assertEquals("submitterActive", $data["submitterActive"]);
        $this->assertEquals("submitterComment", $data["submitterComment"]);
        $this->assertEquals("submitterTransportation", $data["submitterTransportation"]);
        $this->assertEquals("submitterAvailability", $data["submitterAvailability"]);
        $this->assertEquals("submitterCaretakerPublic", $data["submitterCaretakerPublic"]);
        $this->assertEquals("submitterCoalitionMember", $data["submitterCoalitionMember"]);
    }
}