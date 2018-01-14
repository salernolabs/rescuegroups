<?php
/**
 * OutcomesReturnToOwner edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReturnToOwner;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReturnToOwner\Edit();

        $testObject = new \RescueGroups\Objects\OutcomesReturnToOwner();
        $testObject->id = 'testValue ID';
        $testObject->animalConditionID = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->ownerID = 'testValue Return To';

        $query->updateOutcomesReturnToOwner($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesReturntoowner', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['outcomesReturntoownerID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesReturntoownerAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesReturntoownerDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesReturntoownerNotes']);
        $this->assertEquals('testValue Return To', $data['values'][0]['outcomesReturntoownerOwnerID']);
    }
}