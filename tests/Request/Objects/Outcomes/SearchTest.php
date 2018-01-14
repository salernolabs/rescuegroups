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
            ->addField('outcomeID')
            ->addFilter('outcomeID', 'equals', 'Outcome ID')
            ->addField('outcomeAnimalConditionID')
            ->addFilter('outcomeAnimalConditionID', 'equals', 'Condition ID')
            ->addField('outcomeType')
            ->addFilter('outcomeType', 'equals', 'Type')
            ->addField('outcomeDate')
            ->addFilter('outcomeDate', 'equals', 'Date')
            ->addField('outcomeNotes')
            ->addFilter('outcomeNotes', 'equals', 'Notes')
            ->addField('intakeID')
            ->addFilter('intakeID', 'equals', 'Intake ID')
            ->addField('intakeAnimalID')
            ->addFilter('intakeAnimalID', 'equals', 'Animal ID')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('outcomeAnimalConditionName')
            ->addFilter('outcomeAnimalConditionName', 'equals', 'Condition')
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
