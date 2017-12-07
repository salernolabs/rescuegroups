<?php
/**
 * AnimalStatuses Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalStatuses\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalStatuses\Search();

        
        $query->setStatusID("statusID");
        $query->setStatusName("statusName");
        $query->setStatusDescription("statusDescription");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalStatuses", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("statusID", $data["statusID"]);
        $this->assertEquals("statusName", $data["statusName"]);
        $this->assertEquals("statusDescription", $data["statusDescription"]);
    }
}