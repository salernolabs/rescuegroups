<?php
/**
 * Memorials Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Memorials;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Memorials\Search();

        
        $query->setMemorialID("memorialID");
        $query->setMemorialPictureFileName("memorialPictureFileName");
        $query->setMemorialPictureUrl("memorialPictureUrl");
        $query->setMemorialPictureThumbnailUrl("memorialPictureThumbnailUrl");
        $query->setMemorialName("memorialName");
        $query->setMemorialDescription("memorialDescription");
        $query->setMemorialOrder("memorialOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("memorials", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("memorialID", $data["memorialID"]);
        $this->assertEquals("memorialPictureFileName", $data["memorialPictureFileName"]);
        $this->assertEquals("memorialPictureUrl", $data["memorialPictureUrl"]);
        $this->assertEquals("memorialPictureThumbnailUrl", $data["memorialPictureThumbnailUrl"]);
        $this->assertEquals("memorialName", $data["memorialName"]);
        $this->assertEquals("memorialDescription", $data["memorialDescription"]);
        $this->assertEquals("memorialOrder", $data["memorialOrder"]);
    }
}