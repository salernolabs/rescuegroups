<?php
/**
 * OutcomesAdoptions change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesAdoptions;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Change();
        $query->setOutcomeId("Outcome");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setAdoptionId("Adoption");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Outcome", $data['values'][0]["outcomeID"]);
        $this->assertEquals("Condition", $data['values'][0]["outcomesAdoptionAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["outcomesAdoptionDate"]);
        $this->assertEquals("Notes", $data['values'][0]["outcomesAdoptionNotes"]);
        $this->assertEquals("Adoption", $data['values'][0]["outcomesAdoptionAdoptionID"]);

        $this->assertEquals('outcomesAdoptions', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}