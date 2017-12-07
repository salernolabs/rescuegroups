<?php
/**
 * OutcomesReleases GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesReleases\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesReleases\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReleases", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}