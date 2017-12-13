<?php
/**
 * Memorials Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Memorials\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Memorials\Add();

        
        $query->setMemorialPictureBinary("memorialPictureBinary");
        $query->setMemorialName("memorialName");
        $query->setMemorialPictureOldFileName("memorialPictureOldFileName");
        $query->setMemorialDescription("memorialDescription");
        $query->setMemorialOrder("memorialOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("memorials", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("memorialPictureBinary", $data["memorialPictureBinary"]);
        $this->assertEquals("memorialName", $data["memorialName"]);
        $this->assertEquals("memorialPictureOldFileName", $data["memorialPictureOldFileName"]);
        $this->assertEquals("memorialDescription", $data["memorialDescription"]);
        $this->assertEquals("memorialOrder", $data["memorialOrder"]);
    }
}