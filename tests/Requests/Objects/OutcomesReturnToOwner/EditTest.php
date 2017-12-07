<?php
/**
 * OutcomesReturnToOwner Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesReturnToOwner\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\Edit();

        
        $query->setId("id");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");
        $query->setOwnerID("ownerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("id", $data["outcomesReturntoownerID"]);
        $this->assertEquals("animalConditionID", $data["outcomesReturntoownerAnimalConditionID"]);
        $this->assertEquals("date", $data["outcomesReturntoownerDate"]);
        $this->assertEquals("notes", $data["outcomesReturntoownerNotes"]);
        $this->assertEquals("ownerID", $data["outcomesReturntoownerOwnerID"]);
    }
}