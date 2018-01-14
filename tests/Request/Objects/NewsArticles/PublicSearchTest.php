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
            ->addField('articleID')
            ->addField('articleOrgID')
            ->addField('articleTitle')
            ->addField('articleDescription')
            ->addField('articleDate')
            ->addField('articleUpdatedDate')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('newsarticles', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "articleID",
            "articleOrgID",
            "articleTitle",
            "articleDescription",
            "articleDate",
            "articleUpdatedDate",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
