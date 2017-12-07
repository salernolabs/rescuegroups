<?php
/**
 * WebImages View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:46
 */
namespace RescueGroups\Tests\Requests\Objects\WebImages\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WebImages\View();

        
        $query->setWebimageID("webimageID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webimages", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("webimageID", $data["webimageID"]);
    }
}