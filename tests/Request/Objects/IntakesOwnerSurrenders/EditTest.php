<?php
/**
 * IntakesOwnerSurrenders edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Edit();

        $testObject = new \RescueGroups\Objects\IntakesOwnerSurrender();
        $testObject->intakesOwnersurrenderID = 'testValue Owner Surrender';
        $testObject->intakesOwnersurrenderAnimalID = 'testValue Animal';
        $testObject->intakesOwnersurrenderAnimalConditionID = 'testValue Condition';
        $testObject->intakesOwnersurrenderDate = 'testValue Date';
        $testObject->intakesOwnersurrenderNotes = 'testValue Notes';
        $testObject->intakesOwnersurrenderOwnerID = 'testValue Surrendered By';
        $testObject->intakesOwnersurrenderReasonID = 'testValue Surrender Reason';

        $query->updateIntakesOwnerSurrender($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnersurrenders', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Owner Surrender', $data['values'][0]['intakesOwnersurrenderID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['intakesOwnersurrenderAnimalID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesOwnersurrenderAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesOwnersurrenderDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesOwnersurrenderNotes']);
        $this->assertEquals('testValue Surrendered By', $data['values'][0]['intakesOwnersurrenderOwnerID']);
        $this->assertEquals('testValue Surrender Reason', $data['values'][0]['intakesOwnersurrenderReasonID']);
    }
}