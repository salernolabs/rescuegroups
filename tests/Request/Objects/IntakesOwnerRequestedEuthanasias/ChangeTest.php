<?php
/**
 * IntakesOwnerRequestedEuthanasias change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerRequestedEuthanasias;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Change();
        $query->setIntakeId("Intake");
        $query->setAnimalId("Animal");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setOwnerId("Owner");
        $query->setReasonId("Euthanasia Reason");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Intake", $data['values'][0]["intakeID"]);
        $this->assertEquals("Animal", $data['values'][0]["intakesOwnerrequestedeuthanasiaAnimalID"]);
        $this->assertEquals("Condition", $data['values'][0]["intakesOwnerrequestedeuthanasiaAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["intakesOwnerrequestedeuthanasiaDate"]);
        $this->assertEquals("Notes", $data['values'][0]["intakesOwnerrequestedeuthanasiaNotes"]);
        $this->assertEquals("Owner", $data['values'][0]["intakesOwnerrequestedeuthanasiaOwnerID"]);
        $this->assertEquals("Euthanasia Reason", $data['values'][0]["intakesOwnerrequestedeuthanasiaReasonID"]);

        $this->assertEquals('intakesOwnerrequestedeuthanasias', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}