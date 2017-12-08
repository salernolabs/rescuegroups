<?php
/**
 * CallsCategories View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\CallsCategories\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsCategories\View();

        
        $query->setCategoryID("categoryID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsCategories", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("categoryID", $data["categoryID"]);
    }
}