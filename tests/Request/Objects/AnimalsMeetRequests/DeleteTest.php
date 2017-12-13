<?php
/**
 * AnimalsMeetRequest Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsMeetRequests\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Delete();

        
        $query->setMeetrequestID("meetrequestID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsMeetrequest", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("meetrequestID", $data["meetrequestID"]);
    }
}