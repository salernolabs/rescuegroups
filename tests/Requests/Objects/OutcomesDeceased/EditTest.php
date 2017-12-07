<?php
/**
 * OutcomesDeceased Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesDeceased\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesDeceased\Edit();

        
        $query->setId("id");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");
        $query->setReason("reason");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesDeceased", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("id", $data["outcomesDeceasedID"]);
        $this->assertEquals("animalConditionID", $data["outcomesDeceasedAnimalConditionID"]);
        $this->assertEquals("date", $data["outcomesDeceasedDate"]);
        $this->assertEquals("notes", $data["outcomesDeceasedNotes"]);
        $this->assertEquals("reason", $data["outcomesDeceasedReason"]);
    }
}