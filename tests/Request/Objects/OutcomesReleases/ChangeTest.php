<?php
/**
 * OutcomesReleases change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReleases;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReleases\Change();
        $query->setOutcomeId("Outcome");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setLocation("Location");
        $query->setAddress("Street address");
        $query->setCity("City");
        $query->setState("State/Province");
        $query->setPostalcode("Postal Code");
        $query->setById("Released By");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Outcome", $data['values'][0]["outcomeID"]);
        $this->assertEquals("Condition", $data['values'][0]["outcomesReleaseAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["outcomesReleaseDate"]);
        $this->assertEquals("Notes", $data['values'][0]["outcomesReleaseNotes"]);
        $this->assertEquals("Location", $data['values'][0]["outcomesReleaseLocation"]);
        $this->assertEquals("Street address", $data['values'][0]["outcomesReleaseAddress"]);
        $this->assertEquals("City", $data['values'][0]["outcomesReleaseCity"]);
        $this->assertEquals("State/Province", $data['values'][0]["outcomesReleaseState"]);
        $this->assertEquals("Postal Code", $data['values'][0]["outcomesReleasePostalcode"]);
        $this->assertEquals("Released By", $data['values'][0]["outcomesReleaseByID"]);

        $this->assertEquals('outcomesReleases', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}