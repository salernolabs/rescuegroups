<?php
/**
 * AnimalsReasonsSurrender Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:18
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsReasonsSurrender\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsReasonsSurrender\Search();

        
        $query->setReasonID("reasonID");
        $query->setReasonName("reasonName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsSurrender", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("reasonID", $data["reasonID"]);
        $this->assertEquals("reasonName", $data["reasonName"]);
    }
}