<?php
/**
 * Events PublicView Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:39
 */
namespace RescueGroups\Tests\Requests\Objects\Events\PublicView;

class PublicViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Events\PublicView();

        
        $query->setEventID("eventID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("events", $data["objectType"]);

        $this->assertEquals("publicView", $data["objectAction"]);

        $this->assertEquals("eventID", $data["eventID"]);
    }
}