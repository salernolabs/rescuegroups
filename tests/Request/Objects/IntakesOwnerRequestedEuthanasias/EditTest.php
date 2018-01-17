<?php
/**
 * IntakesOwnerRequestedEuthanasias edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerRequestedEuthanasias;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Edit();

        $testObject = new \RescueGroups\Objects\IntakesOwnerRequestedEuthanasia();
        $testObject->intakesOwnerrequestedeuthanasiaID = 'testValue Owner requestedeuthanasia';
        $testObject->intakesOwnerrequestedeuthanasiaAnimalID = 'testValue Animal';
        $testObject->intakesOwnerrequestedeuthanasiaAnimalConditionID = 'testValue Condition';
        $testObject->intakesOwnerrequestedeuthanasiaDate = 'testValue Date';
        $testObject->intakesOwnerrequestedeuthanasiaNotes = 'testValue Notes';
        $testObject->intakesOwnerrequestedeuthanasiaOwnerID = 'testValue Owner';
        $testObject->intakesOwnerrequestedeuthanasiaReasonID = 'testValue Euthanasia Reason';

        $query->updateIntakesOwnerRequestedEuthanasia($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnerrequestedeuthanasias', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Owner requestedeuthanasia', $data['values'][0]['intakesOwnerrequestedeuthanasiaID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['intakesOwnerrequestedeuthanasiaAnimalID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesOwnerrequestedeuthanasiaAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesOwnerrequestedeuthanasiaDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesOwnerrequestedeuthanasiaNotes']);
        $this->assertEquals('testValue Owner', $data['values'][0]['intakesOwnerrequestedeuthanasiaOwnerID']);
        $this->assertEquals('testValue Euthanasia Reason', $data['values'][0]['intakesOwnerrequestedeuthanasiaReasonID']);
    }
}