<?php
/**
 * OutcomesReturnToOwner Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesReturnToOwner\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\Add();

        
        $query->setIntakeID("intakeID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");
        $query->setOwnerID("ownerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("intakeID", $data["outcomesReturntoownerIntakeID"]);
        $this->assertEquals("animalConditionID", $data["outcomesReturntoownerAnimalConditionID"]);
        $this->assertEquals("date", $data["outcomesReturntoownerDate"]);
        $this->assertEquals("notes", $data["outcomesReturntoownerNotes"]);
        $this->assertEquals("ownerID", $data["outcomesReturntoownerOwnerID"]);
    }
}