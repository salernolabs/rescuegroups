<?php
/**
 * MicrochipRegistrations Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\MicrochipRegistrations\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\MicrochipRegistrations\Add();

        
        $query->setMicrochipRegistrationAnimalID("microchipRegistrationAnimalID");
        $query->setMicrochipRegistrationMicrochipNumber("microchipRegistrationMicrochipNumber");
        $query->setMicrochipRegistrationMicrochipVendor("microchipRegistrationMicrochipVendor");
        $query->setMicrochipRegistrationRegistry("microchipRegistrationRegistry");
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

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("microchipRegistrations", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("microchipRegistrationAnimalID", $data["microchipRegistrationAnimalID"]);
        $this->assertEquals("microchipRegistrationMicrochipNumber", $data["microchipRegistrationMicrochipNumber"]);
        $this->assertEquals("microchipRegistrationMicrochipVendor", $data["microchipRegistrationMicrochipVendor"]);
        $this->assertEquals("microchipRegistrationRegistry", $data["microchipRegistrationRegistry"]);
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
    }
}