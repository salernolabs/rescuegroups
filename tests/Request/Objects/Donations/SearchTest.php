<?php
/**
 * Donations search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Donations;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Donations\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('donationID')
            ->addField('donationContactID')
            ->addField('donationContactName')
            ->addField('donationContactType')
            ->addField('donationAmount')
            ->addField('donationInkind')
            ->addField('donationComment')
            ->addField('donationLettersent')
            ->addField('donationPurpose')
            ->addField('donationDate')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('donations', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "donationID",
            "donationContactID",
            "donationContactName",
            "donationContactType",
            "donationAmount",
            "donationInkind",
            "donationComment",
            "donationLettersent",
            "donationPurpose",
            "donationDate",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
