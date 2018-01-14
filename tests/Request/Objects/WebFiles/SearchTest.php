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
            ->addField('webfileID')
            ->addField('webfileOldName')
            ->addField('webfileName')
            ->addField('webfileDescription')
            ->addField('webfileStatus')
            ->addField('webfileDisplayInline')
            ->addField('webfileRoleID')
            ->addField('webfileRoleName')
            ->addField('webfileSize')
            ->addField('webfileCreatedDate')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webfiles', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
