<?php
/**
 * AnimalGroups edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalGroups;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalGroups\Edit();

        $testObject = new \RescueGroups\Objects\AnimalGroup();
        $testObject->id = 'testValue ID';
        $testObject->name = 'testValue Name';
        $testObject->headerId = 'testValue Header';

        $query->updateAnimalGroup($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalGroups', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['groupID']);
        $this->assertEquals('testValue Name', $data['values'][0]['groupName']);
        $this->assertEquals('testValue Header', $data['values'][0]['groupHeaderID']);
    }
}