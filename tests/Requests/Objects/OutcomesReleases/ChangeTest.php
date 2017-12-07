<?php
/**
 * OutcomesReleases Change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesReleases\Change;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesReleases\Change();

        
        $query->setOutcomeID("outcomeID");
        $query->setOutcomesReleaseAnimalConditionID("outcomesReleaseAnimalConditionID");
        $query->setOutcomesReleaseDate("outcomesReleaseDate");
        $query->setOutcomesReleaseNotes("outcomesReleaseNotes");
        $query->setOutcomesReleaseLocation("outcomesReleaseLocation");
        $query->setOutcomesReleaseAddress("outcomesReleaseAddress");
        $query->setOutcomesReleaseCity("outcomesReleaseCity");
        $query->setOutcomesReleaseState("outcomesReleaseState");
        $query->setOutcomesReleasePostalcode("outcomesReleasePostalcode");
        $query->setOutcomesReleaseByID("outcomesReleaseByID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReleases", $data["objectType"]);

        $this->assertEquals("change", $data["objectAction"]);

        $this->assertEquals("outcomeID", $data["outcomeID"]);
        $this->assertEquals("outcomesReleaseAnimalConditionID", $data["outcomesReleaseAnimalConditionID"]);
        $this->assertEquals("outcomesReleaseDate", $data["outcomesReleaseDate"]);
        $this->assertEquals("outcomesReleaseNotes", $data["outcomesReleaseNotes"]);
        $this->assertEquals("outcomesReleaseLocation", $data["outcomesReleaseLocation"]);
        $this->assertEquals("outcomesReleaseAddress", $data["outcomesReleaseAddress"]);
        $this->assertEquals("outcomesReleaseCity", $data["outcomesReleaseCity"]);
        $this->assertEquals("outcomesReleaseState", $data["outcomesReleaseState"]);
        $this->assertEquals("outcomesReleasePostalcode", $data["outcomesReleasePostalcode"]);
        $this->assertEquals("outcomesReleaseByID", $data["outcomesReleaseByID"]);
    }
}