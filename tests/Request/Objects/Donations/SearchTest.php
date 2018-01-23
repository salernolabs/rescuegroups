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
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('contactId')
            ->addFilter('contactId', 'equals', 'Contact')
            ->addField('contactName')
            ->addFilter('contactName', 'equals', 'Contact')
            ->addField('contactType')
            ->addFilter('contactType', 'equals', 'Donor Type')
            ->addField('amount')
            ->addFilter('amount', 'equals', 'Amount')
            ->addField('inkind')
            ->addFilter('inkind', 'equals', 'Inkind type')
            ->addField('comment')
            ->addFilter('comment', 'equals', 'Comment')
            ->addField('lettersent')
            ->addFilter('lettersent', 'equals', 'Letter sent')
            ->addField('purpose')
            ->addFilter('purpose', 'equals', 'Purpose')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('donations', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'donationID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'donationContactID','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'donationContactName','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'donationContactType','operation'=>'equals','criteria'=>"Donor Type"],
            ['fieldName'=>'donationAmount','operation'=>'equals','criteria'=>"Amount"],
            ['fieldName'=>'donationInkind','operation'=>'equals','criteria'=>"Inkind type"],
            ['fieldName'=>'donationComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'donationLettersent','operation'=>'equals','criteria'=>"Letter sent"],
            ['fieldName'=>'donationPurpose','operation'=>'equals','criteria'=>"Purpose"],
            ['fieldName'=>'donationDate','operation'=>'equals','criteria'=>"Date"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
