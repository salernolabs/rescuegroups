<?php
/**
 * OutcomesDeceased add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesDeceased;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Add();

        $testObject = new \RescueGroups\Objects\OutcomesDeceased();
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->reason = 'testValue Reason';

        $query->addOutcomesDeceased($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesDeceased', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesDeceasedAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesDeceasedDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesDeceasedNotes']);
        $this->assertEquals('testValue Reason', $data['values'][0]['outcomesDeceasedReason']);
    }
}