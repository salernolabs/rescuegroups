<?php
/**
 * CallsCategories Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\CallsCategories\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\CallsCategories\Edit();

        
        $query->setCategoryID("categoryID");
        $query->setCategoryName("categoryName");
        $query->setCategoryDescription("categoryDescription");
        $query->setCategoryPublic("categoryPublic");
        $query->setCategoryDefaultQueueID("categoryDefaultQueueID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsCategories", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("categoryID", $data["categoryID"]);
        $this->assertEquals("categoryName", $data["categoryName"]);
        $this->assertEquals("categoryDescription", $data["categoryDescription"]);
        $this->assertEquals("categoryPublic", $data["categoryPublic"]);
        $this->assertEquals("categoryDefaultQueueID", $data["categoryDefaultQueueID"]);
    }
}