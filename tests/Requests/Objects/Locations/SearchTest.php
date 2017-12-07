<?php
/**
 * Locations Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Tests\Requests\Objects\Locations\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Locations\Search();

        
        $query->setLocationID("locationID");
        $query->setLocationName("locationName");
        $query->setLocationUrl("locationUrl");
        $query->setLocationAddress("locationAddress");
        $query->setLocationCity("locationCity");
        $query->setLocationState("locationState");
        $query->setLocationPostalcode("locationPostalcode");
        $query->setLocationCountry("locationCountry");
        $query->setLocationPhone("locationPhone");
        $query->setLocationPhoneExt("locationPhoneExt");
        $query->setLocationAnimals("locationAnimals");
        $query->setLocationEvents("locationEvents");
        $query->setLocationColonies("locationColonies");
        $query->setLocationMeetrequests("locationMeetrequests");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("locations", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("locationID", $data["locationID"]);
        $this->assertEquals("locationName", $data["locationName"]);
        $this->assertEquals("locationUrl", $data["locationUrl"]);
        $this->assertEquals("locationAddress", $data["locationAddress"]);
        $this->assertEquals("locationCity", $data["locationCity"]);
        $this->assertEquals("locationState", $data["locationState"]);
        $this->assertEquals("locationPostalcode", $data["locationPostalcode"]);
        $this->assertEquals("locationCountry", $data["locationCountry"]);
        $this->assertEquals("locationPhone", $data["locationPhone"]);
        $this->assertEquals("locationPhoneExt", $data["locationPhoneExt"]);
        $this->assertEquals("locationAnimals", $data["locationAnimals"]);
        $this->assertEquals("locationEvents", $data["locationEvents"]);
        $this->assertEquals("locationColonies", $data["locationColonies"]);
        $this->assertEquals("locationMeetrequests", $data["locationMeetrequests"]);
    }
}