<?php
/**
 * VolunteerHours View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteerHours;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteerHours\View();

        
        $query->setId("id");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteerHours", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("id", $data["volunteerHoursID"]);
    }
}