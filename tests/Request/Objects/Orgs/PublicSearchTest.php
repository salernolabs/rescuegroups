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
            ->addFilter('orgID', 'equals', 'ID')
            ->addField('orgLocation')
            ->addFilter('orgLocation', 'equals', 'Location')
            ->addField('orgName')
            ->addFilter('orgName', 'equals', 'Name')
            ->addField('orgAddress')
            ->addFilter('orgAddress', 'equals', 'Address')
            ->addField('orgCity')
            ->addFilter('orgCity', 'equals', 'City')
            ->addField('orgState')
            ->addFilter('orgState', 'equals', 'State/Province')
            ->addField('orgPostalcode')
            ->addFilter('orgPostalcode', 'equals', 'Postal Code')
            ->addField('orgPlus4')
            ->addFilter('orgPlus4', 'equals', 'Plus 4')
            ->addField('orgCountry')
            ->addFilter('orgCountry', 'equals', 'Country')
            ->addField('orgPhone')
            ->addFilter('orgPhone', 'equals', 'Phone')
            ->addField('orgFax')
            ->addFilter('orgFax', 'equals', 'Fax')
            ->addField('orgEmail')
            ->addFilter('orgEmail', 'equals', 'Email')
            ->addField('orgWebsiteUrl')
            ->addFilter('orgWebsiteUrl', 'equals', 'Url')
            ->addField('orgFacebookUrl')
            ->addFilter('orgFacebookUrl', 'equals', 'Facebook Url')
            ->addField('orgAdoptionUrl')
            ->addFilter('orgAdoptionUrl', 'equals', 'Url')
            ->addField('orgDonationUrl')
            ->addFilter('orgDonationUrl', 'equals', 'Url')
            ->addField('orgSponsorshipUrl')
            ->addFilter('orgSponsorshipUrl', 'equals', 'Url')
            ->addField('orgServeAreas')
            ->addFilter('orgServeAreas', 'equals', 'Serve Areas')
            ->addField('orgAdoptionProcess')
            ->addFilter('orgAdoptionProcess', 'equals', 'Adoption Process')
            ->addField('orgAbout')
            ->addFilter('orgAbout', 'equals', 'About')
            ->addField('orgServices')
            ->addFilter('orgServices', 'equals', 'Services')
            ->addField('orgMeetPets')
            ->addFilter('orgMeetPets', 'equals', 'Meet Pets')
            ->addField('orgType')
            ->addFilter('orgType', 'equals', 'Org Type')
            ->addField('orgLocationDistance')
            ->addFilter('orgLocationDistance', 'equals', 'Distance')
            ->addField('orgCommonapplicationAccept')
            ->addFilter('orgCommonapplicationAccept', 'equals', 'Accepting common application submissions')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('orgs', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'orgID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'orgLocation','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'orgName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'orgAddress','operation'=>'equals','criteria'=>"Address"],
            ['fieldName'=>'orgCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'orgState','operation'=>'equals','criteria'=>"State/Province"],
            ['fieldName'=>'orgPostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'orgPlus4','operation'=>'equals','criteria'=>"Plus 4"],
            ['fieldName'=>'orgCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'orgPhone','operation'=>'equals','criteria'=>"Phone"],
            ['fieldName'=>'orgFax','operation'=>'equals','criteria'=>"Fax"],
            ['fieldName'=>'orgEmail','operation'=>'equals','criteria'=>"Email"],
            ['fieldName'=>'orgWebsiteUrl','operation'=>'equals','criteria'=>"Url"],
            ['fieldName'=>'orgFacebookUrl','operation'=>'equals','criteria'=>"Facebook Url"],
            ['fieldName'=>'orgAdoptionUrl','operation'=>'equals','criteria'=>"Url"],
            ['fieldName'=>'orgDonationUrl','operation'=>'equals','criteria'=>"Url"],
            ['fieldName'=>'orgSponsorshipUrl','operation'=>'equals','criteria'=>"Url"],
            ['fieldName'=>'orgServeAreas','operation'=>'equals','criteria'=>"Serve Areas"],
            ['fieldName'=>'orgAdoptionProcess','operation'=>'equals','criteria'=>"Adoption Process"],
            ['fieldName'=>'orgAbout','operation'=>'equals','criteria'=>"About"],
            ['fieldName'=>'orgServices','operation'=>'equals','criteria'=>"Services"],
            ['fieldName'=>'orgMeetPets','operation'=>'equals','criteria'=>"Meet Pets"],
            ['fieldName'=>'orgType','operation'=>'equals','criteria'=>"Org Type"],
            ['fieldName'=>'orgLocationDistance','operation'=>'equals','criteria'=>"Distance"],
            ['fieldName'=>'orgCommonapplicationAccept','operation'=>'equals','criteria'=>"Accepting common application submissions"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
