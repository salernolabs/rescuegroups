<?php
/**
 * OutcomesReturnToOwner search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReturnToOwner;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReturnToOwner\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('intakeID')
            ->addFilter('intakeID', 'equals', 'Outcome Returntoowner Intake')
            ->addField('animalConditionID')
            ->addFilter('animalConditionID', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('ownerID')
            ->addFilter('ownerID', 'equals', 'Return To')
            ->addField('animalID')
            ->addFilter('animalID', 'equals', 'Animal')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('returntoownerName')
            ->addFilter('returntoownerName', 'equals', 'Owner')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesReturntoowner', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'outcomesReturntoownerID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'outcomesReturntoownerIntakeID','operation'=>'equals','criteria'=>"Outcome Returntoowner Intake"],
            ['fieldName'=>'outcomesReturntoownerAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'outcomesReturntoownerDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'outcomesReturntoownerNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'outcomesReturntoownerOwnerID','operation'=>'equals','criteria'=>"Return To"],
            ['fieldName'=>'animalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'returntoownerName','operation'=>'equals','criteria'=>"Owner"],
        ];

        $translatedFields = [
            "outcomesReturntoownerID",
            "outcomesReturntoownerIntakeID",
            "outcomesReturntoownerAnimalConditionID",
            "outcomesReturntoownerDate",
            "outcomesReturntoownerNotes",
            "outcomesReturntoownerOwnerID",
            "animalID",
            "animalName",
            "animalConditionName",
            "returntoownerName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
