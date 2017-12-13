<?php
/**
 * NewsArticles PublicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\NewsArticles\PublicSearch;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\NewsArticles\PublicSearch();

        
        $query->setArticleID("articleID");
        $query->setArticleOrgID("articleOrgID");
        $query->setArticleTitle("articleTitle");
        $query->setArticleDescription("articleDescription");
        $query->setArticleDate("articleDate");
        $query->setArticleUpdatedDate("articleUpdatedDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("newsarticles", $data["objectType"]);

        $this->assertEquals("publicSearch", $data["objectAction"]);

        $this->assertEquals("articleID", $data["articleID"]);
        $this->assertEquals("articleOrgID", $data["articleOrgID"]);
        $this->assertEquals("articleTitle", $data["articleTitle"]);
        $this->assertEquals("articleDescription", $data["articleDescription"]);
        $this->assertEquals("articleDate", $data["articleDate"]);
        $this->assertEquals("articleUpdatedDate", $data["articleUpdatedDate"]);
    }
}