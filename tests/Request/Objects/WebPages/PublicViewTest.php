<?php
/**
 * WebPages PublicView Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebPages\PublicView;

class PublicViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebPages\PublicView();

        
        $query->setWebpageID("webpageID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webpages", $data["objectType"]);

        $this->assertEquals("publicView", $data["objectAction"]);

        $this->assertEquals("webpageID", $data["webpageID"]);
    }
}