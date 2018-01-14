<?php
/**
 * CallsCategories search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsCategories;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsCategories\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('categoryID')
            ->addField('categoryName')
            ->addField('categoryDescription')
            ->addField('categoryPublic')
            ->addField('categoryDefaultQueueID')
            ->addField('categoryDefaultQueueName')
            ->addField('categoryCreatedDate')
            ->addField('categoryCreatedByID')
            ->addField('categoryUpdatedDate')
            ->addField('categoryUpdatedByID')
            ->addField('categoryCallsCount')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsCategories', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "categoryID",
            "categoryName",
            "categoryDescription",
            "categoryPublic",
            "categoryDefaultQueueID",
            "categoryDefaultQueueName",
            "categoryCreatedDate",
            "categoryCreatedByID",
            "categoryUpdatedDate",
            "categoryUpdatedByID",
            "categoryCallsCount",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
