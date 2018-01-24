<?php
/**
 * IntakesTransfers change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesTransfers;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesTransfers\Change();
        $query->setIntakeId("Intake");
        $query->setAnimalId("Animal");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setFromId("Transferred From");
        $query->setCoalitionMember("Coalition Member");
        $query->setReasonId("Transfer Reason");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Intake", $data['values'][0]["intakeID"]);
        $this->assertEquals("Animal", $data['values'][0]["intakesTransferAnimalID"]);
        $this->assertEquals("Condition", $data['values'][0]["intakesTransferAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["intakesTransferDate"]);
        $this->assertEquals("Notes", $data['values'][0]["intakesTransferNotes"]);
        $this->assertEquals("Transferred From", $data['values'][0]["intakesTransferFromID"]);
        $this->assertEquals("Coalition Member", $data['values'][0]["intakesTransferCoalitionMember"]);
        $this->assertEquals("Transfer Reason", $data['values'][0]["intakesTransferReasonID"]);

        $this->assertEquals('intakesTransfers', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}