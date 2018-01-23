<?php
/**
 * CallsCategories add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsCategories;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsCategories\Add();

        $testObject = new \RescueGroups\Objects\CallsCategory();
        $testObject->name = 'testValue Name';
        $testObject->description = 'testValue Description';
        $testObject->public = 'testValue Public';

        $query->addCallsCategory($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsCategories', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['categoryName']);
        $this->assertEquals('testValue Description', $data['values'][0]['categoryDescription']);
        $this->assertEquals('testValue Public', $data['values'][0]['categoryPublic']);
    }
}