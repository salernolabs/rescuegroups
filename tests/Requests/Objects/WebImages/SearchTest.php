<?php
/**
 * WebImages Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:46
 */
namespace RescueGroups\Tests\Requests\Objects\WebImages\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WebImages\Search();

        
        $query->setWebimageID("webimageID");
        $query->setWebimageName("webimageName");
        $query->setWebimageFileName("webimageFileName");
        $query->setWebimageUrl("webimageUrl");
        $query->setWebimageSize("webimageSize");
        $query->setWebimageWidth("webimageWidth");
        $query->setWebimageHeight("webimageHeight");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webimages", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("webimageID", $data["webimageID"]);
        $this->assertEquals("webimageName", $data["webimageName"]);
        $this->assertEquals("webimageFileName", $data["webimageFileName"]);
        $this->assertEquals("webimageUrl", $data["webimageUrl"]);
        $this->assertEquals("webimageSize", $data["webimageSize"]);
        $this->assertEquals("webimageWidth", $data["webimageWidth"]);
        $this->assertEquals("webimageHeight", $data["webimageHeight"]);
    }
}