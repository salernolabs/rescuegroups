<?php
/**
 * Memorials View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:43
 */
namespace RescueGroups\Tests\Requests\Objects\Memorials\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Memorials\View();

        
        $query->setMemorialID("memorialID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("memorials", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("memorialID", $data["memorialID"]);
    }
}