<?php
/**
 * AnimalColors publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalColors;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalColors\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('colorID')
            ->addFilter('colorID', 'equals', 'ID')
            ->addField('colorName')
            ->addFilter('colorName', 'equals', 'Color')
            ->addField('colorSpecies')
            ->addFilter('colorSpecies', 'equals', 'Species')
            ->addField('colorSpeciesID')
            ->addFilter('colorSpeciesID', 'equals', 'Species')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalColors', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'colorID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'colorName','operation'=>'equals','criteria'=>"Color"],
            ['fieldName'=>'colorSpecies','operation'=>'equals','criteria'=>"Species"],
            ['fieldName'=>'colorSpeciesID','operation'=>'equals','criteria'=>"Species"],
        ];

        $translatedFields = [
            "colorID",
            "colorName",
            "colorSpecies",
            "colorSpeciesID",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
