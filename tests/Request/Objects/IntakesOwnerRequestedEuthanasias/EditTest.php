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
        $testObject->id = 'testValue Owner requestedeuthanasia';
        $testObject->animalId = 'testValue Animal';
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->ownerId = 'testValue Owner';
        $testObject->reasonId = 'testValue Euthanasia Reason';

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