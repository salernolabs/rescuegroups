<?php
/**
 * IntakesBornInRescueShelter search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesBornInRescueShelter;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'Born In Rescue/Shelter')
            ->addField('animalID')
            ->addFilter('animalID', 'equals', 'Animal')
            ->addField('animalConditionID')
            ->addFilter('animalConditionID', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesBorninrescueshelter', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakesBorninrescueshelterID','operation'=>'equals','criteria'=>"Born In Rescue/Shelter"],
            ['fieldName'=>'intakesBorninrescueshelterAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakesBorninrescueshelterAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakesBorninrescueshelterDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakesBorninrescueshelterNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
        ];

        $translatedFields = [
            "intakesBorninrescueshelterID",
            "intakesBorninrescueshelterAnimalID",
            "intakesBorninrescueshelterAnimalConditionID",
            "intakesBorninrescueshelterDate",
            "intakesBorninrescueshelterNotes",
            "animalName",
            "animalConditionName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
