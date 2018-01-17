<?php
/**
 * OutcomesEuthanasias search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesEuthanasias;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('outcomesEuthanasiaID')
            ->addFilter('outcomesEuthanasiaID', 'equals', 'ID')
            ->addField('outcomesEuthanasiaIntakeID')
            ->addFilter('outcomesEuthanasiaIntakeID', 'equals', 'Outcome Euthanasia Intake')
            ->addField('outcomesEuthanasiaAnimalConditionID')
            ->addFilter('outcomesEuthanasiaAnimalConditionID', 'equals', 'Condition')
            ->addField('outcomesEuthanasiaDate')
            ->addFilter('outcomesEuthanasiaDate', 'equals', 'Date')
            ->addField('outcomesEuthanasiaNotes')
            ->addFilter('outcomesEuthanasiaNotes', 'equals', 'Notes')
            ->addField('outcomesEuthanasiaReasonID')
            ->addFilter('outcomesEuthanasiaReasonID', 'equals', 'Euthanasia Reason')
            ->addField('outcomesEuthanasiaReason')
            ->addFilter('outcomesEuthanasiaReason', 'equals', 'Euthanasia Reason')
            ->addField('animalID')
            ->addFilter('animalID', 'equals', 'Animal')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesEuthanasias', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'outcomesEuthanasiaID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'outcomesEuthanasiaIntakeID','operation'=>'equals','criteria'=>"Outcome Euthanasia Intake"],
            ['fieldName'=>'outcomesEuthanasiaAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'outcomesEuthanasiaDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'outcomesEuthanasiaNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'outcomesEuthanasiaReasonID','operation'=>'equals','criteria'=>"Euthanasia Reason"],
            ['fieldName'=>'outcomesEuthanasiaReason','operation'=>'equals','criteria'=>"Euthanasia Reason"],
            ['fieldName'=>'animalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
        ];

        $translatedFields = [
            "outcomesEuthanasiaID",
            "outcomesEuthanasiaIntakeID",
            "outcomesEuthanasiaAnimalConditionID",
            "outcomesEuthanasiaDate",
            "outcomesEuthanasiaNotes",
            "outcomesEuthanasiaReasonID",
            "outcomesEuthanasiaReason",
            "animalID",
            "animalName",
            "animalConditionName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
