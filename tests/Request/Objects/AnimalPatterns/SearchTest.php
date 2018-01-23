<?php
/**
 * AnimalPatterns search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalPatterns;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalPatterns\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('name')
            ->addFilter('name', 'equals', 'pattern')
            ->addField('species')
            ->addFilter('species', 'equals', 'Species')
            ->addField('speciesId')
            ->addFilter('speciesId', 'equals', 'Species')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalPatterns', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
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
