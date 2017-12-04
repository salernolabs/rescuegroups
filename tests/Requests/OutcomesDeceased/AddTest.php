<?php
/**
 * OutcomesDeceased Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesDeceased\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesDeceased\Add();

        
        $query->setOutcomesDeceasedIntakeID("outcomesDeceasedIntakeID");
        $query->setOutcomesDeceasedAnimalConditionID("outcomesDeceasedAnimalConditionID");
        $query->setOutcomesDeceasedDate("outcomesDeceasedDate");
        $query->setOutcomesDeceasedNotes("outcomesDeceasedNotes");
        $query->setOutcomesDeceasedReason("outcomesDeceasedReason");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesDeceased", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("outcomesDeceasedIntakeID", $data["outcomesDeceasedIntakeID"]);
        $this->assertEquals("outcomesDeceasedAnimalConditionID", $data["outcomesDeceasedAnimalConditionID"]);
        $this->assertEquals("outcomesDeceasedDate", $data["outcomesDeceasedDate"]);
        $this->assertEquals("outcomesDeceasedNotes", $data["outcomesDeceasedNotes"]);
        $this->assertEquals("outcomesDeceasedReason", $data["outcomesDeceasedReason"]);
    }
}