<?php
/**
 * IntakesOwnerSurrenders Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Add();

        
        $query->setIntakesOwnersurrenderAnimalID("intakesOwnersurrenderAnimalID");
        $query->setIntakesOwnersurrenderAnimalConditionID("intakesOwnersurrenderAnimalConditionID");
        $query->setIntakesOwnersurrenderDate("intakesOwnersurrenderDate");
        $query->setIntakesOwnersurrenderNotes("intakesOwnersurrenderNotes");
        $query->setIntakesOwnersurrenderOwnerID("intakesOwnersurrenderOwnerID");
        $query->setIntakesOwnersurrenderReasonID("intakesOwnersurrenderReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnersurrenders", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("intakesOwnersurrenderAnimalID", $data["intakesOwnersurrenderAnimalID"]);
        $this->assertEquals("intakesOwnersurrenderAnimalConditionID", $data["intakesOwnersurrenderAnimalConditionID"]);
        $this->assertEquals("intakesOwnersurrenderDate", $data["intakesOwnersurrenderDate"]);
        $this->assertEquals("intakesOwnersurrenderNotes", $data["intakesOwnersurrenderNotes"]);
        $this->assertEquals("intakesOwnersurrenderOwnerID", $data["intakesOwnersurrenderOwnerID"]);
        $this->assertEquals("intakesOwnersurrenderReasonID", $data["intakesOwnersurrenderReasonID"]);
    }
}