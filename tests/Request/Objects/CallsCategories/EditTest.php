<?php
/**
 * CallsCategories edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsCategories;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsCategories\Edit();

        $testObject = new \RescueGroups\Objects\CallsCategory();
        $testObject->categoryID = 'testValue ID';
        $testObject->categoryName = 'testValue Name';
        $testObject->categoryDescription = 'testValue Description';
        $testObject->categoryPublic = 'testValue Public';
        $testObject->categoryDefaultQueueID = 'testValue Default Queue';

        $query->updateCallsCategory($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsCategories', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['categoryID']);
        $this->assertEquals('testValue Name', $data['values'][0]['categoryName']);
        $this->assertEquals('testValue Description', $data['values'][0]['categoryDescription']);
        $this->assertEquals('testValue Public', $data['values'][0]['categoryPublic']);
        $this->assertEquals('testValue Default Queue', $data['values'][0]['categoryDefaultQueueID']);
    }
}