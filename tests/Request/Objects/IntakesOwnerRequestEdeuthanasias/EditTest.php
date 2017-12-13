<?php
/**
 * IntakesOwnerRequestEdeuthanasias Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerRequestEdeuthanasias;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestEdeuthanasias\Edit();

        
        $query->setIntakesOwnerrequestedeuthanasiaID("intakesOwnerrequestedeuthanasiaID");
        $query->setIntakesOwnerrequestedeuthanasiaAnimalID("intakesOwnerrequestedeuthanasiaAnimalID");
        $query->setIntakesOwnerrequestedeuthanasiaAnimalConditionID("intakesOwnerrequestedeuthanasiaAnimalConditionID");
        $query->setIntakesOwnerrequestedeuthanasiaDate("intakesOwnerrequestedeuthanasiaDate");
        $query->setIntakesOwnerrequestedeuthanasiaNotes("intakesOwnerrequestedeuthanasiaNotes");
        $query->setIntakesOwnerrequestedeuthanasiaOwnerID("intakesOwnerrequestedeuthanasiaOwnerID");
        $query->setIntakesOwnerrequestedeuthanasiaReasonID("intakesOwnerrequestedeuthanasiaReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnerrequestedeuthanasias", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("intakesOwnerrequestedeuthanasiaID", $data["intakesOwnerrequestedeuthanasiaID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaAnimalID", $data["intakesOwnerrequestedeuthanasiaAnimalID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaAnimalConditionID", $data["intakesOwnerrequestedeuthanasiaAnimalConditionID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaDate", $data["intakesOwnerrequestedeuthanasiaDate"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaNotes", $data["intakesOwnerrequestedeuthanasiaNotes"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaOwnerID", $data["intakesOwnerrequestedeuthanasiaOwnerID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaReasonID", $data["intakesOwnerrequestedeuthanasiaReasonID"]);
    }
}