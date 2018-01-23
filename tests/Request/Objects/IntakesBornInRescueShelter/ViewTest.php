<?php
/**
 * IntakesBornInRescueShelter view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesBornInRescueShelter;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\View();
        $query->setId("Born In Rescue/Shelter");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Born In Rescue/Shelter", $data['values'][0]["intakesBorninrescueshelterID"]);

        $this->assertEquals('intakesBorninrescueshelter', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}