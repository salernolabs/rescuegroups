<?php
/**
 * AnimalSpecies search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalSpecies;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalSpecies\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('singular')
            ->addFilter('singular', 'equals', 'Singular name')
            ->addField('plural')
            ->addFilter('plural', 'equals', 'Plural name')
            ->addField('singularYoung')
            ->addFilter('singularYoung', 'equals', 'Singular young name')
            ->addField('pluralYoung')
            ->addFilter('pluralYoung', 'equals', 'Plural young name')
            ->addField('fullname')
            ->addFilter('fullname', 'equals', 'Full name')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalSpecies', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'speciesID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'speciesSingular','operation'=>'equals','criteria'=>"Singular name"],
            ['fieldName'=>'speciesPlural','operation'=>'equals','criteria'=>"Plural name"],
            ['fieldName'=>'speciesSingularYoung','operation'=>'equals','criteria'=>"Singular young name"],
            ['fieldName'=>'speciesPluralYoung','operation'=>'equals','criteria'=>"Plural young name"],
            ['fieldName'=>'speciesFullname','operation'=>'equals','criteria'=>"Full name"],
        ];

        $translatedFields = [
            "speciesID",
            "speciesSingular",
            "speciesPlural",
            "speciesSingularYoung",
            "speciesPluralYoung",
            "speciesFullname",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
