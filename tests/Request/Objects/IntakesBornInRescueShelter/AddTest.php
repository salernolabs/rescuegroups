<?php
/**
 * IntakesBornInRescueShelter add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesBornInRescueShelter;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Add();

        $testObject = new \RescueGroups\Objects\IntakesBornInRescueShelter();
        $testObject->animalConditionID = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';

        $query->addIntakesBornInRescueShelter($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesBorninrescueshelter', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesBorninrescueshelterAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesBorninrescueshelterDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesBorninrescueshelterNotes']);
    }
}