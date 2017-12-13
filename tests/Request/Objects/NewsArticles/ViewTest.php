<?php
/**
 * NewsArticles View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\NewsArticles\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\NewsArticles\View();

        
        $query->setArticleID("articleID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("newsarticles", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("articleID", $data["articleID"]);
    }
}