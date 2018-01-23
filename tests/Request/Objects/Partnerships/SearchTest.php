<?php
/**
 * Partnerships search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Partnerships;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Partnerships\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('partnershipID')
            ->addFilter('partnershipID', 'equals', 'ID')
            ->addField('partnershipRequestOrgID')
            ->addFilter('partnershipRequestOrgID', 'equals', 'Sharing Org')
            ->addField('partnershipRequestOrgName')
            ->addFilter('partnershipRequestOrgName', 'equals', 'Sharing Org')
            ->addField('haringOrgID')
            ->addFilter('haringOrgID', 'equals', 'Sharing Org')
            ->addField('haringOrgName')
            ->addFilter('haringOrgName', 'equals', 'Sharing Org Name')
            ->addField('partnershipRequestDate')
            ->addFilter('partnershipRequestDate', 'equals', 'Request Date')
            ->addField('partnershipRequestedByID')
            ->addFilter('partnershipRequestedByID', 'equals', 'Requested by')
            ->addField('partnershipRequestedBy')
            ->addFilter('partnershipRequestedBy', 'equals', 'Requested by')
            ->addField('partnershipResponseByID')
            ->addFilter('partnershipResponseByID', 'equals', 'Response by')
            ->addField('partnershipResponseBy')
            ->addFilter('partnershipResponseBy', 'equals', 'Response by')
            ->addField('tatus')
            ->addFilter('tatus', 'equals', 'Status')
            ->addField('partnershipResponseDate')
            ->addFilter('partnershipResponseDate', 'equals', 'Response Date')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('partnerships', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'partnershipID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'partnershipRequestOrgID','operation'=>'equals','criteria'=>"Sharing Org"],
            ['fieldName'=>'partnershipRequestOrgName','operation'=>'equals','criteria'=>"Sharing Org"],
            ['fieldName'=>'partnershipSharingOrgID','operation'=>'equals','criteria'=>"Sharing Org"],
            ['fieldName'=>'partnershipSharingOrgName','operation'=>'equals','criteria'=>"Sharing Org Name"],
            ['fieldName'=>'partnershipRequestDate','operation'=>'equals','criteria'=>"Request Date"],
            ['fieldName'=>'partnershipRequestedByID','operation'=>'equals','criteria'=>"Requested by"],
            ['fieldName'=>'partnershipRequestedBy','operation'=>'equals','criteria'=>"Requested by"],
            ['fieldName'=>'partnershipResponseByID','operation'=>'equals','criteria'=>"Response by"],
            ['fieldName'=>'partnershipResponseBy','operation'=>'equals','criteria'=>"Response by"],
            ['fieldName'=>'partnershipStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'partnershipResponseDate','operation'=>'equals','criteria'=>"Response Date"],
        ];

        $translatedFields = [
            "partnershipID",
            "partnershipRequestOrgID",
            "partnershipRequestOrgName",
            "partnershipSharingOrgID",
            "partnershipSharingOrgName",
            "partnershipRequestDate",
            "partnershipRequestedByID",
            "partnershipRequestedBy",
            "partnershipResponseByID",
            "partnershipResponseBy",
            "partnershipStatus",
            "partnershipResponseDate",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
