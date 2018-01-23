<?php
/**
 * OutcomesDeceased change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesDeceased;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Change();
        $query->setOutcomeId("Outcome");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setReason("Reason");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Outcome", $data['values'][0]["outcomeID"]);
        $this->assertEquals("Condition", $data['values'][0]["outcomesDeceasedAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["outcomesDeceasedDate"]);
        $this->assertEquals("Notes", $data['values'][0]["outcomesDeceasedNotes"]);
        $this->assertEquals("Reason", $data['values'][0]["outcomesDeceasedReason"]);

        $this->assertEquals('outcomesDeceased', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}