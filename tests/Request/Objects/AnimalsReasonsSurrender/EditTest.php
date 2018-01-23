<?php
/**
 * AnimalsReasonsSurrender edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsSurrender;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\Edit();

        $testObject = new \RescueGroups\Objects\AnimalsReasonsSurrender();
        $testObject->id = 'testValue Reason ID';
        $testObject->name = 'testValue Reason';

        $query->updateAnimalsReasonsSurrender($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsSurrender', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Reason ID', $data['values'][0]['reasonID']);
        $this->assertEquals('testValue Reason', $data['values'][0]['reasonName']);
    }
}