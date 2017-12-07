<?php
/**
 * OutcomesReleases Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:26
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesReleases\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesReleases\Search();

        
        $query->setOutcomesReleaseID("outcomesReleaseID");
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
        $query->setAnimalID("animalID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setReleaseByName("releaseByName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReleases", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("outcomesReleaseID", $data["outcomesReleaseID"]);
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
        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("releaseByName", $data["releaseByName"]);
    }
}