<?php
/**
 * OutcomesEuthanasias add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesEuthanasias;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Add();

        $testObject = new \RescueGroups\Objects\OutcomesEuthanasia();
        $testObject->outcomesEuthanasiaAnimalConditionID = 'testValue Condition';
        $testObject->outcomesEuthanasiaDate = 'testValue Date';
        $testObject->outcomesEuthanasiaNotes = 'testValue Notes';
        $testObject->outcomesEuthanasiaReasonID = 'testValue Euthanasia Reason';

        $query->addOutcomesEuthanasia($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesEuthanasias', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesEuthanasiaAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesEuthanasiaDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesEuthanasiaNotes']);
        $this->assertEquals('testValue Euthanasia Reason', $data['values'][0]['outcomesEuthanasiaReasonID']);
    }
}