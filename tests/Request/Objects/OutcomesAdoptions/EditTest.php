<?php
/**
 * OutcomesAdoptions edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesAdoptions;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Edit();

        $testObject = new \RescueGroups\Objects\OutcomesAdoption();
        $testObject->id = 'testValue ID';
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->adoptionId = 'testValue Adoption';

        $query->updateOutcomesAdoption($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesAdoptions', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['outcomesAdoptionID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesAdoptionAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesAdoptionDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesAdoptionNotes']);
        $this->assertEquals('testValue Adoption', $data['values'][0]['outcomesAdoptionAdoptionID']);
    }
}