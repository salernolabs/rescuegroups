<?php
/**
 * IntakesTransfers search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesTransfers;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesTransfers\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'Owner Surrender')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('animalConditionId')
            ->addFilter('animalConditionId', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('fromId')
            ->addFilter('fromId', 'equals', 'Transferred From')
            ->addField('coalitionMember')
            ->addFilter('coalitionMember', 'equals', 'Coalition Member')
            ->addField('reasonId')
            ->addFilter('reasonId', 'equals', 'Transfer Reason')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('transferFromName')
            ->addFilter('transferFromName', 'equals', 'Transfer From')
            ->addField('transferReason')
            ->addFilter('transferReason', 'equals', 'Transfer Reason')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesTransfers', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakesTransferID','operation'=>'equals','criteria'=>"Owner Surrender"],
            ['fieldName'=>'intakesTransferAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakesTransferAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakesTransferDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakesTransferNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'intakesTransferFromID','operation'=>'equals','criteria'=>"Transferred From"],
            ['fieldName'=>'intakesTransferCoalitionMember','operation'=>'equals','criteria'=>"Coalition Member"],
            ['fieldName'=>'intakesTransferReasonID','operation'=>'equals','criteria'=>"Transfer Reason"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'transferFromName','operation'=>'equals','criteria'=>"Transfer From"],
            ['fieldName'=>'transferReason','operation'=>'equals','criteria'=>"Transfer Reason"],
        ];

        $translatedFields = [
            "intakesTransferID",
            "intakesTransferAnimalID",
            "intakesTransferAnimalConditionID",
            "intakesTransferDate",
            "intakesTransferNotes",
            "intakesTransferFromID",
            "intakesTransferCoalitionMember",
            "intakesTransferReasonID",
            "animalName",
            "animalConditionName",
            "transferFromName",
            "transferReason",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
