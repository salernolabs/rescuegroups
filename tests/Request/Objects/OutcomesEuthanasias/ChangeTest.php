<?php
/**
 * OutcomesEuthanasias change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesEuthanasias;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Change();
        $query->setOutcomeId("Outcome");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setReasonId("Euthanasia Reason");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Outcome", $data['values'][0]["outcomeID"]);
        $this->assertEquals("Condition", $data['values'][0]["outcomesEuthanasiaAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["outcomesEuthanasiaDate"]);
        $this->assertEquals("Notes", $data['values'][0]["outcomesEuthanasiaNotes"]);
        $this->assertEquals("Euthanasia Reason", $data['values'][0]["outcomesEuthanasiaReasonID"]);

        $this->assertEquals('outcomesEuthanasias', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}