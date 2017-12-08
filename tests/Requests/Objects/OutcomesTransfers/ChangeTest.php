<?php
/**
 * OutcomesTransfers Change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesTransfers\Change;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesTransfers\Change();

        
        $query->setOutcomeID("outcomeID");
        $query->setOutcomesTransferAnimalConditionID("outcomesTransferAnimalConditionID");
        $query->setOutcomesTransferDate("outcomesTransferDate");
        $query->setOutcomesTransferNotes("outcomesTransferNotes");
        $query->setOutcomesTransferReceiveID("outcomesTransferReceiveID");
        $query->setOutcomesTransferCoalitionMember("outcomesTransferCoalitionMember");
        $query->setOutcomesTransferReasonID("outcomesTransferReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesTransfers", $data["objectType"]);

        $this->assertEquals("change", $data["objectAction"]);

        $this->assertEquals("outcomeID", $data["outcomeID"]);
        $this->assertEquals("outcomesTransferAnimalConditionID", $data["outcomesTransferAnimalConditionID"]);
        $this->assertEquals("outcomesTransferDate", $data["outcomesTransferDate"]);
        $this->assertEquals("outcomesTransferNotes", $data["outcomesTransferNotes"]);
        $this->assertEquals("outcomesTransferReceiveID", $data["outcomesTransferReceiveID"]);
        $this->assertEquals("outcomesTransferCoalitionMember", $data["outcomesTransferCoalitionMember"]);
        $this->assertEquals("outcomesTransferReasonID", $data["outcomesTransferReasonID"]);
    }
}