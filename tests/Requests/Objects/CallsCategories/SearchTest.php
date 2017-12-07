<?php
/**
 * CallsCategories Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\CallsCategories\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsCategories\Search();

        
        $query->setCategoryID("categoryID");
        $query->setCategoryName("categoryName");
        $query->setCategoryDescription("categoryDescription");
        $query->setCategoryPublic("categoryPublic");
        $query->setCategoryDefaultQueueID("categoryDefaultQueueID");
        $query->setCategoryDefaultQueueName("categoryDefaultQueueName");
        $query->setCategoryCreatedDate("categoryCreatedDate");
        $query->setCategoryCreatedByID("categoryCreatedByID");
        $query->setCategoryUpdatedDate("categoryUpdatedDate");
        $query->setCategoryUpdatedByID("categoryUpdatedByID");
        $query->setCategoryCallsCount("categoryCallsCount");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsCategories", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("categoryID", $data["categoryID"]);
        $this->assertEquals("categoryName", $data["categoryName"]);
        $this->assertEquals("categoryDescription", $data["categoryDescription"]);
        $this->assertEquals("categoryPublic", $data["categoryPublic"]);
        $this->assertEquals("categoryDefaultQueueID", $data["categoryDefaultQueueID"]);
        $this->assertEquals("categoryDefaultQueueName", $data["categoryDefaultQueueName"]);
        $this->assertEquals("categoryCreatedDate", $data["categoryCreatedDate"]);
        $this->assertEquals("categoryCreatedByID", $data["categoryCreatedByID"]);
        $this->assertEquals("categoryUpdatedDate", $data["categoryUpdatedDate"]);
        $this->assertEquals("categoryUpdatedByID", $data["categoryUpdatedByID"]);
        $this->assertEquals("categoryCallsCount", $data["categoryCallsCount"]);
    }
}