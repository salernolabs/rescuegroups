<?php
/**
 * VolunteerHours View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\VolunteerHours\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\VolunteerHours\View();

        
        $query->setVolunteerHoursID("volunteerHoursID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteerHours", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("volunteerHoursID", $data["volunteerHoursID"]);
    }
}