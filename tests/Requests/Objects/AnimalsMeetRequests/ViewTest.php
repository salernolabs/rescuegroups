<?php
/**
 * AnimalsMeetRequests View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:35
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsMeetRequests\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsMeetRequests\View();

        
        $query->setMeetrequestID("meetrequestID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsMeetrequests", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("meetrequestID", $data["meetrequestID"]);
    }
}