<?php
/**
 * Submittedforms PublicCommonSubmit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:45
 */
namespace RescueGroups\Tests\Requests\Objects\Submittedforms\PublicCommonSubmit;

class PublicCommonSubmitTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Submittedforms\PublicCommonSubmit();

        
        $query->setSubmittedformAnimalID("submittedformAnimalID");
        $query->setSubmitterSalutation("submitterSalutation");
        $query->setSubmitterFirstname("submitterFirstname");
        $query->setSubmitterLastname("submitterLastname");
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
        $query->setSubmitterReferredBy("submitterReferredBy");
        $query->setSubmittedformAnswers("submittedformAnswers");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("submittedforms", $data["objectType"]);

        $this->assertEquals("publicCommonSubmit", $data["objectAction"]);

        $this->assertEquals("submittedformAnimalID", $data["submittedformAnimalID"]);
        $this->assertEquals("submitterSalutation", $data["submitterSalutation"]);
        $this->assertEquals("submitterFirstname", $data["submitterFirstname"]);
        $this->assertEquals("submitterLastname", $data["submitterLastname"]);
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
        $this->assertEquals("submitterReferredBy", $data["submitterReferredBy"]);
        $this->assertEquals("submittedformAnswers", $data["submittedformAnswers"]);
    }
}