<?php
/**
 * IntakesBornInRescueShelter edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesBornInRescueShelter;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Edit();

        $testObject = new \RescueGroups\Objects\IntakesBornInRescueShelter();
        $testObject->id = 'testValue Born In Rescue/Shelter';
        $testObject->animalID = 'testValue Animal';
        $testObject->animalConditionID = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';

        $query->updateIntakesBornInRescueShelter($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesBorninrescueshelter', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Born In Rescue/Shelter', $data['values'][0]['intakesBorninrescueshelterID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['intakesBorninrescueshelterAnimalID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesBorninrescueshelterAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesBorninrescueshelterDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesBorninrescueshelterNotes']);
    }
}