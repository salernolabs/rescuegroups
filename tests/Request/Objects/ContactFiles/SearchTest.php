<?php
/**
 * ContactFiles search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactFiles;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactFiles\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'File ID')
            ->addField('contactId')
            ->addFilter('contactId', 'equals', 'Contact')
            ->addField('oldName')
            ->addFilter('oldName', 'equals', 'Old file name')
            ->addField('description')
            ->addFilter('description', 'equals', 'Description')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->addField('displayInline')
            ->addFilter('displayInline', 'equals', 'Inline')
            ->addField('size')
            ->addFilter('size', 'equals', 'File size')
            ->addField('createdDate')
            ->addFilter('createdDate', 'equals', 'Created Date')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contactFiles', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'contactfileID','operation'=>'equals','criteria'=>"File ID"],
            ['fieldName'=>'contactfileContactID','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'contactfileOldName','operation'=>'equals','criteria'=>"Old file name"],
            ['fieldName'=>'contactfileDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'contactfileStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'contactfileDisplayInline','operation'=>'equals','criteria'=>"Inline"],
            ['fieldName'=>'contactfileSize','operation'=>'equals','criteria'=>"File size"],
            ['fieldName'=>'contactfileCreatedDate','operation'=>'equals','criteria'=>"Created Date"],
        ];

        $translatedFields = [
            "contactfileID",
            "contactfileContactID",
            "contactfileOldName",
            "contactfileDescription",
            "contactfileStatus",
            "contactfileDisplayInline",
            "contactfileSize",
            "contactfileCreatedDate",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
