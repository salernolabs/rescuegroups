<?php
/**
 * NewsArticles publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\NewsArticles;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\NewsArticles\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('orgId')
            ->addFilter('orgId', 'equals', 'Organization')
            ->addField('title')
            ->addFilter('title', 'equals', 'Title')
            ->addField('description')
            ->addFilter('description', 'equals', 'Description')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('updatedDate')
            ->addFilter('updatedDate', 'equals', 'Last updated')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('newsarticles', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'articleID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'articleOrgID','operation'=>'equals','criteria'=>"Organization"],
            ['fieldName'=>'articleTitle','operation'=>'equals','criteria'=>"Title"],
            ['fieldName'=>'articleDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'articleDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'articleUpdatedDate','operation'=>'equals','criteria'=>"Last updated"],
        ];

        $translatedFields = [
            "articleID",
            "articleOrgID",
            "articleTitle",
            "articleDescription",
            "articleDate",
            "articleUpdatedDate",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
