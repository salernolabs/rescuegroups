<?php
/**
 * Locations View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Locations\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Locations\View();

        
        $query->setLocationID("locationID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("locations", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("locationID", $data["locationID"]);
    }
}