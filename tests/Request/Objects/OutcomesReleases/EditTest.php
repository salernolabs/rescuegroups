<?php
/**
 * OutcomesReleases edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReleases;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReleases\Edit();

        $testObject = new \RescueGroups\Objects\OutcomesReleas();
        $testObject->id = 'testValue ID';
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->location = 'testValue Location';
        $testObject->address = 'testValue Street address';
        $testObject->city = 'testValue City';
        $testObject->state = 'testValue State/Province';
        $testObject->postalcode = 'testValue Postal Code';
        $testObject->byId = 'testValue Released By';

        $query->updateOutcomesReleas($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesReleases', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['outcomesReleaseID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesReleaseAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesReleaseDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesReleaseNotes']);
        $this->assertEquals('testValue Location', $data['values'][0]['outcomesReleaseLocation']);
        $this->assertEquals('testValue Street address', $data['values'][0]['outcomesReleaseAddress']);
        $this->assertEquals('testValue City', $data['values'][0]['outcomesReleaseCity']);
        $this->assertEquals('testValue State/Province', $data['values'][0]['outcomesReleaseState']);
        $this->assertEquals('testValue Postal Code', $data['values'][0]['outcomesReleasePostalcode']);
        $this->assertEquals('testValue Released By', $data['values'][0]['outcomesReleaseByID']);
    }
}