<?php
/**
 * IntakesOwnerRequestEdeuthanasias Change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:40
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesOwnerRequestEdeuthanasias\Change;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesOwnerRequestEdeuthanasias\Change();

        
        $query->setIntakeID("intakeID");
        $query->setIntakesOwnerrequestedeuthanasiaAnimalID("intakesOwnerrequestedeuthanasiaAnimalID");
        $query->setIntakesOwnerrequestedeuthanasiaAnimalConditionID("intakesOwnerrequestedeuthanasiaAnimalConditionID");
        $query->setIntakesOwnerrequestedeuthanasiaDate("intakesOwnerrequestedeuthanasiaDate");
        $query->setIntakesOwnerrequestedeuthanasiaNotes("intakesOwnerrequestedeuthanasiaNotes");
        $query->setIntakesOwnerrequestedeuthanasiaOwnerID("intakesOwnerrequestedeuthanasiaOwnerID");
        $query->setIntakesOwnerrequestedeuthanasiaReasonID("intakesOwnerrequestedeuthanasiaReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnerrequestedeuthanasias", $data["objectType"]);

        $this->assertEquals("change", $data["objectAction"]);

        $this->assertEquals("intakeID", $data["intakeID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaAnimalID", $data["intakesOwnerrequestedeuthanasiaAnimalID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaAnimalConditionID", $data["intakesOwnerrequestedeuthanasiaAnimalConditionID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaDate", $data["intakesOwnerrequestedeuthanasiaDate"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaNotes", $data["intakesOwnerrequestedeuthanasiaNotes"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaOwnerID", $data["intakesOwnerrequestedeuthanasiaOwnerID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaReasonID", $data["intakesOwnerrequestedeuthanasiaReasonID"]);
    }
}