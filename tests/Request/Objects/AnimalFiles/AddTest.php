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

        $testObject = new \RescueGroups\Objects\AnimalFile();
        $testObject->animalfileBinary = 'testValue File';
        $testObject->animalfileOldFileName = 'testValue Old file name';
        $testObject->animalfileDescription = 'testValue Description';
        $testObject->animalfileStatus = 'testValue Status';
        $testObject->animalfileDisplayInline = 'testValue Inline';
        $testObject->animalfilePublic = 'testValue Public';

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