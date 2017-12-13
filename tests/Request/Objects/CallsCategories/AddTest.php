<?php
/**
 * CallsCategories Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsCategories\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsCategories\Add();

        
        $query->setCategoryName("categoryName");
        $query->setCategoryDescription("categoryDescription");
        $query->setCategoryPublic("categoryPublic");
        $query->setCategoryDefaultQueueID("categoryDefaultQueueID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsCategories", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("categoryName", $data["categoryName"]);
        $this->assertEquals("categoryDescription", $data["categoryDescription"]);
        $this->assertEquals("categoryPublic", $data["categoryPublic"]);
        $this->assertEquals("categoryDefaultQueueID", $data["categoryDefaultQueueID"]);
    }
}