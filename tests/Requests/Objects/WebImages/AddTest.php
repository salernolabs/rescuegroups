<?php
/**
 * WebImages Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Tests\Requests\Objects\WebImages\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WebImages\Add();

        
        $query->setWebimageBinary("webimageBinary");
        $query->setWebimageOldFileName("webimageOldFileName");
        $query->setWebimageName("webimageName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webimages", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("webimageBinary", $data["webimageBinary"]);
        $this->assertEquals("webimageOldFileName", $data["webimageOldFileName"]);
        $this->assertEquals("webimageName", $data["webimageName"]);
    }
}