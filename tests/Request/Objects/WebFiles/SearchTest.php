<?php
/**
 * WebFiles search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebFiles;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebFiles\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('oldName')
            ->addFilter('oldName', 'equals', 'Old file name')
            ->addField('name')
            ->addFilter('name', 'equals', 'File name')
            ->addField('description')
            ->addFilter('description', 'equals', 'Description')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->addField('displayInline')
            ->addFilter('displayInline', 'equals', 'Inline')
            ->addField('roleId')
            ->addFilter('roleId', 'equals', 'Security Role')
            ->addField('roleName')
            ->addFilter('roleName', 'equals', 'Security Role')
            ->addField('size')
            ->addFilter('size', 'equals', 'File size')
            ->addField('createdDate')
            ->addFilter('createdDate', 'equals', 'Created Date')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webfiles', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'webfileID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'webfileOldName','operation'=>'equals','criteria'=>"Old file name"],
            ['fieldName'=>'webfileName','operation'=>'equals','criteria'=>"File name"],
            ['fieldName'=>'webfileDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'webfileStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'webfileDisplayInline','operation'=>'equals','criteria'=>"Inline"],
            ['fieldName'=>'webfileRoleID','operation'=>'equals','criteria'=>"Security Role"],
            ['fieldName'=>'webfileRoleName','operation'=>'equals','criteria'=>"Security Role"],
            ['fieldName'=>'webfileSize','operation'=>'equals','criteria'=>"File size"],
            ['fieldName'=>'webfileCreatedDate','operation'=>'equals','criteria'=>"Created Date"],
        ];

        $translatedFields = [
            "webfileID",
            "webfileOldName",
            "webfileName",
            "webfileDescription",
            "webfileStatus",
            "webfileDisplayInline",
            "webfileRoleID",
            "webfileRoleName",
            "webfileSize",
            "webfileCreatedDate",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
