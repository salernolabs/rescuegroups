<?php
/**
 * WebFiles View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Tests\Requests\Objects\WebFiles\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WebFiles\View();

        
        $query->setWebfileID("webfileID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webfiles", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("webfileID", $data["webfileID"]);
    }
}