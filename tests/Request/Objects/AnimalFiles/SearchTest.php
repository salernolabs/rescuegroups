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
            ->addFilter('animalfileID', 'equals', 'File ID')
            ->addField('animalfileAnimalID')
            ->addFilter('animalfileAnimalID', 'equals', 'Animal')
            ->addField('animalfileOldName')
            ->addFilter('animalfileOldName', 'equals', 'Old file name')
            ->addField('animalfileDescription')
            ->addFilter('animalfileDescription', 'equals', 'Description')
            ->addField('tatus')
            ->addFilter('tatus', 'equals', 'Status')
            ->addField('animalfileDisplayInline')
            ->addFilter('animalfileDisplayInline', 'equals', 'Inline')
            ->addField('animalfilePublic')
            ->addFilter('animalfilePublic', 'equals', 'Public')
            ->addField('ize')
            ->addFilter('ize', 'equals', 'File size')
            ->addField('animalfileCreatedDate')
            ->addFilter('animalfileCreatedDate', 'equals', 'Created Date')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalFiles', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'animalfileID','operation'=>'equals','criteria'=>"File ID"],
            ['fieldName'=>'animalfileAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalfileOldName','operation'=>'equals','criteria'=>"Old file name"],
            ['fieldName'=>'animalfileDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'animalfileStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'animalfileDisplayInline','operation'=>'equals','criteria'=>"Inline"],
            ['fieldName'=>'animalfilePublic','operation'=>'equals','criteria'=>"Public"],
            ['fieldName'=>'animalfileSize','operation'=>'equals','criteria'=>"File size"],
            ['fieldName'=>'animalfileCreatedDate','operation'=>'equals','criteria'=>"Created Date"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
