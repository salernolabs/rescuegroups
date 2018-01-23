<?php
/**
 * OutcomesReturnToOwner add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReturnToOwner;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReturnToOwner\Add();

        $testObject = new \RescueGroups\Objects\OutcomesReturnToOwner();
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->ownerId = 'testValue Return To';

        $query->addOutcomesReturnToOwner($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesReturntoowner', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesReturntoownerAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesReturntoownerDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesReturntoownerNotes']);
        $this->assertEquals('testValue Return To', $data['values'][0]['outcomesReturntoownerOwnerID']);
    }
}