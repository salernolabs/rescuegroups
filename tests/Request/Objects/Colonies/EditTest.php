<?php
/**
 * Colonies edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Colonies;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Colonies\Edit();

        $testObject = new \RescueGroups\Objects\Colony();
        $testObject->id = 'testValue ID';
        $testObject->name = 'testValue Name';
        $testObject->locationId = 'testValue Location';
        $testObject->totalAnimals = 'testValue Number of animals';
        $testObject->registeredDate = 'testValue Registered';
        $testObject->specificLocation = 'testValue Specific location';

        $query->updateColony($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('colonies', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['colonyID']);
        $this->assertEquals('testValue Name', $data['values'][0]['colonyName']);
        $this->assertEquals('testValue Location', $data['values'][0]['colonyLocationID']);
        $this->assertEquals('testValue Number of animals', $data['values'][0]['colonyTotalAnimals']);
        $this->assertEquals('testValue Registered', $data['values'][0]['colonyRegisteredDate']);
        $this->assertEquals('testValue Specific location', $data['values'][0]['colonySpecificLocation']);
    }
}