<?php
/**
 * OutcomesDeceased Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesDeceased;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Add();

        
        $query->setIntakeID("intakeID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");
        $query->setReason("reason");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesDeceased", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("intakeID", $data["outcomesDeceasedIntakeID"]);
        $this->assertEquals("animalConditionID", $data["outcomesDeceasedAnimalConditionID"]);
        $this->assertEquals("date", $data["outcomesDeceasedDate"]);
        $this->assertEquals("notes", $data["outcomesDeceasedNotes"]);
        $this->assertEquals("reason", $data["outcomesDeceasedReason"]);
    }
}