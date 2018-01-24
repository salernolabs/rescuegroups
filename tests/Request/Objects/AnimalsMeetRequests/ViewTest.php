<?php
/**
 * AnimalsMeetRequests view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsMeetRequests;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\View();
        $query->setId("Meet Request ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Meet Request ID", $data['values'][0]["meetrequestID"]);

        $this->assertEquals('animalsMeetrequests', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}