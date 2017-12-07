<?php
/**
 * OutcomesAdoptions Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesAdoptions\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesAdoptions\Edit();

        
        $query->setOutcomesAdoptionID("outcomesAdoptionID");
        $query->setOutcomesAdoptionAnimalConditionID("outcomesAdoptionAnimalConditionID");
        $query->setOutcomesAdoptionDate("outcomesAdoptionDate");
        $query->setOutcomesAdoptionNotes("outcomesAdoptionNotes");
        $query->setOutcomesAdoptionAdoptionID("outcomesAdoptionAdoptionID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesAdoptions", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("outcomesAdoptionID", $data["outcomesAdoptionID"]);
        $this->assertEquals("outcomesAdoptionAnimalConditionID", $data["outcomesAdoptionAnimalConditionID"]);
        $this->assertEquals("outcomesAdoptionDate", $data["outcomesAdoptionDate"]);
        $this->assertEquals("outcomesAdoptionNotes", $data["outcomesAdoptionNotes"]);
        $this->assertEquals("outcomesAdoptionAdoptionID", $data["outcomesAdoptionAdoptionID"]);
    }
}