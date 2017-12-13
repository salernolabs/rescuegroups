<?php
/**
 * WebPages Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebPages;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebPages\Edit();

        
        $query->setWebpageID("webpageID");
        $query->setWebpageName("webpageName");
        $query->setWebpageContent("webpageContent");
        $query->setWebpageStatus("webpageStatus");
        $query->setWebpageUselayout("webpageUselayout");
        $query->setWebpageShowonmenu("webpageShowonmenu");
        $query->setWebpageMetaDescription("webpageMetaDescription");
        $query->setWebpageBackgroundImageID("webpageBackgroundImageID");
        $query->setWebpageBackgroundMusicID("webpageBackgroundMusicID");
        $query->setWebpageRoleID("webpageRoleID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webpages", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("webpageID", $data["webpageID"]);
        $this->assertEquals("webpageName", $data["webpageName"]);
        $this->assertEquals("webpageContent", $data["webpageContent"]);
        $this->assertEquals("webpageStatus", $data["webpageStatus"]);
        $this->assertEquals("webpageUselayout", $data["webpageUselayout"]);
        $this->assertEquals("webpageShowonmenu", $data["webpageShowonmenu"]);
        $this->assertEquals("webpageMetaDescription", $data["webpageMetaDescription"]);
        $this->assertEquals("webpageBackgroundImageID", $data["webpageBackgroundImageID"]);
        $this->assertEquals("webpageBackgroundMusicID", $data["webpageBackgroundMusicID"]);
        $this->assertEquals("webpageRoleID", $data["webpageRoleID"]);
    }
}