<?php
/**
 * OutcomesAdoptions add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesAdoptions;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Add();

        $testObject = new \RescueGroups\Objects\OutcomesAdoption();
        $testObject->outcomesAdoptionAnimalConditionID = 'testValue Condition';
        $testObject->outcomesAdoptionDate = 'testValue Date';
        $testObject->outcomesAdoptionNotes = 'testValue Notes';
        $testObject->outcomesAdoptionAdoptionID = 'testValue Adoption';

        $query->addOutcomesAdoption($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesAdoptions', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesAdoptionAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesAdoptionDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesAdoptionNotes']);
        $this->assertEquals('testValue Adoption', $data['values'][0]['outcomesAdoptionAdoptionID']);
    }
}