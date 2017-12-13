<?php
/**
 * Partnerships Request Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Partnerships\Request;

class RequestTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Partnerships\Request();

        
        $query->setPartnershipSharingOrgID("partnershipSharingOrgID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("partnerships", $data["objectType"]);

        $this->assertEquals("request", $data["objectAction"]);

        $this->assertEquals("partnershipSharingOrgID", $data["partnershipSharingOrgID"]);
    }
}