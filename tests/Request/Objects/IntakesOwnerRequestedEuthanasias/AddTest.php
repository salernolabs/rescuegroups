<?php
/**
 * IntakesOwnerRequestedEuthanasias add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerRequestedEuthanasias;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Add();

        $testObject = new \RescueGroups\Objects\IntakesOwnerRequestedEuthanasia();
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->ownerId = 'testValue Owner';
        $testObject->reasonId = 'testValue Euthanasia Reason';

        $query->addIntakesOwnerRequestedEuthanasia($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnerrequestedeuthanasias', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesOwnerrequestedeuthanasiaAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesOwnerrequestedeuthanasiaDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesOwnerrequestedeuthanasiaNotes']);
        $this->assertEquals('testValue Owner', $data['values'][0]['intakesOwnerrequestedeuthanasiaOwnerID']);
        $this->assertEquals('testValue Euthanasia Reason', $data['values'][0]['intakesOwnerrequestedeuthanasiaReasonID']);
    }
}