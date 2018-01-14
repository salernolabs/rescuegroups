<?php
/**
 * AnimalFiles search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalFiles;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalFiles\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('animalfileID')
            ->addField('animalfileAnimalID')
            ->addField('animalfileOldName')
            ->addField('animalfileDescription')
            ->addField('animalfileStatus')
            ->addField('animalfileDisplayInline')
            ->addField('animalfilePublic')
            ->addField('animalfileSize')
            ->addField('animalfileCreatedDate')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalFiles', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "animalfileID",
            "animalfileAnimalID",
            "animalfileOldName",
            "animalfileDescription",
            "animalfileStatus",
            "animalfileDisplayInline",
            "animalfilePublic",
            "animalfileSize",
            "animalfileCreatedDate",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
