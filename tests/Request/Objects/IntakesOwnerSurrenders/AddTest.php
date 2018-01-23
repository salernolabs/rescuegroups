<?php
/**
 * IntakesOwnerSurrenders add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Add();

        $testObject = new \RescueGroups\Objects\IntakesOwnerSurrender();
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->ownerId = 'testValue Surrendered By';
        $testObject->reasonId = 'testValue Surrender Reason';

        $query->addIntakesOwnerSurrender($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnersurrenders', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesOwnersurrenderAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesOwnersurrenderDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesOwnersurrenderNotes']);
        $this->assertEquals('testValue Surrendered By', $data['values'][0]['intakesOwnersurrenderOwnerID']);
        $this->assertEquals('testValue Surrender Reason', $data['values'][0]['intakesOwnersurrenderReasonID']);
    }
}