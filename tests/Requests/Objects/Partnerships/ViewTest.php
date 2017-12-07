<?php
/**
 * Partnerships View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:45
 */
namespace RescueGroups\Tests\Requests\Objects\Partnerships\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Partnerships\View();

        
        $query->setPartnershipID("partnershipID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("partnerships", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("partnershipID", $data["partnershipID"]);
    }
}