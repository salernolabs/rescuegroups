<?php
/**
 * AnimalStatuses Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalStatuses;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalStatuses\Search();

        
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