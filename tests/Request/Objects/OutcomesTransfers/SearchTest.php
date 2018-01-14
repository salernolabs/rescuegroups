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
            ->addField('outcomesTransferIntakeID')
            ->addField('outcomesTransferAnimalConditionID')
            ->addField('outcomesTransferDate')
            ->addField('outcomesTransferNotes')
            ->addField('outcomesTransferReceiveID')
            ->addField('outcomesTransferCoalitionMember')
            ->addField('outcomesTransferReasonID')
            ->addField('outcomesTransferReason')
            ->addField('animalID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('receiveName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesTransfers', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
