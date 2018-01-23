<?php
/**
 * AnimalBreeds search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalBreeds;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalBreeds\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('species')
            ->addFilter('species', 'equals', 'Species')
            ->addField('name')
            ->addFilter('name', 'equals', 'Breed Name')
            ->addField('speciesId')
            ->addFilter('speciesId', 'equals', 'Species')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalBreeds', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'breedID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'species','operation'=>'equals','criteria'=>"Species"],
            ['fieldName'=>'breedName','operation'=>'equals','criteria'=>"Breed Name"],
            ['fieldName'=>'breedSpeciesID','operation'=>'equals','criteria'=>"Species"],
        ];

        $translatedFields = [
            "breedID",
            "species",
            "breedName",
            "breedSpeciesID",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
