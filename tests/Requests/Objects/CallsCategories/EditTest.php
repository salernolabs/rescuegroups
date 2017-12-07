<?php
/**
 * CallsCategories Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\CallsCategories\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsCategories\Edit();

        
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