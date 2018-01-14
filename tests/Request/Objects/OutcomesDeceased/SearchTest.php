<?php
/**
 * OutcomesDeceased search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesDeceased;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('intakeID')
            ->addFilter('intakeID', 'equals', 'Outcome Deceased Intake')
            ->addField('animalConditionID')
            ->addFilter('animalConditionID', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('reason')
            ->addFilter('reason', 'equals', 'Reason')
            ->addField('animalID')
            ->addFilter('animalID', 'equals', 'Animal')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesDeceased', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'outcomesDeceasedID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'outcomesDeceasedIntakeID','operation'=>'equals','criteria'=>"Outcome Deceased Intake"],
            ['fieldName'=>'outcomesDeceasedAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'outcomesDeceasedDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'outcomesDeceasedNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'outcomesDeceasedReason','operation'=>'equals','criteria'=>"Reason"],
            ['fieldName'=>'animalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
        ];

        $translatedFields = [
            "outcomesDeceasedID",
            "outcomesDeceasedIntakeID",
            "outcomesDeceasedAnimalConditionID",
            "outcomesDeceasedDate",
            "outcomesDeceasedNotes",
            "outcomesDeceasedReason",
            "animalID",
            "animalName",
            "animalConditionName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
