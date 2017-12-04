<?php
/**
 * MicrochipRegistrations Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\MicrochipRegistrations\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\MicrochipRegistrations\Search();

        
        $query->setMicrochipRegistrationID("microchipRegistrationID");
        $query->setMicrochipRegistrationCreatedDate("microchipRegistrationCreatedDate");
        $query->setMicrochipRegistrationCreatedByID("microchipRegistrationCreatedByID");
        $query->setMicrochipRegistrationUpdatedDate("microchipRegistrationUpdatedDate");
        $query->setMicrochipRegistrationUpdatedByID("microchipRegistrationUpdatedByID");
        $query->setMicrochipRegistrationMicrochipNumber("microchipRegistrationMicrochipNumber");
        $query->setMicrochipRegistrationMicrochipVendor("microchipRegistrationMicrochipVendor");
        $query->setMicrochipRegistrationRegistry("microchipRegistrationRegistry");
        $query->setMicrochipRegistrationOrgID("microchipRegistrationOrgID");
        $query->setMicrochipRegistrationAnimalID("microchipRegistrationAnimalID");
        $query->setMicrochipRegistrationRegistrantName("microchipRegistrationRegistrantName");
        $query->setMicrochipRegistrationRegistrantFirstname("microchipRegistrationRegistrantFirstname");
        $query->setMicrochipRegistrationRegistrantLastname("microchipRegistrationRegistrantLastname");
        $query->setMicrochipRegistrationRegistrantAddress("microchipRegistrationRegistrantAddress");
        $query->setMicrochipRegistrationRegistrantCity("microchipRegistrationRegistrantCity");
        $query->setMicrochipRegistrationRegistrantState("microchipRegistrationRegistrantState");
        $query->setMicrochipRegistrationRegistrantPostalcode("microchipRegistrationRegistrantPostalcode");
        $query->setMicrochipRegistrationRegistrantCountry("microchipRegistrationRegistrantCountry");
        $query->setMicrochipRegistrationRegistrantPrimaryPhone("microchipRegistrationRegistrantPrimaryPhone");
        $query->setMicrochipRegistrationRegistrantSecondaryPhone("microchipRegistrationRegistrantSecondaryPhone");
        $query->setMicrochipRegistrationRegistrantPrimaryEmail("microchipRegistrationRegistrantPrimaryEmail");
        $query->setMicrochipRegistrationRegistrantSecondaryEmail("microchipRegistrationRegistrantSecondaryEmail");
        $query->setMicrochipRegistrationDate("microchipRegistrationDate");
        $query->setMicrochipRegistrationCode("microchipRegistrationCode");
        $query->setMicrochipRegistrationComplete("microchipRegistrationComplete");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("microchipRegistrations", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("microchipRegistrationID", $data["microchipRegistrationID"]);
        $this->assertEquals("microchipRegistrationCreatedDate", $data["microchipRegistrationCreatedDate"]);
        $this->assertEquals("microchipRegistrationCreatedByID", $data["microchipRegistrationCreatedByID"]);
        $this->assertEquals("microchipRegistrationUpdatedDate", $data["microchipRegistrationUpdatedDate"]);
        $this->assertEquals("microchipRegistrationUpdatedByID", $data["microchipRegistrationUpdatedByID"]);
        $this->assertEquals("microchipRegistrationMicrochipNumber", $data["microchipRegistrationMicrochipNumber"]);
        $this->assertEquals("microchipRegistrationMicrochipVendor", $data["microchipRegistrationMicrochipVendor"]);
        $this->assertEquals("microchipRegistrationRegistry", $data["microchipRegistrationRegistry"]);
        $this->assertEquals("microchipRegistrationOrgID", $data["microchipRegistrationOrgID"]);
        $this->assertEquals("microchipRegistrationAnimalID", $data["microchipRegistrationAnimalID"]);
        $this->assertEquals("microchipRegistrationRegistrantName", $data["microchipRegistrationRegistrantName"]);
        $this->assertEquals("microchipRegistrationRegistrantFirstname", $data["microchipRegistrationRegistrantFirstname"]);
        $this->assertEquals("microchipRegistrationRegistrantLastname", $data["microchipRegistrationRegistrantLastname"]);
        $this->assertEquals("microchipRegistrationRegistrantAddress", $data["microchipRegistrationRegistrantAddress"]);
        $this->assertEquals("microchipRegistrationRegistrantCity", $data["microchipRegistrationRegistrantCity"]);
        $this->assertEquals("microchipRegistrationRegistrantState", $data["microchipRegistrationRegistrantState"]);
        $this->assertEquals("microchipRegistrationRegistrantPostalcode", $data["microchipRegistrationRegistrantPostalcode"]);
        $this->assertEquals("microchipRegistrationRegistrantCountry", $data["microchipRegistrationRegistrantCountry"]);
        $this->assertEquals("microchipRegistrationRegistrantPrimaryPhone", $data["microchipRegistrationRegistrantPrimaryPhone"]);
        $this->assertEquals("microchipRegistrationRegistrantSecondaryPhone", $data["microchipRegistrationRegistrantSecondaryPhone"]);
        $this->assertEquals("microchipRegistrationRegistrantPrimaryEmail", $data["microchipRegistrationRegistrantPrimaryEmail"]);
        $this->assertEquals("microchipRegistrationRegistrantSecondaryEmail", $data["microchipRegistrationRegistrantSecondaryEmail"]);
        $this->assertEquals("microchipRegistrationDate", $data["microchipRegistrationDate"]);
        $this->assertEquals("microchipRegistrationCode", $data["microchipRegistrationCode"]);
        $this->assertEquals("microchipRegistrationComplete", $data["microchipRegistrationComplete"]);
    }
}