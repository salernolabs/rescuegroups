<?php
/**
 * IntakesStrayDropoffs add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayDropoffs;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Add();

        $testObject = new \RescueGroups\Objects\IntakesStrayDropoff();
        $testObject->intakesStraydropoffAnimalConditionID = 'testValue Condition';
        $testObject->intakesStraydropoffDate = 'testValue Date';
        $testObject->intakesStraydropoffNotes = 'testValue Notes';
        $testObject->intakesStraydropoffFoundLocation = 'testValue Found Location';
        $testObject->intakesStraydropoffFoundAddress = 'testValue Found Street address';
        $testObject->intakesStraydropoffFoundCity = 'testValue Found City';
        $testObject->intakesStraydropoffFoundState = 'testValue Found State/Province';
        $testObject->intakesStraydropoffFoundPostalcode = 'testValue Found Postal Code';
        $testObject->intakesStraydropoffFinderID = 'testValue Dropped off by';

        $query->addIntakesStrayDropoff($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesStraydropoffs', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesStraydropoffAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesStraydropoffDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesStraydropoffNotes']);
        $this->assertEquals('testValue Found Location', $data['values'][0]['intakesStraydropoffFoundLocation']);
        $this->assertEquals('testValue Found Street address', $data['values'][0]['intakesStraydropoffFoundAddress']);
        $this->assertEquals('testValue Found City', $data['values'][0]['intakesStraydropoffFoundCity']);
        $this->assertEquals('testValue Found State/Province', $data['values'][0]['intakesStraydropoffFoundState']);
        $this->assertEquals('testValue Found Postal Code', $data['values'][0]['intakesStraydropoffFoundPostalcode']);
        $this->assertEquals('testValue Dropped off by', $data['values'][0]['intakesStraydropoffFinderID']);
    }
}