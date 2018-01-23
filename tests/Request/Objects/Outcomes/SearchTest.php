<?php
/**
 * Outcomes search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Outcomes;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Outcomes\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'Outcome ID')
            ->addField('animalConditionId')
            ->addFilter('animalConditionId', 'equals', 'Condition ID')
            ->addField('type')
            ->addFilter('type', 'equals', 'Type')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('intakeId')
            ->addFilter('intakeId', 'equals', 'Intake ID')
            ->addField('intakeAnimalId')
            ->addFilter('intakeAnimalId', 'equals', 'Animal ID')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomes', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'outcomeID','operation'=>'equals','criteria'=>"Outcome ID"],
            ['fieldName'=>'outcomeAnimalConditionID','operation'=>'equals','criteria'=>"Condition ID"],
            ['fieldName'=>'outcomeType','operation'=>'equals','criteria'=>"Type"],
            ['fieldName'=>'outcomeDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'outcomeNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'intakeID','operation'=>'equals','criteria'=>"Intake ID"],
            ['fieldName'=>'intakeAnimalID','operation'=>'equals','criteria'=>"Animal ID"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'outcomeAnimalConditionName','operation'=>'equals','criteria'=>"Condition"],
        ];

        $translatedFields = [
            "outcomeID",
            "outcomeAnimalConditionID",
            "outcomeType",
            "outcomeDate",
            "outcomeNotes",
            "intakeID",
            "intakeAnimalID",
            "animalName",
            "outcomeAnimalConditionName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
