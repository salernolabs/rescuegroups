<?php
/**
 * Users View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Users;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Users\View();

        
        $query->setUserID("userID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("users", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("userID", $data["userID"]);
    }
}