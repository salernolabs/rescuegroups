<?php
/**
 * Users View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:45
 */
namespace RescueGroups\Tests\Requests\Objects\Users\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Users\View();

        
        $query->setUserID("userID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("users", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("userID", $data["userID"]);
    }
}