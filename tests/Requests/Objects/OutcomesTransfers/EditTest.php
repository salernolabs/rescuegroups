<?php
/**
 * OutcomesTransfers Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:26
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesTransfers\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesTransfers\Edit();

        
        $query->setOutcomesTransferID("outcomesTransferID");
        $query->setOutcomesTransferAnimalConditionID("outcomesTransferAnimalConditionID");
        $query->setOutcomesTransferDate("outcomesTransferDate");
        $query->setOutcomesTransferNotes("outcomesTransferNotes");
        $query->setOutcomesTransferReceiveID("outcomesTransferReceiveID");
        $query->setOutcomesTransferCoalitionMember("outcomesTransferCoalitionMember");
        $query->setOutcomesTransferReasonID("outcomesTransferReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesTransfers", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("outcomesTransferID", $data["outcomesTransferID"]);
        $this->assertEquals("outcomesTransferAnimalConditionID", $data["outcomesTransferAnimalConditionID"]);
        $this->assertEquals("outcomesTransferDate", $data["outcomesTransferDate"]);
        $this->assertEquals("outcomesTransferNotes", $data["outcomesTransferNotes"]);
        $this->assertEquals("outcomesTransferReceiveID", $data["outcomesTransferReceiveID"]);
        $this->assertEquals("outcomesTransferCoalitionMember", $data["outcomesTransferCoalitionMember"]);
        $this->assertEquals("outcomesTransferReasonID", $data["outcomesTransferReasonID"]);
    }
}