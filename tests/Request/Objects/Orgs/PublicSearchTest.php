<?php
/**
 * Orgs publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Orgs;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Orgs\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('orgID')
            ->addField('orgLocation')
            ->addField('orgName')
            ->addField('orgAddress')
            ->addField('orgCity')
            ->addField('orgState')
            ->addField('orgPostalcode')
            ->addField('orgPlus4')
            ->addField('orgCountry')
            ->addField('orgPhone')
            ->addField('orgFax')
            ->addField('orgEmail')
            ->addField('orgWebsiteUrl')
            ->addField('orgFacebookUrl')
            ->addField('orgAdoptionUrl')
            ->addField('orgDonationUrl')
            ->addField('orgSponsorshipUrl')
            ->addField('orgServeAreas')
            ->addField('orgAdoptionProcess')
            ->addField('orgAbout')
            ->addField('orgServices')
            ->addField('orgMeetPets')
            ->addField('orgType')
            ->addField('orgLocationDistance')
            ->addField('orgCommonapplicationAccept')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('orgs', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "orgID",
            "orgLocation",
            "orgName",
            "orgAddress",
            "orgCity",
            "orgState",
            "orgPostalcode",
            "orgPlus4",
            "orgCountry",
            "orgPhone",
            "orgFax",
            "orgEmail",
            "orgWebsiteUrl",
            "orgFacebookUrl",
            "orgAdoptionUrl",
            "orgDonationUrl",
            "orgSponsorshipUrl",
            "orgServeAreas",
            "orgAdoptionProcess",
            "orgAbout",
            "orgServices",
            "orgMeetPets",
            "orgType",
            "orgLocationDistance",
            "orgCommonapplicationAccept",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
