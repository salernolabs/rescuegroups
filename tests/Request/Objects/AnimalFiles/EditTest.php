<?php
/**
 * AnimalFiles edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalFiles;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalFiles\Edit();

        $testObject = new \RescueGroups\Objects\AnimalFile();
        $testObject->id = 'testValue File ID';
        $testObject->animalId = 'testValue Animal';
        $testObject->description = 'testValue Description';
        $testObject->status = 'testValue Status';
        $testObject->displayInline = 'testValue Inline';
        $testObject->public = 'testValue Public';

        $query->updateAnimalFile($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalFiles', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue File ID', $data['values'][0]['animalfileID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['animalfileAnimalID']);
        $this->assertEquals('testValue Description', $data['values'][0]['animalfileDescription']);
        $this->assertEquals('testValue Status', $data['values'][0]['animalfileStatus']);
        $this->assertEquals('testValue Inline', $data['values'][0]['animalfileDisplayInline']);
        $this->assertEquals('testValue Public', $data['values'][0]['animalfilePublic']);
    }
}