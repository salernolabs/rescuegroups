<?php
/**
 * IntakesOwnerSurrenders Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Search();

        
        $query->setIntakesOwnersurrenderID("intakesOwnersurrenderID");
        $query->setIntakesOwnersurrenderAnimalID("intakesOwnersurrenderAnimalID");
        $query->setIntakesOwnersurrenderAnimalConditionID("intakesOwnersurrenderAnimalConditionID");
        $query->setIntakesOwnersurrenderDate("intakesOwnersurrenderDate");
        $query->setIntakesOwnersurrenderNotes("intakesOwnersurrenderNotes");
        $query->setIntakesOwnersurrenderOwnerID("intakesOwnersurrenderOwnerID");
        $query->setIntakesOwnersurrenderReasonID("intakesOwnersurrenderReasonID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setOwnerName("ownerName");
        $query->setSurrenderReason("surrenderReason");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnersurrenders", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("intakesOwnersurrenderID", $data["intakesOwnersurrenderID"]);
        $this->assertEquals("intakesOwnersurrenderAnimalID", $data["intakesOwnersurrenderAnimalID"]);
        $this->assertEquals("intakesOwnersurrenderAnimalConditionID", $data["intakesOwnersurrenderAnimalConditionID"]);
        $this->assertEquals("intakesOwnersurrenderDate", $data["intakesOwnersurrenderDate"]);
        $this->assertEquals("intakesOwnersurrenderNotes", $data["intakesOwnersurrenderNotes"]);
        $this->assertEquals("intakesOwnersurrenderOwnerID", $data["intakesOwnersurrenderOwnerID"]);
        $this->assertEquals("intakesOwnersurrenderReasonID", $data["intakesOwnersurrenderReasonID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("ownerName", $data["ownerName"]);
        $this->assertEquals("surrenderReason", $data["surrenderReason"]);
    }
}