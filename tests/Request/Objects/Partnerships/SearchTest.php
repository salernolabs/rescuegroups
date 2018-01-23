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
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('requestOrgId')
            ->addFilter('requestOrgId', 'equals', 'Sharing Org')
            ->addField('requestOrgName')
            ->addFilter('requestOrgName', 'equals', 'Sharing Org')
            ->addField('sharingOrgId')
            ->addFilter('sharingOrgId', 'equals', 'Sharing Org')
            ->addField('sharingOrgName')
            ->addFilter('sharingOrgName', 'equals', 'Sharing Org Name')
            ->addField('requestDate')
            ->addFilter('requestDate', 'equals', 'Request Date')
            ->addField('requestedById')
            ->addFilter('requestedById', 'equals', 'Requested by')
            ->addField('requestedBy')
            ->addFilter('requestedBy', 'equals', 'Requested by')
            ->addField('responseById')
            ->addFilter('responseById', 'equals', 'Response by')
            ->addField('responseBy')
            ->addFilter('responseBy', 'equals', 'Response by')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->addField('responseDate')
            ->addFilter('responseDate', 'equals', 'Response Date')
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
