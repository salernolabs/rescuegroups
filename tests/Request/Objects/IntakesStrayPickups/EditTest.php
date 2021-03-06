<?php
/**
 * IntakesStrayPickups edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayPickups;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Edit();

        $testObject = new \RescueGroups\Objects\IntakesStrayPickup();
        $testObject->id = 'testValue Stray Pickup';
        $testObject->animalId = 'testValue Animal';
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->location = 'testValue Pickup Location';
        $testObject->address = 'testValue Pickup Street address';
        $testObject->city = 'testValue Pickup City';
        $testObject->state = 'testValue Pickup State/Province';
        $testObject->postalcode = 'testValue Pickup Postal Code';
        $testObject->finderId = 'testValue Found By';
        $testObject->staffId = 'testValue Pickup By';

        $query->updateIntakesStrayPickup($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesStraypickups', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Stray Pickup', $data['values'][0]['intakesStraypickupID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['intakesStraypickupAnimalID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesStraypickupAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesStraypickupDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesStraypickupNotes']);
        $this->assertEquals('testValue Pickup Location', $data['values'][0]['intakesStraypickupLocation']);
        $this->assertEquals('testValue Pickup Street address', $data['values'][0]['intakesStraypickupAddress']);
        $this->assertEquals('testValue Pickup City', $data['values'][0]['intakesStraypickupCity']);
        $this->assertEquals('testValue Pickup State/Province', $data['values'][0]['intakesStraypickupState']);
        $this->assertEquals('testValue Pickup Postal Code', $data['values'][0]['intakesStraypickupPostalcode']);
        $this->assertEquals('testValue Found By', $data['values'][0]['intakesStraypickupFinderID']);
        $this->assertEquals('testValue Pickup By', $data['values'][0]['intakesStraypickupStaffID']);
    }
}