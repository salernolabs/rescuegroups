<?php
/**
 * Orgs PublicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:43
 */
namespace RescueGroups\Tests\Requests\Objects\Orgs\PublicSearch;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Orgs\PublicSearch();

        
        $query->setOrgID("orgID");
        $query->setOrgLocation("orgLocation");
        $query->setOrgName("orgName");
        $query->setOrgAddress("orgAddress");
        $query->setOrgCity("orgCity");
        $query->setOrgState("orgState");
        $query->setOrgPostalcode("orgPostalcode");
        $query->setOrgPlus4("orgPlus4");
        $query->setOrgCountry("orgCountry");
        $query->setOrgPhone("orgPhone");
        $query->setOrgFax("orgFax");
        $query->setOrgEmail("orgEmail");
        $query->setOrgWebsiteUrl("orgWebsiteUrl");
        $query->setOrgFacebookUrl("orgFacebookUrl");
        $query->setOrgAdoptionUrl("orgAdoptionUrl");
        $query->setOrgDonationUrl("orgDonationUrl");
        $query->setOrgSponsorshipUrl("orgSponsorshipUrl");
        $query->setOrgServeAreas("orgServeAreas");
        $query->setOrgAdoptionProcess("orgAdoptionProcess");
        $query->setOrgAbout("orgAbout");
        $query->setOrgServices("orgServices");
        $query->setOrgMeetPets("orgMeetPets");
        $query->setOrgType("orgType");
        $query->setOrgLocationDistance("orgLocationDistance");
        $query->setOrgCommonapplicationAccept("orgCommonapplicationAccept");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("orgs", $data["objectType"]);

        $this->assertEquals("publicSearch", $data["objectAction"]);

        $this->assertEquals("orgID", $data["orgID"]);
        $this->assertEquals("orgLocation", $data["orgLocation"]);
        $this->assertEquals("orgName", $data["orgName"]);
        $this->assertEquals("orgAddress", $data["orgAddress"]);
        $this->assertEquals("orgCity", $data["orgCity"]);
        $this->assertEquals("orgState", $data["orgState"]);
        $this->assertEquals("orgPostalcode", $data["orgPostalcode"]);
        $this->assertEquals("orgPlus4", $data["orgPlus4"]);
        $this->assertEquals("orgCountry", $data["orgCountry"]);
        $this->assertEquals("orgPhone", $data["orgPhone"]);
        $this->assertEquals("orgFax", $data["orgFax"]);
        $this->assertEquals("orgEmail", $data["orgEmail"]);
        $this->assertEquals("orgWebsiteUrl", $data["orgWebsiteUrl"]);
        $this->assertEquals("orgFacebookUrl", $data["orgFacebookUrl"]);
        $this->assertEquals("orgAdoptionUrl", $data["orgAdoptionUrl"]);
        $this->assertEquals("orgDonationUrl", $data["orgDonationUrl"]);
        $this->assertEquals("orgSponsorshipUrl", $data["orgSponsorshipUrl"]);
        $this->assertEquals("orgServeAreas", $data["orgServeAreas"]);
        $this->assertEquals("orgAdoptionProcess", $data["orgAdoptionProcess"]);
        $this->assertEquals("orgAbout", $data["orgAbout"]);
        $this->assertEquals("orgServices", $data["orgServices"]);
        $this->assertEquals("orgMeetPets", $data["orgMeetPets"]);
        $this->assertEquals("orgType", $data["orgType"]);
        $this->assertEquals("orgLocationDistance", $data["orgLocationDistance"]);
        $this->assertEquals("orgCommonapplicationAccept", $data["orgCommonapplicationAccept"]);
    }
}