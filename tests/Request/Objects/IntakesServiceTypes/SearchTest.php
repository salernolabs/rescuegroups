<?php
/**
 * IntakesServiceTypes Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServiceTypes\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\Search();

        
        $query->setServiceID("serviceID");
        $query->setServiceName("serviceName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesServicetypes", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("serviceID", $data["serviceID"]);
        $this->assertEquals("serviceName", $data["serviceName"]);
    }
}