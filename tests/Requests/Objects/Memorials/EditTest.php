<?php
/**
 * Memorials Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:24
 */
namespace RescueGroups\Tests\Requests\Objects\Memorials\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Memorials\Edit();

        
        $query->setMemorialID("memorialID");
        $query->setMemorialPictureBinary("memorialPictureBinary");
        $query->setMemorialPictureOldFileName("memorialPictureOldFileName");
        $query->setMemorialName("memorialName");
        $query->setMemorialDescription("memorialDescription");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("memorials", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("memorialID", $data["memorialID"]);
        $this->assertEquals("memorialPictureBinary", $data["memorialPictureBinary"]);
        $this->assertEquals("memorialPictureOldFileName", $data["memorialPictureOldFileName"]);
        $this->assertEquals("memorialName", $data["memorialName"]);
        $this->assertEquals("memorialDescription", $data["memorialDescription"]);
    }
}