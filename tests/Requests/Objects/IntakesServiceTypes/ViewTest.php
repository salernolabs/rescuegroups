<?php
/**
 * IntakesServiceTypes View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesServiceTypes\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesServiceTypes\View();

        
        $query->setServiceID("serviceID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesServicetypes", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("serviceID", $data["serviceID"]);
    }
}