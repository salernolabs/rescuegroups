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
            ->addField('outcomesTransferID')
            ->addFilter('outcomesTransferID', 'equals', 'ID')
            ->addField('outcomesTransferIntakeID')
            ->addFilter('outcomesTransferIntakeID', 'equals', 'Outcome Transfer Intake')
            ->addField('outcomesTransferAnimalConditionID')
            ->addFilter('outcomesTransferAnimalConditionID', 'equals', 'Condition')
            ->addField('outcomesTransferDate')
            ->addFilter('outcomesTransferDate', 'equals', 'Date')
            ->addField('outcomesTransferNotes')
            ->addFilter('outcomesTransferNotes', 'equals', 'Notes')
            ->addField('outcomesTransferReceiveID')
            ->addFilter('outcomesTransferReceiveID', 'equals', 'Received')
            ->addField('outcomesTransferCoalitionMember')
            ->addFilter('outcomesTransferCoalitionMember', 'equals', 'Coalition Member')
            ->addField('outcomesTransferReasonID')
            ->addFilter('outcomesTransferReasonID', 'equals', 'Transfer Reason')
            ->addField('outcomesTransferReason')
            ->addFilter('outcomesTransferReason', 'equals', 'Transfer Reason')
            ->addField('animalID')
            ->addFilter('animalID', 'equals', 'Animal')
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
