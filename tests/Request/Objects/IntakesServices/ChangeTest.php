<?php
/**
 * IntakesServices change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServices;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServices\Change();
        $query->setIntakeId("Intake");
        $query->setAnimalId("Animal");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setOwnerId("Owner");
        $query->setServicetypeId("Service");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Intake", $data['values'][0]["intakeID"]);
        $this->assertEquals("Animal", $data['values'][0]["intakesServiceAnimalID"]);
        $this->assertEquals("Condition", $data['values'][0]["intakesServiceAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["intakesServiceDate"]);
        $this->assertEquals("Notes", $data['values'][0]["intakesServiceNotes"]);
        $this->assertEquals("Owner", $data['values'][0]["intakesServiceOwnerID"]);
        $this->assertEquals("Service", $data['values'][0]["intakesServiceServicetypeID"]);

        $this->assertEquals('intakesServices', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}