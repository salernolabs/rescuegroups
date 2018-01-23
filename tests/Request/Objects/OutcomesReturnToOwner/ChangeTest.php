<?php
/**
 * OutcomesReturnToOwner change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReturnToOwner;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReturnToOwner\Change();
        $query->setOutcomeId("Outcome");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setOwnerId("Return To");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Outcome", $data['values'][0]["outcomeID"]);
        $this->assertEquals("Condition", $data['values'][0]["outcomesReturntoownerAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["outcomesReturntoownerDate"]);
        $this->assertEquals("Notes", $data['values'][0]["outcomesReturntoownerNotes"]);
        $this->assertEquals("Return To", $data['values'][0]["outcomesReturntoownerOwnerID"]);

        $this->assertEquals('outcomesReturntoowner', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}