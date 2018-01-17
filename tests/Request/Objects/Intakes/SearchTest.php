<?php
/**
 * Intakes search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Intakes;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Intakes\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('intakeID')
            ->addFilter('intakeID', 'equals', 'Intake')
            ->addField('intakeOutcomeID')
            ->addFilter('intakeOutcomeID', 'equals', 'Outcome')
            ->addField('intakeAnimalID')
            ->addFilter('intakeAnimalID', 'equals', 'Animal')
            ->addField('intakeAnimalConditionID')
            ->addFilter('intakeAnimalConditionID', 'equals', 'Condition')
            ->addField('intakeType')
            ->addFilter('intakeType', 'equals', 'Type')
            ->addField('intakeDate')
            ->addFilter('intakeDate', 'equals', 'Date')
            ->addField('intakeNotes')
            ->addFilter('intakeNotes', 'equals', 'Notes')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakes', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakeID','operation'=>'equals','criteria'=>"Intake"],
            ['fieldName'=>'intakeOutcomeID','operation'=>'equals','criteria'=>"Outcome"],
            ['fieldName'=>'intakeAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakeAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakeType','operation'=>'equals','criteria'=>"Type"],
            ['fieldName'=>'intakeDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakeNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
        ];

        $translatedFields = [
            "intakeID",
            "intakeOutcomeID",
            "intakeAnimalID",
            "intakeAnimalConditionID",
            "intakeType",
            "intakeDate",
            "intakeNotes",
            "animalName",
            "animalConditionName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
