<?php
/**
 * AnimalFiles add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalFiles;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalFiles\Add();

        $testObject = new \RescueGroups\Objects\Create\AnimalFile();
        $testObject->binary = 'testValue File';
        $testObject->oldFileName = 'testValue Old file name';
        $testObject->description = 'testValue Description';
        $testObject->status = 'testValue Status';
        $testObject->displayInline = 'testValue Inline';
        $testObject->public = 'testValue Public';

        $query->addAnimalFile($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalFiles', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue File', $data['values'][0]['animalfileBinary']);
        $this->assertEquals('testValue Old file name', $data['values'][0]['animalfileOldFileName']);
        $this->assertEquals('testValue Description', $data['values'][0]['animalfileDescription']);
        $this->assertEquals('testValue Status', $data['values'][0]['animalfileStatus']);
        $this->assertEquals('testValue Inline', $data['values'][0]['animalfileDisplayInline']);
        $this->assertEquals('testValue Public', $data['values'][0]['animalfilePublic']);
    }
}