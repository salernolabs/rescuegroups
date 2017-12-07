<?php
/**
 * IntakesOwnerSurrenders Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:22
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesOwnerSurrenders\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesOwnerSurrenders\Edit();

        
        $query->setIntakesOwnersurrenderID("intakesOwnersurrenderID");
        $query->setIntakesOwnersurrenderAnimalID("intakesOwnersurrenderAnimalID");
        $query->setIntakesOwnersurrenderAnimalConditionID("intakesOwnersurrenderAnimalConditionID");
        $query->setIntakesOwnersurrenderDate("intakesOwnersurrenderDate");
        $query->setIntakesOwnersurrenderNotes("intakesOwnersurrenderNotes");
        $query->setIntakesOwnersurrenderOwnerID("intakesOwnersurrenderOwnerID");
        $query->setIntakesOwnersurrenderReasonID("intakesOwnersurrenderReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnersurrenders", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("intakesOwnersurrenderID", $data["intakesOwnersurrenderID"]);
        $this->assertEquals("intakesOwnersurrenderAnimalID", $data["intakesOwnersurrenderAnimalID"]);
        $this->assertEquals("intakesOwnersurrenderAnimalConditionID", $data["intakesOwnersurrenderAnimalConditionID"]);
        $this->assertEquals("intakesOwnersurrenderDate", $data["intakesOwnersurrenderDate"]);
        $this->assertEquals("intakesOwnersurrenderNotes", $data["intakesOwnersurrenderNotes"]);
        $this->assertEquals("intakesOwnersurrenderOwnerID", $data["intakesOwnersurrenderOwnerID"]);
        $this->assertEquals("intakesOwnersurrenderReasonID", $data["intakesOwnersurrenderReasonID"]);
    }
}