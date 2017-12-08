<?php
/**
 * Partnerships Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Partnerships\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Partnerships\Search();

        
        $query->setPartnershipID("partnershipID");
        $query->setPartnershipRequestOrgID("partnershipRequestOrgID");
        $query->setPartnershipRequestOrgName("partnershipRequestOrgName");
        $query->setPartnershipSharingOrgID("partnershipSharingOrgID");
        $query->setPartnershipSharingOrgName("partnershipSharingOrgName");
        $query->setPartnershipRequestDate("partnershipRequestDate");
        $query->setPartnershipRequestedByID("partnershipRequestedByID");
        $query->setPartnershipRequestedBy("partnershipRequestedBy");
        $query->setPartnershipResponseByID("partnershipResponseByID");
        $query->setPartnershipResponseBy("partnershipResponseBy");
        $query->setPartnershipStatus("partnershipStatus");
        $query->setPartnershipResponseDate("partnershipResponseDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("partnerships", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("partnershipID", $data["partnershipID"]);
        $this->assertEquals("partnershipRequestOrgID", $data["partnershipRequestOrgID"]);
        $this->assertEquals("partnershipRequestOrgName", $data["partnershipRequestOrgName"]);
        $this->assertEquals("partnershipSharingOrgID", $data["partnershipSharingOrgID"]);
        $this->assertEquals("partnershipSharingOrgName", $data["partnershipSharingOrgName"]);
        $this->assertEquals("partnershipRequestDate", $data["partnershipRequestDate"]);
        $this->assertEquals("partnershipRequestedByID", $data["partnershipRequestedByID"]);
        $this->assertEquals("partnershipRequestedBy", $data["partnershipRequestedBy"]);
        $this->assertEquals("partnershipResponseByID", $data["partnershipResponseByID"]);
        $this->assertEquals("partnershipResponseBy", $data["partnershipResponseBy"]);
        $this->assertEquals("partnershipStatus", $data["partnershipStatus"]);
        $this->assertEquals("partnershipResponseDate", $data["partnershipResponseDate"]);
    }
}