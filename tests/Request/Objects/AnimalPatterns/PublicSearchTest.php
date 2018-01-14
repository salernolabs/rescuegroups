<?php
/**
 * AnimalPatterns publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalPatterns;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalPatterns\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('patternID')
            ->addFilter('patternID', 'equals', 'ID')
            ->addField('patternName')
            ->addFilter('patternName', 'equals', 'pattern')
            ->addField('patternSpecies')
            ->addFilter('patternSpecies', 'equals', 'Species')
            ->addField('patternSpeciesID')
            ->addFilter('patternSpeciesID', 'equals', 'Species')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalPatterns', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'patternID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'patternName','operation'=>'equals','criteria'=>"pattern"],
            ['fieldName'=>'patternSpecies','operation'=>'equals','criteria'=>"Species"],
            ['fieldName'=>'patternSpeciesID','operation'=>'equals','criteria'=>"Species"],
        ];

        $translatedFields = [
            "patternID",
            "patternName",
            "patternSpecies",
            "patternSpeciesID",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
