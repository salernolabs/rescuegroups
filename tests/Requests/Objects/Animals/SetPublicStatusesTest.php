<?php
/**
 * Animals SetPublicStatuses Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:33
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\SetPublicStatuses;

class SetPublicStatusesTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\SetPublicStatuses();

        
        $query->setStatuslist("statuslist");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("setPublicStatuses", $data["objectAction"]);

        $this->assertEquals("statuslist", $data["statuslist"]);
    }
}