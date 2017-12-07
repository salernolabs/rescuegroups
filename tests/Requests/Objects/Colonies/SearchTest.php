<?php
/**
 * Colonies Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Tests\Requests\Objects\Colonies\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Colonies\Search();

        
        $query->setColonyID("colonyID");
        $query->setColonyAnimals("colonyAnimals");
        $query->setColonyCaretakers("colonyCaretakers");
        $query->setColonyLocationID("colonyLocationID");
        $query->setColonyName("colonyName");
        $query->setColonyTotalAnimals("colonyTotalAnimals");
        $query->setColonyRegisteredDate("colonyRegisteredDate");
        $query->setColonySpecificLocation("colonySpecificLocation");
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

        
        $this->assertEquals("colonies", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("colonyID", $data["colonyID"]);
        $this->assertEquals("colonyAnimals", $data["colonyAnimals"]);
        $this->assertEquals("colonyCaretakers", $data["colonyCaretakers"]);
        $this->assertEquals("colonyLocationID", $data["colonyLocationID"]);
        $this->assertEquals("colonyName", $data["colonyName"]);
        $this->assertEquals("colonyTotalAnimals", $data["colonyTotalAnimals"]);
        $this->assertEquals("colonyRegisteredDate", $data["colonyRegisteredDate"]);
        $this->assertEquals("colonySpecificLocation", $data["colonySpecificLocation"]);
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