<?php
/**
 * IntakesServices edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServices;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServices\Edit();

        $testObject = new \RescueGroups\Objects\IntakesService();
        $testObject->intakesServiceID = 'testValue Service';
        $testObject->intakesServiceAnimalID = 'testValue Animal';
        $testObject->intakesServiceAnimalConditionID = 'testValue Condition';
        $testObject->intakesServiceDate = 'testValue Date';
        $testObject->intakesServiceNotes = 'testValue Notes';
        $testObject->intakesServiceOwnerID = 'testValue Owner';
        $testObject->ervicetypeID = 'testValue Service';

        $query->updateIntakesService($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesServices', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Service', $data['values'][0]['intakesServiceID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['intakesServiceAnimalID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesServiceAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesServiceDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesServiceNotes']);
        $this->assertEquals('testValue Owner', $data['values'][0]['intakesServiceOwnerID']);
        $this->assertEquals('testValue Service', $data['values'][0]['intakesServiceServicetypeID']);
    }
}