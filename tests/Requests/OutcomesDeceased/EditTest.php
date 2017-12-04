<?php
/**
 * OutcomesDeceased Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesDeceased\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesDeceased\Edit();

        
        $query->setOutcomesDeceasedID("outcomesDeceasedID");
        $query->setOutcomesDeceasedAnimalConditionID("outcomesDeceasedAnimalConditionID");
        $query->setOutcomesDeceasedDate("outcomesDeceasedDate");
        $query->setOutcomesDeceasedNotes("outcomesDeceasedNotes");
        $query->setOutcomesDeceasedReason("outcomesDeceasedReason");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesDeceased", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("outcomesDeceasedID", $data["outcomesDeceasedID"]);
        $this->assertEquals("outcomesDeceasedAnimalConditionID", $data["outcomesDeceasedAnimalConditionID"]);
        $this->assertEquals("outcomesDeceasedDate", $data["outcomesDeceasedDate"]);
        $this->assertEquals("outcomesDeceasedNotes", $data["outcomesDeceasedNotes"]);
        $this->assertEquals("outcomesDeceasedReason", $data["outcomesDeceasedReason"]);
    }
}