<?php
/**
 * Locations View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:24
 */
namespace RescueGroups\Tests\Requests\Objects\Locations\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Locations\View();

        
        $query->setLocationID("locationID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("locations", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("locationID", $data["locationID"]);
    }
}