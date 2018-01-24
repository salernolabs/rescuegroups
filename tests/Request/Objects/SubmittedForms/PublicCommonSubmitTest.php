<?php
/**
 * SubmittedForms publicCommonSubmit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\SubmittedForms;

class PublicCommonSubmitTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\SubmittedForms\PublicCommonSubmit();
        $query->setAnimalId("Animal");
        $query->setSubmitterSalutation("Salutation");
        $query->setSubmitterFirstname("First name");
        $query->setSubmitterLastname("Last name");
        $query->setSubmitterAddress("Street address");
        $query->setSubmitterCity("City");
        $query->setSubmitterState("State/Province");
        $query->setSubmitterPostalcode("Postal Code");
        $query->setSubmitterPlus4("Zip code plus 4");
        $query->setSubmitterCounty("County");
        $query->setSubmitterCountry("Country");
        $query->setSubmitterPhoneHome("Home phone number");
        $query->setSubmitterPhoneWork("Work phone number");
        $query->setSubmitterPhoneWorkExt("Work phone extension");
        $query->setSubmitterPhoneCell("Cell phone number");
        $query->setSubmitterFax("Fax number");
        $query->setSubmitterEmail("Email address");
        $query->setSubmitterEmailAlt("Alternate email address");
        $query->setSubmitterEmailPager("Pager email address");
        $query->setSubmitterReferredBy("Referred by");
        $query->setAnswers("Answers");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Animal", $data['values'][0]["submittedformAnimalID"]);
        $this->assertEquals("Salutation", $data['values'][0]["submitterSalutation"]);
        $this->assertEquals("First name", $data['values'][0]["submitterFirstname"]);
        $this->assertEquals("Last name", $data['values'][0]["submitterLastname"]);
        $this->assertEquals("Street address", $data['values'][0]["submitterAddress"]);
        $this->assertEquals("City", $data['values'][0]["submitterCity"]);
        $this->assertEquals("State/Province", $data['values'][0]["submitterState"]);
        $this->assertEquals("Postal Code", $data['values'][0]["submitterPostalcode"]);
        $this->assertEquals("Zip code plus 4", $data['values'][0]["submitterPlus4"]);
        $this->assertEquals("County", $data['values'][0]["submitterCounty"]);
        $this->assertEquals("Country", $data['values'][0]["submitterCountry"]);
        $this->assertEquals("Home phone number", $data['values'][0]["submitterPhoneHome"]);
        $this->assertEquals("Work phone number", $data['values'][0]["submitterPhoneWork"]);
        $this->assertEquals("Work phone extension", $data['values'][0]["submitterPhoneWorkExt"]);
        $this->assertEquals("Cell phone number", $data['values'][0]["submitterPhoneCell"]);
        $this->assertEquals("Fax number", $data['values'][0]["submitterFax"]);
        $this->assertEquals("Email address", $data['values'][0]["submitterEmail"]);
        $this->assertEquals("Alternate email address", $data['values'][0]["submitterEmailAlt"]);
        $this->assertEquals("Pager email address", $data['values'][0]["submitterEmailPager"]);
        $this->assertEquals("Referred by", $data['values'][0]["submitterReferredBy"]);
        $this->assertEquals("Answers", $data['values'][0]["submittedformAnswers"]);

        $this->assertEquals('submittedforms', $data['objectType']);
        $this->assertEquals('publicCommonSubmit', $data['objectAction']);
    }
}