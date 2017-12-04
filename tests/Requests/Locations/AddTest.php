<?php
/**
 * Locations Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Locations\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Locations\Add();

        
        $query->setLocationName("locationName");
        $query->setLocationUrl("locationUrl");
        $query->setLocationAddress("locationAddress");
        $query->setLocationCity("locationCity");
        $query->setLocationState("locationState");
        $query->setLocationPostalcode("locationPostalcode");
        $query->setLocationCountry("locationCountry");
        $query->setLocationPhone("locationPhone");
        $query->setLocationPhoneExt("locationPhoneExt");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("locations", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("locationName", $data["locationName"]);
        $this->assertEquals("locationUrl", $data["locationUrl"]);
        $this->assertEquals("locationAddress", $data["locationAddress"]);
        $this->assertEquals("locationCity", $data["locationCity"]);
        $this->assertEquals("locationState", $data["locationState"]);
        $this->assertEquals("locationPostalcode", $data["locationPostalcode"]);
        $this->assertEquals("locationCountry", $data["locationCountry"]);
        $this->assertEquals("locationPhone", $data["locationPhone"]);
        $this->assertEquals("locationPhoneExt", $data["locationPhoneExt"]);
    }
}