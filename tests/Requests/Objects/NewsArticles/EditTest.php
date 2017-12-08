<?php
/**
 * NewsArticles Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\NewsArticles\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\NewsArticles\Edit();

        
        $query->setArticleID("articleID");
        $query->setArticleTitle("articleTitle");
        $query->setArticleDescription("articleDescription");
        $query->setArticleDate("articleDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("newsarticles", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("articleID", $data["articleID"]);
        $this->assertEquals("articleTitle", $data["articleTitle"]);
        $this->assertEquals("articleDescription", $data["articleDescription"]);
        $this->assertEquals("articleDate", $data["articleDate"]);
    }
}