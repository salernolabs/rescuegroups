<?php
/**
 * OutcomesDeceased edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesDeceased;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Edit();

        $testObject = new \RescueGroups\Objects\OutcomesDeceased();
        $testObject->id = 'testValue ID';
        $testObject->animalConditionID = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->reason = 'testValue Reason';

        $query->updateOutcomesDeceased($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesDeceased', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['outcomesDeceasedID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesDeceasedAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesDeceasedDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesDeceasedNotes']);
        $this->assertEquals('testValue Reason', $data['values'][0]['outcomesDeceasedReason']);
    }
}