<?php
/**
 * OutcomesReleases Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesReleases\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesReleases\Add();

        
        $query->setOutcomesReleaseIntakeID("outcomesReleaseIntakeID");
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

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("outcomesReleaseIntakeID", $data["outcomesReleaseIntakeID"]);
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