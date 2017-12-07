<?php
/**
 * NewsArticles Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:43
 */
namespace RescueGroups\Tests\Requests\Objects\NewsArticles\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\NewsArticles\Add();

        
        $query->setArticleTitle("articleTitle");
        $query->setArticleDescription("articleDescription");
        $query->setArticleDate("articleDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("newsarticles", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("articleTitle", $data["articleTitle"]);
        $this->assertEquals("articleDescription", $data["articleDescription"]);
        $this->assertEquals("articleDate", $data["articleDate"]);
    }
}