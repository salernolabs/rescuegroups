<?php
/**
 * AnimalBreeds publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalBreeds;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalBreeds\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('breedID')
            ->addFilter('breedID', 'equals', 'ID')
            ->addField('breedName')
            ->addFilter('breedName', 'equals', 'Breed Name')
            ->addField('breedSpecies')
            ->addFilter('breedSpecies', 'equals', 'Species')
            ->addField('breedSpeciesID')
            ->addFilter('breedSpeciesID', 'equals', 'Species')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalBreeds', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'breedID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'breedName','operation'=>'equals','criteria'=>"Breed Name"],
            ['fieldName'=>'breedSpecies','operation'=>'equals','criteria'=>"Species"],
            ['fieldName'=>'breedSpeciesID','operation'=>'equals','criteria'=>"Species"],
        ];

        $translatedFields = [
            "breedID",
            "breedName",
            "breedSpecies",
            "breedSpeciesID",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
