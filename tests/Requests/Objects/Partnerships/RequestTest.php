<?php
/**
 * Partnerships Request Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Partnerships\Request;

class RequestTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Partnerships\Request();

        
        $query->setPartnershipSharingOrgID("partnershipSharingOrgID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("partnerships", $data["objectType"]);

        $this->assertEquals("request", $data["objectAction"]);

        $this->assertEquals("partnershipSharingOrgID", $data["partnershipSharingOrgID"]);
    }
}