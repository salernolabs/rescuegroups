<?php
/**
 * IntakesBorninrescueshelter View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\IntakesBorninrescueshelter\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\IntakesBorninrescueshelter\View();

        
        $query->setIntakesBorninrescueshelterID("intakesBorninrescueshelterID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesBorninrescueshelter", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesBorninrescueshelterID", $data["intakesBorninrescueshelterID"]);
    }
}