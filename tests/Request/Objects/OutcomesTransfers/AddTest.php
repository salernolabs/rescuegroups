<?php
/**
 * OutcomesTransfers Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesTransfers\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Add();

        
        $query->setOutcomesTransferIntakeID("outcomesTransferIntakeID");
        $query->setOutcomesTransferAnimalConditionID("outcomesTransferAnimalConditionID");
        $query->setOutcomesTransferDate("outcomesTransferDate");
        $query->setOutcomesTransferNotes("outcomesTransferNotes");
        $query->setOutcomesTransferReceiveID("outcomesTransferReceiveID");
        $query->setOutcomesTransferCoalitionMember("outcomesTransferCoalitionMember");
        $query->setOutcomesTransferReasonID("outcomesTransferReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesTransfers", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("outcomesTransferIntakeID", $data["outcomesTransferIntakeID"]);
        $this->assertEquals("outcomesTransferAnimalConditionID", $data["outcomesTransferAnimalConditionID"]);
        $this->assertEquals("outcomesTransferDate", $data["outcomesTransferDate"]);
        $this->assertEquals("outcomesTransferNotes", $data["outcomesTransferNotes"]);
        $this->assertEquals("outcomesTransferReceiveID", $data["outcomesTransferReceiveID"]);
        $this->assertEquals("outcomesTransferCoalitionMember", $data["outcomesTransferCoalitionMember"]);
        $this->assertEquals("outcomesTransferReasonID", $data["outcomesTransferReasonID"]);
    }
}