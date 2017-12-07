<?php
/**
 * IntakesTransfers Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:41
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesTransfers\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesTransfers\Edit();

        
        $query->setIntakesTransferID("intakesTransferID");
        $query->setIntakesTransferAnimalID("intakesTransferAnimalID");
        $query->setIntakesTransferAnimalConditionID("intakesTransferAnimalConditionID");
        $query->setIntakesTransferDate("intakesTransferDate");
        $query->setIntakesTransferNotes("intakesTransferNotes");
        $query->setIntakesTransferFromID("intakesTransferFromID");
        $query->setIntakesTransferCoalitionMember("intakesTransferCoalitionMember");
        $query->setIntakesTransferReasonID("intakesTransferReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesTransfers", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("intakesTransferID", $data["intakesTransferID"]);
        $this->assertEquals("intakesTransferAnimalID", $data["intakesTransferAnimalID"]);
        $this->assertEquals("intakesTransferAnimalConditionID", $data["intakesTransferAnimalConditionID"]);
        $this->assertEquals("intakesTransferDate", $data["intakesTransferDate"]);
        $this->assertEquals("intakesTransferNotes", $data["intakesTransferNotes"]);
        $this->assertEquals("intakesTransferFromID", $data["intakesTransferFromID"]);
        $this->assertEquals("intakesTransferCoalitionMember", $data["intakesTransferCoalitionMember"]);
        $this->assertEquals("intakesTransferReasonID", $data["intakesTransferReasonID"]);
    }
}