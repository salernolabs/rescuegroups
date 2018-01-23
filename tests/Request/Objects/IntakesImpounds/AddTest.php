<?php
/**
 * IntakesImpounds add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesImpounds;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesImpounds\Add();

        $testObject = new \RescueGroups\Objects\IntakesImpound();
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->location = 'testValue Impound Location';
        $testObject->address = 'testValue Impound Street address';
        $testObject->city = 'testValue Impound City';
        $testObject->state = 'testValue Impound State/Province';
        $testObject->postalcode = 'testValue Impound Postal Code';
        $testObject->fromId = 'testValue Impound From';
        $testObject->staffId = 'testValue Impound Performed By';
        $testObject->reasonId = 'testValue Reason';

        $query->addIntakesImpound($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesImpounds', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesImpoundAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesImpoundDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesImpoundNotes']);
        $this->assertEquals('testValue Impound Location', $data['values'][0]['intakesImpoundLocation']);
        $this->assertEquals('testValue Impound Street address', $data['values'][0]['intakesImpoundAddress']);
        $this->assertEquals('testValue Impound City', $data['values'][0]['intakesImpoundCity']);
        $this->assertEquals('testValue Impound State/Province', $data['values'][0]['intakesImpoundState']);
        $this->assertEquals('testValue Impound Postal Code', $data['values'][0]['intakesImpoundPostalcode']);
        $this->assertEquals('testValue Impound From', $data['values'][0]['intakesImpoundFromID']);
        $this->assertEquals('testValue Impound Performed By', $data['values'][0]['intakesImpoundStaffID']);
        $this->assertEquals('testValue Reason', $data['values'][0]['intakesImpoundReasonID']);
    }
}