<?php
/**
 * OutcomesTransfers search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesTransfers;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('intakeId')
            ->addFilter('intakeId', 'equals', 'Outcome Transfer Intake')
            ->addField('animalConditionId')
            ->addFilter('animalConditionId', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('receiveId')
            ->addFilter('receiveId', 'equals', 'Received')
            ->addField('coalitionMember')
            ->addFilter('coalitionMember', 'equals', 'Coalition Member')
            ->addField('reasonId')
            ->addFilter('reasonId', 'equals', 'Transfer Reason')
            ->addField('reason')
            ->addFilter('reason', 'equals', 'Transfer Reason')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('receiveName')
            ->addFilter('receiveName', 'equals', 'Receive Name')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesTransfers', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'outcomesTransferID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'outcomesTransferIntakeID','operation'=>'equals','criteria'=>"Outcome Transfer Intake"],
            ['fieldName'=>'outcomesTransferAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'outcomesTransferDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'outcomesTransferNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'outcomesTransferReceiveID','operation'=>'equals','criteria'=>"Received"],
            ['fieldName'=>'outcomesTransferCoalitionMember','operation'=>'equals','criteria'=>"Coalition Member"],
            ['fieldName'=>'outcomesTransferReasonID','operation'=>'equals','criteria'=>"Transfer Reason"],
            ['fieldName'=>'outcomesTransferReason','operation'=>'equals','criteria'=>"Transfer Reason"],
            ['fieldName'=>'animalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'receiveName','operation'=>'equals','criteria'=>"Receive Name"],
        ];

        $translatedFields = [
            "outcomesTransferID",
            "outcomesTransferIntakeID",
            "outcomesTransferAnimalConditionID",
            "outcomesTransferDate",
            "outcomesTransferNotes",
            "outcomesTransferReceiveID",
            "outcomesTransferCoalitionMember",
            "outcomesTransferReasonID",
            "outcomesTransferReason",
            "animalID",
            "animalName",
            "animalConditionName",
            "receiveName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
