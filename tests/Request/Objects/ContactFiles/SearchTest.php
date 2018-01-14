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
            ->addField('contactfileID')
            ->addField('contactfileContactID')
            ->addField('contactfileOldName')
            ->addField('contactfileDescription')
            ->addField('contactfileStatus')
            ->addField('contactfileDisplayInline')
            ->addField('contactfileSize')
            ->addField('contactfileCreatedDate')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contactFiles', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
