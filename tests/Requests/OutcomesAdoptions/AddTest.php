<?php
/**
 * OutcomesAdoptions Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesAdoptions\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesAdoptions\Add();

        
        $query->setOutcomesAdoptionIntakeID("outcomesAdoptionIntakeID");
        $query->setOutcomesAdoptionAnimalConditionID("outcomesAdoptionAnimalConditionID");
        $query->setOutcomesAdoptionDate("outcomesAdoptionDate");
        $query->setOutcomesAdoptionNotes("outcomesAdoptionNotes");
        $query->setOutcomesAdoptionAdoptionID("outcomesAdoptionAdoptionID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesAdoptions", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("outcomesAdoptionIntakeID", $data["outcomesAdoptionIntakeID"]);
        $this->assertEquals("outcomesAdoptionAnimalConditionID", $data["outcomesAdoptionAnimalConditionID"]);
        $this->assertEquals("outcomesAdoptionDate", $data["outcomesAdoptionDate"]);
        $this->assertEquals("outcomesAdoptionNotes", $data["outcomesAdoptionNotes"]);
        $this->assertEquals("outcomesAdoptionAdoptionID", $data["outcomesAdoptionAdoptionID"]);
    }
}