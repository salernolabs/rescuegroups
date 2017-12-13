<?php
/**
 * Events Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Events;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Events\Delete();

        
        $query->setEventID("eventID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("events", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("eventID", $data["eventID"]);
    }
}