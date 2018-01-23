<?php
/**
 * Colonies add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Colonies;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Colonies\Add();

        $testObject = new \RescueGroups\Objects\Colony();
        $testObject->name = 'testValue Name';
        $testObject->totalAnimals = 'testValue Number of animals';
        $testObject->registeredDate = 'testValue Registered';
        $testObject->specificLocation = 'testValue Specific location';

        $query->addColony($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('colonies', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['colonyName']);
        $this->assertEquals('testValue Number of animals', $data['values'][0]['colonyTotalAnimals']);
        $this->assertEquals('testValue Registered', $data['values'][0]['colonyRegisteredDate']);
        $this->assertEquals('testValue Specific location', $data['values'][0]['colonySpecificLocation']);
    }
}