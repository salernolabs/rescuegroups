<?php
/**
 * NewsArticles edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\NewsArticles;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\NewsArticles\Edit();

        $testObject = new \RescueGroups\Objects\NewsArticle();
        $testObject->id = 'testValue ID';
        $testObject->title = 'testValue Title';
        $testObject->description = 'testValue Description';
        $testObject->date = 'testValue Date';

        $query->updateNewsArticle($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('newsarticles', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['articleID']);
        $this->assertEquals('testValue Title', $data['values'][0]['articleTitle']);
        $this->assertEquals('testValue Description', $data['values'][0]['articleDescription']);
        $this->assertEquals('testValue Date', $data['values'][0]['articleDate']);
    }
}