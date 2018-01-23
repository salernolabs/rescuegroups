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
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('description')
            ->addFilter('description', 'equals', 'Description')
            ->addField('public')
            ->addFilter('public', 'equals', 'Public')
            ->addField('defaultQueueId')
            ->addFilter('defaultQueueId', 'equals', 'Default Queue')
            ->addField('defaultQueueName')
            ->addFilter('defaultQueueName', 'equals', 'Default Queue Name')
            ->addField('createdDate')
            ->addFilter('createdDate', 'equals', 'Created Date')
            ->addField('createdById')
            ->addFilter('createdById', 'equals', 'Created by')
            ->addField('updatedDate')
            ->addFilter('updatedDate', 'equals', 'Updated Date')
            ->addField('updatedById')
            ->addFilter('updatedById', 'equals', 'Updated by')
            ->addField('callsCount')
            ->addFilter('callsCount', 'equals', 'Calls Count')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsCategories', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'categoryID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'categoryName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'categoryDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'categoryPublic','operation'=>'equals','criteria'=>"Public"],
            ['fieldName'=>'categoryDefaultQueueID','operation'=>'equals','criteria'=>"Default Queue"],
            ['fieldName'=>'categoryDefaultQueueName','operation'=>'equals','criteria'=>"Default Queue Name"],
            ['fieldName'=>'categoryCreatedDate','operation'=>'equals','criteria'=>"Created Date"],
            ['fieldName'=>'categoryCreatedByID','operation'=>'equals','criteria'=>"Created by"],
            ['fieldName'=>'categoryUpdatedDate','operation'=>'equals','criteria'=>"Updated Date"],
            ['fieldName'=>'categoryUpdatedByID','operation'=>'equals','criteria'=>"Updated by"],
            ['fieldName'=>'categoryCallsCount','operation'=>'equals','criteria'=>"Calls Count"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
