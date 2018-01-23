<?php
/**
 * OutcomesReleases add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReleases;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReleases\Add();

        $testObject = new \RescueGroups\Objects\OutcomesReleas();
        $testObject->outcomesReleaseAnimalConditionID = 'testValue Condition';
        $testObject->outcomesReleaseDate = 'testValue Date';
        $testObject->outcomesReleaseNotes = 'testValue Notes';
        $testObject->outcomesReleaseLocation = 'testValue Location';
        $testObject->outcomesReleaseAddress = 'testValue Street address';
        $testObject->outcomesReleaseCity = 'testValue City';
        $testObject->tate = 'testValue State/Province';
        $testObject->outcomesReleasePostalcode = 'testValue Postal Code';
        $testObject->outcomesReleaseByID = 'testValue Released By';

        $query->addOutcomesReleas($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesReleases', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
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