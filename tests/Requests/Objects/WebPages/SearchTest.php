<?php
/**
 * WebPages Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:46
 */
namespace RescueGroups\Tests\Requests\Objects\WebPages\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WebPages\Search();

        
        $query->setWebpageID("webpageID");
        $query->setWebpageOrgID("webpageOrgID");
        $query->setWebpageName("webpageName");
        $query->setWebpageContent("webpageContent");
        $query->setWebpageStatus("webpageStatus");
        $query->setWebpageUselayout("webpageUselayout");
        $query->setWebpageShowonmenu("webpageShowonmenu");
        $query->setWebpageMetaDescription("webpageMetaDescription");
        $query->setWebpageBackgroundImageID("webpageBackgroundImageID");
        $query->setWebpageBackgroundImageFileName("webpageBackgroundImageFileName");
        $query->setWebpageBackgroundMusicID("webpageBackgroundMusicID");
        $query->setWebpageBackgroundMusicFileName("webpageBackgroundMusicFileName");
        $query->setWebpageRoles("webpageRoles");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webpages", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("webpageID", $data["webpageID"]);
        $this->assertEquals("webpageOrgID", $data["webpageOrgID"]);
        $this->assertEquals("webpageName", $data["webpageName"]);
        $this->assertEquals("webpageContent", $data["webpageContent"]);
        $this->assertEquals("webpageStatus", $data["webpageStatus"]);
        $this->assertEquals("webpageUselayout", $data["webpageUselayout"]);
        $this->assertEquals("webpageShowonmenu", $data["webpageShowonmenu"]);
        $this->assertEquals("webpageMetaDescription", $data["webpageMetaDescription"]);
        $this->assertEquals("webpageBackgroundImageID", $data["webpageBackgroundImageID"]);
        $this->assertEquals("webpageBackgroundImageFileName", $data["webpageBackgroundImageFileName"]);
        $this->assertEquals("webpageBackgroundMusicID", $data["webpageBackgroundMusicID"]);
        $this->assertEquals("webpageBackgroundMusicFileName", $data["webpageBackgroundMusicFileName"]);
        $this->assertEquals("webpageRoles", $data["webpageRoles"]);
    }
}