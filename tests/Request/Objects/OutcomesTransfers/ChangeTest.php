<?php
/**
 * OutcomesTransfers change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesTransfers;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Change();
        $query->setOutcomeId("Outcome");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setReceiveId("Received");
        $query->setCoalitionMember("Coalition Member");
        $query->setReasonId("Transfer Reason");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Outcome", $data['values'][0]["outcomeID"]);
        $this->assertEquals("Condition", $data['values'][0]["outcomesTransferAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["outcomesTransferDate"]);
        $this->assertEquals("Notes", $data['values'][0]["outcomesTransferNotes"]);
        $this->assertEquals("Received", $data['values'][0]["outcomesTransferReceiveID"]);
        $this->assertEquals("Coalition Member", $data['values'][0]["outcomesTransferCoalitionMember"]);
        $this->assertEquals("Transfer Reason", $data['values'][0]["outcomesTransferReasonID"]);

        $this->assertEquals('outcomesTransfers', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}