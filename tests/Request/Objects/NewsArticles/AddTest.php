<?php
/**
 * NewsArticles add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\NewsArticles;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\NewsArticles\Add();

        $testObject = new \RescueGroups\Objects\NewsArticle();
        $testObject->title = 'testValue Title';
        $testObject->description = 'testValue Description';
        $testObject->date = 'testValue Date';

        $query->addNewsArticle($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('newsarticles', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Title', $data['values'][0]['articleTitle']);
        $this->assertEquals('testValue Description', $data['values'][0]['articleDescription']);
        $this->assertEquals('testValue Date', $data['values'][0]['articleDate']);
    }
}