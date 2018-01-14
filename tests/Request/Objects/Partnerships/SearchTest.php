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
            ->addField('partnershipRequestOrgID')
            ->addField('partnershipRequestOrgName')
            ->addField('partnershipSharingOrgID')
            ->addField('partnershipSharingOrgName')
            ->addField('partnershipRequestDate')
            ->addField('partnershipRequestedByID')
            ->addField('partnershipRequestedBy')
            ->addField('partnershipResponseByID')
            ->addField('partnershipResponseBy')
            ->addField('partnershipStatus')
            ->addField('partnershipResponseDate')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('partnerships', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
