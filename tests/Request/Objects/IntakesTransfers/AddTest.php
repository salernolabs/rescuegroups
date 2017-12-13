<?php
/**
 * IntakesTransfers Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesTransfers;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesTransfers\Add();

        
        $query->setIntakesTransferAnimalID("intakesTransferAnimalID");
        $query->setIntakesTransferAnimalConditionID("intakesTransferAnimalConditionID");
        $query->setIntakesTransferDate("intakesTransferDate");
        $query->setIntakesTransferNotes("intakesTransferNotes");
        $query->setIntakesTransferFromID("intakesTransferFromID");
        $query->setIntakesTransferCoalitionMember("intakesTransferCoalitionMember");
        $query->setIntakesTransferReasonID("intakesTransferReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesTransfers", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("intakesTransferAnimalID", $data["intakesTransferAnimalID"]);
        $this->assertEquals("intakesTransferAnimalConditionID", $data["intakesTransferAnimalConditionID"]);
        $this->assertEquals("intakesTransferDate", $data["intakesTransferDate"]);
        $this->assertEquals("intakesTransferNotes", $data["intakesTransferNotes"]);
        $this->assertEquals("intakesTransferFromID", $data["intakesTransferFromID"]);
        $this->assertEquals("intakesTransferCoalitionMember", $data["intakesTransferCoalitionMember"]);
        $this->assertEquals("intakesTransferReasonID", $data["intakesTransferReasonID"]);
    }
}